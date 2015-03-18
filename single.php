<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sylvan Gardens Landscaping
 */

get_header(); ?>
<?php if(has_post_thumbnail()): ?>
  <div class="hero-page custom-background" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
  <?php else: ?>
    <div class="hero-page">
    <?php endif; ?>
    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
  </div>
  <div class="page">
    <div class="page-content">
      <div class="breadcrumb-trail breadcrumbs">
        <span class="trail-begin">
          <a href="/">Home</a>
        </span>
        <span class="sep">»</span>
        <a href="/blog">Blog</a>
        <span class="sep">»</span>
        <span class="trail-end"><?php the_title(); ?></span>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'single' ); ?>
        <?php the_post_navigation(); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        // if ( comments_open() || get_comments_number() ) :
        // comments_template();
        // endif;
        ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
