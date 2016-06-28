<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version		1.0.0
 * 
 * Content Composer Theme Shortcodes
 * Created by CMSMasters
 * 
 */


/**
 * LearnPress
 */
if (CMSMASTERS_LEARNPRESS) {
	$cmsmasters_add = 'add_';

	$cmsmasters_add_shcd = $cmsmasters_add . 'shortcode';

	function cmsmasters_learnpress($atts, $content = null) {
		$new_atts = apply_filters('cmsmasters_learnpress_atts_filter', array( 
			'orderby' => 		'', 
			'order' => 			'', 
			'categories' => 	'', 
			'count' => 			'', 
			'columns' => 		'', 
			'classes' => 		'' 
		) );
		
		
		$shortcode_name = 'learnpress';
		
		$shortcode_path = CMSMASTERS_CONTENT_COMPOSER_TEMPLATE_DIR . '/cmsmasters-' . $shortcode_name . '.php';
		
		
		if (locate_template($shortcode_path)) {
			$template_out = cmsmasters_composer_load_template($shortcode_path, array( 
				'atts' => 		$atts, 
				'new_atts' => 	$new_atts, 
				'content' => 	$content 
			) );
			
			
			return $template_out;
		}
		
		
		extract(shortcode_atts($new_atts, $atts));
		
		
		$unique_id = uniqid();
		
		if ($columns == '4' || $columns == '5') {
			$course_thumb = 'cmsmasters-square-thumb';
		} else {
			$course_thumb = 'cmsmasters-project-thumb';
		}
		
		
		$out = '<div id="cmsmasters_learnpress_shortcode_' . $unique_id . '" class="cmsmasters_learnpress_shortcode' . 
		(($columns != '') ? ' cmsmasters_' . $columns : '') . 
		(($classes != '') ? ' ' . $classes : '') . 
		'">';
		
		
		$args = array( 
			'post_type' => 				'lpr_course', 
			'orderby' => 				$orderby, 
			'order' => 					$order, 
			'posts_per_page' => 		$count 
		);
		
		if ($categories != '') {
			$cat_array = explode(",", $categories);
			
			$args['tax_query'] = array( 
				array( 
					'taxonomy' => 'course_category', 
					'field' => 'slug', 
					'terms' => $cat_array 
				)
			);
		}
		
		
		$query = new WP_Query($args);
		
		
		if ($query->have_posts()) : 
			while ($query->have_posts()) : $query->the_post();
		
			$course_id = get_the_ID();
			
			$course_duration = get_post_meta( $course_id, '_lpr_course_duration', true );
			$term_list = get_the_term_list( $course_id, 'course_category', '', ', ', '' );
			
			$out .= "<article class=\"lpr_course_post\">" . "\n" . 
				language_school_thumb_rollover($course_id, $course_thumb, false, true, false, false, false, false, false, false, false) . "\n" . 
				"<div class=\"lpr_course_inner\">" . "\n" . 
				"<header class=\"entry-header lpr_course_header\">
					<h6 class=\"entry-title lpr_course_title\"><a href=" . get_the_permalink( $course_id ) . ">" . get_the_title( $course_id ) . "</a></h6>
				</header>" . "\n";
				
				if ( !learn_press_is_free_course( $course_id ) ) {
					$out .= "<div class=\"cmsmasters_course_price\">" . learn_press_get_currency_symbol() . floatval( get_post_meta( $course_id, '_lpr_course_price', true ) ) . "</div>";
				} else {
					$out .= "<div class=\"cmsmasters_course_free\">" . esc_html__('Free', 'language-school') . "</div>";
				}
				
				if ( function_exists( 'learn_press_print_rate' ) ) {
					
					$course_rate = learn_press_get_course_rate( $course_id );
					
					$out .= "<div class=\"review-stars-rated\">
						<ul class=\"review-stars\">
							<li><span class=\"dashicons dashicons-star-empty\"></span> </li>
							<li><span class=\"dashicons dashicons-star-empty\"></span> </li>
							<li><span class=\"dashicons dashicons-star-empty\"></span> </li>
							<li><span class=\"dashicons dashicons-star-empty\"></span> </li>
							<li><span class=\"dashicons dashicons-star-empty\"></span> </li>
						</ul>
						<ul class=\"review-stars filled\"  style=\"width:" . $course_rate*20 . "%;\">
							<li><span class=\"dashicons dashicons-star-filled\"></span> </li>
							<li><span class=\"dashicons dashicons-star-filled\"></span> </li>
							<li><span class=\"dashicons dashicons-star-filled\"></span> </li>
							<li><span class=\"dashicons dashicons-star-filled\"></span> </li>
							<li><span class=\"dashicons dashicons-star-filled\"></span> </li>
						</ul>
					</div>";
				}
				
				$out .= "</div>" . "\n";
				
				if ($course_duration != '' || $course_duration != '') {
					$out .= "<footer class=\"cmsmasters_course_footer\">" . "\n";
					
					if ($course_duration != '') {
						$out .= "<div class=\"cmsmasters_cource_duration\">" . $course_duration . ' ' . (($course_duration == '1') ? esc_html__('week', 'language-school') : esc_html__('weeks', 'language-school')) . "</div>";
					}
					
					if ($term_list != '') {
						$out .= "<div class=\"entry-meta cmsmasters_cource_cat\">" . $term_list . "</div>";
					} 
					
					$out .= "</footer>" . "\n";
				}
				
			$out .= "</article>" . "\n";
		
			endwhile;
		endif;
		
		
		wp_reset_postdata();
		
		wp_reset_query();
		
		
		$out .= '</div>';
		
		
		return $out;
	}

	$cmsmasters_add_shcd('cmsmasters_learnpress', 'cmsmasters_learnpress');
}