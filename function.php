<?php 


//Listing Type Multi Lantuage Support
add_filter('rtcl_get_listing_types', function ($types) {
	$types['purchase'] = esc_html__('Purchase', 'homlisti');

	return $types;
});