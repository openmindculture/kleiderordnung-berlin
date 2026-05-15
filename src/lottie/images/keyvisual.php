<?php
/*
 * Image Provider based on Browser Capabilities
 *
 * Fallback for the unlikely case of a user agent that supports lottie.js (using globalThis)
 * but that does not support the webp image format
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */

header('Status: 200 OK');
header('Vary: Accept');
$request_headers = getallheaders();

$current_domain = isset($_SERVER['HTTP_HOST']) ? strtolower($_SERVER['HTTP_HOST']) : '';

if (str_contains($current_domain, 'stage') || str_contains($current_domain, 'localhost') || str_contains($current_domain, 'bs-local.com')) {
  $imagefilename = 'intro-foto-vorschau.png';
  $filename = '../../../../uploads/' . $imagefilename;
  // embedded image does not load within <img src="...svg" due to security block
  // TODO  You should convert your SVG path geometry (d="...") into a Lottie Layer Mask.
  $target_width = 848;
  if (file_exists($filename)) {
    // header('content-type: image/png');
    // echo file_get_contents('../../../../uploads/intro-foto-vorschau.png');
    $size = getimagesize($filename);
    $width  = $size[0];
    $height = $size[1];
    $targetheight = $size[1];
    $target_height = round($height * ($target_width / $width));
    // width/848 = factor
    // height = factor * height = width/848 * height
    header('content-type: image/svg+xml');
    ?>
<svg viewBox="0 0 848 930" width="848" height="930" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <clipPath id="cut-shape">
      <path d="M1024.34 109.353C1017.8 132.34 1010.71 156.082 1004.3 178.673C1002.28 184.499 1000.26 190.326 998.241 196.116L998.377 195.946C959.762 289.837 910.271 426.423 862.702 485.306C862.572 485.44 862.351 485.41 862.166 485.385C581.83 400.405 540.673 640.013 579.487 723.376C579.483 723.413 579.399 723.477 579.357 723.509C475.494 798.696 314.72 891.158 186.627 904.29C186.553 904.28 34.4656 779.876 4.2203 574.079C-15.4696 440.245 50.3135 307.504 140.701 206.942C157.817 187.897 174.85 168.917 191.553 150.155C193.852 147.566 196.389 145.159 199.08 142.998L199.033 143.067C423.357 -4.62589 615.238 -30.081 860.098 31.3109L884.146 36.9132C937.6 54.0324 978.711 73.107 1021.82 101.899L1021.83 101.788C1023.37 104.291 1024.93 106.345 1024.38 109.321L1024.34 109.353Z" transform="rotate(-90, 512, 452) scale(0.8) translate(180, -70)"/>
    </clipPath>
  </defs>

  <image
    href="/wp-content/uploads/<?= $imagefilename ?>"
    width="<?= $target_width ?>"
    height="<?= $target_height ?>"
    preserveAspectRatio="xMidYMid slice"
    clip-path="url(#cut-shape)" />
</svg>
    <?php
    exit(0);
  }
}

if (
  ($request_headers["Accept"] && is_string($request_headers["Accept"]) && str_contains($request_headers["Accept"], 'webp'))
  ||
  ($request_headers["accept"] && is_string($request_headers["accept"]) && str_contains($request_headers["accept"], 'webp'))
) {
  kleiderordnung_keyvisual_serve_webp();
} else {
  kleiderordnung_keyvisual_serve_png();
}

function kleiderordnung_keyvisual_serve_webp(): void {
  header('content-type: image/webp');
  echo file_get_contents('./img_0.webp');
}

function kleiderordnung_keyvisual_serve_png(): void {
  header('content-type: image/png');
  echo file_get_contents('./img_0.png');
}
