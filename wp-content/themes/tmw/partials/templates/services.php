<?php
    if ( have_rows('service') ):
?>
    <section class="full-width-text bg-primary" id="services">
        <div class="container">
            <div class="row">
        
                <?php while( have_rows('service') ): the_row(); 
                    $icon = get_sub_field('service_icon');
                    $title = get_sub_field('service_title');
                    $text = get_sub_field('service_text');
                ?>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <img src="<?php echo $icon['sizes']['medium'] ;?>"/>
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>