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

function wdv_cleanup () {
   // Snippet from: https://webdesignviews.com/clean-up-wordpress-header/
   remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
   remove_action('wp_head', 'wp_generator'); // remove wordpress version
   remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
   remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink
   remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // remove emojis
   remove_action( 'wp_print_styles', 'print_emoji_styles' );   // remove emojis
   remove_action('wp_head', 'adjacent_posts_rel_link_wp_head'); // remove the / and previous post links
   remove_action('wp_head', 'feed_links', 2); // remove rss feed links
   remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
   remove_action( 'wp_head', 'rest_output_link_wp_head', 10 ); // remove the REST API link
   remove_action( 'wp_head', 'wp_oembed_add_discovery_links' ); // remove oEmbed discovery links
   remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 ); // remove the REST API link from HTTP Headers
   remove_action( 'wp_head', 'wp_oembed_add_host_js' ); // remove oEmbed-specific javascript from front-end / back-end
   remove_action('rest_api_init', 'wp_oembed_register_route'); // remove the oEmbed REST API route
   remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10); // don't filter oEmbed results
}

function admin_cleanup() {
   remove_menu_page('edit.php'); // removes 'Posts' from sidebar
   remove_menu_page('upload.php'); // removes 'Media' from sidebar
   remove_menu_page('edit-comments.php'); // removes 'Comments' from sidebar
}

add_action('wp_enqueue_scripts',  'theme_files');
add_action('after_setup_theme', 'theme_features');
add_filter('acf/fields/google_map/api', 'google_api_key');
add_action('after_setup_theme', 'wdv_cleanup');
add_action('admin_menu', 'admin_cleanup');


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
         <button class="image-section__button button" type="button"><?php echo $args['buttonText']; ?></button>
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
   // add aria-hidden = 'true' to svg string
   $svg = substr_replace($svg, ' aria-hidden="true "', 4, 0);
   return $svg;
}