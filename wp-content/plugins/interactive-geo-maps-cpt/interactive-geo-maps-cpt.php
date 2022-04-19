<?php
/**
 * Interactive Geo Maps Callback
 *
 * @wordpress-plugin
 * Plugin Name:       Interactive Geo Maps CPT Addon
 * Plugin URI:        https://interactivegeomaps.com
 * Description:       Connects CPT with map
 * Version:           1.0.0
 * Author:            Carlos Moreira
 * Author URI:        https://cmoreira.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_filter( 'igm_add_meta', 'igm_cpt_addon', 1 );

/**
 * Filter map output
 * @param array $meta - meta data from the map
 * @return array modified meta 
 */
function igm_cpt_addon( $meta ){

          // if you want to target a specific map, use this code with your map ID
          /*
          if ( intval( $meta['id'] ) !== 999 ) {
                    return $meta;
          } */

          // you can modify/populate the different types of data. In this example we'll modify 'regions'
          // but you could modify 'roundMarkers', 'iconMarkers', 'vectorIcons' and 'labels'. 

          $post_type = 'location'; // modify here to set your own custom post type

          // we will query the custom post types and loop through them
          $args = array(
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'post_type'      => $post_type,
          );

          $posts = get_posts( $args );

          $roundMarkers = [];

          // loop posts.
          foreach ( $posts as $post ) {
                    // in this example we'll get the region code from a custom meta field
                    // if you're using ACF you can use the function  get_field instead 

                    $entry = array(
                              'id'             => $post->ID, 
                              'title'          => $post->post_title,
                              'useDefaults'    => '1', // set this to 1, to allow the regions to inherit colors from default settings. If you want to control the colours populate the 'fill' and 'hover' parameters
                              'latitude'       => get_field('location', $post->ID, true)['lat'],
                              'longitude'      => get_field('location', $post->ID, true)['lng'],
                    );

                    // you can populate the entry with whatever custom fields you need. You can then use {customField01} in the tooltip template, to display information from those fields
                    array_push( $roundMarkers, $entry );

          }

          $meta['roundMarkers'] = $roundMarkers;

          return $meta;
}