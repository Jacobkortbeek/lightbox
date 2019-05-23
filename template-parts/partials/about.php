<div class="about" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>">
  <div class="container-fluid fullHeight">
    <div class="row fullHeight">
      <div class="col-lg-6 leftImg fullHeight">
        <img class="float-left" src="<?php the_sub_field( 'founders_image' ); ?>" alt="Founders Images">
      </div>
        <div class="col-lg-4 offset-md-2 rightContent fullHeight fullCenterColumn">
      <div class="container">
        <div class="row padAll">
          <img src="<?php the_sub_field( 'open_quote_image' ); ?>" alt="">
            <div class="fontLg">
              <p><?php the_sub_field( 'founders_quote' ); ?></p>
            </div>
            <div class="d-flex justify-content-end">
              <img class="float-right" src="<?php the_sub_field( 'close_quote_image' ); ?>" alt="">
            </div>
        </div>
        <div class="prox fontSm">
        <div class="row padAll">
          <?php the_sub_field( 'quote_credit' ); ?>
        </div>
        <div class="row padAll">
          <?php the_sub_field( 'about_text' ); ?>
        </div>
        <div class="row padAll">
          <a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
</div>
