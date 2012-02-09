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
		<script lang="javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.tweet.js" media="all" rel="stylesheet" type="text/js"/></script>

		<!-- modernizr (without media query polyfill) -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<!-- responsive stylesheet for those browsers that can read it -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.css" media="(min-width:481px)">	
		<link href="<?php echo get_template_directory_uri(); ?>/library/css/jquery.tweet.css" media="all" rel="stylesheet" type="text/css"/>
		
<!--		<script type="text/javascript">
      jQuery(function($){
        $(".tweet").tweet({
          join_text: "auto",
          username: "seaofclouds",
          avatar_size: 48,
          count: 3,
          auto_join_text_default: "we said,",
          auto_join_text_ed: "we",
          auto_join_text_ing: "we were",
          auto_join_text_reply: "we replied",
          auto_join_text_url: "we were checking out",
          loading_text: "loading tweets..."
        });
      });
</script>		
-->
		
		<!-- load all styles for IE -->
		<!--[if (lt IE 9) & (!IEMobile)]>
    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<!--[endif]-->
		
	</head>
	
	<body <?php body_class(); ?>>
			<header role="banner" class="header fixed">
				<div id="top-header" class="wrap clearfix">
					<h1 id="logo" class="h1 clearfix"><a href="<?php echo site_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
				
					<nav role="navigation" class="nav">
							<ul>
								<li><a href="<?php echo site_url(); ?>/blog">Blog</a></li>
								<li><a class="scc" href="<?php site_url(); ?>#contact">Contact</a></li>
								<li><a class="sca" href="<?php site_url(); ?>#about">About</a></li>
							</ul>
					</nav>										
				</div>
			</header>
				<!-- end #top-header -->
			
			<div id="bottom-header" class="clearfix">
					<?php if (is_front_page()) { ?>

			            <section id="home" class="content clearfix">
			            <hgroup  class="wrap banner">
			                <h1>I'm Nick Jordan</h1>		
							<h2>I'm a technology entrepreneur in Durham, N.C.</h2>
			            </hgroup>
				
					<?php } else { ?>

					<section  id="blog" class="content clearfix">
				    	<hgroup class="wrap banner">
					        <h1>Blog</h1>		
					    </hgroup>
			        <?php } ?>
			</div> <!-- end #bottom-header -->
			
			
			</header> <!-- end header -->
		
		<div id="container">
		
