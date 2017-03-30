<?php 

	// RIGHT CAPTION FLEXIBLE CONTENT LAYOUT RC
	
    $RCmediaType = get_sub_field('rc_media_type');
	$RCsingleImage = get_sub_field('rc_single_image');
    $RCtopImage = get_sub_field('rc_top_image');
    $RCbottomImage = get_sub_field('rc_bottom_image');
    $RCvideo = get_sub_field('rc_video_embed');
    $RCcaptionType = get_sub_field('rc_caption_type');
    $RCcaptionTitle = get_sub_field('rc_caption_title');
    $RCcaptionText = get_sub_field('rc_caption_text');
    $RCcaptionIcon = get_sub_field('rc_caption_icon');
    $RCcaptionButton = get_sub_field('rc_caption_button');
    $RCcaptionLink = get_sub_field('rc_caption_link');
    $RCwysiwyg = get_sub_field('rc_wysiwyg');
?>



<section class="right-caption bg-secondary">
    <div class="container">`
        <div class="row">
            <div class="col-sm-12 col-md-7 wow fadeInLeft">

                <?php if ($RCmediaType = 'single_image') { ?>
	                <img class="single" src="<?php echo $RCsingleImage['sizes']['large'];?>">
                <?php } ?>
            	
            	<?php if ($RCmediaType = 'double_image') { ?>
	                <img class="top" src="<?php echo $RCtopImage['sizes']['large'];?>">
	                <img class="bottom" src="<?php echo $RCbottomImage['sizes']['large'];?>">
                <?php } ?>

                <?php if ($RCmediaType = 'video') { ?>
	                <div class="video">
	                	<?php echo $RCvideo; ?>
	                </div>
                <?php } ?>

            </div>

            <div class="col-sm-12 col-md-5 text-center caption wow fadeInRight">

            <?php if ($RCcaptionType == 'caption') { ?>

                <?php if ($RCcaptionTitle) { ?>
                    <h2><?php echo $RCcaptionTitle;?></h2>
                <?php } ?>
                
                <?php if ($RCcaptionIcon) { ?>
                    <img class="icon" src="<?php echo $RCcaptionIcon['sizes']['medium'];?>" />
                <?php } ?>

                <?php if ($RCcaptionText) { ?>
                    <p class="text"><?php echo $RCcaptionText;?></p>
                <?php } ?>

                <?php if ($RCcaptionButton) { ?>
                    <a href="<?php echo $RCcaptionLink;?>" class="btn"><?php echo $RCcaptionButton;?></a>
                <?php } ?>

            <?php } ?>

            <?php if ($RCcaptionType == 'wysiwyg') { ?>

                <?php echo $RCwysiwyg; ?>

            <?php } ?>

            </div>
        </div>
    </div>
</section>


        

    
