<?php get_header(); ?>

<main class="container">

<h1>Search Results for: <?php echo get_search_query(); ?></h1>

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>

<article class="search-result">

<h2>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h2>

<?php the_excerpt(); ?>

</article>

<?php endwhile; ?>

<?php the_posts_pagination(); ?>

<?php else : ?>

<p>No results found.</p>

<?php endif; ?>

</main>

<?php get_footer(); ?>