<footer>
  <div class="container-fluid">
    <div class="row footerLogo padAll">
      <img src="<?php the_field( 'logo', 'option' ); ?>" alt="">
    </div>

    <?php
      $footer = get_field('footer', 'option');
      if( $footer ):
    ?>


    <div class="row">
      <div class="col-md-4">
        <?php echo $footer['office_address']; ?> | <?php echo $footer['office_address']; ?> | <?php echo $footer['office_address']; ?>
      </div>
    </div>

    <?php endif; ?>

    <?php
      while ( have_rows('footer', 'option') ): the_row();
        while ( have_rows('social_media') ): the_row();
     ?>
    <div class="row">
      <div class="col-md-4">
        <a href="<?php the_sub_field('social_link'); ?>" target="_blank"><img src="<?php the_sub_field('social_icon'); ?>" alt="social icon"></a>
      </div>
    </div>
    <?php
      endwhile;
        endwhile;
    ?>

  </div>
<?php wp_footer(); ?>
</footer>
</body>
</html>
