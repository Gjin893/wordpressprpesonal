<?php

$dir = get_template_directory();

$files = [

'/inc/setup.php',
'/inc/enqueue.php',
'/inc/helpers.php',
'/inc/widgets.php',

'/inc/post-types/trainers.php',
'/inc/post-types/classes.php',
'/inc/post-types/testimonials.php'

];

foreach($files as $file){

if(file_exists($dir.$file)){
require $dir.$file;
}

}