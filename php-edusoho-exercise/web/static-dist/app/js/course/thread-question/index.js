!function(s){function e(e){for(var t,r,n=e[0],o=e[1],i=e[2],a=0,u=[];a<n.length;a++)r=n[a],Object.prototype.hasOwnProperty.call(l,r)&&l[r]&&u.push(l[r][0]),l[r]=0;for(t in o)Object.prototype.hasOwnProperty.call(o,t)&&(s[t]=o[t]);for(p&&p(e);u.length;)u.shift()();return c.push.apply(c,i||[]),f()}function f(){for(var e,t=0;t<c.length;t++){for(var r=c[t],n=!0,o=1;o<r.length;o++){var i=r[o];0!==l[i]&&(n=!1)}n&&(c.splice(t--,1),e=a(a.s=r[0]))}return e}var r={},l={146:0},c=[];function a(e){if(r[e])return r[e].exports;var t=r[e]={i:e,l:!1,exports:{}};return s[e].call(t.exports,t,t.exports,a),t.l=!0,t.exports}a.m=s,a.c=r,a.d=function(e,t,r){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(t,e){if(1&e&&(t=a(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(a.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)a.d(r,n,function(e){return t[e]}.bind(null,n));return r},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="/static-dist/";var t=window.webpackJsonp=window.webpackJsonp||[],n=t.push.bind(t);t.push=e,t=t.slice();for(var o=0;o<t.length;o++)e(t[o]);var p=n;c.push([580,0]),f()}({580:function(e,t,r){"use strict";r.r(t);var n=r(66),o=$("#js-task-iframe").data("userId"),i=$("#js-task-iframe").data("fileId"),a=$("#js-task-iframe").data("videoAskTime");n.a.set(o,i,a)},66:function(e,t,r){"use strict";var n=r(12),i=r.n(n),o=r(0),a=r.n(o),u=r(1),s=r.n(u),f=(r(138),function(){function e(){a()(this,e)}return s()(e,null,[{key:"set",value:function(e,t,r){var n=store.get("durations",{});n&&n instanceof Array||(n=new Array);var o=e+"-"+t+":"+r;0<n.length&&-1<n.slice(n.length-1,n.length)[0].indexOf(e+"-"+t)&&n.splice(n.length-1,n.length),20<=n.length&&n.shift(),n.push(o),store.set("durations",n)}},{key:"get",value:function(e,t){var r=store.get("durations",{});if(r)for(var n=0;n<r.length;n++){if(-1<r[n].indexOf(e+"-"+t)){var o=r[n];return i()(o.split(":")[1])}}return 0}},{key:"del",value:function(e,t){var r=store.get("durations");if(r){for(var n=0;n<r.length;n++){-1<r[n].indexOf(e+"-"+t)&&r.splice(n,1)}store.set("durations",r)}}}]),e}());t.a=f}});