<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */

$viewable = learn_press_user_can_view_lesson( $lesson_quiz );//learn_press_is_enrolled_course();
$tag = $viewable ? 'a' : 'span';
?>
<li <?php learn_press_course_lesson_class( $lesson_quiz );?>>
    <?php do_action( 'learn_press_course_lesson_quiz_before_title', $lesson_quiz, $viewable );?>
    <<?php echo $tag;?> <?php echo $viewable ? 'href="' . learn_press_get_course_lesson_permalink( $lesson_quiz ) . '"' : '';?> lesson-id="<?php echo $lesson_quiz;?>" data-id="<?php echo $lesson_quiz;?>">
        <?php do_action( 'learn_press_course_lesson_quiz_begin_title', $lesson_quiz, $viewable );?>
        <?php echo get_the_title( $lesson_quiz );?>
        <?php do_action( 'learn_press_course_lesson_quiz_end_title', $lesson_quiz, $viewable );?>
    </<?php echo $tag;?>>
	
	<?php 
	if (get_post_format($lesson_quiz) != '') {
		echo '<span class="cmsmasters_theme_icon_lpr_lesson_' . get_post_format( $lesson_quiz ) . '"></span>';
	} else {
		echo '<span class="cmsmasters_theme_icon_lpr_lesson_standard"></span>';
	}
	?>
    <?php do_action( 'learn_press_course_lesson_quiz_after_title', $lesson_quiz, $viewable );?>
</li>