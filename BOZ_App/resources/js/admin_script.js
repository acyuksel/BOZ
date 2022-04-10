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
    fetchAudio();
    fetchVideos();
    let result = await response.json();
    if(result.response_code == 400){
        let firstError = result.errors[Object.keys(result.errors)[0]][0];
        setMessage(firstError, "danger");
    }else if(result.response_code == 200){
        setMessage(result.message, "success");
    }
}

function setMessage(message, type){
    let messageContainer = document.getElementById("message");
    messageContainer.classList.remove(...messageContainer.classList);
    messageContainer.classList.add("alert");
    messageContainer.classList.add("alert-" + type);
    messageContainer.innerHTML = message;
}

function resetMessage(){
    let messageContainer = document.getElementById("message");
    messageContainer.classList.remove(...messageContainer.classList);
    messageContainer.innerHTML = "";
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

async function fetchVideos(){
    const response = await fetch("http://127.0.0.1:8000/api/media/videos", {
        method: 'GET',
    });
    let result = await response.json();
    let videoContainer = document.getElementById("library-video");
    videoContainer.innerHTML = "";
    for (const video of result.data.data) {
        let dom = "<div fld="+ video.id + ";"+ video.name +";"+ video.extension+" class=\"m-2 card boz-media\" style=\"cursor:pointer; width: 15rem;\">"
        dom += "<video  style=\"height: 10vw;\"  src=" + window.location.origin +"/storage/videos/"+ video.name+"." + video.extension +"  controls></video>";
        dom += "</div>"
        videoContainer.innerHTML += dom;
    }
    selectedMedia = [];
    setEventListeners();
}

async function fetchAudio(){
    const response = await fetch("http://127.0.0.1:8000/api/media/audios", {
        method: 'GET',
    });
    let result = await response.json();
    let audioContainer = document.getElementById("library-audio");
    audioContainer.innerHTML = "";
    for (const audio of result.data.data) {
        let dom = "<div fld="+ audio.id + ";"+ audio.name +";"+ audio.extension+" class=\"m-2 card boz-media\" style=\"cursor:pointer; width: 15rem;\">"
        dom += "<audio style=\"height: 3vw;\" src=" + window.location.origin +"/storage/audios/"+ audio.name+"." + audio.extension +"  controls></audio>";
        dom += "</div>"
        audioContainer.innerHTML += dom;
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
    fetchAudio();
    fetchVideos();
    let result = await response.json();
    if(result.response_code == 400){
        let firstError = result.errors[Object.keys(result.errors)[0]][0];
        setMessage(firstError, "danger");
    }else if(result.response_code == 200){
        setMessage(result.message, "success");
    }
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
            selectedMediaList.innerHTML += "<audio style=\"height: 3vw;\" src=\""+ window.location.origin +"/storage/audios/"+ mediumData[1]+"."+mediumData[2]+ "\" controls></audio>";
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
    fetchImages();
    fetchAudio();
    fetchVideos();
}

function closeMediaLibrary(){
    let mediaCollection = document.getElementsByClassName("boz-media");
    for (const element of mediaCollection) {
        element.style.border = "";
    }
    selectedMedia = [];
    resetMessage();
    document.getElementById("media-library").style.setProperty("display", "none", "important");
    document.getElementById("media-library-background").style.setProperty("display", "none", "important");
}

function navigate(location){
    let image = document.getElementById("library-image");
    let video = document.getElementById("library-video");
    let audio = document.getElementById("library-audio");
    switch (location) {
        case "image":
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