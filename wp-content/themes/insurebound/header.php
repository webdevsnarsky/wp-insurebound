<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insurebond</title>
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
  <!-- <link rel="stylesheet" href="assets/styles/fonts.css"> -->
  <!-- <link rel="stylesheet" href="assets/styles/styles.css?ver=17.04.21.01"> -->
  <?php
  wp_head();
  ?>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__wrapper">
          <div class="header__wrap">
            <div class="header__logo logo">
              <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

              if (has_custom_logo()) {
                echo '<a href="index.php"><img src="' . esc_url($logo[0]) . '" alt="' . the_field('logo', 'option') . '" class="logo__image"></a>';
              } else {
                echo '<a href="index.php"><h3 class="logo__text">' . get_field('logo', 'option') . '</h3></a>';
              }
              ?>
            </div>
            <div class="header__icons icons">
              <a href="#" class="icons__link">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/icons/search.svg" alt="search" class="header__search icons">
              </a>
              <a href="#" class="icons__link">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/icons/shopping-cart.svg" alt="shop" class="header__shop icons">
              </a>
              <a href="#" class="icons__link">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/icons/burger.svg" alt="burger" class="icons-burger icons">
              </a>
            </div>
          </div>
          <label class="switch">
            <input class="switch__checkbox" type="checkbox" data-mode="light">
            <span class="slider round"></span>
          </label>
          <?php
          wp_nav_menu([
            'theme_location'  => 'primary',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'header__nav',
            'container_id'    => '',
            'menu_class'      => 'header__menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ]);
          ?>
        </div>
        <div class="header__buttons">
          <a href="#" class="header__link header__link_padding header__button-active">Login111</a>
          <a href="#" class="header__button header__button-size header__button-arrow  button">Become a member</a>
        </div>
      </div>
    </div>
  </header>