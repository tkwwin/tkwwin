<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = 'C:\www\www\wolfress/wp-content/cache/wp-rocket/';
$rocket_config_path = 'C:\www\www\wolfress/wp-content/wp-rocket-config/';

if ( file_exists( 'C:\www\www\wolfress\wp-content\plugins\wp-rocket\inc\front/process.php' ) ) {
	include 'C:\www\www\wolfress\wp-content\plugins\wp-rocket\inc\front/process.php';
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}