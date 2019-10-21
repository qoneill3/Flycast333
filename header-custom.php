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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rounded' ); ?></a>

	<header id="masthead" class="site-header">



		<nav <?php if ( is_admin_bar_showing() ) echo 'style="padding-top: 38px;"' ?> class="navbar navbar-expand-lg fixed-top navbar-light bg-light">

			<img class="logo" src="/wp-content/uploads/2019/03/flycast-logo.svg" />
			<a class="navbar-brand" href="<?php echo home_url(); ?>"></a>

			<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar top-bar"> </span>
	            <span class="icon-bar middle-bar"> </span>
	            <span class="icon-bar bottom-bar"> </span>
			  </button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'depth'          => 2,
					'menu_class'     => 'navbar-nav ml-auto',
					'walker'         => new Bootstrap_NavWalker(),
					'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
				) );
				?>
			</div>
		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">