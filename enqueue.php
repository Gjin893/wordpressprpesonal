<?php

function advanced_theme_scripts() {

    wp_enqueue_style('advanced-style', get_stylesheet_uri(), [], '1.0');

    wp_enqueue_script(
        'advanced-js',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        '1.0',
        true
    );

    wp_localize_script('advanced-js', 'ajax_obj', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'advanced_theme_scripts');