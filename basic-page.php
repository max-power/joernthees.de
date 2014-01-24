<?php 
  $homepage = $pages->get('/');
  include('./head.inc' );
?>

  <section class="page" id="<?php echo $page->name; ?>">
    <div class="wrap">
      <header>
        <h1><?php echo $page->get('headline|title') ?></h1>
      </header>
      <?php echo $page->body ?>
    </div>
  </section>
  
  <footer>
      <div class="wrap">
          <small><a href="/">Home</a></small>
      </div>
  </footer>

<?php include('./foot.inc') ?>