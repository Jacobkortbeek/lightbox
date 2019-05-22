<footer>
  <div class="container-fluid fullCenterColumn">
    <div class="row footerLogo padAll ">
      <img src="<?php the_field( 'logo', 'option' ); ?>" alt="">
    </div>

    <?php
      $footer = get_field('footer', 'option');
      if( $footer ):
    ?>


    <div class="row padAll">
      <?php echo $footer['office_address']; ?> | <?php echo $footer['phone_number']; ?> | <?php echo $footer['email_address']; ?>
    </div>

    <?php endif; ?>
    <div class="row socialContainer">
    <?php
      while ( have_rows('footer', 'option') ): the_row();
        while ( have_rows('social_media') ): the_row();
     ?>

      <div class="col-md-4">
        <a href="<?php the_sub_field('social_link'); ?>" target="_blank"><img src="<?php the_sub_field('social_icon'); ?>" alt="social icon"></a>
      </div>

    <?php
      endwhile;
        endwhile;
    ?>
    </div>
    <?php if( $footer ) : ?>
    <div class="row">
      <div class="col-md-2">
        <img src="<?php $footer['lightbox_logo']['url']; ?>" alt="">
      </div>
      <div class="col-md-10">
        ©2019 Interiors by Dapa | <a href="<?php $footer['erms_and_conditions_page_link']; ?>">Terms & Conditons</a> | <a href="<?php $footer['privacy_policy_page_link']; ?>">Privacy Policy</a>
      </div>
    </div>
  <?php endif; ?>

  </div>
<?php wp_footer(); ?>
</footer>
</body>
</html>
