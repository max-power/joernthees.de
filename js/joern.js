var TranslationTabs = function(parent_element) {
  this.el = parent_element
  this.translations = {}
  this.navigations  = {}
  this.findTranslations()
  this.createNavigation()
  this.toggle(this.lang, true)
}

TranslationTabs.prototype.findTranslations = function(){
  var found = this.el.querySelectorAll('[lang]')
  for(var i=0,node;node=found[i];i++) {
    if (i==0) this.lang = node.lang
    this.translations[node.lang] = node
    this.navigations[node.lang] = this.createElement('a', { lang: node.lang, content: node.getAttribute('title') })
    node.classList.add('hidden')
  }
}

TranslationTabs.prototype.createNavigation = function(){
  this.nav = this.createElement('div', {class: 'languages'})
  for(var lang in this.navigations) { 
    this.nav.appendChild(this.navigations[lang]) 
  }
  this.nav.addEventListener('click', this.delegateClick.bind(this))
  this.el.parentNode.insertBefore(this.nav, this.el)
}

TranslationTabs.prototype.delegateClick = function(e){
  if(e.target && e.target.nodeName == "A") {
    e.preventDefault()
    if (e.target.lang==this.lang) return;
    this.toggle(this.lang, false)
    this.lang = e.target.lang
    this.toggle(this.lang, true)
  }
}

TranslationTabs.prototype.toggle = function(lang, display){
  this.translations[lang].classList.toggle('hidden', !display)
  this.navigations[lang].classList.toggle('on', display)
}

TranslationTabs.prototype.createElement = function(tag_name, options){
  var el = document.createElement(tag_name)
  options.lang && el.setAttribute('lang', options.lang)
  options.class && el.classList.add(options.class)
  options.content && (el.innerHTML = options.content)
  return el
}



var TV = function(el) {
  this.el = el
  this.channels = this.el.querySelectorAll('.work')
  for (i=0;i<this.channels.length;i++) this.channels.item(i).classList.add('hidden')
  
  this.el.addEventListener('mouseover', this.stopPlaying.bind(this), false)
  this.el.addEventListener('mouseenter', this.stopPlaying.bind(this), false)
  this.el.addEventListener('mouseleave', this.startPlaying.bind(this), false)
  
  this.createButtons()
  
  this.goto(0)
  this.play()
}

TV.prototype.goto = function(i){
  return this.transition(false).setIndex(i).transition(true)
}
TV.prototype.next = function() { return this.goto(this.index + 1) }
TV.prototype.prev = function() { return this.goto(this.index - 1) }

TV.prototype.setIndex = function(num){
  var max = this.channels.length - 1
  this.index = num > max ? 0 : (num < 0 ? max : num)
  return this
}

TV.prototype.transition = function(display) {
  this.channels.item(this.index).classList.toggle('hidden', !display)
  this.el.querySelectorAll('.tv-bullets > li').item(this.index).classList.toggle('on', display)
  return this
}

TV.prototype.channel = function(index) {
  return this.channels.item(index || this.index)
}

TV.prototype.play = function() {
  this.wasPlaying = false
  this.timer = setInterval(this.next.bind(this), 700)
  return this
}

TV.prototype.stop = function() {
  this.timer && clearInterval(this.timer)
  this.timer = undefined
  return this
}


TV.prototype.stopPlaying = function() {
  if (this.timer) {
    this.wasPlaying = true
    this.stop()
  }
}

TV.prototype.startPlaying = function() {
  if (this.wasPlaying) {
    this.play()    
  }
}

TV.prototype.createButtons = function() {
  var ul=document.createElement('ul')
  ul.classList.add('tv-bullets')
  for (i=0;i<this.channels.length;i++) {
    li=document.createElement('li')
    li.setAttribute('data-item', i)
    ul.appendChild(li)
  }
  this.el.appendChild(ul)
  this.el.addEventListener('click', this.changeChannel.bind(this))
}

TV.prototype.changeChannel = function(e) {
  t = e.target
  if(t && t.nodeName == "LI" && t.hasAttribute('data-item')) {
    this.goto(t.getAttribute('data-item'))
  }
}


var Cinema = function(vimeo_id, color) {
  this.destroyFn = this.destroy.bind(this)  
  this.el = document.createElement('div')
  this.el.setAttribute('id', 'cinema')
  this.el.innerHTML = '<div class="close"></div><div class="table-cell"><iframe width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>'
  this.el.addEventListener('click', this.destroyFn, false)
  this.insertMovieRoll(vimeo_id, color)
  document.body.appendChild(this.el)
}

Cinema.prototype.destroy = function(){
  this.el.removeEventListener('click', this.destroyFn, false)
  this.el.parentNode.removeChild(this.el)
}

Cinema.prototype.insertMovieRoll = function(id, color) {
  this.el.querySelector('iframe').setAttribute('src', '//player.vimeo.com/video/'+id+'?title=0&byline=0&portrait=0&badge=0&color='+color)
}


document.addEventListener('DOMContentLoaded', function(){
  var tv = new TV(document.getElementById('tv'))
  var tt = new TranslationTabs(document.querySelector('.translateable-content'))
})

document.addEventListener('click', function(e){
  var t = e.target 
  if(t && t.nodeName == "A" && t.hasAttribute('data-vimeo-id')) {
    e.preventDefault()
    new Cinema(t.getAttribute('data-vimeo-id'), document.body.getAttribute('data-color'))
  }
})
