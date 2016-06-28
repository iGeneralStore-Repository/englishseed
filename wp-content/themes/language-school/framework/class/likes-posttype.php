<?php 
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version		1.0.0
 * 
 * Likes Post Type
 * Changed by CMSMasters
 * 
 */


class Language_school_Likes {
	function Language_school_Likes() { 
		$like_labels = array( 
			'name' => esc_html__('Likes', 'language-school'), 
			'singular_name' => esc_html__('Like', 'language-school') 
		);
		
		
		$like_args = array( 
			'labels' => $like_labels, 
			'public' => false, 
			'capability_type' => 'post', 
			'hierarchical' => false, 
			'exclude_from_search' => true, 
			'publicly_queryable' => false, 
			'show_ui' => false, 
			'show_in_nav_menus' => false 
		);
		
		
		$reg = 'register_';
		
		$reg_pt = $reg . 'post_type';
		
		
		$reg_pt('cmsmasters_like', $like_args);
	}
}


function language_school_likes_init() {
	global $lk;
	
	
	$lk = new Language_school_Likes();
}


add_action('init', 'language_school_likes_init');

