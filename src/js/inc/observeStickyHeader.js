/** Header / Navigation control */
/** @param {object} config configuration object
 *  @property {boolean} supportsIntersectionObserver
 *  @property {object} observerOptions
 *  @property {string} stickyHeaderId e.g. 'site-header'
 *  @property {string} stickyHeaderHeightProperty e.g.'--header-height'
 *  @property {string} stickyStuckHeaderHeightProperty e.g. '--header-height--stuck'
 *  @property {string} socialMediaSectionId e.g. 'socialmedia'
 *
 *  @property {string} introKeyvisualAnimationId e.g. 'intro-keyvisual-animation'
 *  @property {string} introKeyvisualMousetrapId e.g. 'intro-keyvisual-mousetrap'
 *  @property {string} introKeyvisualScriptId e.g. 'lottie-player-script'
 *  @property {string} introKeyvisualComponentTagName e.g. 'lottie-player'
 *  @property {string} noGlobalThisClassName e.g. 'no-globalthis'
 *  @property {number} introKeyvisualTimeoutMilliseconds 30000
 */
export function kleiderordnung_observeStickyHeader(config) {
    if (!config.supportsIntersectionObserver) { return; }
    var stickyHeader = document.getElementById(config.stickyHeaderId);
    if (!stickyHeader) { return; }
    window.kleiderordnung.state.rootElement.style.setProperty(config.stickyHeaderHeightProperty, '' + stickyHeader.offsetHeight + 'px');
    window.kleiderordnung.observers.stickyObserver = new IntersectionObserver(
        function (intersectingEntries) {
            window.kleiderordnung.state.isHeaderStuck = intersectingEntries[0].intersectionRatio < 1;
            intersectingEntries[0].target.classList.toggle(window.kleiderordnung.config.stuckClassName, window.kleiderordnung.state.isHeaderStuck);
            if (window.kleiderordnung.state.isHeaderStuck) {
                window.kleiderordnung.state.rootElement.style.setProperty(config.stickyStuckHeaderHeightProperty, '' + stickyHeader.offsetHeight + 'px');
            }
        },
        {threshold: [1]}
    );
    window.kleiderordnung.observers.stickyObserver.observe(stickyHeader);
}
