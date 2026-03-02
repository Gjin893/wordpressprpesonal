<?php

function advanced_customize_register($wp_customize){

    $wp_customize->add_section('advanced_options',[
        'title' => 'Theme Options'
    ]);

    $wp_customize->add_setting('footer_text',[
        'default' => '© 2026 Advanced Theme'
    ]);

    $wp_customize->add_control('footer_text',[
        'label' => 'Footer Text',
        'section' => 'advanced_options',
        'type' => 'text'
    ]);
}
add_action('customize_register','advanced_customize_register');