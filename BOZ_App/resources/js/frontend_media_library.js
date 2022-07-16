let selectedMedia = [];
const closeEventTarget = new EventTarget();
let mediaCollection;
let imageNav = document.getElementById("imageNav");
let videoNav = document.getElementById("videoNav");
let audioNav = document.getElementById("audioNav");
let mediaLibraryTitleImage = document.getElementById("media-library-title-image");
let mediaLibraryTitleVideo = document.getElementById("media-library-title-video");
let mediaLibraryTitleAudio = document.getElementById("media-library-title-audio");
let mediaAddBtn = document.getElementById("mediaAddBtn");
let mediaAddToProject = document.getElementById("media-library-add-to-project");
let mediaDeleteFromLibrary = document.getElementById("media-library-delete");
let closeBtnCollection = document.getElementsByClassName("media-library-close");
let messageContainer = document.getElementById("message");
let imageContainer = document.getElementById("library-image");
let videoContainer = document.getElementById("library-video");
let audioContainer = document.getElementById("library-audio");

setEventListeners();

function setEventListeners(){
    imageNav.addEventListener('click', () =>{ navigate("image")});
    videoNav.addEventListener('click', () =>{ navigate("video")});
    audioNav.addEventListener('click', () =>{ navigate("audio")});
    for (const closeBtn of closeBtnCollection) {
        closeBtn.addEventListener('click', closeMediaLibrary);
    }
    mediaAddBtn.addEventListener('click', ()=>{ document.getElementById("fileInputLibrary").click(); });
    mediaAddToProject.addEventListener('click', setSelectedMediaList);
    mediaDeleteFromLibrary.addEventListener('click', deleteFromLibrary);
    document.getElementById("fileInputLibrary").addEventListener('change', addToLibrary);
}

function getAllMedia(){
    mediaCollection = document.getElementsByClassName("boz-media");
}

function setMediaSelectorListeners(){
    getAllMedia();
    for (const media of mediaCollection) {
        media.addEventListener('click', selectMedium);
    }
}

function selectMedium(event){
    for (const element of event.path) {
        if(element.hasAttribute('fld')){
            addToSelectedMedia(element);
            break;
        }
    }
}

function addToSelectedMedia(element){
    getAllMedia();
    for (const element of mediaCollection) {
        element.style.border = "";
    }

    selectedMedia.splice(0,1);
    selectedMedia.push(element.getAttribute('fld'));
    element.style.border = "solid 2px #347886";
}

function setBorderForSelectedMedia(){
    for (const medium of mediaCollection) {
        if(selectedMedia.includes(medium.getAttribute("fld"))){
            medium.style.border = "solid 2px #347886";
        }
    }
}

function fetchAll(){
    fetchImages();
    fetchAudio();
    fetchVideos();
}

export async function open(){
    selectedMedia = [];
    document.getElementById("media-library").style.setProperty("display", "block", "important");
    document.getElementById("media-library-background").style.setProperty("display", "block", "important");
    fetchAll();
    setMediaSelectorListeners();
    setLinks(await getLinkData("images"),"image");
}

export async function openWithPromise() {
    await open();

    await new Promise((resolve, reject) => {
        closeEventTarget.addEventListener('closeEvent', () => {
            resolve();
        })
    });

    return selectedMedia
}

function closeMediaLibrary(){
    getAllMedia();
    for (const element of mediaCollection) {
        element.style.border = "";
    }
    resetMessage();
    document.getElementById("media-library").style.setProperty("display", "none", "important");
    document.getElementById("media-library-background").style.setProperty("display", "none", "important");
}

function setMessage(message, type){
    messageContainer.classList.remove(...messageContainer.classList);
    if(type == "danger"){
        messageContainer.classList.add("bg-red-100");
        messageContainer.classList.add("border");
        messageContainer.classList.add("border-red-400");
        messageContainer.classList.add("text-red-700");
        messageContainer.classList.add("px-4");
        messageContainer.classList.add("py3");
        messageContainer.classList.add("rounded");
    }else{
        messageContainer.classList.add("bg-teal-100");
        messageContainer.classList.add("border");
        messageContainer.classList.add("border-teal-500");
        messageContainer.classList.add("text-teal-900");
        messageContainer.classList.add("px-4");
        messageContainer.classList.add("py3");
        messageContainer.classList.add("rounded");
    }

    messageContainer.innerHTML = message;
}

function setSelectedMediaList(){
    console.log(selectedMedia);
    closeEventTarget.dispatchEvent(new Event('closeEvent'));

    closeMediaLibrary();
}

function resetMessage(){
    messageContainer.classList.remove(...messageContainer.classList);
    messageContainer.innerHTML = "";
}

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
    fetchAll();
    let result = await response.json();
    if(result.response_code == 400){
        let firstError = result.errors[Object.keys(result.errors)[0]][0];
        setMessage(firstError, "danger");
    }else if(result.response_code == 200){
        setMessage(result.message, "success");
    }
    selectedMedia = [];
    setBorderForSelectedMedia();
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
    fetchAll();
    let result = await response.json();
    if(result.response_code == 400){
        let firstError = result.errors[Object.keys(result.errors)[0]][0];
        setMessage(firstError, "danger");
    }else if(result.response_code == 200){
        setMessage(result.message, "success");
    }
    selectedMedia = [];
}

async function fetchImages(url = null){
    let response;
    if(url){
        response = await fetch(url, {
            method: 'GET',
        });
    }else{
        response = await fetch("http://127.0.0.1:8000/api/media/images", {
            method: 'GET',
        });
    }
    let result = await response.json();
    imageContainer.innerHTML = "";
    for (const image of result.data.data) {
        let dom = "<div dusk=\"MediumSelect\" fld="+ image.id + ";"+ image.name +";"+ image.extension+" class=\"m-2 boz-media\" style=\"cursor:pointer; width: 15rem;\">"
        dom += "<img class=\"py-3 rounded\" style=\"height:10vw; object-fit: cover;\" src=" + window.location.origin +"/storage/images/"+ image.name+"." + image.extension +" alt=\"Card image cap\">";
        dom += "</div>"
        imageContainer.innerHTML += dom;
    }
    setMediaSelectorListeners();
    setBorderForSelectedMedia();
}

async function fetchVideos(url = null){
    let response;
    if(url){
        response = await fetch(url, {
            method: 'GET',
        });
    }else{
        response = await fetch("http://127.0.0.1:8000/api/media/videos", {
            method: 'GET',
        });
    }
    let result = await response.json();
    videoContainer.innerHTML = "";
    for (const video of result.data.data) {
        let dom = "<div fld="+ video.id + ";"+ video.name +";"+ video.extension+" class=\"m-2 boz-media\" style=\"cursor:pointer; width: 15rem;\">"
        dom += "<video  style=\"height: 10vw;\"  src=" + window.location.origin +"/storage/videos/"+ video.name+"." + video.extension +"  controls></video>";
        dom += "</div>"
        videoContainer.innerHTML += dom;
    }
    setMediaSelectorListeners();
    setBorderForSelectedMedia();
}

async function fetchAudio(url = null){
    let response;
    if(url){
        response = await fetch(url, {
            method: 'GET',
        });
    }else{
        response = await fetch("http://127.0.0.1:8000/api/media/audios", {
            method: 'GET',
        });
    }
    let result = await response.json();
    audioContainer.innerHTML = "";
    for (const audio of result.data.data) {
        let dom = "<div fld="+ audio.id + ";"+ audio.name +";"+ audio.extension+" class=\"m-2 boz-media\" style=\"cursor:pointer; width: 15rem;\">"
        dom += "<audio style=\"height: 3vw;\" src=" + window.location.origin +"/storage/audios/"+ audio.name+"." + audio.extension +"  controls></audio>";
        dom += "</div>"
        audioContainer.innerHTML += dom;
    }
    setMediaSelectorListeners();
    setBorderForSelectedMedia();
}

function setLinks(data, medium){
    let leftBtn = document.createElement("a");
    leftBtn.classList.add("p-2");
    leftBtn.innerHTML = "&laquo; Vorige";
    if(data.prev_page_url){
        leftBtn.style.cursor = "pointer";
        switch (medium) {
            case "image":
                leftBtn.addEventListener('click', async ()=>{
                    fetchImages(data.prev_page_url);
                    setLinks(await getLinkData("images", data.prev_page_url),"image");
                });
                break;
            case "video":
                leftBtn.addEventListener('click', async ()=>{
                    fetchVideos(data.prev_page_url);
                    setLinks(await getLinkData("videos", data.prev_page_url),"video");
                });
                break;
            case "audio":
                leftBtn.addEventListener('click', async ()=>{
                    fetchVideos(data.prev_page_url);
                    setLinks(await getLinkData("audios", data.prev_page_url),"audio");
                });
                break;
            default:
                break;
        }
    }else{
        leftBtn.style.textDecoration = "none";
        leftBtn.style.cursor = "default";
        leftBtn.style.color = "gray";
    }

    let rightBtn = document.createElement("a");
    rightBtn.classList.add("p-2");
    rightBtn.innerHTML = "Volgende &raquo;";
    if(data.next_page_url){
        rightBtn.style.cursor = "pointer";
        switch (medium) {
            case "image":
                rightBtn.addEventListener('click', async ()=>{
                    fetchImages(data.next_page_url);
                    setLinks(await getLinkData("images", data.next_page_url),"image");
                });
                break;
            case "video":
                rightBtn.addEventListener('click', async ()=>{
                    fetchVideos(data.next_page_url);
                    setLinks(await getLinkData("videos", data.next_page_url),"video");
                });
                break;
            case "audio":
                rightBtn.addEventListener('click', async ()=>{
                    fetchVideos(data.next_page_url);
                    setLinks(await getLinkData("audios", data.next_page_url),"audio");
                });
                break;
            default:
                break;
        }
    }else{
        rightBtn.style.textDecoration = "none";
        rightBtn.style.cursor = "default";
        rightBtn.style.color = "gray";
    }

    let linkContainer = document.getElementById("library-links");
    linkContainer.innerHTML = "";
    linkContainer.appendChild(leftBtn);
    linkContainer.appendChild(rightBtn);
}

async function getLinkData(medium, url = null){
    let response;
    if(url){
        response = await fetch(url, {method:"GET"});
    }else{
        response = await fetch("http://127.0.0.1:8000/api/media/" + medium, {method:"GET"});
    }
    let result = await response.json();
    return result.data;
}

async function navigate(location){
    fetchAll();
    switch (location) {
        case "image":
            imageContainer.style.setProperty("display", "flex", "important");
            videoContainer.style.setProperty("display", "none", "important");
            audioContainer.style.setProperty("display", "none", "important");
            mediaLibraryTitleImage.style.setProperty("display", "block", "important");
            mediaLibraryTitleVideo.style.setProperty("display", "none", "important");
            mediaLibraryTitleAudio.style.setProperty("display", "none", "important");
            setLinks(await getLinkData("images"),"image");
            break;
        case "video":
            imageContainer.style.setProperty("display", "none", "important");
            videoContainer.style.setProperty("display", "flex", "important");
            audioContainer.style.setProperty("display", "none", "important");
            mediaLibraryTitleImage.style.setProperty("display", "none", "important");
            mediaLibraryTitleVideo.style.setProperty("display", "block", "important");
            mediaLibraryTitleAudio.style.setProperty("display", "none", "important");
            setLinks(await getLinkData("videos"),"video");
            break;
        case "audio":
            imageContainer.style.setProperty("display", "none", "important");
            videoContainer.style.setProperty("display", "none", "important");
            audioContainer.style.setProperty("display", "flex", "important");
            mediaLibraryTitleImage.style.setProperty("display", "none", "important");
            mediaLibraryTitleVideo.style.setProperty("display", "none", "important");
            mediaLibraryTitleAudio.style.setProperty("display", "block", "important");
            setLinks(await getLinkData("audios"),"audio");
            break;
        default:
            break;
    }
}
