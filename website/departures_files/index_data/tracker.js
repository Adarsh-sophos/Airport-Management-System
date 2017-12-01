//! TrackJS JavaScript error monitoring agent.
//! COPYRIGHT (c) 2017 ALL RIGHTS RESERVED
//! See License at https://trackjs.com/terms/
(function(g,n,l){"use awesome";if(g.trackJs)g.console&&g.console.warn&&g.console.warn("TrackJS global conflict");else{var p=function(a,b,c,d,e){this.util=a;this.onError=b;this.onFault=c;this.options=e;e.enabled&&this.initialize(d)};p.prototype={initialize:function(a){f.forEach(["EventTarget","Node","XMLHttpRequest"],function(b){f.has(a,b+".prototype.addEventListener")&&(b=a[b].prototype,b.hasOwnProperty("addEventListener")&&(this.wrapAndCatch(b,"addEventListener",1),this.wrapRemoveEventListener(b)))},
this);this.wrapAndCatch(a,"setTimeout",0);this.wrapAndCatch(a,"setInterval",0)},wrapAndCatch:function(a,b,c){var d=this,e=a[b];f.isWrappableFunction(e)&&(a[b]=function(){try{var h=Array.prototype.slice.call(arguments),m=h[c],k,g;if(d.options.bindStack)try{throw Error();}catch(l){g=l.stack,k=d.util.isoNow()}var E=function(){try{if(f.isObject(m))return m.handleEvent.apply(m,arguments);if(f.isFunction(m))return m.apply(this,arguments)}catch(c){throw d.onError("catch",c,{bindTime:k,bindStack:g}),f.wrapError(c);
}};if("addEventListener"===b&&(this._trackJsEvt||(this._trackJsEvt=new q),this._trackJsEvt.get(h[0],m,h[2])))return;try{m&&(f.isWrappableFunction(m)||f.isWrappableFunction(m.handleEvent))&&(h[c]=E,"addEventListener"===b&&this._trackJsEvt.add(h[0],m,h[2],h[c]))}catch(l){return e.apply(this,arguments)}return e.apply(this,h)}catch(l){a[b]=e,d.onFault(l)}})},wrapRemoveEventListener:function(a){if(a&&a.removeEventListener&&this.util.hasFunction(a.removeEventListener,"call")){var b=a.removeEventListener;
a.removeEventListener=function(c,a,e){if(this._trackJsEvt){var h=this._trackJsEvt.get(c,a,e);if(h)return this._trackJsEvt.remove(c,a,e),b.call(this,c,h,e)}return b.call(this,c,a,e)}}}};var q=function(){this.events=[]};q.prototype={add:function(a,b,c,d){-1>=this.indexOf(a,b,c)&&(c=this.getEventOptions(c),this.events.push([a,b,c.capture,c.once,c.passive,d]))},get:function(a,b,c){a=this.indexOf(a,b,c);return 0<=a?this.events[a][5]:l},getEventOptions:function(a){var b={capture:!1,once:!1,passive:!1};
return f.isBoolean(a)?f.defaults({},{capture:a},b):f.defaults({},a,b)},indexOf:function(a,b,c){c=this.getEventOptions(c);for(var d=0;d<this.events.length;d++){var e=this.events[d];if(e[0]===a&&e[1]===b&&e[2]===c.capture&&e[3]===c.once&&e[4]===c.passive)return d}return-1},remove:function(a,b,c){a=this.indexOf(a,b,c);0<=a&&this.events.splice(a,1)}};var y=function(a){this.initCurrent(a)};y.prototype={current:{},initOnly:{cookie:!0,enabled:!0,token:!0,callback:{enabled:!0},console:{enabled:!0},navigation:{enabled:!0},
network:{enabled:!0,fetch:!0},visitor:{enabled:!0},window:{enabled:!0,promise:!0}},defaults:{application:"",cookie:!1,dedupe:!0,enabled:!0,errorURL:"https://capture.trackjs.com/capture",errorNoSSLURL:"http://capture.trackjs.com/capture",faultURL:"https://usage.trackjs.com/fault.gif",onError:function(){return!0},serialize:function(a){function b(c){var a="<"+c.tagName.toLowerCase();c=c.attributes||[];for(var b=0;b<c.length;b++)a+=" "+c[b].name+'="'+c[b].value+'"';return a+">"}if(""===a)return"Empty String";
if(a===l)return"undefined";if(f.isString(a)||f.isNumber(a)||f.isBoolean(a)||f.isFunction(a))return""+a;if(f.isElement(a))return b(a);var c;try{c=JSON.stringify(a,function(c,a){return a===l?"undefined":f.isNumber(a)&&isNaN(a)?"NaN":f.isError(a)?{name:a.name,message:a.message,stack:a.stack}:f.isElement(a)?b(a):a})}catch(e){c="";for(var d in a)a.hasOwnProperty(d)&&(c+=',"'+d+'":"'+a[d]+'"');c=c?"{"+c.replace(",","")+"}":"Unserializable Object"}return c.replace(/"undefined"/g,"undefined").replace(/"NaN"/g,
"NaN")},sessionId:"",token:"",userId:"",version:"",callback:{enabled:!0,bindStack:!1},console:{enabled:!0,display:!0,error:!0,warn:!1,watch:["log","debug","info","warn","error"]},navigation:{enabled:!0},network:{enabled:!0,error:!0,fetch:!0},visitor:{enabled:!0},usageURL:"https://usage.trackjs.com/usage.gif",window:{enabled:!0,promise:!0}},initCurrent:function(a){if(this.validate(a,this.defaults,"config",{}))return this.current=f.defaultsDeep({},a,this.defaults),!0;this.current=f.defaultsDeep({},
this.defaults);console.log("init current config",this.current);return!1},setCurrent:function(a){return this.validate(a,this.defaults,"config",this.initOnly)?(this.current=f.defaultsDeep({},a,this.current),!0):!1},validate:function(a,b,c,d){var e=!0;c=c||"";d=d||{};for(var h in a)if(a.hasOwnProperty(h))if(b.hasOwnProperty(h)){var f=typeof b[h];f!==typeof a[h]?(console.warn(c+"."+h+": property must be type "+f+"."),e=!1):"[object Array]"!==Object.prototype.toString.call(a[h])||this.validateArray(a[h],
b[h],c+"."+h)?"[object Object]"===Object.prototype.toString.call(a[h])?e=this.validate(a[h],b[h],c+"."+h,d[h]):d.hasOwnProperty(h)&&(console.warn(c+"."+h+": property cannot be set after load."),e=!1):e=!1}else console.warn(c+"."+h+": property not supported."),e=!1;return e},validateArray:function(a,b,c){var d=!0;c=c||"";for(var e=0;e<a.length;e++)f.contains(b,a[e])||(console.warn(c+"["+e+"]: invalid value: "+a[e]+"."),d=!1);return d}};var u=function(a,b,c,d,e,h,f){this.util=a;this.log=b;this.onError=
c;this.onFault=d;this.serialize=e;f.enabled&&(h.console=this.wrapConsoleObject(h.console,f))};u.prototype={wrapConsoleObject:function(a,b){a=a||{};var c=a.log||function(){},d=this,e;for(e=0;e<b.watch.length;e++)(function(e){var m=a[e]||c;a[e]=function(){try{var a=Array.prototype.slice.call(arguments);d.log.add("c",{timestamp:d.util.isoNow(),severity:e,message:d.serialize(1===a.length?a[0]:a)});if(b[e])if(f.isError(a[0])&&1===a.length)d.onError("console",a[0]);else try{throw Error(d.serialize(1===
a.length?a[0]:a));}catch(c){d.onError("console",c)}b.display&&(d.util.hasFunction(m,"apply")?m.apply(this,a):m(a[0]))}catch(c){d.onFault(c)}}})(b.watch[e]);return a},report:function(){return this.log.all("c")}};var v=function(a,b,c,d,e){this.config=a;this.util=b;this.log=c;this.window=d;this.document=e;this.correlationId=this.token=null;this.initialize()};v.prototype={initialize:function(){this.token=this.getCustomerToken();this.correlationId=this.getCorrelationId()},getCustomerToken:function(){if(this.config.current.token)return this.config.current.token;
var a=this.document.getElementsByTagName("script");return a[a.length-1].getAttribute("data-token")},getCorrelationId:function(){var a;if(!this.config.current.cookie)return this.util.uuid();try{a=this.document.cookie.replace(/(?:(?:^|.*;\s*)TrackJS\s*\=\s*([^;]*).*$)|^.*$/,"$1"),a||(a=this.util.uuid(),this.document.cookie="TrackJS="+a+"; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/")}catch(b){a=this.util.uuid()}return a},report:function(){return{application:this.config.current.application,correlationId:this.correlationId,
sessionId:this.config.current.sessionId,token:this.token,userId:this.config.current.userId,version:this.config.current.version}}};var w=function(){this.loadedOn=(new Date).getTime();this.originalUrl=f.getLocation();this.referrer=n.referrer};w.prototype={discoverDependencies:function(){var a={};g.jQuery&&g.jQuery.fn&&g.jQuery.fn.jquery&&(a.jQuery=g.jQuery.fn.jquery);g.jQuery&&g.jQuery.ui&&g.jQuery.ui.version&&(a.jQueryUI=g.jQuery.ui.version);g.angular&&g.angular.version&&g.angular.version.full&&(a.angular=
g.angular.version.full);for(var b in g)if("_trackJs"!==b&&"_trackJS"!==b&&"_trackjs"!==b&&"webkitStorageInfo"!==b&&"webkitIndexedDB"!==b&&"top"!==b&&"parent"!==b&&"frameElement"!==b)try{if(g[b]){var c=g[b].version||g[b].Version||g[b].VERSION;"string"===typeof c&&(a[b]=c)}}catch(d){}return a},report:function(){return{age:(new Date).getTime()-this.loadedOn,dependencies:this.discoverDependencies(),originalUrl:this.originalUrl,referrer:this.referrer,userAgent:g.navigator.userAgent,viewportHeight:g.document.documentElement.clientHeight,
viewportWidth:g.document.documentElement.clientWidth}}};var x=function(a){this.util=a;this.appender=[];this.maxLength=30};x.prototype={all:function(a){var b=[],c,d;for(d=0;d<this.appender.length;d++)(c=this.appender[d])&&c.category===a&&b.push(c.value);return b},clear:function(){this.appender.length=0},truncate:function(){this.appender.length>this.maxLength&&(this.appender=this.appender.slice(Math.max(this.appender.length-this.maxLength,0)))},add:function(a,b){var c=this.util.uuid();this.appender.push({key:c,
category:a,value:b});this.truncate();return c},get:function(a,b){var c,d;for(d=0;d<this.appender.length;d++)if(c=this.appender[d],c.category===a&&c.key===b)return c.value;return!1}};var z=function(a,b){this.log=a;this.options=b;b.enabled&&this.watch()};z.prototype={isCompatible:function(a){a=a||g;return!f.has(a,"chrome.app.runtime")&&f.has(a,"addEventListener")&&f.has(a,"history.pushState")},record:function(a,b,c){this.log.add("h",{type:a,from:f.truncate(b,250),to:f.truncate(c,250),on:f.isoNow()})},
report:function(){return this.log.all("h")},watch:function(){if(this.isCompatible()){var a=this,b=f.getLocationURL().relative;g.addEventListener("popstate",function(){var c=f.getLocationURL().relative;a.record("popState",b,c);b=c},!0);f.forEach(["pushState","replaceState"],function(c){f.patch(history,c,function(d){return function(){b=f.getLocationURL().relative;var e=d.apply(this,arguments),h=f.getLocationURL().relative;a.record(c,b,h);b=h;return e}})})}}};var A=function(a,b,c,d,e,h){this.util=a;
this.log=b;this.onError=c;this.onFault=d;this.window=e;this.options=h;h.enabled&&this.initialize(e)};A.prototype={initialize:function(a){a.XMLHttpRequest&&this.util.hasFunction(a.XMLHttpRequest.prototype.open,"apply")&&this.watchNetworkObject(a.XMLHttpRequest);a.XDomainRequest&&this.util.hasFunction(a.XDomainRequest.prototype.open,"apply")&&this.watchNetworkObject(a.XDomainRequest);this.options.fetch&&f.isWrappableFunction(a.fetch)&&this.watchFetch()},watchFetch:function(){var a=this.log,b=this.options,
c=this.onError;f.patch(g,"fetch",function(d){return function(e,h){var m=e instanceof Request?e:new Request(e,h),k=d.apply(g,arguments);k._tjsId=a.add("n",{type:"fetch",startedOn:f.isoNow(),method:m.method,url:m.url});return k.then(function(d){var e=a.get("n",k._tjsId);e&&(f.defaults(e,{completedOn:f.isoNow(),statusCode:d.status,statusText:d.statusText}),b.error&&400<=d.status&&c("ajax",e.statusCode+" "+e.statusText+": "+e.method+" "+e.url));return d})["catch"](function(d){var e=a.get("n",k._tjsId);
e&&(f.defaults(e,{completedOn:f.isoNow(),statusCode:0,statusText:(d||"").toString()}),b.error&&c("ajax",d));throw d;})}})},watchNetworkObject:function(a){var b=this,c=a.prototype.open,d=a.prototype.send;a.prototype.open=function(a,b){var d=(b||"").toString();0>d.indexOf("localhost:0")&&(this._trackJs={method:a,url:d});return c.apply(this,arguments)};a.prototype.send=function(){try{if(!this._trackJs)return d.apply(this,arguments);this._trackJs.logId=b.log.add("n",{type:"xhr",startedOn:b.util.isoNow(),
method:this._trackJs.method,url:this._trackJs.url});b.listenForNetworkComplete(this)}catch(a){b.onFault(a)}return d.apply(this,arguments)};return a},listenForNetworkComplete:function(a){var b=this;b.window.ProgressEvent&&a.addEventListener&&a.addEventListener("readystatechange",function(){4===a.readyState&&b.finalizeNetworkEvent(a)},!0);a.addEventListener?a.addEventListener("load",function(){b.finalizeNetworkEvent(a);b.checkNetworkFault(a)},!0):setTimeout(function(){try{var c=a.onload;a.onload=function(){b.finalizeNetworkEvent(a);
b.checkNetworkFault(a);"function"===typeof c&&b.util.hasFunction(c,"apply")&&c.apply(a,arguments)};var d=a.onerror;a.onerror=function(){b.finalizeNetworkEvent(a);b.checkNetworkFault(a);"function"===typeof oldOnError&&d.apply(a,arguments)}}catch(e){b.onFault(e)}},0)},finalizeNetworkEvent:function(a){if(a._trackJs){var b=this.log.get("n",a._trackJs.logId);b&&(b.completedOn=this.util.isoNow(),b.statusCode=1223==a.status?204:a.status,b.statusText=1223==a.status?"No Content":a.statusText)}},checkNetworkFault:function(a){if(this.options.error&&
400<=a.status&&1223!=a.status){var b=a._trackJs||{};this.onError("ajax",a.status+" "+a.statusText+": "+b.method+" "+b.url)}},report:function(){return this.log.all("n")}};var r=function(a,b){this.util=a;this.config=b;this.disabled=!1;this.throttleStats={attemptCount:0,throttledCount:0,lastAttempt:(new Date).getTime()};g.JSON&&g.JSON.stringify||(this.disabled=!0)};r.prototype={errorEndpoint:function(a){var b=this.config.current.errorURL;this.util.testCrossdomainXhr()||-1!==g.location.protocol.indexOf("https")||
(b=this.config.current.errorNoSSLURL);return b+"?token="+a},usageEndpoint:function(a){return this.appendObjectAsQuery(a,this.config.current.usageURL)},trackerFaultEndpoint:function(a){return this.appendObjectAsQuery(a,this.config.current.faultURL)},appendObjectAsQuery:function(a,b){b+="?";for(var c in a)a.hasOwnProperty(c)&&(b+=encodeURIComponent(c)+"="+encodeURIComponent(a[c])+"&");return b},getCORSRequest:function(a,b){var c;this.util.testCrossdomainXhr()?(c=new g.XMLHttpRequest,c.open(a,b),c.setRequestHeader("Content-Type",
"text/plain")):"undefined"!==typeof g.XDomainRequest?(c=new g.XDomainRequest,c.open(a,b)):c=null;return c},sendTrackerFault:function(a){this.throttle(a)||((new Image).src=this.trackerFaultEndpoint(a))},sendUsage:function(a){(new Image).src=this.usageEndpoint(a)},sendError:function(a,b){var c=this;if(!this.disabled&&!this.throttle(a))try{var d=this.getCORSRequest("POST",this.errorEndpoint(b));d.onreadystatechange=function(){4===d.readyState&&200!==d.status&&(c.disabled=!0)};d._trackJs=l;d.send(g.JSON.stringify(a))}catch(e){throw this.disabled=
!0,e;}},throttle:function(a){var b=(new Date).getTime();this.throttleStats.attemptCount++;if(this.throttleStats.lastAttempt+1E3>=b){if(this.throttleStats.lastAttempt=b,10<this.throttleStats.attemptCount)return this.throttleStats.throttledCount++,!0}else a.throttled=this.throttleStats.throttledCount,this.throttleStats.attemptCount=0,this.throttleStats.lastAttempt=b,this.throttleStats.throttledCount=0;return!1}};var f=function(){function a(c,d,e,h){e=e||!1;h=h||0;f.forEach(d,function(d){f.forEach(f.keys(d),
function(f){null===d[f]||d[f]===l?c[f]=d[f]:e&&10>h&&"[object Object]"===b(d[f])?(c[f]=c[f]||{},a(c[f],[d[f]],e,h+1)):c.hasOwnProperty(f)||(c[f]=d[f])})});return c}function b(a){return Object.prototype.toString.call(a)}return{addEventListenerSafe:function(a,b,e,f){a.addEventListener?a.addEventListener(b,e,f):a.attachEvent&&a.attachEvent("on"+b,e)},afterDocumentLoad:function(a){var b=!1;"complete"===n.readyState?f.defer(a):(f.addEventListenerSafe(n,"readystatechange",function(){"complete"!==n.readyState||
b||(f.defer(a),b=!0)}),setTimeout(function(){b||(f.defer(a),b=!0)},1E4))},bind:function(a,b){return function(){return a.apply(b,Array.prototype.slice.call(arguments))}},contains:function(a,b){var e;for(e=0;e<a.length;e++)if(a[e]===b)return!0;return!1},defaults:function(c){return a(c,Array.prototype.slice.call(arguments,1),!1)},defaultsDeep:function(c){return a(c,Array.prototype.slice.call(arguments,1),!0)},defer:function(a,b){setTimeout(function(){a.apply(b)})},forEach:function(a,b,e){if(a.forEach)return a.forEach(b,
e);for(var f=0;f<a.length;)b.call(e,a[f],f,a),f++},getLocation:function(){return g.location.toString().replace(/ /g,"%20")},getLocationURL:function(){return f.parseURL(f.getLocation())},has:function(a,b){for(var e=b.split("."),f=a,g=0;g<e.length;g++)if(f[e[g]])f=f[e[g]];else return!1;return!0},hasFunction:function(a,b){try{return!!a[b]}catch(e){return!1}},isArray:function(a){return"[object Array]"===b(a)},isBoolean:function(a){return"boolean"===typeof a||f.isObject(a)&&"[object Boolean]"===b(a)},
isBrowserIE:function(a){a=a||g.navigator.userAgent;var b=a.match(/Trident\/([\d.]+)/);return b&&"7.0"===b[1]?11:(a=a.match(/MSIE ([\d.]+)/))?parseInt(a[1],10):!1},isBrowserSupported:function(){var a=this.isBrowserIE();return!a||8<=a},isError:function(a){if(!f.isObject(a))return!1;var d=b(a);return"[object Error]"===d||"[object DOMException]"===d||f.isString(a.name)&&f.isString(a.message)},isElement:function(a){return f.isObject(a)&&1===a.nodeType},isFunction:function(a){return!(!a||"function"!==typeof a)},
isNumber:function(a){return"number"===typeof a||f.isObject(a)&&"[object Number]"===b(a)},isObject:function(a){return!(!a||"object"!==typeof a)},isString:function(a){return"string"===typeof a||!f.isArray(a)&&f.isObject(a)&&"[object String]"===b(a)},isWrappableFunction:function(a){return this.isFunction(a)&&this.hasFunction(a,"apply")},isoNow:function(){var a=new Date;return a.toISOString?a.toISOString():a.getUTCFullYear()+"-"+this.pad(a.getUTCMonth()+1)+"-"+this.pad(a.getUTCDate())+"T"+this.pad(a.getUTCHours())+
":"+this.pad(a.getUTCMinutes())+":"+this.pad(a.getUTCSeconds())+"."+String((a.getUTCMilliseconds()/1E3).toFixed(3)).slice(2,5)+"Z"},keys:function(a){if(!f.isObject(a))return[];var b=[],e;for(e in a)a.hasOwnProperty(e)&&b.push(e);return b},noop:function(){},pad:function(a){a=String(a);1===a.length&&(a="0"+a);return a},parseURL:function(a){var b=a.match(/^(([^:\/?#]+):)?(\/\/([^\/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/);if(!b)return{};b={protocol:b[2],host:b[4],path:b[5],query:b[6],hash:b[8]};b.origin=
(b.protocol||"")+"://"+(b.host||"");b.relative=(b.path||"")+(b.query||"")+(b.hash||"");b.href=a;return b},patch:function(a,b,e){a[b]=e(a[b]||f.noop)},testCrossdomainXhr:function(){return"withCredentials"in new XMLHttpRequest},truncate:function(a,b){if(a.length<=b)return a;var e=a.length-b;return a.substr(0,b)+"...{"+e+"}"},uuid:function(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(a){var b=16*Math.random()|0;return("x"==a?b:b&3|8).toString(16)})},wrapError:function(a){if(a.innerError)return a;
var b=Error("TrackJS Caught: "+(a.message||a));b.description="TrackJS Caught: "+a.description;b.file=a.file;b.line=a.line||a.lineNumber;b.column=a.column||a.columnNumber;b.stack=a.stack;b.innerError=a;return b}}}(),B=function(a,b,c,d,e,f){this.util=a;this.log=b;this.onError=c;this.onFault=d;this.options=f;this.document=e;f.enabled&&this.initialize(e)};B.prototype={initialize:function(a){var b=this.util.bind(this.onDocumentClicked,this),c=this.util.bind(this.onInputChanged,this);a.addEventListener?
(a.addEventListener("click",b,!0),a.addEventListener("blur",c,!0)):a.attachEvent&&(a.attachEvent("onclick",b),a.attachEvent("onfocusout",c))},onDocumentClicked:function(a){try{var b=this.getElementFromEvent(a);b&&b.tagName&&(this.isDescribedElement(b,"a")||this.isDescribedElement(b,"button")||this.isDescribedElement(b,"input",["button","submit"])?this.writeVisitorEvent(b,"click"):this.isDescribedElement(b,"input",["checkbox","radio"])&&this.writeVisitorEvent(b,"input",b.value,b.checked))}catch(c){this.onFault(c)}},
onInputChanged:function(a){try{var b=this.getElementFromEvent(a);if(b&&b.tagName)if(this.isDescribedElement(b,"textarea"))this.writeVisitorEvent(b,"input",b.value);else if(this.isDescribedElement(b,"select")&&b.options&&b.options.length)this.onSelectInputChanged(b);else this.isDescribedElement(b,"input")&&!this.isDescribedElement(b,"input",["button","submit","hidden","checkbox","radio"])&&this.writeVisitorEvent(b,"input",b.value)}catch(c){this.onFault(c)}},onSelectInputChanged:function(a){if(a.multiple)for(var b=
0;b<a.options.length;b++)a.options[b].selected&&this.writeVisitorEvent(a,"input",a.options[b].value);else 0<=a.selectedIndex&&a.options[a.selectedIndex]&&this.writeVisitorEvent(a,"input",a.options[a.selectedIndex].value)},writeVisitorEvent:function(a,b,c,d){"password"===this.getElementType(a)&&(c=l);this.log.add("v",{timestamp:this.util.isoNow(),action:b,element:{tag:a.tagName.toLowerCase(),attributes:this.getElementAttributes(a),value:this.getMetaValue(c,d)}})},getElementFromEvent:function(a){return a.target||
n.elementFromPoint(a.clientX,a.clientY)},isDescribedElement:function(a,b,c){if(a.tagName.toLowerCase()!==b.toLowerCase())return!1;if(!c)return!0;a=this.getElementType(a);for(b=0;b<c.length;b++)if(c[b]===a)return!0;return!1},getElementType:function(a){return(a.getAttribute("type")||"").toLowerCase()},getElementAttributes:function(a){for(var b={},c=0;c<a.attributes.length;c++)"value"!==a.attributes[c].name.toLowerCase()&&(b[a.attributes[c].name]=a.attributes[c].value);return b},getMetaValue:function(a,
b){return a===l?l:{length:a.length,pattern:this.matchInputPattern(a),checked:b}},matchInputPattern:function(a){return""===a?"empty":/^[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(a)?"email":/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/.test(a)||/^(\d{4}[\/\-](0?[1-9]|1[012])[\/\-]0?[1-9]|[12][0-9]|3[01])$/.test(a)?"date":/^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/.test(a)?
"usphone":/^\s*$/.test(a)?"whitespace":/^\d*$/.test(a)?"numeric":/^[a-zA-Z]*$/.test(a)?"alpha":/^[a-zA-Z0-9]*$/.test(a)?"alphanumeric":"characters"},report:function(){return this.log.all("v")}};var C=function(a,b,c,d,e){this.onError=a;this.onFault=b;this.serialize=c;e.enabled&&this.watchWindowErrors(d);e.promise&&this.watchPromiseErrors(d)};C.prototype={watchPromiseErrors:function(a){var b=this;a.addEventListener?a.addEventListener("unhandledrejection",function(a){a=a||{};a=a.detail?a.detail.reason:
a.reason;if(a!==l){if(!f.isError(a))try{throw Error(b.serialize(a));}catch(d){a=d}b.onError("promise",a)}}):a.onunhandledrejection=function(a){b.onError("promise",a)}},watchWindowErrors:function(a){var b=this;f.patch(a,"onerror",function(a){return function(d,e,f,g,k){try{k=k||{},k.message=k.message||b.serialize(d),k.name=k.name||"Error",k.line=k.line||parseInt(f,10)||null,k.column=k.column||parseInt(g,10)||null,"[object Event]"!==Object.prototype.toString.call(d)||e?k.file=k.file||b.serialize(e):
k.file=(d.target||{}).src,b.onError("window",k)}catch(l){b.onFault(l)}a.apply(this,arguments)}})}};var D=function(a,b,c,d,e,h,g,k,l,n,p,q,r,y,u,v,w){try{if(this.window=u,this.document=v,this.util=f,this.onError=this.util.bind(this.onError,this),this.onFault=this.util.bind(this.onFault,this),this.serialize=this.util.bind(this.serialize,this),this.config=new d(a),this.transmitter=new p(this.util,this.config),this.log=new k(this.util),this.api=new b(this.config,this.util,this.onError,this.serialize),
this.metadata=new l(this.serialize),this.environment=new g,this.customer=new h(this.config,this.util,this.log,this.window,this.document),this.customer.token&&(this.apiConsoleWatcher=new e(this.util,this.log,this.onError,this.onFault,this.serialize,this.api,this.config.defaults.console),this.config.current.enabled&&(this.windowConsoleWatcher=new e(this.util,this.log,this.onError,this.onFault,this.serialize,this.window,this.config.current.console),this.util.isBrowserSupported()))){this.callbackWatcher=
new c(this.util,this.onError,this.onFault,this.window,this.config.current.callback);this.visitorWatcher=new q(this.util,this.log,this.onError,this.onFault,this.document,this.config.current.visitor);this.navigationWatcher=new w(this.log,this.config.current.navigation);this.networkWatcher=new n(this.util,this.log,this.onError,this.onFault,this.window,this.config.current.network);this.windowWatcher=new r(this.onError,this.onFault,this.serialize,this.window,this.config.current.window);var t=this;f.afterDocumentLoad(function(){t.transmitter.sendUsage({token:t.customer.token,
correlationId:t.customer.correlationId,application:t.config.current.application,x:t.util.uuid()})})}}catch(x){this.onFault(x)}};D.prototype={reveal:function(){if(this.customer.token)return this.api.addMetadata=this.metadata.addMetadata,this.api.removeMetadata=this.metadata.removeMetadata,this.api;this.config.current.enabled&&this.window.console&&this.window.console.warn&&this.window.console.warn("TrackJS could not find a token");return l},onError:function(){var a,b=!1;return function(c,d,e){if(f.isBrowserSupported()&&
this.config.current.enabled)try{if(e=e||{bindStack:null,bindTime:null,force:!1},d&&f.isError(d)||(d={name:"Error",message:this.serialize(d,e.force)}),-1===d.message.indexOf("TrackJS Caught"))if(b&&-1!==d.message.indexOf("Script error"))b=!1;else{var h=f.defaultsDeep({},{bindStack:e.bindStack,bindTime:e.bindTime,column:d.column||d.columnNumber,console:this.windowConsoleWatcher.report(),customer:this.customer.report(),entry:c,environment:this.environment.report(),file:d.file||d.fileName,line:d.line||
d.lineNumber,message:d.message,metadata:this.metadata.report(),nav:this.navigationWatcher.report(),network:this.networkWatcher.report(),url:(g.location||"").toString(),stack:d.stack,timestamp:this.util.isoNow(),visitor:this.visitorWatcher.report(),version:"2.9.0"});if(!e.force)try{if(!this.config.current.onError(h,d))return}catch(l){h.console.push({timestamp:this.util.isoNow(),severity:"error",message:l.message});var m=this;setTimeout(function(){m.onError("catch",l,{force:!0})},0)}if(this.config.current.dedupe){var k=
(h.message+h.stack).substr(0,1E4);if(k===a)return;a=k}this.log.clear();setTimeout(function(){b=!1});b=!0;this.transmitter.sendError(h,this.customer.token)}}catch(l){this.onFault(l)}}}(),onFault:function(a){var b=this.transmitter||new r;a=a||{};a={token:this.customer.token,file:a.file||a.fileName,msg:a.message||"unknown",stack:(a.stack||"unknown").substr(0,500),url:this.window.location,v:"2.9.0",h:"6b62b7dad17330436de3e4fc73eff316ba7006ad",x:this.util.uuid()};b.sendTrackerFault(a)},serialize:function(a,
b){if(this.config.current.serialize&&!b)try{return this.config.current.serialize(a)}catch(c){this.onError("catch",c,{force:!0})}return this.config.defaults.serialize(a)}};p=new D(g._trackJs||g._trackJS||g._trackjs||{},function(a,b,c,d){return{attempt:function(a,d){try{var f=Array.prototype.slice.call(arguments,2);return a.apply(d||this,f)}catch(g){throw c("catch",g),b.wrapError(g);}},configure:function(b){return a.setCurrent(b)},track:function(a){var b=d(a);a=a||{};if(!a.stack)try{throw Error(b);
}catch(f){a=f}c("direct",a)},watch:function(a,d){return function(){try{var f=Array.prototype.slice.call(arguments,0);return a.apply(d||this,f)}catch(g){throw c("catch",g),b.wrapError(g);}}},watchAll:function(a){var d=Array.prototype.slice.call(arguments,1),f;for(f in a)"function"===typeof a[f]&&(b.contains(d,f)||function(){var d=a[f];a[f]=function(){try{var a=Array.prototype.slice.call(arguments,0);return d.apply(this,a)}catch(e){throw c("catch",e),b.wrapError(e);}}}());return a},hash:"6b62b7dad17330436de3e4fc73eff316ba7006ad",
version:"2.9.0"}},p,y,u,v,w,x,function(a){var b={};return{addMetadata:function(a,d){b[a]=d},removeMetadata:function(a){delete b[a]},report:function(){var c=[],d;for(d in b)b.hasOwnProperty(d)&&c.push({key:d,value:a(b[d])});return c},store:b}},A,r,B,C,q,g,n,z);g.trackJs=p.reveal()}})(window,document);