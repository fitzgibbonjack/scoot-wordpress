<?php 
function theme_post_types() {
   // Location
   register_post_type('location', array(
      'public' => true,
      'labels' => array(
         'name' => 'Locations',
         'add_new_item' => 'Add New Location',
         'edit_item' => 'Edit Location',
         'all_items' => 'All Locations',
         'singular_name' => 'Location'
      ),
      'menu_icon' => 'dashicons-location-alt',
      'has_archive' => 'locations',
      'rewrite' => array('slug' => 'locations'),
      'supports' => array('title')
   ));
   
   // Career
   register_post_type('career', array(
      'public' => true,
      'labels' => array(
         'name' => 'Careers',
         'add_new_item' => 'Add New Career',
         'edit_item' => 'Edit Career',
         'all_items' => 'All Career',
         'singular_name' => 'Career'
      ),
      'menu_icon' => 'dashicons-businesswoman',
      'has_archive' => 'careers',
      'rewrite' => array('slug' => 'careers'),
      'supports' => array('title', 'editor')
   ));

   // Frequently Asked Question
   register_post_type('question', array(
      'public' => true,
      'labels' => array(
         'name' => 'Questions',
         'add_new_item' => 'Add New Question',
         'edit_item' => 'Edit Question',
         'all_items' => 'All Questions',
         'singular_name' => 'Question'
      ),
      'taxonomies' => array('category'),
      'menu_icon' => 'dashicons-search',
      'has_archive' => false,
      'supports' => array('title', 'editor',)
   ));
}

add_action('init', 'theme_post_types');