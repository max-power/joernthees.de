<article id="<?php echo $page->name ?>" class="work film" itemscope itemtype="http://schema.org/Movie">
  <figure><img src="<?php echo $page->poster_image->size(720, 405, $options)->url ?>"></figure>
  <div class="work-info">
    <div class="table"><div class="table-cell">
      
      <p class="what">Film</p>
      <h1 itemprop="name"><?php echo $page->title; ?></h1>
            
      <ul>
        
        <li class="action">
          <?php if ($page->vimeo_id): ?>
            <a class="button play" href="http://vimeo.com/<?php echo $page->vimeo_id ?>" data-vimeo-id="<?php echo $page->vimeo_id ?>">&#9654;</a>
          <?php endif; ?>
        </li>
        
        <li itemprop="director" itemscope itemtype="http://schema.org/Person">
          <b>Regie</b>
          <span itemprop="name"><?php echo $page->director; ?></span>
        </li>
        
        <li>
          <b>Genre</b>
          <span itemprop="genre"><?php echo $page->genre ?></span>
        </li>
        
        <li>
          <b>Informationen</b>
          <span><?php echo $page->medium ?></span>,
          <span itemprop="duration"><?php echo $page->duration ?> Min.</span>
          (<span itemprop="copyrightYear"><?php echo $page->year ?></span>)
        </li>

      </ul>
      
    </div></div>
  </div>
</article>
