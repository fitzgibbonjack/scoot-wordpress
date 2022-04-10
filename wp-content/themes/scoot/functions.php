<?php

function theme_files() {
   wp_enqueue_script('scoot_main_script', get_theme_file_uri('/build/index.js'), NULL, "1.0", TRUE);
   wp_enqueue_style('scoot_main_styles', get_theme_file_uri('/build/index.css'));
   wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@200;300;400;500;700&family=Space+Mono:wght@400;700&display=swap');
}

add_action('wp_enqueue_scripts',  'theme_files');