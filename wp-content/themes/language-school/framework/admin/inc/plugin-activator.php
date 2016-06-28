<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version 	1.0.0
 * 
 * TGM-Plugin-Activation 2.5.2
 * Created by CMSMasters
 * 
 */


get_template_part('framework/class/class-tgm-plugin-activation');


if (!function_exists('language_school_register_theme_plugins')) {

function language_school_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> 'CMSMasters Contact Form Builder', 
			'slug'					=> 'cmsmasters-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.3.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		),
		array( 
			'name'					=> 'CMSMasters Content Composer', 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.5.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> 'CMSMasters Mega Menu', 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		),  
		array( 
			'name' 					=> 'LayerSlider WP', 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '5.6.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> 'Revolution Slider', 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.1.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> 'Timetable', 
			'slug'					=> 'timetable', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/timetable.zip', 
			'required'				=> false, 
			'version'				=> '3.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> 'LearnPress', 
			'slug'					=> 'learnpress', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/learnpress.zip', 
			'required'				=> false, 
			'version'				=> '0.9.19', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name' 					=> 'LearnPress Course Review', 
			'slug' 					=> 'learnpress-course-review', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> 'LearnPress Courses Wishlist', 
			'slug' 					=> 'learnpress-wishlist', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> 'LearnPress Prerequisite Courses', 
			'slug' 					=> 'learnpress-prerequisites-courses', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> 'Contact Form 7', 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> 'WordPress SEO by Yoast', 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> 'PayPal Donations', 
			'slug' 					=> 'paypal-donations', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> 'The Events Calendar', 
			'slug' 					=> 'the-events-calendar', 
			'required'				=> false 
		), 
		array( 
			'name'					=> 'MailPoet Newsletters', 
			'slug'					=> 'wysija-newsletters', 
			'required'				=> false 
		)  
	);
	
	
	$config = array( 
		'id' => 				'language-school', 
		'default_path' => 		'', 
		'menu' => 				'theme-required-plugins', 
		'parent_slug' => 		'themes.php', 
		'capability' => 		'edit_theme_options', 
		'has_notices' => 		true, 
		'dismissable' => 		true, 
		'dismiss_msg' => 		'', 
		'is_automatic' => 		false, 
		'message' => 			'' 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'language_school_register_theme_plugins');
