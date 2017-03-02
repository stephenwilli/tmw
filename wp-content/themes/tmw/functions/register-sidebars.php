<?php

/* REGISTER TAXONOMIES
/===================================================== */

register_sidebar( array(
    'name' => 'Footer Column 1',
    'id' => 'footer-column-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>',
) );

register_sidebar( array(
    'name' => 'Footer Column 2',
    'id' => 'footer-column-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>',
) );

register_sidebar( array(
    'name' => 'Footer Column 3',
    'id' => 'footer-column-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>',
) );