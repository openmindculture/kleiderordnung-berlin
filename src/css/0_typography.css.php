<?php
/**!
 * Webfont Styles to be imported in HTML header to avoid Flash of Unstyled Fonts
 * using alternative local font files as a fallback for external CDN resources
 * as typography.css.php so that we can use get_template_directory_uri() to ensure the correct path to font files
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
.is-typography-css-php-file {
  border: solid 1px red;
}
/**! This CSS resource incorporates links to font software which is the
   valuable copyrighted property of Type Network, Inc. and/or their
   suppliers. You may not attempt to copy, install, redistribute,
   convert, modify or reverse engineer this font software. Please
   contact Type Network with any questions: www.typenetwork.com */

/**! *************************************************************
These styles are subject to the license agreement(s) provided when you purchased the license(s).
https://store.typenetwork.com/cart/eula/type-network
***************************************************************/

/**! Ivy Mode Regular licensed to Martina Steinke by Type Network for KleiderOrdnung.Berlin */
@font-face {
  font-family: "IvyMode";
  font-weight: 400; /* normal */
  font-style: normal;
  font-display: swap;
  src:
    url("<?php echo get_template_directory_uri() ?>/fonts/17af_vdef_emp_883a.woff2?45711c4b8486ec30fae30fb185b8d8b9bb1d822f") format("woff2");
}

/**! Ivy Mode Bold licensed to Martina Steinke by Type Network for KleiderOrdnung.Berlin */
@font-face {
  font-family: "IvyMode";
  font-weight: 700; /* bold */
  font-style: normal;
  font-display: swap;
  src: url("<?php echo get_template_directory_uri() ?>/fonts/17ae_vdef_emp_8839.woff2?45711c4b8486ec30fae30fb185b8d8b9bb1d822f") format("woff2");
}

/**! Henderson Sans licensed to Martina Steinke by Monotype FontShop for KleiderOrdnung.Berlin */
@font-face{
  font-family:"Henderson Sans W00";
  font-weight: 100 400; /* Regular / normal */
  font-display: swap;
  src:
    url("<?php echo get_template_directory_uri() ?>/fonts/1be57243-bc0a-482e-a7f4-0c95f5fd6930.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri() ?>/fonts/26380e33-0025-4b50-b82b-e20bea9205af.woff") format("woff");
}
@font-face{
  font-family:"Henderson Sans W00";
  font-weight: 500 600; /* SemiBold */
  font-display: swap;
  src:
    url("<?php echo get_template_directory_uri() ?>/fonts/23c3a7e2-fd1b-4416-8d19-bf7e93f3c50c.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri() ?>/fonts/a30ed0f8-46e4-46d8-ac79-1234482c780b.woff") format("woff");
}
@font-face{
  font-family:"Henderson Sans W00";
  font-weight: 700 900; /* Bold */
  font-display: swap;
  src:
    url("<?php echo get_template_directory_uri() ?>/fonts/1abe8255-18cb-4cb2-8d6c-f6973e71dda4.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri() ?>/fonts/80a115f6-0028-4b1e-8e29-fac6fe25f7ff.woff") format("woff");
}

/** BEGIN verified Figma Style block with TODO annotations */

html, body, main, p, .text-body {
  font-family: var(--font-family-default);
  font-weight: 400;
  font-size: var(--font-size-16);
  line-height: 140%; /* would that be 1.4 ? is there a best-practice notation? "or 22px" */
  color: var(--color-default-black);
}

.text-copy, .text-copy2 { /* identical */
  font-family: var(--font-family-default);
  font-weight: 400;
  font-size: var(--font-size-15); /* property names matching pixel definitions in Figma */
  line-height: 160%; /* "identical to box height, or 24px" */
  color: var(--color-default-black);
}

.text-copy--bold, strong, b {
  font-weight: 700;
  letter-spacing: -0.5px;
}

.text-button-label {
  font-family: var(--font-family-default); /* TODO default ist nicht 700 */
  /* oder die Gewichte müssten jeweils gleich heißen,
   * was aber deren CSS-Beispielen widerspricht.
   */
  font-weight: 700;
  line-height: 14px; /* "identical to box height, or 108%" */
  font-style: normal;
  text-transform: uppercase;
}

/* hier bräuchten wir entweder Mixins oder aber Utility Class Names = TODO */

h2 {
  font-family: var(--font-family-default);
  font-weight: 700;
  font-size: var(--font-size-17);
  line-height: 160%; /* "or 27px" */
  letter-spacing: -0.5px;
  text-transform: uppercase;
  font-style: normal;
  color: var(--color-default-black);
}

h3 { /* TODO reorder in an unsurprising way after finished verifying with Figma */
  font-family: var(--font-family-heading); /* TODO dto. common family names?! */
  font-weight: 700;
  font-size: var(--font-size-32);
  line-height: 130%; /* "identical to box height or 42px" */
  letter-spacing: 0.05em; /* nun plötzlich em! TODO verify - using screenshots? */
  font-style: normal;
  color: var(--color-default-black);
}

h4 {
  font-family: var(--font-family-default); /* TODO dto. common family names?! */
  font-weight: 700;
  font-size: var(--font-size-17);
  line-height: 160%; /* "or 27px" */
  letter-spacing: -0.5px;
  font-style: normal;
  color: var(--color-default-black);
}

.text-quote {
  font-family: var(--font-family-heading); /* TODO dto. common family names?! */
  font-weight: 400;
  font-size: var(--font-size-20);
  line-height: 160%; /* "identical to box height or 32px" */
  letter-spacing: 0.05em; /* nun plötzlich em! TODO verify - using screenshots? */
  font-style: normal;
  color: var(--color-default-black);
}

h1.wp-block-post-title {
  text-align: center;
  margin: 0 auto;
  max-width: 918px;
  color: var(--color-blue-dark-purpleish);
}

.text-semibold {
  font-weight: 600;
}

/* mobile: tablet / smartphone */
@media (max-width: 768px) { /* TODO more generic and which one to use */
  /* TODO match any change to class names and elements above */
  /* TODO this would be a super SCSS use case - what about postCSS nesting media queries inside classes? */
  /* probably not, but then again, there isn't a lot and should only change font size values  anyway */
  .text-quote {
    font-size: var(--font-size-16);
  }

  .text-copy, .text-copy2, .text-copy--bold {
    font-size: var(--font-size-14);
  }

  h3 {
    font-size: var(--font-size-28);
  }

  h1 { /* h1 tablet */
    font-size: var(--font-size-40);
  }
}

/* mobile: smartphone */
@media (max-width: 555px) { /* TODO more generic and which one to use */
  h1 { /* h1 smartphone */
    font-size: var(--font-size-24);
  }
}

/** END verified Figma Style block with TODO annotations */
