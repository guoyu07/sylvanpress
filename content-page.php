<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sylvan Gardens Landscaping
 */
?>


<?php if(has_post_thumbnail()): ?>
  <div class="hero-page custom-background" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
<?php else: ?>
  <div class="hero-page">
<?php endif; ?>
  <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
  <?php if(get_field('page_subheading')): ?>
    <p class="subhead"><?php the_field('page_subheading'); ?></p>
  <?php endif; ?>
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
    <article id="post-<?php the_ID(); ?>">
      <?php the_content(); ?>
    </article>
    <aside>
      <?php
        $children = get_pages('child_of='.$post->ID);
        if( count( $children ) != 0 ) : ?>
        <section role="navigation">
          <h4>In This Section</h4>
          <ul class="nav-tree">
            <?php
              global $post;
              $current_page_parent = ( $post->post_parent ? $post->post_parent : $post->ID );
              wp_list_pages( array(
                'title_li' => '',
                'child_of' => $current_page_parent,
                'depth' => '1' )
              );
            ?>
          </ul>
        </section>
      <?php else : ?><?php endif; ?>
      <?php if(have_rows('sidebar_blocks')): ?>
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
      <?php endif; ?>
    </aside>
  </div>
</div>
