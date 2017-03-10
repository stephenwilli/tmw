<?php
	$rightBG = get_field('right_caption_background');
	$rightTitle = get_field('right_caption_title');
	$rightText = get_field('right_caption_text');
	$rightButton = get_field('right_caption_button_text');
	$rightLink = get_field('right_caption_button_link');
	
	if ($rightBG) { ?>

		<section class="right-caption bg-primary" id="" style="background-image: url('<?php echo $rightBG['sizes']['full_screen']; ?>');"> 
			    <div class="container">
			        <div class="row">
			        	<div class="col-md-7 hidden-sm">
			        	</div>
				        <div class="col-sm-12 col-md-5 text-center">
				            <div class="parallax-caption">
				            	
				            	<?php if ($rightTitle) { ?>
				               		<h2><mark><?php echo $rightTitle; ?></mark></h2>
				                <?php } ?>
				                
				                <?php if ($rightText) { ?>
				                	<p><?php echo $rightText; ?></p>
				                <?php } ?>
				                
				                <?php if ($rightButton) { ?>
				                	<a href="<?php echo $rightLink; ?>" class="btn -orange"><?php echo $rightButton; ?></a>
				                <?php } ?>

				            </div>
				        </div>
			        </div>
			    </div>
		    </div>
		</section>

<?php } ?>