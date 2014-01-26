<?php 
  
  $homepage = $page;
  include('./head.inc' );
?>

<?php foreach($page->children as $child) { echo $child->render(); } ?>

<article id="<?php echo $page->name; ?>">
  <div class="wrap">
    <?php
      $_navi = '';
      $_text = '';

      // save the user's language
      $_tmp_lang = $user->language;

      foreach($languages as $lang) {
        // check if page not published for this language
        if (!$page->viewable($lang)) continue;

        $user->language = $lang;
        $iso_code = $lang->name=='default' ? 'de' : $lang->name;

        //$_navi .= "<li><a href=\"#text-{$iso_code}\" lang=\"{$iso_code}\">{$lang->title}</a>";
        $_text .= "<div lang=\"{$iso_code}\" title=\"{$lang->title}\" id=\"text-{$iso_code}\">{$page->text}</div>";
      }

      // restore the user's language
      $user->language = $_tmp_lang;

    ?>

    <div class="text-content translateable-content"><?php echo $_text; ?></div>
    
    <!-- ICONS -->
    <svg id="svg-source" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute">
      <g id="pin" data-iconmelon="Icon Set:1d0ce0919b5a1baf933bb129abee519d">
        <path d="M28,12.142C28,5.436,22.627,0,16,0S4,5.436,4,12.142c0,0.047,0.006,0.092,0.007,0.139C4,12.599,4.004,12.948,4.029,13.356c0.342,5.592,6.985,14.184,10.156,17.989c0.031-0.027,0.067-0.048,0.1-0.074C14.658,31.71,15.295,32,16.021,32c1.021,0,1.866-0.572,2.047-1.328c2.35-2.857,5.993-7.625,8.074-12.061C27.312,16.737,28,14.523,28,12.142z M16.002,17.005c-2.761,0-4.998-2.241-4.998-5.006s2.237-5.006,4.998-5.006S21,9.234,21,11.999S18.763,17.005,16.002,17.005z"></path>
      </g>
      <g id="letter" data-iconmelon="Icon Set:ea294e6307f0c7ed1e1377507a7d650b">
        <path d="M29,26H3c-1.104,0-2-0.896-2-2V8c0-1.104,0.896-2,2-2h26c1.104,0,2,0.896,2,2v16C31,25.104,30.104,26,29,26z M3.527,23.431c0.245,0,0.463-0.099,0.631-0.251l0.063,0.072l8.163-5.005l-1.619-1.257l-7.497,4.598c-0.394,0.114-0.688,0.464-0.688,0.896C2.58,23.006,3.005,23.431,3.527,23.431z M28.434,7.816c-0.178,0-0.336,0.063-0.479,0.149l-0.024-0.03l-10.646,6.528c-0.718,0.44-1.881,0.44-2.598,0L4.061,7.947L4.031,7.982C3.883,7.887,3.717,7.816,3.527,7.816c-0.522,0-0.947,0.425-0.947,0.948c0,0.255,0.104,0.485,0.269,0.655L2.83,9.442l11.857,7.271c0.717,0.439,1.88,0.439,2.598,0L29.16,9.431l-0.029-0.036c0.152-0.168,0.251-0.386,0.251-0.63C29.382,8.241,28.957,7.816,28.434,7.816z M29.057,21.781l0.007-0.007l-0.19-0.117c-0.027-0.015-0.051-0.037-0.08-0.05l-7.527-4.615l-1.619,1.256l8.143,4.993l0.039-0.046c0.165,0.141,0.372,0.235,0.605,0.235c0.523,0,0.948-0.425,0.948-0.947C29.382,22.201,29.253,21.955,29.057,21.781z"></path>
      </g>
      <g id="handset" data-iconmelon="Icon Set:074ced5cb758ad4b8420c84206d80a33">
        <path d="M29.299,22.938l-5.91-3.346c-0.653-0.371-1.573-0.104-2.068,0.613l-0.871,1.262c0,0.002-0.001,0.002-0.002,0.002c-0.389,0.588-1.68,1.861-3.771,0.096c-0.014-0.012-0.025-0.016-0.039-0.027c-0.653-0.512-1.309-1.061-1.965-1.633c-1.493-1.482-2.854-2.998-4.049-4.495c-0.011-0.013-0.014-0.023-0.024-0.036c-1.796-2.092-0.484-3.395,0.117-3.788c0.002-0.001,0.002-0.003,0.004-0.004l1.294-0.88c0.737-0.501,1.014-1.427,0.638-2.082L9.262,2.698C8.888,2.044,7.945,1.805,7.133,2.173L5.596,2.87C5.51,2.909,5.433,2.957,5.355,3.004C3.849,3.747,2.931,4.789,2.79,5.013C2.772,5.04,2.771,5.07,2.778,5.105C0.511,7.892,3.584,15.743,9.656,21.732c6.064,6.438,14.408,9.818,17.279,7.531c0.035,0.008,0.064,0.006,0.092-0.012c0.223-0.137,1.257-1.031,1.988-2.502c0.047-0.074,0.093-0.148,0.131-0.23l0.686-1.5C30.193,24.229,29.951,23.307,29.299,22.938z"></path>
      </g>
    </svg>
    <!-- ICONS -->
  
    <ul class="contact">
      <li>
        <a class="button email" href="mailto:<?php echo $page->contact_email; ?>?subject=Hi">
          <span class="iconmelon"><svg viewBox="0 0 32 32"><g filter=""><use xlink:href="#letter"></use></g></svg></span>
          <span itemprop="email"><?php echo $page->contact_email; ?></span>
        </a>
      </li>
      <li>
        <a class="button phone" href="tel:<?php echo str_replace(' ', '', $page->telephone); ?>">
          <span class="iconmelon"><svg viewBox="0 0 32 32"><g filter=""><use xlink:href="#handset"></use></g></svg></span>
          <span itemprop="telephone"><?php echo $page->telephone; ?></span>
        </a>
      </li>
      <?php if ( $page->current_location): ?>
      <li>
        <span class="fake-button">
          <span class="iconmelon"><svg viewBox="0 0 32 32"><g filter=""><use xlink:href="#pin"></use></g></svg></span>
          <?php echo $page->current_location; ?>
        </span>
      </li>
      <?php endif; ?>
    </ul>

  </div>
</article>

<footer>
    <div class="wrap">
        <small><a href="/impressum/">Impressum</a></small>
    </div>
</footer>
  
<?php include('./foot.inc') ?>