/** Header / Navigation control */
export function kleiderordnung_observeStickyHeader() {
    if (!window.kleiderordnung.config.supportsIntersectionObserver) { return; }
    var stickyHeader = document.getElementById(window.kleiderordnung.config.stickyHeaderId);
    if (!stickyHeader) { return; } /* TODO refactor string to config */
    window.kleiderordnung.state.rootElement.style.setProperty('--header-height', '' + stickyHeader.offsetHeight + 'px');
    window.kleiderordnung.observers.stickyObserver = new IntersectionObserver(
        function (intersectingEntries) {
            window.kleiderordnung.state.isHeaderStuck = intersectingEntries[0].intersectionRatio < 1;
            intersectingEntries[0].target.classList.toggle(window.kleiderordnung.config.stuckClassName, window.kleiderordnung.state.isHeaderStuck);
            if (window.kleiderordnung.state.isHeaderStuck) { /* TODO refactor string to config */
                window.kleiderordnung.state.rootElement.style.setProperty('--header-height--stuck', '' + stickyHeader.offsetHeight + 'px');
            }
        },
        {threshold: [1]}
    );
    window.kleiderordnung.observers.stickyObserver.observe(stickyHeader);
}
