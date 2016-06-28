<?php
/** 
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */
?>

<span class="cmsmasters_lpr_profile_avatar"><?php echo get_avatar( $user->ID ); ?></span>
<div class="cmsmasters_lpr_profile_wrap">
	<h6 class="cmsmasters_lpr_profile_name"><?php echo $user->data->user_nicename; ?></h6>
	<div class="cmsmasters_lpr_profile_content"><?php echo get_user_meta( $user->ID, 'description', true ); ?></div>
</div>