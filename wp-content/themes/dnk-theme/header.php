<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
  <title>Главная</title>
  <meta name='description' content="" />
  <meta name="keywords" content="" />
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <!--[if lt IE 9]>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
	<![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class($bodyClass); ?>>
  <!-- BEGIN BODY -->
  <div class="main-wrapper">
    <!-- BEGIN HEADER -->
    <header class="header">
      <div class="container">
        <div class="inner">
          <div class="header__inner">
            <div class="header__logoWrap">
              <?php if (is_front_page()) : ?>
                <div class="header__logoLink">
                  <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="PayLite logo" class="header__logo">
                </div>
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logoLink">
                  <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="PayLite logo" class="header__logo">
                </a>
              <?php endif; ?>
            </div>
            <nav class="header__menuWrap js-menu">
              <button class="header__menuBtnClose js-menu-btn-close">
                <img src="<?php bloginfo('template_url'); ?>/images/close.svg" alt="Close button" class="header__menuBtnCloseIcon">
              </button>
              <a href="tel:(305)363-4678" class="header__menuPhone">(305)363-4678</a>

              <?php
              wp_nav_menu(array(
                'theme_location'  => 'primary',
                'menu'            => 'main-menu',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'header__menuList',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before' => '',
                'link_after'  => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'add_li_class'  => 'header__menuListItem',
                'link_class'   => 'header__menuListItemLink',
                'depth'           => 0,
                'walker'          => '',
              ));
              ?>
            </nav>
            <?php $phone = get_field('phone', 'option') ?>
            <div class="header__phoneWrapper">
              <a href="tel:<?php echo $phone; ?>" class="header__phone"><span class="header__phoneText"><?php echo $phone; ?></span><img class="header__phoneIcon" src="<?php bloginfo('template_url'); ?>/images/phone.svg" alt="Phone icon"></a>
            </div>
            <div class="header__menuBtnWrapper js-menu-btn-open">
              <button class="header__menuBtn">
                <span class="header__menuBtnLine m-first"></span>
                <span class="header__menuBtnLine m-second"></span>
                <span class="header__menuBtnLine m-third"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER EOF   -->
    <!-- BEGIN CONTENT -->
    <main class="content">