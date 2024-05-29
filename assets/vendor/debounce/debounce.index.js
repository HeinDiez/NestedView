/**
 * Bundled by jsDelivr using Rollup v2.79.1 and Terser v5.19.2.
 * Original file: /npm/debounce@2.1.0/index.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
var e={exports:{}};function t(e,t=100,o={}){if("function"!=typeof e)throw new TypeError(`Expected the first parameter to be a function, got \`${typeof e}\`.`);if(t<0)throw new RangeError("`wait` must not be negative.");const{immediate:r}="boolean"==typeof o?{immediate:o}:o;let n,i,a,c,s;function u(){const t=n,o=i;return n=void 0,i=void 0,s=e.apply(t,o),s}function f(){const e=Date.now()-c;e<t&&e>=0?a=setTimeout(f,t-e):(a=void 0,r||(s=u()))}const d=function(...e){if(n&&this!==n)throw new Error("Debounced method called with different contexts.");n=this,i=e,c=Date.now();const o=r&&!a;return a||(a=setTimeout(f,t)),o&&(s=u()),s};return d.clear=()=>{a&&(clearTimeout(a),a=void 0)},d.flush=()=>{a&&d.trigger()},d.trigger=()=>{s=u(),d.clear()},d}var o=e.exports.debounce=t;e.exports=t;var r=e.exports;export{o as debounce,r as default};
