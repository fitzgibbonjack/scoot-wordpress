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

// Hero section
function get_hero($args) { 
   $title = $args['title'];
   $bg_url = $args['bg_url'] ? $args['bg_url'] : get_theme_file_uri('/assets/images/about-hero.jpg');?>

<section class="hero" style="background-image: url(<?php echo $bg_url; ?>)">
   <div class="hero__inner container">
      <h1 class="hero__title"><?php echo $title ?></h1>
   </div>
</section>

<?php }