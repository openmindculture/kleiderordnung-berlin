<?php
/*
 * Image Provider based on Browser Capabilities
 *
 * TODO fix naive pseudo code: use valid PHP
 * verify that default headers are generated (content-length, expires etc.)
 * verify that this custom system does not break transfer compression (unless there hasn't been anyway)
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
  serve_webp();
} else {
  serve_png();
}

function serve_webp() {
  header('content-type: image/webp');
  echo file_get_contents('./img_0.webp');
}

function serve_png() {
  header('content-type: image/png');
  echo file_get_contents('./img_0.png');
}
