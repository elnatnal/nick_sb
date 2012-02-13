			<footer role="contentinfo" class="footer">
				<div id="top" class="wrap clearfix">
					<div id="recent-blog-posts">
						<h4>Recent Blog Posts</h4>
						<?php
						//display 2 posts for category id 47
						    $args=array(
						      'post_type' => 'post',
						      'post_status' => 'publish',
						      'posts_per_page' => 2,
						      'caller_get_posts'=> 1
						      );
						    $my_query = null;
						    $my_query = new WP_Query($args);
						    if( $my_query->have_posts() ) {
						      while ($my_query->have_posts()) : $my_query->the_post(); ?>
						      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						<p><?php echo substr(get_the_excerpt(), 0,140); ?></p>
							<hr />
						       <?php
						      endwhile;
						    }
						wp_reset_query();  // Restore global post data stomped by the_post().
						?>		

						
						<p class="button"><a href="<?php site_url(); ?>/blog">View all blog posts</a></p>
					</div>
			
					<div id="tweet-feed">
						<h4>Recent Tweets</h4>
						<div class="recent-tweets">
							<ul id="twitter_update_list">
								<li>&nbsp;</li>
							</ul>
						</div>					
					</div>
				
				
					<div id="social">
						<h4>Get in touch</h4>
						<ul>
							<li class="twitter"><a href="http://twitter.com/nick_sb">Twitter</a></li>
							<li class="facebook"><a href="http://facebook.com/nickjordan99">Facebook</a></li>
							<li class="linkedin"><a href="http://www.linkedin.com/profile/view?id=20902507&trk=tab_pro">LinkedIn</a></li>
							<li class="skype"><a href="skype:nick.jordan.1?call">Skype</a></li>
							<li class="email"><a href="mailto:nick@smashingboxes.com">Email</a></li>
						</ul>								
					</div>
				</div>
				
				<div id="bottom" class="wrap clearfix">
					<p class="attribution">Copyright &copy; 2012 &ndash; <?php bloginfo('name'); ?></p>
					<nav>
						<ul>
							<li><a href="<?php site_url(); ?>">Home</a></li>
							<li><a class="scc" href="<?php site_url(); ?>#about">About</a></li>
							<li><a class="sca" href="<?php site_url(); ?>#contact">Contact</a></li>
							<li><a href="<?php site_url(); ?>/blog">Blog</a></li>
						</ul>
					</nav>
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/nick_sb.json?callback=twitterCallback2&count=3"></script>
		<!-- prompt for Google Chrome Frame for IE6 users -->
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
	        <script type="text/javascript">
	            $(document).ready(function(){
	                $("a.scc, a.sca").click(function(e) {
					  e.preventDefault();

					  var target = $(this).attr("href");

					  $("html, body").animate({ scrollTop: $(target).offset().top - 100 });
					});
				});
	        </script>
	    </head>
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>