/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/components.js ***!
  \************************************/
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Dropdown = /*#__PURE__*/_createClass(function Dropdown() {
  _classCallCheck(this, Dropdown);

  document.querySelectorAll('[data-type="dropdown"]').forEach(function (dropdown) {
    dropdown.firstElementChild.addEventListener('click', function () {
      dropdown.lastElementChild.classList.toggle('hidden');
      dropdown.lastElementChild.classList.toggle('opacity-0');
      dropdown.lastElementChild.classList.toggle('opacity-100');
    });
  });
});

var AlertDismissible = /*#__PURE__*/_createClass(function AlertDismissible() {
  _classCallCheck(this, AlertDismissible);

  var alerts = document.querySelectorAll('[data-type="alert-dismissible"]');
  alerts.forEach(function (alert) {
    alert.querySelector('button').addEventListener('click', function () {
      alert.classList.add('opacity-0');
      setTimeout(function () {
        alert.remove();
      }, 250);
    });
    setTimeout(function () {
      alert.querySelector('button').click();
    }, 3500);
  });
});

window.addEventListener('DOMContentLoaded', function () {
  new Dropdown();
  new AlertDismissible();
});
/******/ })()
;