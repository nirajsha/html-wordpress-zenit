<?php
/*
  Template Name: Development Page Template
*/
get_header();
  ?>
  <?php while(have_posts()): the_post();  ?>
         <div class="banner">
          <div class="development-image" style="  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url(<?php echo the_post_thumbnail_url(); ?>);">
             <div class="development-text">
              <h1 style="font-size:60px; color:#fff;"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
    <section class="development" style="background-color: #fff;">
 <h2 class="text-center" style="color: #fff;" ><?php the_field('title_1'); ?></h2>
      <div class="container ">
       
        <div class="row mt-4" style="justify-content: center;">
          <div class="col-md-7">
             <?php
                   $id_image = get_field('image1');
                   $image = wp_get_attachment_image_src($id_image, 'image1');
               ?>
        <img src="<?php echo $image[0]; ?>" alt="development-1" style="width: 100%; height: 100%;"> 
            <!-- <img src="assets/images/banner.jpg" class="img-fluid" alt="" > -->
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-3">
            <div class="tools">      
             <?php
                   $id_image = get_field('image2');
                   $image = wp_get_attachment_image_src($id_image, 'image2');
               ?>
        <img src="<?php echo $image[0]; ?>" alt="development-1" style="width: 100%; height: 100%;"> 
              <p><?php the_field('title_2'); ?></p>
            </div>
        </div>
           <div class="col-md-3">
            <div class="tools">
               <?php
                   $id_image = get_field('image3');
                   $image = wp_get_attachment_image_src($id_image, 'image3');
               ?>
        <img src="<?php echo $image[0]; ?>" alt="development-1" style="width: 100%; height: 100%;">
              <p><?php the_field('title_3'); ?></p>
            </div>
          </div>
           <div class="col-md-3">
            <div class="tools">
              <?php
                   $id_image = get_field('image4');
                   $image = wp_get_attachment_image_src($id_image, 'image4');
               ?>
        <img src="<?php echo $image[0]; ?>" alt="development-1" style="width: 100%; height: 100%;">
              <p><?php the_field('title_4'); ?></p>
            </div>
          </div>
           <div class="col-md-3">
            <div class="tools">
              <?php
                   $id_image = get_field('image5');
                   $image = wp_get_attachment_image_src($id_image, 'image5');
               ?>
        <img src="<?php echo $image[0]; ?>" alt="development-1" style="width: 100%; height: 100%;">
              <p><?php the_field('title_5'); ?></p>
            </div>
          </div>
        </div>
        <div class="row text-center pt-3 pb-5">
          <p class=""><?php the_field('content'); ?></p>
        </div>
      </div>
      
    </section>
  	 	<?php endwhile; ?>
  
  <?php get_footer(); ?>
  <style>
    .development{
       margin-top: -100px;
    }
    .development-page{
  background-color: #fff;
  padding: 60px 0;
  margin-top: -100px;
}
    .development-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/about-bg.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  height: 60vh;
  background-attachment: fixed;  
}
.development-text {
  text-align: center;
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -70%);
  color: white;
}
    .development h2{
      display: block;
      background-color: #2bc0a4;
      padding: 5px;
    }
    .tools img{
      position: relative;
      width: 100%;
    }
    .tools p{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      font-size: 16px;
      color: #fff;
    }
  </style>
