<?php get_header(); ?>
			
			<?php if (is_front_page()) { ?>
				<div id="content" class="frontpage">
			<?php } else { ?>
				<div id="content">
	        <?php } ?>
			
		
			
				<div id="inner-content" class="clearfix">
				<div class="wrap">
					<div id="main" class="left first clearfix" role="main">
											
					<section id="about">
						<div class="left-column">
							<h4>A bit more</h4>
							<section>
									<p>I provide strategic technology consulting as well as implementation and software development for startups and large companies alike through my company, <a href="http://smashingboxes.com">Smashing Boxes</a>, and am a partner, co-founder, investor, or board member in several other Durham Startups.</p>
								<blockquote>My experience lies in business development, product strategy and growth hacking</blockquote>
								<p>I live in Durham with my amazing wife, son, dog, and two cats. I am a UNC-Chapel Hill alumni, where I studied finance and economics, and played on the 2001 National Champion Men’s Soccer Team.</p>	
							</section>						
						</div>
						
						
						<div class="right-column">
							<section class="startups">
								<h4>Current Start&ndash;ups</h4>
								<a class="smashingboxes" href="http://smashingboxes.com"><img src="<?php echo get_template_directory_uri(); ?>/library/images/smashingboxes.png"></a>
								<a class="getzeek" href="http://getzeek"><img src="<?php echo get_template_directory_uri(); ?>/library/images/getzeek.png"></a>
								<a class="comingsoon firstcs" href="http://smashingboxes.com"><img src="<?php echo get_template_directory_uri(); ?>/library/images/comingsoon.png"></a>
								<a class="comingsoon secondcs" href="http://smashingboxes.com"><img src="<?php echo get_template_directory_uri(); ?>/library/images/comingsoon.png"></a>
								
							</section>
							
							<section class="clients">
								<h4>Companies I've worked with</h4>
								<a class="cbc" href="http://cbc-raleigh.com"><img src="<?php echo get_template_directory_uri(); ?>/library/images/cbc.png"></a>
								
								<div class="client-right-column">
									<a class="sony" href="http://sony.com"><img src="<?php echo get_template_directory_uri(); ?>/library/images/sony.png"></a>
									<a class="alphamed" href="http://alphamedpress.com"><img src="<?php echo get_template_directory_uri(); ?>/library/images/alphamedpress.png"></a>
									<a class="groundworklabs" href="http://groundworklabs.com"><img src="<?php echo get_template_directory_uri(); ?>/library/images/groundwork.png"></a>
									
								</div>
							</section>	
										
						</div>
					</section> 
					<a href="#contact" class="readmore-contact"><img src="<?php echo get_template_directory_uri(); ?>/library/images/readmore-tab.png"></a>

					</div>

					</div>
					
					<section id="contact">
						<div class="wrap">
						<header>
							<hgroup>
								<h1 class="contact-title" itemprop="headline">Contact Information</h1>	
								<h2 class="subhead">If you are interested in working together, in one way or another, please find and connect with me.</h2>	
							</hgroup>				
						</header>
						<ul>
							<li>
								<a class="twitter" href="http://twitter.com/nick_sb/">Twitter</a>
							</li>
							
							<li>
								<a class="facebook" href="http://facebook.com/nickjordan99/">Facebook</a>

							</li>
							
							<li>
								<a class="linkedin" href="http://www.linkedin.com/profile/view?id=20902507&trk=tab_pro  ">LinkedIn</a>
							</li>

							<li>
								<a class="skype" href="skype:nick.jordan.1?call">Skype</a>
							</li>
							
							<li>
								<a class="mail" href="mailto:nick@smashingboxes.com">Mail</a>
							</li>
						</ul>

						<footer>			
						</footer> <!-- end article footer -->
										
					</section>
					</div>
					</div> <!-- end #main -->
    			    			
    			</div> <!-- #inner-content -->
    			
			</div> <!-- end #content -->

<?php get_footer(); ?>