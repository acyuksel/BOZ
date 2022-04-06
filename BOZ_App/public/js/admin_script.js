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
var imageNav = document.getElementById("imageNav");
var videoNav = document.getElementById("videoNav");
var audioNav = document.getElementById("audioNav");
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

function openMediaLibrary() {
  document.getElementById("media-library").style.setProperty("display", "block", "important");
  document.getElementById("media-library-background").style.setProperty("display", "block", "important");
}

function closeMediaLibrary() {
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
/******/ })()
;