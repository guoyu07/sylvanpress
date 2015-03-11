<?php
/**
 * Template Name: Gallery
 *
 * A gallery page of images and their descriptions.
 *
 * @package Sylvan Gardens Landscaping
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'gallery' ); ?>
<?php endwhile; // end of the loop. ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
