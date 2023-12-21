<?php /* Template Name: HomePage */ ?>

<?php get_header(); ?>

<?php $presentation_main_image_desktop = get_field('presentation_main_image_desktop'); ?>
<?php $presentation_main_image_mobile = get_field('presentation_main_image_mobile'); ?>
<?php $presentation_title_1 = get_field('presentation_title_1'); ?>
<?php $presentation_title_2 = get_field('presentation_title_2'); ?>
<?php $presentation_title_3 = get_field('presentation_title_3'); ?>
<?php $presentation_circle_image = get_field('presentation_circle_image'); ?>
<?php $presentation_circle_image_mobile = get_field('presentation_circle_image_mobile'); ?>

<section class="presentation">
  <div class="container wide">
    <div class="inner">
      <div class="presentation__inner">
        <div class="presentation__imgWrap">
          <img src="<?php echo $presentation_main_image_desktop['url']; ?>" alt="Presentation" class="presentation__img" alt="PayLite">
          <img src="<?php echo $presentation_main_image_mobile['url']; ?>" alt="Presentation" class="presentation__img m-secondary" alt="PayLite">
        </div>
        <div class="presentation__content">
          <h1 class="presentation__title">
            <div class="presentation__titleItem m-primary"><?php echo $presentation_title_1; ?></div>
            <div class="presentation__titleItem m-secondary"><?php echo $presentation_title_2; ?></div>
            <div class="presentation__titleItem m-tertiary"><?php echo $presentation_title_3; ?></div>
          </h1>
          <div class="presentation__btnWrap">
            <button class="presentation__btn">Get Started</button>
            <a href="" class="presentation__link">NO obligation</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img src="<?php echo $presentation_circle_image['url']; ?>" alt="Circle image" class="presentation__circle">
  <img src="<?php echo $presentation_circle_image_mobile['url']; ?>" alt="Circle image" class="presentation__circle m-secondary">
</section>

<?php $advantages_title = get_field('advantages_title'); ?>
<?php $advantages_subtitle = get_field('advantages_subtitle'); ?>
<?php $advantages_item_title_1 = get_field('advantages_item_title_1'); ?>
<?php $advantages_item_title_2 = get_field('advantages_item_title_2'); ?>
<?php $advantages_item_title_3 = get_field('advantages_item_title_3'); ?>
<?php $advantages_item_title_4 = get_field('advantages_item_title_4'); ?>
<?php $advantages_item_icon_file_name_1 = get_field('advantages_item_icon_file_name_1'); ?>
<?php $advantages_item_icon_file_name_2 = get_field('advantages_item_icon_file_name_2'); ?>
<?php $advantages_item_icon_file_name_3 = get_field('advantages_item_icon_file_name_3'); ?>
<?php $advantages_item_icon_file_name_4 = get_field('advantages_item_icon_file_name_4'); ?>
<section class="advantages">
  <div class="container">
    <div class="inner">
      <div class="advantages__inner">
        <div class="advantages__header">
          <h4 class="advantages__title"><?php echo $advantages_title; ?></h4>
          <p class="advantages__text"><?php echo $advantages_subtitle; ?></p>
        </div>
        <div class="advantages__itemsWrap">
          <ul class="advantages__list">
            <li class="advantages__item m-first">
              <div class="advantages__itemInner">
                <div class="advantages__itemHeader">
                  <img src="<?php bloginfo('template_url'); ?>/images/<?php echo $advantages_item_icon_file_name_1; ?>" alt="<?php echo $advantages_item_title_1; ?>" class="advantages__itemIcon m-secondary">
                </div>
                <p class="advantages__itemText"><?php echo $advantages_item_title_1; ?></p>
              </div>
            </li>
            <li class="advantages__item m-second">
              <div class="advantages__itemInner">
                <div class="advantages__itemHeader">
                  <img src="<?php bloginfo('template_url'); ?>/images/<?php echo $advantages_item_icon_file_name_2; ?>" alt="<?php echo $advantages_item_title_2; ?>" class="advantages__itemIcon">
                </div>
                <p class="advantages__itemText"><?php echo $advantages_item_title_2; ?></p>
              </div>
            </li>
            <li class="advantages__item m-third">
              <div class="advantages__itemInner m-secondary">
                <div class="advantages__itemHeader">
                  <img src="<?php bloginfo('template_url'); ?>/images/<?php echo $advantages_item_icon_file_name_3; ?>" alt="<?php echo $advantages_item_title_3; ?>" class="advantages__itemIcon m-tertiary">
                </div>
                <p class="advantages__itemText"><?php echo $advantages_item_title_3; ?></p>
              </div>
              <div class="advantages__itemInner m-secondary">
                <div class="advantages__itemHeader">
                  <img src="<?php bloginfo('template_url'); ?>/images/<?php echo $advantages_item_icon_file_name_4; ?>" alt="<?php echo $advantages_item_title_4; ?>" class="advantages__itemIcon m-fourth">
                </div>
                <p class="advantages__itemText"><?php echo $advantages_item_title_4; ?></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $pricing_title = get_field('pricing_title'); ?>
<?php $pricing_items = get_field('pricing_items'); ?>
<?php $pricing_subtitle = get_field('pricing_subtitle'); ?>
<section class="pricing">
  <div class="container">
    <div class="inner">
      <h4 class="pricing__title"><?php echo $pricing_title; ?></h4>
      <div class="pricing__listWrap">
        <?php if ($pricing_items) : ?>
          <ul class="pricing__list">
            <?php foreach ($pricing_items as $pricing_item) : ?>
              <li class="pricing__listItem">
                <div class="pricing__listItemInner">
                  <div class="pricing__listItemHeader">
                    <div class="pricing__listItemHeaderContent">
                      <div class="pricing__listItemHeaderContentText"><?php echo $pricing_item['title']; ?></div>
                      <div class="pricing__listItemHeaderContentTextSecondary m-primary"><?php echo $pricing_item['subtitle']; ?></div>
                    </div>
                    <div class="pricing__listItemHeaderImgWrap">
                      <img src="<?php echo $pricing_item['image']['url']; ?>" alt="<?php echo $pricing_item['title']; ?> <?php echo $pricing_item['subtitle']; ?>" class="pricing__listItemHeaderImg">
                    </div>
                  </div>
                  <div class="pricing__listItemMiddle">
                    <div class="pricing__listItemMiddleItem">
                      <div class="pricing__listItemMiddleItemHeader"><?php echo $pricing_item['you_pay_title']; ?></div>
                      <div class="pricing__listItemMiddleItemFooter"><?php echo $pricing_item['you_pay_price']; ?></div>
                    </div>
                    <div class="pricing__listItemMiddleItem">
                      <div class="pricing__listItemMiddleItemHeader"><?php echo $pricing_item['customer_pay_title']; ?></div>
                      <div class="pricing__listItemMiddleItemFooter"><?php echo $pricing_item['customer_pay_price']; ?></div>
                    </div>
                  </div>
                  <div class="pricing__listItemFooter">
                    <div class="pricing__listItemFooterTitle"><?php echo $pricing_item['note']; ?></div>
                    <div class="pricing__listItemFooterItems">
                      <div class="pricing__listItemFooterItemRow">
                        <div class="pricing__listItemFooterItem"><?php echo $pricing_item['customers_pay_title_bottom']; ?></div>
                        <div class="pricing__listItemFooterItem m-secondary"><?php echo $pricing_item['customers_pay_price_bottom']; ?></div>
                      </div>
                      <div class="pricing__listItemFooterItemRow">
                        <div class="pricing__listItemFooterItem"><?php echo $pricing_item['you_receive_bottom']; ?></div>
                        <div class="pricing__listItemFooterItem m-secondary"><?php echo $pricing_item['you_receive_price_bottom']; ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
      <div class="pricing__subtitle"><?php echo $pricing_subtitle; ?></div>
    </div>
  </div>
</section>

<?php $available_title = get_field('available_title'); ?>
<?php $available_title_marked = get_field('available_title_marked'); ?>
<?php $available_slider = get_field('available_slider'); ?>
<?php $available_link_text = get_field('available_link_text'); ?>
<?php $available_link_href = get_field('available_link_href'); ?>
<section class="available">
  <div class="container">
    <div class="inner">
      <h4 class="available__title"><?php echo $available_title; ?> <span class="accent"><?php echo $available_title_marked; ?></span></h4>
      <div class="available__listWrap">
        <?php if ($available_slider) : ?>
          <ul class="available__list js-available-slider">
            <?php foreach ($available_slider as $slide) : ?>
              <li class="available__listItem">
                <div class="available__listItemInner">
                  <div class="available__listItemImgWrap">
                    <img src="<?php echo $slide['image']['url']; ?>" alt="Hardware image" class="available__listItemImg">
                  </div>
                  <div class="available__listItemContent">
                    <h5 class="available__listItemContentTitle"><?php echo $slide['title']; ?></h5>
                    <?php if ($slide['list']) : ?>
                      <ul class="available__listItemContentList">
                        <?php foreach ($slide['list'] as $slide_list_item) : ?>
                          <li class="available__listItemContentListItem"><?php echo $slide_list_item['title']; ?></li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>


      </div>
      <div class="available__btnWrap">
        <a class="available__btn" href="<?php echo $available_link_href; ?>"><?php echo $available_link_text; ?> <img src="<?php bloginfo('template_url'); ?>/images/arrow-circle.svg" alt="arrow" class="available__icon" /></a>
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
            <div class="formWrapper__form">
              <?php echo do_shortcode('[contact-form-7 id="356f67b" title="Contact form 1"]'); ?>
            </div>
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