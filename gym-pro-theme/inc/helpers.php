<?php

function gympro_get_trainer_count(){

$count = wp_count_posts('trainer');

return $count->publish;

}

function gympro_get_class_count(){

$count = wp_count_posts('gym_class');

return $count->publish;

}