<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version		1.0.0
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = language_school_get_global_options();


echo '</div>' . "\r" . 
	'</div>' . "\n" . 
'</div>' . "\n" . 
'<!-- _________________________ Finish Middle _________________________ -->' . "\n\n\n";

get_sidebar('bottom');

echo '<a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_icon_slide_top"></a>' . "\n";
?>
	</div>
<!-- _________________________ Finish Main _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
<footer id="footer" role="contentinfo" class="<?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_scheme'] . ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small'); ?>">
	<div class="footer_border">
		<div class="footer_inner">
		<?php 
		language_school_footer_logo($cmsmasters_option);
		
		
		language_school_get_footer_custom_html($cmsmasters_option);
		
		
		language_school_get_footer_nav($cmsmasters_option);
		
		
		language_school_get_footer_social_icons($cmsmasters_option);
		
		
		echo '<span class="footer_copyright copyright">' . stripslashes($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_copyright']) . '</span>';
		?>
		</div>
	</div>
</footer>
<!-- _________________________ Finish Footer _________________________ -->

</div>
<!-- _________________________ Finish Page _________________________ -->

<?php wp_footer(); ?>
</body>
</html>
