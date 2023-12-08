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
		'show read-more', // display title (default englisch)
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

function kleiderordnung_before_settings_callback() { // above settings section:
	?>
    <!-- optional content or messages -->
	<?php
}
