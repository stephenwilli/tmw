<?php 

if ( has_post_thumbnail() ) { 
    $image_id = get_post_thumbnail_id();
    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'lg_thumb' );

?>

<div class="col-lg-4 col-sm-6">
    <a href="<?php the_permalink();?>" class="portfolio-box">
        <img src="<?php echo esc_url( $url ); ?>" class="img-responsive" alt="">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
                <h3 class="project-name"><?php the_title();?></h3>
            </div>
        </div>
    </a>
</div>

<?php } ?>