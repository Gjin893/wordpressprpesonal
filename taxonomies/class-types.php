<?php

/*
Register Class Type Taxonomy
*/

function gympro_class_type_taxonomy() {

$labels = array(
    'name'              => 'Class Types',
    'singular_name'     => 'Class Type',
    'search_items'      => 'Search Class Types',
    'all_items'         => 'All Class Types',
    'edit_item'         => 'Edit Class Type',
    'update_item'       => 'Update Class Type',
    'add_new_item'      => 'Add New Class Type',
    'new_item_name'     => 'New Class Type Name',
    'menu_name'         => 'Class Types'
);

$args = array(
    'labels' => $labels,
    'hierarchical' => true, 
    'public' => true,
    'show_admin_column' => true,
    'rewrite' => array('slug' => 'class-type')
);

register_taxonomy(
    'class_type',
    'gym_class',
    $args
);

}

add_action('init','gympro_class_type_taxonomy');