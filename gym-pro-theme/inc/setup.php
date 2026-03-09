<?php

function gympro_setup(){

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

add_theme_support('html5',array(
'search-form',
'gallery',
'caption'
));

register_nav_menus(array(
'primary'=>'Primary Menu',
'footer'=>'Footer Menu'
));

}

add_action('after_setup_theme','gympro_setup');