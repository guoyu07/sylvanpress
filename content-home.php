<?php
/**
 * The template used for displaying page content in page-home.php
 *
 * @package Sylvan Gardens Landscaping
 */
?>

<?php if(has_post_thumbnail()): ?>
  <div class="hero-home custom-background" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
<?php else: ?>
  <div class="hero-home">
<?php endif; ?>
    <div class="content">
      <h1><img src="<?=get_template_directory_uri()?>/images/logo-white-large.png" alt="Sylvan Gardens Landscape Contractors"></h1>
      <p class="intro"><?php the_field('company_description'); ?></p>
      <a href="<?php the_field('link_to_portfolio'); ?>" class="button button-primary"><?php the_field('portfolio_link_text'); ?></a>
    </div>
  </div>

  <div class="home-content">
    <div class="mission">
      <img src="<?=get_template_directory_uri()?>/images/plant-drawing.png" alt="">
      <p><?php the_field('company_mission'); ?></p>
    </div>
    <?php if(have_rows('benefit_callouts')): ?>
    <div class="callouts">
      <?php while( have_rows('benefit_callouts') ): the_row(); ?>
        <div class="callout">
          <img src="<?php the_sub_field('callout_image'); ?>" alt="">
          <h3><?php the_sub_field('callout_title'); ?></h3>
          <p><?php the_sub_field('callout_text'); ?></p>
          <a href="<?php the_sub_field('callout_button_link'); ?>" class="button button-cta"><?php the_sub_field('callout_button_text'); ?></a>
        </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>