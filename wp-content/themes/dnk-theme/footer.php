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
              <a href="/" class="footer__logoLink">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="PayLite" class="footer__logo">
              </a>
              <ul class="footer__list">
                <li class="footer__listItem">
                  <img src="<?php bloginfo('template_url'); ?>/images/phone-2.svg" alt="" class="footer__listItemIcon">
                  <a href="tel:(718)757-5215" class="footer__listItemText m-phone">(718)757-5215</a>
                </li>
                <li class="footer__listItem">
                  <img src="<?php bloginfo('template_url'); ?>/images/email.svg" alt="" class="footer__listItemIcon">
                  <a href="mailto:admin@paylitemerchant.com" class="footer__listItemText m-email">admin@paylitemerchant.com</a>
                </li>
                <li class="footer__listItem">
                  <img src="<?php bloginfo('template_url'); ?>/images/location.svg" alt="" class="footer__listItemIcon">
                  <p class="footer__listItemText m-address">1920 E Hallandale Beach Blvd Suite 509 <br> Hallandale Beach FL 33009</p>
                </li>
                <li class="footer__listItem">
                  <img src="<?php bloginfo('template_url'); ?>/images/clock.svg" alt="" class="footer__listItemIcon">
                  <p class="footer__listItemText m-time"><span class="span">Mon-Fri</span> 9:00 - 18:00</p>
                </li>
              </ul>
              <div class="footer__copyright">© Copyright 2023 PayLite. All Rights Reserved.</div>
            </div>
          </div>
        </div>
        <div class="footer__item m-secondary">
          <div class="footer__itemInner">
            <div class="footer__map"></div>
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