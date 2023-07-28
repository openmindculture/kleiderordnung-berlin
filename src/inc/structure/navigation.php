<?php
/*
 * Main Navigation in Page Header
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<nav id="site-navigation" class="navigation navigation--main-navigation main-navigation" aria-label="Primary"  itemtype="https://schema.org/SiteNavigationElement" itemscope>
  <div class="inside-navigation grid-container">
    <a href="#primary-menu" class="navigation__toggle navigation__toggle--open" aria-controls="primary-menu" aria-expanded="false" title="<?php _e( 'Menü öffnen', 'kleiderordnung' ) ?>" tabindex="0">
      <svg viewBox="0 0 512 512" aria-hidden="true" width="1em" height="1em"><path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z" fill="currentColor"/></svg>
      <span class="sr-only"><?php _e( 'Menü', 'kleiderordnung' ) ?></span>
    </a>

    <div id="primary-menu" class="navigation__list-wrapper navigation__list-wrapper--main">
      <a href="#" class="navigation__toggle navigation__toggle--close" aria-controls="primary-menu" aria-expanded="false" title="<?php _e( 'Menü schließen', 'kleiderordnung' ) ?>" tabindex="0">
        <svg viewBox="0 0 512 512" aria-hidden="true" width="1em" height="1em"><path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z" fill="currentColor"/></svg>
        <span class="sr-only"><?php _e( 'Menü schließen', 'kleiderordnung' ) ?></span>
      </a>
      <ul id="menu-main" class="navigation__list navigation__list--main">
        <li id="menu-main-item-angebot" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-angebot"><a href="<?php echo get_home_url() ?>/#angebot"  tabindex="0"><?php _e( 'Angebot', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-mission" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-mission"><a href="<?php echo get_home_url() ?>/#mission"  tabindex="0"><?php _e( 'Mission', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-stories" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-stories"><a href="<?php echo get_home_url() ?>/#stories"  tabindex="0"><?php _e( 'Stories', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-news" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-news"><a href="<?php echo get_home_url() ?>/#news"  tabindex="0"><?php _e( 'News', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-kontakt" class="menu-item menu-item--has-button menu-item-type-post_type menu-item-object-page menu-item-kontakt"><a class="button button--primary" href="<?php echo get_home_url() ?>/#kontakt" tabindex="0"><?php _e( 'Kontakt', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-language" class="menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-language"><?php
            if (is_front_page()) {
              ?>
              <a href="/" hreflang="de-DE" lang="de-DE" title="Deutsch" tabindex="0">DE</a>/<a href="/en" hreflang="en-US" lang="en-US" title="English" tabindex="0">EN</a>
              <?php
            } else {
              ?><ul><?php
              pll_the_languages( array(
                'display_names_as' => 'slug',
              ));
              ?></ul><?php
            }
          ?>
        </li>
      </ul>
    </div>
    <div class="menu-bar-items"></div>
  </div>
</nav>
