<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sylvan Gardens Landscaping
 */
?>


<footer role="banner">
	<div class="footer-section">
		<h5><img src="<?=get_template_directory_uri()?>/images/logo-white-large.png" alt=""></h5>
		<ul class="nav-tree">
			<?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'container'=> false, 'menu' => 'Footer Navigation' ) ); ?>
		</ul>
		<p class="copyright">All content ©2015 Sylvan Gardens Landscaping, LLC.</p>
	</div>
	<div class="footer-section">
		<h5>Need a Quick Estimate?</h5>
		<form>
			<div class="form-group">
				<label class="control-label">Name</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label class="control-label">Email Address</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label class="control-label">Phone Number</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label class="control-label">Area</label>
				<select class="form-control">
					<option value=""></option>
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Type of Property</label>
				<select class="form-control">
					<option value=""></option>
				</select>
			</div>
			<input type="submit" class="button button-disabled" disabled value="Let's Get in Touch">
		</form>
	</div>
	<div class="footer-section">
		<h5>Contact</h5>
		<ul>
			<li><i class="fa fa-fw fa-keyboard-o"></i> <a href="#">Email Us</a></li>
			<li><i class="fa fa-fw fa-phone-square"></i> (412) 366-7945</li>
		</ul>
	</div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
