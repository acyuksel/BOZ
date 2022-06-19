require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let backToTopBtn = document.getElementById('backToTop');

backToTopBtn.addEventListener('click', topFunction);

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backToTopBtn.style.display = "block";
    } else {
        backToTopBtn.style.display = "none";
    }
  }

function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
  }