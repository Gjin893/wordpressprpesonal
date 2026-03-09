<footer>

<div class="container">

<p>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>

<?php
wp_nav_menu(array(
'theme_location'=>'footer'
));
?>

</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>