<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" main tag and all content after.
 *
 * @package WordPress
 */
?>

</main>
<!-- CONTENT EOF   -->
<!-- BEGIN FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="inner">
      <div class="footer__container">
        <div class="footer__item m-primary">
          <div class="footer__itemInner">
            <div class="footer__content">
              <?php if (is_front_page()) : ?>
                <div class="footer__logoLink">
                  <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="PayLite" class="footer__logo">
                </div>
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logoLink">
                  <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="PayLite" class="footer__logo">
                </a>
              <?php endif; ?>

              <?php $phone = get_field('phone', 'option') ?>
              <?php $email = get_field('email', 'option') ?>
              <?php $address = get_field('address', 'option') ?>
              <?php $days = get_field('days', 'option') ?>
              <?php $time = get_field('time', 'option') ?>
              <?php $copyright = get_field('copyright', 'option') ?>
              <ul class="footer__list">
                <li class="footer__listItem">
                  <img src="<?php bloginfo('template_url'); ?>/images/phone-2.svg" alt="" class="footer__listItemIcon">
                  <a href="tel:<?php echo $phone; ?>" class="footer__listItemText m-phone"><?php echo $phone; ?></a>
                </li>
                <li class="footer__listItem">
                  <img src="<?php bloginfo('template_url'); ?>/images/email.svg" alt="" class="footer__listItemIcon">
                  <a href="mailto:<?php echo $email; ?>" class="footer__listItemText m-email"><?php echo $email; ?></a>
                </li>
                <li class="footer__listItem">
                  <img src="<?php bloginfo('template_url'); ?>/images/location.svg" alt="" class="footer__listItemIcon">
                  <p class="footer__listItemText m-address"><?php echo $address; ?></p>
                </li>
                <li class="footer__listItem">
                  <img src="<?php bloginfo('template_url'); ?>/images/clock.svg" alt="" class="footer__listItemIcon">
                  <p class="footer__listItemText m-time"><span class="span"><?php echo $days; ?></span> <?php echo $time; ?></p>
                </li>
              </ul>
              <div class="footer__copyright"><?php echo $copyright; ?></div>
            </div>
          </div>
        </div>
        <div class="footer__item m-secondary">
          <div class="footer__itemInner">
            <div class="footer__map">
              <?php echo do_shortcode('[wpgmza id="1"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER EOF   -->
</div>
<?php wp_footer(); ?>
</body>

</html>