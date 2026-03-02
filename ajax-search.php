<?php

function advanced_ajax_search() {

    $keyword = sanitize_text_field($_POST['keyword']);

    $args = [
        'post_type' => ['post','portfolio'],
        's' => $keyword
    ];

    $query = new WP_Query($args);

    if($query->have_posts()):
        while($query->have_posts()): $query->the_post();
            echo '<p><a href="'.get_permalink().'">'.get_the_title().'</a></p>';
        endwhile;
    else:
        echo '<p>No results</p>';
    endif;

    wp_die();
}

add_action('wp_ajax_advanced_search', 'advanced_ajax_search');
add_action('wp_ajax_nopriv_advanced_search', 'advanced_ajax_search');