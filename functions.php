<?php

define("CHILD_THEME", get_stylesheet_directory_uri());

function theme_enqueue_scripts() {
	wp_enqueue_style( 'parent-styles', TEMPLATE_URL . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );