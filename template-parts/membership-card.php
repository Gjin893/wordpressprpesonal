<div class="membership-card">

<h3><?php echo $plan_name; ?></h3>

<p class="price"><?php echo $plan_price; ?></p>

<ul>

<?php foreach($features as $feature): ?>

<li><?php echo $feature; ?></li>

<?php endforeach; ?>

</ul>

<a class="btn" href="#">Join Now</a>

</div>