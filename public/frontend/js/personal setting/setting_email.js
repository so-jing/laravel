define(function(require,exports,module){require("/static/lib/backbone/backbone-1.0.0.min.js");var a=require("./tpl.js"),c=Backbone.View.extend({initialize:function(){this.tpl=a,this.hasPass=hasPass},events:{"click .tpl-settingEmail .js-submit":"clickToSubmit","click .js-gotoVerity2":"clickToVerityEmail"},math:function(){var a="sohu.com::http://mail.sohu.com                         |sina.com,sina.cn :: http://mail.sina.com                         |vip.sina.com :: http://vip.sina.com.cn                         |126.com :: http://www.126.com                         |163.com :: http://mail.163.com                         |vip.163.com :: http://vip.163.com                         |vip.126.com :: http://vip.126.com                         |qq.com,vip.qq.com :: http://mail.qq.com                         |msn.com,outlook.com,hotmail.com,live.cn,live.com :: http://outlook.com                         |gmail.com :: http://www.gmail.com                         |yahoo.com.cn,yahoo.cn,aliyun.com :: http://mail.aliyun.com                         |yahoo.com.tw :: http://mail.yahoo.com.tw                         |21cn.com :: http://mail.21cn.com                         |tom.com :: http://mail.tom.com/ ",c={};$.each(a.split("|"),function(a,h){var i,v,b=h.split("::"),h=$.trim(b[1]);for(b=b[0].split(","),i=0,v=b.length;v>i;i++)c[$.trim(b[i])]=h});var h=c[this.email.match(/[^@]*$/)[0]];return h},clickToVerityEmail:function(){var a=this.math();window.open(a),window.location.reload()},timerForColse:function(){},clickToSubmit:function(){if(W.validate(this.$el.find(".tpl-settingEmail"))){$(".tpl-settingEmail .js-submit").text("正在保存...");var a={};this.email=a.email=this.$el.find(".js-email").val(),this.hasPass||(a.password=this.$el.find(".js-pwd").val(),a.password_confirm=this.$el.find(".js-surPwd").val());var c=this;$.ajax({url:"/user/ajaxbindemail",data:a,dataType:"JSON",type:"post",success:function(a){0==a.result?c.renderFinish():c.$el.find(".js-gerror").html(a.msg)},error:function(){c.$el.find(".js-gerror").html("系统出错，请稍后重试！")},complete:function(){$(".tpl-settingEmail .js-submit").text("确定")}})}},render:function(){$.dialog(this.tpl,{modal:!0,title:"绑定邮箱",width:488}),this.hasPass&&this.$el.find(".js-hassPassHide").remove()},renderFinish:function(){$(".js-modal-close").click(),$.dialog('<div class="icon-tick-revert s-right"></div>                <div class="finshBox">                 <p class="success-hint">已向<span class="color-red">'+this.email+'</span></p>发送邮件                <p>请登录邮箱点击确认链接完成验证</p><p><a style="color:#08c" href="/about/faq?t=7&id=6" target="_blank">收不到邮件怎么办</a></p><div class="cb mb30"></div>                <a  class="moco-btn moco-btn-blue js-gotoVerity2"  target="_blank">马上去验证</a>                <button class="moco-btn moco-btn-normal js-modal-close js-notVerity">暂不验证</button>                </div>                ',{modal:!0,title:"修改邮箱",width:488}),this.math(),this.timerForColse()}});module.exports=c});