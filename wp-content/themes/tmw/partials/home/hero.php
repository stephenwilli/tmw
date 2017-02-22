<div id="hero-slider" class="flexslider">
  <?php if ( get_field( 'hero_slideshow' ) ) { ;?>
  
  <ul class="slides">

    <?php while(has_sub_field('hero_slideshow')) {

      $image = get_sub_field('hero_image');
      $title = get_sub_field('hero_title');
      $subTitle = get_sub_field('hero_subtitle');
      $slideLink = get_sub_field('hero_link');
      ?>

    <li>
    <?php if ( $slideLink ) { ?>
        <a href="<?php echo $slideLink; ?>">
        <?php } ?>
          
          <div class="hero-bg" style="background-image : url('<?php echo $image['sizes']['large'];?>');"></div>

          <div class="hero-caption">
            <?php if ( $title ) { ?>
              <h2><?php echo $title; ?></h2>
            <?php }

            if ( $subTitle ) { ?>
              <p><?php echo $subTitle; ?></p>
            <?php } ?>
          </div><!-- /caption -->
        
        <?php if ( $slideLink ) { ?>
        </a>
        <?php } ?>
    
    </li>

  <?php } ?>

  </ul>

<?php } ?>

</div><!-- #hero-slider -->
