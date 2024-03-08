<?php
/*
 * Header Sticker Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */

if (get_option('kleiderordnung_show_sticker', false)) {
  ?>
    <div class="header__sticker">
      <a
        href="<?php
if (pll_current_language() === 'en') {
  echo get_option('kleiderordnung_sticker_url_en', '');
} else {
  echo get_option( 'kleiderordnung_sticker_url_de', '' );
}
?>"
        tabindex="0"
      ><?php
if (pll_current_language() === 'en') {
  echo get_option('kleiderordnung_sticker_title_en', '');
} else {
  echo get_option( 'kleiderordnung_sticker_title_de', '' );
}
?></a>
    </div>
<?php
}
