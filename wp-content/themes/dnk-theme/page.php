<?php

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="presentation">
  <div class="container wide">
    <div class="inner">
      <div class="presentation__inner">
        <div class="presentation__imgWrap">
          <img src="<?php bloginfo('template_url'); ?>/images/presentation.png" alt="Presentation" class="presentation__img" alt="PayLite">
          <img src="<?php bloginfo('template_url'); ?>/images/pelican.png" alt="Presentation" class="presentation__img m-secondary" alt="PayLite">
        </div>
        <div class="presentation__content">
          <h1 class="presentation__title">
            <div class="presentation__titleItem m-primary">PayLite PRESENTS</div>
            <div class="presentation__titleItem m-secondary">100% Free</div>
            <div class="presentation__titleItem m-tertiary">Credit Card Processing</div>
          </h1>
          <div class="presentation__btnWrap">
            <button class="presentation__btn">Get Started</button>
            <a href="" class="presentation__link">NO obligation</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img src="<?php bloginfo('template_url'); ?>/images/presentation-circle.png" alt="Circle image" class="presentation__circle">
  <img src="<?php bloginfo('template_url'); ?>/images/presentation-circle-mobile.png" alt="Circle image" class="presentation__circle m-secondary">
</section>
<section class="advantages">
  <div class="container">
    <div class="inner">
      <div class="advantages__inner">
        <div class="advantages__header">
          <h4 class="advantages__title">This involves imposing a service fee on all card-paying customers and granting a discount to those who opt for cash</h4>
          <p class="advantages__text">This strategy mitigates merchant processing fees without raising the sale price, resulting in the business owner incurring zero fees</p>
        </div>
        <div class="advantages__itemsWrap">
          <ul class="advantages__list">
            <li class="advantages__item m-first">
              <div class="advantages__itemInner">
                <div class="advantages__itemHeader">
                  <img src="<?php bloginfo('template_url'); ?>/images/advantages-1.svg" alt="Say goodbye to processing fees" class="advantages__itemIcon m-secondary">
                </div>
                <p class="advantages__itemText">Say goodbye to processing fees</p>
              </div>
            </li>
            <li class="advantages__item m-second">
              <div class="advantages__itemInner">
                <div class="advantages__itemHeader">
                  <img src="<?php bloginfo('template_url'); ?>/images/advantages-2.svg" alt="Quick start, zero investment" class="advantages__itemIcon">
                </div>
                <p class="advantages__itemText">Quick start, zero investment</p>
              </div>
            </li>
            <li class="advantages__item m-third">
              <div class="advantages__itemInner m-secondary">
                <div class="advantages__itemHeader">
                  <img src="<?php bloginfo('template_url'); ?>/images/advantages-3.svg" alt="SApplicable in all 50 states" class="advantages__itemIcon m-tertiary">
                </div>
                <p class="advantages__itemText">SApplicable in all 50 states</p>
              </div>
              <div class="advantages__itemInner m-secondary">
                <div class="advantages__itemHeader">
                  <img src="<?php bloginfo('template_url'); ?>/images/advantages-4.svg" alt="No Hidden Charges!" class="advantages__itemIcon m-fourth">
                </div>
                <p class="advantages__itemText">No Hidden Charges!</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pricing">
  <div class="container">
    <div class="inner">
      <h4 class="pricing__title">Simple and clear pricing</h4>
      <div class="pricing__listWrap">
        <ul class="pricing__list">
          <li class="pricing__listItem">
            <div class="pricing__listItemInner">
              <div class="pricing__listItemHeader">
                <div class="pricing__listItemHeaderContent">
                  <div class="pricing__listItemHeaderContentText">Customer Pays With</div>
                  <div class="pricing__listItemHeaderContentTextSecondary m-primary">Credit Card</div>
                </div>
                <div class="pricing__listItemHeaderImgWrap">
                  <img src="<?php bloginfo('template_url'); ?>/images/pricing-1.png" alt="Customer Pays With Credit Card" class="pricing__listItemHeaderImg">
                </div>
              </div>
              <div class="pricing__listItemMiddle">
                <div class="pricing__listItemMiddleItem">
                  <div class="pricing__listItemMiddleItemHeader">You pay</div>
                  <div class="pricing__listItemMiddleItemFooter">$0</div>
                </div>
                <div class="pricing__listItemMiddleItem">
                  <div class="pricing__listItemMiddleItemHeader">Your customer pays</div>
                  <div class="pricing__listItemMiddleItemFooter">3%</div>
                </div>
              </div>
              <div class="pricing__listItemFooter">
                <div class="pricing__listItemFooterTitle">i.e.Make a transaction for <span class="pricing__listItemFooterTitleSpan">$100</span></div>
                <div class="pricing__listItemFooterItems">
                  <div class="pricing__listItemFooterItemRow">
                    <div class="pricing__listItemFooterItem">Customer Pays:</div>
                    <div class="pricing__listItemFooterItem m-secondary">$103</div>
                  </div>
                  <div class="pricing__listItemFooterItemRow">
                    <div class="pricing__listItemFooterItem">You receive:</div>
                    <div class="pricing__listItemFooterItem m-secondary">$100</div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pricing__listItem">
            <div class="pricing__listItemInner">
              <div class="pricing__listItemHeader">
                <div class="pricing__listItemHeaderContent">
                  <div class="pricing__listItemHeaderContentText">Customer Pays With</div>
                  <div class="pricing__listItemHeaderContentTextSecondary m-secondary">Debit Card</div>
                </div>
                <div class="pricing__listItemHeaderImgWrap">
                  <img src="<?php bloginfo('template_url'); ?>/images/pricing-2.png" alt="Customer Pays With Credit Card" class="pricing__listItemHeaderImg">
                </div>
              </div>
              <div class="pricing__listItemMiddle">
                <div class="pricing__listItemMiddleItem">
                  <div class="pricing__listItemMiddleItemHeader">You pay</div>
                  <div class="pricing__listItemMiddleItemFooter">0.5 % + 22¢</div>
                </div>
                <div class="pricing__listItemMiddleItem">
                  <div class="pricing__listItemMiddleItemHeader">Your customer pays</div>
                  <div class="pricing__listItemMiddleItemFooter">0%</div>
                </div>
              </div>
              <div class="pricing__listItemFooter">
                <div class="pricing__listItemFooterTitle">i.e.Make a transaction for <span class="pricing__listItemFooterTitleSpan">$100</span></div>
                <div class="pricing__listItemFooterItems">
                  <div class="pricing__listItemFooterItemRow">
                    <div class="pricing__listItemFooterItem">Customer Pays:</div>
                    <div class="pricing__listItemFooterItem m-secondary">$100</div>
                  </div>
                  <div class="pricing__listItemFooterItemRow">
                    <div class="pricing__listItemFooterItem">You receive:</div>
                    <div class="pricing__listItemFooterItem m-secondary">$99.28</div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="pricing__subtitle">No hidden fees or charges. THAT'S ALL!</div>
    </div>
  </div>
</section>
<section class="available">
  <div class="container">
    <div class="inner">
      <h4 class="available__title">Available via hardware or software terminal <span class="accent">for free!</span></h4>
      <div class="available__listWrap">
        <ul class="available__list js-available-slider">
          <li class="available__listItem">
            <div class="available__listItemInner">
              <div class="available__listItemImgWrap">
                <img src="<?php bloginfo('template_url'); ?>/images/hardware-1.png" alt="Hardware image" class="available__listItemImg">
              </div>
              <div class="available__listItemContent">
                <h5 class="available__listItemContentTitle">Clover Flex</h5>
                <ul class="available__listItemContentList">
                  <li class="available__listItemContentListItem">6 LCD color touch screen</li>
                  <li class="available__listItemContentListItem">1D/2D barcode scanner/camera</li>
                  <li class="available__listItemContentListItem">Connectivity: WiFi, LTE</li>
                  <li class="available__listItemContentListItem">Attery Life: At least 8 hours of use for a typical SMB</li>
                </ul>
              </div>
            </div>
          </li>
          <li class="available__listItem">
            <div class="available__listItemInner">
              <div class="available__listItemImgWrap">
                <img src="<?php bloginfo('template_url'); ?>/images/hardware-1.png" alt="Hardware image" class="available__listItemImg">
              </div>
              <div class="available__listItemContent">
                <h5 class="available__listItemContentTitle">Clover Flex</h5>
                <ul class="available__listItemContentList">
                  <li class="available__listItemContentListItem">6 LCD color touch screen</li>
                  <li class="available__listItemContentListItem">1D/2D barcode scanner/camera</li>
                  <li class="available__listItemContentListItem">Connectivity: WiFi, LTE</li>
                  <li class="available__listItemContentListItem">Attery Life: At least 8 hours of use for a typical SMB</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="available__btnWrap">
        <a class="available__btn" href="/">See all <img src="<?php bloginfo('template_url'); ?>/images/arrow-circle.svg" alt="arrow" class="available__icon" /></a>
      </div>
    </div>
  </div>
  <img src="<?php bloginfo('template_url'); ?>/images/available-circle.png" alt="background" class="available__imgBg">
</section>
<section class="formWrapper">
  <div class="container">
    <div class="inner">
      <h4 class="formWrapper__title">Let’s start free card processing</h4>
      <h5 class="formWrapper__subtitle">Fill out the form and we will contact you</h5>
      <div class="formWrapper__items">
        <div class="formWrapper__item">
          <div class="formWrapper__itemInner">
            <ul class="formWrapper__list">
              <li class="formWrapper__listItem">NO setup costs</li>
              <li class="formWrapper__listItem">NO termination fees</li>
              <li class="formWrapper__listItem">24/7/365 support</li>
            </ul>
          </div>
        </div>
        <div class="formWrapper__item">
          <div class="formWrapper__itemInner">
          </div>
        </div>
      </div>
      <div class="formWrapper__footer">
        <div class="formWrapper__footerDelimiter">Or</div>
        <div class="formWrapper__footerTitle">Call PayLite</div>
        <div class="formWrapper__footerLinkWrap">
          <a href="tel:(305)363-4678" class="formWrapper__footerLink">(305)363-4678</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>