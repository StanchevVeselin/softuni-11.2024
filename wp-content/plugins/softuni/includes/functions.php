<?php

/**
 * Enqueue our script and styles
 */
function softuni_plugin_enqueue_assets()
{
   wp_enqueue_script('ajax-script', plugins_url(
      '../assets/scripts/script.js',
      __FILE__
   ), array('jquery'), 1.0);
   wp_localize_script('ajax-script', 'my_ajax_object', array('ajax_url'
   => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'softuni_plugin_enqueue_assets');


function softuni_service_upvote() {
   $id = esc_attr($_POST['id']);
   var_dump($_POST);

   var_dump($id);
   $upvote_number = get_post_meta($id, 'votes', true);
   update_post_meta($id, 'votes', $upvote_number + 1);
}


add_action('wp_ajax_nopriv_softuni_service_upvote', 'softuni_service_upvote');
add_action('wp_ajax_softuni_service_upvote', 'softuni_service_upvote');


/**
 * This is the call back function to display a service title with SHORTCODE
 */

function display_service_title($atts)
{


   $atts = shortcode_atts(array(
      'foo' => 'id',
      'show_image' => 'show_image',
   ), $atts, 'bartag');

   if (!empty($atts['id'])) {
      $title = get_the_title($atts['id']);
   }

   if (!empty($atts['show_image'])) {
      $image = get_the_post_thumbnail_url($atts['id']);
   }

   $content = '<div class="shortcode-class">';

   if (!empty($title)) {
      $content .= $title;
   }

   if (!empty($image)) {
      $content .= '<img src="' . $image . '">';
   }

   $content .= '</div>';

   return $content;
}

add_shortcode('display_service_title', 'display_service_title');




