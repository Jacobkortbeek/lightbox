<?php

// check if the flexible content field has rows of data
if( have_rows('sections') ):

     // loop through the rows of data
    while ( have_rows('sections') ) : the_row();

        if( get_row_layout() == 'hero' ):

        	get_template_part( 'partials/hero', 'hero' );

        endif;

    endwhile;

else :

    get_template_part( 'partials/hero', 'hero' );

endif;

?>
