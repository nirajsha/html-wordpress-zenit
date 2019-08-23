<?php
add_action('init', 'zenithub_feature_post_type',0); 
add_action('init', 'zenithub_service_post_type',0); 
add_action('init', 'zenithub_partner_post_type',0);
add_action('init', 'zenithub_team_post_type',0);


// feature
function zenithub_feature_post_type(){
	//Labels for the post type
	$labels=array(
		'name' => _x('Features', 'Post Type General Name', 'zenithub'),//our domain is zenithub so zenithub
		'singular_name' => _x('Features', 'Post Type Singular Name', 'zenithub'),
		'menu_name' => __('Features', 'zenithub'),
		'parent_item_colon' => __('Parent Feature', 'zenithub'),
		'all_items' => __('All Features', 'zenithub'),
		'view_item' => __('ViewFeature', 'zenithub'),
		'add_new_item' => __('Add New Feature', 'zenithub'),
		'add_new' => __('Add New Feature', 'zenithub'),
		'edit_item' => __('Edit Feature', 'zenithub'),
		'update_item' => __('Update Feature', 'zenithub'),
		'search_items' => __('Search Feature', 'zenithub'),
		'not_found' => __('No Features found', 'zenithub'),
		'not_found_in_trash' => __('Not found in trash', 'zenithub'),

	);
	//Another Customization
	$args = array(
		'label' => __('Features', 'zenithub'),
		'description' => __('Features for Zenithub', 'zenithub'),
		'labels' => $labels,
		'supports' => array('title','thumbnail', 'editor'),//we need title, thumbnail and editor in our Feature so use these three in this code
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menus' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-format-gallery',
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_scratch' => false,
        'capability_type' => 'page',

	);
	//register the post type
	register_post_type('features', $args);
}

// our service
function zenithub_service_post_type(){
	//Labels for the post type
	$labels=array(
		'name' => _x('Services', 'Post Type General Name', 'zenithub'),//our domain is zenithub so zenithub
		'singular_name' => _x('Services', 'Post Type Singular Name', 'zenithub'),
		'menu_name' => __('Services', 'zenithub'),
		'parent_item_colon' => __('Parent Service', 'zenithub'),
		'all_items' => __('All Services', 'zenithub'),
		'view_item' => __('View Services', 'zenithub'),
		'add_new_item' => __('Add New Service', 'zenithub'),
		'add_new' => __('Add New Service', 'zenithub'),
		'edit_item' => __('Edit Service', 'zenithub'),
		'update_item' => __('Update Service', 'zenithub'),
		'search_items' => __('Search Service', 'zenithub'),
		'not_found' => __('No Services found', 'zenithub'),
		'not_found_in_trash' => __('Not found in trash', 'zenithub'),

	);
	//Another Customization
	$args = array(
		'label' => __('Services', 'zenithub'),
		'description' => __('Services for Zenithub', 'zenithub'),
		'labels' => $labels,
		'supports' => array('thumbnail', 'title', 'editor'),//we need title, thumbnail and editor in our Service so use these three in this code
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menus' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-book-alt',
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_scratch' => false,
        'capability_type' => 'page',

	);
	//register the post type
	register_post_type('services', $args);
}


// partner
function zenithub_partner_post_type(){
	//Labels for the post type
	$labels=array(
		'name' => _x('Partners', 'Post Type General Name', 'zenithub'),//our domain is zenithub so zenithub
		'singular_name' => _x('Partners', 'Post Type Singular Name', 'zenithub'),
		'menu_name' => __('Partners', 'zenithub'),
		'parent_item_colon' => __('Parent Partner', 'zenithub'),
		'all_items' => __('All Partners', 'zenithub'),
		'view_item' => __('ViewPartner', 'zenithub'),
		'add_new_item' => __('Add New Partner', 'zenithub'),
		'add_new' => __('Add New Partner', 'zenithub'),
		'edit_item' => __('Edit Partner', 'zenithub'),
		'update_item' => __('Update Partner', 'zenithub'),
		'search_items' => __('Search Partner', 'zenithub'),
		'not_found' => __('No Partners found', 'zenithub'),
		'not_found_in_trash' => __('Not found in trash', 'zenithub'),

	);
	//Another Customization
	$args = array(
		'label' => __('Partners', 'zenithub'),
		'description' => __('Partners for Zenithub', 'zenithub'),
		'labels' => $labels,
		'supports' => array('title','thumbnail'),//we need title, thumbnail and editor in our Partner so use these three in this code
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menus' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-groups',
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_scratch' => false,
        'capability_type' => 'page',

	);
	//register the post type
	register_post_type('partners', $args);
}


// feature
function zenithub_team_post_type(){
	//Labels for the post type
	$labels=array(
		'name' => _x('Teams', 'Post Type General Name', 'zenithub'),//our domain is zenithub so zenithub
		'singular_name' => _x('Teams', 'Post Type Singular Name', 'zenithub'),
		'menu_name' => __('Teams', 'zenithub'),
		'parent_item_colon' => __('Parent Team', 'zenithub'),
		'all_items' => __('All Teams', 'zenithub'),
		'view_item' => __('ViewTeam', 'zenithub'),
		'add_new_item' => __('Add New Team', 'zenithub'),
		'add_new' => __('Add New Team', 'zenithub'),
		'edit_item' => __('Edit Team', 'zenithub'),
		'update_item' => __('Update Team', 'zenithub'),
		'search_items' => __('Search Team', 'zenithub'),
		'not_found' => __('No Teams found', 'zenithub'),
		'not_found_in_trash' => __('Not found in trash', 'zenithub'),

	);
	//Another Customization
	$args = array(
		'label' => __('Teams', 'zenithub'),
		'description' => __('Teams for Zenithub', 'zenithub'),
		'labels' => $labels,
		'supports' => array('title','thumbnail', 'editor'),//we need title, thumbnail and editor in our Team so use these three in this code
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menus' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-businessman',
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_scratch' => false,
        'capability_type' => 'page',

	);
	//register the post type
	register_post_type('teams', $args);
}


?>