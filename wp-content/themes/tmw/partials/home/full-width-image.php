<?php
	$image = get_field('hp_parallax_image');
	if ($image) { ?>

		<section class="full-width-image parallax" id="" style="background-image:url('<?php echo $image['sizes']['full_screen'];?>');">
		    <div class="container">
		        <div class="row">
		        </div>
		    </div>
		</section>

<?php } ?>
