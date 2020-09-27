(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/AdminComponents/Role.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/AdminComponents/Role.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
!(function webpackMissingModule() { var e = new Error("Cannot find module '../components/deleteModal.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
!(function webpackMissingModule() { var e = new Error("Cannot find module 'vuex'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      data: {
        roleName: ''
      },
      addModal: false,
      editModal: false,
      isAdding: false,
      roles: [],
      editData: {
        roleName: ''
      },
      index: -1,
      showDeleteModal: false,
      isDeleing: false,
      deleteItem: {},
      deletingIndex: -1,
      websiteSettings: []
    };
  },
  methods: {
    add: function add() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var res;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                if (!(_this.data.roleName.trim() == '')) {
                  _context.next = 2;
                  break;
                }

                return _context.abrupt("return", _this.e('Role name is required'));

              case 2:
                _context.next = 4;
                return _this.callApi('post', 'app/create_role', _this.data);

              case 4:
                res = _context.sent;

                if (res.status === 201) {
                  _this.tags.unshift(res.data);

                  _this.s('Role has been added successfully!');

                  _this.addModal = false;
                  _this.data.roleName = '';
                } else {
                  if (res.status == 422) {
                    if (res.data.errors.roleName) {
                      _this.e(res.data.errors.roleName[0]);
                    }
                  } else {
                    _this.swr();
                  }
                }

              case 6:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    edit: function edit() {
      var _this2 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var res;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                if (!(_this2.editData.roleName.trim() == '')) {
                  _context2.next = 2;
                  break;
                }

                return _context2.abrupt("return", _this2.e('Tag name is required'));

              case 2:
                _context2.next = 4;
                return _this2.callApi('post', 'app/edit_role', _this2.editData);

              case 4:
                res = _context2.sent;

                if (res.status === 200) {
                  _this2.roles[_this2.index].roleName = _this2.editData.roleName;

                  _this2.s('Role name has been edited successfully!');

                  _this2.editModal = false;
                } else {
                  if (res.status == 422) {
                    if (res.data.errors.roleName) {
                      _this2.e(res.data.errors.roleName[0]);
                    }
                  } else {
                    _this2.swr();
                  }
                }

              case 6:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2);
      }))();
    },
    showEditModal: function showEditModal(role, index) {
      var obj = {
        id: role.id,
        roleName: role.roleName
      };
      this.editData = obj;
      this.editModal = true;
      this.index = index;
    },
    deleteTag: function deleteTag() {
      var _this3 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
        var res;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                _this3.isDeleing = true;
                _context3.next = 3;
                return _this3.callApi('post', 'app/delete_tag', _this3.deleteItem);

              case 3:
                res = _context3.sent;

                if (res.status === 200) {
                  _this3.tags.splice(_this3.deletingIndex, 1);

                  _this3.s('Tag has been deleted successfully!');
                } else {
                  _this3.swr();
                }

                _this3.isDeleing = false;
                _this3.showDeleteModal = false;

              case 7:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3);
      }))();
    },
    showDeletingModal: function showDeletingModal(tag, i) {
      var deleteModalObj = {
        showDeleteModal: true,
        deleteUrl: 'app/delete_tag',
        data: tag,
        deletingIndex: i,
        isDeleted: false
      };
      this.$store.commit('setDeletingModalObj', deleteModalObj);
      console.log('delete method called'); // this.deleteItem = tag
      // this.deletingIndex = i
      // this.showDeleteModal = true
    }
  },
  created: function created() {
    var _this4 = this;

    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4() {
      var res;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
        while (1) {
          switch (_context4.prev = _context4.next) {
            case 0:
              _context4.next = 2;
              return _this4.callApi('get', 'app/get_roles');

            case 2:
              res = _context4.sent;

              if (res.status == 200) {
                _this4.roles = res.data;
              } else {
                _this4.swr();
              }

            case 4:
            case "end":
              return _context4.stop();
          }
        }
      }, _callee4);
    }))();
  },
  components: {
    deleteModal: !(function webpackMissingModule() { var e = new Error("Cannot find module '../components/deleteModal.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())
  },
  computed: _objectSpread({}, !(function webpackMissingModule() { var e = new Error("Cannot find module 'vuex'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(['getDeleteModalObj'])),
  watch: {
    getDeleteModalObj: function getDeleteModalObj(obj) {
      if (obj.isDeleted) {
        this.tags.splice(obj.deletingIndex, 1);
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/AdminComponents/Role.vue?vue&type=template&id=651ba4ea&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/AdminComponents/Role.vue?vue&type=template&id=651ba4ea& ***!
  \***********************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", {}, [
      _c(
        "div",
        {},
        [
          _c("div", {}, [
            _c(
              "p",
              {},
              [
                _vm._v("Role Manangement "),
                _c(
                  "Button",
                  {
                    on: {
                      click: function($event) {
                        _vm.addModal = true
                      }
                    }
                  },
                  [_vm._v(" Add a new role")]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c("div", {}, [
              _c(
                "table",
                { staticClass: "_table" },
                [
                  _vm._m(0),
                  _vm._v(" "),
                  _vm._l(_vm.roles, function(role, i) {
                    return _vm.roles.length
                      ? _c("tr", { key: i }, [
                          _c("td", [_vm._v(_vm._s(role.id))]),
                          _vm._v(" "),
                          _c("td", {}, [_vm._v(_vm._s(role.roleName))]),
                          _vm._v(" "),
                          _c("td", [_vm._v(_vm._s(role.created_at))]),
                          _vm._v(" "),
                          _c(
                            "td",
                            [
                              _c(
                                "Button",
                                {
                                  attrs: { type: "info", size: "small" },
                                  on: {
                                    click: function($event) {
                                      return _vm.showEditModal(role, i)
                                    }
                                  }
                                },
                                [_vm._v("Edit")]
                              ),
                              _vm._v(" "),
                              _c(
                                "Button",
                                {
                                  attrs: {
                                    type: "error",
                                    size: "small",
                                    loading: role.isDeleting
                                  },
                                  on: {
                                    click: function($event) {
                                      return _vm.showDeletingModal(role, i)
                                    }
                                  }
                                },
                                [_vm._v("Delete")]
                              )
                            ],
                            1
                          )
                        ])
                      : _vm._e()
                  })
                ],
                2
              )
            ])
          ]),
          _vm._v(" "),
          _c(
            "Modal",
            {
              attrs: {
                title: "Add role",
                "mask-closable": false,
                closable: false
              },
              model: {
                value: _vm.addModal,
                callback: function($$v) {
                  _vm.addModal = $$v
                },
                expression: "addModal"
              }
            },
            [
              _c("Input", {
                attrs: { placeholder: "Role name" },
                model: {
                  value: _vm.data.roleName,
                  callback: function($$v) {
                    _vm.$set(_vm.data, "roleName", $$v)
                  },
                  expression: "data.roleName"
                }
              }),
              _vm._v(" "),
              _c(
                "div",
                { attrs: { slot: "footer" }, slot: "footer" },
                [
                  _c(
                    "Button",
                    {
                      attrs: { type: "default" },
                      on: {
                        click: function($event) {
                          _vm.addModal = false
                        }
                      }
                    },
                    [_vm._v("Close")]
                  ),
                  _vm._v(" "),
                  _c(
                    "Button",
                    {
                      attrs: {
                        type: "primary",
                        disabled: _vm.isAdding,
                        loading: _vm.isAdding
                      },
                      on: { click: _vm.add }
                    },
                    [_vm._v(_vm._s(_vm.isAdding ? "Adding.." : "Add Role"))]
                  )
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "Modal",
            {
              attrs: {
                title: "Edit role",
                "mask-closable": false,
                closable: false
              },
              model: {
                value: _vm.editModal,
                callback: function($$v) {
                  _vm.editModal = $$v
                },
                expression: "editModal"
              }
            },
            [
              _c("Input", {
                attrs: { placeholder: "Edit tag name" },
                model: {
                  value: _vm.editData.roleName,
                  callback: function($$v) {
                    _vm.$set(_vm.editData, "roleName", $$v)
                  },
                  expression: "editData.roleName"
                }
              }),
              _vm._v(" "),
              _c(
                "div",
                { attrs: { slot: "footer" }, slot: "footer" },
                [
                  _c(
                    "Button",
                    {
                      attrs: { type: "default" },
                      on: {
                        click: function($event) {
                          _vm.editModal = false
                        }
                      }
                    },
                    [_vm._v("Close")]
                  ),
                  _vm._v(" "),
                  _c(
                    "Button",
                    {
                      attrs: {
                        type: "primary",
                        disabled: _vm.isAdding,
                        loading: _vm.isAdding
                      },
                      on: { click: _vm.edit }
                    },
                    [_vm._v(_vm._s(_vm.isAdding ? "Editing.." : "Edit Role"))]
                  )
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c("deleteModal")
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("tr", [
      _c("th", [_vm._v("ID")]),
      _vm._v(" "),
      _c("th", [_vm._v("Role type")]),
      _vm._v(" "),
      _c("th", [_vm._v("Created at")]),
      _vm._v(" "),
      _c("th", [_vm._v("Action")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/AdminComponents/Role.vue":
/*!**********************************************************!*\
  !*** ./resources/js/components/AdminComponents/Role.vue ***!
  \**********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Role_vue_vue_type_template_id_651ba4ea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Role.vue?vue&type=template&id=651ba4ea& */ "./resources/js/components/AdminComponents/Role.vue?vue&type=template&id=651ba4ea&");
/* harmony import */ var _Role_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Role.vue?vue&type=script&lang=js& */ "./resources/js/components/AdminComponents/Role.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Role_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Role_vue_vue_type_template_id_651ba4ea___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Role_vue_vue_type_template_id_651ba4ea___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/AdminComponents/Role.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/AdminComponents/Role.vue?vue&type=script&lang=js&":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/AdminComponents/Role.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Role_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Role.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/AdminComponents/Role.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Role_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/AdminComponents/Role.vue?vue&type=template&id=651ba4ea&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/components/AdminComponents/Role.vue?vue&type=template&id=651ba4ea& ***!
  \*****************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Role_vue_vue_type_template_id_651ba4ea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Role.vue?vue&type=template&id=651ba4ea& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/AdminComponents/Role.vue?vue&type=template&id=651ba4ea&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Role_vue_vue_type_template_id_651ba4ea___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Role_vue_vue_type_template_id_651ba4ea___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);