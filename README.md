# KleiderOrdnung Berlin

A portfolio website for sustainable stylist Tina Steinke in Berlin,
following up on a previous sustainable style consultancy in Düsseldorf.

- https://kleiderordnung.berlin/ (upcoming)
- https://www.kleiderordnung-berlin.de/ (classic alternative)

## Setup, Structure, Editing

The portfolio website content can be edited and extended using the WordPress admin backend. This is a classic WordPress theme, without full-page editing or full theme engine support, but allowing to use the block editor where it might be helfpul.

The page structure and design elements are fixed by the theme, based on the main landing page
which can not be fully edited in the block editor. Instead, custom fields or widgets are provided to ensure
non-destructive editing limited to the intended content type (plain text or rich text with limited markup options).

### Content: Widgets, Custom Fields and Post Types

- **page** (landing page, imprint, privacy, about me)
  - The main index landing page contains most of the content and links / teasers to additional posts and pages.
  - Text lines and paragraphs must be editable, probably as **custom fields**, using either plain text or very limited styling like bold, italic, underline, marker, link:
    - intro headline
    - intro text
    - mission headline
    - mission text
    - contact teaser text
- **offer** (not a "product" to avoid conflict with optional shop plugins)
  - taxonomy: **offer_section** (main | other)
  - Fields:
    - post title = main headline
    - post text = intro text
    - feature list ("Was du erhältst")
    - price
    - price annotation text
    - post image = main post image (only in main offer section)
    - post icon
- **story** ("Stories" / Testimonials)
  - post title = headline: testimonial name and short description
  - post text = quotation
  - post image(s) = main image (and possibly more optional images)
- **post** ("News" blog posts)
  - catagory title = over headline
  - post title = teaser headline / text
  - post image = main post image
- (instagram section as juicer feed)
- (contact form 7 widget via shortcode)
- (fixed contact information and links below editable contact text)

#### Page Structure

- Header: the (sticky) header bar with logo and main navigation
- Intro Section
  - Key Visual (hero image / hero header / jumbotron)
  - Key Headline
  - Text Paragraph
- Offers Section
  - sub-navigation
  - offer article (post) (detailed, featured, main)
    as a WordPress (custom) post, marked up as an <article>
    with image, main headline, text paragraphs, offer price etc.
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
- Lists
- Icons
- Card-like grid / flex layouts


### Contact Form, Social Media, Dynamic Menu

A contact form is provided using the popular Contact Form 7 plugin and the Flamingo add-on to save messages in the database. For localized content, a new form needs to be created for each language. Fixed text output by the theme (like contact buttons) we might need a localization file? If it's all but a few button captions, we may be better off with a condition or translation function call in the theme code if possible.

- **page header**
- **Instagram posts**
- **contact form**
- **page footer**

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

Edit source code in `src` files, rebuild and test the theme using `npm run build` and `npm run build:zip`.

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
