(()=>{var e={757:(e,t,r)=>{e.exports=r(666)},666:e=>{var t=function(e){"use strict";var t,r=Object.prototype,n=r.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},a=o.iterator||"@@iterator",i=o.asyncIterator||"@@asyncIterator",s=o.toStringTag||"@@toStringTag";function c(e,t,r){return Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}),e[t]}try{c({},"")}catch(e){c=function(e,t,r){return e[t]=r}}function u(e,t,r,n){var o=t&&t.prototype instanceof m?t:m,a=Object.create(o.prototype),i=new P(n||[]);return a._invoke=function(e,t,r){var n=d;return function(o,a){if(n===f)throw new Error("Generator is already running");if(n===y){if("throw"===o)throw a;return B()}for(r.method=o,r.arg=a;;){var i=r.delegate;if(i){var s=_(i,r);if(s){if(s===h)continue;return s}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if(n===d)throw n=y,r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n=f;var c=l(e,t,r);if("normal"===c.type){if(n=r.done?y:p,c.arg===h)continue;return{value:c.arg,done:r.done}}"throw"===c.type&&(n=y,r.method="throw",r.arg=c.arg)}}}(e,r,i),a}function l(e,t,r){try{return{type:"normal",arg:e.call(t,r)}}catch(e){return{type:"throw",arg:e}}}e.wrap=u;var d="suspendedStart",p="suspendedYield",f="executing",y="completed",h={};function m(){}function v(){}function g(){}var b={};c(b,a,(function(){return this}));var w=Object.getPrototypeOf,x=w&&w(w(j([])));x&&x!==r&&n.call(x,a)&&(b=x);var k=g.prototype=m.prototype=Object.create(b);function E(e){["next","throw","return"].forEach((function(t){c(e,t,(function(e){return this._invoke(t,e)}))}))}function L(e,t){function r(o,a,i,s){var c=l(e[o],e,a);if("throw"!==c.type){var u=c.arg,d=u.value;return d&&"object"==typeof d&&n.call(d,"__await")?t.resolve(d.__await).then((function(e){r("next",e,i,s)}),(function(e){r("throw",e,i,s)})):t.resolve(d).then((function(e){u.value=e,i(u)}),(function(e){return r("throw",e,i,s)}))}s(c.arg)}var o;this._invoke=function(e,n){function a(){return new t((function(t,o){r(e,n,t,o)}))}return o=o?o.then(a,a):a()}}function _(e,r){var n=e.iterator[r.method];if(n===t){if(r.delegate=null,"throw"===r.method){if(e.iterator.return&&(r.method="return",r.arg=t,_(e,r),"throw"===r.method))return h;r.method="throw",r.arg=new TypeError("The iterator does not provide a 'throw' method")}return h}var o=l(n,e.iterator,r.arg);if("throw"===o.type)return r.method="throw",r.arg=o.arg,r.delegate=null,h;var a=o.arg;return a?a.done?(r[e.resultName]=a.value,r.next=e.nextLoc,"return"!==r.method&&(r.method="next",r.arg=t),r.delegate=null,h):a:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,h)}function T(e){var t={tryLoc:e[0]};1 in e&&(t.catchLoc=e[1]),2 in e&&(t.finallyLoc=e[2],t.afterLoc=e[3]),this.tryEntries.push(t)}function I(e){var t=e.completion||{};t.type="normal",delete t.arg,e.completion=t}function P(e){this.tryEntries=[{tryLoc:"root"}],e.forEach(T,this),this.reset(!0)}function j(e){if(e){var r=e[a];if(r)return r.call(e);if("function"==typeof e.next)return e;if(!isNaN(e.length)){var o=-1,i=function r(){for(;++o<e.length;)if(n.call(e,o))return r.value=e[o],r.done=!1,r;return r.value=t,r.done=!0,r};return i.next=i}}return{next:B}}function B(){return{value:t,done:!0}}return v.prototype=g,c(k,"constructor",g),c(g,"constructor",v),v.displayName=c(g,s,"GeneratorFunction"),e.isGeneratorFunction=function(e){var t="function"==typeof e&&e.constructor;return!!t&&(t===v||"GeneratorFunction"===(t.displayName||t.name))},e.mark=function(e){return Object.setPrototypeOf?Object.setPrototypeOf(e,g):(e.__proto__=g,c(e,s,"GeneratorFunction")),e.prototype=Object.create(k),e},e.awrap=function(e){return{__await:e}},E(L.prototype),c(L.prototype,i,(function(){return this})),e.AsyncIterator=L,e.async=function(t,r,n,o,a){void 0===a&&(a=Promise);var i=new L(u(t,r,n,o),a);return e.isGeneratorFunction(r)?i:i.next().then((function(e){return e.done?e.value:i.next()}))},E(k),c(k,s,"Generator"),c(k,a,(function(){return this})),c(k,"toString",(function(){return"[object Generator]"})),e.keys=function(e){var t=[];for(var r in e)t.push(r);return t.reverse(),function r(){for(;t.length;){var n=t.pop();if(n in e)return r.value=n,r.done=!1,r}return r.done=!0,r}},e.values=j,P.prototype={constructor:P,reset:function(e){if(this.prev=0,this.next=0,this.sent=this._sent=t,this.done=!1,this.delegate=null,this.method="next",this.arg=t,this.tryEntries.forEach(I),!e)for(var r in this)"t"===r.charAt(0)&&n.call(this,r)&&!isNaN(+r.slice(1))&&(this[r]=t)},stop:function(){this.done=!0;var e=this.tryEntries[0].completion;if("throw"===e.type)throw e.arg;return this.rval},dispatchException:function(e){if(this.done)throw e;var r=this;function o(n,o){return s.type="throw",s.arg=e,r.next=n,o&&(r.method="next",r.arg=t),!!o}for(var a=this.tryEntries.length-1;a>=0;--a){var i=this.tryEntries[a],s=i.completion;if("root"===i.tryLoc)return o("end");if(i.tryLoc<=this.prev){var c=n.call(i,"catchLoc"),u=n.call(i,"finallyLoc");if(c&&u){if(this.prev<i.catchLoc)return o(i.catchLoc,!0);if(this.prev<i.finallyLoc)return o(i.finallyLoc)}else if(c){if(this.prev<i.catchLoc)return o(i.catchLoc,!0)}else{if(!u)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return o(i.finallyLoc)}}}},abrupt:function(e,t){for(var r=this.tryEntries.length-1;r>=0;--r){var o=this.tryEntries[r];if(o.tryLoc<=this.prev&&n.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var a=o;break}}a&&("break"===e||"continue"===e)&&a.tryLoc<=t&&t<=a.finallyLoc&&(a=null);var i=a?a.completion:{};return i.type=e,i.arg=t,a?(this.method="next",this.next=a.finallyLoc,h):this.complete(i)},complete:function(e,t){if("throw"===e.type)throw e.arg;return"break"===e.type||"continue"===e.type?this.next=e.arg:"return"===e.type?(this.rval=this.arg=e.arg,this.method="return",this.next="end"):"normal"===e.type&&t&&(this.next=t),h},finish:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.finallyLoc===e)return this.complete(r.completion,r.afterLoc),I(r),h}},catch:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.tryLoc===e){var n=r.completion;if("throw"===n.type){var o=n.arg;I(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(e,r,n){return this.delegate={iterator:j(e),resultName:r,nextLoc:n},"next"===this.method&&(this.arg=t),h}},e}(e.exports);try{regeneratorRuntime=t}catch(e){"object"==typeof globalThis?globalThis.regeneratorRuntime=t:Function("r","regeneratorRuntime = r")(t)}}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var a=t[n]={exports:{}};return e[n](a,a.exports,r),a.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";var e=r(757),t=r.n(e);function n(e){return function(e){if(Array.isArray(e))return c(e)}(e)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||s(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function o(e,t,r,n,o,a,i){try{var s=e[a](i),c=s.value}catch(e){return void r(e)}s.done?t(c):Promise.resolve(c).then(n,o)}function a(e){return function(){var t=this,r=arguments;return new Promise((function(n,a){var i=e.apply(t,r);function s(e){o(i,n,a,s,c,"next",e)}function c(e){o(i,n,a,s,c,"throw",e)}s(void 0)}))}}function i(e,t){var r="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!r){if(Array.isArray(e)||(r=s(e))||t&&e&&"number"==typeof e.length){r&&(e=r);var n=0,o=function(){};return{s:o,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,i=!0,c=!1;return{s:function(){r=r.call(e)},n:function(){var e=r.next();return i=e.done,e},e:function(e){c=!0,a=e},f:function(){try{i||null==r.return||r.return()}finally{if(c)throw a}}}}function s(e,t){if(e){if("string"==typeof e)return c(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?c(e,t):void 0}}function c(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}var u,l=[],d=document.getElementById("imageNav"),p=document.getElementById("videoNav"),f=document.getElementById("audioNav"),y=document.getElementById("media-library-open"),h=document.getElementById("media-library-title-image"),m=document.getElementById("media-library-title-video"),v=document.getElementById("media-library-title-audio"),g=document.getElementById("mediaAddBtn"),b=document.getElementById("media-library-add-to-project"),w=document.getElementById("media-library-delete"),x=document.getElementsByClassName("media-library-close"),k=document.getElementById("message"),E=document.getElementById("library-image"),L=document.getElementById("library-video"),_=document.getElementById("library-audio"),T=document.getElementById("mediaLibraryMultiple").innerHTML;function I(){l.forEach((function(e){var t=document.getElementById("selectedMediaList"),r=e.split(";");"0"==T?(t.innerHTML='<img class="rounded" style="height: 10vw; object-fit: cover;" src="'+window.location.origin+"/storage/images/"+r[1]+"."+r[2]+'" alt="Card image cap">',t.innerHTML+='<input dusk="AddedMedium" name="media_id" value="'+r[0]+'" hidden>'):("mp3"==r[2]?t.innerHTML+='<audio style="height: 3vw;" src="'+window.location.origin+"/storage/audios/"+r[1]+"."+r[2]+'" controls></audio>':"mp4"==r[2]?t.innerHTML+='<video  style="height: 10vw;" src="'+window.location.origin+"/storage/videos/"+r[1]+"."+r[2]+'" controls></video>':t.innerHTML+='<img class="rounded" style="height: 10vw; object-fit: cover;" src="'+window.location.origin+"/storage/images/"+r[1]+"."+r[2]+'" alt="Card image cap">',t.innerHTML+='<input dusk="AddedMedium" name="media[]" value="'+r[0]+'" hidden>')})),G()}function P(){u=document.getElementsByClassName("boz-media")}function j(){P();var e,t=i(u);try{for(t.s();!(e=t.n()).done;){e.value.addEventListener("click",B)}}catch(e){t.e(e)}finally{t.f()}}function B(e){var t,r=i(e.path);try{for(r.s();!(t=r.n()).done;){var n=t.value;if(n.hasAttribute("fld")){M(n);break}}}catch(e){r.e(e)}finally{r.f()}}function M(e){if("1"==T)l.includes(e.getAttribute("fld"))?(l.splice(l.indexOf(e.getAttribute("fld")),1),e.style.border=""):(l.push(e.getAttribute("fld")),e.style.border="solid 2px #347886");else{P();var t,r=i(u);try{for(r.s();!(t=r.n()).done;){t.value.style.border=""}}catch(e){r.e(e)}finally{r.f()}l.splice(0,1),l.push(e.getAttribute("fld")),e.style.border="solid 2px #347886"}}function O(){var e,t=i(u);try{for(t.s();!(e=t.n()).done;){var r=e.value;l.includes(r.getAttribute("fld"))&&(r.style.border="solid 2px #347886")}}catch(e){t.e(e)}finally{t.f()}}function A(){R(),function(){U.apply(this,arguments)}(),V()}function H(){return S.apply(this,arguments)}function S(){return(S=a(t().mark((function e(){return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return document.getElementById("media-library").style.setProperty("display","block","important"),document.getElementById("media-library-background").style.setProperty("display","block","important"),A(),j(),e.t0=$,e.next=7,J("images");case 7:e.t1=e.sent,(0,e.t0)(e.t1,"image");case 9:case"end":return e.stop()}}),e)})))).apply(this,arguments)}function G(){P();var e,t,r=i(u);try{for(r.s();!(e=r.n()).done;){e.value.style.border=""}}catch(e){r.e(e)}finally{r.f()}l=[],(t=k.classList).remove.apply(t,n(k.classList)),k.innerHTML="",document.getElementById("media-library").style.setProperty("display","none","important"),document.getElementById("media-library-background").style.setProperty("display","none","important")}function N(e,t){var r;(r=k.classList).remove.apply(r,n(k.classList)),k.classList.add("alert"),k.classList.add("alert-"+t),k.innerHTML=e}function z(){return C.apply(this,arguments)}function C(){return(C=a(t().mark((function e(){var r,n,o;return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=new FormData,l.forEach((function(e){var t=e.split(";");r.append("media[]",t[0])})),e.next=4,fetch("https://bureauonbeperktezaken.nl/api/media/remove",{method:"POST",body:r});case 4:return n=e.sent,A(),e.next=8,n.json();case 8:400==(o=e.sent).response_code?N(o.errors[Object.keys(o.errors)[0]][0],"danger"):200==o.response_code&&N(o.message,"success"),l=[];case 11:case"end":return e.stop()}}),e)})))).apply(this,arguments)}function F(){return D.apply(this,arguments)}function D(){return(D=a(t().mark((function e(){var r,n,o,a,s,c;return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:r=new FormData,n=i(document.getElementById("fileInputLibrary").files);try{for(n.s();!(o=n.n()).done;)a=o.value,r.append("media[]",a)}catch(e){n.e(e)}finally{n.f()}return e.next=5,fetch("https://bureauonbeperktezaken.nl/api/media/add",{method:"POST",body:r});case 5:return s=e.sent,A(),e.next=9,s.json();case 9:400==(c=e.sent).response_code?N(c.errors[Object.keys(c.errors)[0]][0],"danger"):200==c.response_code&&N(c.message,"success"),l=[];case 12:case"end":return e.stop()}}),e)})))).apply(this,arguments)}function R(){return q.apply(this,arguments)}function q(){return q=a(t().mark((function e(){var r,n,o,a,s,c,u,l=arguments;return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(!(r=l.length>0&&void 0!==l[0]?l[0]:null)){e.next=7;break}return e.next=4,fetch(r,{method:"GET"});case 4:n=e.sent,e.next=10;break;case 7:return e.next=9,fetch("https://bureauonbeperktezaken.nl/api/media/images",{method:"GET"});case 9:n=e.sent;case 10:return e.next=12,n.json();case 12:o=e.sent,E.innerHTML="",a=i(o.data.data);try{for(a.s();!(s=a.n()).done;)c=s.value,u='<div dusk="MediumSelect" fld='+c.id+";"+c.name+";"+c.extension+' class="m-2 card boz-media" style="cursor:pointer; width: 15rem;">',u+='<img class="py-3 rounded" style="height:10vw; object-fit: cover;" src='+window.location.origin+"/storage/images/"+c.name+"."+c.extension+' alt="Card image cap">',u+="</div>",E.innerHTML+=u}catch(e){a.e(e)}finally{a.f()}j(),O();case 18:case"end":return e.stop()}}),e)}))),q.apply(this,arguments)}function V(){return Y.apply(this,arguments)}function Y(){return Y=a(t().mark((function e(){var r,n,o,a,s,c,u,l=arguments;return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(!(r=l.length>0&&void 0!==l[0]?l[0]:null)){e.next=7;break}return e.next=4,fetch(r,{method:"GET"});case 4:n=e.sent,e.next=10;break;case 7:return e.next=9,fetch("https://bureauonbeperktezaken.nl/api/media/videos",{method:"GET"});case 9:n=e.sent;case 10:return e.next=12,n.json();case 12:o=e.sent,L.innerHTML="",a=i(o.data.data);try{for(a.s();!(s=a.n()).done;)c=s.value,u="<div fld="+c.id+";"+c.name+";"+c.extension+' class="m-2 card boz-media" style="cursor:pointer; width: 15rem;">',u+='<video  style="height: 10vw;"  src='+window.location.origin+"/storage/videos/"+c.name+"."+c.extension+"  controls></video>",u+="</div>",L.innerHTML+=u}catch(e){a.e(e)}finally{a.f()}j(),O();case 18:case"end":return e.stop()}}),e)}))),Y.apply(this,arguments)}function U(){return U=a(t().mark((function e(){var r,n,o,a,s,c,u,l=arguments;return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(!(r=l.length>0&&void 0!==l[0]?l[0]:null)){e.next=7;break}return e.next=4,fetch(r,{method:"GET"});case 4:n=e.sent,e.next=10;break;case 7:return e.next=9,fetch("https://bureauonbeperktezaken.nl/api/media/audios",{method:"GET"});case 9:n=e.sent;case 10:return e.next=12,n.json();case 12:o=e.sent,_.innerHTML="",a=i(o.data.data);try{for(a.s();!(s=a.n()).done;)c=s.value,u="<div fld="+c.id+";"+c.name+";"+c.extension+' class="m-2 card boz-media" style="cursor:pointer; width: 15rem;">',u+='<audio style="height: 3vw;" src='+window.location.origin+"/storage/audios/"+c.name+"."+c.extension+"  controls></audio>",u+="</div>",_.innerHTML+=u}catch(e){a.e(e)}finally{a.f()}j(),O();case 18:case"end":return e.stop()}}),e)}))),U.apply(this,arguments)}function $(e,r){var n=document.createElement("a");if(n.classList.add("p-2"),n.innerHTML="&laquo; Vorige",e.prev_page_url)switch(n.style.cursor="pointer",r){case"image":n.addEventListener("click",a(t().mark((function r(){return t().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return R(e.prev_page_url),t.t0=$,t.next=4,J("images",e.prev_page_url);case 4:t.t1=t.sent,(0,t.t0)(t.t1,"image");case 6:case"end":return t.stop()}}),r)}))));break;case"video":n.addEventListener("click",a(t().mark((function r(){return t().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return V(e.prev_page_url),t.t0=$,t.next=4,J("videos",e.prev_page_url);case 4:t.t1=t.sent,(0,t.t0)(t.t1,"video");case 6:case"end":return t.stop()}}),r)}))));break;case"audio":n.addEventListener("click",a(t().mark((function r(){return t().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return V(e.prev_page_url),t.t0=$,t.next=4,J("audios",e.prev_page_url);case 4:t.t1=t.sent,(0,t.t0)(t.t1,"audio");case 6:case"end":return t.stop()}}),r)}))))}else n.style.textDecoration="none",n.style.cursor="default",n.style.color="gray";var o=document.createElement("a");if(o.classList.add("p-2"),o.innerHTML="Volgende &raquo;",e.next_page_url)switch(o.style.cursor="pointer",r){case"image":o.addEventListener("click",a(t().mark((function r(){return t().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return R(e.next_page_url),t.t0=$,t.next=4,J("images",e.next_page_url);case 4:t.t1=t.sent,(0,t.t0)(t.t1,"image");case 6:case"end":return t.stop()}}),r)}))));break;case"video":o.addEventListener("click",a(t().mark((function r(){return t().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return V(e.next_page_url),t.t0=$,t.next=4,J("videos",e.next_page_url);case 4:t.t1=t.sent,(0,t.t0)(t.t1,"video");case 6:case"end":return t.stop()}}),r)}))));break;case"audio":o.addEventListener("click",a(t().mark((function r(){return t().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return V(e.next_page_url),t.t0=$,t.next=4,J("audios",e.next_page_url);case 4:t.t1=t.sent,(0,t.t0)(t.t1,"audio");case 6:case"end":return t.stop()}}),r)}))))}else o.style.textDecoration="none",o.style.cursor="default",o.style.color="gray";var i=document.getElementById("library-links");i.innerHTML="",i.appendChild(n),i.appendChild(o)}function J(e){return K.apply(this,arguments)}function K(){return K=a(t().mark((function e(r){var n,o,a,i=arguments;return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(!(n=i.length>1&&void 0!==i[1]?i[1]:null)){e.next=7;break}return e.next=4,fetch(n,{method:"GET"});case 4:o=e.sent,e.next=10;break;case 7:return e.next=9,fetch("https://bureauonbeperktezaken.nl/api/media/"+r,{method:"GET"});case 9:o=e.sent;case 10:return e.next=12,o.json();case 12:return a=e.sent,e.abrupt("return",a.data);case 14:case"end":return e.stop()}}),e)}))),K.apply(this,arguments)}function Q(e){return W.apply(this,arguments)}function W(){return(W=a(t().mark((function e(r){return t().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:A(),e.t0=r,e.next="image"===e.t0?4:"video"===e.t0?16:"audio"===e.t0?28:40;break;case 4:return E.style.setProperty("display","flex","important"),L.style.setProperty("display","none","important"),_.style.setProperty("display","none","important"),h.style.setProperty("display","block","important"),m.style.setProperty("display","none","important"),v.style.setProperty("display","none","important"),e.t1=$,e.next=13,J("images");case 13:return e.t2=e.sent,(0,e.t1)(e.t2,"image"),e.abrupt("break",41);case 16:return E.style.setProperty("display","none","important"),L.style.setProperty("display","flex","important"),_.style.setProperty("display","none","important"),h.style.setProperty("display","none","important"),m.style.setProperty("display","block","important"),v.style.setProperty("display","none","important"),e.t3=$,e.next=25,J("videos");case 25:return e.t4=e.sent,(0,e.t3)(e.t4,"video"),e.abrupt("break",41);case 28:return E.style.setProperty("display","none","important"),L.style.setProperty("display","none","important"),_.style.setProperty("display","flex","important"),h.style.setProperty("display","none","important"),m.style.setProperty("display","none","important"),v.style.setProperty("display","block","important"),e.t5=$,e.next=37,J("audios");case 37:return e.t6=e.sent,(0,e.t5)(e.t6,"audio"),e.abrupt("break",41);case 40:return e.abrupt("break",41);case 41:case"end":return e.stop()}}),e)})))).apply(this,arguments)}y&&function(){d.addEventListener("click",(function(){Q("image")})),p.addEventListener("click",(function(){Q("video")})),f.addEventListener("click",(function(){Q("audio")})),y.addEventListener("click",H);var e,t=i(x);try{for(t.s();!(e=t.n()).done;){e.value.addEventListener("click",G)}}catch(e){t.e(e)}finally{t.f()}g.addEventListener("click",(function(){document.getElementById("fileInputLibrary").click()})),b.addEventListener("click",I),w.addEventListener("click",z),document.getElementById("fileInputLibrary").addEventListener("change",F)}()})()})();