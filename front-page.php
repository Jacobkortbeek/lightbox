<?php get_header(); ?>
<?php

// check if the flexible content field has rows of data
if( have_rows('sections') ):

     // loop through the rows of data
    while ( have_rows('sections') ) : the_row();

      if( get_row_layout() == 'hero' ):

      	get_template_part( 'template-parts/partials/hero' );

      elseif( get_row_layout() == 'portfolio' ):

        get_template_part( 'template-parts/partials/portfolio' );

        elseif( get_row_layout() == 'about' ):

          get_template_part( 'template-parts/partials/about' );

      endif;

    endwhile;

else :

    // no layouts found

endif;

?>
<?php get_footer(); ?>
