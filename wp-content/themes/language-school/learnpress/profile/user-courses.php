<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */
 
// All enrolled courses
do_action( 'learn_press_before_all_courses' );


echo '<h3>' . esc_html__( 'All Enrolled Courses', 'learn_press' ) . '</h3>';
do_action( 'learn_press_before_enrolled_course' );
$my_query = learn_press_get_enrolled_courses( $user->ID );
if ( $my_query->have_posts() ) :
	echo "<div class=\"cmsmasters_learnpress_shortcode cmsmasters_4\">";
	while ( $my_query->have_posts() ) : $my_query->the_post();
		learn_press_get_template( 'profile/user-courses/enrolled-course.php' );
	endwhile;
	echo "</div>";
else :
	do_action( 'learn_press_before_no_enrolled_course' );
	echo '<p>' . esc_html__( 'You have not taken any courses yet!', 'learn_press' ) . '</p>';
	do_action( 'learn_press_after_no_enrolled_course' );
endif;
do_action( 'learn_press_after_enrolled_course' );
wp_reset_postdata();

// All passed courses
echo '<h3>' . esc_html__( 'All Passed Courses', 'learn_press' ) . '</h3>';
do_action( 'learn_press_before_passed_course' );
$my_query = learn_press_get_passed_courses( $user->ID );
if ( $my_query->have_posts() ) :
	echo "<div class=\"cmsmasters_learnpress_shortcode cmsmasters_4\">";
	while ( $my_query->have_posts() ) : $my_query->the_post();
		learn_press_get_template( 'profile/user-courses/passed-course.php' );
	endwhile;
	echo "</div>";
else :
	do_action( 'learn_press_before_no_passed_course' );
	echo '<p>' . esc_html__( 'You have not finished any courses yet!', 'learn_press' ) . '</p>';
	do_action( 'learn_press_after_no_passed_course' );
endif;
do_action( 'learn_press_after_passed_course' );
wp_reset_postdata();

// All own courses
if ( user_can( $user->ID, 'edit_lpr_courses' ) ) {
	echo '<h3>' . esc_html__( 'All Own Courses', 'learn_press' ) . '</h3>';
	do_action( 'learn_press_before_own_course' );
	$my_query = learn_press_get_own_courses( $user->ID );
	if ( $my_query->have_posts() ) :
		echo "<div class=\"cmsmasters_learnpress_shortcode cmsmasters_4\">";
		while ( $my_query->have_posts() ) : $my_query->the_post();
			learn_press_get_template( 'profile/user-courses/own-course.php' );
		endwhile;
	echo "</div>";
	else :
		do_action( 'learn_press_before_no_own_course' );
		echo '<p>' . esc_html__( 'You don\'t have got any published courses yet!', 'learn_press' ) . '</p>';
		do_action( 'learn_press_after_no_own_course' );
	endif;
	do_action( 'learn_press_after_own_course' );
	wp_reset_postdata();
};

do_action( 'learn_press_after_all_courses' );
