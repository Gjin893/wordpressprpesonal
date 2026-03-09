<?php

function gympro_classes_posttype(){

register_post_type('gym_class',array(
'labels'=>array(
'name'=>'Classes',
'singular_name'=>'Class'
),
'public'=>true,
'menu_icon'=>'dashicons-heart',
'supports'=>array(
'title',
'editor',
'thumbnail'
)
));

}

add_action('init','gympro_classes_posttype');