<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AndMore
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'andmore' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->



		<nav>
			
			<?php
				$logo = '<a class="brand-logo" href="' . esc_url( get_home_url( '/' ) ) .'" rel="home">' . get_bloginfo( 'name' ) . '</a>';
				$menu = array( 
					'theme_location' => 'secondary',
					'container' => 'div',
					'container_class' => '',
					'menu_class' => 'right side-nav',
					'menu_id' => 'nav-mobile',
					'items_wrap' => '<div class="nav-wrapper">' . $logo . '<ul id="%1$s" class="%2$s">%3$s</ul></div>',
					'walker' => new materialize_menu()
				);
				wp_nav_menu( $menu );
			?>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
