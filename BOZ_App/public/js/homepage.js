/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/homepage.js ***!
  \**********************************/
var textAreas = document.querySelectorAll("textarea");
textAreas.forEach(function (textArea) {
  var editor = new FroalaEditor('#' + textArea.id);
});
var editButtons = document.querySelectorAll("button[editbutton='true']");
editButtons.forEach(function (btn) {
  btn.addEventListener('click', function (e) {
    var sectionNr = e.target.getAttribute('section');
    toggleElements("[section='".concat(sectionNr, "']"));
    toggleElements("[editsection='".concat(sectionNr, "']"));
  });
});
var saveButtons = document.querySelectorAll("button[savebutton='true']");
saveButtons.forEach(function (btn) {
  btn.addEventListener('click', function (e) {
    var sectionNr = e.target.getAttribute('editsectionnr');
    toggleElements("[section='".concat(sectionNr, "']"));
    toggleElements("[editsection='".concat(sectionNr, "']"));
    editor = document.querySelector("div[editsection='".concat(sectionNr, "'] .fr-box"));
  });
});

function toggleElements(querySelector) {
  var elements = document.querySelectorAll(querySelector);
  elements.forEach(function (el) {
    return el.classList.toggle('hidden');
  });
}
/******/ })()
;