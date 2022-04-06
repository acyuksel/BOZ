let mediaLibraryOpen = document.getElementById("media-library-open");
let mediaLibraryCloseCollection = document.getElementsByClassName("media-library-close");

let imageNav = document.getElementById("imageNav");
let videoNav = document.getElementById("videoNav");
let audioNav = document.getElementById("audioNav");

imageNav.addEventListener('click', () =>{navigate("image")});
videoNav.addEventListener('click', () =>{navigate("video")});
audioNav.addEventListener('click', () =>{navigate("audio")});

mediaLibraryOpen.addEventListener('click', openMediaLibrary);
for (const mediaLibraryClose of mediaLibraryCloseCollection) {
    mediaLibraryClose.addEventListener('click', closeMediaLibrary);
}

function openMediaLibrary(){
    document.getElementById("media-library").style.setProperty("display", "block", "important");
    document.getElementById("media-library-background").style.setProperty("display", "block", "important");
}

function closeMediaLibrary(){
    document.getElementById("media-library").style.setProperty("display", "none", "important");
    document.getElementById("media-library-background").style.setProperty("display", "none", "important");
}

function navigate(location){
    let image = document.getElementById("library-image");
    let video = document.getElementById("library-video");
    let audio = document.getElementById("library-audio");
    switch (location) {
        case "image":
            image.style.setProperty("display", "block", "important");
            video.style.setProperty("display", "none", "important");
            audio.style.setProperty("display", "none", "important");
            break;
        case "video":
            image.style.setProperty("display", "none", "important");
            video.style.setProperty("display", "block", "important");
            audio.style.setProperty("display", "none", "important");
            break;
        case "audio":
            image.style.setProperty("display", "none", "important");
            video.style.setProperty("display", "none", "important");
            audio.style.setProperty("display", "block", "important");
            break;
        default:
            break;
    }
}