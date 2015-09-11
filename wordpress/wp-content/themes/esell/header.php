<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
<!-- BEGIN HEADER -->
	<div id="header">  
    <div id="header-inner" class="clearfix">
      <div id="logo">
			<img src="images/header.png" width="1117" height="150">	
		</div>
		
</div> 
	<!-- BEGIN TOP NAVIGATION -->		
	<div id="navigation" class="nav"> 
    <div id="navigation-inner" class="clearfix">
	<div class="secondary">		<?php wp_nav_menu(array('container' => '', 'theme_location' => 'esell-navigation', 'fallback_cb' => 'esell_hdmenu')); ?>
		</div>
	
		</div></div>