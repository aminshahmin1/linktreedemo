<?php
/**
 * Theme setup and assets.
 *
 * @package Syifaa_Linktree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function syifaa_linktree_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'syifaa-linktree' ),
		)
	);
}
add_action( 'after_setup_theme', 'syifaa_linktree_setup' );

function syifaa_linktree_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'syifaa-linktree-style',
		get_template_directory_uri() . '/assets/css/styles.css',
		array(),
		$theme_version
	);

	wp_enqueue_script(
		'syifaa-linktree-script',
		get_template_directory_uri() . '/assets/js/script.js',
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'syifaa_linktree_assets' );
