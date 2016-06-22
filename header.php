<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if(is_multisite()) { global $blog_id; ?>
  <link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/favicon<?php echo $blog_id; ?>.ico" type="images/x-icon" />
  <?php } else { ?>
  <link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.ico" type="images/x-icon" />
  <?php } ?>

  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
<nav>
    <div class="logo">
      <?php $logo = get_field('logo', 'option'); ?>
      <img src="<?php echo $logo['url']?>" alt="" >
    </div>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>

</nav>
  <div class="container">
    <!-- THIS IS THE MAIN TITLE -->
<!--     <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1> -->
    


  </div> <!-- /.container -->
</header><!--/.header-->

