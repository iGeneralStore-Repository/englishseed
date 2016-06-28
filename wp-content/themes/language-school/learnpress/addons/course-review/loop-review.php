<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */
?>

<li>
	<span class="avatar_wrap"><?php echo get_avatar( get_post_field( 'post_author', $review->ID ), 75 ); ?></span>
	<div class="cmsmasters_review_content">
		<h6 class="user-name">
			<?php do_action( 'learn_press_before_review_username' );?>
			<?php echo $review->user_login; ?>
			<?php do_action( 'learn_press_after_review_username' );?>
		</h6>
		<?php learn_press_course_review_template( 'rating-stars.php', array( 'rated' => $review->rate ) );?>
		<div class="cl"></div>
		<h5 class="review-title">
			<?php do_action( 'learn_press_before_review_title' );?>
			<?php echo $review->title ?>
			<?php do_action( 'learn_press_after_review_title' );?>
		</h5>
		<div class="review-content">
			<?php do_action( 'learn_press_before_review_content' );?>
			<?php echo $review->content ?>
			<?php do_action( 'learn_press_after_review_content' );?>
		</div>
	</div>
</li>