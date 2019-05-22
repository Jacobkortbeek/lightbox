<footer>
  <div class="container-fluid">
    <div class="row">
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
    <div class="row">
      <div class="col-md-4">
        <a href="#" target="_blank"><img src="" alt=""></a>
      </div>
    </div>
  </div>
<?php wp_footer(); ?>
</footer>
</body>
</html>
