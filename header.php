<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <header class="wkode-header wkode-header--desktop">
      <div class="wkode-header__nav wkode-header__nav--top">
        <div class="wkode-header__logo-wrapper">
					<a class="" href="<?php echo esc_url(site_url()); ?>">
						<img class="logo" src="<?php echo get_theme_file_uri('/assets/img/svg/atf6000.svg'); ?>" alt="ATF 6000 Pro">
					</a>
				</div>
        <div class="wkode-header__nav wkode-header__nav--bottom" id="navbarNavAltMarkup">
          <?php
            wp_nav_menu(
              array(
                'theme_location'    => 'main_menu',
                'container'         => 'nav',
                'container_class'   => 'wkode-header__menu-container',
                'menu_class'        => 'nav navbar-nav',
              )
            );
          ?>
        </div>
      </div>

    </header>

    <!-- header mobile -->
    <header class="wkode-header wkode-header--mobile">
      <div class="wkode-header__nav wkode-header__nav--top" id="navbarNavAltMarkup">
        <div class="wkode-header__logo-wrapper">
          <a class="" href="<?php echo esc_url(site_url()); ?>">
            <img class="logo" src="<?php echo get_theme_file_uri('/assets/img/svg/atf6000.svg'); ?>" alt="Imagem logotipo">
					</a>
				</div>
        <a id="wkode-header__megamenu-btn" href="<?php echo esc_url(site_url()); ?>">
          <img class="" src="<?php echo get_theme_file_uri('/assets/img/svg/hamburguer.svg'); ?>" alt="Hamburguer Icon para abrir menu">
        </a>
      </div>
      <div class="wkode-header__nav wkode-header__nav--bottom" id="controlIdForMobileNav">
        <?php
        wp_nav_menu(
          array(
						'theme_location'    => 'main_menu',
						'container'         => 'nav',
						'container_class'   => 'wkode-header__menu-container',
						'menu_class'        => 'nav navbar-nav',
				  )
        );
        ?>
        <img id="wkode-header-close" src="<?php echo get_theme_file_uri('/assets/img/svg/white-x.svg'); ?>" alt="Close navbar">
      </div>
    </header>