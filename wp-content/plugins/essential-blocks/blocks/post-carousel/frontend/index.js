!function(){"use strict";var e={n:function(t){var o=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(o,{a:o}),o},d:function(t,o){for(var r in o)e.o(o,r)&&!e.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:o[r]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}},t=window.wp.apiFetch,o=e.n(t);function r(e,t){(null==t||t>e.length)&&(t=e.length);for(var o=0,r=new Array(t);o<t;o++)r[o]=e[o];return r}var n=!!EssentialBlocksLocalize&&EssentialBlocksLocalize.rest_rootURL;o().use(o().createRootURLMiddleware(n)),window.addEventListener("DOMContentLoaded",(function(e){var t,o,n,i,a,s,l,d,c,u,v,f,p,w,y,h=function(e,t){var o="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!o){if(Array.isArray(e)||(o=function(e,t){if(e){if("string"==typeof e)return r(e,t);var o=Object.prototype.toString.call(e).slice(8,-1);return"Object"===o&&e.constructor&&(o=e.constructor.name),"Map"===o||"Set"===o?Array.from(e):"Arguments"===o||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(o)?r(e,t):void 0}}(e))||t&&e&&"number"==typeof e.length){o&&(e=o);var n=0,i=function(){};return{s:i,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:i}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,s=!0,l=!1;return{s:function(){o=o.call(e)},n:function(){var e=o.next();return s=e.done,e},e:function(e){l=!0,a=e},f:function(){try{s||null==o.return||o.return()}finally{if(l)throw a}}}}(document.getElementsByClassName("eb-post-carousel-wrapper"));try{for(h.s();!(t=h.n()).done;)void 0,void 0,void 0,void 0,void 0,void 0,void 0,void 0,void 0,void 0,void 0,void 0,void 0,void 0,n=null==(o=t.value.dataset)?void 0:o.id,i=JSON.parse(o.slidersettings),a=JSON.parse(o.attributes),s=i.arrows,l=i.autoplay,d=i.dots,c=i.infinite,u=i.pauseOnHover,v=i.slideToShowRange,f=i.MOBslideToShowRange,p=i.TABslideToShowRange,w=i.autoplaySpeed,y=i.speed,jQuery(".init-"+n).slick({arrows:s,autoplay:l,dots:d,infinite:c,pauseOnHover:u,slidesToShow:v,autoplaySpeed:w,speed:y,prevArrow:"<div class='slick-arrow slick-prev'><i class='".concat(a.leftArrowIcon,"'></i></div>"),nextArrow:"<div class='slick-arrow slick-next'><i class='".concat(a.rightArrowIcon,"'></i></div>"),responsive:[{breakpoint:1024,settings:{slidesToShow:p}},{breakpoint:767,settings:{slidesToShow:f}}]})}catch(e){h.e(e)}finally{h.f()}}))}();