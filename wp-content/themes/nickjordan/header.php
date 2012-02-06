<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- meta tags should be handled by SEO plugin. I reccomend (http://yoast.com/wordpress/seo/) -->
		
		<!-- mobile optimized -->
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<!-- IE6 toolbar removal -->
		<meta http-equiv="imagetoolbar" content="false" />
		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<!-- normalize, mixins, & mobile stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/base.css">		
		
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
		
		<!-- modernizr (without media query polyfill) -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<!-- responsive stylesheet for those browsers that can read it -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.css" media="(min-width:481px)">	
		
		<!-- load all styles for IE -->
		<!--[if (lt IE 9) & (!IEMobile)]>
    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<!--[endif]-->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header role="banner" class="header">
			
				<div id="inner-header" class="wrap clearfix">
				
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
					
					<nav role="navigation" class="nav">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->
