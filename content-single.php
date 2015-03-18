<?php
/**
 * @package Sylvan Gardens Landscaping
 */
?>

<article class="post" id="post-<?php the_ID(); ?>">
	<?php the_content(); ?>
	<p class="meta"><?php sylvanpress_posted_on(); ?></p>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'sylvanpress' ),
			'after'  => '</div>',
		) );
	?>
	<div class="post-footer">
		<?php sylvanpress_entry_footer(); ?>
	</div>

</article>
