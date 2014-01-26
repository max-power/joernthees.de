<article id="<?php echo $page->name ?>" class="work commercial" data-vimeo-id="<?php echo $page->vimeo_id ?>" itemscope itemtype="http://schema.org/Movie">
  <figure><img src="<?php echo $page->poster_image->size(720, 405, $options)->url ?>"></figure>
  <div class="work-info">
    <div class="table"><div class="table-cell">

      <p class="what">Commercial</p>
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
</article>
