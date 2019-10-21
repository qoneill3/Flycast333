<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flycast
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="./compiled/style.css">
	<link rel="stylesheet" href="https://use.typekit.net/gmv3esh.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'flycast' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="logo" src="/wp-content/uploads/2019/09/flycast-logo.svg" height="85px" /></a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="nav-menu">
			<img class="insta-link" src="/wp-content/uploads/2019/06/Asset-5.svg" alt="" />
			<img class="fb-link" src="/wp-content/uploads/2019/06/Asset-6.svg" alt="" />
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'flycast' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
