<article id="<?php echo $page->name ?>" class="work commercial" data-vimeo-id="<?php echo $page->vimeo_id ?>" itemscope itemtype="http://schema.org/Movie">
  <figure><img src="<?php echo $page->poster_image->size(720, 405, $options)->url ?>"></figure>
  <div class="work-info">
    <div class="table"><div class="table-cell">
      
      <h1 itemprop="name"><?php echo $page->title; ?></h1>
      
      <?php if ($page->vimeo_id): ?>
        <a class="button play" href="http://vimeo.com/<?php echo $page->vimeo_id ?>" data-vimeo-id="<?php echo $page->vimeo_id ?>"><b>Watch</b></a>
      <?php endif; ?>
      
      <ul>
        
        <li itemprop="director" itemscope itemtype="http://schema.org/Person">
          <b>Regie</b>
          <span itemprop="name"><?php echo $page->director; ?></span>
        </li>
        
        <li itemprop="sourceOrganization publisher" itemscope itemtype="http://schema.org/Organization">
          <b>Kunde</b>
          <span itemprop="name"><?php echo $page->client; ?></span>
        </li>
        
        <li itemprop="productionCompany" itemscope itemtype="http://schema.org/Organization">
          <b>Agentur</b>
          <span itemprop="name"><?php echo $page->agency; ?></span>
        </li>

      </ul>

    </div></div>
  </div>
    

    <!--
    <?php if ($page->vimeo_id): ?>
    <div itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
      <iframe  src="//player.vimeo.com/video/<?php echo $page->vimeo_id ?>?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=fdd309" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <?php endif ?>
    -->
</article>
