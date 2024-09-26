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
        <li id="menu-main-item-angebot" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-angebot"><a href="<?php echo get_home_url() ?>/#angebot" class="menu-item-link-waypoint" tabindex="0"><?php _e( 'Angebot', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-mission" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-mission"><a href="<?php echo get_home_url() ?>/#mission" class="menu-item-link-waypoint" tabindex="0"><?php _e( 'Mission', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-stories" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-stories"><a href="<?php echo get_home_url() ?>/#stories" class="menu-item-link-waypoint" tabindex="0"><?php _e( 'Stories', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-news" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-news"><a href="<?php echo get_home_url() ?>/#news" class="menu-item-link-waypoint" tabindex="0"><?php _e( 'News', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-kontakt" class="menu-item menu-item--has-button menu-item-type-post_type menu-item-object-page menu-item-kontakt"><a href="<?php echo get_home_url() ?>/#kontakt" class="menu-item-link-waypoint button button--primary" tabindex="0"><?php _e( 'Kontakt', 'kleiderordnung' ) ?></a></li>
        <li id="menu-main-item-language" class="menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-language"><?php
            if (is_front_page()):
              ?>
              <a href="<?php echo get_site_url() ?>/" hreflang="de-DE" lang="de-DE" title="Deutsch" tabindex="0">DE</a>/<a href="<?php echo get_site_url() ?>/en" hreflang="en-US" lang="en-US" title="English" tabindex="0">EN</a>
              <?php
            elseif (!is_single() && get_post_type() === 'post'):
              ?>
              <a href="<?php echo get_site_url() ?>/news" hreflang="de-DE" lang="de-DE" title="Deutsch" tabindex="0">DE</a>/<a href="<?php echo get_site_url() ?>/en/news" hreflang="en-US" lang="en-US" title="English" tabindex="0">EN</a>
            <?php
            elseif (isset($post_id)):
              /* Returns an associative array of translations with language code as key and translation post_id as value */
              /** @var Array */ $post_translations = pll_get_post_translations($post_id);
              ?>
              <a href="<?php get_permalink($post_translations['de']) ?>" hreflang="de-DE" lang="de-DE" title="Deutsch" tabindex="0">DE</a>/<a href="<?php get_permalink($post_translations['en']) ?>" hreflang="en-US" lang="en-US" title="English" tabindex="0">EN</a>
              <?php
            else:
              ?><ul><?php
              pll_the_languages( array(
                'display_names_as' => 'slug',
              ));
              ?></ul><?php
            endif;
          ?>
        </li>
        <li class="menu-item menu-item-animation-toggle">
          <button class="animation-toggle no-print" tabindex="0">
            <svg width="32" height="32" viewBox="0 0 24 24">
              <title><?php _e( 'Animation aus', 'kleiderordnung' ) ?></title>
              <g>
                <path fill="none" d="M0 0h24v24H0z"/>
                <path fill="currentColor" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM9 9h2v6H9V9zm4 0h2v6h-2V9z"/>
              </g>
            </svg>
          </button>
        </li>
      </ul>
    </div>
    <div class="menu-bar-items"></div>
  </div>
</nav>
