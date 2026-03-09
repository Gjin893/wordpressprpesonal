<?php

/*
Register Custom REST API Routes
*/

add_action('rest_api_init', function () {

    register_rest_route('gym/v1', '/trainers', array(
        'methods' => 'GET',
        'callback' => 'gympro_get_trainers'
    ));

    register_rest_route('gym/v1', '/classes', array(
        'methods' => 'GET',
        'callback' => 'gympro_get_classes'
    ));

    register_rest_route('gym/v1', '/testimonials', array(
        'methods' => 'GET',
        'callback' => 'gympro_get_testimonials'
    ));

});


/*
GET TRAINERS
*/

function gympro_get_trainers(){

$args = array(
'post_type' => 'trainer',
'posts_per_page' => -1
);

$query = new WP_Query($args);

$data = array();

if($query->have_posts()){

while($query->have_posts()){

$query->the_post();

$data[] = array(

'id' => get_the_ID(),
'name' => get_the_title(),
'description' => get_the_excerpt(),
'link' => get_permalink(),
'image' => get_the_post_thumbnail_url(get_the_ID(),'medium')

);

}

}

wp_reset_postdata();

return $data;

}


/*
GET CLASSES
*/

function gympro_get_classes(){

$args = array(
'post_type' => 'gym_class',
'posts_per_page' => -1
);

$query = new WP_Query($args);

$data = array();

if($query->have_posts()){

while($query->have_posts()){

$query->the_post();

$data[] = array(

'id' => get_the_ID(),
'title' => get_the_title(),
'description' => get_the_excerpt(),
'link' => get_permalink(),
'image' => get_the_post_thumbnail_url(get_the_ID(),'medium')

);

}

}

wp_reset_postdata();

return $data;

}


/*
GET TESTIMONIALS
*/

function gympro_get_testimonials(){

$args = array(
'post_type' => 'testimonial',
'posts_per_page' => -1
);

$query = new WP_Query($args);

$data = array();

if($query->have_posts()){

while($query->have_posts()){

$query->the_post();

$data[] = array(

'id' => get_the_ID(),
'name' => get_the_title(),
'message' => get_the_excerpt()

);

}

}

wp_reset_postdata();

return $data;

}