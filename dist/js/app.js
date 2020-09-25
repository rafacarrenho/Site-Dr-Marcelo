/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./dist/js/main/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./dist/css/scss/styles.scss":
/*!***********************************!*\
  !*** ./dist/css/scss/styles.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./dist/css/scss/styles.scss?");

/***/ }),

/***/ "./dist/js/main/app.js":
/*!*****************************!*\
  !*** ./dist/js/main/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*------------------------*\\\n    OWL CAROUSEL\n\\*------------------------*/\n$(\".owl-clinica\").owlCarousel({\n  autoplay: false,\n  autoplayTimeout: 6000,\n  loop: true,\n  margin: 10,\n  responsiveClass: true,\n  dots: true,\n  nav: false,\n  navContainerClass: \"owl-nav\",\n  navClass: [\"owl-prev\", \"owl-next\"],\n  responsive: {\n    0: {\n      items: 1\n    },\n    960: {\n      items: 3\n    }\n  }\n});\n/*------------------------*\\\n    OWL Doutor\n\\*------------------------*/\n\n$(\".owl-doutor\").owlCarousel({\n  autoplay: false,\n  autoplayTimeout: 6000,\n  loop: true,\n  margin: 10,\n  responsiveClass: true,\n  dots: true,\n  nav: false,\n  navContainerClass: \"owl-nav\",\n  navClass: [\"owl-prev\", \"owl-next\"],\n  responsive: {\n    0: {\n      items: 1\n    },\n    960: {\n      items: 3\n    }\n  }\n});\n/*------------------------*\\\n    OWL CAROUSEL\n\\*------------------------*/\n\n$(\".owl-icons\").owlCarousel({\n  autoplay: true,\n  autoplayTimeout: 6000,\n  loop: true,\n  margin: 10,\n  responsiveClass: true,\n  dots: true,\n  nav: false,\n  navContainerClass: \"owl-nav\",\n  navClass: [\"owl-prev\", \"owl-next\"],\n  responsive: {\n    0: {\n      items: 2\n    },\n    662: {\n      items: 3\n    },\n    960: {\n      items: 4\n    }\n  }\n});\n/*------------------------*\\\n    OWL CAROUSEL\n\\*------------------------*/\n\n$(\".tumor-carousel\").owlCarousel({\n  autoplay: true,\n  autoplayTimeout: 6000,\n  loop: true,\n  margin: 10,\n  responsiveClass: true,\n  dots: true,\n  nav: false,\n  navContainerClass: \"owl-nav\",\n  navClass: [\"owl-prev\", \"owl-next\"],\n  responsive: {\n    0: {\n      items: 2\n    },\n    662: {\n      items: 3\n    },\n    960: {\n      items: 6\n    }\n  }\n});\n/*------------------------*\\\n    Deslizar suavemente ao Scroll\n\\*------------------------*/\n// Somente para LP\n// $(\"nav .menu-deslizante a, footer a.nav-link\").click(function (e) {\n//   // $(\".navbar-toggler\").click();\n//   e.preventDefault();\n//   var id = $(this).attr(\"href\"),\n//     targetOffSet = $(id).offset().top;\n//   /* menuHeight = $('nav').innerHeight(); */\n//   $(\"html, body\").animate(\n//     {\n//       scrollTop: targetOffSet,\n//     },\n//     700\n//   );\n// });\n\n$(\"h5.btn-agende-agora\").click(function (e) {\n  e.preventDefault();\n  var id = $(\"#banner\"),\n      targetOffSet = $(id).offset().top;\n  /* menuHeight = $('nav').innerHeight(); */\n\n  $(\"html, body\").animate({\n    scrollTop: targetOffSet\n  }, 700);\n});\n/*------------------------*\\\n  #MODAL-GALERIA\n\\*------------------------*/\n\n$(\"#clinicaAbout figure\").click(function () {\n  var modalImg = document.getElementById(\"img\");\n  $(\"#modal-galeria\").fadeToggle();\n  var bg = $(this).find(\"img\").attr(\"src\");\n  modalImg.src = bg;\n});\n$(\"#modal-galeria\").click(function () {\n  $(\"#modal-galeria\").fadeToggle();\n});\n/*------------------------*\\\n  #MODAL-Doutor\n\\*------------------------*/\n\n$(\".owl-doutor button\").click(function () {\n  var modalImg = document.querySelector(\"#modal-doutor figure img\");\n  var modalTitulo = document.querySelector(\"#modal-doutor h2\");\n  var modalCurriculo = document.querySelector(\"#modal-doutor .modal-curriculo\");\n  $(\"#modal-doutor\").fadeToggle();\n  var fotoDoutor = $(this).parent().find(\"img\").attr(\"src\");\n  var nomeDoutor = $(this).parent().find(\"h2\").html();\n  var curriculoDoutor = $(this).parent().find(\".curriculo-doutor\").html();\n  modalImg.src = fotoDoutor;\n  modalTitulo.innerHTML = nomeDoutor;\n  modalCurriculo.innerHTML = curriculoDoutor;\n});\n$(\"#modal-doutor span.close\").click(function () {\n  $(\"#modal-doutor\").fadeOut();\n});\n$(\"#modal-doutor\").click(function (e) {\n  if (!(e.target !== this)) {\n    $(\"#modal-doutor\").fadeOut();\n  }\n});\n/*------------------------*\\\n  #Formulario TOP\n\\*------------------------*/\n\n$(\".form-row input, .form-row textarea\").change(function () {\n  if ($(this).val()) {\n    $(this).closest(\".form-row\").addClass(\"active\");\n  } else {\n    $(this).closest(\".form-row\").removeClass(\"active\");\n  }\n});\n\n//# sourceURL=webpack:///./dist/js/main/app.js?");

/***/ }),

/***/ "./dist/js/main/main.js":
/*!******************************!*\
  !*** ./dist/js/main/main.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _css_scss_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../css/scss/styles.scss */ \"./dist/css/scss/styles.scss\");\n/* harmony import */ var _css_scss_styles_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_scss_styles_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _app_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./app.js */ \"./dist/js/main/app.js\");\n/* harmony import */ var _app_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_app_js__WEBPACK_IMPORTED_MODULE_1__);\n\n\n\n//# sourceURL=webpack:///./dist/js/main/main.js?");

/***/ })

/******/ });