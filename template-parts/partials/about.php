<div class="about" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>">
  <div class="container-fluid fullHeight">
    <div class="row fullHeight">
      <div class="col-lg-6 leftImg fullHeight">
        <img src="<?php the_sub_field( 'founders_image' ); ?>" alt="Founders Images">
      </div>
      <div class="col-lg-4 offset-md-2 rightContent fullHeight fullCenterColumn">
        <img src="<?php the_sub_field( 'open_quote_image' ); ?>" alt="">
          <div class="fontLg">

          </div>
          <?php the_sub_field( 'founders_quote' ); ?>
        <img src="<?php the_sub_field( 'close_quote_image' ); ?>" alt="">
        <div class="prox fontSm">
        <?php the_sub_field( 'quote_credit' ); ?>
        <?php the_sub_field( 'about_text' ); ?>
        <a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
