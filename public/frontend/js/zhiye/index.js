define("index/index",["require"],function(){$(".js-package-buy").on("click",function(){if(!OP_CONFIG.isLogin)return void $("#js-signin-btn").trigger("click");var t=$(this).attr("data-gid");window.location.href="http://order.imooc.com/pay/confirm/goods_ids/7-"+t});var t=function(t){var a=t.find(".plan-package-box"),n=a.find(".step-line-box"),r=a.find(".plan-package-list"),e=n.find(".step-label"),i=n.find(".step-bar");n.width(e.outerWidth(!0)*e.length+i.outerWidth(!0)*i.length);var d=r.find(".plan-item"),c=d.outerWidth(!0);r.width(c*d.length-24);var o=t.find(".pre-btn"),s=t.find(".next-btn");if(a.outerWidth(!0)>=r.width())return void s.hide();s.show();var f=parseInt(d.length/4),p=parseInt(d.length%4);if(0==p)var u=f;else var u=parseInt(f+1);var l=function(t){var a=Number(parseInt(t)+1);if(o.attr("data-current",a).show(),u>t)if(1==parseInt(u-Number(t)))if(s.attr("data-current",a).hide(),0!=p)var e="-"+Number(p*c+parseInt(4*c*(t-1)))+"px";else var e="-"+parseInt(4*c*t)+"px";else{s.attr("data-current",a);var e="-"+parseInt(4*c*t)+"px"}r.animate({"margin-left":e},300),n.animate({"margin-left":e},300)},h=function(t){var a=Number(parseInt(t)-1);if(s.attr("data-current",a).show(),u>=t)if(1==a){o.attr("data-current",a).hide();var e="0px"}else{o.attr("data-current",a);var e="-"+parseInt(4*c*parseInt(Number(a-1)))+"px"}r.animate({"margin-left":e},300),n.animate({"margin-left":e},300)};s.on("click",function(){var t=$(this).attr("data-current");l(t)}),o.on("click",function(){var t=$(this).attr("data-current");h(t)})};$(function(){$(".js-plan-package")[0]&&$(".js-plan-package").each(function(){t($(this))})})});