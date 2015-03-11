<?php
/**
 * The template used for displaying page content in page-gallery.php
 *
 * @package Sylvan Gardens Landscaping
 */
?>


<div class="hero-page">
  <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
  <?php if(get_field('page_subheading')): ?>
    <p class="subhead"><?php the_field('page_subheading'); ?></p>
  <?php endif; ?>
</div>

<div class="page">
  <div class="gallery-content">
    <?php
      $args = array(
        'show_browse' => 'false',
        'container' => 'div',
        'separator' => '&raquo;'
      );
      breadcrumb_trail($args);
    ?>
    <?php if(have_rows('gallery_content')): ?>
      <div class="gallery" id="post-<?php the_ID(); ?>">
        <?php while(have_rows('gallery_content')): the_row(); ?>
          <div class="gallery-entry">
            <div class="gallery-entry-image">
              <img src="<?php the_sub_field('gallery_entry_image'); ?>" alt="">
            </div>
            <div class="gallery-entry-description">
              <p><?php the_sub_field('gallery_entry_description'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
