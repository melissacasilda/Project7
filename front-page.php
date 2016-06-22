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



</header><!--/.header-->




  <?php $image = get_field('hero_image') ?>
<div class="hero" style="background: url(<?php echo $image['url']?>) fixed; background-size: cover">
  <div class="hero-text">
    <h2><?php the_field('page_title'); ?></h2>
  </div>

</div>

<div id="nav-anchor"></div>
<nav class = "front-nav" >
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>

</nav>

<div class="main">

    <div class="content">

      <section class="about container">
        <?php $aboutimage = get_field('about_image') ?>
        <img src="<?php echo $aboutimage ['sizes']['medium_large']?>" alt="">


        <div class="about-container">
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>

          <?php endwhile; // end the loop?>

          <hr>
          <a href=" <?php the_permalink(); ?>" class="button">ABOUT</a>
          <a href=" <?php the_permalink(); ?>" class="button">CONTACT</a>
        </div>
      </section>

      <section class="quote">
          <?php $quoteimage = get_field('quote_image') ?>
          <img src="<?php echo $quoteimage['url']?>" alt="" class="quote-img">
          <div class="quote-container">
            <h4><i class="fa fa-quote-right" aria-hidden="true"></i></h4>
            <p><?php the_field('quote'); ?></p>
          </div>
      </section>

      <section class = "recent-posts">

        <?php $recentimage = get_field('recent_image') ?>
        <div class="recent-image" style="background: url(<?php echo $recentimage ['sizes']['large']?>); background-size: cover; background-position: center">
        </div>

        <div class="recent-container">

          <h4 class ="front-h4">RECENT POSTS</h4>
          <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>

          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

          <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink();?>" class="button">Read More</a>

          <hr>
      


        <?php 
        endwhile;
        wp_reset_postdata();
        ?>
        </div>

      </section>

      
  </div> <!-- /.content -->


</div> <!-- /.main -->

<?php get_footer(); ?>