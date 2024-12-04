<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 * @version 4.4.0
 *
 * @wordpress-plugin
 * Version: 4.4.0
 * Tested up to: 6.7
 * Plugin Name: Kleiderordnung Dashboard Widget
 * Text Domain: kleiderordnung-dashboard-widget
 * Author: openmindculture
 * Author URI: https://wordpress.org/support/users/openmindculture/
 * Plugin URI: https://github.com/openmindculture/kleiderordnung-berlin
 * Description: Add a dashboard widget with links to edit regular and custom content to simplify usage for unexperienced website editors
 * Short Description: Add a dashboard widget with links to edit content
 */

if (is_admin()) {
function kleiderordnung_add_dashboard_widget()
{
  wp_add_dashboard_widget('kleiderordnung_dashboard_widget', 'K L E I D E R O R D N U N G', 'kleiderordnung_echo_dashboard_content');
}

  function kleiderordnung_echo_dashboard_content()
  {
    $kleiderordnung_widget = '';
    global $wp_version;
    $currentTheme = wp_get_theme();
    $currentThemeName = esc_html($currentTheme['Name']);
    $currentThemeVersion = esc_html($currentTheme['Version']);
    $currentThemeDirectory = get_template_directory_uri();

    if (str_starts_with(strtolower($currentThemeName), 'kleiderordnung')) {
      $kleiderordnung_widget.= '<style>';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__image {';
      $kleiderordnung_widget.= '  width:100%;';
      $kleiderordnung_widget.= '  height:auto;';
      $kleiderordnung_widget.= '  margin-bottom: 0.125rem;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__image--faded {';
      $kleiderordnung_widget.= '  opacity: 0.5;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button {';
      $kleiderordnung_widget.= '  color: #ffffff;';
      $kleiderordnung_widget.= '  background-color: #87839c;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button--primary {';
      $kleiderordnung_widget.= '  background-color: #0014d1;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button,';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button:link,';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button:visited,';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button:active,';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button:hover,';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button {';
      $kleiderordnung_widget.= '  display: block;';
      $kleiderordnung_widget.= '  font-weight: bold;';
      $kleiderordnung_widget.= '  line-height: 0.875rem;';
      $kleiderordnung_widget.= '  margin-left: auto;';
      $kleiderordnung_widget.= '  margin-right: auto;';
      $kleiderordnung_widget.= '  text-transform: uppercase;';
      $kleiderordnung_widget.= '  text-decoration: none;';
      $kleiderordnung_widget.= '  text-align: center;';
      $kleiderordnung_widget.= '  border-radius: 1.875rem;';
      $kleiderordnung_widget.= '  padding: 1rem 1.5rem;';
      $kleiderordnung_widget.= '  width: fit-content';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button:active,';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button:hover,';
      $kleiderordnung_widget.= '.kleiderordnung__dashboard__button:focus {';
      $kleiderordnung_widget.= '  background-color: #ffc7b0;';
      $kleiderordnung_widget.= '  color: #000000;';
      $kleiderordnung_widget.= '  border: none;';
      $kleiderordnung_widget.= '  outline: none;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__centered {';
      $kleiderordnung_widget.= '  display: block;';
      $kleiderordnung_widget.= '  text-align: center;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__mt-3 {';
      $kleiderordnung_widget.= '  position: relative;';
      $kleiderordnung_widget.= '  margin-top: -3rem;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__mb3 {';
      $kleiderordnung_widget.= '  margin-bottom: 3rem;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__mt-6 {';
      $kleiderordnung_widget.= '  position: relative;';
      $kleiderordnung_widget.= '  margin-top: -6rem;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__mb6 {';
      $kleiderordnung_widget.= '  margin-bottom: 6rem;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__mt-9 {';
      $kleiderordnung_widget.= '  position: relative;';
      $kleiderordnung_widget.= '  margin-top: -9rem;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__mb9 {';
      $kleiderordnung_widget.= '  margin-bottom: 9rem;';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '.kleiderordnung__sticker {';
      $kleiderordnung_widget.= '  background-color: #b42222;';
      $kleiderordnung_widget.= '  color: #ffffff;';
      $kleiderordnung_widget.= '  position: absolute;';
      $kleiderordnung_widget.= '  top: 10rem;';
      $kleiderordnung_widget.= '  right: 0;';
      $kleiderordnung_widget.= '  z-index: 2;';
      $kleiderordnung_widget.= '  transform: rotate(45deg);';
      $kleiderordnung_widget.= '}';
      $kleiderordnung_widget.= '</style>';

      $kleiderordnung_frontpageIdGerman = url_to_postid(pll_home_url('de'));
      $kleiderordnung_editHomeGerman = $kleiderordnung_frontpageIdGerman ? '/wp-admin/post.php?post=' . $kleiderordnung_frontpageIdGerman . '&action=edit' : '/wp-admin/edit.php?post_type=page';
      $kleiderordnung_frontpageIdEnglish = url_to_postid(pll_home_url('en'));

      // fallback for custom homepage /en/ instead of default /en/homepage
      if (($kleiderordnung_frontpageIdEnglish == 0) && (strpos(pll_home_url('en'),'homepage') === false)) {
        $kleiderordnung_homeUrlEnglish = pll_home_url('en') . 'homepage/';
        $kleiderordnung_frontpageIdEnglish = url_to_postid($kleiderordnung_homeUrlEnglish);
      }

      $kleiderordnung_editHomeEnglish = $kleiderordnung_frontpageIdEnglish ? '/wp-admin/post.php?post=' . $kleiderordnung_frontpageIdEnglish . '&action=edit' : '/wp-admin/edit.php?post_type=page';

      $kleiderordnung_widget.= '<img src="'.$currentThemeDirectory.'/img/admin-screenshot-intro.png" width="509" height="382" class="kleiderordnung__dashboard__image">';

      $kleiderordnung_widget.= '<a href="/wp-admin/options-general.php#kleiderordnung-settings" class="kleiderordnung__dashboard__button kleiderordnung__dashboard__button--primary kleiderordnung__sticker kleiderordnung__mt-9 kleiderordnung__mb9" title="Sticker bearbeiten">Sticker bearbeiten</a>';

      $kleiderordnung_widget.= '<a href="' . $kleiderordnung_editHomeGerman . '" class="kleiderordnung__dashboard__button kleiderordnung__dashboard__button--primary kleiderordnung__mt-9 kleiderordnung__mb9" title="Homepage bearbeiten (deutsch)">Homepage / Texte bearbeiten <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAABLElEQVR4AY2QgUZEQRSGz9ydmzbYkBWABBJYABHEFhJ6m0WP0DMEQNIr9AKrN8ne2Tt3Zs7MOdOZmRBEv+v34Tvub9R6fdNlAzU+snSME/wdjbjbbJ6EiEg6BA8102QbjKNpoMzw8v6qD/sOALbbT2MC1NgaAWOKOgxf5czY+4dbAX2G/THzcozLrvPV85IQyqVz0rvg2p9Pei4HjzSsiFbV4JgyhhxCjpGdZ0RhdikLB9/b8Qig7MkpSovR7Cp59q6CazaNFiTt4J82o6uvdMVwTsztKTXZod4jgOJJuqNAjFyGrBR8gM6XwKfIC4KanBSTZ0rClKh08D9DFh3egW7ebH7NcRDQWrz9rM2Ne+mDOXB2mZJ8agL19nwxR2iZXGm1gDbQKhDjd4yHb2oW/KR8xHicAAAAAElFTkSuQmCC"></a>';
      $kleiderordnung_widget.= '<br>';
      $kleiderordnung_widget.= '<a href="' . $kleiderordnung_editHomeEnglish . '" class="kleiderordnung__dashboard__button kleiderordnung__dashboard__button--primary kleiderordnung__mt-9 kleiderordnung__mb9" title="Homepage bearbeiten (englisch)">Homepage / Texte bearbeiten <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAt1BMVEWSmb66z+18msdig8La3u+tYX9IaLc7W7BagbmcUW+kqMr/q6n+//+hsNv/lIr/jIGMnNLJyOP9/fyQttT/wb3/////aWn+YWF5kNT0oqz0i4ueqtIZNJjhvt/8gn//WVr/6+rN1+o9RKZwgcMPJpX/VFT9UEn+RUX8Ozv2Ly+FGzdYZrfU1e/8LS/lQkG/mbVUX60AE231hHtcdMb0mp3qYFTFwNu3w9prcqSURGNDaaIUMX5FNW5wYt7AAAAAjklEQVR4AR3HNUJEMQCGwf+L8RR36ajR+1+CEuvRdd8kK9MNAiRQNgJmVDAt1yM6kSzYVJUsPNssAk5N7ZFKjVNFAY4co6TAOI+kyQm+LFUEBEKKzuWUNB7rSH/rSnvOulOGk+QlXTBqMIrfYX4tSe2nP3iRa/KNK7uTmWJ5a9+erZ3d+18od4ytiZdvZyuKWy8o3UpTVAAAAABJRU5ErkJggg=="></a>';

      $kleiderordnung_widget.= '<img src="'.$currentThemeDirectory.'/img/admin-screenshot-offers.jpg" width="509" height="303" class="kleiderordnung__dashboard__image kleiderordnung__dashboard__image--faded kleiderordnung__mt-9">';
      $kleiderordnung_widget.= '<a href="/wp-admin/edit.php?post_type=offer" class="kleiderordnung__dashboard__button kleiderordnung__dashboard__button--primary kleiderordnung__mt-9 kleiderordnung__mb9">Angebote bearbeiten</a>';

      $kleiderordnung_widget.= '<img src="'.$currentThemeDirectory.'/img/admin-screenshot-stories.jpg" width="509" height="224" class="kleiderordnung__dashboard__image kleiderordnung__dashboard__image--faded kleiderordnung__mt-3">';
      $kleiderordnung_widget.= '<a href="/wp-admin/edit.php?post_type=story" class="kleiderordnung__dashboard__button kleiderordnung__dashboard__button--primary kleiderordnung__mt-9 kleiderordnung__mb9">Stories (Testimonials) bearbeiten</a>';

      $kleiderordnung_widget.= '<img src="'.$currentThemeDirectory.'/img/admin-screenshot-news.jpg" width="509" height="224" class="kleiderordnung__dashboard__image kleiderordnung__dashboard__image--faded kleiderordnung__mt-3">';
      $kleiderordnung_widget.= '<a href="/wp-admin/edit.php" class="kleiderordnung__dashboard__button kleiderordnung__mt-9 kleiderordnung__dashboard__button--primary kleiderordnung__mb9">News bearbeiten</a>';

      $kleiderordnung_widget.= '<img src="'.$currentThemeDirectory.'/img/admin-screenshot-agb.jpg" width="509" height="146" class="kleiderordnung__dashboard__image kleiderordnung__dashboard__image--faded kleiderordnung__mt-3">';
      $kleiderordnung_widget.= '<a href="/wp-admin/edit.php?post_type=page" class="kleiderordnung__dashboard__button kleiderordnung__dashboard__button--primary kleiderordnung__mt-6 kleiderordnung__mb3">Seiten bearbeiten</a>';

      $kleiderordnung_widget.= '<br>';
      $kleiderordnung_widget.= '<a href="/wp-admin/admin.php?page=mlang_strings" class="kleiderordnung__dashboard__button">Sonstige Textteile</a>';
      $kleiderordnung_widget.= '<br>';

      $kleiderordnung_widget.= '<hr>'; // ----------------------------------------------------
      $kleiderordnung_widget.= '<b class="kleiderordnung__centered">Kontaktformular</b><br>';

      $kleiderordnung_widget.= '<a href="/wp-admin/admin.php?page=flamingo_inbound" class="kleiderordnung__dashboard__button kleiderordnung__dashboard__button--primary">Nachrichten lesen</a>';
      $kleiderordnung_widget.= '<br>';

      $kleiderordnung_widget.= '<a href="/wp-admin/admin.php?page=wpcf7" class="kleiderordnung__dashboard__button">Kontaktformular bearbeiten</a>';
      $kleiderordnung_widget.= '<br>';

    } else {
      $kleiderordnung_widget.= 'Theme "Kleiderordnung" muss unter <a href="/themes.php">&quot;Design&quot;</a> aktiviert werden';
    }

    $kleiderordnung_widget.= '<hr>'; // ----------------------------------------------------
    $kleiderordnung_widget.= '<b class="kleiderordnung__centered">Anleitung / Hilfe</b><br>';
    $kleiderordnung_widget.= '<a href="https://github.com/openmindculture/kleiderordnung-berlin/blob/main/doc/anleitung.md" target="_blank" class="kleiderordnung__dashboard__button">Bedienungsanleitung lesen</a></b><br>';


    if (is_plugin_active( 'updraftplus/updraftplus.php' )) {
      $kleiderordnung_widget.= '<hr>'; // ----------------------------------------------------
      $kleiderordnung_widget.= '<b class="kleiderordnung__centered">Wartung</b><br>';

      $kleiderordnung_widget.= '<a href="/wp-admin/admin.php?page=w3tc_pgcache" class="kleiderordnung__dashboard__button kleiderordnung__dashboard__button--primary">Zwischenspeicher (Cache) leeren...</a>';
      $kleiderordnung_widget.= '<br>';

      $kleiderordnung_widget.= '<a href="/wp-admin/options-general.php?page=updraftplus" class="kleiderordnung__dashboard__button">Daten sichern (Backup)</a>';
      $kleiderordnung_widget.= '<br>';
    }

    $kleiderordnung_widget.= '<hr>'; // ----------------------------------------------------
    $kleiderordnung_widget.= '<span class="kleiderordnung_centered">Theme-Version: ' . $currentThemeName . ' ' . $currentThemeVersion . '</span><br>';

    echo $kleiderordnung_widget;
  }

  add_action('wp_dashboard_setup', 'kleiderordnung_add_dashboard_widget' );
}
