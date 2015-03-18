<?php
/**
 * @package Sylvan Gardens Landscaping
 */
?>

<article class="post" id="post-<?php the_ID(); ?>">
	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<?php if ( 'post' == get_post_type() ) : ?>
		<p class="meta"><?php sylvanpress_posted_on(); ?></p>
	<?php endif; ?>

	<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sylvanpress' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
	?>

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