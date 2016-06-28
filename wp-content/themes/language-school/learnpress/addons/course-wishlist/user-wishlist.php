<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */


do_action( 'learn_press_before_all_wishlist' );
echo '<h3>' . esc_html__( 'All Wishlist', 'learnpress_wishlist' ) . '</h3>';
do_action( 'learn_press_before_wishlist_course' );
$my_query = learn_press_get_wishlist_courses( $user->ID );
if ( $my_query->have_posts() ) :
	echo '<div class="cmsmasters_learnpress_shortcode cmsmasters_3">';
	
	while ( $my_query->have_posts() ) : $my_query->the_post();
		learn_press_get_template( 'addons/course-wishlist/wishlist-content.php' );
	endwhile;
	
	echo '</div>';
else :
	do_action( 'learn_press_before_no_wishlist_course' );
	echo '<p>' . esc_html__( 'No courses in your wishlist!', 'learnpress_wishlist' ) . '</p>';
	do_action( 'learn_press_after_no_wishlist_course' );
endif;
do_action( 'learn_press_after_wishlist_course' );
wp_reset_postdata();

do_action( 'learn_press_after_all_wishlist' );
