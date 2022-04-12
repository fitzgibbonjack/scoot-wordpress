<?php 
get_header(); 

get_hero(array(
   'title' => 'Careers',
   'bg_url' => get_theme_file_uri('/assets/images/careers-locations-hero.jpg')
));

get_image_section(array(
   'id' => 'careers-1',
   'imageUri' => get_theme_file_uri('/assets/images/join-us.jpg'),
   'imageAlt' => 'Employee giving presentation to colleagues',
   'title' => 'Care to join our mission?',
   'text' => 'We&apos;re always looking for ambitious individuals to help us on our journey. If
   you&apos;re passionate about our
   mission to provide clean, accessible transport to improve urban living we want to hear from you!',
   'buttonText' => 'Say Hello',
   'overlay' => get_svg('/assets/patterns/left-downward-arrow.svg'),
)); ?>

<section class="join-us container">
   <h2 class="join-us__title">Why join us?</h2>
   <?php get_template_part('template_parts/values'); ?>
</section>

<?php get_footer(); ?>