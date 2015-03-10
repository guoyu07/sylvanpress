<?php
/**
 * Template Name: Home
 * The template for displaying the home page.
 *
 *
 * @package Sylvan Gardens Landscaping
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'home' ); ?>
<?php endwhile; // end of the loop. ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
