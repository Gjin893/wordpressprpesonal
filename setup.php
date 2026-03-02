<?php

function advanced_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form','comment-form','comment-list']);
    add_theme_support('customize-selective-refresh-widgets');

    register_nav_menus([
        'primary' => __('Primary Menu', 'advanced-theme'),
        'footer'  => __('Footer Menu', 'advanced-theme')
    ]);
}
add_action('after_setup_theme', 'advanced_theme_setup');