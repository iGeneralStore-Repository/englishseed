<?php
/**
 * Template for displaying the instructor of a course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */

learn_press_prevent_access_directly();
do_action( 'learn_press_before_course_instructor' );
printf(
	'<div class="cmsmasters_lrp_archive_item">
		<div class="cmsmasters_lrp_archive_item_title">
			<span class="author" aria-hidden="true" itemprop="author">
				%s
			</span>
		</div>
		<div class="cmsmasters_lrp_archive_item_meta">
			<a href="%s">%s</a>%s
		</div>
	</div>',
	apply_filters( 'before_instructor_link', esc_html__( 'Instructor ', 'learn_press' ) ),
	apply_filters( 'learn_press_instructor_profile_link', '#', $user_id = null, get_the_ID() ),
	get_the_author(),
	apply_filters( 'after_instructor_link', '' )
);
do_action( 'learn_press_after_course_instructor' );