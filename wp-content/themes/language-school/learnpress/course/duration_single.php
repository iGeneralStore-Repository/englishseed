<?php
/**
 * Template for displaying the duration of a course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */
 
$course_duration = get_post_meta( get_the_id(), '_lpr_course_duration', true );


if ($course_duration != '') {
?>
<div class="cmsmasters_course_meta_item">
	<div class="cmsmasters_course_meta_title">
		<span class="cmsmasters_theme_icon_lpr_duration"><?php esc_html_e('Period', 'language-school'); ?></span>
	</div>
	<div class="cmsmasters_course_meta_info">
		<span class="course-duration">
			<?php echo $course_duration . ' ' . esc_html__('weeks', 'language-school'); ?>
		</span>
	</div>
</div>
<?php
}
?>