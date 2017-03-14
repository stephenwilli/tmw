<?php

// PUBLICATIONS CUSTOM POST TYPE GRID

?>

<section class="grid-intro bg-secondary" id="publications">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center">
                <h2>The Teton Media Works Family</h2>

                <div class="col-sm-4">
                    <a href="" class="btn -large">News</a>
                </div>

                <div class="col-sm-4">
                    <a href="" class="btn -large">Magazine</a>
                </div>

                <div class="col-sm-4">
                    <a href="" class="btn -large">Digital</a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="nopad">
    <div class="container-fluid nopad">
        <div class="row popup-gallery">
            <?php
                $args = array(
                    'post_type' => 'publication',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                );
                $publications = get_posts( $args );
                global $post;
                foreach( $publications as $publication ) {
                    $post = $publication;
                    setup_postdata( $post );
                    get_template_part( 'partials/loops/publications-grid' );
                }
                wp_reset_postdata();
            ?>
                
        </div>
    </div>
</section>