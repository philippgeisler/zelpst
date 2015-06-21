<!DOCTYPE html>
<html lang="<?php ecco($page->lang() == '', 'de', $page->lang()) ?>" />
<head>
    <!-- header.php -->
    <?php // $spielkram = array(': verschuldet', ': Sicherheit', '-made', ': zufrieden', '… (vergessen)', ': „Los!“'); $wort = $spielkram[rand(0,5)]; ?>
	<title><?php ecco($page->title() == 'Zuhause',
                      html($site->title()), // . $wort,
                      html($site->title()) . ': ' . html($page->title())) ?>
    </title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<!-- meta name="keywords" content="< ?php echo html($site->keywords()) ?>" /-->
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
   
    <!-- DEBUG (disable caching)
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="-1">
    <!-- END DEBUG -->
    
    <link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <?php echo css('assets/css/reset.css') ?>
    <?php echo css('assets/css/featherlight.min.css') ?>
    <?php echo css('assets/css/screen.css') ?>

    <link rel="alternate" type="application/rss+xml" href="<?php echo url('blog/feed') ?>" title="Blog Feed" />
</head>
<body>
		<header>
			<h1>
         
          <?php echo '<a href="' . url() . '">';
                  $fonts = array('ZXX_Camo', 'ZXX_False', 'ZXX_Noise', 'ZXX_Xed');
                  $letters = array('Z','3','L','P','S','T');
                  foreach ($letters as $letter)
                         echo '<span ' .
              // ($letter == '3' ? 'class="flipped" ' : '') . 
              'style="font-family: ' . $fonts[rand(0,3)] . ';"">' . $letter . '</span>';
            echo '</a>';
          ?>
      			</h1>
		</header>
