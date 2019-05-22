<footer>
  <div class="container-fluid">
    <div class="row">
      <img src="<?php the_field( 'logo', 'option' ); ?>" alt="">
    </div>
    <div class="row">
      <div class="col-md-4">
        <?php the_field( 'office_address', 'option' ); ?> | <?php the_field( 'phone_number', 'option' ); ?> | <?php the_field( 'email_address', 'option' ); ?>
      </div>
    </div>
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
