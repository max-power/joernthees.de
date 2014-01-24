<section class="works" id="<?php echo $page->name; ?>">
  <div class="wrap">
    <header class="joern"></header>
    <div id="tv" class="tv">
      <?php foreach($page->children as $child) { echo $child->render(); } ?>
    </div>
    <footer class="joern"></footer>
  </div>
</section>

<hr>