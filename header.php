<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
<meta name="google-site-verification" content="8kgRu_dhej8RjCB43iP85Eim-NQKcauPeM0SY_JI9Rc" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<script type="text/javascript" src="http://use.typekit.com/eon7luv.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/libs/modernizr-2.5.3.min.js"></script>

<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
	</head>
	<?php if(is_page()) { $page_slug = 'page-'.$post->post_name; } ?>
	<body <?php body_class($page_slug); ?>>
		<div id="header">
			<header role="banner">
				<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img width="600" height="57" src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/cb-sig.png" alt=""><?php //bloginfo( 'name' ); ?></a></h1>
				<a id="menulink" href="#">
					<span class="sr-only">MENU</span>
					<div class="hamburger-bar"></div>
					<div class="hamburger-bar"></div>
					<div class="hamburger-bar"></div>
				</a>
			</header>
			<nav id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<a id="skip" href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				<?php
				// Sidebar for social buttons up top
				if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

					<ul class="xoxo">
						<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
					</ul>

				<?php endif; ?>
			</nav><!-- #access -->
		</div>
		<div id="content" role="main">
			<div id="content-main">
