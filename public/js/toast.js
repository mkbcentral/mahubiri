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

/***/ "./resources/js/toast.js":
/*!*******************************!*\
  !*** ./resources/js/toast.js ***!
  \*******************************/
/***/ (() => {

eval("window.$(document).ready(function () {\n  toastr.options = {\n    \"positionClass\": \"toast-bottom-right\",\n    \"progressBar\": true\n  };\n  window.addEventListener('data-added', function (event) {\n    toastr.success(event.detail.message, 'Validation');\n    $('#createChurchModal').modal('hide');\n    $('#createPredictionModal').modal('hide');\n  });\n  window.addEventListener('data-updated', function (event) {\n    toastr.info(event.detail.message, 'Validation');\n    $('#editChurchModal').modal('hide');\n    $('#editPredictionModal').modal('hide');\n  });\n  window.addEventListener('data-error', function (event) {\n    toastr.danger(event.detail.message, 'Validation');\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvdG9hc3QuanMuanMiLCJuYW1lcyI6WyJ3aW5kb3ciLCIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInRvYXN0ciIsIm9wdGlvbnMiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJzdWNjZXNzIiwiZGV0YWlsIiwibWVzc2FnZSIsIm1vZGFsIiwiaW5mbyIsImRhbmdlciJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3RvYXN0LmpzPzVmYmYiXSwic291cmNlc0NvbnRlbnQiOlsid2luZG93LiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcbiAgICB0b2FzdHIub3B0aW9ucyA9IHtcbiAgICBcInBvc2l0aW9uQ2xhc3NcIjogXCJ0b2FzdC1ib3R0b20tcmlnaHRcIixcbiAgICBcInByb2dyZXNzQmFyXCI6IHRydWVcbiAgICB9O1xuICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdkYXRhLWFkZGVkJywgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIHRvYXN0ci5zdWNjZXNzKGV2ZW50LmRldGFpbC5tZXNzYWdlLCAnVmFsaWRhdGlvbicpO1xuICAgICAgICAkKCcjY3JlYXRlQ2h1cmNoTW9kYWwnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAkKCcjY3JlYXRlUHJlZGljdGlvbk1vZGFsJykubW9kYWwoJ2hpZGUnKTtcbiAgICB9KTtcbiAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignZGF0YS11cGRhdGVkJywgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIHRvYXN0ci5pbmZvKGV2ZW50LmRldGFpbC5tZXNzYWdlLCAnVmFsaWRhdGlvbicpO1xuICAgICAgICAkKCcjZWRpdENodXJjaE1vZGFsJykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgJCgnI2VkaXRQcmVkaWN0aW9uTW9kYWwnKS5tb2RhbCgnaGlkZScpO1xuICAgIH0pO1xuXG4gICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ2RhdGEtZXJyb3InLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgdG9hc3RyLmRhbmdlcihldmVudC5kZXRhaWwubWVzc2FnZSwgJ1ZhbGlkYXRpb24nKTtcbiAgICB9KTtcblxufSk7XG5cblxuXG4iXSwibWFwcGluZ3MiOiJBQUFBQSxNQUFNLENBQUNDLENBQVAsQ0FBU0MsUUFBVCxFQUFtQkMsS0FBbkIsQ0FBeUIsWUFBWTtFQUNqQ0MsTUFBTSxDQUFDQyxPQUFQLEdBQWlCO0lBQ2pCLGlCQUFpQixvQkFEQTtJQUVqQixlQUFlO0VBRkUsQ0FBakI7RUFJQUwsTUFBTSxDQUFDTSxnQkFBUCxDQUF3QixZQUF4QixFQUFzQyxVQUFVQyxLQUFWLEVBQWlCO0lBQ25ESCxNQUFNLENBQUNJLE9BQVAsQ0FBZUQsS0FBSyxDQUFDRSxNQUFOLENBQWFDLE9BQTVCLEVBQXFDLFlBQXJDO0lBQ0FULENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCVSxLQUF4QixDQUE4QixNQUE5QjtJQUNBVixDQUFDLENBQUMsd0JBQUQsQ0FBRCxDQUE0QlUsS0FBNUIsQ0FBa0MsTUFBbEM7RUFDSCxDQUpEO0VBS0FYLE1BQU0sQ0FBQ00sZ0JBQVAsQ0FBd0IsY0FBeEIsRUFBd0MsVUFBVUMsS0FBVixFQUFpQjtJQUNyREgsTUFBTSxDQUFDUSxJQUFQLENBQVlMLEtBQUssQ0FBQ0UsTUFBTixDQUFhQyxPQUF6QixFQUFrQyxZQUFsQztJQUNBVCxDQUFDLENBQUMsa0JBQUQsQ0FBRCxDQUFzQlUsS0FBdEIsQ0FBNEIsTUFBNUI7SUFDQVYsQ0FBQyxDQUFDLHNCQUFELENBQUQsQ0FBMEJVLEtBQTFCLENBQWdDLE1BQWhDO0VBQ0gsQ0FKRDtFQU1BWCxNQUFNLENBQUNNLGdCQUFQLENBQXdCLFlBQXhCLEVBQXNDLFVBQVVDLEtBQVYsRUFBaUI7SUFDbkRILE1BQU0sQ0FBQ1MsTUFBUCxDQUFjTixLQUFLLENBQUNFLE1BQU4sQ0FBYUMsT0FBM0IsRUFBb0MsWUFBcEM7RUFDSCxDQUZEO0FBSUgsQ0FwQkQifQ==\n//# sourceURL=webpack-internal:///./resources/js/toast.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/toast.js"]();
/******/ 	
/******/ })()
;