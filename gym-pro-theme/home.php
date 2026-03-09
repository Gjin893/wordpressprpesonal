<?php get_header(); ?>

<main class="container">

<h1>Latest Blog Posts</h1>

<?php if(have_posts()) : ?>

<div class="blog-grid">

<?php while(have_posts()) : the_post(); ?>

<article class="blog-card">

<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail('medium'); ?>
<?php endif; ?>

<h2>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h2>

<p><?php echo wp_trim_words(get_the_excerpt(),20); ?></p>

</article>

<?php endwhile; ?>

</div>

<?php the_posts_pagination(); ?>

<?php endif; ?>

</main>

<?php get_footer(); ?>