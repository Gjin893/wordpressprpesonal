<?php

function gympro_widgets(){

register_sidebar(array(
'name'=>'Sidebar',
'id'=>'sidebar-1',
'before_widget'=>'<div class="widget">',
'after_widget'=>'</div>',
'before_title'=>'<h3>',
'after_title'=>'</h3>'
));

}

add_action('widgets_init','gympro_widgets');