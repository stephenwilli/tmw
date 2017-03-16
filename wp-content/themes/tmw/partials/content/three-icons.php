<?php
    
    // THREE ICONS WIDE TI
    if ( have_rows('ti_icon_block') ):
?>
    <section class="icon-wrap bg-primary" id="services">
        <div class="container">
            <div class="row">
        
                <?php while( have_rows('ti_icon_block') ): the_row(); 
                    $TIicon = get_sub_field('ti_icon');
                    $TItitle = get_sub_field('ti_icon_title');
                    $TItext = get_sub_field('ti_icon_text');
                ?>
                    <div class="col-sm-4 text-center">
                        <div class="icon-box">
                            <img src="<?php echo $TIicon['sizes']['medium'] ;?>"/>
                            <h3><?php echo $TItitle; ?></h3>
                            <p><?php echo $TItext; ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>