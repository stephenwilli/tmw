<?php
	$rightBG = get_field('right_caption_background');
	$rightTitle = get_field('right_caption_title');
	$rightContent = get_field('right_caption_content');
	
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
				                
				                <?php if ($rightContent) { ?>
				                	<?php echo $rightContent; ?>
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
	$leftContent = get_field('left_caption_content');

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
				                
				                <?php if ($leftContent) { ?>
				                	<?php echo $leftContent; ?>
				                <?php } ?>

			                </div>
				        </div>
			        </div>
			    </div>
		    </div>
		</section>

<?php } ?>


        

    
