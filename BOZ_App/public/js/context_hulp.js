/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/context_hulp.js ***!
  \**************************************/
var contextHulpBtn = document.getElementById("contextHulpBtn");
var contextHulp = document.getElementById("contextHulp");
contextHulpBtn.addEventListener('click', function () {
  contextHulp.style.display = "block";
  contextHulpBtn.style.display = "none";
});
contextHulp.addEventListener('click', function () {
  contextHulp.style.display = "none";
  contextHulpBtn.style.display = "block";
});
/******/ })()
;