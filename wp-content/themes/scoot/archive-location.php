<?php 
get_header(); 
get_hero(array(
   'title' => 'Locations',
   'bg_url' => get_theme_file_uri('/assets/images/careers-locations-hero.jpg')
));
?>


<main class="locations container">
   <?php echo do_shortcode("[display-map id='100']"); ?>
   <ol class="locations__list">
      <?php while (have_posts()) {
         the_post(); ?>
      <li class="locations__item">
         <?php echo strtok(get_the_title(), ','); ?>
      </li>
      <?php } ?>
   </ol>
</main>

<aside class="not-listed container">
   <h2 class="not-listed__title">Your City Not Listed?</h2>
   <p class="not-listed__text">If you&apos;d like to see Scoot in your hometown, be sure to let us know. We track
      requests and plan launches based on demand. Feel free to message us by clicking the link or messaging us on
      social.</p>
   <a href="#" class="button not-listed__button">Message Me</a>
</aside>

<?php get_footer(); ?>