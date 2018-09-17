<?php
/*
* Plugin Name: Zolitext
* Description: Pour faire du joli!
* Version: 1.0
* Author: Groutch
* Author URI: http://www.github.com/Groutch
*/

function wp_zolig_shortcode($atts, $content=null){
    return "<b>".$content."</b>";
}

function wp_zolii_shortcode($atts, $content=null){
    return "<i>".$content."</i>";
}

function wp_zoli_shortcode($atts, $content=null){
    return "<b><i>".$content."</b></i>";
}

add_shortcode('zoli', 'wp_zoli_shortcode');
add_shortcode('zolig', 'wp_zolig_shortcode');
add_shortcode('zolii', 'wp_zolii_shortcode');

?>