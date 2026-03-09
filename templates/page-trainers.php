<?php
/*
Template Name: Trainers
*/
get_header();
?>

<div class="container">

<h2>Our Trainers</h2>

<?php

$args=array(
'post_type'=>'trainer',
'posts_per_page'=>-1
);

$query=new WP_Query($args);

while($query->have_posts()):$query->the_post();

get_template_part('template-parts/content','trainer');

endwhile;

wp_reset_postdata();

?>

</div>

<?php get_footer(); ?>