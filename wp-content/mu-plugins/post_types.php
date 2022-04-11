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
      'menu_icon' => 'dashicons-location-alt',
      'has_archive' => 'locations',
      'rewrite' => array('slug' => 'careers'),
      'supports' => array('title', )
   ));
}

add_action('init', 'theme_post_types');