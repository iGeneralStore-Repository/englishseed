<?php
/**
 * Template for displaying the enroll button of a course
 * @modified    TuNN
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */
 
learn_press_prevent_access_directly();

global $course;
$course_status = learn_press_get_user_course_status();
// only show enroll button if user had not enrolled

if ( ( '' == $course_status && $course->is_require_enrollment() ) ) {

do_action( 'learn_press_before_course_enroll_button' );
$button_text = apply_filters( 'learn_press_take_course_button_text', esc_html__( 'Take this course', 'learn_press' ) );
$loading_text = apply_filters( 'learn_press_take_course_button_loading_text', esc_html__( 'Processing', 'learn_press' ) );
?>
<div class="cmsmasters_course_meta_item">
	<button id="learn_press_take_course" class="btn take-course" data-course-id="<?php the_ID();?>" data-text="<?php echo $button_text;?>" data-loading-text="<?php echo $loading_text;?>"><?php echo $button_text;?></button>
</div>
<?php do_action( 'learn_press_after_course_enroll_button' );?>

<?php } ?>