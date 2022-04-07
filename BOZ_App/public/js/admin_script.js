/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/admin_script.js ***!
  \**************************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var mediaLibraryOpen = document.getElementById("media-library-open");
var mediaLibraryCloseCollection = document.getElementsByClassName("media-library-close");
var mediaCollection = document.getElementsByClassName("boz-media");
var mediaLibraryTitle = document.getElementById("media-library-title"); // let setMediaForm = document.getElementById("setMediaForm");

var imageNav = document.getElementById("imageNav");
var videoNav = document.getElementById("videoNav");
var audioNav = document.getElementById("audioNav");
var selectedMedia = [];
imageNav.addEventListener('click', function () {
  navigate("image");
});
videoNav.addEventListener('click', function () {
  navigate("video");
});
audioNav.addEventListener('click', function () {
  navigate("audio");
});
mediaLibraryOpen.addEventListener('click', openMediaLibrary);

var _iterator = _createForOfIteratorHelper(mediaLibraryCloseCollection),
    _step;

try {
  for (_iterator.s(); !(_step = _iterator.n()).done;) {
    var mediaLibraryClose = _step.value;
    mediaLibraryClose.addEventListener('click', closeMediaLibrary);
  }
} catch (err) {
  _iterator.e(err);
} finally {
  _iterator.f();
}

var _iterator2 = _createForOfIteratorHelper(mediaCollection),
    _step2;

try {
  for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
    var media = _step2.value;
    media.addEventListener('click', selectMedia);
  }
} catch (err) {
  _iterator2.e(err);
} finally {
  _iterator2.f();
}

mediaLibraryTitle.addEventListener('click', setSelectedMediaForm);

function selectMedia(event) {
  var _iterator3 = _createForOfIteratorHelper(event.path),
      _step3;

  try {
    for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
      var element = _step3.value;

      if (element.hasAttribute('fld')) {
        addToSelectedMedia(element);
        break;
      }
    }
  } catch (err) {
    _iterator3.e(err);
  } finally {
    _iterator3.f();
  }

  console.log(selectedMedia);
}

function addToSelectedMedia(element) {
  if (selectedMedia.includes(element.getAttribute('fld'))) {
    selectedMedia.splice(selectedMedia.indexOf(element.getAttribute('fld')), 1);
    element.style.border = "";
  } else {
    selectedMedia.push(element.getAttribute('fld'));
    element.style.border = "solid 2px #347886";
  }
}

function setSelectedMediaForm() {
  selectedMedia.forEach(function (medium) {
    var selectedMediaForm = document.getElementById("selectedMediaForm");
    var selectedMediaList = document.getElementById("selectedMediaList");
    var mediumData = medium.split(";");

    if (mediumData[2] == "mp3") {
      selectedMediaList.innerHTML += "<audio style=\"height: 3vw;\" src=\"" + window.location.origin + "/audioFragments/" + mediumData[1] + "." + mediumData[2] + "\" controls></audio>";
    } else if (mediumData[2] == "mp4") {
      selectedMediaList.innerHTML += "<video  style=\"height: 10vw;\" src=\"" + window.location.origin + "/videos/" + mediumData[1] + "." + mediumData[2] + "\" controls></video>";
    } else {
      selectedMediaList.innerHTML += "<img class=\"rounded\" style=\"height: 10vw; object-fit: cover;\" src=\"" + window.location.origin + "/images/" + mediumData[1] + "." + mediumData[2] + "\" alt=\"Card image cap\">";
    }

    selectedMediaForm.innerHTML += "<input name=\"media[]\" value=\"" + mediumData[0] + "\" hidden>";
  });
  closeMediaLibrary();
}

function openMediaLibrary() {
  document.getElementById("media-library").style.setProperty("display", "block", "important");
  document.getElementById("media-library-background").style.setProperty("display", "block", "important");
}

function closeMediaLibrary() {
  var _iterator4 = _createForOfIteratorHelper(mediaCollection),
      _step4;

  try {
    for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
      var element = _step4.value;
      element.style.border = "";
    }
  } catch (err) {
    _iterator4.e(err);
  } finally {
    _iterator4.f();
  }

  selectedMedia = [];
  document.getElementById("media-library").style.setProperty("display", "none", "important");
  document.getElementById("media-library-background").style.setProperty("display", "none", "important");
}

function navigate(location) {
  var image = document.getElementById("library-image");
  var video = document.getElementById("library-video");
  var audio = document.getElementById("library-audio");

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
/******/ })()
;