<?php 
	$introText = get_field('hp_intro_text');
	$introIcon = get_field('hp_intro_icon');
    $topImage = get_field('hp_intro_top');
    $bottomImage = get_field('hp_intro_bottom');
	if ($introText) {
?>

<section class="intro bg-secondary " id="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <img class="top" src="<?php echo $topImage['sizes']['large'];?>">
                <img class="bottom" src="<?php echo $bottomImage['sizes']['large'];?>">
            </div>
            <div class="col-sm-12 col-md-5 text-center intro-text">

                <img class="icon" src="<?php echo $introIcon['sizes']['medium'];?>" />
                <p><?php echo $introText;?></p>

            </div>
        </div>
    </div>
</section>

<?php } ?>
