<?php
    
    // FULL WIDTH TEXT FWT
            
    $FWTtitle = get_sub_field('fwt_title');
    $FWTtext = get_sub_field('fwt_text');
    $FWTwysiwyg = get_sub_field('fwt_wysiwyg');        
?>
    <section class="icon-wrap bg-secondary">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="full-width-text">
                        <h2><?php echo $FWTtitle; ?></h3>
                        <p><?php echo $FWTtext; ?></p>
                        <?php echo $FWTwysiwyg; ?>
                    </div>
                </div>
           
            </div>
        </div>
    </section>
