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
      <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'container'=> false, 'menu' => 'Main Navigation' ) ); ?>
    </ul>
  </header>