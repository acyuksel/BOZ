let mediaLibraryOpen = document.getElementById("media-library-open");
let mediaLibraryCloseCollection = document.getElementsByClassName("media-library-close");
let mediaLibraryTitle = document.getElementById("media-library-title");
let mediaAddBtn = document.getElementById("mediaAddBtn");
let mediaAddToProject = document.getElementById("media-library-add-to-project");
let mediaDeleteFromLibrary = document.getElementById("media-library-delete");

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

function setEventListeners(){
    let mediaCollection = document.getElementsByClassName("boz-media");
    for (const media of mediaCollection) {
        media.addEventListener('click', selectMedia);
    }
}
setEventListeners();

mediaAddBtn.addEventListener('click', openExplorer);
mediaAddToProject.addEventListener('click', setSelectedMediaForm);
mediaDeleteFromLibrary.addEventListener('click', deleteFromLibrary);

document.getElementById("fileInputLibrary").addEventListener('change', addToLibrary);

async function deleteFromLibrary(){
    
    const mediaIds = new FormData();
    selectedMedia.forEach(medium => {
        let mediumData = medium.split(";");
        mediaIds.append("media[]",mediumData[0]);
    });

    const response = await fetch("http://127.0.0.1:8000/api/media/remove", {
        method: 'POST',
        body: mediaIds,
    });
    fetchImages();
}

async function fetchImages(){
    const response = await fetch("http://127.0.0.1:8000/api/media/images", {
        method: 'GET',
    });
    let result = await response.json();
    let imageContainer = document.getElementById("library-image");
    imageContainer.innerHTML = "";
    for (const image of result.data.data) {
        let dom = "<div fld="+ image.id + ";"+ image.name +";"+ image.extension+" class=\"m-2 card boz-media\" style=\"cursor:pointer; width: 15rem;\">"
        dom += "<img class=\"py-3 rounded\" style=\"height:10vw; object-fit: cover;\" src=" + window.location.origin +"/storage/images/"+ image.name+"." + image.extension +" alt=\"Card image cap\">";
        dom += "</div>"
        imageContainer.innerHTML += dom;
    }
    selectedMedia = [];
    setEventListeners();
}

async function addToLibrary(){
    let media = new FormData();
    for (const file of document.getElementById("fileInputLibrary").files) {
        media.append("media[]",file);
    }

    const response = await fetch("http://127.0.0.1:8000/api/media/add", {
        method: 'POST',
        body: media,
    });
    fetchImages();
}

function openExplorer(){
    document.getElementById("fileInputLibrary").click();
}

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
            selectedMediaList.innerHTML += "<audio style=\"height: 3vw;\" src=\""+ window.location.origin +"/storage/audioFragments/"+ mediumData[1]+"."+mediumData[2]+ "\" controls></audio>";
        }else if(mediumData[2] == "mp4"){
            selectedMediaList.innerHTML += "<video  style=\"height: 10vw;\" src=\""+ window.location.origin +"/storage/videos/"+ mediumData[1]+"."+mediumData[2]+ "\" controls></video>";
        }else{
            selectedMediaList.innerHTML += "<img class=\"rounded\" style=\"height: 10vw; object-fit: cover;\" src=\""+ window.location.origin +"/storage/images/"+ mediumData[1]+"."+mediumData[2] + "\" alt=\"Card image cap\">";
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
    let mediaCollection = document.getElementsByClassName("boz-media");
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
            fetchImages();
            image.style.setProperty("display", "flex", "important");
            video.style.setProperty("display", "none", "important");
            audio.style.setProperty("display", "none", "important");
            mediaLibraryTitle.innerHTML = "Afbeeldingen";
            break;
        case "video":
            image.style.setProperty("display", "none", "important");
            video.style.setProperty("display", "flex", "important");
            audio.style.setProperty("display", "none", "important");
            mediaLibraryTitle.innerHTML = "Video's";
            break;
        case "audio":
            image.style.setProperty("display", "none", "important");
            video.style.setProperty("display", "none", "important");
            audio.style.setProperty("display", "flex", "important");
            mediaLibraryTitle.innerHTML = "Audiofragmenten";
            break;
        default:
            break;
    }
}