<?php
/*
  Template Name: Career Page Template
*/
get_header();
  ?>
  <?php while(have_posts()): the_post();  ?>
         <div class="banner">
          <div class="career-image" style="  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url(<?php echo the_post_thumbnail_url(); ?>);">
             <div class="career-text">
              <h1 style="font-size:60px; color:#fff;"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
     <!-- Product -->
     <section class="career-page pb-5" style="background-color: #fff; color: #000;">
<div class="container ">
   <!-- section title -->
   <div class="row justify-content-md-center">
     <div class="col-md-6">
       <div class="title text-center">
         <h2>Career</h2>
         <p><?php the_field('content_1'); ?>
</p>
       </div>
     </div></div> 
<div class="career">
  <div class="container">
   <div class="career-img text-center">
     <?php
                   $id_image = get_field('career');
                   $image = wp_get_attachment_image_src($id_image, 'career');
               ?>
        <img src="<?php echo $image[0]; ?>" alt="career-1" style="width: 50%; height: 100%;"> 
    <!-- <img src="assets/images/team.jpg" alt="career" style="width: 50%; height: 100%;"> -->
</div>
<div class="description text-center pt-4">
 <?php the_field('content_2'); ?>
</div>
<div class="about-company">
  
    <div class="title text-center pt-5">
   <h2 class="pt-2 pb-2" style="color: #fff; background-color: #2bc0a4;"><?php the_field('who_title'); ?></h2>
 </div>
 <div class="container">

<div class="row pt-2" style="background: #f6f9fc;">
  
  <div class="col-md-6" style="background-color: "><?php the_field('title1'); ?></div>
  <div class="col-md-6">
    <ul class="square-list">
      <li><?php the_field('content_3'); ?></li>
      <li><?php the_field('content_4'); ?></li>
      
    </ul>
  </div>
  
</div>
<div class="row mt-3 pt-2" style="background: #f6f9fc;">
  <div class="col-md-6"><?php the_field('title2'); ?></div>
  <div class="col-md-6">
    <ul class="square-list">
      <li><?php the_field('content_5'); ?></li>
      <li><?php the_field('content_6'); ?></li>
    
    </ul>
  </div>
</div>
</div>
</div>
</div>
</div>

  <div class="job-opening mb-5">
    <div class="container">
     <div class="title text-center pt-5">
   <h2 class="pt-2 pb-2" style="color: #fff; background-color: #2bc0a4;">Current Openings</h2>
 </div>
    <div class="row mt-1">
    <div class="col-md-3"><strong>Position</strong></div>
    <div class="col-md-3"><strong>Department</strong></div>
    <div class="col-md-3"><strong>Location</strong></div>
    <div class="col-md-3"><strong>Openings</strong></div> 
  </div>
  <hr style="margin-top: 0.5rem;">  
  <div class="row ">
    <div class="col-md-3"><?php the_field('position_1'); ?></div>
    <div class="col-md-3"><?php the_field('department_1'); ?></div>
    <div class="col-md-3"><?php the_field('location_1'); ?></div>
    <div class="col-md-3"><?php the_field('opening_1'); ?></div> 
  </div>
    <div class="row ">
    <div class="col-md-3"><?php the_field('position_2'); ?></div>
    <div class="col-md-3"><?php the_field('department_2'); ?></div>
    <div class="col-md-3"><?php the_field('location_2'); ?></div>
    <div class="col-md-3"><?php the_field('opening_2'); ?></div> 
  </div>
  <div class="row ">
    <div class="col-md-3"><?php the_field('position_3'); ?></div>
    <div class="col-md-3"><?php the_field('department_3'); ?></div>
    <div class="col-md-3"><?php the_field('location_3'); ?></div>
    <div class="col-md-3"><?php the_field('opening_3'); ?></div> 
  </div>
</div>
  
</div>  

<!-- container end  -->
 </section>

  	 	<?php endwhile; ?>
  
  <?php get_footer(); ?>
  <style>
    .career-page{
  background-color: #fff;
  padding: 60px 0;
  margin-top: -100px;
}
    .career-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/about-bg.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  height: 60vh;
  background-attachment: fixed;
  
}

.career-text {
  text-align: center;
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -80%);
  color: white;
}
  </style>
