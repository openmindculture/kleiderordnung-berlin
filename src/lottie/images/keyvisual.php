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
