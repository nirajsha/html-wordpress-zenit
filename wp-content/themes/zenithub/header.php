<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="wrapper">
      <header id="header">
            <nav class="navbar navbar-expand-md fixed-top" id="nav" style="position: fixed !important; flex: wrap;" >
              <div class="container">
                 <?php
                if(has_custom_logo() || is_customize_preview()){
                the_custom_logo();
              }
              else{
                ?> 
                <a class="navbar-brand" href="<?php echo site_url('/about-us/'); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo2.png" class="logo img-fluid" alt="ZENITHUB"></a>
                 <?php } ?><a href="<?php echo site_url('/'); ?>" style=" text-decoration: none;"><h2 style="color: #fff;" id="title">&nbsp; ZEN IT HUB</h2></a> 
                <button id="navToggler" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#zenitNavbar" aria-controls="zenitNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="zenitNavbar">
                  <ul class="navbar-nav ml-auto" >
                    <li class="nav-item" >
                      <a class="nav-link smoothscroll">
                        <?php  
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>


</a>
                    </li>
                  <!--   <li class="nav-item">
                      <a class="nav-link smoothscroll" href="<?php echo site_url('/about-us'); ?>" data-link="aboutTeam">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link smoothscroll" href="<?php echo site_url('/service'); ?>" data-link="service">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link smoothscroll" href="<?php echo site_url('/products/'); ?>" data-link="product">Products</a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link smoothscroll" href="<?php echo site_url('/career/'); ?>" data-link="career">Career</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link smoothscroll" href="<?php echo site_url('/contact'); ?>" data-link="contact">Contact Us</a>
                    </li> -->
                  </ul>
                </div>
              </div>
            </nav>
      </header>
      <style>
        .navbar-nav .nav-item a{
          color: #fff;
        }
        .nav-link{
          padding:0px;
        }
        .navbar-nav .nav-item a {
    padding-left: 20px;
}
         .navbar-nav .nav-item a:hover{
          color: #2bc0a4;
          text-decoration: none;
        }

        .new_menu_class{
          text-decoration: none;
        }
        li.page_item a{
          color: #fff;
          display: inline-block;
        }
        div.custom-menu-class ul {
    list-style-type: none;
    list-style: none;
    list-style-image: none;
    padding-bottom: -10px;
    /*padding-top: 0px;*/
}
div.custom-menu-class li {
    /*padding-left: 20px;*/
    display: inline;
}
        
@media screen and (max-width: 992px) {
  #title{
    display: none;
  }

}
@media screen and (max-width: 767px) {
    div.custom-menu-class li {
    display: block;
    font-size: 20px;
    padding: 20px 0px 20px;
}
  }
      </style>
      <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  