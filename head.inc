<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title><?php echo $homepage->title; ?> - <?php echo $homepage->headline; ?></title>

	<meta name="description" content="<?php echo $homepage->summary; ?>" />
	<meta name="generator" content="ProcessWire <?php echo $config->version; ?>" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="msapplication-TileColor" content="#02F0A0">
  <meta name="msapplication-TileImage" content="<?php echo $config->urls->templates?>images/favicon-144.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo $config->urls->templates?>images/favicon-152.png">
  <link rel="icon" type="image/png" href="<?php echo $config->urls->templates?>images/favicon-32.png">
  
  <link href='http://fonts.googleapis.com/css?family=Raleway:200,500|Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/joern.css" />
  <script type="text/javascript" src="<?php echo $config->urls->templates?>js/joern.js"></script>
  <?php if ($homepage->color): ?>
  <style type="text/css" media="screen">
  a, a:hover, .header h1, .languages a.on, .error header h1, .work-info .button.play:hover { color: #<?php echo $homepage->color ?>; }
  hr, .button, .tv-bullets li.on, .works footer.joern { background-color: #<?php echo $homepage->color ?>; }
  ::-moz-selection { background-color: #<?php echo $homepage->color ?>; }
  ::selection { background-color: #<?php echo $homepage->color ?>; }
  </style>
  <?php endif; ?>
</head>
<body data-color="<?php echo $homepage->color ?>">
  
  <header class="header" itemscope itemtype="http://schema.org/Person">
    <div class="wrap">
      <h1 itemprop="name"><?php echo $homepage->title; ?></h1>
      <h2 itemprop="jobTitle"><?php echo $homepage->headline; ?></h2>
    </div>
    <hr>
  </header>  