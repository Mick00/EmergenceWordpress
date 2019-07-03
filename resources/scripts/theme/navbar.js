
let head;
let nav;

window.addEventListener('load', event => {
  head = document.getElementsByClassName('head-page');
  nav = $('#nav');
  if (head.length > 0) {
    console.log('creating observer');
    createObserver();
  } else {

  }
}, false);

function createObserver() {

  const options = {
    root: null,
    rootMargin: "0px",
    threshold: [0.7],
  }
  const observer = new IntersectionObserver(intersectionHandler, options);
  observer.observe(head[0]);
}

const intersectionHandler = (entries, observer) => {
  console.log("intersection");
  entries.forEach(entry => {
    console.log(entry);
    if (entry.intersectionRatio > 0.7) {
      nav.addClass('transparent-nav');
      nav.removeClass('bg-light');
    } else {
      nav.removeClass('transparent-nav');
      nav.addClass('bg-light');
    }

  });
}
