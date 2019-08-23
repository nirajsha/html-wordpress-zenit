<?php
/*
  Template Name: Contact Page Template
*/
get_header();
  ?>
    <?php while(have_posts()): the_post();  ?>
        <div class="banner">
          <div class="contact-image" style="  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url(<?php echo the_post_thumbnail_url(); ?>);">
             <div class="contact-text">
              <h1 style="font-size:60px; color:#fff;"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      <section class="contact">
        <div class="container">
           <div class="row justify-content-md-center">
     <div class="col-md-6">
       <div class="title text-center">
         <h2><span>Find</span> Us</h2>
         <p><?php the_field('content'); ?></p>
       </div>
     </div>
   </div> 
 </div>
  <div class="location pb-5" style="background-color: #a9b0ba17; padding-top: 50px;">
 <!--  <div class="container">
          <div class="row info text-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="info-left pb-4" style="padding-top: 60px;">    
                    <div class="box_item"  id="location1">
                      <h4>Head Office</h4>                     
                      <h6><i class="fa fa-map-marker"></i>&nbsp; <?php the_field('address_1'); ?></h6>
                      <h6><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email_1'); ?>  </h6>
                      <h6><i class="fa fa-phone-square"></i>&nbsp; <?php the_field('phone_1'); ?> </h6>     
                    </div>
                </div>
                <hr style="border-top: 1px solid #2bc0a4;"/>
                <div class="info-left pt-4 text-center"> 
                <div class="box_item">
                  <h4>Biratnagar Office</h4>
                      <h6><i class="fa fa-map-marker"></i>&nbsp; <?php the_field('address_2'); ?></h6>
                      <h6><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email_2'); ?> </h6>
                      <h6><i class="fa fa-phone-square"></i>&nbsp; <?php the_field('phone_2'); ?> </h6>
                     
                    </div>
              </div>
            </div>
              
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="info-right pt-3 pl-3 pb-3">
             	<?php echo do_shortcode('[caldera_form id="CF5d2a7160328b3"]');?>     
              </div>
            </div>
          </div>
          </div>  -->
           <div class="container">
          <div class="row info text-center">
            <div class="col-lg-3 col-md-12 col-sm-12">
              <div class="info-left pb-4" style="padding-top: 60px;">    
                    <div class="box_item  pt-3 pb-3 mb-3"  id="location1" style="background-color: #fff;">
                      <h4>Head Office</h4>                     
                      <h6><i class="fa fa-map-marker"></i>&nbsp; <?php the_field('address_1'); ?></h6>
                      <h6><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email_1'); ?>  </h6>
                      <h6><i class="fa fa-phone-square"></i>&nbsp; <?php the_field('phone_1'); ?> </h6>     
                    </div>

                    <div class="box_item  pt-3 pb-3 mb-3"  id="location2" style="background-color: #fff;">
                       <h4>Branch Office</h4>
                      <h6><i class="fa fa-map-marker"></i>&nbsp; <?php the_field('address_3'); ?></h6>
                      <h6><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email_3'); ?>  </h6>
                      <h6><i class="fa fa-phone-square"></i>&nbsp; <?php the_field('phone_3'); ?> </h6>
                    </div>
               
                </div>
               <!--  <hr style="border-top: 1px solid #2bc0a4;"/>
                <div class="info-left pt-4 text-center"> 
                <div class="box_item">
                  <h4>Biratnagar Office</h4>
                      <h6><i class="fa fa-map-marker"></i>&nbsp; <?php the_field('address_2'); ?></h6>
                      <h6><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email_2'); ?> </h6>
                      <h6><i class="fa fa-phone-square"></i>&nbsp; <?php the_field('phone_2'); ?> </h6>
                     
                    </div>
              </div> -->
            </div>  
            <hr style="border-top: 1px solid #2bc0a4;"/>
            <div class="col-lg-3 col-md-12 col-sm-12">
              <div class="info-left pb-4" style="padding-top: 60px;">    
                    <div class="box_item pt-3 pb-3 mb-3"  id="location2" style="background-color: #fff;">
                      <h4>Biratnagar Office</h4>                     
                      <h6><i class="fa fa-map-marker"></i>&nbsp; <?php the_field('address_1'); ?></h6>
                      <h6><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email_1'); ?>  </h6>
                      <h6><i class="fa fa-phone-square"></i>&nbsp; <?php the_field('phone_1'); ?> </h6>     
                    </div>
                
           <div class="box_item pt-3 pb-3 mb-3" style="background-color: #fff;">
             <h4>Retail Office</h4>
                      <h6><i class="fa fa-map-marker"></i>&nbsp; <?php the_field('address_4'); ?></h6>
                      <h6><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email_4'); ?>  </h6>
                      <h6><i class="fa fa-phone-square"></i>&nbsp; <?php the_field('phone_4'); ?> </h6>
                    </div>
                  </div>
              </div>
              
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="info-right pt-3 pl-3 pb-3">
              <?php echo do_shortcode('[caldera_form id="CF5d2a7160328b3"]');?>     
              </div>
            </div>
          </div>
          </div> 
        </div>
        <div class="location3 pt-3">
          <div class="container pt-4">
            <div class="row">
        <!--   <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="info-left text-center">
                    <div class="box_item pt-5"  id="location2">
                       <h4>Branch Office</h4>
                      <h6><i class="fa fa-map-marker"></i>&nbsp; <?php the_field('address_3'); ?></h6>
                      <h6><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email_3'); ?>  </h6>
                      <h6><i class="fa fa-phone-square"></i>&nbsp; <?php the_field('phone_3'); ?> </h6>
                    </div>
                </div>
              </div>


 -->              
   <div class="col-lg-6 col-md-12 col-sm-12">
                 <div class="info-left text-center">
                    <div class="map pt-2">
               <?php the_field('map1'); ?>
            </div>
          </div>
        </div>
 <div class="col-lg-6 col-md-12 col-sm-12">
                 <div class="info-left text-center">
                    <div class="map pt-2">
                       <?php the_field('map1'); ?>
              
            </div>
          </div>
        </div>
      </div>    
              </div>
            </div>
            </div>
          </div>
          </div> 
    </section>
  	 	<?php endwhile; ?>
  <?php get_footer(); ?>
  <style>
    .contact .info-left h6{
  font-size: 16px;
}
   @media screen and (max-width: 992px) {
          .about-us{
  padding:40px 0;
} 
}
  </style>
