<?php 

function basic_setting(){
	
	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	
	
	register_nav_menus(array(
		'main' => 'main-menu',
		'footer' => 'footer-menu',
	));
	
	
	register_post_type('slide',array(
		'labels' => array(
			'name' => 'Slider',
			'add_new_item' => 'Add your Slider',
			'edit_item' => 'edit slider',
		),
		'public' => true,
		'supports' => array('title','thumbnail'),
		'menu_icon'   => 'dashicons-products',
	));

	register_post_type('about',array(
		'labels' => array(
			'name' => 'About',
			'add_new_item' => 'Add About us',
			'edit_item' => 'edit-abut-us',
		),
		'public' => true,
		'supports' => array('title','editor','thumbnail'),
		'menu_icon'   => 'dashicons-book',
	));


	register_post_type('portfolio',array(
		'labels' => array(
			'name' => 'portfolio',
			'add_new_item' => 'Add portfolio',
			'edit_item' => 'edit portfolio',
		),
		'public' => true,
		'supports' => array('title','thumbnail','editor'),
		'menu_icon'   => 'dashicons-phone',
	));
	
	register_taxonomy('portfolio-catagories','portfolio',array(
		'labels' => array(
			'name' => 'Portfolio',
			'add_new_item' => 'Add New Topices',
			'parent_item' => 'parent Topices',
		),
		'public' => true,
		'hierarchical' => true,
	));
	
	register_taxonomy('portfolio-book','portfolio',array(
		'labels' => array(
			'name' => 'Book',
		),
		'public' => true,
	));
	
}
add_action('after_setup_theme','basic_setting');



function sidebar_widget_area(){
	
	register_sidebar(array(
		'name' => 'Right Sidebar',
		'id' => 'right',
		'description' => 'may you change your right widget form here',
		'before_widget' => '<div class="blog_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="heading">',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Sidebar',
		'id' => 'footer',
		'description' => 'may you change your footer widget form here',
		'before_widget' => '<div class="widget_area">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgets_title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => 'Footer second Sidebar',
		'id' => 'footer-second',
		'description' => 'may you change your footer-second widget form here',
		'before_widget' => '<div class="widget_area">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgets_title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => 'Footer third Sidebar',
		'id' => 'footer-third',
		'description' => 'may you change your ffooter-third widget form here',
		'before_widget' => '<div class="widget_area">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgets_title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init','sidebar_widget_area');
	function css_enqueue(){
		
		wp_register_style('awesome',get_template_directory_uri().'/css/font-awesome.min.css');
		wp_register_style('normalize',get_template_directory_uri().'/css/normalize.css');
		wp_register_style('slicknav',get_template_directory_uri().'/css/slicknav.css');
		wp_register_style('responsiveslides',get_template_directory_uri().'/css/responsiveslides.css');
		wp_register_style('responsive',get_template_directory_uri().'/css/responsive.css');
		
		
		wp_enqueue_style('awesome');
		wp_enqueue_style('normalize');
		wp_enqueue_style('slicknav');
		wp_enqueue_style('responsiveslides');
		wp_enqueue_style('responsive');
		
	}
	add_action('wp_enqueue_scripts','css_enqueue');
	

/* Redux Freamwork */
	
require_once('lib/ReduxCore/framework.php');
require_once('lib/Sample/config.php');


/* custom metabox */
require_once('metabox/init.php');
require_once('metabox/functions.php');


/* Add sortcode file */
require_once('shortcodes.php');
require_once('plugins/init.php');
