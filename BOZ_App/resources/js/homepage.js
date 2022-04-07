let textAreas = document.querySelectorAll("textarea");
textAreas.forEach(textArea => {
    let editor = new FroalaEditor('#' + textArea.id);
})


let editButtons = document.querySelectorAll("button[editbutton='true']");
editButtons.forEach(btn  => {
    btn.addEventListener('click', (e) => {
        let sectionNr = e.target.getAttribute('section');
        toggleElements(`[section='${sectionNr}']`);
        toggleElements(`[editsection='${sectionNr}']`);
    });
});

let saveButtons = document.querySelectorAll("button[savebutton='true']");
saveButtons.forEach(btn  => {
    btn.addEventListener('click', (e) => {
        let sectionNr = e.target.getAttribute('editsectionnr');
        toggleElements(`[section='${sectionNr}']`);
        toggleElements(`[editsection='${sectionNr}']`);

        editor = document.querySelector(`div[editsection='${sectionNr}'] .fr-box`);
    });
});

function toggleElements(querySelector) {
    let elements = document.querySelectorAll(querySelector);
    elements.forEach(el => el.classList.toggle('hidden'));
}

