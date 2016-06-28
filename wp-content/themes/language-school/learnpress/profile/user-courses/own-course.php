<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */

$course_id = get_the_ID();

$course_duration = get_post_meta( $course_id, '_lpr_course_duration', true );
$term_list = get_the_term_list( $course_id, 'course_category', '', ', ', '' );

echo "<article class=\"lpr_course_post\">" . "\n" . 
	language_school_thumb_rollover($course_id, 'cmsmasters-project-thumb', false, true, false, false, false, false, false, false, false) . "\n" . 
	"<div class=\"lpr_course_inner\">" . "\n" . 
	"<header class=\"entry-header lpr_course_header\">
		<h6 class=\"entry-title lpr_course_title\"><a href=" . get_the_permalink( $course_id ) . ">" . get_the_title( $course_id ) . "</a></h6>
	</header>" . "\n";
	
	if ( !learn_press_is_free_course( $course_id ) ) {
		echo "<div class=\"cmsmasters_course_price\">" . learn_press_get_currency_symbol() . floatval( get_post_meta( $course_id, '_lpr_course_price', true ) ) . "</div>";
	} else {
		echo "<div class=\"cmsmasters_course_free\">" . esc_html__('Free', 'language-school') . "</div>";
	}
	
	if ( function_exists( 'learn_press_print_rate' ) ) {
		
		$course_rate = learn_press_get_course_rate( $course_id );
		
		echo "<div class=\"review-stars-rated\">
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
	
	echo "</div>" . "\n";
	
	if ($course_duration != '' || $course_duration != '') {
		echo "<footer class=\"cmsmasters_course_footer\">" . "\n";
		
		if ($course_duration != '') {
			echo "<div class=\"cmsmasters_cource_duration\">" . $course_duration . ' ' . (($course_duration == '1') ? esc_html__('week', 'language-school') : esc_html__('weeks', 'language-school')) . "</div>";
		}
		
		if ($term_list != '') {
			echo "<div class=\"entry-meta cmsmasters_cource_cat\">" . $term_list . "</div>";
		} 
		
		echo "</footer>" . "\n";
	}
	
echo "</article>" . "\n";
?>