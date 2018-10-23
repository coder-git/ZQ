/** layui-v2.2.6-rc2 MIT License By https://www.layui.com */
 ;!function(e){"use strict";var t=document,n={modules:{},status:{},timeout:10,event:{}},o=function(){this.v="2.2.6-rc3"},r=function(){var e=t.currentScript?t.currentScript.src:function(){for(var e,n=t.scripts,o=n.length-1,r=o;r>0;r--)if("interactive"===n[r].readyState){e=n[r].src;break}return e||n[o].src}();return e.substring(0,e.lastIndexOf("/")+1)}(),a=function(t){e.console&&console.error&&console.error("Layui hint: "+t)},i="undefined"!=typeof opera&&"[object Opera]"===opera.toString(),u={layer:"modules/layer",laydate:"modules/laydate",laypage:"modules/laypage",laytpl:"modules/laytpl",layim:"modules/layim",layedit:"modules/layedit",form:"modules/form",upload:"modules/upload",tree:"modules/tree",table:"modules/table",element:"modules/element",util:"modules/util",flow:"modules/flow",carousel:"modules/carousel",code:"modules/code",jquery:"modules/jquery",mobile:"modules/mobile","layui.all":"../layui.all"};o.prototype.cache=n,o.prototype.define=function(e,t){var o=this,r="function"==typeof e,a=function(){var e=function(e,t){layui[e]=t,n.status[e]=!0};return"function"==typeof t&&t(function(o,r){e(o,r),n.callback[o]=function(){t(e)}}),this};return r&&(t=e,e=[]),layui["layui.all"]||!layui["layui.all"]&&layui["layui.mobile"]?a.call(o):(o.use(e,a),o)},o.prototype.use=function(e,o,l){function s(e,t){var o="PLaySTATION 3"===navigator.platform?/^complete$/:/^(complete|loaded)$/;("load"===e.type||o.test((e.currentTarget||e.srcElement).readyState))&&(n.modules[f]=t,d.removeChild(v),function r(){return++m>1e3*n.timeout/4?a(f+" is not a valid module"):void(n.status[f]?c():setTimeout(r,4))}())}function c(){l.push(layui[f]),e.length>1?y.use(e.slice(1),o,l):"function"==typeof o&&o.apply(layui,l)}var y=this,p=n.dir=n.dir?n.dir:r,d=t.getElementsByTagName("head")[0];e="string"==typeof e?[e]:e,window.jQuery&&jQuery.fn.on&&(y.each(e,function(t,n){"jquery"===n&&e.splice(t,1)}),layui.jquery=layui.$=jQuery);var f=e[0],m=0;if(l=l||[],n.host=n.host||(p.match(/\/\/([\s\S]+?)\//)||["//"+location.host+"/"])[0],0===e.length||layui["layui.all"]&&u[f]||!layui["layui.all"]&&layui["layui.mobile"]&&u[f])return c(),y;if(n.modules[f])!function g(){return++m>1e3*n.timeout/4?a(f+" is not a valid module"):void("string"==typeof n.modules[f]&&n.status[f]?c():setTimeout(g,4))}();else{var v=t.createElement("script"),h=(u[f]?p+"lay/":/^\{\/\}/.test(y.modules[f])?"":n.base||"")+(y.modules[f]||f)+".js";h=h.replace(/^\{\/\}/,""),v.async=!0,v.charset="utf-8",v.src=h+function(){var e=n.version===!0?n.v||(new Date).getTime():n.version||"";return e?"?v="+e:""}(),d.appendChild(v),!v.attachEvent||v.attachEvent.toString&&v.attachEvent.toString().indexOf("[native code")<0||i?v.addEventListener("load",function(e){s(e,h)},!1):v.attachEvent("onreadystatechange",function(e){s(e,h)}),n.modules[f]=h}return y},o.prototype.getStyle=function(t,n){var o=t.currentStyle?t.currentStyle:e.getComputedStyle(t,null);return o[o.getPropertyValue?"getPropertyValue":"getAttribute"](n)},o.prototype.link=function(e,o,r){var i=this,u=t.createElement("link"),l=t.getElementsByTagName("head")[0];"string"==typeof o&&(r=o);var s=(r||e).replace(/\.|\//g,""),c=u.id="layuicss-"+s,y=0;return u.rel="stylesheet",u.href=e+(n.debug?"?v="+(new Date).getTime():""),u.media="all",t.getElementById(c)||l.appendChild(u),"function"!=typeof o?i:(function p(){return++y>1e3*n.timeout/100?a(e+" timeout"):void(1989===parseInt(i.getStyle(t.getElementById(c),"width"))?function(){o()}():setTimeout(p,100))}(),i)},n.callback={},o.prototype.factory=function(e){if(layui[e])return"function"==typeof n.callback[e]?n.callback[e]:null},o.prototype.addcss=function(e,t,o){return layui.link(n.dir+"css/"+e,t,o)},o.prototype.img=function(e,t,n){var o=new Image;return o.src=e,o.complete?t(o):(o.onload=function(){o.onload=null,t(o)},void(o.onerror=function(e){o.onerror=null,n(e)}))},o.prototype.config=function(e){e=e||{};for(var t in e)n[t]=e[t];return this},o.prototype.modules=function(){var e={};for(var t in u)e[t]=u[t];return e}(),o.prototype.extend=function(e){var t=this;e=e||{};for(var n in e)t[n]||t.modules[n]?a("模块名 "+n+" 已被占用"):t.modules[n]=e[n];return t},o.prototype.router=function(e){var t=this,e=e||location.hash,n={path:[],search:{},hash:(e.match(/[^#](#.*$)/)||[])[1]||""};return/^#\//.test(e)?(e=e.replace(/^#\//,""),n.href="/"+e,e=e.replace(/([^#])(#.*$)/,"$1").split("/")||[],t.each(e,function(e,t){/^\w+=/.test(t)?function(){t=t.split("="),n.search[t[0]]=t[1]}():n.path.push(t)}),n):n},o.prototype.data=function(t,n,o){if(t=t||"layui",o=o||localStorage,e.JSON&&e.JSON.parse){if(null===n)return delete o[t];n="object"==typeof n?n:{key:n};try{var r=JSON.parse(o[t])}catch(a){var r={}}return"value"in n&&(r[n.key]=n.value),n.remove&&delete r[n.key],o[t]=JSON.stringify(r),n.key?r[n.key]:r}},o.prototype.sessionData=function(e,t){return this.data(e,t,sessionStorage)},o.prototype.device=function(t){var n=navigator.userAgent.toLowerCase(),o=function(e){var t=new RegExp(e+"/([^\\s\\_\\-]+)");return e=(n.match(t)||[])[1],e||!1},r={os:function(){return/windows/.test(n)?"windows":/linux/.test(n)?"linux":/iphone|ipod|ipad|ios/.test(n)?"ios":/mac/.test(n)?"mac":void 0}(),ie:function(){return!!(e.ActiveXObject||"ActiveXObject"in e)&&((n.match(/msie\s(\d+)/)||[])[1]||"11")}(),weixin:o("micromessenger")};return t&&!r[t]&&(r[t]=o(t)),r.android=/android/.test(n),r.ios="ios"===r.os,r},o.prototype.hint=function(){return{error:a}},o.prototype.each=function(e,t){var n,o=this;if("function"!=typeof t)return o;if(e=e||[],e.constructor===Object){for(n in e)if(t.call(e[n],n,e[n]))break}else for(n=0;n<e.length&&!t.call(e[n],n,e[n]);n++);return o},o.prototype.sort=function(e,t,n){var o=JSON.parse(JSON.stringify(e||[]));return t?(o.sort(function(e,n){var o=/^-?\d+$/,r=e[t],a=n[t];return o.test(r)&&(r=parseFloat(r)),o.test(a)&&(a=parseFloat(a)),r&&!a?1:!r&&a?-1:r>a?1:r<a?-1:0}),n&&o.reverse(),o):o},o.prototype.stope=function(t){t=t||e.event;try{t.stopPropagation()}catch(n){t.cancelBubble=!0}},o.prototype.onevent=function(e,t,n){return"string"!=typeof e||"function"!=typeof n?this:o.event(e,t,null,n)},o.prototype.event=o.event=function(e,t,o,r){var a=this,i=null,u=t.match(/\((.*)\)$/)||[],l=(e+"."+t).replace(u[0],""),s=u[1]||"",c=function(e,t){var n=t&&t.call(a,o);n===!1&&null===i&&(i=!1)};return r?(n.event[l]=n.event[l]||{},n.event[l][s]=[r],this):(layui.each(n.event[l],function(e,t){return"{*}"===s?void layui.each(t,c):(""===e&&layui.each(t,c),void(e===s&&layui.each(t,c)))}),i)},e.layui=new o}(window);
 
 
// ;!function(win){
//   "use strict";

//   var doc = document, config = {
//     modules: {} //记录模块物理路径
//     ,status: {} //记录模块加载状态
//     ,timeout: 10 //符合规范的模块请求最长等待秒数
//     ,event: {} //记录模块自定义事件
//   }

//   ,Layui = function(){
//     this.v = '2.3.0'; //版本号
//   }

//   //获取layui所在目录
//   ,getPath = function(){
//     var jsPath = doc.currentScript ? doc.currentScript.src : function(){
//       var js = doc.scripts
//       ,last = js.length - 1
//       ,src;
//       for(var i = last; i > 0; i--){
//         if(js[i].readyState === 'interactive'){
//           src = js[i].src;
//           break;
//         }
//       }
//       return src || js[last].src;
//     }();
//     return jsPath.substring(0, jsPath.lastIndexOf('/') + 1);
//   }()

//   //异常提示
//   ,error = function(msg){
//     win.console && console.error && console.error('Layui hint: ' + msg);
//   }

//   ,isOpera = typeof opera !== 'undefined' && opera.toString() === '[object Opera]'

//   //内置模块
//   ,modules = {
//     layer: 'modules/layer' //弹层
//     ,laydate: 'modules/laydate' //日期
//     ,laypage: 'modules/laypage' //分页
//     ,laytpl: 'modules/laytpl' //模板引擎
//     ,layim: 'modules/layim' //web通讯
//     ,layedit: 'modules/layedit' //富文本编辑器
//     ,form: 'modules/form' //表单集
//     ,upload: 'modules/upload' //上传
//     ,tree: 'modules/tree' //树结构
//     ,table: 'modules/table' //表格
//     ,element: 'modules/element' //常用元素操作
//     ,rate: 'modules/rate'  //评分组件
//     ,carousel: 'modules/carousel' //轮播
//     ,flow: 'modules/flow' //流加载
//     ,util: 'modules/util' //工具块
//     ,code: 'modules/code' //代码修饰器
//     ,jquery: 'modules/jquery' //DOM库（第三方）
    
//     ,mobile: 'modules/mobile' //移动大模块 | 若当前为开发目录，则为移动模块入口，否则为移动模块集合
//     ,'layui.all': '../layui.all' //PC模块合并版
//   };

//   //记录基础数据
//   Layui.prototype.cache = config;

//   //定义模块
//   Layui.prototype.define = function(deps, factory){
//     var that = this
//     ,type = typeof deps === 'function'
//     ,callback = function(){
//       var setApp = function(app, exports){
//         layui[app] = exports;
//         config.status[app] = true;
//       };
//       typeof factory === 'function' && factory(function(app, exports){
//         setApp(app, exports);
//         config.callback[app] = function(){
//           factory(setApp);
//         }
//       });
//       return this;
//     };
    
//     type && (
//       factory = deps,
//       deps = []
//     );
    
//     if(layui['layui.all'] || (!layui['layui.all'] && layui['layui.mobile'])){
//       return callback.call(that);
//     }

//     that.use(deps, callback);
//     return that;
//   };

//   //使用特定模块
//   Layui.prototype.use = function(apps, callback, exports){
//     var that = this
//     ,dir = config.dir = config.dir ? config.dir : getPath
//     ,head = doc.getElementsByTagName('head')[0];

//     apps = typeof apps === 'string' ? [apps] : apps;
    
//     //如果页面已经存在jQuery1.7+库且所定义的模块依赖jQuery，则不加载内部jquery模块
//     if(window.jQuery && jQuery.fn.on){
//       that.each(apps, function(index, item){
//         if(item === 'jquery'){
//           apps.splice(index, 1);
//         }
//       });
//       layui.jquery = layui.$ = jQuery;
//     }
    
//     var item = apps[0]
//     ,timeout = 0;
//     exports = exports || [];

//     //静态资源host
//     config.host = config.host || (dir.match(/\/\/([\s\S]+?)\//)||['//'+ location.host +'/'])[0];
    
//     //加载完毕
//     function onScriptLoad(e, url){
//       var readyRegExp = navigator.platform === 'PLaySTATION 3' ? /^complete$/ : /^(complete|loaded)$/
//       if (e.type === 'load' || (readyRegExp.test((e.currentTarget || e.srcElement).readyState))) {
//         config.modules[item] = url;
//         head.removeChild(node);
//         (function poll() {
//           if(++timeout > config.timeout * 1000 / 4){
//             return error(item + ' is not a valid module');
//           };
//           config.status[item] ? onCallback() : setTimeout(poll, 4);
//         }());
//       }
//     }
    
//     //回调
//     function onCallback(){
//       exports.push(layui[item]);
//       apps.length > 1 ?
//         that.use(apps.slice(1), callback, exports)
//       : ( typeof callback === 'function' && callback.apply(layui, exports) );
//     }
    
//     //如果使用了 layui.all.js
//     if(apps.length === 0 
//     || (layui['layui.all'] && modules[item]) 
//     || (!layui['layui.all'] && layui['layui.mobile'] && modules[item])
//     ){
//       return onCallback(), that;
//     }

//     //首次加载模块
//     if(!config.modules[item]){
//       var node = doc.createElement('script')
      
//       //如果是内置模块，则按照 dir 参数拼接模块路径
//       //如果是扩展模块，则判断模块路径值是否为 {/} 开头，
//       //如果路径值是 {/} 开头，则模块路径即为后面紧跟的字符。
//       //否则，则按照 base 参数拼接模块路径
//       ,url = ( modules[item] ? (dir + 'lay/') 
//         : (/^\{\/\}/.test(that.modules[item]) ? '' : (config.base || ''))
//       ) + (that.modules[item] || item) + '.js';
      
//       url = url.replace(/^\{\/\}/, '');
      
//       node.async = true;
//       node.charset = 'utf-8';
//       node.src = url + function(){
//         var version = config.version === true 
//         ? (config.v || (new Date()).getTime())
//         : (config.version||'');
//         return version ? ('?v=' + version) : '';
//       }();
      
//       head.appendChild(node);
      
//       if(node.attachEvent && !(node.attachEvent.toString && node.attachEvent.toString().indexOf('[native code') < 0) && !isOpera){
//         node.attachEvent('onreadystatechange', function(e){
//           onScriptLoad(e, url);
//         });
//       } else {
//         node.addEventListener('load', function(e){
//           onScriptLoad(e, url);
//         }, false);
//       }
      
//       config.modules[item] = url;
//     } else { //缓存
//       (function poll() {
//         if(++timeout > config.timeout * 1000 / 4){
//           return error(item + ' is not a valid module');
//         };
//         (typeof config.modules[item] === 'string' && config.status[item]) 
//         ? onCallback() 
//         : setTimeout(poll, 4);
//       }());
//     }
    
//     return that;
//   };

//   //获取节点的style属性值
//   Layui.prototype.getStyle = function(node, name){
//     var style = node.currentStyle ? node.currentStyle : win.getComputedStyle(node, null);
//     return style[style.getPropertyValue ? 'getPropertyValue' : 'getAttribute'](name);
//   };

//   //css外部加载器
//   Layui.prototype.link = function(href, fn, cssname){
//     var that = this
//     ,link = doc.createElement('link')
//     ,head = doc.getElementsByTagName('head')[0];
    
//     if(typeof fn === 'string') cssname = fn;
    
//     var app = (cssname || href).replace(/\.|\//g, '')
//     ,id = link.id = 'layuicss-'+app
//     ,timeout = 0;
    
//     link.rel = 'stylesheet';
//     link.href = href + (config.debug ? '?v='+new Date().getTime() : '');
//     link.media = 'all';
    
//     if(!doc.getElementById(id)){
//       head.appendChild(link);
//     }

//     if(typeof fn !== 'function') return that;
    
//     //轮询css是否加载完毕
//     (function poll() {
//       if(++timeout > config.timeout * 1000 / 100){
//         return error(href + ' timeout');
//       };
//       parseInt(that.getStyle(doc.getElementById(id), 'width')) === 1989 ? function(){
//         fn();
//       }() : setTimeout(poll, 100);
//     }());
    
//     return that;
//   };
  
//   //存储模块的回调
//   config.callback = {};
  
//   //重新执行模块的工厂函数
//   Layui.prototype.factory = function(modName){
//     if(layui[modName]){
//       return typeof config.callback[modName] === 'function' 
//         ? config.callback[modName]
//       : null;
//     }
//   };

//   //css内部加载器
//   Layui.prototype.addcss = function(firename, fn, cssname){
//     return layui.link(config.dir + 'css/' + firename, fn, cssname);
//   };

//   //图片预加载
//   Layui.prototype.img = function(url, callback, error) {   
//     var img = new Image();
//     img.src = url; 
//     if(img.complete){
//       return callback(img);
//     }
//     img.onload = function(){
//       img.onload = null;
//       typeof callback === 'function' && callback(img);
//     };
//     img.onerror = function(e){
//       img.onerror = null;
//       typeof error === 'function' && error(e);
//     };  
//   };

//   //全局配置
//   Layui.prototype.config = function(options){
//     options = options || {};
//     for(var key in options){
//       config[key] = options[key];
//     }
//     return this;
//   };

//   //记录全部模块
//   Layui.prototype.modules = function(){
//     var clone = {};
//     for(var o in modules){
//       clone[o] = modules[o];
//     }
//     return clone;
//   }();

//   //拓展模块
//   Layui.prototype.extend = function(options){
//     var that = this;

//     //验证模块是否被占用
//     options = options || {};
//     for(var o in options){
//       if(that[o] || that.modules[o]){
//         error('\u6A21\u5757\u540D '+ o +' \u5DF2\u88AB\u5360\u7528');
//       } else {
//         that.modules[o] = options[o];
//       }
//     }

//     return that;
//   };

//   //路由解析
//   Layui.prototype.router = function(hash){
//     var that = this
//     ,hash = hash || location.hash
//     ,data = {
//       path: []
//       ,search: {}
//       ,hash: (hash.match(/[^#](#.*$)/) || [])[1] || ''
//     };
    
//     if(!/^#\//.test(hash)) return data; //禁止非路由规范
//     hash = hash.replace(/^#\//, '');
//     data.href = '/' + hash;
//     hash = hash.replace(/([^#])(#.*$)/, '$1').split('/') || [];
    
//     //提取Hash结构
//     that.each(hash, function(index, item){
//       /^\w+=/.test(item) ? function(){
//         item = item.split('=');
//         data.search[item[0]] = item[1];
//       }() : data.path.push(item);
//     });
    
//     return data;
//   };

//   //本地持久性存储
//   Layui.prototype.data = function(table, settings, storage){
//     table = table || 'layui';
//     storage = storage || localStorage;
    
//     if(!win.JSON || !win.JSON.parse) return;
    
//     //如果settings为null，则删除表
//     if(settings === null){
//       return delete storage[table];
//     }
    
//     settings = typeof settings === 'object' 
//       ? settings 
//     : {key: settings};
    
//     try{
//       var data = JSON.parse(storage[table]);
//     } catch(e){
//       var data = {};
//     }
    
//     if('value' in settings) data[settings.key] = settings.value;
//     if(settings.remove) delete data[settings.key];
//     storage[table] = JSON.stringify(data);
    
//     return settings.key ? data[settings.key] : data;
//   };
  
//   //本地会话性存储
//   Layui.prototype.sessionData = function(table, settings){
//     return this.data(table, settings, sessionStorage);
//   }

//   //设备信息
//   Layui.prototype.device = function(key){
//     var agent = navigator.userAgent.toLowerCase()

//     //获取版本号
//     ,getVersion = function(label){
//       var exp = new RegExp(label + '/([^\\s\\_\\-]+)');
//       label = (agent.match(exp)||[])[1];
//       return label || false;
//     }
    
//     //返回结果集
//     ,result = {
//       os: function(){ //底层操作系统
//         if(/windows/.test(agent)){
//           return 'windows';
//         } else if(/linux/.test(agent)){
//           return 'linux';
//         } else if(/iphone|ipod|ipad|ios/.test(agent)){
//           return 'ios';
//         } else if(/mac/.test(agent)){
//           return 'mac';
//         } 
//       }()
//       ,ie: function(){ //ie版本
//         return (!!win.ActiveXObject || "ActiveXObject" in win) ? (
//           (agent.match(/msie\s(\d+)/) || [])[1] || '11' //由于ie11并没有msie的标识
//         ) : false;
//       }()
//       ,weixin: getVersion('micromessenger')  //是否微信
//     };
    
//     //任意的key
//     if(key && !result[key]){
//       result[key] = getVersion(key);
//     }
    
//     //移动设备
//     result.android = /android/.test(agent);
//     result.ios = result.os === 'ios';
    
//     return result;
//   };

//   //提示
//   Layui.prototype.hint = function(){
//     return {
//       error: error
//     }
//   };

//   //遍历
//   Layui.prototype.each = function(obj, fn){
//     var key
//     ,that = this;
//     if(typeof fn !== 'function') return that;
//     obj = obj || [];
//     if(obj.constructor === Object){
//       for(key in obj){
//         if(fn.call(obj[key], key, obj[key])) break;
//       }
//     } else {
//       for(key = 0; key < obj.length; key++){
//         if(fn.call(obj[key], key, obj[key])) break;
//       }
//     }
//     return that;
//   };

//   //将数组中的对象按其某个成员排序
//   Layui.prototype.sort = function(obj, key, desc){
//     var clone = JSON.parse(
//       JSON.stringify(obj || [])
//     );

    
//     if(!key) return clone;
//         console.log(clone);
//     console.log(key);
//     console.log(obj);
//     //如果是数字，按大小排序，如果是非数字，按字典序排序
//     clone.sort(function(o1, o2){
//       var isNum = /^-?\d+$/
//       ,v1 = o1[key]
//       ,v2 = o2[key];
      
//       if(isNum.test(v1)) v1 = parseFloat(v1);
//       if(isNum.test(v2)) v2 = parseFloat(v2);
      
//       if(v1 && !v2){
//         return 1;
//       } else if(!v1 && v2){
//         return -1;
//       }
        
//       if(v1 > v2){
//         return 1;
//       } else if (v1 < v2) {
//         return -1;
//       } else {
//         return 0;
//       }
//     });

//     desc && clone.reverse(); //倒序
//     return clone;
//   };

//   //阻止事件冒泡
//   Layui.prototype.stope = function(thisEvent){
//     thisEvent = thisEvent || win.event;
//     try { thisEvent.stopPropagation() } catch(e){
//       thisEvent.cancelBubble = true;
//     }
//   };

//   //自定义模块事件
//   Layui.prototype.onevent = function(modName, events, callback){
//     if(typeof modName !== 'string' 
//     || typeof callback !== 'function') return this;

//     return Layui.event(modName, events, null, callback);
//   };

//   //执行自定义模块事件
//   Layui.prototype.event = Layui.event = function(modName, events, params, fn){
//     var that = this
//     ,result = null
//     ,filter = events.match(/\((.*)\)$/)||[] //提取事件过滤器字符结构，如：select(xxx)
//     ,eventName = (modName + '.'+ events).replace(filter[0], '') //获取事件名称，如：form.select
//     ,filterName = filter[1] || '' //获取过滤器名称,，如：xxx
//     ,callback = function(_, item){
//       var res = item && item.call(that, params);
//       res === false && result === null && (result = false);
//     };
    
//     //添加事件
//     if(fn){
//       config.event[eventName] = config.event[eventName] || {};

//       //这里不再对多次事件监听做支持，避免更多麻烦
//       //config.event[eventName][filterName] ? config.event[eventName][filterName].push(fn) : 
//       config.event[eventName][filterName] = [fn];
//       return this;
//     }
    
//     //执行事件回调
//     layui.each(config.event[eventName], function(key, item){
//       //执行当前模块的全部事件
//       if(filterName === '{*}'){
//         layui.each(item, callback);
//         return;
//       }
      
//       //执行指定事件
//       key === '' && layui.each(item, callback);
//       key === filterName && layui.each(item, callback);
//     });
    
//     return result;
//   };

//   win.layui = new Layui();
  
// }(window);

