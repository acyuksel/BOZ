let mediaLibraryOpen = document.getElementById("media-library-open");
let mediaLibraryCloseCollection = document.getElementsByClassName("media-library-close");
let mediaCollection = document.getElementsByClassName("boz-media");
let mediaLibraryTitle = document.getElementById("media-library-title");
// let setMediaForm = document.getElementById("setMediaForm");

let imageNav = document.getElementById("imageNav");
let videoNav = document.getElementById("videoNav");
let audioNav = document.getElementById("audioNav");

let selectedMedia = [];

imageNav.addEventListener('click', () =>{navigate("image")});
videoNav.addEventListener('click', () =>{navigate("video")});
audioNav.addEventListener('click', () =>{navigate("audio")});

mediaLibraryOpen.addEventListener('click', openMediaLibrary);
for (const mediaLibraryClose of mediaLibraryCloseCollection) {
    mediaLibraryClose.addEventListener('click', closeMediaLibrary);
}

for (const media of mediaCollection) {
    media.addEventListener('click', selectMedia);
}

mediaLibraryTitle.addEventListener('click', setSelectedMediaForm);

function selectMedia(event){
    for (const element of event.path) {
        if(element.hasAttribute('fld')){
            addToSelectedMedia(element);
            break;
        }
    }
    console.log(selectedMedia);
}

function addToSelectedMedia(element){
    if(selectedMedia.includes(element.getAttribute('fld'))){
        selectedMedia.splice(selectedMedia.indexOf(element.getAttribute('fld')),1);
        element.style.border = "";
    }else{
        selectedMedia.push(element.getAttribute('fld'));
        element.style.border = "solid 2px #347886";
    }
}

function setSelectedMediaForm(){
    
    selectedMedia.forEach(medium => {
        let selectedMediaForm = document.getElementById("selectedMediaForm");
        let selectedMediaList = document.getElementById("selectedMediaList");

        let mediumData = medium.split(";");
        if(mediumData[2] == "mp3"){
            selectedMediaList.innerHTML += "<audio style=\"height: 3vw;\" src=\""+ window.location.origin +"/audioFragments/"+ mediumData[1]+"."+mediumData[2]+ "\" controls></audio>";
        }else if(mediumData[2] == "mp4"){
            selectedMediaList.innerHTML += "<video  style=\"height: 10vw;\" src=\""+ window.location.origin +"/videos/"+ mediumData[1]+"."+mediumData[2]+ "\" controls></video>";
        }else{
            selectedMediaList.innerHTML += "<img class=\"rounded\" style=\"height: 10vw; object-fit: cover;\" src=\""+ window.location.origin +"/images/"+ mediumData[1]+"."+mediumData[2] + "\" alt=\"Card image cap\">";
        }
        selectedMediaForm.innerHTML += "<input name=\"media[]\" value=\""+mediumData[0]+"\" hidden>";
    }); 
    
    closeMediaLibrary();
}

function openMediaLibrary(){
    document.getElementById("media-library").style.setProperty("display", "block", "important");
    document.getElementById("media-library-background").style.setProperty("display", "block", "important");
}

function closeMediaLibrary(){
    for (const element of mediaCollection) {
        element.style.border = "";
    }
    selectedMedia = [];
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
            mediaLibraryTitle.innerHTML = "Afbeeldingen";
            break;
        case "video":
            image.style.setProperty("display", "none", "important");
            video.style.setProperty("display", "block", "important");
            audio.style.setProperty("display", "none", "important");
            mediaLibraryTitle.innerHTML = "Video's";
            break;
        case "audio":
            image.style.setProperty("display", "none", "important");
            video.style.setProperty("display", "none", "important");
            audio.style.setProperty("display", "block", "important");
            mediaLibraryTitle.innerHTML = "Audiofragmenten";
            break;
        default:
            break;
    }
}