<!DOCTYPE html class="js">
<!--[if lt IE 7]><html class="ie ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]><html class="ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <link rel="icon" type="image/png" href="<?php echo(get_template_directory_uri()) ?>/favicon.ico" />

        
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>  id="page-top">

	<div id="preloader" class="spin">
		<div class="container">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 text-center">

	                <img class="gear gear-01" src="<?php bloginfo( 'template_url' ); ?>/assets/images/single-gear.svg" />
	                <img class="gear gear-02" src="<?php bloginfo( 'template_url' ); ?>/assets/images/single-gear-02.svg" />

	            </div>
	        </div>
	    </div>
	</div>

	<?php get_template_part('partials/global/google-analytics'); ?>

	<?php get_template_part('partials/header/navigation'); ?>