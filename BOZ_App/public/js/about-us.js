/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/about-us.js ***!
  \**********************************/
var textArea = document.querySelector("textarea");
var editor = new FroalaEditor('#' + textArea.id, {
  toolbarButtons: {
    // Key represents the more button from the toolbar.
    moreText: {
      // List of buttons used in the  group.
      buttons: ['fontSize', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'textColor', 'backgroundColor', 'inlineClass', 'inlineStyle', 'clearFormatting'],
      // Alignment of the group in the toolbar.
      align: 'left',
      // By default, 3 buttons are shown in the main toolbar. The rest of them are available when using the more button.
      buttonsVisible: 4
    },
    moreParagraph: {
      buttons: ['alignLeft', 'alignCenter', 'formatOLSimple', 'alignRight', 'alignJustify', 'formatOL', 'formatUL', 'paragraphFormat', 'paragraphStyle', 'lineHeight', 'outdent', 'indent', 'quote'],
      align: 'left',
      buttonsVisible: 3
    },
    moreRich: {
      buttons: ['insertTable', 'insertLink', 'insertImage', 'specialCharacters', 'insertHR'],
      align: 'left',
      buttonsVisible: 3
    },
    moreMisc: {
      buttons: ['undo', 'redo', 'html', 'help'],
      align: 'right',
      buttonsVisible: 2
    }
  },
  quickInsertEnabled: false
});
var editButton = document.querySelector("button[editbutton='true']");
editButton.addEventListener('click', function (e) {
  e.preventDefault();
  toggleElements("#input-container");
  toggleElements('button[editbutton=\'true\']');
  toggleElements('button[savebutton=\'true\']');
  toggleElements('#content-container');
});

function toggleElements(querySelector) {
  var elements = document.querySelectorAll(querySelector);
  elements.forEach(function (el) {
    return el.classList.toggle('hidden');
  });
}
/******/ })()
;