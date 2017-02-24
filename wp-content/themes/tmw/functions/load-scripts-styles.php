<?php

  /* ENQUEUE SCRIPTS & STYLES
  /------------------------*/
  function wpseed_enqueue_scripts_and_styles() {
    // wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, '2.1.4');
    // wp_enqueue_script( 'jquery' );
    
    wp_register_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js', false, '2.1.4');
    wp_enqueue_script( 'jquery' );
    # main.js
    
    wp_register_script('wpseed/scripts', get_template_directory_uri() . '/dist/script.min.js', false, array( 'jquery' ), true);
    wp_enqueue_script('wpseed/scripts');
    
    // wp_register_script('wpseed/vendor', get_template_directory_uri() . '/dist/vendor.min.js', false, array( 'jquery' ), true);
    // wp_enqueue_script('wpseed/vendor');
    
    wp_register_script('flexslider', get_template_directory_uri() . '/bower_components/flexslider/jquery.flexslider.js', false, array( 'jquery' ), true);
    wp_enqueue_script('flexslider');
    
    # main.css
    wp_enqueue_style('wpseed/styles', get_template_directory_uri() . '/dist/style.min.css', false, null);
    
    # fonts
    // wp_enqueue_style('google/fonts', 'https://fonts.googleapis.com/css?family=Ubuntu:400,500,700', false, null);
  }
  add_action('wp_enqueue_scripts', 'wpseed_enqueue_scripts_and_styles');







