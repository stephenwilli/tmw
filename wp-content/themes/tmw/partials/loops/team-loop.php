<?php 

if ( has_post_thumbnail() ) { 
    $image_id = get_post_thumbnail_id();
    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'cover' );
    $name = get_the_title();
    $slug = str_replace(' ', '-', strtolower($name));

?>

<div class="col-sm-3 col-xs-6 wow fadeinUp" data-wow-delay=".25s" >
    <a href="" class="project-box" data-toggle="modal" data-target="#<?php echo $slug; ?>">
        <img src="<?php echo esc_url( $url ); ?>" class="img-responsive" alt="">
        <div class="project-box-caption">
            <div class="project-box-caption-content">
                <h3 class="project-name"><?php echo $name; ?></h3>
            </div>
        </div>
    </a>
</div>

<!-- Modal -->
<div class="modal fade" id="<?php echo $slug; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $slug; ?>Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo esc_url( $url ); ?>" class="img-responsive" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <?php echo $name; ?>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php } ?>