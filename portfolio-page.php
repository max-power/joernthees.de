<?php $homepage = $pages->get('/') ?>

<section class="works" id="<?php echo $page->name; ?>">
  <div class="wrap" id="joern">
    <header class="joern" style="background-image:url(<?php echo $homepage->joern_head->first->url; ?>)"></header>
    <div id="tv" class="tv">
      <div class="tube">
        <?php foreach($page->children as $child) { echo $child->render(); } ?>
      </div>
    </div>
    <footer class="joern" style="background-image:url(<?php echo $homepage->joern_feet->first->url; ?>)"></footer>
  </div>
</section>

<hr>