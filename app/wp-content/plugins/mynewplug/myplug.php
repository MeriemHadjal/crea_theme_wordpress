<?php

/**
 * @package MyPlug
 * @version 1.0
 */
/*
Plugin Name: MyPlug
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: mhadjal
Version: 1.0
Author URI: http://ma.tt/
*/


function input(){
    return '<input id="ville" placeholder="Entrez un code postal ou une ville">
    <ul id="myplug">
    
    </ul>'; 
}
add_shortcode('hello','input');



function sd_add_scripts(){

	wp_enqueue_script( 'myplug', plugins_url( '/js/scriptplug.js', __FILE__ ), '', '1.0' );
}
add_action( 'the_post', 'sd_add_scripts' ); //the_post = pour charger script à la fin








