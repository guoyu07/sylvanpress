<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sylvan Gardens Landscaping
 */

get_header(); ?>
<div class="hero-page">
	<?php
		the_archive_title( '<h2 class="page-title">', '</h2>' );
		the_archive_description( '<p class="subhead">', '</p>' );
	?>
</div>
<div class="page">
	<div class="page-content">
    <?php
      $args = array(
        'show_browse' => 'false',
        'container' => 'div',
        'separator' => '&raquo;'
      );
      breadcrumb_trail($args);
    ?>
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
