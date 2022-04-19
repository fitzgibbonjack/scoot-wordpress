<?php 
get_header(); 
get_hero(array(
   'title' => '404: Page not found!',
   'bg_url' => get_theme_file_uri('/assets/images/about-hero.jpg')
));
?>

<main class="error container">
   <p class="error__text">The page you're looking for does not exist!</p>
   <a class="button error__button" href="<?php echo get_home_url(); ?>">Go home</a>
</main>

<?php get_footer(); ?>