<?php
	$rightBG = get_field('right_caption_background');
	$rightTitle = get_field('right_caption_title');
	$rightText = get_field('right_caption_text');
	$rightButton = get_field('right_caption_button_text');
	$rightLink = get_field('right_caption_button_link');
	
	if ($rightBG) { ?>

		<section class="full-width-caption bg-primary" id="" style="background-image: url('<?php echo $rightBG['sizes']['full_screen']; ?>');"> 
			    <div class="container-fluid nopad nogutter">
			        <div class="row">
			        	<div class="col-md-6 hidden-sm">
			        	</div>
				        <div class="col-sm-12 col-md-6 text-center">
				            <div class="image-caption">
				            	
				            	<?php if ($rightTitle) { ?>
				               		<h2><?php echo $rightTitle; ?></h2>
				                <?php } ?>
				                
				                <?php if ($rightText) { ?>
				                	<p><?php echo $rightText; ?></p>
				                <?php } ?>
				                
				                <?php if ($rightButton) { ?>
				                	<a href="<?php echo $rightLink; ?>" class="btn -ghost"><?php echo $rightButton; ?></a>
				                <?php } ?>

				            </div>
				        </div>
			        </div>
			    </div>
		    </div>
		</section>

<?php } ?>

<?php

	$leftBG = get_field('left_caption_background');
	$leftTitle = get_field('left_caption_title');
	$leftText = get_field('left_caption_text');
	$leftButton = get_field('left_caption_button_text');
	$leftLink = get_field('left_caption_button_link');
	if ($leftBG) { ?>

		<section class="full-width-caption bg-primary" id="" style="background-image: url('<?php echo $leftBG['sizes']['full_screen']; ?>');">
		    
			    <div class="container-fluid nopad nogutter">
			        <div class="row">
				        <div class="col-sm-12 col-md-6 text-center">
				            <div class="image-caption">
				            	
				            	<?php if ($leftTitle) { ?>
				               		<h2><?php echo $leftTitle; ?></h2>
				                <?php } ?>
				                
				                <?php if ($leftText) { ?>
				                	<p><?php echo $leftText; ?></p>
				                <?php } ?>
				                
				                <?php if ($leftButton) { ?>
				                	<a href="<?php echo $leftLink; ?>" class="btn -ghost"><?php echo $leftButton; ?></a>
				                <?php } ?>

			                </div>
				        </div>
			        </div>
			    </div>
		    </div>
		</section>

<?php } ?>


        

    
