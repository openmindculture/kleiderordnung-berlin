/**
 * @param {HTMLElement} eventTarget DOM element inside carousel wrapper
 * @param {Number} carouselSlideStep pixels to scroll by
 */
export function kleiderordnung_carouselDoSlide(eventTarget, carouselSlideStep) {
  if (!eventTarget) { return; }
  var carouselWrapper = eventTarget.closest('.carousel__wrapper');
  if (!carouselWrapper || !carouselWrapper.querySelector) { return; }
  var carouselViewport = carouselWrapper.querySelector('.carousel__viewport');
  if (!carouselViewport || !carouselViewport.getBoundingClientRect() || !carouselViewport.scrollBy) { return; }
  carouselViewport.scrollBy({ left: carouselSlideStep, top: 0, behavior: 'smooth' });
  return;
}

export function kleiderordnung_carouselSetup() {
  /* global document */
  var carouselWrappers = document.getElementsByClassName('carousel__wrapper');
  var carouselWrappersCount = carouselWrappers.length;
  for (var l=0; l < carouselWrappersCount; l++) {
    var carouselWrapper = carouselWrappers[l];
    var carouselSlideWidth = 644; // fallback: expected width of 1 image + 1 quote on desktop
    var carouselFirstSlideItem = carouselWrapper.querySelector('.carousel__item:first-child');
    if (carouselFirstSlideItem && carouselFirstSlideItem.getBoundingClientRect()) {
      carouselSlideWidth = carouselFirstSlideItem.getBoundingClientRect().width;
    }
    var carouselNextButton = carouselWrapper.querySelector('.carousel__navigation__next');
    if (carouselNextButton) {
      carouselNextButton.addEventListener('click', function(event){
        event.preventDefault();
        kleiderordnung_carouselDoSlide(event.currentTarget, carouselSlideWidth);
      })
    }
    var carouselPrevButton = carouselWrapper.querySelector('.carousel__navigation__prev');
    if (carouselPrevButton) {
      carouselPrevButton.addEventListener('click', function(event){
        event.preventDefault();
        kleiderordnung_carouselDoSlide(event.currentTarget, (-1 * carouselSlideWidth));
      })
    }
    if (carouselNextButton && carouselPrevButton) {
      carouselWrapper.classList.add('carousel__wrapper--js-controls-initialized');
    }
  }
}
