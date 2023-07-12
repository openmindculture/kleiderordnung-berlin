# KleiderOrdnung Berlin

A portfolio website for sustainable stylist Tina Steinke in Berlin,
following up on a previous sustainable style consultancy in Düsseldorf.

- https://kleiderordnung.berlin/ (upcoming)
- https://www.kleiderordnung-berlin.de/ (classic alternative)

Local development: http://localhost:1234/
Backend: http://localhost:1234/wp-admin (default credentials: admin:secret).
Make sure to that the theme KleiderOrdnung got activated or activate it manually after installation.

## Installation (Deployment)

To deploy the KleiderOrdnung theme on a website,
- install WordPress core and the required plugins,
- copy all `wp-content/mu-plugins/*.php` files manually,
- install the lastest KleiderOrdnung theme by uploading it in WP-Admin,
- activate the theme,
- copy all icons and manifest files (`*.ico`, `*.png`, `*.svg`, `*.json`, `*.xml`, `robots.txt`) to the web root directory
- configure server and caching by editing `.htaccess` / `nginx.conf` / hosting backend or by using appropriate plugins,
- use additional reverse proxy and/or CDN servers if necessary,
- test everything and backup your data regularly!

## Data Flow, Backups, Updates

Design and behavior is controlled by the theme and plugins which can be deployed to production after testing. Content (data) is edited on the production server and synchronized back to test and development systems.

![data flow](doc/theme-and-data-flow.png)

Upload
 - the theme (ZIP) via wp-admin
 - the `mu-plugins` via (S)FTP (**NOT included in the theme file!**)

Download
 - `content.xml` via WordPress tools export / import

Existing posts and pages will be replaced when importing. This is non-standard configured behavior which will only work if `mu-plugins/wordpress-import-update.php` is present!

DON'T commit any personal data (possibly included in a complete "all content" export file). Make sure to review and clean up any `content.xml` before committing!

Review and synchronize settings manually, as far as you find useful. Make sure that all necessary plugins are installed.

## Setup, Structure, Editing

The portfolio website content can be edited and extended using the WordPress admin backend. This is a classic WordPress theme, without full-page editing or full theme engine support, but allowing to use the block editor where it might be helfpul.

The page structure and design elements are fixed by the theme, based on the main landing page
which can not be fully edited in the block editor. Instead, custom fields or widgets are provided to ensure
non-destructive editing limited to the intended content type (plain text or rich text with limited markup options).

### Content: Widgets, Custom Fields and Post Types

- **page** (front / home / landing page, imprint, privacy, about me)
  - The main index landing page (front page / home page), defined in `front-page.php` according to the class [template hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/), contains most of the content and links / teasers to additional posts and pages.
  - Any other regular static page, like **privacy**, **imprint**, **tos** (AGB), is handled by `page.php`
  - Text lines and paragraphs must be editable, probably as **custom fields**, using either plain text or very limited styling like bold, italic, underline, marker, link:
    - intro headline
    - intro text
    - mission headline
    - mission text
    - contact teaser text and content next to contact form
- **post** (**News** blog posts / teasers)
  - category title = over headline
  - post title = teaser headline / text
  - post image = main post image
- **offer** (**Angebot**; not a "product" to avoid conflict with optional shop plugins)
  - taxonomy: **offer_section** (`main` | `other`)
  - Fields:
    - post title = main headline
    - post text = intro text
    - feature list ("Was du erhältst")
    - price
    - price annotation text
    - post image = main post image (only in main offer section)
    - post icon
- **story** (**Stories** / Testimonials)
  - post title = headline: testimonial name and short description
  - post text = quotation
  - post image(s) = main image (and possibly more optional images)
- content handled by plugins:
  - Instagram section as juicer feed
  - contact form 7 widget via shortcode

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

Colorful shapes are placed behind content sections using mixins and custom properties defined in `a_decoration.css`. Scale and height adjustment property defaults can be overridden in a module / section scope, which might in turn be ajusted according to a JavaScript-based height measurement once after the document has been rendered.

### Contact Form, Social Media, Dynamic Menu

A contact form is provided using the popular Contact Form 7 plugin and the Flamingo add-on to save messages in the database. For localized content, a new form needs to be created for each language.

Contact form settings use specific shortcodes, identifiers must match in form template, email template, style sheets, and possible JavaScript handlers. Checkbox elements show up with their value when checked.

Example:

Form markup:

``` 
<div class="contact__fieldset contact__fieldset--from">
  <label class="contact__label contact__label--name"> <span class="screen-reader-text">Dein Name</span> [text* Name autocomplete:name akismet:author placeholder "Name"] </label><!-- NO LINE-BREAK HERE ! --><label class="contact__label contact__label--email"> <span class="screen-reader-text">Deine E-Mail-Adresse </span> [email* Email autocomplete:email akismet:author_email placeholder "E-Mail"] </label>
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

- Known issues: occasional "juicer error" when using on localhost instead of configured domain or pseduo-public domain like browserstack's bs-local.com
- account / API at juicer.io

### Localization

The site is provided in a German and an English language version using the Polylang plugin.

## Theme and Design

The theme is a standalone theme not depending on any parent theme, but inspired by existing themes like
Twenty-Twenty-Three, GeneratePress, and Fasto. This is a classic theme with partial block editor support.

The graphic design has been conceived in collaboration with Ina Nixdorf and Martina Steinke.
Technical details and development: Ingo Steinke.
Support and code review: tbd.

### Web Fonts
- Henderson Sans by [Sudtipos](https://www.sudtipos.com/)
- Ivy Mode by Jan Maack from [Ivy Foundry](https://typenetwork.com/type-foundries/ivy-foundry).

## Development, Performance, Accessibility, and Testing

Edit source code in `src` files, rebuild and test the theme using `npm run build` and `npm run build:zip`, then start http://localhost:1234/

Increase theme versions in

- `src/style.css`: `Version:`,
- `src/functions.php`: `define( 'KLEIDERORDNUNG_THEME_VERSION`,
- `package.json`: `"version":`

The web site's theme, plugin, and example content can be developed and testing using automated screenshot tests, accessibility and performance audits with axe and Lighthouse, and static code quality assistance using eslint, stylelint, SonarLint.

We can use exported (Figma) template graphics instead of screenshots to verify the initial visual expectations.

[CodeceptJS](https://codecept.io/) is used for test automation.

WordPress can be run locally using the provided development server setup using Doker and docker-compose, based on [wp_template_opinionated](https://github.com/openmindculture/wp_template_opinionated/) by [Ingo Steinke](https://www.ingo-steinke.com/).

The theme bundle and client-side CSS will be built (without SCSS) using PostCSS. Supported upcoming CSS features include imports, custom properties, and native nesting.

The local development setup has been tested on Ubuntu Linux and _should_ work on Windows and MacOS as well. If it doesn't, and the exported CSS and theme files are modified, or if any upcoming WordPress editing features override theme declarations or template parts, those changes should be ported back to the theme source code immediately!

Code style follows modern recommendations for HTML, CSS, PHP, and ECMAScript, ignoring the divergent WordPress community guidelines.

## WordPress-Plugins

- Advanced Custom Fields
  - `mu-plugins/kleiderordnung-content-type` for custom fields and content types (if necessary)
- Akismet Anti-Spam Protection (production site only)
- Complianz | GDPR/CCPA Cookie Consent (if necessary - not automatically installed, database migration did not work with wp-cli)
- Contact Form 7
- Flamingo (save contact forms messages)
- HTTP-Header zur Verbesserung der Webseiten-Sicherheit
- Incompatibility Status
- Juicer Instagram Feed (if necessary)
- Matomo Analytics (production site only)
- Polylang
- SVG Support
  Tinify – TinyPNG – JPEG, PNG & WebP image compression (tiny-compress-images)
- W3 Total Cache (production site only)

## WordPress Theme

- KleiderOrdnung (this theme)

### Add-Ons / Libraries

- Lottie Player
