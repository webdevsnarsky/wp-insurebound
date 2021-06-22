<div class="modal-bg">
  <div class="modal">
    <span class="modal__close"></span>
    <p class="modal__text">Your message was sent</p>
  </div>
</div>

<footer class="footer">
  <section class="footer__callback callback">
    <div class="container">
      <div class="callback__wrap">
        <div class="callback__text">
          <h3 class="callback__title"><?php the_field('callback_title') ?></h3>
          <p class="callback__descr descr"><?php the_field('callback_descr') ?></p>
        </div>
        <a href="#" class="callback__button button">Contact Us</a>
      </div>
    </div>
  </section>

  <div class="footer__inner">
    <div class="container">
      <div class="footer__categories">
        <div class="row">

          <?php
          if (is_active_sidebar('custom-footer-widget')) : ?>
            <?php dynamic_sidebar('custom-footer-widget'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="footer__bottom">
      <h6 class="footer__copyright"><?php the_field('footer_copyright', 'options') ?></h6>
      <ul class="footer__socials">
        <?php if (have_rows('socials', 'options')) : ?>
          <?php while (have_rows('socials', 'options')) : the_row(); ?>
            <li class="footer__social">
              <a href="<?php the_sub_field('social_link', 'options'); ?>" class="footer__link" style="background-image: url('<?php the_sub_field('social_icon', 'options'); ?>')"></a>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</footer>
<?php
wp_footer();
?>
</body>

</html>