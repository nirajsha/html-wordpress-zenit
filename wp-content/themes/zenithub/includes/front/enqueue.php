<?php
  function zenithub_styles(){
      // CSS
      wp_register_style('custom_css', get_template_directory_uri() . '/style.css');

      wp_register_style('bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
      wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');
      wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
      wp_register_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
      wp_register_style('carousel1', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
     
     
      wp_enqueue_style('custom_css');
      wp_enqueue_style('bootstrapcss');
      wp_enqueue_style('style');
      wp_enqueue_style('animate');
       wp_enqueue_style('carousel');
       wp_enqueue_style('carousel1');

      // JS
      wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), false, true);
      wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), false, true);
       wp_register_script('owlcarousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), false, true);
        wp_register_script('loop', get_template_directory_uri() . '/assets/js/loop.js', array('jquery'), false, true);
    //    <script src="js/owl.carousel.min.js"></script>
    // <script src="js/loop.js"></script>

      
      wp_enqueue_script('wow');
      wp_enqueue_script('script');
      wp_enqueue_script('owlcarousel');
      wp_enqueue_script('loop');

  }
  add_action('wp_enqueue_scripts', 'zenithub_styles');

 ?>
