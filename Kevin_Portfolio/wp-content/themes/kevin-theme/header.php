<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Kevin's Portfolio</title>
	
	
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile.css?<?php echo time(); ?>" media="only screen and (max-width: 768px)" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css?<?php echo time(); ?>" />
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Abel|Courgette&display=swap" rel="stylesheet">

	
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<header>

    <div id="logo-container">

    	<a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/backgroud-with-Logo-1-1024x513.png" alt="logo" width="auto" height="140em"></a>

    </div>
</header>
<nav>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	
</nav>

<div id="nav-border"> </div>
