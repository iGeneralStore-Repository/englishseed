<?php 
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$course_id = get_the_ID();
$course_rate = learn_press_get_course_rate( $course_id );
?>
<div class="cmsmasters_course_meta_item">
	<div class="cmsmasters_course_meta_title">
		<span class="cmsmasters_theme_icon_lpr_rate"><?php esc_html_e('Ratings', 'language-school'); ?></span>
	</div>
	<div class="cmsmasters_course_meta_info">
		<span class="course-rate">
			<?php learn_press_course_review_template( 'rating-stars.php', array( 'rated' => $course_rate ) ); ?>
		</span>
	</div>
</div>