/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/slider.js":
/*!********************************!*\
  !*** ./resources/js/slider.js ***!
  \********************************/
/***/ (() => {

eval("var slider = document.querySelector('.slider');\nvar slides = document.querySelectorAll('.slide');\nvar currentIndex = 0;\nfunction showSlide(index) {\n  var newPosition = -index * 100 + '%';\n  slider.style.transform = 'translateX(' + newPosition + ')';\n}\nfunction nextSlide() {\n  currentIndex = (currentIndex + 1) % slides.length;\n  showSlide(currentIndex);\n}\nsetInterval(nextSlide, 3000); ////# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2xpZGVyLmpzIiwibmFtZXMiOlsic2xpZGVyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwic2xpZGVzIiwicXVlcnlTZWxlY3RvckFsbCIsImN1cnJlbnRJbmRleCIsInNob3dTbGlkZSIsImluZGV4IiwibmV3UG9zaXRpb24iLCJzdHlsZSIsInRyYW5zZm9ybSIsIm5leHRTbGlkZSIsImxlbmd0aCIsInNldEludGVydmFsIl0sInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2xpZGVyLmpzPzkwMmEiXSwic291cmNlc0NvbnRlbnQiOlsiY29uc3Qgc2xpZGVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNsaWRlcicpO1xyXG5jb25zdCBzbGlkZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuc2xpZGUnKTtcclxuXHJcbmxldCBjdXJyZW50SW5kZXggPSAwO1xyXG5cclxuZnVuY3Rpb24gc2hvd1NsaWRlKGluZGV4KSB7XHJcbiAgICBjb25zdCBuZXdQb3NpdGlvbiA9IC1pbmRleCAqIDEwMCArICclJztcclxuICAgIHNsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSAndHJhbnNsYXRlWCgnICsgbmV3UG9zaXRpb24gKyAnKSc7XHJcbn1cclxuXHJcbmZ1bmN0aW9uIG5leHRTbGlkZSgpIHtcclxuICAgIGN1cnJlbnRJbmRleCA9IChjdXJyZW50SW5kZXggKyAxKSAlIHNsaWRlcy5sZW5ndGg7XHJcbiAgICBzaG93U2xpZGUoY3VycmVudEluZGV4KTtcclxufVxyXG5cclxuc2V0SW50ZXJ2YWwobmV4dFNsaWRlLCAzMDAwKTsgLy8gIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFNQSxNQUFNLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLFNBQVMsQ0FBQztBQUNoRCxJQUFNQyxNQUFNLEdBQUdGLFFBQVEsQ0FBQ0csZ0JBQWdCLENBQUMsUUFBUSxDQUFDO0FBRWxELElBQUlDLFlBQVksR0FBRyxDQUFDO0FBRXBCLFNBQVNDLFNBQVNBLENBQUNDLEtBQUssRUFBRTtFQUN0QixJQUFNQyxXQUFXLEdBQUcsQ0FBQ0QsS0FBSyxHQUFHLEdBQUcsR0FBRyxHQUFHO0VBQ3RDUCxNQUFNLENBQUNTLEtBQUssQ0FBQ0MsU0FBUyxHQUFHLGFBQWEsR0FBR0YsV0FBVyxHQUFHLEdBQUc7QUFDOUQ7QUFFQSxTQUFTRyxTQUFTQSxDQUFBLEVBQUc7RUFDakJOLFlBQVksR0FBRyxDQUFDQSxZQUFZLEdBQUcsQ0FBQyxJQUFJRixNQUFNLENBQUNTLE1BQU07RUFDakROLFNBQVMsQ0FBQ0QsWUFBWSxDQUFDO0FBQzNCO0FBRUFRLFdBQVcsQ0FBQ0YsU0FBUyxFQUFFLElBQUksQ0FBQyxDQUFDLENBQUMifQ==\n//# sourceURL=webpack-internal:///./resources/js/slider.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/slider.js"]();
/******/ 	
/******/ })()
;