<?php

function gympro_ajax_search(){

$query = sanitize_text_field($_POST['term']);

$args=array(
'post_type'=>array('post','gym_class','trainer'),
's'=> $query
);

$search=new WP_Query($args);

if($search->have_posts()){
while($search->have_posts()){
$search->the_post();

echo '<a href="'.get_permalink().'">'.get_the_title().'</a><br>';

}
}

die();
}

add_action('wp_ajax_gym_search','gympro_ajax_search');
add_action('wp_ajax_nopriv_gym_search','gympro_ajax_search');