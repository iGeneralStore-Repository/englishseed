<?php

/**
 *
 * Please see single-event.php in this directory for detailed instructions on how to use and modify these templates.
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.0.0
 *
 */


?>

<script type="text/html" id="tribe_tmpl_month_mobile_day_header">
	<div class="tribe-mobile-day" data-day="[[=date]]">[[ if(has_events) { ]]
		<h3 class="tribe-mobile-day-heading">[[=i18n.for_date]] <span>[[=raw date_name]]</span></h3>[[ } ]]
	</div>
</script>

<script type="text/html" id="tribe_tmpl_month_mobile">
	<div class="tribe-events-mobile hentry vevent tribe-clearfix tribe-events-mobile-event-[[=eventId]][[ if(categoryClasses.length) { ]] [[= categoryClasses]][[ } ]]">
		[[ if(imageSrc.length) { ]]
		<div class="tribe-events-event-image">
			<a href="[[=permalink]]" title="[[=title]]">
				<img src="[[=imageSrc]]" alt="[[=title]]" title="[[=title]]">
			</a>
		</div>
		[[ } ]]
		<h2 class="summary">
			<a class="url" href="[[=permalink]]" title="[[=title]]" rel="bookmark">[[=title]]</a>
		</h2>
		<div class="tribe-events-event-body">
			<div class="updated published time-details">
				<span class="date-start dtstart">[[=dateDisplay]] </span>
			</div>
			[[ if(excerpt.length) { ]]
			<p class="entry-summary description">[[=raw excerpt]]</p>
			[[ } ]]
			<a href="[[=permalink]]" class="tribe-events-read-more" rel="bookmark">[[=i18n.find_out_more]]</a>
		</div>
	</div>
</script>