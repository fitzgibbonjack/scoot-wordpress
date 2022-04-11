<?php get_header(); ?>

<section class="home-hero hero">
   <div class="container">
      <h1 class="home-hero__title"><?php bloginfo('description'); ?></h1>
      <div class="home-hero__body">
         <p class="home-hero__text">Scoot takes the hassle out of urban mobility. Our bikes are placed in convinient
            locations
            in each of our cities.
            Use our app to locate the nearest bike, unlock it with a tap, and you're away!</p>

         <?php get_template_part('template_parts/cta'); ?>
      </div>
   </div>
</section>

<?php get_footer(); ?>