/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/@babel/runtime/regenerator/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/@babel/runtime/regenerator/index.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__(/*! regenerator-runtime */ "./node_modules/regenerator-runtime/runtime.js");


/***/ }),

/***/ "./resources/js/frontend_media_library.js":
/*!************************************************!*\
  !*** ./resources/js/frontend_media_library.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "open": () => (/* binding */ open),
/* harmony export */   "openWithPromise": () => (/* binding */ openWithPromise)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var selectedMedia = [];
var closeEventTarget = new EventTarget();
var mediaCollection;
var imageNav = document.getElementById("imageNav");
var videoNav = document.getElementById("videoNav");
var audioNav = document.getElementById("audioNav");
var mediaLibraryOpen = document.getElementById("media-library-open");
var mediaLibraryTitleImage = document.getElementById("media-library-title-image");
var mediaLibraryTitleVideo = document.getElementById("media-library-title-video");
var mediaLibraryTitleAudio = document.getElementById("media-library-title-audio");
var mediaAddBtn = document.getElementById("mediaAddBtn");
var mediaAddToProject = document.getElementById("media-library-add-to-project");
var mediaDeleteFromLibrary = document.getElementById("media-library-delete");
var closeBtnCollection = document.getElementsByClassName("media-library-close");
var messageContainer = document.getElementById("message");
var imageContainer = document.getElementById("library-image");
var videoContainer = document.getElementById("library-video");
var audioContainer = document.getElementById("library-audio");

if (mediaLibraryOpen) {
  setEventListeners();
}

function setEventListeners() {
  imageNav.addEventListener('click', function () {
    navigate("image");
  });
  videoNav.addEventListener('click', function () {
    navigate("video");
  });
  audioNav.addEventListener('click', function () {
    navigate("audio");
  });
  mediaLibraryOpen.addEventListener('click', open);

  var _iterator = _createForOfIteratorHelper(closeBtnCollection),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var closeBtn = _step.value;
      closeBtn.addEventListener('click', closeMediaLibrary);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }

  mediaAddBtn.addEventListener('click', function () {
    document.getElementById("fileInputLibrary").click();
  });
  mediaAddToProject.addEventListener('click', setSelectedMediaList);
  mediaDeleteFromLibrary.addEventListener('click', deleteFromLibrary);
  document.getElementById("fileInputLibrary").addEventListener('change', addToLibrary);
}

function getAllMedia() {
  mediaCollection = document.getElementsByClassName("boz-media");
}

function setMediaSelectorListeners() {
  getAllMedia();

  var _iterator2 = _createForOfIteratorHelper(mediaCollection),
      _step2;

  try {
    for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
      var media = _step2.value;
      media.addEventListener('click', selectMedium);
    }
  } catch (err) {
    _iterator2.e(err);
  } finally {
    _iterator2.f();
  }
}

function selectMedium(event) {
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
}

function addToSelectedMedia(element) {
  getAllMedia();

  var _iterator4 = _createForOfIteratorHelper(mediaCollection),
      _step4;

  try {
    for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
      var _element = _step4.value;
      _element.style.border = "";
    }
  } catch (err) {
    _iterator4.e(err);
  } finally {
    _iterator4.f();
  }

  selectedMedia.splice(0, 1);
  selectedMedia.push(element.getAttribute('fld'));
  element.style.border = "solid 2px #347886";
}

function setBorderForSelectedMedia() {
  var _iterator5 = _createForOfIteratorHelper(mediaCollection),
      _step5;

  try {
    for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
      var medium = _step5.value;

      if (selectedMedia.includes(medium.getAttribute("fld"))) {
        medium.style.border = "solid 2px #347886";
      }
    }
  } catch (err) {
    _iterator5.e(err);
  } finally {
    _iterator5.f();
  }
}

function fetchAll() {
  fetchImages();
  fetchAudio();
  fetchVideos();
}

function open() {
  return _open.apply(this, arguments);
}

function _open() {
  _open = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee7() {
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee7$(_context7) {
      while (1) {
        switch (_context7.prev = _context7.next) {
          case 0:
            selectedMedia = [];
            document.getElementById("media-library").style.setProperty("display", "block", "important");
            document.getElementById("media-library-background").style.setProperty("display", "block", "important");
            fetchAll();
            setMediaSelectorListeners();
            _context7.t0 = setLinks;
            _context7.next = 8;
            return getLinkData("images");

          case 8:
            _context7.t1 = _context7.sent;
            (0, _context7.t0)(_context7.t1, "image");

          case 10:
          case "end":
            return _context7.stop();
        }
      }
    }, _callee7);
  }));
  return _open.apply(this, arguments);
}

function openWithPromise() {
  return _openWithPromise.apply(this, arguments);
}

function _openWithPromise() {
  _openWithPromise = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee8() {
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee8$(_context8) {
      while (1) {
        switch (_context8.prev = _context8.next) {
          case 0:
            _context8.next = 2;
            return open();

          case 2:
            _context8.next = 4;
            return new Promise(function (resolve, reject) {
              closeEventTarget.addEventListener('closeEvent', function () {
                resolve();
              });
            });

          case 4:
            return _context8.abrupt("return", selectedMedia);

          case 5:
          case "end":
            return _context8.stop();
        }
      }
    }, _callee8);
  }));
  return _openWithPromise.apply(this, arguments);
}

function closeMediaLibrary() {
  getAllMedia();

  var _iterator6 = _createForOfIteratorHelper(mediaCollection),
      _step6;

  try {
    for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
      var element = _step6.value;
      element.style.border = "";
    }
  } catch (err) {
    _iterator6.e(err);
  } finally {
    _iterator6.f();
  }

  resetMessage();
  document.getElementById("media-library").style.setProperty("display", "none", "important");
  document.getElementById("media-library-background").style.setProperty("display", "none", "important");
}

function setMessage(message, type) {
  var _messageContainer$cla;

  (_messageContainer$cla = messageContainer.classList).remove.apply(_messageContainer$cla, _toConsumableArray(messageContainer.classList));

  if (type == "danger") {
    messageContainer.classList.add("bg-red-100");
    messageContainer.classList.add("border");
    messageContainer.classList.add("border-red-400");
    messageContainer.classList.add("text-red-700");
    messageContainer.classList.add("px-4");
    messageContainer.classList.add("py3");
    messageContainer.classList.add("rounded");
  } else {
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

function setSelectedMediaList() {
  console.log(selectedMedia);
  closeEventTarget.dispatchEvent(new Event('closeEvent'));
  closeMediaLibrary();
}

function resetMessage() {
  var _messageContainer$cla2;

  (_messageContainer$cla2 = messageContainer.classList).remove.apply(_messageContainer$cla2, _toConsumableArray(messageContainer.classList));

  messageContainer.innerHTML = "";
}

function deleteFromLibrary() {
  return _deleteFromLibrary.apply(this, arguments);
}

function _deleteFromLibrary() {
  _deleteFromLibrary = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee9() {
    var mediaIds, response, result, firstError;
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee9$(_context9) {
      while (1) {
        switch (_context9.prev = _context9.next) {
          case 0:
            mediaIds = new FormData();
            selectedMedia.forEach(function (medium) {
              var mediumData = medium.split(";");
              mediaIds.append("media[]", mediumData[0]);
            });
            _context9.next = 4;
            return fetch("http://127.0.0.1:8000/api/media/remove", {
              method: 'POST',
              body: mediaIds
            });

          case 4:
            response = _context9.sent;
            fetchAll();
            _context9.next = 8;
            return response.json();

          case 8:
            result = _context9.sent;

            if (result.response_code == 400) {
              firstError = result.errors[Object.keys(result.errors)[0]][0];
              setMessage(firstError, "danger");
            } else if (result.response_code == 200) {
              setMessage(result.message, "success");
            }

            selectedMedia = [];
            setBorderForSelectedMedia();

          case 12:
          case "end":
            return _context9.stop();
        }
      }
    }, _callee9);
  }));
  return _deleteFromLibrary.apply(this, arguments);
}

function addToLibrary() {
  return _addToLibrary.apply(this, arguments);
}

function _addToLibrary() {
  _addToLibrary = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee10() {
    var media, _iterator7, _step7, file, response, result, firstError;

    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee10$(_context10) {
      while (1) {
        switch (_context10.prev = _context10.next) {
          case 0:
            media = new FormData();
            _iterator7 = _createForOfIteratorHelper(document.getElementById("fileInputLibrary").files);

            try {
              for (_iterator7.s(); !(_step7 = _iterator7.n()).done;) {
                file = _step7.value;
                media.append("media[]", file);
              }
            } catch (err) {
              _iterator7.e(err);
            } finally {
              _iterator7.f();
            }

            _context10.next = 5;
            return fetch("http://127.0.0.1:8000/api/media/add", {
              method: 'POST',
              body: media
            });

          case 5:
            response = _context10.sent;
            fetchAll();
            _context10.next = 9;
            return response.json();

          case 9:
            result = _context10.sent;

            if (result.response_code == 400) {
              firstError = result.errors[Object.keys(result.errors)[0]][0];
              setMessage(firstError, "danger");
            } else if (result.response_code == 200) {
              setMessage(result.message, "success");
            }

            selectedMedia = [];

          case 12:
          case "end":
            return _context10.stop();
        }
      }
    }, _callee10);
  }));
  return _addToLibrary.apply(this, arguments);
}

function fetchImages() {
  return _fetchImages.apply(this, arguments);
}

function _fetchImages() {
  _fetchImages = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee11() {
    var url,
        response,
        result,
        _iterator8,
        _step8,
        image,
        dom,
        _args11 = arguments;

    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee11$(_context11) {
      while (1) {
        switch (_context11.prev = _context11.next) {
          case 0:
            url = _args11.length > 0 && _args11[0] !== undefined ? _args11[0] : null;

            if (!url) {
              _context11.next = 7;
              break;
            }

            _context11.next = 4;
            return fetch(url, {
              method: 'GET'
            });

          case 4:
            response = _context11.sent;
            _context11.next = 10;
            break;

          case 7:
            _context11.next = 9;
            return fetch("http://127.0.0.1:8000/api/media/images", {
              method: 'GET'
            });

          case 9:
            response = _context11.sent;

          case 10:
            _context11.next = 12;
            return response.json();

          case 12:
            result = _context11.sent;
            imageContainer.innerHTML = "";
            _iterator8 = _createForOfIteratorHelper(result.data.data);

            try {
              for (_iterator8.s(); !(_step8 = _iterator8.n()).done;) {
                image = _step8.value;
                dom = "<div dusk=\"MediumSelect\" fld=" + image.id + ";" + image.name + ";" + image.extension + " class=\"m-2 boz-media\" style=\"cursor:pointer; width: 15rem;\">";
                dom += "<img class=\"py-3 rounded\" style=\"height:10vw; object-fit: cover;\" src=" + window.location.origin + "/storage/images/" + image.name + "." + image.extension + " alt=\"Card image cap\">";
                dom += "</div>";
                imageContainer.innerHTML += dom;
              }
            } catch (err) {
              _iterator8.e(err);
            } finally {
              _iterator8.f();
            }

            setMediaSelectorListeners();
            setBorderForSelectedMedia();

          case 18:
          case "end":
            return _context11.stop();
        }
      }
    }, _callee11);
  }));
  return _fetchImages.apply(this, arguments);
}

function fetchVideos() {
  return _fetchVideos.apply(this, arguments);
}

function _fetchVideos() {
  _fetchVideos = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee12() {
    var url,
        response,
        result,
        _iterator9,
        _step9,
        video,
        dom,
        _args12 = arguments;

    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee12$(_context12) {
      while (1) {
        switch (_context12.prev = _context12.next) {
          case 0:
            url = _args12.length > 0 && _args12[0] !== undefined ? _args12[0] : null;

            if (!url) {
              _context12.next = 7;
              break;
            }

            _context12.next = 4;
            return fetch(url, {
              method: 'GET'
            });

          case 4:
            response = _context12.sent;
            _context12.next = 10;
            break;

          case 7:
            _context12.next = 9;
            return fetch("http://127.0.0.1:8000/api/media/videos", {
              method: 'GET'
            });

          case 9:
            response = _context12.sent;

          case 10:
            _context12.next = 12;
            return response.json();

          case 12:
            result = _context12.sent;
            videoContainer.innerHTML = "";
            _iterator9 = _createForOfIteratorHelper(result.data.data);

            try {
              for (_iterator9.s(); !(_step9 = _iterator9.n()).done;) {
                video = _step9.value;
                dom = "<div fld=" + video.id + ";" + video.name + ";" + video.extension + " class=\"m-2 boz-media\" style=\"cursor:pointer; width: 15rem;\">";
                dom += "<video  style=\"height: 10vw;\"  src=" + window.location.origin + "/storage/videos/" + video.name + "." + video.extension + "  controls></video>";
                dom += "</div>";
                videoContainer.innerHTML += dom;
              }
            } catch (err) {
              _iterator9.e(err);
            } finally {
              _iterator9.f();
            }

            setMediaSelectorListeners();
            setBorderForSelectedMedia();

          case 18:
          case "end":
            return _context12.stop();
        }
      }
    }, _callee12);
  }));
  return _fetchVideos.apply(this, arguments);
}

function fetchAudio() {
  return _fetchAudio.apply(this, arguments);
}

function _fetchAudio() {
  _fetchAudio = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee13() {
    var url,
        response,
        result,
        _iterator10,
        _step10,
        audio,
        dom,
        _args13 = arguments;

    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee13$(_context13) {
      while (1) {
        switch (_context13.prev = _context13.next) {
          case 0:
            url = _args13.length > 0 && _args13[0] !== undefined ? _args13[0] : null;

            if (!url) {
              _context13.next = 7;
              break;
            }

            _context13.next = 4;
            return fetch(url, {
              method: 'GET'
            });

          case 4:
            response = _context13.sent;
            _context13.next = 10;
            break;

          case 7:
            _context13.next = 9;
            return fetch("http://127.0.0.1:8000/api/media/audios", {
              method: 'GET'
            });

          case 9:
            response = _context13.sent;

          case 10:
            _context13.next = 12;
            return response.json();

          case 12:
            result = _context13.sent;
            audioContainer.innerHTML = "";
            _iterator10 = _createForOfIteratorHelper(result.data.data);

            try {
              for (_iterator10.s(); !(_step10 = _iterator10.n()).done;) {
                audio = _step10.value;
                dom = "<div fld=" + audio.id + ";" + audio.name + ";" + audio.extension + " class=\"m-2 boz-media\" style=\"cursor:pointer; width: 15rem;\">";
                dom += "<audio style=\"height: 3vw;\" src=" + window.location.origin + "/storage/audios/" + audio.name + "." + audio.extension + "  controls></audio>";
                dom += "</div>";
                audioContainer.innerHTML += dom;
              }
            } catch (err) {
              _iterator10.e(err);
            } finally {
              _iterator10.f();
            }

            setMediaSelectorListeners();
            setBorderForSelectedMedia();

          case 18:
          case "end":
            return _context13.stop();
        }
      }
    }, _callee13);
  }));
  return _fetchAudio.apply(this, arguments);
}

function setLinks(data, medium) {
  var leftBtn = document.createElement("a");
  leftBtn.classList.add("p-2");
  leftBtn.innerHTML = "&laquo; Vorige";

  if (data.prev_page_url) {
    leftBtn.style.cursor = "pointer";

    switch (medium) {
      case "image":
        leftBtn.addEventListener('click', /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
          return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
            while (1) {
              switch (_context.prev = _context.next) {
                case 0:
                  fetchImages(data.prev_page_url);
                  _context.t0 = setLinks;
                  _context.next = 4;
                  return getLinkData("images", data.prev_page_url);

                case 4:
                  _context.t1 = _context.sent;
                  (0, _context.t0)(_context.t1, "image");

                case 6:
                case "end":
                  return _context.stop();
              }
            }
          }, _callee);
        })));
        break;

      case "video":
        leftBtn.addEventListener('click', /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2() {
          return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
            while (1) {
              switch (_context2.prev = _context2.next) {
                case 0:
                  fetchVideos(data.prev_page_url);
                  _context2.t0 = setLinks;
                  _context2.next = 4;
                  return getLinkData("videos", data.prev_page_url);

                case 4:
                  _context2.t1 = _context2.sent;
                  (0, _context2.t0)(_context2.t1, "video");

                case 6:
                case "end":
                  return _context2.stop();
              }
            }
          }, _callee2);
        })));
        break;

      case "audio":
        leftBtn.addEventListener('click', /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee3() {
          return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee3$(_context3) {
            while (1) {
              switch (_context3.prev = _context3.next) {
                case 0:
                  fetchVideos(data.prev_page_url);
                  _context3.t0 = setLinks;
                  _context3.next = 4;
                  return getLinkData("audios", data.prev_page_url);

                case 4:
                  _context3.t1 = _context3.sent;
                  (0, _context3.t0)(_context3.t1, "audio");

                case 6:
                case "end":
                  return _context3.stop();
              }
            }
          }, _callee3);
        })));
        break;

      default:
        break;
    }
  } else {
    leftBtn.style.textDecoration = "none";
    leftBtn.style.cursor = "default";
    leftBtn.style.color = "gray";
  }

  var rightBtn = document.createElement("a");
  rightBtn.classList.add("p-2");
  rightBtn.innerHTML = "Volgende &raquo;";

  if (data.next_page_url) {
    rightBtn.style.cursor = "pointer";

    switch (medium) {
      case "image":
        rightBtn.addEventListener('click', /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee4() {
          return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee4$(_context4) {
            while (1) {
              switch (_context4.prev = _context4.next) {
                case 0:
                  fetchImages(data.next_page_url);
                  _context4.t0 = setLinks;
                  _context4.next = 4;
                  return getLinkData("images", data.next_page_url);

                case 4:
                  _context4.t1 = _context4.sent;
                  (0, _context4.t0)(_context4.t1, "image");

                case 6:
                case "end":
                  return _context4.stop();
              }
            }
          }, _callee4);
        })));
        break;

      case "video":
        rightBtn.addEventListener('click', /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee5() {
          return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee5$(_context5) {
            while (1) {
              switch (_context5.prev = _context5.next) {
                case 0:
                  fetchVideos(data.next_page_url);
                  _context5.t0 = setLinks;
                  _context5.next = 4;
                  return getLinkData("videos", data.next_page_url);

                case 4:
                  _context5.t1 = _context5.sent;
                  (0, _context5.t0)(_context5.t1, "video");

                case 6:
                case "end":
                  return _context5.stop();
              }
            }
          }, _callee5);
        })));
        break;

      case "audio":
        rightBtn.addEventListener('click', /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee6() {
          return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee6$(_context6) {
            while (1) {
              switch (_context6.prev = _context6.next) {
                case 0:
                  fetchVideos(data.next_page_url);
                  _context6.t0 = setLinks;
                  _context6.next = 4;
                  return getLinkData("audios", data.next_page_url);

                case 4:
                  _context6.t1 = _context6.sent;
                  (0, _context6.t0)(_context6.t1, "audio");

                case 6:
                case "end":
                  return _context6.stop();
              }
            }
          }, _callee6);
        })));
        break;

      default:
        break;
    }
  } else {
    rightBtn.style.textDecoration = "none";
    rightBtn.style.cursor = "default";
    rightBtn.style.color = "gray";
  }

  var linkContainer = document.getElementById("library-links");
  linkContainer.innerHTML = "";
  linkContainer.appendChild(leftBtn);
  linkContainer.appendChild(rightBtn);
}

function getLinkData(_x) {
  return _getLinkData.apply(this, arguments);
}

function _getLinkData() {
  _getLinkData = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee14(medium) {
    var url,
        response,
        result,
        _args14 = arguments;
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee14$(_context14) {
      while (1) {
        switch (_context14.prev = _context14.next) {
          case 0:
            url = _args14.length > 1 && _args14[1] !== undefined ? _args14[1] : null;

            if (!url) {
              _context14.next = 7;
              break;
            }

            _context14.next = 4;
            return fetch(url, {
              method: "GET"
            });

          case 4:
            response = _context14.sent;
            _context14.next = 10;
            break;

          case 7:
            _context14.next = 9;
            return fetch("http://127.0.0.1:8000/api/media/" + medium, {
              method: "GET"
            });

          case 9:
            response = _context14.sent;

          case 10:
            _context14.next = 12;
            return response.json();

          case 12:
            result = _context14.sent;
            return _context14.abrupt("return", result.data);

          case 14:
          case "end":
            return _context14.stop();
        }
      }
    }, _callee14);
  }));
  return _getLinkData.apply(this, arguments);
}

function navigate(_x2) {
  return _navigate.apply(this, arguments);
}

function _navigate() {
  _navigate = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee15(location) {
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee15$(_context15) {
      while (1) {
        switch (_context15.prev = _context15.next) {
          case 0:
            fetchAll();
            _context15.t0 = location;
            _context15.next = _context15.t0 === "image" ? 4 : _context15.t0 === "video" ? 16 : _context15.t0 === "audio" ? 28 : 40;
            break;

          case 4:
            imageContainer.style.setProperty("display", "flex", "important");
            videoContainer.style.setProperty("display", "none", "important");
            audioContainer.style.setProperty("display", "none", "important");
            mediaLibraryTitleImage.style.setProperty("display", "block", "important");
            mediaLibraryTitleVideo.style.setProperty("display", "none", "important");
            mediaLibraryTitleAudio.style.setProperty("display", "none", "important");
            _context15.t1 = setLinks;
            _context15.next = 13;
            return getLinkData("images");

          case 13:
            _context15.t2 = _context15.sent;
            (0, _context15.t1)(_context15.t2, "image");
            return _context15.abrupt("break", 41);

          case 16:
            imageContainer.style.setProperty("display", "none", "important");
            videoContainer.style.setProperty("display", "flex", "important");
            audioContainer.style.setProperty("display", "none", "important");
            mediaLibraryTitleImage.style.setProperty("display", "none", "important");
            mediaLibraryTitleVideo.style.setProperty("display", "block", "important");
            mediaLibraryTitleAudio.style.setProperty("display", "none", "important");
            _context15.t3 = setLinks;
            _context15.next = 25;
            return getLinkData("videos");

          case 25:
            _context15.t4 = _context15.sent;
            (0, _context15.t3)(_context15.t4, "video");
            return _context15.abrupt("break", 41);

          case 28:
            imageContainer.style.setProperty("display", "none", "important");
            videoContainer.style.setProperty("display", "none", "important");
            audioContainer.style.setProperty("display", "flex", "important");
            mediaLibraryTitleImage.style.setProperty("display", "none", "important");
            mediaLibraryTitleVideo.style.setProperty("display", "none", "important");
            mediaLibraryTitleAudio.style.setProperty("display", "block", "important");
            _context15.t5 = setLinks;
            _context15.next = 37;
            return getLinkData("audios");

          case 37:
            _context15.t6 = _context15.sent;
            (0, _context15.t5)(_context15.t6, "audio");
            return _context15.abrupt("break", 41);

          case 40:
            return _context15.abrupt("break", 41);

          case 41:
          case "end":
            return _context15.stop();
        }
      }
    }, _callee15);
  }));
  return _navigate.apply(this, arguments);
}

/***/ }),

/***/ "./node_modules/bootstrap/js/src/alert.js":
/*!************************************************!*\
  !*** ./node_modules/bootstrap/js/src/alert.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _util_index__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./util/index */ "./node_modules/bootstrap/js/src/util/index.js");
/* harmony import */ var _dom_event_handler__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./dom/event-handler */ "./node_modules/bootstrap/js/src/dom/event-handler.js");
/* harmony import */ var _base_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./base-component */ "./node_modules/bootstrap/js/src/base-component.js");
/* harmony import */ var _util_component_functions__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./util/component-functions */ "./node_modules/bootstrap/js/src/util/component-functions.js");
/**
 * --------------------------------------------------------------------------
 * Bootstrap (v5.1.3): alert.js
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */






/**
 * ------------------------------------------------------------------------
 * Constants
 * ------------------------------------------------------------------------
 */

const NAME = 'alert'
const DATA_KEY = 'bs.alert'
const EVENT_KEY = `.${DATA_KEY}`

const EVENT_CLOSE = `close${EVENT_KEY}`
const EVENT_CLOSED = `closed${EVENT_KEY}`
const CLASS_NAME_FADE = 'fade'
const CLASS_NAME_SHOW = 'show'

/**
 * ------------------------------------------------------------------------
 * Class Definition
 * ------------------------------------------------------------------------
 */

class Alert extends _base_component__WEBPACK_IMPORTED_MODULE_2__["default"] {
  // Getters

  static get NAME() {
    return NAME
  }

  // Public

  close() {
    const closeEvent = _dom_event_handler__WEBPACK_IMPORTED_MODULE_1__["default"].trigger(this._element, EVENT_CLOSE)

    if (closeEvent.defaultPrevented) {
      return
    }

    this._element.classList.remove(CLASS_NAME_SHOW)

    const isAnimated = this._element.classList.contains(CLASS_NAME_FADE)
    this._queueCallback(() => this._destroyElement(), this._element, isAnimated)
  }

  // Private
  _destroyElement() {
    this._element.remove()
    _dom_event_handler__WEBPACK_IMPORTED_MODULE_1__["default"].trigger(this._element, EVENT_CLOSED)
    this.dispose()
  }

  // Static

  static jQueryInterface(config) {
    return this.each(function () {
      const data = Alert.getOrCreateInstance(this)

      if (typeof config !== 'string') {
        return
      }

      if (data[config] === undefined || config.startsWith('_') || config === 'constructor') {
        throw new TypeError(`No method named "${config}"`)
      }

      data[config](this)
    })
  }
}

/**
 * ------------------------------------------------------------------------
 * Data Api implementation
 * ------------------------------------------------------------------------
 */

(0,_util_component_functions__WEBPACK_IMPORTED_MODULE_3__.enableDismissTrigger)(Alert, 'close')

/**
 * ------------------------------------------------------------------------
 * jQuery
 * ------------------------------------------------------------------------
 * add .Alert to jQuery only if jQuery is present
 */

;(0,_util_index__WEBPACK_IMPORTED_MODULE_0__.defineJQueryPlugin)(Alert)

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Alert);


/***/ }),

/***/ "./node_modules/bootstrap/js/src/base-component.js":
/*!*********************************************************!*\
  !*** ./node_modules/bootstrap/js/src/base-component.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _dom_data__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./dom/data */ "./node_modules/bootstrap/js/src/dom/data.js");
/* harmony import */ var _util_index__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./util/index */ "./node_modules/bootstrap/js/src/util/index.js");
/* harmony import */ var _dom_event_handler__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./dom/event-handler */ "./node_modules/bootstrap/js/src/dom/event-handler.js");
/**
 * --------------------------------------------------------------------------
 * Bootstrap (v5.1.3): base-component.js
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */





/**
 * ------------------------------------------------------------------------
 * Constants
 * ------------------------------------------------------------------------
 */

const VERSION = '5.1.3'

class BaseComponent {
  constructor(element) {
    element = (0,_util_index__WEBPACK_IMPORTED_MODULE_1__.getElement)(element)

    if (!element) {
      return
    }

    this._element = element
    _dom_data__WEBPACK_IMPORTED_MODULE_0__["default"].set(this._element, this.constructor.DATA_KEY, this)
  }

  dispose() {
    _dom_data__WEBPACK_IMPORTED_MODULE_0__["default"].remove(this._element, this.constructor.DATA_KEY)
    _dom_event_handler__WEBPACK_IMPORTED_MODULE_2__["default"].off(this._element, this.constructor.EVENT_KEY)

    Object.getOwnPropertyNames(this).forEach(propertyName => {
      this[propertyName] = null
    })
  }

  _queueCallback(callback, element, isAnimated = true) {
    (0,_util_index__WEBPACK_IMPORTED_MODULE_1__.executeAfterTransition)(callback, element, isAnimated)
  }

  /** Static */

  static getInstance(element) {
    return _dom_data__WEBPACK_IMPORTED_MODULE_0__["default"].get((0,_util_index__WEBPACK_IMPORTED_MODULE_1__.getElement)(element), this.DATA_KEY)
  }

  static getOrCreateInstance(element, config = {}) {
    return this.getInstance(element) || new this(element, typeof config === 'object' ? config : null)
  }

  static get VERSION() {
    return VERSION
  }

  static get NAME() {
    throw new Error('You have to implement the static method "NAME", for each component!')
  }

  static get DATA_KEY() {
    return `bs.${this.NAME}`
  }

  static get EVENT_KEY() {
    return `.${this.DATA_KEY}`
  }
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (BaseComponent);


/***/ }),

/***/ "./node_modules/bootstrap/js/src/dom/data.js":
/*!***************************************************!*\
  !*** ./node_modules/bootstrap/js/src/dom/data.js ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * --------------------------------------------------------------------------
 * Bootstrap (v5.1.3): dom/data.js
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */

/**
 * ------------------------------------------------------------------------
 * Constants
 * ------------------------------------------------------------------------
 */

const elementMap = new Map()

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  set(element, key, instance) {
    if (!elementMap.has(element)) {
      elementMap.set(element, new Map())
    }

    const instanceMap = elementMap.get(element)

    // make it clear we only want one instance per element
    // can be removed later when multiple key/instances are fine to be used
    if (!instanceMap.has(key) && instanceMap.size !== 0) {
      // eslint-disable-next-line no-console
      console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(instanceMap.keys())[0]}.`)
      return
    }

    instanceMap.set(key, instance)
  },

  get(element, key) {
    if (elementMap.has(element)) {
      return elementMap.get(element).get(key) || null
    }

    return null
  },

  remove(element, key) {
    if (!elementMap.has(element)) {
      return
    }

    const instanceMap = elementMap.get(element)

    instanceMap.delete(key)

    // free up element references if there are no instances left for an element
    if (instanceMap.size === 0) {
      elementMap.delete(element)
    }
  }
});


/***/ }),

/***/ "./node_modules/bootstrap/js/src/dom/event-handler.js":
/*!************************************************************!*\
  !*** ./node_modules/bootstrap/js/src/dom/event-handler.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _util_index__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../util/index */ "./node_modules/bootstrap/js/src/util/index.js");
/**
 * --------------------------------------------------------------------------
 * Bootstrap (v5.1.3): dom/event-handler.js
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */



/**
 * ------------------------------------------------------------------------
 * Constants
 * ------------------------------------------------------------------------
 */

const namespaceRegex = /[^.]*(?=\..*)\.|.*/
const stripNameRegex = /\..*/
const stripUidRegex = /::\d+$/
const eventRegistry = {} // Events storage
let uidEvent = 1
const customEvents = {
  mouseenter: 'mouseover',
  mouseleave: 'mouseout'
}
const customEventsRegex = /^(mouseenter|mouseleave)/i
const nativeEvents = new Set([
  'click',
  'dblclick',
  'mouseup',
  'mousedown',
  'contextmenu',
  'mousewheel',
  'DOMMouseScroll',
  'mouseover',
  'mouseout',
  'mousemove',
  'selectstart',
  'selectend',
  'keydown',
  'keypress',
  'keyup',
  'orientationchange',
  'touchstart',
  'touchmove',
  'touchend',
  'touchcancel',
  'pointerdown',
  'pointermove',
  'pointerup',
  'pointerleave',
  'pointercancel',
  'gesturestart',
  'gesturechange',
  'gestureend',
  'focus',
  'blur',
  'change',
  'reset',
  'select',
  'submit',
  'focusin',
  'focusout',
  'load',
  'unload',
  'beforeunload',
  'resize',
  'move',
  'DOMContentLoaded',
  'readystatechange',
  'error',
  'abort',
  'scroll'
])

/**
 * ------------------------------------------------------------------------
 * Private methods
 * ------------------------------------------------------------------------
 */

function getUidEvent(element, uid) {
  return (uid && `${uid}::${uidEvent++}`) || element.uidEvent || uidEvent++
}

function getEvent(element) {
  const uid = getUidEvent(element)

  element.uidEvent = uid
  eventRegistry[uid] = eventRegistry[uid] || {}

  return eventRegistry[uid]
}

function bootstrapHandler(element, fn) {
  return function handler(event) {
    event.delegateTarget = element

    if (handler.oneOff) {
      EventHandler.off(element, event.type, fn)
    }

    return fn.apply(element, [event])
  }
}

function bootstrapDelegationHandler(element, selector, fn) {
  return function handler(event) {
    const domElements = element.querySelectorAll(selector)

    for (let { target } = event; target && target !== this; target = target.parentNode) {
      for (let i = domElements.length; i--;) {
        if (domElements[i] === target) {
          event.delegateTarget = target

          if (handler.oneOff) {
            EventHandler.off(element, event.type, selector, fn)
          }

          return fn.apply(target, [event])
        }
      }
    }

    // To please ESLint
    return null
  }
}

function findHandler(events, handler, delegationSelector = null) {
  const uidEventList = Object.keys(events)

  for (let i = 0, len = uidEventList.length; i < len; i++) {
    const event = events[uidEventList[i]]

    if (event.originalHandler === handler && event.delegationSelector === delegationSelector) {
      return event
    }
  }

  return null
}

function normalizeParams(originalTypeEvent, handler, delegationFn) {
  const delegation = typeof handler === 'string'
  const originalHandler = delegation ? delegationFn : handler

  let typeEvent = getTypeEvent(originalTypeEvent)
  const isNative = nativeEvents.has(typeEvent)

  if (!isNative) {
    typeEvent = originalTypeEvent
  }

  return [delegation, originalHandler, typeEvent]
}

function addHandler(element, originalTypeEvent, handler, delegationFn, oneOff) {
  if (typeof originalTypeEvent !== 'string' || !element) {
    return
  }

  if (!handler) {
    handler = delegationFn
    delegationFn = null
  }

  // in case of mouseenter or mouseleave wrap the handler within a function that checks for its DOM position
  // this prevents the handler from being dispatched the same way as mouseover or mouseout does
  if (customEventsRegex.test(originalTypeEvent)) {
    const wrapFn = fn => {
      return function (event) {
        if (!event.relatedTarget || (event.relatedTarget !== event.delegateTarget && !event.delegateTarget.contains(event.relatedTarget))) {
          return fn.call(this, event)
        }
      }
    }

    if (delegationFn) {
      delegationFn = wrapFn(delegationFn)
    } else {
      handler = wrapFn(handler)
    }
  }

  const [delegation, originalHandler, typeEvent] = normalizeParams(originalTypeEvent, handler, delegationFn)
  const events = getEvent(element)
  const handlers = events[typeEvent] || (events[typeEvent] = {})
  const previousFn = findHandler(handlers, originalHandler, delegation ? handler : null)

  if (previousFn) {
    previousFn.oneOff = previousFn.oneOff && oneOff

    return
  }

  const uid = getUidEvent(originalHandler, originalTypeEvent.replace(namespaceRegex, ''))
  const fn = delegation ?
    bootstrapDelegationHandler(element, handler, delegationFn) :
    bootstrapHandler(element, handler)

  fn.delegationSelector = delegation ? handler : null
  fn.originalHandler = originalHandler
  fn.oneOff = oneOff
  fn.uidEvent = uid
  handlers[uid] = fn

  element.addEventListener(typeEvent, fn, delegation)
}

function removeHandler(element, events, typeEvent, handler, delegationSelector) {
  const fn = findHandler(events[typeEvent], handler, delegationSelector)

  if (!fn) {
    return
  }

  element.removeEventListener(typeEvent, fn, Boolean(delegationSelector))
  delete events[typeEvent][fn.uidEvent]
}

function removeNamespacedHandlers(element, events, typeEvent, namespace) {
  const storeElementEvent = events[typeEvent] || {}

  Object.keys(storeElementEvent).forEach(handlerKey => {
    if (handlerKey.includes(namespace)) {
      const event = storeElementEvent[handlerKey]

      removeHandler(element, events, typeEvent, event.originalHandler, event.delegationSelector)
    }
  })
}

function getTypeEvent(event) {
  // allow to get the native events from namespaced events ('click.bs.button' --> 'click')
  event = event.replace(stripNameRegex, '')
  return customEvents[event] || event
}

const EventHandler = {
  on(element, event, handler, delegationFn) {
    addHandler(element, event, handler, delegationFn, false)
  },

  one(element, event, handler, delegationFn) {
    addHandler(element, event, handler, delegationFn, true)
  },

  off(element, originalTypeEvent, handler, delegationFn) {
    if (typeof originalTypeEvent !== 'string' || !element) {
      return
    }

    const [delegation, originalHandler, typeEvent] = normalizeParams(originalTypeEvent, handler, delegationFn)
    const inNamespace = typeEvent !== originalTypeEvent
    const events = getEvent(element)
    const isNamespace = originalTypeEvent.startsWith('.')

    if (typeof originalHandler !== 'undefined') {
      // Simplest case: handler is passed, remove that listener ONLY.
      if (!events || !events[typeEvent]) {
        return
      }

      removeHandler(element, events, typeEvent, originalHandler, delegation ? handler : null)
      return
    }

    if (isNamespace) {
      Object.keys(events).forEach(elementEvent => {
        removeNamespacedHandlers(element, events, elementEvent, originalTypeEvent.slice(1))
      })
    }

    const storeElementEvent = events[typeEvent] || {}
    Object.keys(storeElementEvent).forEach(keyHandlers => {
      const handlerKey = keyHandlers.replace(stripUidRegex, '')

      if (!inNamespace || originalTypeEvent.includes(handlerKey)) {
        const event = storeElementEvent[keyHandlers]

        removeHandler(element, events, typeEvent, event.originalHandler, event.delegationSelector)
      }
    })
  },

  trigger(element, event, args) {
    if (typeof event !== 'string' || !element) {
      return null
    }

    const $ = (0,_util_index__WEBPACK_IMPORTED_MODULE_0__.getjQuery)()
    const typeEvent = getTypeEvent(event)
    const inNamespace = event !== typeEvent
    const isNative = nativeEvents.has(typeEvent)

    let jQueryEvent
    let bubbles = true
    let nativeDispatch = true
    let defaultPrevented = false
    let evt = null

    if (inNamespace && $) {
      jQueryEvent = $.Event(event, args)

      $(element).trigger(jQueryEvent)
      bubbles = !jQueryEvent.isPropagationStopped()
      nativeDispatch = !jQueryEvent.isImmediatePropagationStopped()
      defaultPrevented = jQueryEvent.isDefaultPrevented()
    }

    if (isNative) {
      evt = document.createEvent('HTMLEvents')
      evt.initEvent(typeEvent, bubbles, true)
    } else {
      evt = new CustomEvent(event, {
        bubbles,
        cancelable: true
      })
    }

    // merge custom information in our event
    if (typeof args !== 'undefined') {
      Object.keys(args).forEach(key => {
        Object.defineProperty(evt, key, {
          get() {
            return args[key]
          }
        })
      })
    }

    if (defaultPrevented) {
      evt.preventDefault()
    }

    if (nativeDispatch) {
      element.dispatchEvent(evt)
    }

    if (evt.defaultPrevented && typeof jQueryEvent !== 'undefined') {
      jQueryEvent.preventDefault()
    }

    return evt
  }
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (EventHandler);


/***/ }),

/***/ "./node_modules/bootstrap/js/src/util/component-functions.js":
/*!*******************************************************************!*\
  !*** ./node_modules/bootstrap/js/src/util/component-functions.js ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "enableDismissTrigger": () => (/* binding */ enableDismissTrigger)
/* harmony export */ });
/* harmony import */ var _dom_event_handler__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../dom/event-handler */ "./node_modules/bootstrap/js/src/dom/event-handler.js");
/* harmony import */ var _index__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index */ "./node_modules/bootstrap/js/src/util/index.js");
/**
 * --------------------------------------------------------------------------
 * Bootstrap (v5.1.3): util/component-functions.js
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */




const enableDismissTrigger = (component, method = 'hide') => {
  const clickEvent = `click.dismiss${component.EVENT_KEY}`
  const name = component.NAME

  _dom_event_handler__WEBPACK_IMPORTED_MODULE_0__["default"].on(document, clickEvent, `[data-bs-dismiss="${name}"]`, function (event) {
    if (['A', 'AREA'].includes(this.tagName)) {
      event.preventDefault()
    }

    if ((0,_index__WEBPACK_IMPORTED_MODULE_1__.isDisabled)(this)) {
      return
    }

    const target = (0,_index__WEBPACK_IMPORTED_MODULE_1__.getElementFromSelector)(this) || this.closest(`.${name}`)
    const instance = component.getOrCreateInstance(target)

    // Method argument is left, for Alert and only, as it doesn't implement the 'hide' method
    instance[method]()
  })
}




/***/ }),

/***/ "./node_modules/bootstrap/js/src/util/index.js":
/*!*****************************************************!*\
  !*** ./node_modules/bootstrap/js/src/util/index.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "getElement": () => (/* binding */ getElement),
/* harmony export */   "getUID": () => (/* binding */ getUID),
/* harmony export */   "getSelectorFromElement": () => (/* binding */ getSelectorFromElement),
/* harmony export */   "getElementFromSelector": () => (/* binding */ getElementFromSelector),
/* harmony export */   "getTransitionDurationFromElement": () => (/* binding */ getTransitionDurationFromElement),
/* harmony export */   "triggerTransitionEnd": () => (/* binding */ triggerTransitionEnd),
/* harmony export */   "isElement": () => (/* binding */ isElement),
/* harmony export */   "typeCheckConfig": () => (/* binding */ typeCheckConfig),
/* harmony export */   "isVisible": () => (/* binding */ isVisible),
/* harmony export */   "isDisabled": () => (/* binding */ isDisabled),
/* harmony export */   "findShadowRoot": () => (/* binding */ findShadowRoot),
/* harmony export */   "noop": () => (/* binding */ noop),
/* harmony export */   "getNextActiveElement": () => (/* binding */ getNextActiveElement),
/* harmony export */   "reflow": () => (/* binding */ reflow),
/* harmony export */   "getjQuery": () => (/* binding */ getjQuery),
/* harmony export */   "onDOMContentLoaded": () => (/* binding */ onDOMContentLoaded),
/* harmony export */   "isRTL": () => (/* binding */ isRTL),
/* harmony export */   "defineJQueryPlugin": () => (/* binding */ defineJQueryPlugin),
/* harmony export */   "execute": () => (/* binding */ execute),
/* harmony export */   "executeAfterTransition": () => (/* binding */ executeAfterTransition)
/* harmony export */ });
/**
 * --------------------------------------------------------------------------
 * Bootstrap (v5.1.3): util/index.js
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */

const MAX_UID = 1000000
const MILLISECONDS_MULTIPLIER = 1000
const TRANSITION_END = 'transitionend'

// Shoutout AngusCroll (https://goo.gl/pxwQGp)
const toType = obj => {
  if (obj === null || obj === undefined) {
    return `${obj}`
  }

  return {}.toString.call(obj).match(/\s([a-z]+)/i)[1].toLowerCase()
}

/**
 * --------------------------------------------------------------------------
 * Public Util Api
 * --------------------------------------------------------------------------
 */

const getUID = prefix => {
  do {
    prefix += Math.floor(Math.random() * MAX_UID)
  } while (document.getElementById(prefix))

  return prefix
}

const getSelector = element => {
  let selector = element.getAttribute('data-bs-target')

  if (!selector || selector === '#') {
    let hrefAttr = element.getAttribute('href')

    // The only valid content that could double as a selector are IDs or classes,
    // so everything starting with `#` or `.`. If a "real" URL is used as the selector,
    // `document.querySelector` will rightfully complain it is invalid.
    // See https://github.com/twbs/bootstrap/issues/32273
    if (!hrefAttr || (!hrefAttr.includes('#') && !hrefAttr.startsWith('.'))) {
      return null
    }

    // Just in case some CMS puts out a full URL with the anchor appended
    if (hrefAttr.includes('#') && !hrefAttr.startsWith('#')) {
      hrefAttr = `#${hrefAttr.split('#')[1]}`
    }

    selector = hrefAttr && hrefAttr !== '#' ? hrefAttr.trim() : null
  }

  return selector
}

const getSelectorFromElement = element => {
  const selector = getSelector(element)

  if (selector) {
    return document.querySelector(selector) ? selector : null
  }

  return null
}

const getElementFromSelector = element => {
  const selector = getSelector(element)

  return selector ? document.querySelector(selector) : null
}

const getTransitionDurationFromElement = element => {
  if (!element) {
    return 0
  }

  // Get transition-duration of the element
  let { transitionDuration, transitionDelay } = window.getComputedStyle(element)

  const floatTransitionDuration = Number.parseFloat(transitionDuration)
  const floatTransitionDelay = Number.parseFloat(transitionDelay)

  // Return 0 if element or transition duration is not found
  if (!floatTransitionDuration && !floatTransitionDelay) {
    return 0
  }

  // If multiple durations are defined, take the first
  transitionDuration = transitionDuration.split(',')[0]
  transitionDelay = transitionDelay.split(',')[0]

  return (Number.parseFloat(transitionDuration) + Number.parseFloat(transitionDelay)) * MILLISECONDS_MULTIPLIER
}

const triggerTransitionEnd = element => {
  element.dispatchEvent(new Event(TRANSITION_END))
}

const isElement = obj => {
  if (!obj || typeof obj !== 'object') {
    return false
  }

  if (typeof obj.jquery !== 'undefined') {
    obj = obj[0]
  }

  return typeof obj.nodeType !== 'undefined'
}

const getElement = obj => {
  if (isElement(obj)) { // it's a jQuery object or a node element
    return obj.jquery ? obj[0] : obj
  }

  if (typeof obj === 'string' && obj.length > 0) {
    return document.querySelector(obj)
  }

  return null
}

const typeCheckConfig = (componentName, config, configTypes) => {
  Object.keys(configTypes).forEach(property => {
    const expectedTypes = configTypes[property]
    const value = config[property]
    const valueType = value && isElement(value) ? 'element' : toType(value)

    if (!new RegExp(expectedTypes).test(valueType)) {
      throw new TypeError(
        `${componentName.toUpperCase()}: Option "${property}" provided type "${valueType}" but expected type "${expectedTypes}".`
      )
    }
  })
}

const isVisible = element => {
  if (!isElement(element) || element.getClientRects().length === 0) {
    return false
  }

  return getComputedStyle(element).getPropertyValue('visibility') === 'visible'
}

const isDisabled = element => {
  if (!element || element.nodeType !== Node.ELEMENT_NODE) {
    return true
  }

  if (element.classList.contains('disabled')) {
    return true
  }

  if (typeof element.disabled !== 'undefined') {
    return element.disabled
  }

  return element.hasAttribute('disabled') && element.getAttribute('disabled') !== 'false'
}

const findShadowRoot = element => {
  if (!document.documentElement.attachShadow) {
    return null
  }

  // Can find the shadow root otherwise it'll return the document
  if (typeof element.getRootNode === 'function') {
    const root = element.getRootNode()
    return root instanceof ShadowRoot ? root : null
  }

  if (element instanceof ShadowRoot) {
    return element
  }

  // when we don't find a shadow root
  if (!element.parentNode) {
    return null
  }

  return findShadowRoot(element.parentNode)
}

const noop = () => {}

/**
 * Trick to restart an element's animation
 *
 * @param {HTMLElement} element
 * @return void
 *
 * @see https://www.charistheo.io/blog/2021/02/restart-a-css-animation-with-javascript/#restarting-a-css-animation
 */
const reflow = element => {
  // eslint-disable-next-line no-unused-expressions
  element.offsetHeight
}

const getjQuery = () => {
  const { jQuery } = window

  if (jQuery && !document.body.hasAttribute('data-bs-no-jquery')) {
    return jQuery
  }

  return null
}

const DOMContentLoadedCallbacks = []

const onDOMContentLoaded = callback => {
  if (document.readyState === 'loading') {
    // add listener on the first call when the document is in loading state
    if (!DOMContentLoadedCallbacks.length) {
      document.addEventListener('DOMContentLoaded', () => {
        DOMContentLoadedCallbacks.forEach(callback => callback())
      })
    }

    DOMContentLoadedCallbacks.push(callback)
  } else {
    callback()
  }
}

const isRTL = () => document.documentElement.dir === 'rtl'

const defineJQueryPlugin = plugin => {
  onDOMContentLoaded(() => {
    const $ = getjQuery()
    /* istanbul ignore if */
    if ($) {
      const name = plugin.NAME
      const JQUERY_NO_CONFLICT = $.fn[name]
      $.fn[name] = plugin.jQueryInterface
      $.fn[name].Constructor = plugin
      $.fn[name].noConflict = () => {
        $.fn[name] = JQUERY_NO_CONFLICT
        return plugin.jQueryInterface
      }
    }
  })
}

const execute = callback => {
  if (typeof callback === 'function') {
    callback()
  }
}

const executeAfterTransition = (callback, transitionElement, waitForTransition = true) => {
  if (!waitForTransition) {
    execute(callback)
    return
  }

  const durationPadding = 5
  const emulatedDuration = getTransitionDurationFromElement(transitionElement) + durationPadding

  let called = false

  const handler = ({ target }) => {
    if (target !== transitionElement) {
      return
    }

    called = true
    transitionElement.removeEventListener(TRANSITION_END, handler)
    execute(callback)
  }

  transitionElement.addEventListener(TRANSITION_END, handler)
  setTimeout(() => {
    if (!called) {
      triggerTransitionEnd(transitionElement)
    }
  }, emulatedDuration)
}

/**
 * Return the previous/next element of a list.
 *
 * @param {array} list    The list of elements
 * @param activeElement   The active element
 * @param shouldGetNext   Choose to get next or previous element
 * @param isCycleAllowed
 * @return {Element|elem} The proper element
 */
const getNextActiveElement = (list, activeElement, shouldGetNext, isCycleAllowed) => {
  let index = list.indexOf(activeElement)

  // if the element does not exist in the list return an element depending on the direction and if cycle is allowed
  if (index === -1) {
    return list[!shouldGetNext && isCycleAllowed ? list.length - 1 : 0]
  }

  const listLength = list.length

  index += shouldGetNext ? 1 : -1

  if (isCycleAllowed) {
    index = (index + listLength) % listLength
  }

  return list[Math.max(0, Math.min(index, listLength - 1))]
}




/***/ }),

/***/ "./node_modules/regenerator-runtime/runtime.js":
/*!*****************************************************!*\
  !*** ./node_modules/regenerator-runtime/runtime.js ***!
  \*****************************************************/
/***/ ((module) => {

/**
 * Copyright (c) 2014-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

var runtime = (function (exports) {
  "use strict";

  var Op = Object.prototype;
  var hasOwn = Op.hasOwnProperty;
  var undefined; // More compressible than void 0.
  var $Symbol = typeof Symbol === "function" ? Symbol : {};
  var iteratorSymbol = $Symbol.iterator || "@@iterator";
  var asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator";
  var toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag";

  function define(obj, key, value) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
    return obj[key];
  }
  try {
    // IE 8 has a broken Object.defineProperty that only works on DOM objects.
    define({}, "");
  } catch (err) {
    define = function(obj, key, value) {
      return obj[key] = value;
    };
  }

  function wrap(innerFn, outerFn, self, tryLocsList) {
    // If outerFn provided and outerFn.prototype is a Generator, then outerFn.prototype instanceof Generator.
    var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator;
    var generator = Object.create(protoGenerator.prototype);
    var context = new Context(tryLocsList || []);

    // The ._invoke method unifies the implementations of the .next,
    // .throw, and .return methods.
    generator._invoke = makeInvokeMethod(innerFn, self, context);

    return generator;
  }
  exports.wrap = wrap;

  // Try/catch helper to minimize deoptimizations. Returns a completion
  // record like context.tryEntries[i].completion. This interface could
  // have been (and was previously) designed to take a closure to be
  // invoked without arguments, but in all the cases we care about we
  // already have an existing method we want to call, so there's no need
  // to create a new function object. We can even get away with assuming
  // the method takes exactly one argument, since that happens to be true
  // in every case, so we don't have to touch the arguments object. The
  // only additional allocation required is the completion record, which
  // has a stable shape and so hopefully should be cheap to allocate.
  function tryCatch(fn, obj, arg) {
    try {
      return { type: "normal", arg: fn.call(obj, arg) };
    } catch (err) {
      return { type: "throw", arg: err };
    }
  }

  var GenStateSuspendedStart = "suspendedStart";
  var GenStateSuspendedYield = "suspendedYield";
  var GenStateExecuting = "executing";
  var GenStateCompleted = "completed";

  // Returning this object from the innerFn has the same effect as
  // breaking out of the dispatch switch statement.
  var ContinueSentinel = {};

  // Dummy constructor functions that we use as the .constructor and
  // .constructor.prototype properties for functions that return Generator
  // objects. For full spec compliance, you may wish to configure your
  // minifier not to mangle the names of these two functions.
  function Generator() {}
  function GeneratorFunction() {}
  function GeneratorFunctionPrototype() {}

  // This is a polyfill for %IteratorPrototype% for environments that
  // don't natively support it.
  var IteratorPrototype = {};
  define(IteratorPrototype, iteratorSymbol, function () {
    return this;
  });

  var getProto = Object.getPrototypeOf;
  var NativeIteratorPrototype = getProto && getProto(getProto(values([])));
  if (NativeIteratorPrototype &&
      NativeIteratorPrototype !== Op &&
      hasOwn.call(NativeIteratorPrototype, iteratorSymbol)) {
    // This environment has a native %IteratorPrototype%; use it instead
    // of the polyfill.
    IteratorPrototype = NativeIteratorPrototype;
  }

  var Gp = GeneratorFunctionPrototype.prototype =
    Generator.prototype = Object.create(IteratorPrototype);
  GeneratorFunction.prototype = GeneratorFunctionPrototype;
  define(Gp, "constructor", GeneratorFunctionPrototype);
  define(GeneratorFunctionPrototype, "constructor", GeneratorFunction);
  GeneratorFunction.displayName = define(
    GeneratorFunctionPrototype,
    toStringTagSymbol,
    "GeneratorFunction"
  );

  // Helper for defining the .next, .throw, and .return methods of the
  // Iterator interface in terms of a single ._invoke method.
  function defineIteratorMethods(prototype) {
    ["next", "throw", "return"].forEach(function(method) {
      define(prototype, method, function(arg) {
        return this._invoke(method, arg);
      });
    });
  }

  exports.isGeneratorFunction = function(genFun) {
    var ctor = typeof genFun === "function" && genFun.constructor;
    return ctor
      ? ctor === GeneratorFunction ||
        // For the native GeneratorFunction constructor, the best we can
        // do is to check its .name property.
        (ctor.displayName || ctor.name) === "GeneratorFunction"
      : false;
  };

  exports.mark = function(genFun) {
    if (Object.setPrototypeOf) {
      Object.setPrototypeOf(genFun, GeneratorFunctionPrototype);
    } else {
      genFun.__proto__ = GeneratorFunctionPrototype;
      define(genFun, toStringTagSymbol, "GeneratorFunction");
    }
    genFun.prototype = Object.create(Gp);
    return genFun;
  };

  // Within the body of any async function, `await x` is transformed to
  // `yield regeneratorRuntime.awrap(x)`, so that the runtime can test
  // `hasOwn.call(value, "__await")` to determine if the yielded value is
  // meant to be awaited.
  exports.awrap = function(arg) {
    return { __await: arg };
  };

  function AsyncIterator(generator, PromiseImpl) {
    function invoke(method, arg, resolve, reject) {
      var record = tryCatch(generator[method], generator, arg);
      if (record.type === "throw") {
        reject(record.arg);
      } else {
        var result = record.arg;
        var value = result.value;
        if (value &&
            typeof value === "object" &&
            hasOwn.call(value, "__await")) {
          return PromiseImpl.resolve(value.__await).then(function(value) {
            invoke("next", value, resolve, reject);
          }, function(err) {
            invoke("throw", err, resolve, reject);
          });
        }

        return PromiseImpl.resolve(value).then(function(unwrapped) {
          // When a yielded Promise is resolved, its final value becomes
          // the .value of the Promise<{value,done}> result for the
          // current iteration.
          result.value = unwrapped;
          resolve(result);
        }, function(error) {
          // If a rejected Promise was yielded, throw the rejection back
          // into the async generator function so it can be handled there.
          return invoke("throw", error, resolve, reject);
        });
      }
    }

    var previousPromise;

    function enqueue(method, arg) {
      function callInvokeWithMethodAndArg() {
        return new PromiseImpl(function(resolve, reject) {
          invoke(method, arg, resolve, reject);
        });
      }

      return previousPromise =
        // If enqueue has been called before, then we want to wait until
        // all previous Promises have been resolved before calling invoke,
        // so that results are always delivered in the correct order. If
        // enqueue has not been called before, then it is important to
        // call invoke immediately, without waiting on a callback to fire,
        // so that the async generator function has the opportunity to do
        // any necessary setup in a predictable way. This predictability
        // is why the Promise constructor synchronously invokes its
        // executor callback, and why async functions synchronously
        // execute code before the first await. Since we implement simple
        // async functions in terms of async generators, it is especially
        // important to get this right, even though it requires care.
        previousPromise ? previousPromise.then(
          callInvokeWithMethodAndArg,
          // Avoid propagating failures to Promises returned by later
          // invocations of the iterator.
          callInvokeWithMethodAndArg
        ) : callInvokeWithMethodAndArg();
    }

    // Define the unified helper method that is used to implement .next,
    // .throw, and .return (see defineIteratorMethods).
    this._invoke = enqueue;
  }

  defineIteratorMethods(AsyncIterator.prototype);
  define(AsyncIterator.prototype, asyncIteratorSymbol, function () {
    return this;
  });
  exports.AsyncIterator = AsyncIterator;

  // Note that simple async functions are implemented on top of
  // AsyncIterator objects; they just return a Promise for the value of
  // the final result produced by the iterator.
  exports.async = function(innerFn, outerFn, self, tryLocsList, PromiseImpl) {
    if (PromiseImpl === void 0) PromiseImpl = Promise;

    var iter = new AsyncIterator(
      wrap(innerFn, outerFn, self, tryLocsList),
      PromiseImpl
    );

    return exports.isGeneratorFunction(outerFn)
      ? iter // If outerFn is a generator, return the full iterator.
      : iter.next().then(function(result) {
          return result.done ? result.value : iter.next();
        });
  };

  function makeInvokeMethod(innerFn, self, context) {
    var state = GenStateSuspendedStart;

    return function invoke(method, arg) {
      if (state === GenStateExecuting) {
        throw new Error("Generator is already running");
      }

      if (state === GenStateCompleted) {
        if (method === "throw") {
          throw arg;
        }

        // Be forgiving, per 25.3.3.3.3 of the spec:
        // https://people.mozilla.org/~jorendorff/es6-draft.html#sec-generatorresume
        return doneResult();
      }

      context.method = method;
      context.arg = arg;

      while (true) {
        var delegate = context.delegate;
        if (delegate) {
          var delegateResult = maybeInvokeDelegate(delegate, context);
          if (delegateResult) {
            if (delegateResult === ContinueSentinel) continue;
            return delegateResult;
          }
        }

        if (context.method === "next") {
          // Setting context._sent for legacy support of Babel's
          // function.sent implementation.
          context.sent = context._sent = context.arg;

        } else if (context.method === "throw") {
          if (state === GenStateSuspendedStart) {
            state = GenStateCompleted;
            throw context.arg;
          }

          context.dispatchException(context.arg);

        } else if (context.method === "return") {
          context.abrupt("return", context.arg);
        }

        state = GenStateExecuting;

        var record = tryCatch(innerFn, self, context);
        if (record.type === "normal") {
          // If an exception is thrown from innerFn, we leave state ===
          // GenStateExecuting and loop back for another invocation.
          state = context.done
            ? GenStateCompleted
            : GenStateSuspendedYield;

          if (record.arg === ContinueSentinel) {
            continue;
          }

          return {
            value: record.arg,
            done: context.done
          };

        } else if (record.type === "throw") {
          state = GenStateCompleted;
          // Dispatch the exception by looping back around to the
          // context.dispatchException(context.arg) call above.
          context.method = "throw";
          context.arg = record.arg;
        }
      }
    };
  }

  // Call delegate.iterator[context.method](context.arg) and handle the
  // result, either by returning a { value, done } result from the
  // delegate iterator, or by modifying context.method and context.arg,
  // setting context.delegate to null, and returning the ContinueSentinel.
  function maybeInvokeDelegate(delegate, context) {
    var method = delegate.iterator[context.method];
    if (method === undefined) {
      // A .throw or .return when the delegate iterator has no .throw
      // method always terminates the yield* loop.
      context.delegate = null;

      if (context.method === "throw") {
        // Note: ["return"] must be used for ES3 parsing compatibility.
        if (delegate.iterator["return"]) {
          // If the delegate iterator has a return method, give it a
          // chance to clean up.
          context.method = "return";
          context.arg = undefined;
          maybeInvokeDelegate(delegate, context);

          if (context.method === "throw") {
            // If maybeInvokeDelegate(context) changed context.method from
            // "return" to "throw", let that override the TypeError below.
            return ContinueSentinel;
          }
        }

        context.method = "throw";
        context.arg = new TypeError(
          "The iterator does not provide a 'throw' method");
      }

      return ContinueSentinel;
    }

    var record = tryCatch(method, delegate.iterator, context.arg);

    if (record.type === "throw") {
      context.method = "throw";
      context.arg = record.arg;
      context.delegate = null;
      return ContinueSentinel;
    }

    var info = record.arg;

    if (! info) {
      context.method = "throw";
      context.arg = new TypeError("iterator result is not an object");
      context.delegate = null;
      return ContinueSentinel;
    }

    if (info.done) {
      // Assign the result of the finished delegate to the temporary
      // variable specified by delegate.resultName (see delegateYield).
      context[delegate.resultName] = info.value;

      // Resume execution at the desired location (see delegateYield).
      context.next = delegate.nextLoc;

      // If context.method was "throw" but the delegate handled the
      // exception, let the outer generator proceed normally. If
      // context.method was "next", forget context.arg since it has been
      // "consumed" by the delegate iterator. If context.method was
      // "return", allow the original .return call to continue in the
      // outer generator.
      if (context.method !== "return") {
        context.method = "next";
        context.arg = undefined;
      }

    } else {
      // Re-yield the result returned by the delegate method.
      return info;
    }

    // The delegate iterator is finished, so forget it and continue with
    // the outer generator.
    context.delegate = null;
    return ContinueSentinel;
  }

  // Define Generator.prototype.{next,throw,return} in terms of the
  // unified ._invoke helper method.
  defineIteratorMethods(Gp);

  define(Gp, toStringTagSymbol, "Generator");

  // A Generator should always return itself as the iterator object when the
  // @@iterator function is called on it. Some browsers' implementations of the
  // iterator prototype chain incorrectly implement this, causing the Generator
  // object to not be returned from this call. This ensures that doesn't happen.
  // See https://github.com/facebook/regenerator/issues/274 for more details.
  define(Gp, iteratorSymbol, function() {
    return this;
  });

  define(Gp, "toString", function() {
    return "[object Generator]";
  });

  function pushTryEntry(locs) {
    var entry = { tryLoc: locs[0] };

    if (1 in locs) {
      entry.catchLoc = locs[1];
    }

    if (2 in locs) {
      entry.finallyLoc = locs[2];
      entry.afterLoc = locs[3];
    }

    this.tryEntries.push(entry);
  }

  function resetTryEntry(entry) {
    var record = entry.completion || {};
    record.type = "normal";
    delete record.arg;
    entry.completion = record;
  }

  function Context(tryLocsList) {
    // The root entry object (effectively a try statement without a catch
    // or a finally block) gives us a place to store values thrown from
    // locations where there is no enclosing try statement.
    this.tryEntries = [{ tryLoc: "root" }];
    tryLocsList.forEach(pushTryEntry, this);
    this.reset(true);
  }

  exports.keys = function(object) {
    var keys = [];
    for (var key in object) {
      keys.push(key);
    }
    keys.reverse();

    // Rather than returning an object with a next method, we keep
    // things simple and return the next function itself.
    return function next() {
      while (keys.length) {
        var key = keys.pop();
        if (key in object) {
          next.value = key;
          next.done = false;
          return next;
        }
      }

      // To avoid creating an additional object, we just hang the .value
      // and .done properties off the next function object itself. This
      // also ensures that the minifier will not anonymize the function.
      next.done = true;
      return next;
    };
  };

  function values(iterable) {
    if (iterable) {
      var iteratorMethod = iterable[iteratorSymbol];
      if (iteratorMethod) {
        return iteratorMethod.call(iterable);
      }

      if (typeof iterable.next === "function") {
        return iterable;
      }

      if (!isNaN(iterable.length)) {
        var i = -1, next = function next() {
          while (++i < iterable.length) {
            if (hasOwn.call(iterable, i)) {
              next.value = iterable[i];
              next.done = false;
              return next;
            }
          }

          next.value = undefined;
          next.done = true;

          return next;
        };

        return next.next = next;
      }
    }

    // Return an iterator with no values.
    return { next: doneResult };
  }
  exports.values = values;

  function doneResult() {
    return { value: undefined, done: true };
  }

  Context.prototype = {
    constructor: Context,

    reset: function(skipTempReset) {
      this.prev = 0;
      this.next = 0;
      // Resetting context._sent for legacy support of Babel's
      // function.sent implementation.
      this.sent = this._sent = undefined;
      this.done = false;
      this.delegate = null;

      this.method = "next";
      this.arg = undefined;

      this.tryEntries.forEach(resetTryEntry);

      if (!skipTempReset) {
        for (var name in this) {
          // Not sure about the optimal order of these conditions:
          if (name.charAt(0) === "t" &&
              hasOwn.call(this, name) &&
              !isNaN(+name.slice(1))) {
            this[name] = undefined;
          }
        }
      }
    },

    stop: function() {
      this.done = true;

      var rootEntry = this.tryEntries[0];
      var rootRecord = rootEntry.completion;
      if (rootRecord.type === "throw") {
        throw rootRecord.arg;
      }

      return this.rval;
    },

    dispatchException: function(exception) {
      if (this.done) {
        throw exception;
      }

      var context = this;
      function handle(loc, caught) {
        record.type = "throw";
        record.arg = exception;
        context.next = loc;

        if (caught) {
          // If the dispatched exception was caught by a catch block,
          // then let that catch block handle the exception normally.
          context.method = "next";
          context.arg = undefined;
        }

        return !! caught;
      }

      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        var record = entry.completion;

        if (entry.tryLoc === "root") {
          // Exception thrown outside of any try block that could handle
          // it, so set the completion value of the entire function to
          // throw the exception.
          return handle("end");
        }

        if (entry.tryLoc <= this.prev) {
          var hasCatch = hasOwn.call(entry, "catchLoc");
          var hasFinally = hasOwn.call(entry, "finallyLoc");

          if (hasCatch && hasFinally) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            } else if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else if (hasCatch) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            }

          } else if (hasFinally) {
            if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else {
            throw new Error("try statement without catch or finally");
          }
        }
      }
    },

    abrupt: function(type, arg) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc <= this.prev &&
            hasOwn.call(entry, "finallyLoc") &&
            this.prev < entry.finallyLoc) {
          var finallyEntry = entry;
          break;
        }
      }

      if (finallyEntry &&
          (type === "break" ||
           type === "continue") &&
          finallyEntry.tryLoc <= arg &&
          arg <= finallyEntry.finallyLoc) {
        // Ignore the finally entry if control is not jumping to a
        // location outside the try/catch block.
        finallyEntry = null;
      }

      var record = finallyEntry ? finallyEntry.completion : {};
      record.type = type;
      record.arg = arg;

      if (finallyEntry) {
        this.method = "next";
        this.next = finallyEntry.finallyLoc;
        return ContinueSentinel;
      }

      return this.complete(record);
    },

    complete: function(record, afterLoc) {
      if (record.type === "throw") {
        throw record.arg;
      }

      if (record.type === "break" ||
          record.type === "continue") {
        this.next = record.arg;
      } else if (record.type === "return") {
        this.rval = this.arg = record.arg;
        this.method = "return";
        this.next = "end";
      } else if (record.type === "normal" && afterLoc) {
        this.next = afterLoc;
      }

      return ContinueSentinel;
    },

    finish: function(finallyLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.finallyLoc === finallyLoc) {
          this.complete(entry.completion, entry.afterLoc);
          resetTryEntry(entry);
          return ContinueSentinel;
        }
      }
    },

    "catch": function(tryLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc === tryLoc) {
          var record = entry.completion;
          if (record.type === "throw") {
            var thrown = record.arg;
            resetTryEntry(entry);
          }
          return thrown;
        }
      }

      // The context.catch method must only be called with a location
      // argument that corresponds to a known catch block.
      throw new Error("illegal catch attempt");
    },

    delegateYield: function(iterable, resultName, nextLoc) {
      this.delegate = {
        iterator: values(iterable),
        resultName: resultName,
        nextLoc: nextLoc
      };

      if (this.method === "next") {
        // Deliberately forget the last sent value so that we don't
        // accidentally pass it on to the delegate.
        this.arg = undefined;
      }

      return ContinueSentinel;
    }
  };

  // Regardless of whether this script is executing as a CommonJS module
  // or not, return the runtime object so that we can declare the variable
  // regeneratorRuntime in the outer scope, which allows this module to be
  // injected easily by `bin/regenerator --include-runtime script.js`.
  return exports;

}(
  // If this script is executing as a CommonJS module, use module.exports
  // as the regeneratorRuntime namespace. Otherwise create a new empty
  // object. Either way, the resulting object will be used to initialize
  // the regeneratorRuntime variable at the top of this file.
   true ? module.exports : 0
));

try {
  regeneratorRuntime = runtime;
} catch (accidentalStrictMode) {
  // This module should not be running in strict mode, so the above
  // assignment should always work unless something is misconfigured. Just
  // in case runtime.js accidentally runs in strict mode, in modern engines
  // we can explicitly access globalThis. In older engines we can escape
  // strict mode using a global Function call. This could conceivably fail
  // if a Content Security Policy forbids using Function, but in that case
  // the proper solution is to fix the accidental strict mode problem. If
  // you've misconfigured your bundler to force strict mode and applied a
  // CSP to forbid Function, and you're not willing to fix either of those
  // problems, please detail your unique predicament in a GitHub issue.
  if (typeof globalThis === "object") {
    globalThis.regeneratorRuntime = runtime;
  } else {
    Function("r", "regeneratorRuntime = r")(runtime);
  }
}


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!**********************************!*\
  !*** ./resources/js/about-us.js ***!
  \**********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _frontend_media_library__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./frontend_media_library */ "./resources/js/frontend_media_library.js");
/* harmony import */ var bootstrap_js_src_alert__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! bootstrap/js/src/alert */ "./node_modules/bootstrap/js/src/alert.js");


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }



var textArea = document.querySelector("textarea");
FroalaEditor.DefineIcon('insertImgIcon', {
  NAME: 'image',
  template: 'font_awesome_5'
});
FroalaEditor.RegisterCommand('insertMediaFromLib', {
  title: 'Insert Media',
  icon: 'insertImgIcon',
  focus: true,
  undo: true,
  refreshAfterCallback: true,
  callback: function () {
    var _callback = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
      var _this = this;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              console.log(this);
              this.selection.save();
              console.log(this.cursor);
              _context.next = 5;
              return (0,_frontend_media_library__WEBPACK_IMPORTED_MODULE_1__.openWithPromise)().then(function (result) {
                _this.selection.restore();

                result.forEach(function (medium) {
                  var element = createMediumElement(medium);

                  _this.html.insert(element);
                });
              });

            case 5:
            case "end":
              return _context.stop();
          }
        }
      }, _callee, this);
    }));

    function callback() {
      return _callback.apply(this, arguments);
    }

    return callback;
  }()
});

function createMediumElement(medium) {
  var mediumData = medium.split(";");

  if (mediumData[2] === "mp3") {
    return "<audio style=\"height: 3vw;\" src=\"" + window.location.origin + "/storage/audios/" + mediumData[1] + "." + mediumData[2] + "\" controls></audio>";
  } else if (mediumData[2] === "mp4") {
    return "<video style=\"height: 10vw;\" src=\"" + window.location.origin + "/storage/videos/" + mediumData[1] + "." + mediumData[2] + "\" controls></video>";
  } else {
    return "<img class=\"rounded-md\" style=\"height: auto; max-width: 50%; object-fit: cover;\" src=\"" + window.location.origin + "/storage/images/" + mediumData[1] + "." + mediumData[2] + "\" alt=\"Card image cap\">";
  }
}

var editor = new FroalaEditor('#' + textArea.id, {
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
var editButton = document.querySelector("button[editbutton='true']");
editButton.addEventListener('click', function (e) {
  e.preventDefault();
  toggleElements("#input-container");
  toggleElements('button[editbutton=\'true\']');
  toggleElements('button[savebutton=\'true\']');
  toggleElements('#content-container');
});

function toggleElements(querySelector) {
  var elements = document.querySelectorAll(querySelector);
  elements.forEach(function (el) {
    return el.classList.toggle('hidden');
  });
}
})();

/******/ })()
;