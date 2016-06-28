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
global $course;

?>
<?php do_action( 'learn_press_before_course_learning_content' ); ?>

<?php 
	learn_press_get_template( 'course/students_single.php' );
	
	learn_press_get_template( 'course/instructor_single.php' );
	
	learn_press_get_template( 'course/wishlist_button_single.php' );
	
	add_action( 'learn_press_course_learning_content', 'learn_press_course_finished_message', 50 );
	
	add_action( 'learn_press_course_learning_content', 'learn_press_course_remaining_time', 30 );
	add_action( 'learn_press_course_learning_content', 'learn_press_passed_conditional', 30 );
	add_action( 'learn_press_course_learning_content', 'learn_press_course_retake_button', 40 );
	add_action( 'learn_press_course_learning_content', 'learn_press_finish_course_button', 40 );
	add_action('learn_press_course_learning_content', 'learn_press_add_review_button', 5);
	
	remove_action( 'learn_press_course_learning_content', 'learn_press_course_content', 20 );
	remove_action( 'learn_press_course_learning_content', 'learn_press_course_curriculum', 20 );
	do_action( 'learn_press_course_learning_content' ); 
?>

<?php do_action( 'learn_press_after_course_learning_content' ); ?>
