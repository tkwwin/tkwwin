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
	$images = array(
        'city-road-through-arches_4460x4460.jpg',
        'city-road_4460x4460.jpg',
        'city-skyline-morning_4460x4460.jpg',
        'claudio-hirschberger-576973-unsplash.jpg',
        'clem-onojeghuo-215220-unsplash.jpg',
        'construction-in-progress_4460x4460.jpg',
        'construction-site-plans_4460x4460.jpg',
        'construction-tools-flatlay_4460x4460.jpg',
        'construction-worker-safety-gear_4460x4460.jpg',
        'contruction-blueprints-tools_4460x4460.jpg',
        'dan-gold-624642-unsplash.jpg',
        'david-alacaraz-328972-unsplash.jpg',
        'david-carballar-597816-unsplash.jpg',
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
        'frank-mckenna-252014-unsplash.jpg',
        'fun-at-carnival_4460x4460.jpg',
        'george-pastushok-383925-unsplash.jpg',
        'greyson-joralemon-482879-unsplash.jpg',
        'hands-on-blueprints_4460x4460.jpg',
        'historic-corner-building-prague_4460x4460.jpg',
        'hotel-room-bed_4460x4460.jpg',
        'jamar-penny-352394-unsplash.jpg',
        'jamie-street-105288-unsplash.jpg',
        'jamie-street-368704-unsplash.jpg',
        'jean-francois-henri-110942-unsplash.jpg',
        'library-stunning-architecture_4460x4460.jpg',
        'loftstyle-bedroom-with-throw-pillows_4460x4460.jpg',
	);
	$faker = Faker\Factory::create('vi_VN');
	foreach ( $images as $image ) {
		$post                  = array();
		$post['post_category'] = array( 8 );
		$post['post_status']   = 'publish';
		$post['post_type']     = 'post';
		$post['post_title'] = 'Mẫu nhà biệt thự ' . $faker->firstName . ' ' . $faker->lastName . ' ở ' . $faker->city;
		$post['post_content'] = $faker->paragraphs(50, true);
		$imageUrl = 'http://localhost/wp-demo/p4/' . $image;

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