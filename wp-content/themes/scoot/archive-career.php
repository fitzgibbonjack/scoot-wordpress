<?php 
get_header(); 

get_hero(array(
   'title' => 'Careers',
   'bg_url' => get_theme_file_uri('/assets/images/careers-locations-hero.jpg')
)); ?>

<main>
   <?php 
   get_image_section(array(
      'id' => 'careers-1',
      'imageUri' => get_theme_file_uri('/assets/images/join-us.jpg'),
      'imageAlt' => 'Employee giving presentation to colleagues',
      'title' => 'Care to join our mission?',
      'text' => 'We&apos;re always looking for ambitious individuals to help us on our journey. If
      you&apos;re passionate about our
      mission to provide clean, accessible transport to improve urban living we want to hear from you!',
      'buttonText' => 'Say Hello',
      'overlay' => array(
         'svg' => get_svg('/assets/patterns/left-downward-arrow.svg'),
         'insetMobile' => '53% 2%',
         'insetTablet' => '53% -10rem auto auto',
         'insetDesktop' => '20rem 0 auto auto'
      )
   )); 

   get_values_section(array(
      'title' => 'Why join us?'
   ));

?>

   <ol class="career-listings">
      <?php
while (have_posts()) {
   the_post();
   get_template_part('template_parts/career');
} ?>
   </ol>
</main>

<?php get_footer(); ?>