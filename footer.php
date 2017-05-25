<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
			</div><!-- #content-main -->

		</div><!-- #main -->

		<footer role="contentinfo">
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	// get_sidebar( 'footer' );
?>
			<p class="fineprint"><span>&copy;<?php echo date("Y"); ?> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></p>
			<p class="site-meta"><a href="wp-login.php">Login</a></p>
		</footer><!-- footer -->

		<!-- JavaScript at the bottom for fast page loading -->

		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

		<!-- scripts concatenated and minified via build script -->
		<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/libs/jquery.scrollto.min.js"></script>
		<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins.js"></script>
		<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/script.js?v=001"></script>
		<!-- end scripts -->

		<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
		mathiasbynens.be/notes/async-analytics-snippet -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
				g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
</html>

