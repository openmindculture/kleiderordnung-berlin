# Kleiderordnung Berlin

A portfolio website for sustainable stylist [Tina Steinke](https://kleiderordnung.berlin/) in Berlin,
following up on a previous sustainable style consultancy in Düsseldorf.
Visual design by [Ina Nixdorf](https://www.inanixdorf.de/), technical concept and development by [Ingo Steinke](https://www.ingo-steinke.de/), 
announced and described as [an exceptional portfolio project](https://dev.to/ingosteinke/a-beautiful-portfolio-website-for-a-sustainable-fashion-consultant-3807) after going live in September 2023.

- canonical domain:
  - https://kleiderordnung.berlin/
- alternative domains
  - https://www.kleiderordnung.berlin/
  - https://www.kleiderordnung-berlin.de/

Local development: http://localhost:1234/
Backend: http://localhost:1234/wp-admin (default credentials: admin:secret).
Make sure to that the theme Kleiderordnung got activated or activate it manually after installation.

Features:
- **accessibility**: tab-navigateable, high contrast, respecting reduced motion preferences etc., still not 100% WCAG-compliant yet,
- **animated** using animations and scrolling effects unless user prefers reduced motion
- **beautiful**: web design based on the visual corporate identity
- **classic**: hybrid theme with custom post types, custom fields, and block editor support
- **documented**: README for developers and an additional manual for website owners
- **editable**: content, images, and translations can be edited by the site owner
- **international**: localized by a professional translator and proofreader
- **minimal**: all important content at a glance on one landing page
- **portable**: theme, plugins, and content can be moved from server to server
- **printable**: distinct style sheet to ensure print / PDF layout
- **quick**: cacheable and without loading unnecessary data
- **responsive**: designed and tested to work on any device and browser
- **semantic**: meaningful markup to ensure technical search engine optimization
- **tested**: automated and manual frontend tests plus static code analysis
- **transparent** and **versioned** open source development on GitHub

![Kleiderordnung theme screenshot](src/screenshot.png)

## Theme and Design

The theme **kleiderordnung** is a standalone WordPress theme not depending on any parent theme, but inspired by existing themes like
[Twenty-Twenty-Three](https://wordpress.org/themes/twentytwentythree/), [GeneratePress](https://wordpress.org/themes/generatepress/), and [Fasto](https://wordpress.org/themes/fasto/). This is a **classic theme with partial block editor support**. I have released a similar classic/hybrid WordPress theme development setup as [@openmindculture/wp_template_opinionated](https://github.com/openmindculture/wp_template_opinionated) on GitHub.

The theme **does not call `wp_head()`** but emits a custom minimal head element instead.

Note that the theme' text domain (technical handle and directory name) is **kleiderordnung** (not `kleiderordnung-berlin` – which is the name of the project used to develop and maintain the theme).

Kleiderordnung's graphic design has been conceived in collaboration with [Ina Nixdorf](https://www.inanixdorf.de/) and [Martina Steinke (Kleiderordnung Berlin)](https://kleiderordnung.berlin/).
Technical details and development: [Ingo Steinke](https://www.ingo-steinke.com/).
Thanks to Andy Weisner ([RetinaFunk](https://www.retinafunk.com/about/)) and [Daniel Groner](https://www.danielgroner.com/) for support and (partial) code review! Thanks to [Jessica Lyschik](https://jessicalyschik.de/), Carolina Nymark ([FullSiteEditing.com](https://fullsiteediting.com/)), [Sara Soueidan](https://www.sarasoueidan.com/) and many other experts contributing to open source web development!

### Web Fonts
- Henderson Sans by [Sudtipos](https://www.sudtipos.com/)
- Ivy Mode by Jan Maack from [Ivy Foundry](https://typenetwork.com/type-foundries/ivy-foundry)

## Installation / Deployment

To setup / deploy **kleiderordnung** on a website,
- install WordPress core and the required plugins,
- copy all `wp-content/mu-plugins/*.php` files manually,
- [setup Polylang](https://polylang.pro/doc/multilingual-custom-post-types-and-taxonomies/):
  - German (Deutsch) as default language
  - English (EN-US) as additional language
  - enable translation of custom post types (Languages/Sprachen -> Settings/Einstellungen -> Custom Post Types and Taxonomies / Benutzerdefinierte Inhaltstypen und Taxonomien -> check all checkboxes) _before_ adding (or importing) content!
- install [the lastest Kleiderordnung theme](https://github.com/openmindculture/kleiderordnung-berlin/releases) by uploading it in WP-Admin (or via (S)FTP),
- activate the theme,
- copy all icons and manifest files (`*.ico`, `*.png`, `*.svg`, `*.json`, `*.xml`, `robots.txt`) to the web root directory
- configure server and caching by editing `.htaccess` / `nginx.conf` / hosting backend or by using appropriate plugins,
- use additional reverse proxy and/or CDN servers if necessary,
- run automated tests (`npm run test`) and update the baseline screenshots if necessary (see <a href="#testing">Testing...</a>)
- test everything and back up your data regularly: use WP-Admin Tools / Werkzeuge -> Export or a plugin like [Updraft Plus](https://wordpress.org/plugins/updraftplus/).

## User Manual for the Site Owners

There is a (German) end-user manual aiming to show non-technical site owners how to edit and add content in the WordPress admin backend, available at [doc/anleitung.md](doc/anleitung.md) and linked from the custom admin dashboard widget which contains direct links to edit different custom content types and generate a content export file.

### Screenshots

Enter WP-Admin by clicking on "edit page" ("**Seite bearbeiten**") if you have already logged in before:
![Screenshot: edit page](doc/anleitung-seite-bearbeiten.png)

Add, edit and preview news (blog posts):
![Screenshot: edit news](doc/anleitung-news-bearbeiten.png)

Add, edit and preview stories (testimonials):
![Screenshot: edit stories](doc/anleitung-stories-bearbeiten.png)

Add, edit and preview offers:
![Screenshot: edit offers](doc/anleitung-angebot-bearbeiten.png)

Edit frontpage contents:
![Screenshot: edit front page content](doc/anleitung-frontpage-inhalte.png)

Flamingo message inbox:
![Screenshot: message inbox](doc/anleitung-posteingang.png)

Contact Form 7 settings:
![Screenshot: contact form settings](doc/anleitung-kontaktformular.png)

Update WordPress / plugins:
![Screenshot: update WordPress plugins](doc/anleitung-plugins-aktualisieren.png)

Clear cache:
![Screenshot: clear W3TC cache](doc/anleitung-cache-leeren.png)

Colors to distinguish between local host, preview and production servers:
![Screenshot: Server unterscheiden](doc/anleitung-farbcode-umgebungen.png)

## Show an Intro Video

- Upload video files (mp4, webm) to media library and select them in the home page options
- Upload subtitle text files
- Upload a preview image
- repeat for every language version

![Screenshot WordPress admin dashboard and video upload](doc/anleitung-video-upload.png)

### Video Formats

- pixel size geometry should be between
  - x (minimum)
  - x (maximum)
- provide an MP4 and a WEBM version

- Prefer the lowest data rate that provides the desired quality.

- Video files must support partial loading (streaming).

Converting mp4 to webm on the command-line using ffmpeg:

- `ffmpeg -i original.mp4 -c:v libvpx -c:a libvorbis optimized.webm`

### Video Performance Accessibility Settings and Subtitles

Videos should only play automatically if necessary and if users did not state they prefer reduced motion or saving data. Videos that started automatically must not repeat more than 3 times. Videos must always be stoppable. Autoplay and preloading should not start unless the video approaches the visible region (lazy loading).

To minimize unnecessary traffic, but allow for early optimization, the browser is advised to preload metadata initially.

![screenshot of a captioned video example and the subtitle file upload section in the admin settings](doc/anleitung-video-untertitel.png)

We can provide subtitles (for hearing users, containing transcriptions of the original text or its translations) and captions (including descriptions of sounds and content) by uploading `.vtt` files.

Further reading:

- https://www.w3.org/WAI/media/av/captions/
- https://www.smashingmagazine.com/2021/02/optimizing-video-size-quality/
- https://developer.mozilla.org/en-US/docs/Web/Media/Audio_and_video_delivery/Adding_captions_and_subtitles_to_HTML5_video
- https://imagekit.io/blog/lazy-loading-html-videos/
- https://www.speechpad.com/captions/webvtt

## Data Flow, Backups, Updates

Design and behavior is controlled by the theme and plugins which can be deployed to production after testing. Content (data) is edited on the production server and synchronized back to test and development systems.

[![data flow](doc/theme-and-data-flow.png)]()

Upload
 - the theme (ZIP) via wp-admin
 - the `mu-plugins` via (S)FTP (**NOT included in the theme file!**)

Download
 - `content.xml` via WordPress tools export / import

Existing posts and pages will be replaced when importing. This is non-standard configured behavior which will only work if `mu-plugins/wordpress-import-update.php` is present!

DON'T commit any personal data (possibly included in a complete "all content" export file). Make sure to review and clean up any `content.xml` before committing!

Review and synchronize settings manually, as far as you find useful. Make sure that all necessary plugins are installed.

### Settings

- address/**url**: **https**://...
- reading: front page / home page shows a static page: home page German (language will be handled by theme and Polylang plugin)
- **permalink** structure: post name + id: `/%postname%-/%post_id%/`
- **media** library _not_ organized in year/month folders

## Setup, Structure, Editing

The portfolio website content can be edited and extended using the WordPress admin backend. This is a classic WordPress theme, without full-page editing or full theme engine support, but allowing to use the block editor where it might be helfpul.

The page structure and design elements are fixed by the theme, based on the main landing page
which can not be fully edited in the block editor. Instead, custom fields or widgets are provided to ensure
non-destructive editing limited to the intended content type (plain text or rich text with limited markup options).

### Content: Widgets, Custom Fields and Post Types

- **page** (front / home / landing page, imprint, privacy, about me)
  - The main index landing page (front page / home page), defined in `front-page.php` according to the class [template hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/), contains most of the content and links / teasers to additional posts and pages.
  - Text lines and paragraphs must be editable, probably as **custom fields**, using either plain text or very limited styling like bold, italic, underline, marker, link:
    - `page_intro_headline`
    - `page_intro_text`
    - `page_mission_headline`
    - `page_mission_text`
    - `page_cta_text`
    - `page_contact_teaser_text`
    - `page_contact_job_title`
  - Any other regular static page, like **privacy**, **imprint**, **TOS** (AGB), is displayed by `page.php` and edited in the block editor.
- **post** (**News** blog posts / teasers)
  - category title = over headline
  - post title = teaser headline / text
  - post image = main post image
- **story** (**Stories** / Testimonials) _localized_
  - post title = headline: testimonial name and short description
  - post text = quotation
  - post image(s) = main image (and possibly more optional images)
  - **position_number** (text) in `story_field_group` (sidebar)
- **offer** (**Angebot**) _localized_
  - post title = main headline
  - post image = main post image (only in main offer section)
  - post text = intro text
  - **offer_features** ("Was du erhältst") (text) in `offer_field_group_main`
  - **offer_price** (text) in `offer_field_group_main`
  - **offer_price_annotation** (text) in `offer_field_group_main`
  - **offer__id** (text)  in `offer_field_group_sidebar`
  - **offer_position_number** (text) in `offer_field_group_sidebar`
  - custom taxonomy: **offer_section** _NOT localized_
    - `angebot` ("Angebot")
    - `weitere` ("Weiteres Angebot")
- general **translations** managed by Polylang, like messages and button captions can be edited by the site owner on the **languages** -> **translations** page.
- social media placeholders (see below)
- content handled by plugins or widgets:
  - Instagram section (external feed via juicer.io)
  - contact form (widget shortcode)
  - carbon badge (external content)

##### Contact Forms

There must be exactly 1 active contact form for each language. The form titles must contain the language string ("en_US" or "de_DE"), so the theme can display the correct contact form dynamically without hard-coded form IDs, to work around the problem that contact form 7 posts won't be translated by the current Polylang plugin.

Form field names must be defined explicitly so that name and email/phone can show up correctly in the saved flamingo inbox list view. In each form settings "additional settings" tab, add

```
flamingo_email: "[Email]"
flamingo_name: "[Name]"
flamingo_subject: "Contact Form"
```

To enable an alternative email or phone field, we define it as `text` type and don't validate its input. But we could still use email autocompletion. Akismet spam protection can recognize email, but no phone, so we could mark it as `akismet:author_email` but that might compromise legitimate submissions that provide a phone number. That leaves us with `akismet:author` as the only explicit [anti-spam markup](https://contactform7.com/spam-filtering-with-akismet/) in our form. 

```
<div class="contact__fieldset contact__fieldset--from">
  <label class="contact__label contact__label--name">
   <span class="screen-reader-text">Name</span> 
   [text* Name autocomplete:name akismet:author placeholder "Name"] 
   </label><!-- NO LINE-BREAK HERE ! --><label class="contact__label contact__label--email"> 
   <span class="screen-reader-text">Email address </span> 
   [text Email autocomplete:email placeholder "Phone or email address"] 
   </label>
</div>
```

##### Polylang Localization Settings for Custom Post Types

Localization / translation needs to be enabled explicitly in Polylang **Languages** -> **Settings** -> Custom Post Types and Taxonomies:

- [x] Stories (Testimonials) (story)
- [x] Angebote (offer)
- [ ] Angebotskategorien (offer_section)

##### Post and Field Types, Sorting Order

Pragmatically working around Meta Query issues when using custom post types, custom ACF fields, and polylang translation in the same theme, all custom fields are text fields. Custom **position number** fields are simple tools to let site owners control the display order of items that are not sorted by date. If the optional plugin [Post Types Order](https://wordpress.org/plugins/post-types-order/) is active, custom position numbers are ignored in the frontend and hidden in the backend. 

##### Offer ID and Taxonomy

Each offer should have a unique, permanent ID, used as an anchor for sub-navigation and for external **deep linking**. The offers and their IDs should also match the checkbox options in the contact form. **Icons** on top of the offer cards are displayed according to one of the known offer IDs.

Offer taxonomies currently serve to separate main offers, displayed with cards and images, from "other offers". There is no point in localization / translation.

**Angebot** is not called "product" to avoid conflict with optional shop plugins.

#### Front Page Structure

- Header: the (sticky) header bar with logo and main navigation
- Main:
  - Intro Section
    - Key Visual (hero image / hero header / jumbotron)
    - Key Headline (h1)
    - Text Paragraph
  - Offers Section (h2)
    - sub-navigation
    - offer article (post) (detailed, featured, main)
      as a WordPress (custom) post, marked up as an &lt;article&gt;
      with image, main headline (h3), text paragraphs, offer price etc.
    - (alternative further offers in a smaller card layout)
  - page decoration elements / section decoration elements
  - Mission Section
  - Stories Section
    - story block quotes with icon, headline, paragraph
  - News Section with text box, call to action text, button
  - Social Media Section: Instagram images and link
  - Contact Section
    - contact information (vcard)
    - contact form
- Footer

#### Common Elements

- Buttons (and call-to-action links in a button-like appearance)
- Links (in a text-like appearance)
- Headlines, bold text, and other typographic elements
- Carousels or similar draggable / slideable elements
- Decoration + Perspective Effects
- Lists
- Icons
- Card-like grid / flex layouts

- **page header**
- **Instagram posts**
- **contact form**
- **page footer**



### Decoration / Parallax Perspective Effects

Colorful shapes are placed behind offers and subsequent sections.
To make CSS perspective work, **global html and body style** is tweaked as explained here: [pure CSS parallax perspective beyond landscape images](https://dev.to/ingosteinke/pure-css-parallax-perspective-beyond-landscape-images-24g2). This might alter circumstances for subsequent styling and scroll events.

```css
html {
  height: 100%;
  overflow: hidden;
}
body {
  height: 100%;
  height: 100vh;
  height: 100dvh;
  overflow-x: hidden;
  overflow-y: scroll;
  transform-style: preserve-3d;
  perspective: 1px;
  perspective-origin: 0 0;
}

.decoration__container { /* decoration-parallax-layer-background */
  content: "";
  position: absolute;
  margin: 0;
  transform-origin: top left;
  transform: translateZ(-1px) scale(2);
  top: 112rem; /* adjust to fit */
  height: 187rem; /* adjust to fit */
}
```

Sections before and after should be set to `position: relative; z-index: 2` to make sure that they stay in front of the decoration layer.

### Stories (Testimonials) Carousel, Height to Width Adjustment

The carousel is a scrollable section with a flexbox of flexboxes, initially capped to a specific height and width.
To compensate unexpected content, we adjust the designed styles:

- If a story has no image, its width is also used for the text.
- Text longer than a certain word count gets an additional style class name `long` so we can make it slightly wider.
- An additional JavaScript-based adjustment detects overflowing text and increases the width accordingly.

The latter adjustment can be used anywhere in the document.
The function `growWidthToPreventOverflow` works an any element with a `grow-x` class name.
It is called when the document has been rendered.

### Contact Form, Social Media, Dynamic Menu

A contact form is provided using the popular Contact Form 7 plugin and the Flamingo add-on to save messages in the database. For localized content, a new form needs to be created for each language.

Contact form settings use specific shortcodes, identifiers must match in form template, email template, style sheets, and possible JavaScript handlers. Checkbox elements show up with their value when checked.

Example:

Form markup:

``` 
<div class="contact__fieldset contact__fieldset--from">
  <label class="contact__label contact__label--name"> <span class="screen-reader-text">Dein Name</span> [text* Name autocomplete:name akismet:author placeholder "Name"] </label><!-- NO LINE-BREAK HERE ! --><label class="contact__label contact__label--email"> <span class="screen-reader-text">Deine Telefonnummer oder E-Mail-Adresse </span>[text Email placeholder "Telefon oder E-Mail"] </label>
</div>

<div class="contact__fieldset contact__fieldset--message"><label class="contact__label contact__label--nachricht"> <span class="screen-reader-text">Deine Nachricht (optional)</span> [textarea Nachricht placeholder "Deine Nachricht"] </label></div>

<div class="contact__fieldset contact__fieldset--checkboxes">
  <div class="contact__calltoactiontext--fieldset">Unverbindliche Anfrage für</div>

  [checkbox anfrage-style-visit id:anfrage-style-visit class:contact__checkboxline class:contact__checkboxline--style-visit use_label_element "Style Visit"]

  [checkbox anfrage-shopping-tour id:anfrage-shopping-tour class:contact__checkboxline class:contact__checkboxline--shopping-tour use_label_element "Shopping Tour"]

  [checkbox anfrage-online-style-beratung id:anfrage-online-style-beratung class:contact__checkboxline class:contact__checkboxline--online-style-beratung use_label_element "Online Styling Beratung"]

  [checkbox anfrage-start-up-consulting id:anfrage-start-up-consulting class:contact__checkboxline class:contact__checkboxline--start-up-consulting use_label_element "Start-Up-Consulting"]

  [checkbox anfrage-gutschein id:anfrage-gutschein class:contact__checkboxline class:contact__checkboxline--gutschein use_label_element "Gutschein"]

  [checkbox anfrage-ordnung-im-schrank id:anfrage-ordnung-im-schrank class:contact__checkboxline class:contact__checkboxline--ordnung-im-schrank use_label_element "Ordnung im Schrank"]

  [checkbox anfrage-styling-abo id:anfrage-styling-abo class:contact__checkboxline class:contact__checkboxline--styling-abo use_label_element "Styling-Abo"]
</div>

<span class="contact__buttonwrapper contact__buttonwrapper--submit">[submit "Absenden"]</span>
```

Email template:

```
Subject: [_site_title] Kontaktformular
Additional header: Reply-To: [Email]
Message text:

Von: [Name]
E-Mail: [Email]

Unverbindliche Anfrage für: [anfrage-style-visit] [anfrage-shopping-tour] [anfrage-online-style-beratung] [anfrage-start-up-consulting] [anfrage-gutschein] [anfrage-ordnung-im-schrank] [anfrage-styling-abo]

Nachricht:
[Nachricht]

-- 
Diese E-Mail wurde von einem Kontaktformular von [_site_title] ([_site_url]) gesendet
```

#### Instagram Feed via Juicer

- Known issues:
  - "juicer error" when using on localhost instead of configured domain or pseudo-public domain like browserstack's bs-local.com
  - expired API connection prevents updating new Instagram content
- account / API:
  - Tina's Google account logs into juicer.io
  - which has been connected to her Instagram account
    while logged in to juicer, Google, and Instagram on the same browser

- placholder content:

Unless a new page visitor has given consent to loading Instagram data by clicking on "allow once" or "allow always", placeholder images will be shown. This is currently 1 single image, consisting of a cropped region of the 5 latest feed images shown by juicer in the context of the production or preview page.

If the placeholder image does not update automatically, replace the placeholder image by overwriting
`/img/instagram/preview5xinsta-20230601.jpg`
with an updated image file in the following aspect ratio: `width="1857" height="463"`.

To generate a webp alternative on the command line using [cwebp](https://developers.google.com/speed/webp/docs/cwebp):

`cwebp /img/instagram/preview5xinsta-20230601.jpg -o /img/instagram/preview5xinsta-20230601.webp`

To optimize an existing JPEG file, we can use mozjpeg.



**TODO**: alternatively in the future:

The update process might be (partially) automated or facilitated using the [Screen Capture API](https://developer.mozilla.org/en-US/docs/Web/API/Screen_Capture_API).

### Localization

The site is provided in a German and an English language version using the Polylang plugin. Multilingual content has been described in the content section above. Theme-specific language strings can be created (or updated) using PO(T)/MO files [as explained in the WordPress codex](https://developer.wordpress.org/apis/internationalization/localization/):


So we would either 

#### use wp-cli:

enter the `wp_cli` or `wordpress` container:
```
docker-exec -it kleiderordnung-berlin_wordpress_1 bash
```

then, inside the container, (install and) run `wp` cli to create language files:

```
wp i18n make-pot wp-content/themes/kleiderordnung
```

or

#### use the free graphical Poedit application

which is an open source tool for all major OS.  If you don’t have the pro version you can easily get the [Blank POT](https://github.com/fxbenard/Blank-WordPress-Pot) by Fx Bénard and use that as the base of your POT file. Once you have placed the blank POT in the languages folder you can click “Update” in Poedit to update the POT file with your strings.

#### Po-Strings: POT to PO to MO

POT files contain the original strings (usually in English, but here German is the default language). "Very long strings" are split into multiple lines (by PoEdit and/or [gettext](https://en.wikipedia.org/wiki/Gettext), often starting with an empty string "for better alignment", but that's equivalent to using long one-line strings.

**Translation / internationalization (i10n):** using **po strings**: take the `.pot` file and translate the `msgstr` sections into the respective language(s). The result is a `.po` file for each langauge with the same format as a `.pot`, but with translations and some specific headers.

Use the official WordPress locale strings (with **underscores**, not hyphens). For example, the locale for German is `de_DE`, and our theme's text domain is `kleiderordnung`, therefore the German MO and PO files could be named `kleiderordnung-de_DE.mo` and `kleiderordnung-de_DE.po`, but that's misleading. When placed inside the **theme's language folder** (not the WordPress instance's language folder) we must omit the (redundant) theme name (text domain) in the file name.

So we will have:
- `src/languages/en_US.mo` -> `themes/kleiderordnung/languages/en_US.mo`
- `src/languages/en_US.po` -> `themes/kleiderordnung/languages/en_US.po`
- `src/languages/de_DE.mo` -> `themes/kleiderordnung/languages/de_DE.mo`
- `src/languages/de_DE.po` -> `themes/kleiderordnung/languages/de_DE.po`

This will match the content language in the `<html lang` attribute where a hyphen is used instead of the underscore.

```
<html lang="en-US"
```

This will also match the necessary explicit loading command in `functions.php`:

```php
add_action('after_setup_theme', function() {
load_theme_textdomain( 'kleiderordnung', get_template_directory() . '/languages' );
```

##### Use translateable markup, update po strings, and regenerate mo files

Always **add new text** in PHP templates using the **translation function** and the **default language (German) text** as the key, e.g.

```
<?php _e( 'Seite bearbeiten', 'kleiderordnung' ) ?>
```

Localization in JavaScript needs an additional registration in the localization array in `/inc/functions/localize-js.php` to become available in the translations object, e.g. `kleiderordnung_translations['über']`. Any string used in JS must be defined **both** in the `.pot` files **and** in `localize-js.php`! 

Regenerate the theme's `.pot` file or append the new text strings manually to all `.pot` and `.po` files, e.g.

```
#: inc/structure/admin-edit-link.php:11
msgid "Seite bearbeiten"
msgstr "Edit Page"
```

Set **PO-Revision-Date** to the current date and time in the `.po` files and update the **Last-Translator** (using your name or WordPress user handle) if necessary. 

```
"PO-Revision-Date: 2023-08-19 14:20+0200\n"
"Last-Translator: @openmindculture\n"
```

**Generate / update `.mo` files** from `.po` files: the program `msgfmt` (part of the `gettext` package) can be used on the command line to create the MO file. A typical `msgfmt` command looks like this:

```
msgfmt -o src/languages/en_US.mo src/languages/en_US.po
msgfmt -o src/languages/de_DE.mo src/languages/de_DE.po
```

You can use the prepared build target `build:translations` to update the `.mo` files.

`npm run build:translations`

Sources:

- https://developer.wordpress.org/apis/internationalization/localization/
- https://polylang.pro/doc/theme-internationalization-and-localization/
- https://polylang.pro/doc/import-and-export-strings-translations/
- https://github.com/izimobil/polib/issues/96

### Don't Prevent Caching!

Polylang settings offer automatic redirection to page content based on browser language and preventing caching the front page. As we absolutely want to cache static content to prevent costly and redundant recreation of content on the server side and speed up loading time for clients, this option must not be used!

Automatic detection and redirection can be done alternatively using client-side JavaScript or relying on matching search engine results etc.

<a name="testing" id="testing"></a>
## Development, Performance, Accessibility, and Testing

Edit source code in `src` files, rebuild and test the theme using `npm run build` and `npm run build:zip`, then start http://localhost:1234/

Increase theme versions in

- `src/style.css`: `Version:`,
- `src/functions.php`: `define( 'KLEIDERORDNUNG_THEME_VERSION`,
- `package.json`: `"version":`

The web site's theme, plugin, and example content can be developed and testing using automated screenshot tests, accessibility and performance audits with axe and Lighthouse, and static code quality assistance using eslint, stylelint, SonarLint.

We can use exported (Figma) template graphics instead of screenshots to verify the initial visual expectations.

### Recreate Base Screenshots for Regression Testing

**TODO** this should be a build target in `package.json` passing an enviroment variable to codecept.

- open `codecept/homepage_test.js`
- set `const prepareBaseImages = true;`
- run `npm run codeceptjs`
- set `const prepareBaseImages = false;`
- Look at the images in `codecept/screenshots` and verify their content manually.

### Test Tools and Limitations

As it seems hard to properly unit-test classic WordPress code, **frontend testing** is very important to prevent errors and side effects when maintaining our theme.

[CodeceptJS](https://codecept.io/) is used for frontend / end-to-end / regression test automation using click paths to verify nagivation and legal pages like imprint and privacy information. **Full page screenshots** are compared to their prior base images respectively.

[Jasmine](https://jasmine.github.io/) is used for unit testing JavaScript. Test coverage is still low due to dependencies and side effects as most code directly interacts with the DOM API. I tried to use <strike>[jest](https://jestjs.io/)</strike> but it does not support ES(6) module syntax (import/export) properly without using <strike>[babel](https://babeljs.io/)</strike> as well.

**TODO**: unit test tutorials advise to **refactor** our code so that it never interacts with the global `window` object directly. Instead, we should **inject `window`** (or rather the part that we are actually interested in) as a parameter into our functions wherever possible. But what about DOM API callbacks like event handling or IntersectionObserver?

PHP unit test coverage is low or nonexistent for a similar reason: most code is mixed with HTML markup and heavily depends on WordPress core and plugin functionality which seems hard to properly abstract into testable code without overengineering away from the software's best practice. If we don't feel likely at all to achieve a high unit test coverage, we could rather invest the same effort in extending our frontend tests to verify the very same aspects like custom page titles, custom post types, correct paths to styles, fonts and libraries etc. Likewise, computed styles also get **tested indirectly** when comparing full page screenshots in our frontend tests.

### Build Tools

WordPress can be run locally using the provided development server setup using Doker and docker-compose, based on [wp_template_opinionated](https://github.com/openmindculture/wp_template_opinionated/) by [Ingo Steinke](https://www.ingo-steinke.com/).

The theme bundle and client-side CSS will be built (without SCSS) using PostCSS. Supported upcoming CSS features include imports, custom properties, and native nesting.

JavaScript imports are handled by `esbuild`. There is currently no transpilation, so be conservative when adding client-side JS. Instead of TypeScript, there are [JSDoc](https://jsdoc.app/) annotations.

Unit tests are few, due to necessary DOM side effects, global window properties, and the focus on visual web design.

Code style follows modern recommendations for HTML, CSS, PHP, and more backwards compatible ones for ECMAScript, ignoring the divergent WordPress and Gutenberg community guidelines.

Note that this is a classic WordPress theme, despite block editor support for pages other than the frontpage, so there is **no theme.json** but **style.css**.

The local development setup has been tested on Ubuntu Linux and _should_ work on Windows and MacOS as well. If it doesn't, and the exported CSS and theme files are modified, or if any upcoming WordPress editing features override theme declarations or template parts, those changes should be ported back to the theme source code immediately!

## Verify and Customize Users and Dashboard Widgets

Create a new user as an author or a more appropriate [WordPress admin role](https://wordpress.org/documentation/article/roles-and-capabilities/)) (permission group).

Log in to your Dashboard as the new user. On the screen showing the "Site Health" widget, click the "Screen Options" ("Ansicht anpassen") menu item at the top right of your screen and move the custom theme widget to the top position. You can turn off "Site Health" and any other widgets you don't want to see.

This is a per-user function, therefore turning it off only removes it for you and not other users.

### Make sure the website owner can actually edit their content!

If the content has been prepared or edited before adding the new user, make sure that they are able to edit their website content! This could be done by changing ownership and transferring all existing content to the new author (e.g. by using QuickEdit on the overview page). 

Don't give the website owner administration rights unless they are a technically experienced person who know how to use WordPress without accidentally destroying, deleting, or misplacing anything.

## WordPress-Plugins

- Advanced Custom Fields
  - `mu-plugins/kleiderordnung-content-type` for custom fields and content types
- Akismet Anti-Spam Protection (production site only)
- Complianz | GDPR/CCPA Cookie Consent (if necessary)
- Contact Form 7
- [Display Featured Image In Post List](https://de.wordpress.org/plugins/display-featured-image-in-post-list/)
- Flamingo (save contact forms messages)
- [Contact Form Inbox Report Mailer](https://github.com/openmindculture/wp-contact-form-inbox-report-mailer-plugin)
- Incompatibility Status
- Juicer Instagram Feed
- Matomo Analytics (production site only)
- Polylang
- SVG Support
- TinyPNG
- Updraft Plus (backup)
- W3 Total Cache (production site only)
- Yoast SEO (for sitemaps etc. - preview / production site only)

## WordPress Theme

- Kleiderordnung (`kleiderordnung`)

### Add-Ons / Libraries

- Lottie Player
