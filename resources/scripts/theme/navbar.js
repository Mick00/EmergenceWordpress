
let head;
let nav;

$(document).ready(()=>{
  $('#navbar-items-container').on('show.bs.collapse', ()=>{
    $('#nav').addClass('bg-light navbar-light');
    $('#nav').removeClass('at-top');
  });
  $('#navbar-items-container').on('hidden.bs.collapse', ()=>{
    $('#nav').removeClass('bg-light navbar-light');
  });
});

window.addEventListener('load', event => {
  head = document.getElementsByClassName('head-page');
  nav = $('#nav');
  if (head.length > 0 && $(document).height() > $(window).height()) {
    console.log('creating observer');
    createObserver();
  } else {
    nav.removeClass('transparent-nav fixed-top');
    nav.addClass('bg-light');
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
      nav.addClass('at-top');
      nav.removeClass('not-at-top');
    } else {
      nav.removeClass('at-top');
      nav.addClass('not-at-top');
    }

  });
}
