<?php

// check if the flexible content field has rows of data
if( have_rows('sections') ):

     // loop through the rows of data
    while ( have_rows('sections') ) : the_row();

        if( get_row_layout() == 'hero' ):

        	?> <h1>this is the hero</h1> <?php

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
