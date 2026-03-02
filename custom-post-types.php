<?php

function advanced_register_cpt() {

    register_post_type('portfolio', [
        'label' => 'Portfolio',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title','editor','thumbnail']
    ]);
}
add_action('init', 'advanced_register_cpt');