<?php $homepage = $pages->get('/') ?>
<section class="works" id="<?php echo $page->name; ?>">
  <div class="wrap">
    <header class="joern" style="background-image:url(<?php echo $homepage->joern_head->first->url; ?>)"></header>
    <div id="tv" class="tv">
      <?php foreach($page->children as $child) { echo $child->render(); } ?>
    </div>
    <footer class="joern" style="background-image:url(<?php echo $homepage->joern_feet->first->url; ?>)"></footer>
  </div>
</section>

<hr>