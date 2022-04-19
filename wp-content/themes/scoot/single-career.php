<?php 
$locations = get_field('related_locations');

get_header(); 
get_hero(array(
   'title' => get_the_title(),
   'subtitle' => get_the_title($locations[0]),
   'bg_url' => get_theme_file_uri('/assets/images/about-hero.jpg')
));
?>

<main class="single-career__content container">
   <?php echo get_the_content(); ?>
</main>

<?php get_footer(); ?>