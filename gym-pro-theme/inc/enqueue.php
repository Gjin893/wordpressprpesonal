<?php

function gympro_assets(){

wp_enqueue_style(
'gym-main',
get_template_directory_uri().'/assets/css/gym.css'
);

wp_enqueue_script(
'gym-main-js',
get_template_directory_uri().'/assets/js/main.js',
array('jquery'),
null,
true
);

wp_enqueue_script(
'gym-search',
get_template_directory_uri().'/assets/js/search.js',
array('jquery'),
null,
true
);

wp_localize_script(
'gym-search',
'gym_ajax',
array(
'ajax_url'=>admin_url('admin-ajax.php')
)
);

}

add_action('wp_enqueue_scripts','gympro_assets');