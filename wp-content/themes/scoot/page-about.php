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

get_footer(); ?>