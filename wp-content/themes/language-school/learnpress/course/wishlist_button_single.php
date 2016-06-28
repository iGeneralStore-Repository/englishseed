<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */
 
$user_id = get_current_user_id();
$course_id = get_the_ID();
$wish_list = get_user_meta( $user_id, '_lpr_wish_list', true );
if ( !$wish_list ) {
	$wish_list = array();
}
if ( in_array( $course_id, $wish_list ) ) {
	$class = 'course-wishlisted';
} else {
	$class = 'course-wishlist';
}
do_action('learn_press_before_wishlist_button');
?>
<div class="cmsmasters_course_meta_item">
	<div class="cmsmasters_course_meta_title">
		<span class="cmsmasters_theme_icon_lpr_wishlist"><?php esc_html_e('Wishlist', 'language-school'); ?></span>
	</div>
	<div class="cmsmasters_course_meta_info">
<?php
printf(
	'<span class="cmsmasters_theme_icon_lpr_wish %s" course-id="%s"></span>',
	$class,
	$course_id
);
?>
	</div>
</div>
<?php
do_action('learn_press_after_wishlist_button');