<?php get_header();  ?>

<div class="page-header">
  <h2><?php the_field('page_title'); ?></h2>
  <?php $pageheader = get_field('page_header') ?>
  <img src="<?php echo $pageheader['url']?>" alt="">

</div>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h4 class="page-h4"><?php the_title(); ?></h4>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

      <div class="services-container">
      <div class="services1 box">
        <div class="service-img">
          <?php $serviceimg = get_field('services_1_image') ?>
          <img src="<?php echo $serviceimg['url']?>" alt="" >
        </div>
        <h4><?php the_field('services_1_title'); ?></h4>
        <?php the_field('services_hr'); ?>
        <p><?php the_field('services_1'); ?></p>
      </div>
      <div class="services2 box">
        <div class="service-img">
          <?php $serviceimg = get_field('services_2_image') ?>
          <img src="<?php echo $serviceimg['url']?>" alt="" >
        </div>
        <h4><?php the_field('services_2_title'); ?></h4>
        <?php the_field('services_hr'); ?>
        <p><?php the_field('services_2'); ?></p>

      
      </div>
      <div class="services3 box">
        <div class="service-img">
          <?php $serviceimg = get_field('services_3_image') ?>
          <img src="<?php echo $serviceimg['url']?>" alt="" >
        </div>
        <h4><?php the_field('services_3_title'); ?></h4>
        <?php the_field('services_hr'); ?>
        <p><?php the_field('services_3'); ?></p>
      </div>
    </div>

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>