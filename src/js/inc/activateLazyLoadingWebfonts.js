/** deferable loading of licensed web fonts from official external font server */
export function kleiderordnung_activateLazyLoadingWebfonts() {
  var stylesheet = document.createElement('link');
  stylesheet.href = 'https://fastly-cloud.typenetwork.com/projects/7215/fontface.css?64529db9';
  stylesheet.rel = 'stylesheet';
  stylesheet.type = 'text/css';
  stylesheet.media = 'all';
  document.head.appendChild(stylesheet);
}
