define(function(require,exports){function a(a){function c(a,c,h){var g="";return"2"==h&&(g+='<li class="teacher"><a href="###" title="慕课网讲师"></a></li>'),a&&(g+='<li class="great"><a href="###" title="认证作者"></a></li>'),c&&(g+='<li class="ismooc"><a href="###" title="慕星人"></a></li>'),g}return['<li class="hd-pic">','<a class="publisher-name" title="',a.nickname,'" href="/u/',a.uid,'/articles" target="_blank">',a.nickname,"</a>","</li>",c(a.is_author,a.is_mustar,a.user_type)].join("")}function c(c){for(var h=$(".left-info"),g=0,j=h.length;j>g;g++)for(var i=0,v=c.length;v>i;i++)h.eq(g).attr("data-fuid")==c[i].uid&&h.eq(g).prepend(a(c[i]))}function h(){if("undefined"!=typeof uidArr&&uidArr.length>0){var a,h=uidArr.join(",");$.ajax({url:"/u/getuserinfo?uid="+h,type:"get",dataType:"json",success:function(h){0===h.result&&(a=h.data,c(a))},error:function(){},complete:function(){}})}}exports.init=h});