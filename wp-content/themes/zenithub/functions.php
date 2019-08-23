<?php
   include (get_template_directory() . '/includes/front/enqueue.php');//for css code
   include (get_template_directory() . '/includes/front/setup.php');
   include (get_template_directory() . '/includes/theme-customizer.php');
   include (get_template_directory() . '/includes/customizer/social.php');
   add_action('customize_register', 'zenithub_customize_register');
   flush_rewrite_rules( false );
   function zenithub_widgets(){
   	register_sidebar(array(
   		'name' => 'Blog Sidebar',
   		'id'  => 'blog_sidebar',
   		'before_widget' => '<div class = "widget">',
   		'after_widget'  =>'</div>',
   		'before_title' =>'<h3>',
   		'after_title' =>'</h3>',
   	));
   }
      	add_action('widgets_init', 'zenithub_widgets');
        //making header menu dynamic
         function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

   //making header menu dynamic
         function wpb_custom_footer_menu() {
  register_nav_menus(
    array(
      'my-footer-menu' => __( 'My Footer Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_footer_menu' );

 ?>