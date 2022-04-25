import {open, openWithPromise} from './frontend_media_library';
import {createEditor} from "./froala-editor";
import alert from "bootstrap/js/src/alert";

let textArea = document.querySelector("textarea");

let editor = createEditor(textArea.id);

let editButton = document.querySelector("button[editbutton='true']");
editButton.addEventListener('click', (e) => {
    e.preventDefault();
    toggleElements("#input-container");
    toggleElements('button[editbutton=\'true\']');
    toggleElements('button[savebutton=\'true\']');
    toggleElements('#content-container');
});

function toggleElements(querySelector) {
    let elements = document.querySelectorAll(querySelector);
    elements.forEach(el => el.classList.toggle('hidden'));
}
