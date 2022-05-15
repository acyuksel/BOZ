let firstContent = new FroalaEditor('#firstContent', {
    toolbarButtons: ['undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html'],
    quickInsertEnabled: false,
    placeholderText: 'Schrijf hier de inhoud van het project...'
});
let secondContent = new FroalaEditor('#secondContent', {
    toolbarButtons: ['undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html'],
    quickInsertEnabled: false,
    placeholderText: 'Schrijf hier een tweede inhoud...'
});