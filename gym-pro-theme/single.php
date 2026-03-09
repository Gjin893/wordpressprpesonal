<?php get_header(); ?>

<main class="container">

<?php
if(have_posts()):
while(have_posts()):
the_post();
?>

<article class="single-post">

<h1><?php the_title(); ?></h1>

<p class="meta">
Posted on <?php the_date(); ?> by <?php the_author(); ?>
</p>

<?php if(has_post_thumbnail()) : ?>

<div class="post-image">
<?php the_post_thumbnail('large'); ?>
</div>

<?php endif; ?>

<div class="post-content">
<?php the_content(); ?>
</div>

</article>

<?php
endwhile;
endif;
?>

</main>

<?php get_footer(); ?>