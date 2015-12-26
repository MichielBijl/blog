(function () {
  var mainContent = document.getElementById('main');
  var skipLink = document.querySelectorAll('[href="#main"]')[0];

  skipLink.addEventListener('click', handleContentFocus);
  skipLink.addEventListener('transitionend', handleContentFocus);

  function handleContentFocus(event) {
    var hasTabindex = mainContent.hasAttribute('tabindex');

    if (hasTabindex) {
      mainContent.removeAttribute('tabindex');
    } else {
      mainContent.setAttribute('tabindex', '-1');
    }
  }
})();
