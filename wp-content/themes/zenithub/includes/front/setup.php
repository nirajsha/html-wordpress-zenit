<?php
  function zenithub_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_image_size('who', 540,270,true);
  }
  add_action('after_setup_theme', 'zenithub_setup_theme');

 ?>