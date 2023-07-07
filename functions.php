<?php

function theme_style() {
    wp_enqueue_style('google_font', ('//fonts.googleapis.com'));
    wp_enqueue_style('google_font_style', ('//fonts.gstatic.com'));
    wp_enqueue_style('google_font_text', ('//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Work+Sans:wght@400;500;600;700&display=swap'));
    wp_enqueue_style('theme_main_styles', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('theme_general_styles', get_theme_file_uri('/css/general.css'));
    wp_enqueue_style('theme_slick_styles', get_theme_file_uri('/slick/slick-theme.css'));
    wp_enqueue_style('theme_slick_min_styles', get_theme_file_uri('/slick/slick.css'));
}

function theme_script() {
    wp_enqueue_script('script_call', get_theme_file_uri('/scripts/scripts.js'), array('jquery'), '2.2.0', true);
    wp_enqueue_script('slick_call', get_theme_file_uri('/slick/slick.js'), array('jquery'), '1.0', false);
    wp_enqueue_script('slick_min_call', get_theme_file_uri('/slick/slick.min.js'), array('jquery'), '1.0', false);
}

add_action( 'wp_enqueue_scripts', 'theme_style');
add_action( 'wp_enqueue_scripts', 'theme_script');