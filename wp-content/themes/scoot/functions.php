<?php

function theme_files() {
   wp_enqueue_style('font-lexend-deca', 'https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;700');
   wp_enqueue_style('font-space-mono', 'https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700');
   wp_enqueue_script('scoot_main_script', get_theme_file_uri('/build/index.js'), NULL, "1.0", TRUE);
   wp_enqueue_style('scoot_main_styles', get_theme_file_uri('/build/index.css'));
}

function theme_features() {
   add_theme_support('title-tag');
}

function google_api_key($api) {
   $api['key'] = 'AIzaSyAGwJBWNjxetUyUBx9VXCP-Sk71eUPOR3k';
   return $api;
}

add_action('wp_enqueue_scripts',  'theme_files');
add_action('after_setup_theme', 'theme_features');
add_filter('acf/fields/google_map/api', 'google_api_key');

/* ------------------- */
/* TEMPLATE FUNCTIONS */
/* ----------------- */

// Hero section
function get_hero($args) { 
   $title = $args['title'];
   $bg_url = $args['bg_url'] ? $args['bg_url'] : get_theme_file_uri('/assets/images/about-hero.jpg');?>

<section class="hero" style="background-image: url(<?php echo $bg_url; ?>)">
   <div class="hero__inner container">
      <h1 class="hero__title"><?php echo $title ?></h1>
      <?php if ($args['subtitle']) { ?>
      <span class="hero__subtitle"><?php echo $args['subtitle']; ?></span>
      <?php } ?>
   </div>
</section>

<?php }

// Image section
function get_image_section($args) { ?>
<?php $flipped = $args['flipped'] ? 'flipped' : ''; ?>

<section class="image-section <?php echo $flipped; ?>" id="<?php echo $args['id']; ?>">
   <style>
   <?php echo '#'. $args['id'] . ' ';

   ?>svg {
      inset: <?php echo $args['overlay']['insetMobile'];
      ?>;
   }

   @media only screen and (min-width: 48em) {
      <?php echo '#'. $args['id'] . ' ';

      ?>svg {
         inset: <?php echo $args['overlay']['insetTablet'];
         ?>;
      }
   }

   @media only screen and (min-width: 78em) {
      <?php echo '#'. $args['id'] . ' ';

      ?>svg {
         inset: <?php echo $args['overlay']['insetDesktop'];
         ?>;
      }
   }
   </style>
   <div class="image-section__inner container">
      <div class="image-section__image">
         <img src="<?php echo $args['imageUri']; ?>" alt="<?php echo $args['imageAlt']; ?>">
         <?php echo $args['overlay']['svg']; ?>
      </div>

      <div class="image-section__body">
         <h2 class="image-section__title"><?php echo $args['title']; ?></h2>
         <p class="image-section__text"><?php echo $args['text']; ?></p>

         <?php if($args['buttonText']) { ?>
         <button class="image-section__button button" type="button">Say Hello</button>
         <?php } ?>
      </div>
   </div>
</section>
<?php }

// Numbered section
function get_numbered_section($args) { ?>
<section class="numbered-section">
   <div class="numbered-section__image">
      <img src="<?php echo $args['imageUri']; ?>" alt="<?php echo $args['imageAlt']; ?>">
      <span><?php echo $args['number']; ?></span>
   </div>
   <div class="numbered-section__body">
      <h3 class="numbered-section__title"><?php echo $args['title']; ?></h3>
      <p class="numbered-section__text"><?php echo $args['text']; ?></p>
   </div>
</section>
<?php }

// Values section
function get_values_section($args) { ?>
<section class="values container">
   <h2 class="values__title"><?php echo $args['title'] ?></h2>
   <?php get_template_part('template_parts/values'); ?>
</section>
<?php } 

// Get <svg> from file -> returns string
function get_svg($file_path) {
   $svg_path = get_theme_file_path($file_path);
   // contents of file as a string
   $svg_file = file_get_contents($svg_path);
   // substring containing only <svg> and onwards
   $tag_pos = strpos($svg_file, '<svg');
   $svg = substr($svg_file, $tag_pos);
   // TO-DO: add aria-hidden = 'true' to svg string
   return $svg;
}