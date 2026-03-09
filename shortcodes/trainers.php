<?php

function gympro_trainers_posttype(){

register_post_type('trainer',array(
'labels'=>array(
'name'=>'Trainers',
'singular_name'=>'Trainer'
),
'public'=>true,
'menu_icon'=>'dashicons-groups',
'supports'=>array(
'title',
'editor',
'thumbnail'
)
));

}

add_action('init','gympro_trainers_posttype');