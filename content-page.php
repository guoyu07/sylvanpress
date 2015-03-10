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

  	</div>
</div>
