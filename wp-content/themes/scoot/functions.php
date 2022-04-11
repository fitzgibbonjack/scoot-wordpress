<?php

function theme_files() {
   wp_enqueue_style('font-lexend-deca', 'https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;700');
   wp_enqueue_style('font-space-mono', 'https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700');
   wp_enqueue_script('scoot_main_script', get_theme_file_uri('/build/index.js'), NULL, "1.0", TRUE);
   wp_enqueue_style('scoot_main_styles', get_theme_file_uri('/build/index.css'));
}

function theme_features() {
   add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts',  'theme_files');
add_action('after_setup_theme', 'theme_features');