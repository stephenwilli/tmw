<?php


/* WP SETUP & SETTINGS
/===================================================== */
  
  require('functions/load-scripts-styles.php');

  get_template_part( 'functions/register-menus' );

  get_template_part( 'functions/register-sidebars' );

  get_template_part( 'functions/option-pages' );

  get_template_part( 'functions/custom-post-types' );

  get_template_part( 'functions/theme-setup' );

  require('functions/wp-bootstrap-navwalker.php');


/* BACKEND
/===================================================== */
  
  require('functions/helper-functions.php');


/* EDITOR AND MEDIA
/===================================================== */
    
get_template_part( 'functions/tiny-mce-editor.php' );

get_template_part( 'functions/shortcodes.php' );

get_template_part( 'functions/mime-types.php' );

get_template_part( 'functions/image-size.php' );

get_template_part( 'functions/default-images.php' );

