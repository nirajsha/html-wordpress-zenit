<?php
/*
  Template Name: About Us Page Template
*/
get_header();
  ?>
  <?php while(have_posts()): the_post();  ?>
  	 <div class="banner">
          <div class="about-image" style="  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url(<?php echo the_post_thumbnail_url(); ?>);">
             <div class="about-text">
              <h1 style="font-size:60px; color:#fff;"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      <!-- What We Do Section -->
      <section class="what-we-do">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
              <div class="what-we-do">
                <div class="title">
                  <h2><span class="who"><?php the_field('title_1'); ?></span> <?php the_field('title_2'); ?> <span class="are"><?php the_field('title_3'); ?></span></h2>
                </div>
                <div class="description">
                  <p style="color: #727272;"><?php the_field('content'); ?></p>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 list">
              <br><br>
               <br>
               <ul class="list-bullet list-bullet1">


<li>	<?php the_field('description_1'); ?></li>
<li>	<?php the_field('description_2'); ?></li>
<li>	<?php the_field('description_3'); ?></li>
<li>	<?php the_field('description_4'); ?></li>
<li>	<?php the_field('description_5'); ?></li>

               </ul>
           </div>
            </div>
          </div>
        </div>
      </section>
       <!-- team -->
      <section class="our-team">
        <div class="container ">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="title text-center">
                        <!-- section title -->
                        <h2><span>Our</span> Team</h2>
                        <p>Inventore cillum soluta inceptos eos platea, soluta class laoreet repellendus imperdiet optio.</p>
                    </div>
                </div>
            </div>
            <div class="member">
                <div class="row text-center">
                	         <?php
      $args = array(
        'post_type' => 'teams',
        'posts_per_page' => 3,
        'orderby' => 'title',
        'order' => 'ASC'
      );
      $teams = new WP_Query($args);
      while($teams->have_posts()) : $teams->the_post();
      ?>
                    <div class="col-md-4 team">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                        <p class="name"><?php the_title(); ?></p>
                        <p class="position"><?php the_content(); ?></p>
                    </div>

                    <!-- <div class="col-md-4"><img src="<?php echo get_template_directory_uri() ?>/assets/images/team4.jpg" class="img-fluid" alt="Responsive image2">
                        <p class="name">Adam Morgan</p>
                        <p class="position">Director</p>
                    </div>
                    <div class="col-md-4"><img src="<?php echo get_template_directory_uri() ?>/assets/images/team3.jpg" class="img-fluid" alt="Responsive image3">
                        <p class="name">Adam Morgan</p>
                        <p class="position">Director</p>
                    </div> -->
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <!-- End container-->
    </section>
  
  	<?php endwhile; ?>
  <?php get_footer(); ?>
