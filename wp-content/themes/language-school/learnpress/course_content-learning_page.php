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

<div id="course-learning">
	<?php 
		remove_action( 'learn_press_course_learning_content', 'learn_press_course_wishlist_button', 10 );
		remove_action( 'learn_press_course_learning_content', 'learn_press_course_instructor', 10 );
		remove_action( 'learn_press_course_learning_content', 'learn_press_course_students' );
		remove_action( 'learn_press_course_learning_content', 'learn_press_course_retake_button', 40);
		remove_action( 'learn_press_course_learning_content', 'learn_press_course_finished_message', 30 );
		remove_action( 'learn_press_course_learning_content', 'learn_press_course_remaining_time', 30 );
		remove_action('learn_press_course_learning_content', 'learn_press_add_review_button', 5);
		
		do_action( 'learn_press_course_learning_content' ); 
		
	?>
</div>

<?php do_action( 'learn_press_after_course_learning_content' ); ?>
