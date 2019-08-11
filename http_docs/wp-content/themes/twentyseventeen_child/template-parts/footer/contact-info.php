<div class="footer-contact-info">
  <div class="inner">
    <?php if( get_theme_mod( 'company-phone') != '' ) : ?>
        <a href="tel:<?php echo get_theme_mod( 'company-phone') ?>">
          Call Us<span class="only-desktop">: <?php echo get_theme_mod( 'company-phone')?></span>
        </a>
    <?php endif ?>

    <?php if( get_theme_mod( 'company-email') != '' ) : ?>
        <a href="mailto:<?php echo get_theme_mod( 'company-email') ?>">
          Email Us<span class="only-desktop">: <?php echo get_theme_mod( 'company-email')?></span>
        </a>
    <?php endif ?>

    <?php if( get_theme_mod( 'contact-info') != '' ) : ?>

        <a href="#" class="modal-button">Contact Us</a>

        <div class="modal-wrapper">
          <div class="modal-cont">
            <div class="close">X</div>
            <?php echo get_theme_mod( 'contact-info') ?>
          </div>
        </div>

    <?php endif ?>
  </div>
</div>
