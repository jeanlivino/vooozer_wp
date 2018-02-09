<?php
/*
Plugin Name: Vooozer WP
Plugin URI: https://github.com/jeanlivino/vooozer-wp
Description: Plugin que gera shortcode para inserção do vooozer em seu blog.
Version: 1
Author: Jean Livino
Author URI: https://jeanlivino.com.br/
Text Domain: vooozer-wp
*/
// Add Shortcode
function create_vooozer( $atts ) {

 // Attributes
 $atts = shortcode_atts(
	 array(
		 'id' => '',
	 ),
	 $atts
 );
    $out = '<div class="vooozer"><iframe style="height: 83px; width: 100%;" src="https://go.vooozer.com/embed/';
      $out .= esc_attr($atts['id']);
      $out .= '" width="100%" height="83" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe></div>';
	return $out;
}
add_shortcode( 'vooozer', 'create_vooozer' );
 ?>
