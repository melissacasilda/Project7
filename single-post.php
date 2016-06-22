  <?php get_header();  ?>

  <div class="page-header">
    <h2><?php the_title(); ?></h2>
    <img src="<?php echo feature_image_url($post); ?>" alt="">
  </div>

  <div class="main">
    <div class="container">

      <div class="content">

        <div class="blog-post-container">
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>


          <?php endwhile; // end the loop?>
          

          <?php comments_template(); ?>
        </div>

    
      </div> <!-- /,content -->

      <?php get_sidebar(); ?>

    </div> <!-- /.container -->
  </div> <!-- /.main -->

  <?php get_footer(); ?>