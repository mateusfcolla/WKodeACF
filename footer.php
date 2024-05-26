        <footer id="footer" class="wkode-footer">
          <?php

          ?>
          
          <div class="wkode-footer__wrapper grid grid-cols-1 md:grid-cols-12 gap-14">
            <div class="wkode-footer__menu-class wkode-footer__menu-class-3 order-3 md:order-1">
              <h3 class="wkode-footer__menu-class-title">
                Redes Sociais
              </h3>
              <nav class="wkode-header__icons-wrapper sub-menu mb-12 ml-0">
                <a target="_blank" class="wkode-header__social-media-icon" href="https://wa.me/5548992083737" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/svg/whatsapp-logo.svg'); ?>);">
                </a>
                <a target="_blank" class="wkode-header__social-media-icon" href="https://www.instagram.com/pousadavilamarinafloripa/" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/svg/instagram-logo.svg'); ?>);">
                </a>
              </nav>
              <div class="wkode-footer__logo-wrapper mb-12">
                <a class="" href="<?php echo esc_url(site_url()); ?>">
                  <img class="logo" src="<?php echo get_theme_file_uri('/assets/img/svg/logo.svg')?>" alt="<?php  ?>">
                </a>
              </div>
            </div>
            <div class="wkode-footer__menu-class wkode-footer__menu-class-3 order-3">
              <h3 class="wkode-footer__menu-class-title mb-7">
                Institucional
              </h3>
              <?php
              wp_nav_menu(
                array(
                  'theme_location'    => 'main_menu',
                  'container'         => 'wkode-footer__nav-1',
                  'container_class'   => 'wkode-footer__menu-container-1',
                  'menu_class'        => 'wkode-footer__menu-class wkode-footer__menu-class-1',
                )
              );
              ?>
            </div>
            <div class="wkode-footer__menu-class wkode-footer__menu-class-3 order-1 md:order-3">
              <h3 class="wkode-footer__menu-class-title">
                Contato
              </h3>
              <div class="wkode-contact-block__form col-span-1 md:col-span-4">
                <?php echo do_shortcode( '[wpforms id="250" title="false"]' ); ?>
              </div>
            </div>
          </div>
          <hr class="wkode-footer__horizontal-footer">
          <div class="wkode-footer__logo container">
            <h5>Pousada Vila Marina © <?php echo date("Y"); ?> - Todos os direitos reservados. </h5>
            <a target="_blank" href="https://wkode.com.br/" class="">
              <img  class="logo" src="<?php echo get_theme_file_uri('/assets/img/svg/wkode-logo-footer.svg')?>" alt="<?php  ?>">
            </a>
          </div>
        </footer>
      <?php wp_footer() ?>

    </div>
  </body>
</html>