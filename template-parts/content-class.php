<div class="gym-class">

<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail('medium'); ?>
<?php endif; ?>

<h3><?php the_title(); ?></h3>

<?php the_excerpt(); ?>

<a href="<?php the_permalink(); ?>">View Class</a>

</div>