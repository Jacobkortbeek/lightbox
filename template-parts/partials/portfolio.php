<div class="portfolio" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>">
  <div class="container-fluid fullHeight fullCenterColumn">
    <div class="row">
      <div class="col-md-6 offset-md-1">
        <?php the_sub_field( 'text_content' ); ?>
      </div>
    </div>
    <div class="row">
      <a href="<?php the_sub_field( 'button_link' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
    </div>
  </div>
</div>
