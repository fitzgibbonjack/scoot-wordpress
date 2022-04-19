<?php get_header(); ?>

<section class="home-hero hero">
   <div class="home-hero__inner container">
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

<main>
   <?php 
get_template_part('template_parts/getting-started');

get_image_section(array(
   'id' => 'home-1',
   'imageUri' => get_theme_file_uri('/assets/images/telemetry.jpg'),
   'imageAlt' => 'Woman looking at something on her smart phone',
   'title' => 'Easy to use riding telemetry',
   'text' => 'The Scoot app is available with riding telemetry. This means it can show you your average speed, how long you&apos;ve been using the scooter, your traveling distance, and many more things all in an easy to use app.',
   'buttonText' => 'Learn More',
   'overlay' => array(
      'svg' => get_svg('/assets/patterns/left-downward-arrow.svg'),
      'insetMobile' => '53% 2%',
      'insetTablet' => '53% -10rem auto auto',
      'insetDesktop' => '20rem 0 auto auto'
   )
));

get_image_section(array(
   'id' => 'home-2',
   'imageUri' => get_theme_file_uri('/assets/images/near-you.jpg'),
   'imageAlt' => 'A downtown metropolis, with trees in view',
   'title' => 'Coming to a city near you',
   'text' => 'Scoot is available in 4 major cities so far. We’re expanding rapidly, so be sure to let us know if you want to see us in your hometown. We’re aiming to let our scooters loose on 23 cities over the coming year.',
   'buttonText' => 'Learn More',
   'flipped' => true,
   'overlay' => array(
      'svg' => get_svg('/assets/patterns/right-arrow.svg'),
      'insetMobile' => '-1rem auto auto -10rem',
      'insetTablet' => '-1rem auto auto -10rem',
      'insetDesktop' => 'auto auto 10rem 0'
   )
));

get_image_section(array(
   'id' => 'home-3',
   'imageUri' => get_theme_file_uri('/assets/images/payments.jpg'),
   'imageAlt' => 'A man putting cash into his wallet',
   'title' => 'Zero hassle payments',
   'text' => 'Our payment is as easy as one two three. We accept most credit cards and debit cards. You can also link your PayPal account inside the app. Need to pay later? No worries! You can defer payment for up to a month.',
   'buttonText' => 'Learn More',
   'overlay' => array(
      'svg' => get_svg('/assets/patterns/left-downward-arrow.svg'),
      'insetMobile' => '53% 2%',
      'insetTablet' => '53% -10rem auto auto',
      'insetDesktop' => '20rem 0 auto auto'
   )
)); ?>
</main>

<?php get_footer(); ?>