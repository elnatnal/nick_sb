			<footer role="contentinfo" class="footer">
				<div id="top" class="wrap clearfix">
					<div id="recent-blog-posts">
						<h4>Recent Blog Posts</h4>
						<p>Content Content</p>						
						<hr>						
						<p>Content Content</p>
						
						<p class="button"><a href="<?php site_url(); ?>/blog">View all blog posts</a></p>
					</div>
			
					<div id="tweet-feed">
						<h4>Recent Tweets</h4>
						<div class="tweet"></div>
					</div>
				
				
					<div id="social">
						<h4>Get in touch with me</h4>
						<ul>
							<li><a href="http://twitter.com/nick_sb">Twitter</a></li>
							<li><a href="http://facebook.com/nickjordan99">Facebook</a></li>
							<li><a href="http://www.linkedin.com/profile/view?id=20902507&trk=tab_pro">LinkedIn</a></li>
							<li><a href="skype:nick.jordan.1?call">Skype</a></li>
							<li><a href="mailto:nick@smashingboxes.com">Email</a></li>
						</ul>								
					</div>
				</div>
				
				<div id="bottom" class="wrap clearfix">
					<p class="attribution">Copyright &copy; 2012 &ndash; <?php bloginfo('name'); ?></p>
					<nav>
						<ul>
							<li><a href="<?php site_url(); ?>">Home</a></li>
							<li><a href="<?php site_url(); ?>#about">About</a></li>
							<li><a href="<?php site_url(); ?>#contact">Contact</a></li>
							<li><a href="<?php site_url(); ?>/blog">Blog</a></li>
						</ul>
					</nav>
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
		<!-- prompt for Google Chrome Frame for IE6 users -->
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>