<?php 
	$leftImage = get_field('left_caption_image');
	$leftTitle = get_field('left_caption_title');
	$leftText = get_field('left_caption_text');
	$leftButton = get_field('left_caption_button_text');
	$leftLink = get_field('left_caption_button_link');
	if ($leftImage) { ?>
?>

<section class="left-caption bg-secondary" id="">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-5 caption">
                
                <?php if ($leftIcon) { ?>
                    <img class="icon" src="<?php echo $leftIcon['sizes']['medium'];?>" />
                <?php } ?>

                <?php if ($leftTitle) { ?>
                    <h2><?php echo $leftTitle;?></h2>
                <?php } ?>

                <?php if ($leftText) { ?>
                    <p><?php echo $leftText;?></p>
                <?php } ?>

                <?php if ($leftButton) { ?>
                    <a href="<?php echo $leftLink;?>" class="btn"><?php echo $leftButton;?></a>
                <?php } ?>

            </div>
            
            <div class="col-sm-12 col-md-7">
                <img  src="<?php echo $leftImage['sizes']['large'];?>">
            </div>

        </div>
    </div>
</section>

<?php } ?>



        

    
