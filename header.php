<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sylvan Gardens Landscaping
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//use.typekit.net/rvc4rxi.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body>


  <header role="banner">
    <ul class="nav" role="navigation">
      <li class="home"><a href="/"><img src="<?=get_template_directory_uri()?>/images/logo-white-large.png" alt="Home"></a></li>
      <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'container'=> false, 'theme_location' => 'primary' ) ); ?>
    </ul>
  </header>


	<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sylvanpress' ); ?></a> -->

<!-- 	<header id="masthead" class="site-header" role="banner"> -->
		<!-- <div class="site-branding"> -->
			<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
		<!-- </div>.site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
			<!-- <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'sylvanpress' ); ?></button> -->
			<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		<!-- </nav>#site-navigation -->
	<!-- </header>#masthead -->


