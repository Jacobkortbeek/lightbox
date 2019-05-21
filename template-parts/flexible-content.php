<?php

// check if the flexible content field has rows of data
if( have_rows('sections') ):

     // loop through the rows of data
    while ( have_rows('sections') ) : the_row();

        if( get_row_layout() == 'hero' ):

        	the_sub_field('hero_title');

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
