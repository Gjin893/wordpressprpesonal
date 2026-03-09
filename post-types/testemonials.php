<?php

function gympro_testimonials(){

register_post_type('testimonial',array(

'labels'=>array(
'name'=>'Testimonials',
'singular_name'=>'Testimonial'
),

'public'=>true,
'menu_icon'=>'dashicons-format-quote',

'supports'=>array(
'title',
'editor'
)

));

}

add_action('init','gympro_testimonials');