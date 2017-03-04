<?php

  /* ENQUEUE SCRIPTS & STYLES
  /------------------------*/
  function wpseed_enqueue_scripts_and_styles() {

    # vendor.min.js

    wp_register_script('wpseed/vendor', get_template_directory_uri() . '/dist/vendor.min.js', false, array( 'jquery' ), true);
    wp_enqueue_script('wpseed/vendor');
        
    # script.min.js
    
    wp_register_script('wpseed/scripts', get_template_directory_uri() . '/dist/script.min.js', false, array( 'jquery' ), true);
    wp_enqueue_script('wpseed/scripts');
    
    # style.min.css
    wp_enqueue_style('wpseed/styles', get_template_directory_uri() . '/dist/style.min.css', false, null);
    
    # google fonts
    wp_enqueue_style('google/fonts', 'https://fonts.googleapis.com/css?family=Lora:400,700|Open+Sans:400,600,700', false, null);
  }
  add_action('wp_enqueue_scripts', 'wpseed_enqueue_scripts_and_styles');







