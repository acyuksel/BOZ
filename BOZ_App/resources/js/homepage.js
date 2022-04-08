let textAreas = document.querySelectorAll("textarea");
textAreas.forEach(textArea => {
    let editor = new FroalaEditor('#' + textArea.id, {
        toolbarButtons: ['undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html'],
        quickInsertEnabled: false
    });
})

let editButtons = document.querySelectorAll("button[editbutton='true']");
editButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        let sectionNr = e.target.getAttribute('section');
        toggleElements(`[section='${sectionNr}']`);
        toggleElements(`[editsection='${sectionNr}']`);
    });
});

let saveButtons = document.querySelectorAll("button[savebutton='true']");
saveButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        let sectionNr = e.target.getAttribute('editsectionnr');

        toggleElements(`[section='${sectionNr}']`);
        toggleElements(`[editsection='${sectionNr}']`);

        let editorContentElement = document.querySelector(`div[editsection='${sectionNr}'] .fr-element`);
        let headerContentInput = document.querySelector(`#header${sectionNr}`)

        saveSectionInput(sectionNr, headerContentInput.value, editorContentElement.innerHTML);
    });
});

let deleteButtons = document.querySelectorAll("button[deletebutton='true']");
deleteButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        let sectionNr = e.target.getAttribute('section');
        let alertMessage = e.target.getAttribute('alertmessage');

        if (!confirm(alertMessage) === true) {
            return;
        }

        deleteSection(sectionNr);
    });
});

let addButtons = document.querySelectorAll("button[addbutton='true']");
addButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        let sectionNr = e.target.getAttribute('possiblesectionnr');
        toggleElements(`div[possiblesectionnr='${sectionNr}'][addoptioncontainer='true']`)
    });
});

function toggleElements(querySelector) {
    let elements = document.querySelectorAll(querySelector);
    elements.forEach(el => el.classList.toggle('hidden'));
}

function saveSectionInput(sectionNr, header, content) {
    let form = document.getElementById('update-form')
    form.section_nr.value = sectionNr;
    form.header.value = header;
    form.content.value = content;
    form.submit();
}

function deleteSection(sectionNr) {
    let form = document.getElementById('delete-form')
    form.section_nr.value = sectionNr;
    form.submit();
}
