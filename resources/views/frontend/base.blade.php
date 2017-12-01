<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>
全部课程_IT培训精品课程-慕课网
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Cache-Control" content="no-transform ">
<link rel="dns-prefetch" href="https://www.imooc.com/">
<link rel="dns-prefetch" href="https://img.imooc.com/">
<link rel="dns-prefetch" href="https://img.mukewang.com/">
<link rel="apple-touch-icon" sizes="76x76" href="https://www.imooc.com/static/img/common/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://www.imooc.com/static/img/common/touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://www.imooc.com/static/img/common/touch-icon-ipad-retina.png">

<meta name="Keywords" content="慕课网课程，IT培训精品课程">


<meta name="Description" content="慕课网精品课程，为您提供专业的IT实战开发课程，包含前端开发、后端开发、移动端开发、数据处理、图像处理等各方面IT技能，课程全面、制作精良、讲解通俗易懂。">






<script src="assets/js/jquery.js"></script>
<link charset="utf-8" rel="stylesheet" href="assets/css/poplogin-less.css">
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="assets/css/ape-a.css" rel="stylesheet">
<link href="assets/css/ape-layer.css" rel="stylesheet">
<link href="assets/css/ape-moco.css" rel="stylesheet">

<link href="assets/css/free-a.css" rel="stylesheet">
<link href="assets/css/free-moco.css" rel="stylesheet">

<link href="assets/css/note-a.css" rel="stylesheet">
<link href="assets/css/note-moco.css" rel="stylesheet"> 

<link href="assets/css/path-common-less.css" rel="stylesheet">
<link href="assets/css/path-index-less.css" rel="stylesheet">
<link href="assets/css/path-moco.css" rel="stylesheet">

<link href="assets/css/combat-a.css" rel="stylesheet">
<link href="assets/css/combat-moco.css" rel="stylesheet"> 



</head>
<body id="List_courseId">

<div id="header">

	@section('header')

   
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="http://www.imooc.com/" target="_self" class="hide-text" title="首页">慕课网</a></div>
        
        <button type="button" class="navbar-toggle visible-xs-block js-show-menu">
            <i class="sz-list"></i>
        </button>
        
        <div class="g-menu-mini l">
            <a href="javascript:;" class="menu-ctrl">
                <i class="sz-list"></i>
            </a>
            <ul class="nav-item l">
                        <li class="set-btn visible-xs-block"><a href="http://www.imooc.com/user/newlogin" target="_self">登录</a> / <a href="http://www.imooc.com/user/newsignup" target="_self">注册</a></li>
                        
            <li><a href="{{ url('free') }}" target="_self">免费课程</a></li>
            <li><a href="{{ url('path') }}" target="_self" class="program-nav">职业路径<i class="icn-new"></i></a></li>
            <li><a href="{{ url('combat') }}" class="active" target="_self">实战</a></li>
            <!--<li><a href="http://www.imooc.com/corp/index"   target="_self">分享</a></li>-->
                        <li><a href="{{ url('ape') }}" target="_self">猿问</a></li>
            <li><a href="{{ url('note') }}" target="_self">手记</a></li>
            <!--<li><a href="http://www.imooc.com/wiki" target="_self">WIKI</a></li>-->
            
                    </ul>
        </div>
                    <div id="login-area">
                <ul class="header-unlogin clearfix">
                    <li class="app-download loads" id="js-app-load">
                        <a href="http://www.imooc.com/mobile/app" target="_blank" style="width:60px;">下载APP</a>
                        <div class="app-load-box clearfix js-load-box">
                            <img src="%E5%AE%9E%E6%88%98%E8%AF%BE%E7%A8%8B_%E5%BC%80%E5%8F%91%E9%A1%B9%E7%9B%AE%E5%AE%9E%E6%88%98_%E7%BC%96%E7%A8%8B%E9%A1%B9%E7%9B%AE%E5%AE%9E%E6%88%98-%E6%85%95%E8%AF%BE%E7%BD%91_files/appload.png" class="l">
                            <div class="r">
                                <p>扫描下载慕课网APP</p>
                                <a href="https://itunes.apple.com/cn/app/mu-ke-wang/id722179140?mt=8"><i class="imv2-ios"></i>App Store下载</a>
                                <a href="http://www.imooc.com/mobile/mukewang.apk"><i class="imv2-android"></i>Android下载</a>
                            </div>
                        </div>
                    </li>
          
                    <li class="shop-cart loads" id="shop-cart">
                        <span style="padding-bottom:27px">
                        <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                            <span class="js-endcart fa fa-cart-plus"></span><span>购物车</span><span class="shopping_icon js-cart-num" data-ordernum="0" data-cartnum="0" style="display: none"></span>
                        </a>
                        <span>
                        <div class="my-cart" id="js-my-cart"><div class="cart-title-box clearfix">                                        <h2 class="l">我的购物车</h2>                                        <h5 class="r">已加入<span class="js-incart-num">0</span>门课程</h5>                                    </div>                                    <div class="cart-wrap">                                        <div class="clear-cart">                                            <span class="cartIcon fa fa-cart-plus"></span>                                            <h3>购物车里空空如也</h3>                                            <div class="text">快去这里选购你中意的课程</div>                                            <p><a class="go-link" href="http://coding.imooc.com/" target="_blank">实战课程</a></p>                                            <p><a class="go-link" href="http://www.imooc.com/course/program" target="_blank">职业路径</a></p>                                        </div>                                    </div>                                    <div class="more-box clearfix">                                        <div class="l show-box">                                            <span class="text"><a href="http://order.imooc.com/myorder" target="_blank">我的订单中心</a></span>                                        </div>                                        <a href="http://order.imooc.com/pay/cart" target="_blank" class="r moco-btn moco-btn-red go-cart">去购物车</a>                                    </div></div>
                    </li>
                    @if(0)
                    <li class="header-signin">                        
                         <a href="#" id="js-signin-btn" class="login">登录</a> / <a href="#" id="js-signup-btn" class="signup">注册</a>
                    </li> 
                    @else

  <li class="set_btn user-card-box header-signin user-login" id="header-user-card">
                    <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="http://www.imooc.com/u/5767042 

" target="_self">
                        <img src="assets/images/login.jpg" height="40" width="40">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>

                    <div class="g-user-card" style="display:inline-block;"><div class="card-inner" style="display:inline-block;">                        <div class="card-top clearfix" style="display:inline-block;">                            <a href="http://www.imooc.com/u/5767042 

" class="l"><img src="assets/images/login.jpg" alt="qq_夜的寂静_0"></a>                            <div class="card-top-right-box l">                                <a href="http://www.imooc.com/u/5767042 

"><span class="name text-ellipsis">qq_夜的寂静_0</span></a>                                <div class="meta">                                    <a href="http://www.imooc.com/u/5767042/experience 

">经验<b id="js-user-mp">220</b></a>                                    <a href="http://www.imooc.com/u/5767042/credit 

">积分<b id="js-user-credit">0</b></a>                                </div>                            </div>                        </div>                        <div class="user-center-box">                            <ul class="clearfix">                                <li class="l"><a href="http://www.imooc.com/u/5767042/courses 

" target="_blank"><span class="user-center-icon icon-tick"></span>我的课程</a></li>                                <li class="l">                                    <a href="http://order.imooc.com/myorder 

" target="_blank"><span class="user-center-icon icon-receipt"></span>订单中心</a>                                                                    </li>                                <li class="l"><a href="http://www.imooc.com/mall/index 

" target="_blank"><span class="user-center-icon icon-score_shop"></span>积分商城</a></li>                                <li class="l"><a href="http://www.imooc.com/user/setbindsns 

" target="_blank"><span class="user-center-icon icon-set"></span>个人设置</a></li></li>                           </ul>                        </div><div class="card-history">                            <span class="history-item">                                <span class="tit text-ellipsis">轻松学会Laravel-基础篇</span>                                <span class="media-name text-ellipsis">4-2 使用DB facade实现CURD</span>                                <i class="icon-clock"></i>                                <a href="http://www.imooc.com/video/12500 

" class="continue" title="轻松学会Laravel-基础篇
4-2  使用DB facade实现CURD">继续</a>                            </span>                    </div><div class="card-sets clearfix"><a href="http://www.imooc.com/passport/user/logout?referer=//www.imooc.com 

" class="l">安全退出</a></div>                    </div></div>
                </li>

                    @endif

                </ul>
            </div>
                    <div class="search-warp clearfix" style="min-width: 32px;">

                <div class="pa searchTags js-searchtags" style="display: block;"><a href="http://class.imooc.com/sc/20" target="_blank">前端入门</a><a href="http://class.imooc.com/sc/18" target="_blank">Java入门</a></div>

                <div class="search-area" data-search="top-banner">
                    <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="" autocomplete="off" type="text">
                    <input class="btn_search" data-search-btn="search-btn" type="hidden">
                    <ul class="search-area-result" data-suggest-result="suggest-result">
                    </ul>
                </div>
                <div class="showhide-search" data-show="no"><i class="fa fa-search"></i></div>
            </div>
        </div>
        </div>
        






	
@show
	
		
		
		
			
                         @yield('content')
                     



	
		
		<div id="footer">
    @section('footer')
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;" target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973" target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="https://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="https://www.imooc.com/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="https://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="https://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <li> <a href="https://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="https://www.imooc.com/about/faq" target="_blank">常见问题</a></li>
                        <li> <a href="https://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="https://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                       <!--  <li><a href="/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


<div id="J_GotoTop" class="elevator">

    <a href="https://www.imooc.com/user/feedback" class="elevator-msg" target="_blank">
        <i class="icon-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="https://www.imooc.com/about/faq" class="elevator-faq" target="_blank">
        <i class="icon-ques"></i>
        <span class="">常见问题</span>
    </a>
    <a href="https://www.imooc.com/mobile/app" target="_blank" class="elevator-app">
        <i class="icon-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin">
        <i class="icon-wxgzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="icon-up2"></i>
        <span class="">返回顶部</span>
    </a>
</div>














<div id="signin" class="rl-modal in" aria-hidden="false" style="display:none">        <div class="rl-modal-header">         <h1>                <span class="active-title login">登录</span>              <span data-fromto="signin:signup" class="xa-showSignup signup">注册</span>            </h1>           <button type="button" class="rl-close fa fa-close"> </button>     </div>          <div class="rl-modal-body js-loginWrap  login-div" style="display:none">          <div class="clearfix">              <div class="l-left-wrap l">                 <form id="signup-form" autocomplete="off">                      <p class="rlf-tip-globle color-red" id="signin-globle-error"></p>                       <div class="rlf-group pr">                          <input maxlength="37" name="email" data-validate="require-mobile-phone" autocomplete="off" class="xa-emailOrPhone ipt ipt-email js-own-name" placeholder="请输入登录邮箱/手机号" type="text">                         <p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确的邮箱或手机号"></p>                     </div>                      <div class="rlf-group  pr">                         <input name="password" data-validate="require-password" class="ipt ipt-pwd js-loginPassword js-pass-pwd" placeholder="6-16位密码，区分大小写，不能用空格" maxlength="16" autocomplete="off" type="password">                           <p class="rlf-tip-wrap errorHint color-red " data-error-hint="请输入6-16位密码，区分大小写，不能使用空格！"></p>                        </div>                                              <div class="rlf-group clearfix form-control js-verify-row" style="display: none;">                          <input name="verify" class="ipt ipt-verify l" data-validate="require-string" data-callback="checkverity" maxlength="4" data-minlength="4" placeholder="请输入验证码" type="text">                         <a href="javascript:void(0)" hidefocus="true" class="verify-img-wrap js-verify-refresh"></a>                            <a href="javascript:void(0)" hidefocus="true" class="icon-refresh js-verify-refresh"></a>                           <p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确验证码"></p>                     </div>                      <div class="rlf-group rlf-appendix form-control  clearfix">                         <label for="auto-signin" class="rlf-autoin l" hidefocus="true"><input checked="checked" class="auto-cbx" id="auto-signin" type="checkbox">7天内自动登录</label>                           <a href="https://www.imooc.com/user/newforgot" class="rlf-forget r" target="_blank" hidefocus="true">忘记密码 </a>                      </div>                      <div class="rlf-group clearfix">                            <input value="登录" hidefocus="true" class="btn-red btn-full xa-login" type="button">                     </div>                  </form>             </div>          </div>        </div>    


<div class="rl-modal-body js-modal-body js-registerWrap signup-div" style="display:none">
                <form id="signup-form pr">
                    <p class="rlf-tip-globle color-red rlf-g-tip" id="signup-globle-error"></p>
                    <div class="rlf-group  pr">
                        <input maxlength="37" name="email" data-callback="checkusername" data-validate="require-mobile-phone" autocomplete="off" class="xa-emailOrPhone ipt ipt-email " placeholder="请输入注册邮箱/手机号" type="text">
                        <p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确的邮箱或手机号"></p>
                    </div>
                    <div class="rlf-group proclaim-loc pr xa-passwordWrap hide">
                        <a href="javascript:void(0)" hidefocus="true" class="proclaim-btn js-proclaim icon-show-pw is-pwd" tabindex="-1"></a>
                        <input name="password" data-validate="require-password" class="ipt ipt-pwd js-pass-pwd" placeholder="6-16位密码，区分大小写，不能用空格" maxlength="16" autocomplete="off" type="password">
                        <p class="rlf-tip-wrap errorHint color-red " data-error-hint="请输入6-16位密码，区分大小写，不能使用空格！"></p>
                    </div>
                    <div class="rlf-group clearfix form-control ">
                        <input name="verify" class="ipt ipt-verify js-emailverify l" data-validate="require-string" data-callback="checkverity" maxlength="4" data-minlength="4" placeholder="请输入验证码" type="text">
                        <a href="javascript:void(0)" hidefocus="true" class="verify-img-wrap js-verify-refresh">
                            <img class="verify-img" src="%E6%85%95%E8%AF%BE%E7%BD%91-%E7%A8%8B%E5%BA%8F%E5%91%98%E7%9A%843333%E6%A2%A6%E5%B7%A5%E5%8E%82_files/verifycode.png">
                        </a>
                        <a href="javascript:void(0)" hidefocus="true" class="icon-refresh js-verify-refresh"></a>
                        <p class="rlf-tip-wrap errorHint color-red" data-error-hint="验证码错误"></p>
                    </div>
                    <div class="rlf-group rlf-appendix form-control  clearfix" style="margin-bottom:0">
                        <label for="signup-protocol" class="rlf-autoin l" hidefocus="true">
                            <input checked="checked" class="auto-cbx" id="signup-protocol" type="checkbox">
                            同意<a target="_blank" href="https://www.imooc.com/about/faq?t=7&amp;id=27">慕课网注册协议</a>
                        </label>
                        <p class="rlf-tip-wrap errorHint color-red" data-error-hint="请同意慕课网注册协议"></p>
                    </div>
                    <div class="rlf-group clearfix">
                        <a href="javascript:void(0)" id="signup-btn" hidefocus="true" class="btn-red btn-full btn r">注册 </a>
                    </div>
                </form>
            </div>



      <div class="rl-model-footer">         <div class="pop-login-sns clearfix">                <span class="l " style="color:#666">其他方式登录</span>               <a href="javascript:void(0)" hidefocus="true" data-login-sns="/passport/user/tplogin?tp=weibo" class="pop-sns-weibo r mr60"><i class="icon-weibo"></i></a>              <a href="javascript:void(0)" hidefocus="true" data-login-sns="/passport/user/tplogin?tp=weixin" class="pop-sns-weixin r"><i class="icon-weixin"></i></a>                <a href="javascript:void(0)" hidefocus="true" data-login-sns="/passport/user/tplogin?tp=qq" class="pop-sns-qq r"><i class="icon-qq"></i></a>            </div>           <div class="erweima xa-showQrcode"></div>        </div>        </div>  <div class="modal-backdrop  in" style="display:none"></div></body></html>


<script>
    $(function (){
        $(".loads").hover(
              function (){$(this).find('div').css('display','block')},
              function (){$(this).find('div').css('display','none')}  
        );       
        
    });
</script>





<script>
  $(document).on('click','.login',function(){
        $('.login').addClass('active-title');
        $('.signup').removeClass('active-title');
        $("#signin").show();
        $(".login-div").show();
        $(".signup-div").hide();
        $('.modal-backdrop').show();

  })


    $(document).on('click','.signup',function(){
        $('.signup').addClass('active-title');
        $('.login').removeClass('active-title');
        $("#signin").show();
        $(".signup-div").show();
        $(".login-div").hide();
        $('.modal-backdrop').show();

  })


    $(document).on('click','.rl-close',function(){
        
        
         $("#signin").hide();
        $('.modal-backdrop').hide();

  })
</script>


</body>

    @show  



