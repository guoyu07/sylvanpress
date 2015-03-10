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
			<li><a href="#">Home</a></li>
			<li>
				<a href="#">Company</a>
				<ul>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Approach</a></li>
					<li><a href="#">People</a></li>
					<li><a href="#">Awards</a></li>
					<li><a href="#">Employment</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Services</a>
				<ul>
					<li><a href="#">Commercial</a></li>
					<li><a href="#">Residential</a></li>
					<li><a href="#">Design & Planning</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Portfolio</a>
				<ul>
					<li><a href="#">Commercial</a></li>
					<li><a href="#">Residential</a></li>
				</ul>
			</li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
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
