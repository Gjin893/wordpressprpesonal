<?php get_header(); ?>

<main class="container">

<h1><?php the_archive_title(); ?></h1>

<?php if(have_posts()) : ?>

<div class="archive-grid">

<?php while(have_posts()) : the_post(); ?>

<article class="archive-post">

<h2>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h2>

<?php the_excerpt(); ?>

</article>

<?php endwhile; ?>

</div>

<?php the_posts_pagination(); ?>

<?php else : ?>

<p>No posts found.</p>

<?php endif; ?>

</main>

<?php get_footer(); ?>