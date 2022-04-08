/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/homepage.js ***!
  \**********************************/
var textAreas = document.querySelectorAll("textarea");
textAreas.forEach(function (textArea) {
  var editor = new FroalaEditor('#' + textArea.id, {
    toolbarButtons: ['undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html'],
    quickInsertEnabled: false
  });
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
    var editorContentElement = document.querySelector("div[editsection='".concat(sectionNr, "'] .fr-element"));
    var headerContentInput = document.querySelector("#header".concat(sectionNr));
    saveSectionInput(sectionNr, headerContentInput.value, editorContentElement.innerHTML);
  });
});
var deleteButtons = document.querySelectorAll("button[deletebutton='true']");
deleteButtons.forEach(function (btn) {
  btn.addEventListener('click', function (e) {
    var sectionNr = e.target.getAttribute('section');
    var alertMessage = e.target.getAttribute('alertmessage');

    if (!confirm(alertMessage) === true) {
      return;
    }

    deleteSection(sectionNr);
  });
});
var addButtons = document.querySelectorAll("button[addbutton='true']");
addButtons.forEach(function (btn) {
  btn.addEventListener('click', function (e) {
    var sectionNr = e.target.getAttribute('possiblesectionnr');
    toggleElements("div[possiblesectionnr='".concat(sectionNr, "'][addoptioncontainer='true']"));
  });
});

function toggleElements(querySelector) {
  var elements = document.querySelectorAll(querySelector);
  elements.forEach(function (el) {
    return el.classList.toggle('hidden');
  });
}

function saveSectionInput(sectionNr, header, content) {
  var form = document.getElementById('update-form');
  form.section_nr.value = sectionNr;
  form.header.value = header;
  form.content.value = content;
  form.submit();
}

function deleteSection(sectionNr) {
  var form = document.getElementById('delete-form');
  form.section_nr.value = sectionNr;
  form.submit();
}
/******/ })()
;