<?php

function gympro_register_menus(){

register_nav_menus(array(
'primary'=>'Primary Menu',
'footer'=>'Footer Menu'
));

}

add_action('init','gympro_register_menus');