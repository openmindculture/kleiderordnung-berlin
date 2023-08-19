/**
 * Admin Edit Link Component (visible only to logged in admins, class set in js based on cookies for better caching)
 */
export function kleiderordnung_showAdminLinkIfLoggedIn() {
  /* global document */
  if (document.cookie.indexOf('wp-settings-time') !== -1) {
    document.body.classList.add('logged-in-cookie');
  } else {
    document.body.classList.remove('logged-in-cookie');
  }
}
