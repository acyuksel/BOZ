/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/admin-script.js ***!
  \**************************************/
var firstContent = createEditor("firstContent");
var secondContent = createEditor("secondContent");

function createEditor(textAreaId) {
  var editor = new FroalaEditor('#' + textAreaId, {
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
        buttons: ['insertTable', 'insertLink', 'specialCharacters', 'insertHR'],
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
  return editor;
}
/******/ })()
;