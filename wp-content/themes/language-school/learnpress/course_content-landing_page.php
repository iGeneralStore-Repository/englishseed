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

?>
<?php do_action( 'learn_press_before_course_landing_content' ); ?>

<div id="course-landing">
	<?php 
		remove_action( 'learn_press_course_landing_content', 'learn_press_course_wishlist_button', 10 );
		remove_action( 'learn_press_course_landing_content', 'learn_press_course_price', 30 );
		remove_action( 'learn_press_course_landing_content', 'learn_press_course_students', 40 );
		remove_action( 'learn_press_course_landing_content', 'learn_press_course_payment_form', 40 );
		remove_action( 'learn_press_course_landing_content', 'learn_press_course_enroll_button', 50 );
		do_action( 'learn_press_course_landing_content' ); 
	
	?>
</div>

<?php do_action( 'learn_press_after_course_landing_content' ); ?>