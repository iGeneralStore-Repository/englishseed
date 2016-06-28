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
$total = learn_press_get_course_rate_total( $course_id );
?>
<div class="cmsmasters_lrp_archive_item">
	<div class="cmsmasters_lrp_archive_item_title">
		<?php esc_html_e('Ratings', 'language-school'); ?>
	</div>
	<div class="course-rate cmsmasters_lrp_archive_item_meta">
	<?php
		learn_press_course_review_template( 'rating-stars.php', array( 'rated' => $course_rate ) );
		$text=' ratings';
		if( $total <= 1 ) $text = ' rating'; 
	?>
		<p class="review-number">
			<?php do_action( 'learn_press_before_total_review_number' );?>
			<?php echo $total . $text ; ?>
			<?php do_action( 'learn_press_after_total_review_number' );?>
		</p>
	</div>
</div>