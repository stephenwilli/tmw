<?php

/* CUSTOM IMAGE SIZES
/===================================================== */

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'full_screen', 1680, 920, true ); // SLIDER
	add_image_size( 'lg_thumb', 500, 500, true ); // SQUARE THUMBS
}