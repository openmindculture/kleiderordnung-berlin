/** load styles for social media feed by juicer.io */
fetch('css/juicer.io/202210/embed.css')
  .then(function(response) {
    return response.text();
  })
  .then(function(text) {
    var style = document.head.appendChild(document.createElement('style'));
    style.textContent = text;
    var juicerFeedContainer = document.getElementById("juicer-feed-container");
    console.log("juicerFeedContainer", juicerFeedContainer);
    if (juicerFeedContainer && juicerFeedContainer.classList) {
      juicerFeedContainer.classList.remove("initially-hidden");
    }
  }).catch(function(err) {
  console.error('style load failed with error', err);
});
