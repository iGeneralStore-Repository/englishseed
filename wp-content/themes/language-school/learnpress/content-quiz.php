<?php
/**
 * Template for displaying the content of single quiz 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */

global $quiz;
?>
<?php do_action( 'learn_press_before_single_quiz' ); ?>
<div itemscope id="quiz-<?php the_ID(); ?>" <?php learn_press_quiz_class(); ?>>
	<div class="cmsmasters_course_content">
		<?php do_action( 'learn_press_before_single_quiz_summary' ); ?>
		<div class="quiz-summary">
			<?php do_action( 'learn_press_single_quiz_summary' ); ?>
		</div>
		<?php 
			remove_action( 'learn_press_after_single_quiz_summary', 'learn_press_single_quiz_sidebar' );
			remove_action( 'learn_press_after_single_quiz_summary', 'learn_press_single_quiz_result' );
			
			do_action( 'learn_press_after_single_quiz_summary' );
			
		?>
	</div>
	<div class="cmsmasters_course_sidebar">
		<?php 
			add_action( 'learn_press_after_single_quiz_summary', 'learn_press_single_quiz_result' );
			add_action( 'learn_press_after_single_quiz_summary', 'learn_press_single_quiz_sidebar' );
			
			remove_action( 'learn_press_after_single_quiz_summary', 'learn_press_single_quiz_load_question' );
			remove_action( 'learn_press_after_single_quiz_summary', 'learn_press_single_quiz_questions' );
			remove_action( 'learn_press_after_single_quiz_summary', 'learn_press_display_course_link' );
			
			do_action( 'learn_press_after_single_quiz_summary' );
		?>
	</div>
	
</div>
<?php do_action( 'learn_press_after_single_quiz' ); ?>