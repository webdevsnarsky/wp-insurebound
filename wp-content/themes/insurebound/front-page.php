<?php
get_header();
?>

<main class="main">
  <section class="promo" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php the_field('promo_bgc'); ?>')">
    <div class="container">
      <div class="promo__inner">
        <h1 class="promo__title"><?php the_field('promo_title') ?></h1>
        <p class="promo__subtitle"><?php the_field('promo_descr') ?></p>
        <div class="promo__buttons">
          <?php
          $link = get_field('promo_link_1');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="promo__button promo__button_active" target="<?php echo esc_attr($link_target) ?>" ;><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>

          <?php
          $link = get_field('promo_link_2');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="promo__button" target="<?php echo esc_attr($link_target) ?>" ;><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
        <div class="promo__benefits benefits">
          <div class="benefits__wrap">
            <?php if (have_rows('benefits_cards')) : ?>
              <div class="row">
                <?php while (have_rows('benefits_cards')) : the_row(); ?>
                  <div class="benefits__item">
                    <object data="<?php the_sub_field('card_icon'); ?>" type="image/svg+xml" class="benefits__image"></object>
                    <h3 class="benefits__title"><?php the_sub_field('card_title'); ?></h3>
                    <p class="benefits__descr"><?php the_sub_field('card_descr'); ?></p>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="features__item">
          <div class="feature__text">
            <h5 class="features__title">Peace of Mind</h5>
            <p class="features__descr descr">So it really behaves like neither.
              Now we have given up. </p>
          </div>
        </div>
        <div class="features__item">
          <div class="feature__text">
            <h5 class="features__title">Set For Life</h5>
            <p class="features__descr descr">They were used to create the
              machines that launched </p>
          </div>
        </div>
        <div class="features__item">
          <div class="feature__text">
            <h5 class="features__title">100% Satisfaction</h5>
            <p class="features__descr descr">So it really behaves like neither.
              Now we have given up. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="industry">
    <div class="container">
      <h2 class="industry__title"><?php the_field('industry_title') ?></h2>
      <p class="industry__descr descr"><?php the_field('industry_title') ?></p>
      <div class="industry__slider">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php if (have_rows('reviews_slider')) : ?>
              <?php while (have_rows('reviews_slider')) : the_row(); ?>
                <div class="swiper-slide">
                  <div class="industry__wrapper">
                    <div class="industry__cart cart">
                      <img src="<?php the_sub_field('reviews_slider_img'); ?>" alt="reviewer" class="cart__image">
                      <p class="cart__review"><?php the_sub_field('reviews_slider_text'); ?></p>
                      <div class="cart__stars" data-mark="<?php the_sub_field('reviews_rating'); ?>">
                        <span class="cart__star"></span>
                        <span class="cart__star"></span>
                        <span class="cart__star"></span>
                        <span class="cart__star"></span>
                        <span class="cart__star"></span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <section class="brands">
    <div class="container">
      <div class="brands__wrap row ">
        <?php if (have_rows('brands')) : ?>
          <?php while (have_rows('brands')) : the_row(); ?>
            <div class="brands__item">
              <img src="<?php the_sub_field('brend_logo'); ?>" alt="brand" class="brands__image">
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="subscribe">
    <div class="container">
      <div class="subscribe__inner">
        <h3 class="subscribe__title"><?php the_field('subscribe_title') ?></h3>
        <form action="POST" class="subscribe__form">
          <input type="email" class="subscribe__email subscribe__input" placeholder="Your Email" required>
          <input type="submit" class="subscribe__button subscribe__input" value="Subscribe">
        </form>
      </div>
    </div>
  </section>
  <section class="pricing">
    <div class="container">
      <h2 class="pricing__title"><?php the_field('pricing_title') ?></h2>
      <p class="pricing__descr descr"><?php the_field('pricing_title') ?></p>
      <div class="pricing__wrap">
        <?php if (have_rows('tariffs')) : ?>
          <?php while (have_rows('tariffs')) : the_row(); ?>
            <div class="pricing__tariff tariff">
              <h3 class="tariff__title"><?php the_sub_field('tariff_title'); ?></h3>
              <p class="tariff__descr"><?php the_sub_field('tariff_descr'); ?></p>
              <div class="tariff__wrap">
                <div class="tariff__price"><?php the_sub_field('tariff_price'); ?></div>
                <div class="tariff__wrapper">
                  <span class="tariff__currency">$</span>
                  <span class="tariff__term">Per Month</span>
                </div>
              </div>
              <div class="tariff__services">
                <div class="tariff__service">
                  <p class="tariff__text"><?php the_sub_field('tariff_benefit_1'); ?></p>
                </div>
                <div class="tariff__service">
                  <p class="tariff__text"><?php the_sub_field('tariff_benefit_2'); ?></p>
                </div>
                <div class="tariff__service">
                  <p class="tariff__text"><?php the_sub_field('tariff_benefit_3'); ?></p>
                </div>
                <div class="tariff__service">
                  <p class="tariff__text"><?php the_sub_field('tariff_benefit_4'); ?></p>
                </div>
                <div class="tariff__service">
                  <p class="tariff__text"><?php the_sub_field('tariff_benefit_5'); ?></p>
                </div>
              </div>
              <?php
              $link = get_field('tariff_link');
              if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
              ?>
                <a href="<?php echo esc_url($link_url); ?>" class="tariff__button button" target="<?php echo esc_attr($link_target) ?>" ;><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="appointment">
    <div class="appointment__wrap">
      <div class="container container_padding">
        <div class="appointment__inner" style="background-image: url('<?php the_field('appointment_bgc'); ?>')">
          <div class="appointment__text">
            <h2 class="appointment__title"><?php the_field('appointment_title'); ?></h2>
            <p class="appointment__descr"><?php the_field('appointment_descr'); ?></p>
          </div>
        </div>
        <div class="map">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afa97052869b5cbc72e925fc54b544e26ac53d2a9793ca8fcc59d987a67eba626&amp;width=100%25&amp;height=520&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="appointment__wrapper">
          <div class="appointment__form-wrap">
            <div class="appointment__images">
              <img src="<?php the_field('image_form'); ?>" alt="#" class="appointment__image">
            </div>
            <?php echo do_shortcode('[contact-form-7 id="121" title="Contact form 1"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>