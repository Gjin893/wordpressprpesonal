<?php get_header(); ?>

<main id="site-main">

<!-- HERO SECTION -->
<section class="hero">

<div class="container">

<h1><?php bloginfo('name'); ?></h1>

<p>Train Hard. Stay Strong. Become Your Best Version.</p>

<a class="btn" href="<?php echo site_url('/classes'); ?>">
View Classes
</a>

</div>

</section>


<!-- FEATURED CLASSES -->
<section class="featured-classes">

<div class="container">

<h2>Featured Classes</h2>

<div class="classes-grid">

<?php
$args = array(
'post_type' => 'gym_class',
'posts_per_page' => 3
);

$classes = new WP_Query($args);

if($classes->have_posts()):
while($classes->have_posts()):
$classes->the_post();
?>

<div class="class-card">

<?php if(has_post_thumbnail()) : ?>
<div class="class-img">
<?php the_post_thumbnail('medium'); ?>
</div>
<?php endif; ?>

<h3><?php the_title(); ?></h3>

<p><?php echo wp_trim_words(get_the_excerpt(),15); ?></p>

<a class="btn" href="<?php the_permalink(); ?>">
View Class
</a>

</div>

<?php endwhile; endif; wp_reset_postdata(); ?>

</div>

</div>

</section>


<!-- TRAINERS SECTION -->
<section class="trainers">

<div class="container">

<h2>Meet Our Trainers</h2>

<div class="trainers-grid">

<?php
$args = array(
'post_type' => 'trainer',
'posts_per_page' => 4
);

$trainers = new WP_Query($args);

if($trainers->have_posts()):
while($trainers->have_posts()):
$trainers->the_post();
?>

<div class="trainer-card">

<?php the_post_thumbnail('medium'); ?>

<h3><?php the_title(); ?></h3>

<p><?php echo wp_trim_words(get_the_excerpt(),12); ?></p>

</div>

<?php endwhile; endif; wp_reset_postdata(); ?>

</div>

</div>

</section>


<!-- MEMBERSHIP PLANS -->
<section class="memberships">

<div class="container">

<h2>Membership Plans</h2>

<div class="membership-grid">

<div class="plan">

<h3>Basic</h3>

<p class="price">$20 / month</p>

<ul>
<li>Gym Access</li>
<li>1 Trainer Session</li>
<li>Locker Room</li>
</ul>

<a class="btn" href="#">Join Now</a>

</div>


<div class="plan">

<h3>Pro</h3>

<p class="price">$40 / month</p>

<ul>
<li>Gym Access</li>
<li>5 Trainer Sessions</li>
<li>All Classes</li>
</ul>

<a class="btn" href="#">Join Now</a>

</div>


<div class="plan">

<h3>Elite</h3>

<p class="price">$70 / month</p>

<ul>
<li>Unlimited Classes</li>
<li>Unlimited Trainer Sessions</li>
<li>Nutrition Plan</li>
</ul>

<a class="btn" href="#">Join Now</a>

</div>

</div>

</div>

</section>


<!-- BLOG POSTS -->
<section class="latest-posts">

<div class="container">

<h2>Fitness Articles</h2>

<?php if(have_posts()) : ?>

<div class="posts-grid">

<?php while(have_posts()) : the_post(); ?>

<article class="post-card">

<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail('medium'); ?>
<?php endif; ?>

<h3>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h3>

<p><?php echo wp_trim_words(get_the_excerpt(),20); ?></p>

<a class="btn" href="<?php the_permalink(); ?>">
Read More
</a>

</article>

<?php endwhile; ?>

</div>


<!-- PAGINATION -->

<div class="pagination">

<?php
the_posts_pagination(array(
'mid_size' => 2,
'prev_text' => 'Previous',
'next_text' => 'Next'
));
?>

</div>

<?php else : ?>

<p>No posts found.</p>

<?php endif; ?>

</div>

</section>


<!-- TESTIMONIALS -->
<section class="testimonials">

<div class="container">

<h2>What Our Members Say</h2>

<?php

$args = array(
'post_type' => 'testimonial',
'posts_per_page' => 3
);

$testimonials = new WP_Query($args);

if($testimonials->have_posts()):
while($testimonials->have_posts()):
$testimonials->the_post();
?>

<div class="testimonial">

<p>"<?php the_excerpt(); ?>"</p>

<h4>- <?php the_title(); ?></h4>

</div>

<?php endwhile; endif; wp_reset_postdata(); ?>

</div>

</section>


</main>

<?php get_footer(); ?>