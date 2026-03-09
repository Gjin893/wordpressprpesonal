<?php get_header(); ?>

<?php get_template_part('template-parts/hero','section'); ?>

<section class="container">

<h2>Latest Classes</h2>

<?php
$args = array(
'post_type' => 'gym_class',
'posts_per_page' => 3
);

$query = new WP_Query($args);

if($query->have_posts()):
while($query->have_posts()): $query->the_post();
?>

<?php get_template_part('template-parts/content','class'); ?>

<?php endwhile; endif; wp_reset_postdata(); ?>

</section>

<?php get_footer(); ?>