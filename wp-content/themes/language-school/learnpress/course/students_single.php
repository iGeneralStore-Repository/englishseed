<?php
/**
 * Template for displaying the students of a course
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */
learn_press_prevent_access_directly();
?>
<?php do_action( 'learn_press_before_course_students' );?>
<div class="cmsmasters_course_meta_item">
	<div class="cmsmasters_course_meta_title">
		<span class="cmsmasters_theme_icon_lpr_students"><?php esc_html_e('Students', 'language-school'); ?></span>
	</div>
	<div class="cmsmasters_course_meta_info">
		<span class="course-students">
			<?php do_action( 'learn_press_begin_course_students' );?>
			<?php if( $count = learn_press_count_students_enrolled() ):?>
				<?php echo $count;?>
			<?php else:?>
			<?php esc_html_e('0', 'language-school');?>
			<?php endif;?>
			<?php do_action( 'learn_press_end_course_students' );?>
		</span>
		<?php do_action( 'learn_press_after_course_students' );?>
	</div>
</div>