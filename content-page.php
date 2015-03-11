<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sylvan Gardens Landscaping
 */
?>


<div class="hero-page">
  <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
  <p class="subhead">Some secondary text if necessary. Lorem ipsum dolor sit amet.</p>
</div>

<div class="page">
  <div class="page-content">
    <div class="breadcrumbs">
      <ul class="breadcrumb-trail"></ul>
    </div>
    <article id="post-<?php the_ID(); ?>">
      <?php the_content(); ?>
    </article>
    <?php if(have_rows('sidebar_blocks')): ?>
      <aside>
        <?php while( have_rows('sidebar_blocks') ): the_row(); ?>
          <section>
            <h4><?php the_sub_field('section_heading') ?></h4>
            <?php the_sub_field('section_content') ?>
            <?php if(get_sub_field('section_button_link')): ?>
              <a class="button button-normal" href="<?php the_sub_field('section_button_link') ?>">
                <?php the_sub_field('section_button_text'); ?>
              </a>
            <?php endif; ?>
          </section>
        <?php endwhile; ?>
      </aside>
    <?php endif; ?>
  </div>
</div>
