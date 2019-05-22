<div class="about" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>">
  <div class="container-fluid fullHeight">
    <div class="row fullHeight">
      <div class="col-lg-6 leftImg fullHeight">
        <img src="<?php the_sub_field( 'founders_image' ); ?>" alt="Founders Images">
      </div>
      <div class="col-lg-4 offset-md-2 rightContent fullHeight fullCenterColumn">
        <img class="float-left" src="<?php the_sub_field( 'open_quote_image' ); ?>" alt="">
          <div class="fontLg">
            <?php the_sub_field( 'founders_quote' ); ?>
          </div>
          <div class="float-left">
            <img class="float-right" src="<?php the_sub_field( 'close_quote_image' ); ?>" alt="">
          </div>
        <div class="prox fontSm">
        <?php the_sub_field( 'quote_credit' ); ?>
        <?php the_sub_field( 'about_text' ); ?>
        <a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
