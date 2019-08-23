<?php
function zenithub_social_customizer_section($wp_customize){

	
    //for banner section
    $wp_customize->add_section('zenithub_banner_section', array('title' => __('Banner Settings', 'zenithub'),'priority'=> 300));
    	//for banner setting
	$wp_customize->add_setting('zenithub_banner_title_handle', array('default' => ''));//adding title
	$wp_customize->add_setting('zenithub_banner_subtitle_handle', array('default' => ''));//adding subtitle
	$wp_customize->add_setting('zenithub_setting_four', array(
		'transport' => 'refresh',
		'height' => 325,
	));//adding image


	//For banner Control
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zenithub_banner_title_handle_text', array(
     'label' => __('Title', 'zenithub'),
     'section' => 'zenithub_banner_section',
     'type' => 'text',
     'settings' => 'zenithub_banner_title_handle',
     
	)));//for title
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zenithub_banner_subtitle_handle_text', array(
     'label' => __('Sub Title', 'zenithub'),
     'section' => 'zenithub_banner_section',
     'type' => 'text',
     'settings' => 'zenithub_banner_subtitle_handle',
     
	)));//for subtitle

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'zenithub_setting_four_control', array(
	'label' => __('Image', 'zenithub'),
     'section' => 'zenithub_banner_section',
     'settings' => 'zenithub_setting_four',
	)));//adding image

	
//for who section
    $wp_customize->add_section('zenithub_who_section', array('title' => __('Who Settings', 'zenithub'),'priority'=> 300));

	 //for who setting 
	$wp_customize->add_setting('zenithub_title_handle', array('default' => ''));//adding title
	//for who content
	$wp_customize->add_setting('zenithub_content1_handle', array('default' => ''));//adding content
	//working for image
	$wp_customize->add_setting('zenithub_setting_image', array(
		'transport' => 'refresh',//for refreshing the page 
		'height' => 325,
	));
	
	//for who Control
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zenithub_title_handle_text', array(
     'label' => __('Title', 'zenithub'),
     'section' => 'zenithub_who_section',
     'type' => 'text',
     'settings' => 'zenithub_title_handle'
	)));//for title

//who content
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zenithub_content1_handle_text', array(
     'label' => __('Content', 'zenithub'),
     'section' => 'zenithub_who_section',
     'type' => 'textarea',
     'settings' => 'zenithub_content1_handle'
	)));//for content

	// for image in who section
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'zenithub_setting_image_control', array(
	'label' => __('Image', 'zenithub'),
     'section' => 'zenithub_who_section',
     'settings' => 'zenithub_setting_image',
	)));

	//for footer section
    $wp_customize->add_section('zenithub_footer_section', array('title' => __('Footer Settings', 'zenithub'),'priority'=> 350));

      	//for footer setting
	$wp_customize->add_setting('zenithub_footer_location_handle', array('default' => ''));
	$wp_customize->add_setting('zenithub_footer_phone_handle', array('default' => ''));
$wp_customize->add_setting('zenithub_footer_email_handle', array('default' => ''));
$wp_customize->add_setting('zenithub_footer_logo_handle', array('default' => ''));
$wp_customize->add_setting('zenithub_footer_content_handle', array('default' => ''));


	//For footer Control
//for location
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zenithub_footer_location_handle_text', array(
     'label' => __('Location', 'zenithub'),
     'section' => 'zenithub_footer_section',
     'type' => 'text',
     'settings' => 'zenithub_footer_location_handle',
     
	)));
		//for phone
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zenithub_footer_phone_handle_text', array(
     'label' => __('Phone', 'zenithub'),
     'section' => 'zenithub_footer_section',
     'type' => 'text',
     'settings' => 'zenithub_footer_phone_handle',
     
	)));
		//for email
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zenithub_footer_email_handle_text', array(
     'label' => __('Email', 'zenithub'),
     'section' => 'zenithub_footer_section',
     'type' => 'text',
     'settings' => 'zenithub_footer_email_handle',
     
	)));
			//for logo
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zenithub_footer_logo_handle_text', array(
     'label' => __('Logo', 'zenithub'),
     'section' => 'zenithub_footer_section',
     'type' => 'text',
     'settings' => 'zenithub_footer_logo_handle',
     
	)));
		//for content
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zenithub_content_handle_text', array(
     'label' => __('Content', 'zenithub'),
     'section' => 'zenithub_footer_section',
     'type' => 'textarea',
     'settings' => 'zenithub_footer_content_handle',
     
	)));

}
?>