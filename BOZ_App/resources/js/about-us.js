import {open, openWithPromise} from './frontend_media_library';
import alert from "bootstrap/js/src/alert";

let textArea = document.querySelector("textarea");

FroalaEditor.DefineIcon('insertImgIcon', {NAME: 'image', template: 'font_awesome_5'});
FroalaEditor.RegisterCommand('insertMediaFromLib', {
    title: 'Insert Media',
    icon: 'insertImgIcon',
    focus: true,
    undo: true,
    refreshAfterCallback: true,
    callback: async function () {
        console.log(this);
        this.selection.save();
        console.log(this.cursor);
        await openWithPromise().then((result) => {
            this.selection.restore();

            result.forEach(medium => {
                let element = createMediumElement(medium);
                this.html.insert(element);
            });
        });
    }
});

function createMediumElement(medium) {
    let mediumData = medium.split(";");
    if (mediumData[2] === "mp3") {
        return "<audio style=\"height: 3vw;\" src=\"" + window.location.origin + "/storage/audios/" + mediumData[1] + "." + mediumData[2] + "\" controls></audio>";
    } else if (mediumData[2] === "mp4") {
        return "<video style=\"height: 10vw;\" src=\"" + window.location.origin + "/storage/videos/" + mediumData[1] + "." + mediumData[2] + "\" controls></video>";
    } else {
        return "<img class=\"rounded-md\" style=\"height: auto; max-width: 50%; object-fit: cover;\" src=\"" + window.location.origin + "/storage/images/" + mediumData[1] + "." + mediumData[2] + "\" alt=\"Card image cap\">";
    }
}

let editor = new FroalaEditor('#' + textArea.id, {
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
            buttons: ['insertTable', 'insertLink', 'insertMediaFromLib', 'specialCharacters', 'insertHR'],
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
