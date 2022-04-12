<?php 
get_header(); 
get_hero(array(
   'title' => get_the_title(),
   'bg_url' => get_theme_file_uri('/assets/images/about-hero.jpg')
));
?>

<?php get_footer(); ?>