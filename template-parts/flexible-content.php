<?php

// check if the flexible content field has rows of data
if( have_rows('sections') ):

     // loop through the rows of data
    while ( have_rows('sections') ) : the_row();

        if( get_row_layout() == 'hero' ): ?>

        	Hello<?php get_template_part( 'hero', 'none' ); ?>

      <?php  elseif( get_row_layout() == 'download' ):

        	$file = get_sub_field('file');

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
