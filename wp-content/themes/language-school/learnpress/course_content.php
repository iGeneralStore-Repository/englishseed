<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */
 
 
	$cmsmasters_lpr_course_title = get_post_meta(get_the_ID(), 'cmsmasters_lpr_course_title', true);
	
	$cmsmasters_lpr_course_image = get_post_meta(get_the_ID(), 'cmsmasters_lpr_course_image', true);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/CreativeWork">
	<div class="cmsmasters_course_content">
		<?php do_action( 'learn_press_before_course_header' ); ?>
		<header class="entry-header">
			<?php
			do_action( 'learn_press_before_the_title' );
			
			if ($cmsmasters_lpr_course_title == 'true') {
				the_title( '<h2 class="entry-title cmsmasters_course_title">', '</h2>' );
			}
			
			remove_action( 'learn_press_after_the_title', 'learn_press_course_thumbnail');
			
			if ($cmsmasters_lpr_course_image == 'true' && has_post_thumbnail()) {
				language_school_thumb(get_the_ID(), 'cmsmasters-post-thumbnail', false, true, true, false, true, true, false);
			}
			
			remove_action('learn_press_after_the_title', 'learn_press_print_rate');
			do_action( 'learn_press_after_the_title' );	
			?>
		</header>
		<!-- .entry-header -->
		<?php do_action( 'learn_press_before_course_content' ); ?>
		<div class="entry-content">
			<?php
			do_action( 'learn_press_before_the_content' );		
			if ( learn_press_is_enrolled_course() ) {
				learn_press_get_template_part( 'course_content', 'learning_page' );
			} else {
				learn_press_get_template_part( 'course_content', 'landing_page' );
			}
			do_action( 'learn_press_after_the_content' );
			?>
		</div>
		<!-- .entry-content -->
		<?php do_action( 'learn_press_before_course_footer' ); ?>
		<footer class="entry-footer">
			<?php
			edit_post_link( esc_html__( 'Edit', 'learn_press' ), '<span class="edit-link">', '</span>' );
			?>
		</footer>
		<!-- .entry-footer -->
	</div>
	<div class="cmsmasters_course_sidebar">
		<?php
			if ( learn_press_is_enrolled_course() ) {
				learn_press_get_template_part( 'course_content', 'learning_sidebar' );
			} else {
				learn_press_get_template_part( 'course_content', 'landing_sidebar' );
			}
		?>
	</div>
</article><!-- #post-## -->
