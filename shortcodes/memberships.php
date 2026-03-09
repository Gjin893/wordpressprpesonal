<?php

function gym_memberships_shortcode(){

$output = '

<div class="membership">

<h3>Basic Plan</h3>
<p>$20/month</p>

<h3>Pro Plan</h3>
<p>$40/month</p>

<h3>Elite Plan</h3>
<p>$60/month</p>

</div>

';

return $output;

}

add_shortcode('gym_memberships','gym_memberships_shortcode');