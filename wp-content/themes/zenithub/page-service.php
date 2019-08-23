<?php
/* Template Name: Service Page Template */
get_header();
  ?>
  <?php while(have_posts()): the_post();  ?>
     <div class="banner">
          <div class="service-image" style="  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url(<?php echo the_post_thumbnail_url(); ?>);">
             <div class="service-text">
              <h1 style="font-size:60px; color:#fff;"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      <section class="service-page">
<div class="container ">
   <!-- section title -->
   <div class="row justify-content-md-center">
     <div class="col-md-6">
       <div class="title text-center">
         <h2><span>Our</span> Services</h2>
         <p><?php the_field('content'); ?></p>
       </div>
     </div>
   </div> 
   <div class="services">
   <div class="row">   
     <div class="col-lg-6 col-md-6">   
       <?php
                   $id_image = get_field('image_1');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="service-image" class="img-fluid">
       </div>
     <div class="col-lg-6 col-md-6">
      <div class="title"><h3><?php the_field('service1_title'); ?></h3></div>
      <div class="description">
         <p><?php the_field('content1'); ?></p>
       </div>
     </div>
   </div>
   <div class="row" id="service2">
    <div class="col-lg-6 col-md-6">
      <div class="title"><h3><?php the_field('service2_title'); ?></h3></div>
      <div class="description">
         <p><?php the_field('content2'); ?></p>
       </div>
     </div>   
     <div class="col-lg-6 col-md-6">   
         <?php
                   $id_image = get_field('image_2');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="service-image" class="img-fluid">
       </div>
   
   </div>
   <div class="row">   
     <div class="col-lg-6 col-md-6">   
         <?php
                   $id_image = get_field('image_3');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="service-image" class="img-fluid">
       </div>
     <div class="col-lg-6 col-md-6">
      <div class="title"><h3><?php the_field('service3_title'); ?></h3></div>
      <div class="description">
         <p><?php the_field('content3'); ?></p>
       </div>
     </div>
   </div>
   </div>
 </div>
 </section>
      <?php endwhile; ?>
  <?php get_footer(); ?>
