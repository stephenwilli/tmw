<?php

// LOADS FLEXIBLE CONTENT LAYOUTS

  if( have_rows('flexible_content') ) :

    while ( have_rows('flexible_content') ) : the_row();

      if( get_row_layout() == 'full_width_image_background' ) { get_template_part( 'partials/content/full-width-image' ); }

      elseif( get_row_layout() == 'publications_grid' ) { get_template_part( 'partials/content/grid' ); }

      // elseif( get_row_layout() == 'image_gallery' ) { get_template_part( 'partials/layout/gallery' ); }

    endwhile;

  endif;