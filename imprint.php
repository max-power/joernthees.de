<?php 
  $homepage = $pages->get('/');
  include('./head.inc' );
?>

  <section class="page" id="<?php echo $page->name; ?>">
    <div class="wrap">
      <header>
        <h1><?php echo $page->get('headline|title') ?></h1>
      </header>
      
      <h2>Angaben gemäß § 5 TMG</h2>
      
      <div itemscope itemtype="http://schema.org/Person">
        <p>
          <span itemprop="name"><?php echo $homepage->title; ?></span>
          <br><span itemprop="address"><?php echo nl2br($homepage->address) ?></span>
        </p>
        
        <p>
          Telefon: <span itemprop="telephone"><?php echo $homepage->telephone; ?></span>
          <br>E-Mail: <span itemprop="email"><?php echo $homepage->contact_email; ?></span>
          <br>Internet: <span itemprop="url">http://joernthees.de</span>
        </p>
      </div>
      
      <?php echo $page->body ?>
      
    </div>
  </section>
  
  <footer>
      <div class="wrap">
          <small><a href="/">Home</a></small>
      </div>
  </footer>

<?php include('./foot.inc') ?>