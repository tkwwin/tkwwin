<?php
/*
Plugin Name: Kimochi Post Demo
Plugin URI: http://kimochi.win
Description: Create post demo
Author: Nguyen Tuan Sieu
Version: 1.0
Author URI: http://sieu.vn
*/

require_once 'vendor/autoload.php';

function kimochi_add_menu() {
	add_submenu_page(
		'options-general.php',
		'Kimochi Post Demo',
		'Kimochi Post Demo',
		'manage_options',
		'kimochi-post-demo',
		'kimochi_post_demo' );
}

add_action( 'admin_menu', 'kimochi_add_menu' );

function kimochi_post_demo() {
    exit();
    $images = [
        'alex-radelich-318997-unsplash.jpg',
        'annie-gray-382969-unsplash.jpg',
        'anthony-ginsbrook-678771-unsplash.jpg',
        'ap-x-90-478899-unsplash.jpg',
        'arkadiusz-radek-310870-unsplash.jpg',
        'ash-edmonds-669383-unsplash.jpg',
        'badibanga-roger-639406-unsplash.jpg',
        'barn-images-12223-unsplash.jpg',
        'beach-towel-in-wind_4460x4460.jpg',
        'bedroom-bed-with-brown-throw-pillows_4460x4460.jpg',
        'blueprint-tools_4460x4460.jpg',
        'browsing-clothing_4460x4460.jpg',
        'building-plans-in-hand_4460x4460.jpg',
        'business-team-meeting-boardroom_4460x4460.jpg',
        'business-woman-in-city_4460x4460.jpg',
        'business-woman-waiting_4460x4460.jpg',
        'businessman-uses-calculator_4460x4460.jpg',
        'cafe-patio_4460x4460.jpg',
        'cement-truck-on-site_4460x4460.jpg',
        'chandler-denise-485516-unsplash.jpg',
        'chicago-city-lights-at-night_4460x4460.jpg',
        'christy-ash-140698-unsplash.jpg',
        'chuttersnap-210443-unsplash.jpg',
        'chuttersnap-330192-unsplash.jpg',
        'chuttersnap-681269-unsplash.jpg',
        'circular-saw-cuts-beam_4460x4460.jpg',
        'city-road-through-arches_4460x4460.jpg',
        'city-road_4460x4460.jpg',
        'city-skyline-morning_4460x4460.jpg',
        'claudio-hirschberger-576973-unsplash.jpg',
        'clem-onojeghuo-215220-unsplash.jpg',
        'coding-on-laptop_4460x4460.jpg',
        'coffee-and-working_4460x4460.jpg',
        'confident-young-woman_4460x4460.jpg',
        'construction-in-progress_4460x4460.jpg',
        'construction-site-plans_4460x4460.jpg',
        'construction-tools-flatlay_4460x4460.jpg',
        'construction-worker-safety-gear_4460x4460.jpg',
        'contact-us-image_4460x4460.jpg',
        'contruction-blueprints-tools_4460x4460.jpg',
        'core-strength-fitness_4460x4460.jpg',
        'couple-in-love_4460x4460.jpg',
        'cross-table-hand-shake_4460x4460.jpg',
        'dan-gold-624642-unsplash.jpg',
        'david-alacaraz-328972-unsplash.jpg',
        'david-carballar-597816-unsplash.jpg',
        'designer-at-work_4460x4460.jpg',
        'designer-drawing-website-mockup_4460x4460.jpg',
        'designers-desk-with-coffee-wireframes_4460x4460.jpg',
        'dominik-vanyi-629409-unsplash.jpg',
        'downtown-city-skyline_4460x4460.jpg',
        'downtown-london-england_4460x4460.jpg',
        'downtown-toronto_4460x4460.jpg',
        'emil-bruckner-522414-unsplash.jpg',
        'empire-state-city-skyline_4460x4460.jpg',
        'erik-zunder-100052-unsplash.jpg',
        'etienne-girardet-360004-unsplash.jpg',
        'fancycrave-219666-unsplash.jpg',
        'fancycrave-252334-unsplash.jpg',
        'fancycrave-252342-unsplash.jpg',
        'fancycrave-371058-unsplash.jpg',
        'fancycrave-371066-unsplash.jpg',
        'fashionable-man-checks-time_4460x4460.jpg',
        'feedback-for-web-design-mockups_4460x4460.jpg',
        'female-designer-reviewing-wireframes_4460x4460.jpg',
        'flatlay-for-construction_4460x4460.jpg',
        'frank-mckenna-252014-unsplash.jpg',
        'fun-at-carnival_4460x4460.jpg',
        'george-pastushok-383925-unsplash.jpg',
        'greyson-joralemon-482879-unsplash.jpg',
        'hands-on-blueprints_4460x4460.jpg',
        'hands-on-desk-at-meeting_4460x4460.jpg',
        'hands-using-computer-in-office_4460x4460.jpg',
        'historic-corner-building-prague_4460x4460.jpg',
        'hotel-room-bed_4460x4460.jpg',
        'in-office-working-on-laptop_4460x4460.jpg',
        'jamar-penny-352394-unsplash.jpg',
        'jamie-street-105288-unsplash.jpg',
        'jamie-street-368704-unsplash.jpg',
        'jean-francois-henri-110942-unsplash.jpg',
        'laptop-from-above_4460x4460.jpg',
        'laying-on-the-beach_4460x4460.jpg',
        'library-stunning-architecture_4460x4460.jpg',
        'loftstyle-bedroom-with-throw-pillows_4460x4460.jpg',
        'london-uk_4460x4460.jpg',
        'londons-busy-downtown_4460x4460.jpg',
        'long-view-of-new-york-city_4460x4460.jpg',
        'louie-martinez-447964-unsplash.jpg',
        'macbook-air-on-desk_4460x4460.jpg',
        'making-a-budget-tracking-finances_4460x4460.jpg',
        'man-using-macbook-air_4460x4460.jpg',
        'measure-twice-cut-once_4460x4460.jpg',
        'metal-coffee-tamp_4460x4460.jpg',
        'michael-schaffler-599153-unsplash.jpg',
        'model-poses-casually-on-ride_4460x4460.jpg',
        'music-lover_4460x4460.jpg',
        'neonbrand-357018-unsplash.jpg',
        'new-york-city-buildings-and-water-towers_4460x4460.jpg',
        'new-york-skyscrapers-at-dusk_4460x4460.jpg',
        'ng-15320-unsplash.jpg',
        'nick-hawkins-23638-unsplash.jpg',
        'nolan-issac-38303-unsplash.jpg',
        'office-desk-in-window-light_4460x4460.jpg',
        'office-staff-typing-on-laptop_4460x4460.jpg',
        'old-meets-new-city-buildings_4460x4460.jpg',
        'on-site-construction-worker_4460x4460.jpg',
        'ostap-senyuk-142629-unsplash.jpg',
        'person-using-laptop_4460x4460.jpg',
        'pliers-saw_4460x4460.jpg',
        'reading-charts-at-business-meeting_4460x4460.jpg',
        'red-mouse-computer_4460x4460.jpg',
        'ricardo-gomez-angel-466758-unsplash.jpg',
        'ricardo-gomez-angel-517604-unsplash.jpg',
        'rogers-center-cn-tower-sunset_4460x4460.jpg',
        'sherman-yang-597190-unsplash.jpg',
        'smiling-woman-poses_4460x4460.jpg',
        'soft-livingroom-sofa_4460x4460.jpg',
        'startup-desk_4460x4460.jpg',
        'startup-desktop_4460x4460.jpg',
        'stretching-woman-hands-feet_4460x4460.jpg',
        'students-working-on-project_4460x4460.jpg',
        'summer-fashion-and-smiles_4460x4460.jpg',
        'tablet-coffee_4460x4460.jpg',
        'taking-notes-and-working-on-laptop_4460x4460.jpg',
        'taking-notes-at-desk_4460x4460.jpg',
        'taking-notes-at-meeting_4460x4460.jpg',
        'tape-measure-on-wood_4460x4460.jpg',
        'team-listens-at-meeting_4460x4460.jpg',
        'team-sales-business-meeting_4460x4460.jpg',
        'thames-river-passes-london_4460x4460.jpg',
        'thomas-kelley-128629-unsplash.jpg',
        'tidy-desk-in-window-light_4460x4460.jpg',
        'tim-gouw-83023-unsplash.jpg',
        'todd-cravens-514433-unsplash.jpg',
        'tools-for-building-construction_4460x4460.jpg',
        'tools-for-carpentry_4460x4460.jpg',
        'tools-lined-up_4460x4460.jpg',
        'toronto-city-skyline_4460x4460.jpg',
        'toronto-stunning-sunset_4460x4460.jpg',
        'towering-new-york-building-from-above_4460x4460.jpg',
        'tuce-627429-unsplash.jpg',
        'university-study-group_4460x4460.jpg',
        'urban-buildings-with-traffic_4460x4460.jpg',
        'urban-street-in-morning_4460x4460.jpg',
        'woman-holding-coffee-mug_4460x4460.jpg',
        'woman-within-clothing-racks_4460x4460.jpg',
        'woman-works-at-desk_4460x4460.jpg',
        'women-work-office_4460x4460.jpg',
        'womens-tshirts_4460x4460.jpg',
        'work-journal_4460x4460.jpg',
        'worker-on-construction-site_4460x4460.jpg',
        'working-at-night_4460x4460.jpg',
        'write-notes-from-laptop_4460x4460.jpg',
        'writing-at-desk_4460x4460.jpg',
        'writing-in-notebook_4460x4460.jpg',
        'yellow-pillow-bedside-table_4460x4460.jpg',
        'young-woman-drinking-tea_4460x4460.jpg',
        'young-woman-holding-sunglasses_4460x4460.jpg',
    ];
	$faker = Faker\Factory::create('vi_VN');
	foreach ( $images as $image ) {
		$post                  = array();
		$post['post_category'] = array( 1 );
		$post['post_status']   = 'publish';
		$post['post_type']     = 'post';
		$post['post_title'] = $faker->sentence(20, true);
		$post['post_content'] = $faker->paragraphs(50, true);
		$imageUrl = 'http://localhost/wolfress/demo/' . $image;

		kimochi_post( $post, $imageUrl );
	}
}

function kimochi_post( $post, $image_url ) {
	$post_id = wp_insert_post( $post );
	kimochi_featured_image( $post_id, $image_url );
}

function kimochi_featured_image( $post_id, $image_url ) {
	//Featured Image
	$image_name       = basename( parse_url( $image_url, PHP_URL_PATH ) );
	$upload_dir       = wp_upload_dir();
	$image_data       = file_get_contents( $image_url );
	$unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name );
	$file_name        = basename( $unique_file_name );
	if ( wp_mkdir_p( $upload_dir['path'] ) ) {
		$file = $upload_dir['path'] . '/' . $file_name;
	} else {
		$file = $upload_dir['basedir'] . '/' . $file_name;
	}
	file_put_contents( $file, $image_data );
	$wp_filetype = wp_check_filetype( $file_name, null );
	$attachment  = array(
		'post_mime_type' => $wp_filetype['type'],
		'post_title'     => sanitize_file_name( $file_name ),
		'post_content'   => '',
		'post_status'    => 'inherit'
	);
	$attach_id   = wp_insert_attachment( $attachment, $file, $post_id );
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
	wp_update_attachment_metadata( $attach_id, $attach_data );
	set_post_thumbnail( $post_id, $attach_id );
}