<?php

function gympro_register_trainers(){

$args = array(

'label' => 'Trainers',

'public' => true,

'menu_icon' => 'dashicons-groups',

'supports' => array(
'title',
'editor',
'thumbnail',
'excerpt'
),

'has_archive' => true

);

register_post_type('trainer',$args);

}

add_action('init','gympro_register_trainers');