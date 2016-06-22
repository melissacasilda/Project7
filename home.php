  <?php get_header();  ?>

  <div class="page-header">

    <?php 
      global $wp_query;
      $pageId = $wp_query->queried_object_id;
    ?>
    <h2><?php the_field('page_title',$pageId); ?></h2>

    <?php $pageheader = get_field('page_header', $pageId); ?>
    <img src="<?php echo $pageheader['url']?>" alt="" >
    

  </div>

  <div class="main">
    <div class="home-container">

      <div class="content">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



          <img src="<?php echo feature_image_url($post); ?>" alt="">
          
          <div class="blog-container clearfix">
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink();?>" class="button">Read More</a>
            <hr>

              <div class="post-date">
                <?php the_date(); ?>
              </div>
              <div class="post-comment">
                <span class = "post-author"><?php the_author_posts_link();?></span>
                <a href="<?php comments_link();?>"><?php comments_number();?></a>
              </div>

          </div>


        <?php endwhile; // end the loop?>

        <h4><?php previous_posts_link(); ?></h4> <h4><?php next_posts_link(); ?></h4>
      </div> <!-- /,content -->

      <?php get_sidebar(); ?>

    </div> <!-- /.container -->
  </div> <!-- /.main -->

  <?php get_footer(); ?>