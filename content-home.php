<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sylvan Gardens Landscaping
 */
?>

  <div class="hero-home">
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
    <div class="callouts">
      <div class="callout">
        <img src="<?=get_template_directory_uri()?>/images/plant-circle-1.png" alt="">
        <h3>Experience</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="" class="button button-cta">Learn More About Us</a>
      </div>
      <div class="callout">
        <img src="<?=get_template_directory_uri()?>/images/plant-circle-2.png" alt="">
        <h3>Innovation</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="" class="button button-cta">Explore Our Process</a>
      </div>
      <div class="callout">
        <img src="<?=get_template_directory_uri()?>/images/plant-circle-3.png" alt="">
        <h3>Service</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="" class="button button-cta">See Our Capabilities</a>
      </div>
    </div>
  </div>

