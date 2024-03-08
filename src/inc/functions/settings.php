<?php

function kleiderordnung_settings_init() {
	add_settings_section(
		'kleiderordnung_settings_section', // section ID
		'Kleiderordnung Theme', // display title (default englisch)
		'kleiderordnung_before_settings_callback', // callback function to be called when opening section
		'general' // settings page ID (where to render: default general settings page)
	);
	add_settings_field(
		'kleiderordnung_show_more', // option field ID
		'Show read-more', // display title (default englisch)
		'kleiderordnung_render_input_callback_show_more', // generic input field renderer
		'general', // settings page ID (where to render: default general settings page)
		'kleiderordnung_settings_section', // section inside settings page
		array() // arguments passed to renderer function
	);
	register_setting(
		'general', // settings page ID (where to render: default general settings page)
		'kleiderordnung_show_more', // id/Name of option
		'esc_attr' // validation callback (built-in esc_attr)
	);

  add_settings_field(
    'kleiderordnung_show_sticker', // option field ID
    'Show sticker', // display title (default englisch)
    'kleiderordnung_render_input_callback_show_sticker', // generic input field renderer
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_settings_section', // section inside settings page
    array() // arguments passed to renderer function
  );
  register_setting(
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_show_sticker', // id/Name of option
    'esc_attr' // validation callback (built-in esc_attr)
  );

  add_settings_field(
    'kleiderordnung_sticker_title_en', // option field ID
    'Sticker Text (engl.)', // display title (default englisch)
    'kleiderordnung_render_input_callback_sticker_title_en', // generic input field renderer
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_settings_section', // section inside settings page
    array() // arguments passed to renderer function
  );
  register_setting(
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_sticker_title_en', // id/Name of option
    'esc_attr' // validation callback (built-in esc_attr)
  );

  add_settings_field(
    'kleiderordnung_sticker_title_de', // option field ID
    'Sticker Text (deutsch)', // display title (default englisch)
    'kleiderordnung_render_input_callback_sticker_title_de', // generic input field renderer
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_settings_section', // section inside settings page
    array() // arguments passed to renderer function
  );
  register_setting(
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_sticker_title_de', // id/Name of option
    'esc_attr' // validation callback (built-in esc_attr)
  );

  add_settings_field(
    'kleiderordnung_sticker_url_en', // option field ID
    'Sticker Link (engl.)', // display title (default englisch)
    'kleiderordnung_render_input_callback_sticker_url_en', // generic input field renderer
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_settings_section', // section inside settings page
    array() // arguments passed to renderer function
  );
  register_setting(
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_sticker_url_en', // id/Name of option
    'esc_attr' // validation callback (built-in esc_attr)
  );

  add_settings_field(
    'kleiderordnung_sticker_url_de', // option field ID
    'Sticker Link (deutsch)', // display title (default englisch)
    'kleiderordnung_render_input_callback_sticker_url_de', // generic input field renderer
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_settings_section', // section inside settings page
    array() // arguments passed to renderer function
  );
  register_setting(
    'general', // settings page ID (where to render: default general settings page)
    'kleiderordnung_sticker_url_de', // id/Name of option
    'esc_attr' // validation callback (built-in esc_attr)
  );
}
add_action('admin_init', 'kleiderordnung_settings_init');

function kleiderordnung_render_input_callback_show_more($args) {
  $kleiderordnung_show_more_checked = get_option('kleiderordnung_show_more', false);
  echo '<input type="checkbox" name="kleiderordnung_show_more"';
  if ($kleiderordnung_show_more_checked) {
    echo 'checked';
  }
  echo '>';
  _e('Featureliste kürzen und Mehr-lesen Button anzeigen', 'kleiderordnung');
}

function kleiderordnung_render_input_callback_show_sticker($args) {
  $kleiderordnung_show_sticker_checked = get_option('kleiderordnung_show_sticker', false);
  echo '<input type="checkbox" name="kleiderordnung_show_sticker"';
  if ($kleiderordnung_show_sticker_checked) {
    echo 'checked';
  }
  echo '>';
  _e('Sticker mit Text und Link anzeigen', 'kleiderordnung');
}

function kleiderordnung_render_input_callback_sticker_title_en($args) {
  echo '<input type="text" name="kleiderordnung_sticker_title_en" value="';
  echo get_option('kleiderordnung_sticker_title_en', '');
  echo '">';
}

function kleiderordnung_render_input_callback_sticker_title_de($args) {
  echo '<input type="text" name="kleiderordnung_sticker_title_de" value="';
  echo get_option('kleiderordnung_sticker_title_de', '');
  echo '">';
}

function kleiderordnung_render_input_callback_sticker_url_en($args) {
  echo '<input type="text" name="kleiderordnung_sticker_url_en" value="';
  echo get_option('kleiderordnung_sticker_url_en', '');
  echo '">';
}

function kleiderordnung_render_input_callback_sticker_url_de($args) {
  echo '<input type="text" name="kleiderordnung_sticker_url_de" value="';
  echo get_option('kleiderordnung_sticker_url_de', '');
  echo '">';
}

function kleiderordnung_before_settings_callback() { // above settings section:
	?><a name="kleiderordnung-settings" id="kleiderordnung-settings"></a>
    <!-- optional content or messages -->
	<?php
}
