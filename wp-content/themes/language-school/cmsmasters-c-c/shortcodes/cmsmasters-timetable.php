<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version 	1.0.0
 * 
 * Content Composer Timetable Shortcode
 * Created by CMSMasters
 * 
 */

extract(shortcode_atts($new_atts, $atts));
	
	
$unique_id = uniqid();


$out = '<div id="cmsmasters_timetable_shortcode_' . $unique_id . '" class="cmsmasters_timetable_shortcode' . 
(($classes != '') ? ' ' . $classes : '') . 
'">';

$out .= "
<style type=\"text/css\">
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected {
		" . cmsmasters_color_css('color', $box_txt_color) . "
		background-color:transparent;
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected .sub-menu {
		" . cmsmasters_color_css('background-color', $box_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} .tt_tabs_navigation,
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event,
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event:not(.tt_single_event) .event_container,
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected .sub-menu,
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected {
		" . cmsmasters_color_css('border-color', $box_bd_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected .sub-menu li a {
		" . cmsmasters_color_css('color', $row1_txt_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} .tt_tabs_navigation li:not(.ui-tabs-active) a {
		" . cmsmasters_color_css('color', $box_txt_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} .tt_tabs_navigation li a.selected,
	#cmsmasters_timetable_shortcode_{$unique_id} .tt_tabs_navigation li.ui-tabs-active a {
		" . cmsmasters_color_css('border-left-color', $box_bd_color) . 
		cmsmasters_color_css('border-right-color', $box_bd_color) . 
		cmsmasters_color_css('border-bottom-color', $box_bg_color) . 
		cmsmasters_color_css('background-color', $box_bg_color) . "
	}
	
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable tr.row_gray {
		" . cmsmasters_color_css('color', $row1_txt_color) . "
		" . cmsmasters_color_css('background-color', $row1_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable tr {
		" . cmsmasters_color_css('color', $row2_txt_color) . "
		" . cmsmasters_color_css('background-color', $row2_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event {
		" . cmsmasters_color_css('background-color', $box_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event hr {
		" . cmsmasters_color_css('background-color', $box_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event_container, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event {
		" . cmsmasters_color_css('background-color', $box_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected .sub-menu li a:hover, 
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected .sub-menu li.selected a {
		" . cmsmasters_color_css('color', $box_hover_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} .tt_tabs_navigation li a.selected:before,
	#cmsmasters_timetable_shortcode_{$unique_id} .tt_tabs_navigation li.ui-tabs-active a:before,
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected:hover,
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event_container:hover, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event:hover, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_tooltip_content {
		" . cmsmasters_color_css('background-color', $box_hover_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event:hover .event_container,
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected:hover,
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event:hover,
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event:not(.tt_single_event) .event_container:hover {
		" . cmsmasters_color_css('border-color', $box_hover_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event .event_container,
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event .event_container:hover {
		background-color:transparent;
		color:inherit;
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_tooltip_arrow {
		" . cmsmasters_color_css('border-color', $box_hover_bg_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event_container, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event_container a, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event a {
		" . cmsmasters_color_css('color', $box_txt_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected:hover,
	#cmsmasters_timetable_shortcode_{$unique_id} .tabs_box_navigation .tabs_box_navigation_selected:hover:before,
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event_container:hover, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event_container:hover a, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event:hover, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event:hover a, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_tooltip_content, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_tooltip_content a {
		" . cmsmasters_color_css('color', $box_hover_txt_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event_container .hours, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event .hours {
		" . cmsmasters_color_css('color', $box_hours_txt_color) . "
	}
	
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .event_container:hover .hours, 
	#cmsmasters_timetable_shortcode_{$unique_id} table.tt_timetable .tt_single_event:hover .hours {
		" . cmsmasters_color_css('color', $box_hours_hover_txt_color) . "
	}
	
	@media only screen and (max-width: 767px) {
		#cmsmasters_timetable_shortcode_{$unique_id} .tt_tabs_navigation li a.selected,
		#cmsmasters_timetable_shortcode_{$unique_id} .tt_tabs_navigation li.ui-tabs-active a,
		#cmsmasters_timetable_shortcode_{$unique_id} .tt_tabs_navigation li a {
			" . cmsmasters_color_css('border-color', $box_bd_color) . 
			cmsmasters_color_css('background-color', $box_bg_color) . "
		}
	}
</style>";


$out_timetable = do_shortcode('[tt_timetable' . 
	($event != '' ? ' event="' . $event . '"' : '') . 
	($event_category != '' ? ' event_category="' . $event_category . '"' : '') . 
	($hour_category != '' ? ' hour_category="' . $hour_category . '"' : '') . 
	($columns != '' ? ' columns="' . $columns . '"' : '') . 
	' measure="' . $measure . '"' . 
	' filter_style="' . $filter_style . '"' . 
	' filter_kind="' . $filter_kind . '"' . 
	' filter_label="' . $filter_label . '"' . 
	($time_format == 'custom' ? ($time_format_custom != '' ? ' time_format="' . $time_format_custom . '"' : '') : ' time_format="' . $time_format . '"') . 
	' hide_all_events_view="' . $hide_all_events_view . '"' . 
	' hide_hours_column="' . $hide_hours_column . '"' . 
	' show_end_hour="' . $show_end_hour . '"' . 
	' event_layout="' . $event_layout . '"' . 
	' hide_empty="' . $hide_empty . '"' . 
	' disable_event_url="' . $disable_event_url . '"' . 
	' text_align="' . $text_align . '"' . 
	($id != '' ? ' id="' . $id . '"' : '') . 
	(($row_height != '' && $row_height != '0') ? ' row_height="' . $row_height . '"' : '') . 
	' box_bg_color="' . $box_bg_color . '"' . 
	' box_hover_bg_color="' . $box_hover_bg_color . '"' . 
	' box_bd_color="' . $box_bd_color . '"' . 
	' box_txt_color="' . $box_txt_color . '"' . 
	' box_hover_txt_color="' . $box_hover_txt_color . '"' . 
	' box_hours_txt_color="' . $box_hours_txt_color . '"' . 
	' box_hours_hover_txt_color="' . $box_hours_hover_txt_color . '"' . 
	' filter_color=""' . 
	' row1_color="' . $row1_bg_color . '"' . 
	' row2_color="' . $row2_bg_color . '"' . 
']');


$out .= preg_replace("/#rgb/", 'rgb', $out_timetable);


$out .= '</div>';


echo $out;