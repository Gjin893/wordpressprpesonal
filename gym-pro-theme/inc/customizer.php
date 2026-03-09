<?php

function gympro_customize($wp_customize){

$wp_customize->add_section('gym_settings',array(
'title'=>'Gym Settings'
));

$wp_customize->add_setting('hero_text');

$wp_customize->add_control('hero_text',array(
'label'=>'Hero Text',
'section'=>'gym_settings',
'type'=>'text'
));

}

add_action('customize_register','gympro_customize');