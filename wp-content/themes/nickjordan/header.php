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
				
		<!-- mobile optimized -->
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<!-- IE6 toolbar removal -->
		<meta http-equiv="imagetoolbar" content="false" />
		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		
		<!-- normalize, mixins, & mobile stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/base.css">		
		
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
		<script lang="javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.tweet.js" media="all" rel="stylesheet" type="text/js"/></script>

		<!-- modernizr (without media query polyfill) -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
		
  		<script type="text/javascript" src="http://use.typekit.com/czs3vvt.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

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
			<header role="banner" class="header fixed">
				<div id="top-header" class="wrap clearfix">
					<h1 id="logo" class="h1 clearfix"><a href="<?php echo site_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
				
					<nav role="navigation" class="nav">
							<?php if (is_front_page()) { ?>

								<ul>
									<li><a href="<?php echo site_url(); ?>/blog">Blog</a></li>
									<li><a class="scc" href="#contact">Contact</a></li>
									<li><a class="sca" href="#about">About</a></li>
								</ul>

							<?php } else { ?>
								
								<ul>
									<li><a href="<?php echo site_url(); ?>/blog">Blog</a></li>
									<li><a class="scc" href="http://nickmjordan.com/#contact">Contact</a></li>
									<li><a class="sca" href="http://nickmjordan.com/#about">About</a></li>
								</ul>

							<?php } ?>
					</nav>										
				</div>
			</header>
				<!-- end #top-header -->
			
			<div id="bottom-header" class="clearfix">
					<?php if (is_front_page()) { ?>

			            <section id="home" class="content clearfix">
			            <hgroup  class="wrap banner">
			                <h1>I’m Nick Jordan, a Technology Entrepreneur in Durham, North Carolina</h1>		
							<h2>I build companies and help them grow. I also help companies and startups leverage technology to improve their business.</h2>
			            </hgroup>
						
						<a href="#about" class="readmore"><img src="<?php echo get_template_directory_uri(); ?>/library/images/readmore-tab.png"></a>
				
					<?php } else { ?>

					<section  id="blog" class="content clearfix">
				    	<hgroup class="wrap banner">
					        <h1>Blog</h1>		
					    </hgroup>
			        <?php } ?>
			</div> <!-- end #bottom-header -->
			
			
			</header> <!-- end header -->
		
		<div id="container">
		
