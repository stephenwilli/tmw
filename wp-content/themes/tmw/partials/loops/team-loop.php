<?php

if ( has_post_thumbnail() ) {
    $image_id = get_post_thumbnail_id();
    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'cover' );
    $name = get_the_title();
    $slug = str_replace(' ', '-', strtolower($name));
    $job = get_field('team_member_job_title');
    $email = get_field('team_member_email');
    $phone = get_field('team_member_phone');
    $description = get_field('team_member_short_description');

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

            <div class="col-sm-3">
                <img src="<?php echo esc_url( $url ); ?>" class="img-responsive team-image" alt="">
            </div>

            <div class="col-sm-9">
                <div class="team-content">
                    <h4><?php echo $name; ?> - <em><?php echo $job; ?></em></h4>

                    <?php if ($email){ ?>

                        <a href="mailto:<?php echo $email;?>" class=""><i class="fa fa-fw fa-envelope"></i> Contact</a>

                    <?php } ?>

                    <?php if ($phone){ ?>

                        <a href="mailto:<?php echo $email;?>" class="phone"><i class="fa fa-fw fa-phone"></i> <?php echo $phone;?></a>

                    <?php } ?>

                    <p class="job-description"><?php echo $description ?></p>

                </div>
            </div>

        </div>
    </div>
  </div>
</div>

<?php } ?>
