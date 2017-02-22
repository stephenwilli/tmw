<?php

   /* REGISTER MENUS
  /------------------------*/
  function register_theme_menus() {
    register_nav_menus([
      'mainmenu' => __('Main Menu'),
      'footermenu' => __('Footer Menu')
    ]);
  }
  add_action( 'init', 'register_theme_menus');
