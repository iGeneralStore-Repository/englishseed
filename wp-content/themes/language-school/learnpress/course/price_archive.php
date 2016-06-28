<?php
/**
 * Template for displaying the price of a course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */
learn_press_prevent_access_directly();
if ( learn_press_is_enrolled_course() ) {
    return;
}
do_action( 'learn_press_before_course_price' );
?>
<div class="cmsmasters_lrp_archive_item">
	<div class="cmsmasters_lrp_archive_item_title">
		<?php esc_html_e('Price', 'language-school');?>
	</div>
	<div class="cmsmasters_lrp_archive_item_meta">
		<span class="course-price">
			<?php do_action( 'learn_press_begin_course_price' );?>
			<?php echo learn_press_get_course_price( get_the_ID(), true );?>
			<?php do_action( 'learn_press_end_course_price' );?>
		</span>
	</div>
</div>
<?php do_action( 'learn_press_after_course_price' );?>