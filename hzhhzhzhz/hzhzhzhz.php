<?php
/*
Plugin Name: hzhzhzhz
Plugin URI: https://hzhzhzhz.com/
Description: Used by millions, hzhzhzhz is quite possibly the best in the world
Version: 0.1
*/

if(!defined('ABSPATH')){
    exit;
}

class AleBooking
{
     function __construct(){
        add_action('init',array($this,'custom_post_type'));
     }
     function custom_post_type(){
        register_post_type('room',
            [
            'public' => true,
            'label' => esc_html__( 'Новость', 'AleBooking'),
            'supports'  => ['title','editor','author','thumbnail','comments']
            ]
        );
     } 
    

}

if(class_exists('AleBooking')){
    new AleBooking('hzhzhz');
}







/*
function say_salam(){
    echo ('Salam');
}
add_action('admin_init','say_salam');
*/
