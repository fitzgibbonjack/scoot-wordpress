<?php 
get_header(); 
get_hero(array(
   'title' => get_the_title(),
   'bg_url' => get_theme_file_uri('/assets/images/about-hero.jpg')
));

get_image_section(array(
   'id' => 'about-1',
   'imageUri' => get_theme_file_uri('/assets/images/digital-era.jpg'),
   'imageAlt' => 'Woman on her phone',
   'title' => 'Mobility for the digital era',
   'text' => 'Getting around should be simple (and even fun!) for everyone. We embrace technology to provide low cost, smart access to scooters at your fingertips.',
   'overlay' => array(
      'svg' => get_svg('/assets/patterns/left-upward-arrow.svg'),
      'insetMobile' => '53% 2%',
      'insetTablet' => '53% -10rem auto auto',
      'insetDesktop' => '20rem 0 auto auto'
   )
));

get_image_section(array(
   'id' => 'about-2',
   'flipped' => true,
   'imageUri' => get_theme_file_uri('/assets/images/better-living.jpg'),
   'imageAlt' => 'Long exposure shot of a tram passing',
   'title' => 'Better urban living',
   'text' => 'We&apos;re helping connect cities and bring people closer together. Our scooters are also fully-electric and we offset the minimal carbon footprint for each ride.',
   'overlay' => array(
      'svg' => get_svg('/assets/patterns/right-arrow.svg'),
      'insetMobile' => '-1rem auto auto -10rem',
      'insetTablet' => '-1rem auto auto -10rem',
      'insetDesktop' => 'auto auto 10rem 0'
   )
));

get_values_section(array(
   'title' => 'Our Values'
)); 

// Query - all questions w/ 'How it works' category
$how_it_works = new WP_Query(array(
   'post_type' => 'question',
   'tax_query' => array(
      array(
         'taxonomy' => 'category',
         'field' => 'slug',
         'terms' => 'how-it-works'
      )
   )
));
// Query - all questions w/ 'Safe driving' category
$safe_driving = new WP_Query(array(
   'post_type' => 'question',
   'tax_query' => array(
      array(
         'taxonomy' => 'category',
         'field' => 'slug',
         'terms' => 'safe-driving'
      )
   )
)); ?>

<section class="faqs container">
   <h2 class="faqs__title">FAQs</h2>

   <section class="questions questions--safe">
      <h3 class="questions__title">How it works</h3>
      <div class="questions__container">
         <?php while($how_it_works->have_posts()) {
            $how_it_works->the_post(); 
            get_template_part('template_parts/question');
         }
         wp_reset_postdata(); ?>
      </div>
   </section>
   <section class="questions questions--safe">
      <h3 class="questions__title">Safe driving</h3>
      <div class="questions__container">
         <?php while($safe_driving->have_posts()) {
            $safe_driving->the_post(); 
            get_template_part('template_parts/question');
         }
         wp_reset_postdata(); ?>
      </div>
   </section>
</section>

<?php get_footer(); ?>