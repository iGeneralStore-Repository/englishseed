<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */

/* // Sc Name Shortcode Attributes Filter
add_filter('sc_name_atts_filter', 'sc_name_atts');

function sc_name_atts() { // copy default atts from shortcodes.php in plugin folder, paste here and add custom atts
	return array( 
		'attr_name_1' => 				'attr_std_val_1', 
		'attr_name_2' => 				'attr_std_val_2', 
		'attr_name_3' => 				'attr_std_val_3', 
		...
		'custom_attr_name_1' => 		'custom_attr_val_1', 
		'custom_attr_name_2' => 		'custom_attr_val_2', 
		'custom_attr_name_3' => 		'custom_attr_val_3' 
	);
} */



/* Register Admin Panel JS Scripts */
function register_admin_js_scripts() {
	global $pagenow;
	
	$cmsmasters_option = language_school_get_global_options();
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'blog_field_layout_mode_puzzle' => 			esc_attr__('Puzzle', 'language-school'), 
			'quotes_field_slider_type_title' => 		esc_attr__('Slider Type', 'language-school'), 
			'quotes_field_slider_type_descr' => 		esc_attr__('Choose your quotes slider style type', 'language-school'), 
			'quotes_field_type_choice_box' => 			esc_attr__('Boxed', 'language-school'), 
			'quotes_field_type_choice_center' => 		esc_attr__('Centered', 'language-school'),
			'quotes_field_item_color_title' => 			esc_attr__('Color', 'language-school'),
			'quotes_field_item_color_descr' => 			esc_attr__('Enter this quote custom color', 'language-school'),
			'timetable_field_box_bd_color_title' => 	esc_attr__('Timetable box border color', 'language-school'),
			'learnpress_title' => 						esc_attr__('Courses', 'language-school'),
			'course_field_orderby_descr' => 			esc_attr__('Choose your courses order by parameter', 'language-school'),
			'course_field_categories_descr' => 			esc_attr__('Show courses associated with certain categories.', 'language-school'),
			'course_field_categories_descr_note' =>		esc_attr__('If you don\'t choose any course categories, all your courses will be shown', 'language-school'),
			'course_field_postsnumber_title' => 		esc_attr__('Courses Number', 'language-school'),
			'course_field_postsnumber_descr' => 		esc_attr__('Enter the number of courses to be shown in shortcode', 'language-school'),
			'course_field_postsnumber_descr_note' =>	esc_attr__('number, if empty - show all courses', 'language-school'),
			'course_field_col_count_descr' =>			esc_attr__('Choose number of courses per row', 'language-school'),
			
			/* Timetable Default Colors */
			'box_bg_color' => 					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_bg'], 
			'box_bd_color' => 					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_border'], 
			'box_hover_bg_color' => 			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_secondary'], 
			'box_txt_color' => 					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_color'], 
			'box_hover_txt_color' => 			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_alternate'], 
			'box_hours_txt_color' => 			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_secondary'], 
			'box_hours_hover_txt_color' => 		$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_bg'], 
			'row1_bg_color' => 					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_alternate'], 
			'row1_txt_color' => 				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_color'], 
			'row2_bg_color' => 					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_bg'], 
			'row2_txt_color' => 				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_default' . '_color']
		));
	}
}

add_action('admin_enqueue_scripts', 'register_admin_js_scripts');


// Pricing Table Item Shortcode Attributes Filter
add_filter('cmsmasters_pricing_table_item_atts_filter', 'cmsmasters_pricing_table_item_atts');

function cmsmasters_pricing_table_item_atts() {
	return array( 
		'price' => 					'100', 
		'coins' => 					'', 
		'currency' => 				'$', 
		'period' => 				'', 
		'features' => 				'', 
		'best' => 					'', 
		'best_bg_color' => 			'', 
		'best_text_color' => 		'', 
		'button_show' => 			'', 
		'button_title' => 			'', 
		'button_link' => 			'#', 
		'button_target' => 			'', 
		'button_style' => 			'', 
		'button_font_family' => 	'', 
		'button_font_size' => 		'', 
		'button_line_height' => 	'', 
		'button_font_weight' => 	'bold', 
		'button_font_style' => 		'', 
		'button_padding_hor' => 	'', 
		'button_border_width' => 	'', 
		'button_border_style' => 	'', 
		'button_border_radius' => 	'', 
		'button_bg_color' => 		'', 
		'button_text_color' => 		'', 
		'button_border_color' => 	'', 
		'button_bg_color_h' => 		'', 
		'button_text_color_h' => 	'', 
		'button_border_color_h' => 	'', 
		'button_icon' => 			'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}


// Quotes Shortcode Attributes Filter
add_filter('cmsmasters_quotes_atts_filter', 'cmsmasters_quotes_atts');

function cmsmasters_quotes_atts() {
	return array( 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'3', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Quote Item Shortcode Attributes Filter
add_filter('cmsmasters_quote_atts_filter', 'cmsmasters_quote_atts');

function cmsmasters_quote_atts() {
	return array( 
		'image' => 		'', 
		'name' => 		'', 
		'subtitle' => 	'', 
		'color' => 		'', 
		'link' => 		'', 
		'website' => 	'', 
		'classes' => 	'' 
	);
}


// Timetable Shortcode Attributes Filter
add_filter('cmsmasters_timetable_atts_filter', 'cmsmasters_timetable_atts');

function cmsmasters_timetable_atts() {
	return array( 
		'event' => 						'', 
		'event_category' => 			'', 
		'hour_category' => 				'', 
		'columns' => 					'', 
		'measure' => 					'1', 
		'filter_style' => 				'dropdown_list', 
		'filter_kind' => 				'event', 
		'filter_label' => 				'All Events', 
		'time_format' => 				'H.i', 
		'time_format_custom' => 		'', 
		'hide_all_events_view' => 		'0', 
		'hide_hours_column' => 			'0', 
		'show_end_hour' => 				'0', 
		'event_layout' => 				'1', 
		'hide_empty' => 				'0', 
		'disable_event_url' => 			'0', 
		'text_align' => 				'center', 
		'id' => 						'', 
		'row_height' => 				'31', 
		'box_bg_color' => 				'', 
		'box_bd_color' => 				'', 
		'box_hover_bg_color' => 		'', 
		'box_txt_color' => 				'', 
		'box_hover_txt_color' => 		'', 
		'box_hours_txt_color' => 		'', 
		'box_hours_hover_txt_color' => 	'', 
		'row1_bg_color' => 				'', 
		'row1_txt_color' => 			'', 
		'row2_bg_color' => 				'', 
		'row2_txt_color' => 			'', 
		'classes' => 					'' 
	);
}

/* Composer Lightbox Functions for LearnPress */
global $pagenow;


if ( 
	is_admin() && 
	$pagenow == 'post-new.php' || 
	($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
) {
	add_action('admin_footer', 'cmsmasters_learnpress_composer_shortcodes_init');
}


function cmsmasters_learnpress_composer_shortcodes_init() {
	if (wp_script_is('cmsmasters_content_composer_js', 'queue') && wp_script_is('cmsmasters_composer_lightbox_js', 'queue')) {
		cmsmasters_composer_learnpress();
		
		if (class_exists('LearnPress')) {
			cmsmasters_composer_lpr_course_categories();
		}
	}
}


function cmsmasters_composer_learnpress() {
	$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function cmsmasters_composer_learnpress() { ' . "\n\t\t";
	
	
	if (class_exists('LearnPress')) {
		$out .= "return 'true'; \n";
	} else {
		$out .= "return 'false'; \n";
	}
	
	
	$out .= '} ' . "\n" . 
		'cmsmasters_composer_learnpress();' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo $out;
}


function cmsmasters_composer_lpr_course_categories() {
	$categories = get_terms('course_category', array( 
		'hide_empty' => 0 
	));
	
	
	$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function cmsmasters_composer_lpr_course_categories() { ' . "\n\t\t" . 
			'return { ' . "\n";
	
	
	if (!empty($categories)) {
		foreach ($categories as $category) {
			$out .= "\t\t\t\"" . urldecode(esc_attr($category->slug)) . "\" : \"" . esc_html($category->name) . "\", \n";
		}
		
		
		$out = substr($out, 0, -3);
	}
	
	
	$out .= "\n\t\t" . '}; ' . "\n\t" . 
		'} ' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo $out;
}
