<?php
/*
Template Name: Gym Classes
*/
get_header();
?>

<div class="container">

<h2>Gym Classes</h2>

<?php

$args=array(
'post_type'=>'gym_class',
'posts_per_page'=>10
);

$query=new WP_Query($args);

while($query->have_posts()):$query->the_post();

get_template_part('template-parts/content','class');

endwhile;

wp_reset_postdata();

?>

</div>

<?php get_footer(); ?>