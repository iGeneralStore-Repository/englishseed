<?php
/**
 * Template for displaying the categories of a course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */

learn_press_prevent_access_directly();
do_action( 'learn_press_before_course_categories' );

$term_list = get_the_term_list( get_the_ID(), 'course_category', '', ', ', '' );
if( $term_list ) {
?>
<div class="cmsmasters_lrp_archive_item">
	<div class="cmsmasters_lrp_archive_item_title">
		<?php esc_html_e('Categories', 'language-school'); ?>
	</div>
	<div class="cmsmasters_lrp_archive_item_meta">
<?php
	printf(
		'<span class="cat-links">%s</span>',
		$term_list
	);
?>
	</div>
</div>
<?php
}
do_action( 'learn_press_after_course_categories' );
