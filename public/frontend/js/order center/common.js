function Destm(t,a){function e(t,a){var e="";if("object"==typeof t)for(var r in t)e+=String.fromCharCode(t[r]);t=e||t;for(var o,n,i=new Uint8Array(t.length),s=a.length,r=0;r<t.length;r++)n=r%s,o=t[r],o=o.toString().charCodeAt(0),i[r]=o^a.charCodeAt(n);return i}function r(t){var a="";if("object"==typeof t)for(var e in t)a+=String.fromCharCode(t[e]);t=a||t;var r=new Uint8Array(t.length);for(e=0;e<t.length;e++)r[e]=t[e].toString().charCodeAt(0);var o,n,e=0;for(e=0;e<r.length;e++)o=r[e]%3,0!=o&&e+o<r.length&&(n=r[e+1],r[e+1]=r[e+o],r[e+o]=n,e=e+o+1);return r}function o(t){var a="";if("object"==typeof t)for(var e in t)a+=String.fromCharCode(t[e]);t=a||t;var r=new Uint8Array(t.length);for(e=0;e<t.length;e++)r[e]=t[e].toString().charCodeAt(0);var e=0,o=0,n=0,i=0;for(e=0;e<r.length;e++)n=r[e]%2,n&&e++,i++;var s=new Uint8Array(i);for(e=0;e<r.length;e++)n=r[e]%2,s[o++]=n?r[e++]:r[e];return s}function n(t,a){var e=0,r=0,o=0,n=0,i="";if("object"==typeof t)for(var e in t)i+=String.fromCharCode(t[e]);t=i||t;var s=new Uint8Array(t.length);for(e=0;e<t.length;e++)s[e]=t[e].toString().charCodeAt(0);for(e=0;e<t.length;e++)if(n=s[e]%5,0!=n&&1!=n&&e+n<s.length&&(o=s[e+1],r=e+2,s[e+1]=s[e+n],s[n+e]=o,e=e+n+1,e-2>r))for(;e-2>r;r++)s[r]=s[r]^a.charCodeAt(r%a.length);for(e=0;e<t.length;e++)s[e]=s[e]^a.charCodeAt(e%a.length);return s}function i(t){var a,e,r,o,n,i,s;for(i=t.length,n=0,s="";i>n;){do a=u[255&t.charCodeAt(n++)];while(i>n&&-1==a);if(-1==a)break;do e=u[255&t.charCodeAt(n++)];while(i>n&&-1==e);if(-1==e)break;s+=String.fromCharCode(a<<2|(48&e)>>4);do{if(r=255&t.charCodeAt(n++),61==r)return s;r=u[r]}while(i>n&&-1==r);if(-1==r)break;s+=String.fromCharCode((15&e)<<4|(60&r)>>2);do{if(o=255&t.charCodeAt(n++),61==o)return s;o=u[o]}while(i>n&&-1==o);if(-1==o)break;s+=String.fromCharCode((3&r)<<6|o)}return s}for(var s={data:{info:t}},c={q:e,h:r,m:o,k:n},d=s.data.info,l=d.substring(d.length-4).split(""),h=0;h<l.length;h++)l[h]=l[h].toString().charCodeAt(0)%4;l.reverse();for(var f=[],h=0;h<l.length;h++)f.push(d.substring(l[h]+1,l[h]+2)),d=d.substring(0,l[h]+1)+d.substring(l[h]+2);s.data.encrypt_table=f,s.data.key_table=[];for(var h in s.data.encrypt_table)("q"==s.data.encrypt_table[h]||"k"==s.data.encrypt_table[h])&&(s.data.key_table.push(d.substring(d.length-12)),d=d.substring(0,d.length-12));s.data.key_table.reverse(),s.data.info=d;var u=new Array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,62,-1,-1,-1,63,52,53,54,55,56,57,58,59,60,61,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,-1,-1,-1,-1,-1,-1,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,-1,-1,-1,-1,-1);s.data.info=i(s.data.info);for(var h in s.data.encrypt_table){var m=s.data.encrypt_table[h];if("q"==m||"k"==m){var p=s.data.key_table.pop();s.data.info=c[s.data.encrypt_table[h]](s.data.info,p)}else s.data.info=c[s.data.encrypt_table[h]](s.data.info)}if(a)return s.data.info;var g="";for(h=0;h<s.data.info.length;h++)g+=String.fromCharCode(s.data.info[h]);return g}define("fingerprintjs",["/static/lib/fingerprintjs2/fingerprintjs2.min.js"],function(){OP_CONFIG&&(new Fingerprint2).get(function(t){OP_CONFIG.browser_key=t})}),requirejs(["fingerprintjs"]),define("registlogin",["/static/lib/login-regist/login-regist.js"],function(a){$(function(){function e(){h=$(window).height(),t=$(document).scrollTop(),t>=768?$("#backTop").show():$("#backTop").hide()}$("#js-signin-btn").on("click",function(t){t.preventDefault(),a.init()}),$("#js-signup-btn").on("click",function(t){t.preventDefault(),a.signup()}),$("#backTop").click(function(){$("html,body").animate({scrollTop:0},200)}),$(window).scroll(function(){e()})})}),requirejs(["registlogin"]),define("loadsocket",["common/js/chat"],function(){$.chat.init(),OP_CONFIG.userInfo&&$.ajax({url:"http://www.imooc.com/u/loading",dataType:"jsonp",success:function(t){if(0==t.result){var a=window.location.href.indexOf("notices"),e=window.location.href.indexOf("messages");t.data.remind>0?(_not_unread=1,$(".msg_remind").show(),(-1!=a||-1!=e)&&(t.data.remind>99?$("#not_new").find(".not-num").html("99+").show():$("#not_new").find(".not-num").html("("+t.data.remind+")").show())):(_not_unread=0,_msg_unread||$(".msg_remind").hide())}}})}),requirejs(["loadsocket"]),!function(){var t,a,e,r;if(a=window.navigator.userAgent,e=/;\s*MSIE (\d+).*?;/.exec(a),e&&+e[1]<9){if(t=document.cookie.match(/(?:^|;)\s*ic=(\d)/),t&&t[1])return;r=$(["<div id='js-compatible' class='compatible-contianer'>","<p class='cpt-ct'><i></i>您的浏览器版本过低。为保证最佳学习体验，<a href='http://www.imooc.com/static/html/browser.html'>请点此更新高版本浏览器</a></p>","<div class='cpt-handle'><a href='javascript:;' class='cpt-agin'>以后再说</a><a href='javascript:;' class='cpt-close'><i></i></a>","</div>"].join("")),$("body").prepend(r),r.width(),$("#js-compatible .cpt-agin").click(function(){var t=new Date;t.setTime(t.getTime()+2592e6),document.cookie="ic=1; expires="+t.toGMTString()+"; path=/",$("#js-compatible").remove()}),$("#js-compatible .cpt-close").click(function(){$("#js-compatible").remove()})}}(),define("globalSearch",["common/js/suggest"],function(t){var a=function(){$.ajax({url:"http://coding.imooc.com/class/ajaxsearchwords",type:"GET",dataType:"jsonp",jsonpCallback:"searchKeys",jsonp:"callback"}).done(function(t){if(0==t.result&&t.data.length>0){for(var a="",e=0;e<t.data.length;e++)a+='<a href="'+t.data[e].links+'" target="_blank">'+t.data[e].name+"</a>";$(".js-searchtags").html(a).show(),$(".search-input").attr("placeholder","")}})};a();var e=$('[data-search="top-banner"]'),r=new t(e),o=($(".search-area"),$(".showhide-search")),n=$(".search-input");$("#nav").on("click",".showhide-search",function(t){var a=$(this).attr("data-show");return"no"==a?(i(),n.focus()):""==n.val()?s():r.search(n.val()),t.stopPropagation(),!1}),$("#nav").on("click",".search-area",function(t){return t.stopPropagation(),!1}),$("#nav").on("click",".search-input",function(){$(".searchTags").hide()}),$("#nav").on("blur",".search-input",function(){0==$(this).val().length&&$(".searchTags").show()}),$("#nav").on("click",".showhide-search",function(t){$(".searchTags").hide();var a=$(this).attr("data-show");return"no"==a?(i(),n.focus()):""==n.val()?s():r.search(n.val()),t.stopPropagation(),!1});var i=function(){o.attr("data-show","yes")},s=function(){}}),requirejs(["globalSearch"]),define("certificate",["moco"],function(){var t=function(){$("#certificate-mode").show(),$("#certificate-mode-opt").show()},a=function(){$("#certificate-mode").hide(),$("#certificate-mode-opt").hide()};$(document).on("click",".js-look-certificate",function(){t()}),$("#certificate-mode-opt").on("click",function(){a()});var e=!1;$(document).on("click",".js-generate-report",function(){if(!e){e=!0;var t={};t.plan_id=$("#certificate-mode").data("id"),$.post("/sc/snapshot",t,function(a){if(e=!1,a.result){var r="/sc/"+t.plan_id+"/"+OP_CONFIG.userInfo.uid+"/data";window.location.href=r}},"json")}}),-2==OP_CONFIG.userout&&$.alert("你的账号在另一地点登录，已被强迫下线。",{info:"如果不是本人操作，建议你修改密码。",callback:function(){window.location.href="http://www.imooc.com"}})}),requirejs(["certificate"]),requirejs(["common/js/cart"]),define("initCartNumber",["common/js/cart"],function(){-1==location.href.indexOf("/pay/cart")&&$.ajax({url:"http://order.imooc.com/pay/cartorder",dataType:"jsonp",jsonp:"jsonpcallback",success:function(t){if(0==t.result&&(t.data.order&&1*t.data.order&&$(".js-cart-num").attr("data-ordernum",t.data.order),t.data.cart&&1*t.data.cart)){var a=parseInt(t.data.order);$(".js-cart-num").attr("data-cartnum",t.data.cart),$(".js-cart-num").html(parseInt(t.data.cart)+a).show()}},complete:function(){$.initGetCart()}})}),requirejs(["initCartNumber"]),requirejs(["common/js/userinfo"]),define("showUserInfo",function(){var t=0;$("#header-user-card").on("mouseenter",function(){clearTimeout(t),$(this).hasClass("hover")||$(this).addClass("hover")}).on("mouseleave",function(a){a.stopPropagation();var e=$(this);t=setTimeout(function(){e.hasClass("hover")&&e.removeClass("hover")},300)})}),requirejs(["showUserInfo"]),define("showCode",function(){$(".app-download").on("mouseenter",function(){$(".js-load-box").show(),$("#nav").addClass("addZ-indexCode")}).on("mouseleave",function(){$(".js-load-box").hide(),$("#nav").removeClass("addZ-indexCode")})}),requirejs(["showCode"]),define("showUserCart",function(){if(-1==location.href.indexOf("/pay/cart")){var t=0;$("#shop-cart").on("mouseenter",function(){clearTimeout(t),$(this).hasClass("hover")||($(this).addClass("hover"),$("#nav").addClass("addZ-index"))}).on("mouseleave",function(a){a.stopPropagation();var e=$(this);t=setTimeout(function(){e.hasClass("hover")&&(e.removeClass("hover"),$("#nav").removeClass("addZ-index"))},300)})}}),requirejs(["showUserCart"]),define("delCartGoods",function(){$("#js-my-cart").on("click",".js-close",function(){var t=this,a=$(t).parents(".js-item"),e=a.data("typeid"),r=a.data("type"),o=a.data("goodsid"),n={type_id:e,type:r,goods_id:o};$.ajax({url:"http://order.imooc.com/pay/delcartgoods",dataType:"jsonp",data:n,jsonp:"jsonpcallback",success:function(t){if("0"==t.result){a.remove();var e=$("#js-card-ul").find("li").length;if(0==e){var r='<div class="cart-title-box clearfix">                                        <h2 class="l">我的购物车</h2>                                        <h5 class="r">已加入<span class="js-incart-num">0</span>门课程</h5>                                    </div>                                    <div class="cart-wrap">                                        <div class="clear-cart">                                            <span class="cartIcon imv2-cart"></span>                                            <h3>购物车里空空如也</h3>                                            <div class="text">快去这里选购你中意的课程</div>                                            <p><a class="go-link" href="//coding.imooc.com" target="_blank">实战课程</a></p>                                            <p><a class="go-link" href="//www.imooc.com/course/program" target="_blank">职业路径</a></p>                                        </div>                                    </div>                                    <div class="more-box clearfix">                                        <div class="l show-box">                                            <span class="text"><a href="http://order.imooc.com/myorder" target="_blank">我的订单中心</a></span>                                        </div>                                        <a href="http://order.imooc.com/pay/cart" target="_blank" class="r moco-btn moco-btn-red go-cart">去购物车</a>                                    </div>';$("#js-my-cart").html(r),$(".js-cart-num").html("").attr("data-cartnum",0).hide()}else{var o=parseInt($(".js-cart-num").html()),n=parseInt($(".js-cart-num").attr("data-cartnum"));$(".js-cart-num").html(parseInt(o-1)).attr("data-cartnum",parseInt(n-1));var i=parseInt($(".js-incart-num").html());$(".js-incart-num").html(parseInt(i-1)),0==n&&$(".js-cart-num").html("").attr("data-cartnum",0).hide()}}else $.alert(t.msg)}})})}),requirejs(["delCartGoods"]),requirejs(["common/js/complete_user_info"]),OP_CONFIG.usercaution&&OP_CONFIG.usercaution.length>0&&($.alert?$.alert("警告",{info:'<span style="font-size: 14px; line-height: 24px;">'+OP_CONFIG.usercaution+"</span>",callback:function(){window.location.href="http://order.imooc.com/passport/user/logout?referer=http://order.imooc.com"}}):(alert(OP_CONFIG.usercaution),window.location.href="http://order.imooc.com/passport/user/logout?referer=http://order.imooc.com"));