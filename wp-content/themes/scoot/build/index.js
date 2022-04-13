/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/Header.js":
/*!*******************************!*\
  !*** ./src/modules/Header.js ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ Header; }
/* harmony export */ });
class Header {
  constructor() {
    this.previousScrollPosition;
    this.events();
  }

  events() {
    document.addEventListener("scroll", this.handleScroll);
  }

  handleScroll() {
    const tolerance = 96;
    const scrollPosition = window.scrollY;

    if (scrollPosition > tolerance && scrollPosition > this.previousScrollPosition) {
      document.body.classList.add("header-hidden");
    } else {
      document.body.classList.remove("header-hidden");
    }

    this.previousScrollPosition = scrollPosition;
  }

}

/***/ }),

/***/ "./src/modules/Navigation.js":
/*!***********************************!*\
  !*** ./src/modules/Navigation.js ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ Navigation; }
/* harmony export */ });
class Navigation {
  constructor() {
    this.toggleButton = document.querySelector(".header__toggle");
    this.navigation = document.querySelector(".header__links");
    this.events();
  }

  events() {
    this.toggleButton.addEventListener("click", () => this.handleToggle());
  }

  handleToggle() {
    if (this.toggleButton.getAttribute("aria-expanded") === "true") {
      this.closeNavigation();
    } else {
      this.openNavigation();
    }
  }

  openNavigation() {
    window.addEventListener("resize", () => this.closeNavigation());
    this.toggleButton.setAttribute("aria-expanded", "true");
    document.body.classList.add("nav-open");
  }

  closeNavigation() {
    window.removeEventListener("resize", () => this.closeNavigation());
    this.toggleButton.setAttribute("aria-expanded", "false");
    document.body.classList.remove("nav-open");
  }

}

/***/ }),

/***/ "./src/modules/Question.js":
/*!*********************************!*\
  !*** ./src/modules/Question.js ***!
  \*********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ Question; }
/* harmony export */ });
class Question {
  constructor() {
    this.headers = document.querySelectorAll(".question__header");
    this.events();
  }

  events() {
    this.headers.forEach(header => {
      header.addEventListener("click", event => this.handleToggle(event));
    });
  }

  handleToggle(event) {
    const question = event.currentTarget.parentElement;
    question.classList.toggle("question--open");
  }

}

/***/ }),

/***/ "./scss/index.scss":
/*!*************************!*\
  !*** ./scss/index.scss ***!
  \*************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


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
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_index_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/index.scss */ "./scss/index.scss");
/* harmony import */ var _modules_Navigation__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/Navigation */ "./src/modules/Navigation.js");
/* harmony import */ var _modules_Header__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/Header */ "./src/modules/Header.js");
/* harmony import */ var _modules_Question__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/Question */ "./src/modules/Question.js");




const navigation = new _modules_Navigation__WEBPACK_IMPORTED_MODULE_1__["default"]();
const header = new _modules_Header__WEBPACK_IMPORTED_MODULE_2__["default"]();
const question = new _modules_Question__WEBPACK_IMPORTED_MODULE_3__["default"]();
}();
/******/ })()
;
//# sourceMappingURL=index.js.map