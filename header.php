<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">

  <div class="toggle-btn">
     <div class="toggle-bar"></div>
   </div> 
   
<!--     <div class="headerLogoDetails">
      <h2 id="home">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php the_field('logo'); ?>
        </a>
      </h2>
      <h3><?php the_field('header_tagline') ?></h3>
    </div> -->

<!--     <div class="mainNav">
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
      </div>
 -->  </div> <!-- /.container -->
</header><!--/.header-->

