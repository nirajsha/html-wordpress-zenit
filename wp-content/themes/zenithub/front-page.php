<?php get_header(); ?>
<div class="banner">
          <div class="hero-image"  style="  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url(<?php echo get_theme_mod('zenithub_setting_four'); ?>); height: 90vh;">
             <div class="hero-text" style="">
              <h1><?php echo get_theme_mod('zenithub_banner_title_handle'); ?></h1>
              <p style="color: #fff;"><?php echo get_theme_mod('zenithub_banner_subtitle_handle'); ?></p>
              <a href="<?php echo site_url('/about-us'); ?>"><button type="button" style="background-color: #2bc0a4; color: #fff;" class="btn">See More</button></a>
            </div>
          </div>
        </div>
       <div class="feature_box">
              <div class="container">
                <div class="row">
                      <?php
      $args = array(
        'post_type' => 'features',
        'posts_per_page' => 3,
        'orderby' => 'title',
        'order' => 'ASC'
      );
      $features = new WP_Query($args);
      while($features->have_posts()) : $features->the_post();
      ?>
                  <div class="col-lg-4">
                    <div class="box_item">
                      <h4><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>&nbsp; <?php the_title(
          );?></h4>
                      <p><?php the_content(
          );?> </p>
                    </div>
                  </div>
                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
              </div>
            </div>
      
      <!-- About Section -->
      <section class="about-us">
        <div class="container">
          <div class="row">
            <div class=" col-lg-5 col-md-12 col-sm-12">
              <div class="who-we-are">
                <div class="title">
                  <h1><span class="who">who</span> we <span class="are">are</span></h1>
                </div>
                <div class="description">
                  <p><?php echo get_theme_mod('zenithub_content1_handle'); ?>
          </p>
                </div>
                <a href="<?php echo site_url('/about-us'); ?>"><button type="button" class="btn" style="background-color: #2bc0a4; color: #fff;">See More</button></a>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
              <div class="about-img">
                  <?php
          if(get_theme_mod('zenithub_setting_image')){         
          ?>
          <img src="<?php echo get_theme_mod('zenithub_setting_image'); ?>" alt="welcome-photo" class="img-fluid mt-2">
            <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services Section  -->
      <section class="our-services">
        <div class="container">
          <div class="title text-center"><h1 style="color: #fff;">our services</h1></div>
          <div class="row">
                         <?php
      $args = array(
        'post_type' => 'services',
        'posts_per_page' => 3,
        'orderby' => 'title',
        'order' => 'ASC'
      );
      $services = new WP_Query($args);
      while($services->have_posts()) : $services->the_post();
      ?>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card">
                <a href="<?php the_permalink(); ?>"><img class="card-img-top img-fluid" src="<?php echo the_post_thumbnail_url('services'); ?>" alt="<?php the_title(); ?>"></a>
               <!--  <a href="#"><img class="card-img-top img-fluid" src="<?php //echo get_template_directory_uri() ?>/assets/images/designing.png" alt="Card image cap"></a> -->
                <div class="card-body">
                  <a href="<?php the_permalink(); ?>"><h5 class="card-title text-center"><?php the_title(
          );?></h5></a>
                  <p class="card-text text-center"><?php the_content(
          );?></p>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
          
        </div>
      </section>
      <!-- services section ends -->
      <!-- <section class="product">
        <div class="container">
          <div class="title text-center"><h1 style="color: #000;">our products</h1></div>
          <div class="row">
            <div class="col-lg-3 col-md-6  col-sm-12">
              <div class="products wow fadeInLeft animated " data-wow-duration="1s" data-wow-delay="0.25s" id="product1">
                <img  src="<?php //echo get_template_directory_uri() ?>/assets/images/banner.jpg" alt="Avatar" class="image img-fluid">
                <div class="overlay">
                  <div class="text">Hello World</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="products wow fadeInLeft animated " data-wow-duration="1s" data-wow-delay="0.5s" id="product2">
                <img  src="<?php //echo get_template_directory_uri() ?>/assets/images/banner.jpg" alt="Avatar" class="image img-fluid">
                <div class="overlay">
                  <div class="text">Hello World</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="products wow fadeInRight animated " data-wow-duration="1s" data-wow-delay="0.5s" id="product3">
                <img  src="<?php //echo get_template_directory_uri() ?>/assets/images/banner.jpg" alt="Avatar" class="image img-fluid">
                <div class="overlay">
                  <div class="text">Hello World</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-12">
              <div class="products wow fadeInRight animated " data-wow-duration="1s" data-wow-delay="0.25s">
                <img  src="<?php //echo get_template_directory_uri() ?>/assets/images/banner.jpg" alt="Avatar" class="image img-fluid">
                <div class="overlay">
                  <div class="text">Hello World</div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-outline-secondary">See More</button>
          </div>
        </div>
      </section> -->



        <section class="partner ">
        <div class="container">           
                     <div class="title text-center" style=""><h1 style="color: #000;">our partners</h1></div>

            <div class="owl-carousel owl-theme " style="">
               <?php
      $args = array(
        'post_type' => 'partners',
        'posts_per_page' => 6,
        'orderby' => 'title',
        'order' => 'ASC'
      );
      $partners = new WP_Query($args);
      while($partners->have_posts()) : $partners->the_post();
      ?>
                <div class="item text-center">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title();?> " style="" class="img-fluid" >
                 </div>
                 <?php endwhile; wp_reset_postdata(); ?>
           
                </div>
            <div class="owl-nav text-center" >
                        <span class="customPrevBtn"><i class="fa fa-angle-left" aria-hidden="true" style="margin-right: 15px;"></i></span>

                        <span class="customNextBtn"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </div>
        </div>
        <!--End container-->
    </section>
        <style>
    .hero-image {
  height: 90vh;
}
.hero-text{
  top: 65%;
  left: 50%;
  transform: translate(-50%, -65%);
}

      .partner{
        position: relative;
      }
      .partner .title{
        padding-bottom: 20px;
      }
      .fa-angle-left{

    position: absolute;
    left: 9%;
    top: 65%;
    transform: translate(-9%, -65%);
    z-index: 1000;
    font-size: 80px;
    color: #2bc0a4;
      }
      .fa-angle-right{
    position: absolute;
    left: 91%;
    top: 65%;
    transform: translate(-91%, -65%);
    z-index: 1000;
    font-size: 80px;
    color: #2bc0a4;
      }
      .owl-dots{
        display: none;
      }
     /* .partner .item img{
        width: 60%;
        }*/
        @media screen and (max-width: 600px) {
          .partner .title{
        margin-bottom: 30px;
      }
      .partner .item img{
        width: 100%; 
        }
          .fa-angle-left{

    position: absolute;
    left: 9%;
    top: 70%;
    transform: translate(-9%, -70%);
    z-index: 1000;
    font-size: 60px;
    color: #2bc0a4;
      }
      .fa-angle-right{
    position: absolute;
    left: 91%;
    top: 70%;
    transform: translate(-91%, -70%);
    z-index: 1000;
    font-size: 60px;
    color: #2bc0a4;
      }
      }
      @media screen and (max-width: 992px) {
          .about-us{
  padding:40px 0;
} 
       .partner{
  padding:40px 0;
} 
        
      }
      @media screen and (max-width: 320px) {
  .hero-text p {
    display: none;
  font-size: 15px;
  margin-bottom: 0.3rem;
  }
}
 </style>
      <?php get_footer(); ?>
      
      