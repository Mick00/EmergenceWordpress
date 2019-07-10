
let head;
let nav;

$(document).ready(()=>{
  const nav = $('#nav');
  $('#navbar-items-container').on('show.bs.collapse', ()=>{
    if(nav.hasClass('at-top')){
      nav.removeClass('at-top').addClass('not-at-top at-top-collapsed');
    }
  });
  $('#navbar-items-container').on('hidden.bs.collapse', ()=>{
    if(nav.hasClass('at-top-collapsed')){
      nav.removeClass('not-at-top at-top-collapsed').addClass('at-top');
    }
  });
});

window.addEventListener('load', event => {
  head = document.getElementsByClassName('head-page');
  nav = $('#nav');
  if (head.length > 0 && $(document).height() > $(window).height()) {
    createObserver();
  } else {
    nav.removeClass('at-top');
    nav.addClass('not-at-top');
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
