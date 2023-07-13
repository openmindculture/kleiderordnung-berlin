<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 * @version 2.3.2
 *
 * @wordpress-plugin
 * Version: 2.3.2
 * Tested up to: 6.2
 * Plugin Name: KleiderOrdnung Dashboard Widget
 * Text Domain: kleiderOrdnung-dashboard-widget
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
    $kleiderordnung_dashboardContentOutput = '';
    global $wp_version;
    $currentTheme = wp_get_theme();
    $currentThemeName = esc_html($currentTheme['Name']);
    $currentThemeVersion = esc_html($currentTheme['Version']);
    $currentThemeDirectory = get_template_directory_uri();

    if (str_starts_with(strtolower($currentThemeName), 'kleiderordnung')) {
      $kleiderordnung_dashboardContentOutput.= '<img src="'.$currentThemeDirectory.'/screenshot.png" style="width:100%;height:auto;">';
    } else {
      $kleiderordnung_dashboardContentOutput.= 'Theme "KleiderOrdnung" muss unter <a href="/themes.php">&quot;Design&quot;</a> aktiviert werden';
    }

    $kleiderordnung_dashboardContentOutput.= '<ul>';
    $kleiderordnung_dashboardContentOutput.= '<li>- <a href="/wp-admin/edit.php">News-Beiträge bearbeiten</a></li>'; // TODO use generic path url
    $kleiderordnung_dashboardContentOutput.= '<li>- <a href="/wp-admin/edit.php?post_type=story">Stories (Testimonials) bearbeiten</a></li>';
    $kleiderordnung_dashboardContentOutput.= '<li>- <a href="/wp-admin/edit.php?post_type=offer">Angebote bearbeiten</a></li>';
    $kleiderordnung_dashboardContentOutput.= '<li>- <a href="/wp-admin/edit.php?post_type=page">Seiten bearbeiten</a> (AGB, Impressum, Datenschutz, etc.)</li>';
    $kleiderordnung_dashboardContentOutput.= '<li>Homepage (Frontpage) Texte:</li>';
    $kleiderordnung_dashboardContentOutput.= '  <ul>';
    $kleiderordnung_dashboardContentOutput.= '    <li>- Intro (TODO)</li>';
    $kleiderordnung_dashboardContentOutput.= '    <li>- Mission (TODO)</li>';
    $kleiderordnung_dashboardContentOutput.= '    <li>- Instagram-Platzhalterbilder aktualisieren (TODO)</li>';
    $kleiderordnung_dashboardContentOutput.= '  </ul>';
    $kleiderordnung_dashboardContentOutput.= '</ul>';

    // TODO installation type ==> add import/export direct link(s)
    $kleiderordnung_dashboardContentOutput.= '<a href="/wp-admin/export.php">Inhalte exportieren</a> /';
    $kleiderordnung_dashboardContentOutput.= '<a href="/wp-admin/admin.php?import=wordpress">importieren</a> ...';

    $kleiderordnung_dashboardContentOutput.= '<hr>';

    $kleiderordnung_dashboardContentOutput.= 'Theme-Version: ' . $currentThemeName . ' ' . $currentThemeVersion . '<br>';
    $kleiderordnung_dashboardContentOutput.= 'WordPress-Version:' . esc_html($wp_version) . '<br>';
    $kleiderordnung_dashboardContentOutput.= 'PHP-Version: ' . esc_html(phpversion()) . '<br>';

    // TODO check and warn if required plugins are missing, like
    // Advanced Custom Fields
    // Contact Form 7
    // Flamingo
    // Polylang
    // any performance / caching plugin like W3TC, Rocket, ...
    // any image optimizer like Tinify TinyPNG webp

    echo $kleiderordnung_dashboardContentOutput;
  }

  add_action('wp_dashboard_setup', 'kleiderordnung_add_dashboard_widget' );
}
