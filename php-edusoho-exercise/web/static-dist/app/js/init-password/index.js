!function(t){var n={};function o(e){if(n[e])return n[e].exports;var r=n[e]={i:e,l:!1,exports:{}};return t[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=t,o.c=n,o.d=function(e,r,t){o.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(r,e){if(1&e&&(r=o(r)),8&e)return r;if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;var t=Object.create(null);if(o.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var n in r)o.d(t,n,function(e){return r[e]}.bind(null,n));return t},o.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(r,"a",r),r},o.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},o.p="/static-dist/",o(o.s=600)}({600:function(e,r){var t=$("#init-password-form");$.validator.addMethod("spaceNoSupport",function(e,r){return e.indexOf(" ")<0},$.validator.format(Translator.trans("validate.have_spaces")));var n,o,a=t.validate({rules:{newPassword:(n={required:!0,spaceNoSupport:!0},o=$("#password_level").val(),n["check_password_".concat(o)]=!0,n),confirmPassword:{required:!0,equalTo:"#newPassword"}}});$('[type="submit"]').click(function(){a.form()&&t.submit()})}});