<?php
/*
  Template Name: Product Page Template
*/
get_header();
  ?>
  <?php while(have_posts()): the_post();  ?>
         <div class="banner">
          <div class="product-image" style="  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url(<?php echo the_post_thumbnail_url(); ?>);">
             <div class="product-text">
              <h1 style="font-size:60px; color:#fff;"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
     <!-- Product -->
       <section class="product-page">
<div class="container ">
   <!-- section title -->
   <div class="row justify-content-md-center">
     <div class="col-md-6">
       <div class="title text-center">
         <h2><span>Our</span> Products</h2>
         <p><?php the_field('content'); ?></p>
       </div>
     </div>
   </div> 
 <!-- product section starts -->
      <!-- <div class="product">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6  col-sm-12">
              <div class="products wow fadeInLeft animated " data-wow-duration="1s" data-wow-delay="0.25s" id="product1">
                <?php
                   $id_image = get_field('image_1');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php the_field('title_1'); ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="products wow fadeInLeft animated " data-wow-duration="1s" data-wow-delay="0.5s" id="product2">
                 <?php
                   $id_image = get_field('image_2');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php the_field('title_2'); ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="products wow fadeInRight animated " data-wow-duration="1s" data-wow-delay="0.5s" id="product3">
                 <?php
                   $id_image = get_field('image_3');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php the_field('title_3'); ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-12">
              <div class="products wow fadeInRight animated " data-wow-duration="1s" data-wow-delay="0.25s">
                <?php
                   $id_image = get_field('image_4');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php the_field('title_4'); ?></div>
                </div>
              </div>
            </div>
          </div>
           <div class="row mt-3">
            <div class="col-lg-3 col-md-6  col-sm-12">
              <div class="products wow fadeInLeft animated " data-wow-duration="1s" data-wow-delay="0.25s" id="product1">
                <?php
                   $id_image = get_field('image_5');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php the_field('title_5'); ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="products wow fadeInLeft animated " data-wow-duration="1s" data-wow-delay="0.5s" id="product2">
                 <?php
                   $id_image = get_field('image_6');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php the_field('title_6'); ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="products wow fadeInRight animated " data-wow-duration="1s" data-wow-delay="0.5s" id="product3">
                 <?php
                   $id_image = get_field('image_7');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php the_field('title_7'); ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-12">
              <div class="products wow fadeInRight animated " data-wow-duration="1s" data-wow-delay="0.25s">
                <?php
                   $id_image = get_field('image_8');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
                <div class="overlay">
                  <div class="text"><?php the_field('title_8'); ?></div>
                </div>
              </div>
            </div>
          </div>
           <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-outline-secondary">See More</button>
          </div> -->
        <!-- </div>
        </div>  -->
        <div class="product">
   <div class="row mb-4">   
     <div class="col-lg-6 col-md-6">   
       <?php
                   $id_image = get_field('image_1');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
       </div>
     <div class="col-lg-6 col-md-6">
      <div class="title pb-1"><h3><?php the_field('product1_title'); ?></h3></div>
      <div class="description">
         <p><?php the_field('content1'); ?></p>
       </div>
     </div>
   </div>
   <div class="row mb-4" id="product2">
    <div class="col-lg-6 col-md-6">
      <div class="title pt-2 pb-1"><h3><?php the_field('product2_title'); ?></h3></div>
      <div class="description">
         <p><?php the_field('content2'); ?></p>
       </div>
     </div>   
     <div class="col-lg-6 col-md-6">   
         <?php
                   $id_image = get_field('image_2');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
       </div>
   
   </div>
   <div class="row">   
     <div class="col-lg-6 col-md-6">   
         <?php
                   $id_image = get_field('image_3');
                   $image = wp_get_attachment_image_src($id_image, 'who');
               ?>
              <img src="<?php echo $image[0]; ?>" alt="product-image" class="img-fluid">
       </div>
     <div class="col-lg-6 col-md-6">
      <div class="title pb-1"><h3><?php the_field('product3_title'); ?></h3></div>
      <div class="description">
         <p><?php the_field('content3'); ?></p>
       </div>
     </div>
   </div>
      </div>
 </section>
  	
  	 	<?php endwhile; ?>
  
  <?php get_footer(); ?>
