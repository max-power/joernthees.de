<?php 
  $homepage = $pages->get('/');
  include('./head.inc' );
?>

  <section class="error" id="<?php echo $page->name; ?>">
    <div class="wrap">
      <header>
        <h1><?php echo $page->title ?></h1>
        <h2><?php echo $page->headline ?></h2>
      </header>
      <?php echo $page->body ?>
    </div>
  </section>

<?php include('./foot.inc') ?>