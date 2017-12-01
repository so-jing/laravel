@extends('frontend/base')



@section('content')

<div id="main">


<div class="wenda clearfix">

    <div class="js-layout-change">
        <div class="l wenda-main">
            <div class="wd-top-slogan">
                <span>程序员自己的问答社区</span>
                <a class="js-quiz" href="javascript:void(0);">我要提问</a>
            </div>
            <div class="nav">
                <a href="http://www.imooc.com/wenda" class="active">推荐</a>
                <a href="http://www.imooc.com/wenda/new">最新</a>
                <a href="http://www.imooc.com/wenda/waitreply">等待回答</a>
                <a href="http://www.imooc.com/wenda/issue">话题</a>
                                <div class="switch-box">
                    <span>只显示关注内容</span>
                    
                    <div class="switch js-switch">
                        <div class="fill">
                            <div class="outer"></div>
                        </div>
                        <div class="inner"></div>              
                    </div>   
                </div>

                            </div><!--.nav end-->

            
                                    <!--推荐位-->
            <ul class="recommend">
                                <li>
                                        <span class="recommend-tag">推荐</span>
                                        <a href="http://www.imooc.com/wenda/detail/383123" class="recommend-link" data-ast="yuanwenindex_1_1461" target="_blank" title="【有奖问答】与技术大咖探讨前端JavaScript开发">【有奖问答】与技术大咖探讨前端JavaScript开发</a>
                </li>
                            </ul>
            <!--recommend end-->
                                   


            <!--左侧列表内容-->
            <div class="wenda-list">
                <script>
    window._bd_share_config = {
        share : [
                                    {
                "tag" : 'share_383268',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383268',
                "bdText":'[慕课猿问：函数，编程过程 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_270137',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/270137',
                        "bdText":'[慕课猿问：函数，编程过程 回答者:慕用4063026 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383265',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383265',
                "bdText":'[慕课猿问：编程过程的解析 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_270132',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/270132',
                        "bdText":'[慕课猿问：编程过程的解析 回答者:慕用4063026 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383239',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383239',
                "bdText":'[慕课猿问：第六和第八行出现 非法表达式开始 求解 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_270116',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/270116',
                        "bdText":'[慕课猿问：第六和第八行出现 非法表达式开始 求解 回答者:Jehezekel3415849 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383123',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383123',
                "bdText":'[慕课猿问：【有奖问答】与大咖交流前端JS与框架开发，免费赢取前端图书（11.28-12.4） (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_269840',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/269840',
                        "bdText":'[慕课猿问：【有奖问答】与大咖交流前端JS与框架开发，免费赢取前端图书（11.28-12.4） 回答者:谢小波 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_320982',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/320982',
                "bdText":'[慕课猿问：刷分零容忍！关于刷分用户的处罚公告 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_173959',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/173959',
                        "bdText":'[慕课猿问：刷分零容忍！关于刷分用户的处罚公告 回答者:爱生活爱胖胖 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_321340',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/321340',
                "bdText":'[慕课猿问：腾讯游戏大牛在线，有问题尽管来 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_175008',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/175008',
                        "bdText":'[慕课猿问：腾讯游戏大牛在线，有问题尽管来 回答者:xiemioc (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_344091',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/344091',
                "bdText":'[慕课猿问：各位猿或者媛，一般几点睡啊。有时忍住头痛看java到很晚，第二天就头痛一整天 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_231626',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/231626',
                        "bdText":'[慕课猿问：各位猿或者媛，一般几点睡啊。有时忍住头痛看java到很晚，第二天就头痛一整天 回答者:肖申克de救赎 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383215',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383215',
                "bdText":'[慕课猿问：bootstrap的字体图标 (分享自@慕课网)#慕课爱分享#'
            }
                                        ,            {
                "tag" : 'share_328864',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/328864',
                "bdText":'[慕课猿问：本人13岁，现在学还来得及吗？ (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_194427',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/194427',
                        "bdText":'[慕课猿问：本人13岁，现在学还来得及吗？ 回答者:慕粉3905628 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383242',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383242',
                "bdText":'[慕课猿问：线性表的基址？ (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_270134',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/270134',
                        "bdText":'[慕课猿问：线性表的基址？ 回答者:慕用4063026 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383238',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383238',
                "bdText":'[慕课猿问：为什么那两个字符一直是a，c？ (分享自@慕课网)#慕课爱分享#'
            }
                                        ,            {
                "tag" : 'share_325341',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/325341',
                "bdText":'[慕课猿问：遇见好答案，Android开发问答专场 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_185072',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/185072',
                        "bdText":'[慕课猿问：遇见好答案，Android开发问答专场 回答者:beijiyaya恋雨心声 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_338299',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/338299',
                "bdText":'[慕课猿问：java好学吗.??pp (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_217545',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/217545',
                        "bdText":'[慕课猿问：java好学吗.??pp 回答者:时光_冰释 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383237',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383237',
                "bdText":'[慕课猿问：页面显示加载条 (分享自@慕课网)#慕课爱分享#'
            }
                                        ,            {
                "tag" : 'share_332686',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/332686',
                "bdText":'[慕课猿问：话说，大家想编程的最初初衷是什么 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_204239',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/204239',
                        "bdText":'[慕课猿问：话说，大家想编程的最初初衷是什么 回答者:JustWannaHugU (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383235',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383235',
                "bdText":'[慕课猿问：我是小白一枚，希望今后各位大牛能够多多帮助，请问这个java中，求差，求平均值如何求取 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_270074',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/270074',
                        "bdText":'[慕课猿问：我是小白一枚，希望今后各位大牛能够多多帮助，请问这个java中，求差，求平均值如何求取 回答者:慕用2109279 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_362945',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/362945',
                "bdText":'[慕课猿问：29岁大龄单身女0基础想转行学IT (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_263031',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/263031',
                        "bdText":'[慕课猿问：29岁大龄单身女0基础想转行学IT 回答者:长相思兮长相忆yun (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383199',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383199',
                "bdText":'[慕课猿问：下面这句C语言代码是什么意思啊？ (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_270021',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/270021',
                        "bdText":'[慕课猿问：下面这句C语言代码是什么意思啊？ 回答者:伪架构师 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383159',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383159',
                "bdText":'[慕课猿问：各位大神们麻烦您们看下sql小白的问题吧。。谢谢了。。 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_269966',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/269966',
                        "bdText":'[慕课猿问：各位大神们麻烦您们看下sql小白的问题吧。。谢谢了。。 回答者:_Fang618 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_329082',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/329082',
                "bdText":'[慕课猿问：【问答专场】实力派--Linux大棚来了，更有linux图书免费送 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_195095',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/195095',
                        "bdText":'[慕课猿问：【问答专场】实力派--Linux大棚来了，更有linux图书免费送 回答者:time_is_everything (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_318331',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/318331',
                "bdText":'[慕课猿问：前端一起学，一起奋斗，一起有个学习的圈子！！！ (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_169066',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/169066',
                        "bdText":'[慕课猿问：前端一起学，一起奋斗，一起有个学习的圈子！！！ 回答者:慕女神 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_319125',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/319125',
                "bdText":'[慕课猿问： 积分商城上线，超多好礼等你来兑 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_170531',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/170531',
                        "bdText":'[慕课猿问： 积分商城上线，超多好礼等你来兑 回答者:丶包菜 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_330117',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/330117',
                "bdText":'[慕课猿问：【慕课网】安卓v5.0.0版本功能升级 新界面新体验 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_197596',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/197596',
                        "bdText":'[慕课猿问：【慕课网】安卓v5.0.0版本功能升级 新界面新体验 回答者:LovingJava (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_327235',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/327235',
                "bdText":'[慕课猿问：前端找不到实习，想放弃了怎么办? (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_190022',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/190022',
                        "bdText":'[慕课猿问：前端找不到实习，想放弃了怎么办? 回答者:疯子520520 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_351144',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/351144',
                "bdText":'[慕课猿问：为啥要做程序员，初心是什么？ (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_245861',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/245861',
                        "bdText":'[慕课猿问：为啥要做程序员，初心是什么？ 回答者:望远 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_337758',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/337758',
                "bdText":'[慕课猿问：遇见好答案---Python编程问答专场 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_216407',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/216407',
                        "bdText":'[慕课猿问：遇见好答案---Python编程问答专场 回答者:tanhouyusheng (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383154',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383154',
                "bdText":'[慕课猿问：PHP好就业吗？ (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_269915',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/269915',
                        "bdText":'[慕课猿问：PHP好就业吗？ 回答者:耗子老陕 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_332055',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/332055',
                "bdText":'[慕课猿问：我长得丑，我适合学编程吗？ (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_202458',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/202458',
                        "bdText":'[慕课猿问：我长得丑，我适合学编程吗？ 回答者:蜂之谷 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383194',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383194',
                "bdText":'[慕课猿问：PHP是不是在衰落了啊 (分享自@慕课网)#慕课爱分享#'
            }
                                                    ,{
                        "tag" : 'share_answer_270019',
                        "bdUrl" : 'https://www.imooc.com/wenda/wdanswer/270019',
                        "bdText":'[慕课猿问：PHP是不是在衰落了啊 回答者:伪架构师 (分享自@慕课网)#慕课爱分享#'
                    }
                                                        ,            {
                "tag" : 'share_383256',
                "bdUrl" : 'https://www.imooc.com/wenda/detail/383256',
                "bdText":'[慕课猿问：css属性问题 (分享自@慕课网)#慕课爱分享#'
            }
                            
        ]
    };
</script>

<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/28" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e980001d29602400240.jpg" title="C">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/28" target="_blank">C</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383268" class="ques-con-content" target="_blank" title="函数，编程过程">函数，编程过程</a>
        
    </div>
        <div class="answer-con first" data-answer-id="270137" id="answer-con">
        <div class="user">
            
                        <span class="had-solve">已采纳</span>
                        <a href="http://www.imooc.com/u/5965186/bbs" target="_blank">慕用4063026</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">&lt;...code...&gt;<span class="see-more">[ 查看全部 ]</span></div>
        <div class="answer-content-all rich-text aimgPreview"><table class="syntaxhighlighter  cpp" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div><div class="line number13 index12 alt2">13</div><div class="line number14 index13 alt1">14</div><div class="line number15 index14 alt2">15</div><div class="line number16 index15 alt1">16</div><div class="line number17 index16 alt2">17</div><div class="line number18 index17 alt1">18</div><div class="line number19 index18 alt2">19</div><div class="line number20 index19 alt1">20</div><div class="line number21 index20 alt2">21</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="cpp preprocessor">#include&nbsp;&lt;stdio.h&gt;</code></div><div class="line number2 index1 alt1"><code class="cpp color1 bold">int</code>&nbsp;<code class="cpp plain">main()</code></div><div class="line number3 index2 alt2"><code class="cpp plain">{</code></div><div class="line number4 index3 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp color1 bold">int</code>&nbsp;<code class="cpp plain">a[11];&nbsp;</code><code class="cpp comments">/*&nbsp;为了符合习惯,&nbsp;第0号元素不用&nbsp;*/</code></div><div class="line number5 index4 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp color1 bold">int</code>&nbsp;<code class="cpp plain">i,&nbsp;j,&nbsp;cup;</code></div><div class="line number6 index5 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp functions bold">printf</code><code class="cpp plain">(</code><code class="cpp string">"Input&nbsp;10&nbsp;numbers:/n"</code><code class="cpp plain">);</code></div><div class="line number7 index6 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">for</code><code class="cpp plain">(i&nbsp;=&nbsp;1;&nbsp;i&nbsp;&lt;&nbsp;11;&nbsp;i++)</code></div><div class="line number8 index7 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp functions bold">scanf</code><code class="cpp plain">(</code><code class="cpp string">"%d"</code><code class="cpp plain">,&nbsp;&amp;a[i]);</code></div><div class="line number9 index8 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">for</code><code class="cpp plain">(i&nbsp;=&nbsp;1;&nbsp;i&nbsp;&lt;=&nbsp;9;&nbsp;i++)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp comments">/*&nbsp;趟数&nbsp;*/</code></div><div class="line number10 index9 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">for</code><code class="cpp plain">(j&nbsp;=&nbsp;1;&nbsp;j&nbsp;&lt;=&nbsp;10&nbsp;-&nbsp;i;&nbsp;j++)&nbsp;&nbsp;</code><code class="cpp comments">/*&nbsp;每趟要比较数&nbsp;*/</code></div><div class="line number11 index10 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">if</code><code class="cpp plain">(a[j]&nbsp;&gt;&nbsp;a[j+1])&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp comments">/*&nbsp;前面数大于后面数刚对调&nbsp;*/</code></div><div class="line number12 index11 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp plain">{</code></div><div class="line number13 index12 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp plain">cup&nbsp;=&nbsp;a[j];</code></div><div class="line number14 index13 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp plain">a[j]&nbsp;=&nbsp;a[j+1];</code></div><div class="line number15 index14 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp plain">a[j+1]&nbsp;=&nbsp;cup;</code></div><div class="line number16 index15 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp plain">}</code></div><div class="line number17 index16 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp functions bold">printf</code><code class="cpp plain">(</code><code class="cpp string">"The&nbsp;sorted&nbsp;numbers:/n"</code><code class="cpp plain">);</code></div><div class="line number18 index17 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">for</code><code class="cpp plain">(i&nbsp;=&nbsp;1;&nbsp;i&nbsp;&lt;11;&nbsp;i++)</code></div><div class="line number19 index18 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp functions bold">printf</code><code class="cpp plain">(</code><code class="cpp string">"%d&nbsp;"</code><code class="cpp plain">,&nbsp;a[i]);</code></div><div class="line number20 index19 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">return</code>&nbsp;<code class="cpp plain">0;</code></div><div class="line number21 index20 alt2"><code class="cpp plain">}</code></div></div></td></tr></tbody></table><p><br></p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383268" data-answer-id="270137" data-hasop=""><b>赞同</b></span>
            <span class="oppose " data-ques-id="383268" data-answer-id="270137" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087634811" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_270137" data-quesid="383268">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="270137" data-ques-uid="6137648">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/28" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e980001d29602400240.jpg" title="C">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/28" target="_blank">C</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383265" class="ques-con-content" target="_blank" title="编程过程的解析">编程过程的解析</a>
        
    </div>
        <div class="answer-con first" data-answer-id="270132" id="answer-con">
        <div class="user">
            
                        <span class="had-solve">已采纳</span>
                        <a href="http://www.imooc.com/u/5965186/bbs" target="_blank">慕用4063026</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">&lt;...code...&gt;<span class="see-more">[ 查看全部 ]</span></div>
        <div class="answer-content-all rich-text aimgPreview"><table class="syntaxhighlighter  cpp" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div><div class="line number13 index12 alt2">13</div><div class="line number14 index13 alt1">14</div><div class="line number15 index14 alt2">15</div><div class="line number16 index15 alt1">16</div><div class="line number17 index16 alt2">17</div><div class="line number18 index17 alt1">18</div><div class="line number19 index18 alt2">19</div><div class="line number20 index19 alt1">20</div><div class="line number21 index20 alt2">21</div><div class="line number22 index21 alt1">22</div><div class="line number23 index22 alt2">23</div><div class="line number24 index23 alt1">24</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="cpp plain">修改：</code></div><div class="line number2 index1 alt1"><code class="cpp keyword bold">for</code><code class="cpp plain">(i=0;i&lt;100;i++){</code></div><div class="line number3 index2 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">while</code><code class="cpp plain">(i%2==0)</code></div><div class="line number4 index3 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp plain">n++;</code><code class="cpp comments">//偶数和</code></div><div class="line number5 index4 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">while</code><code class="cpp plain">(i%2!=0)</code></div><div class="line number6 index5 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp plain">s++;</code><code class="cpp comments">//质数和</code></div><div class="line number7 index6 alt2"><code class="cpp plain">}</code></div><div class="line number8 index7 alt1"><code class="cpp plain">求n判定素数：</code></div><div class="line number9 index8 alt2"><code class="cpp preprocessor">#include&lt;stdio.h&gt;</code></div><div class="line number10 index9 alt1"><code class="cpp preprocessor">#include&lt;math.h&gt;</code></div><div class="line number11 index10 alt2"><code class="cpp keyword bold">void</code>&nbsp;<code class="cpp plain">main()</code></div><div class="line number12 index11 alt1"><code class="cpp plain">{</code></div><div class="line number13 index12 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;</code><code class="cpp color1 bold">int</code>&nbsp;<code class="cpp plain">mn,i,k;</code></div><div class="line number14 index13 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;</code><code class="cpp functions bold">printf</code><code class="cpp plain">(</code><code class="cpp string">"请输入一个整数："</code><code class="cpp plain">);</code></div><div class="line number15 index14 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;</code><code class="cpp functions bold">scanf</code><code class="cpp plain">(</code><code class="cpp string">"%d"</code><code class="cpp plain">,&amp;n);</code></div><div class="line number16 index15 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;</code><code class="cpp plain">k=(</code><code class="cpp color1 bold">int</code><code class="cpp plain">)</code><code class="cpp functions bold">sqrt</code><code class="cpp plain">(n);</code></div><div class="line number17 index16 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">for</code><code class="cpp plain">(i=2;i&lt;=k;i++)</code></div><div class="line number18 index17 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">if</code><code class="cpp plain">(m%i==0)</code></div><div class="line number19 index18 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">break</code><code class="cpp plain">;</code></div><div class="line number20 index19 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">if</code><code class="cpp plain">(i&gt;k)</code></div><div class="line number21 index20 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp functions bold">printf</code><code class="cpp plain">(</code><code class="cpp string">"%d&nbsp;是素数。\n"</code><code class="cpp plain">,n);</code></div><div class="line number22 index21 alt1"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;</code><code class="cpp keyword bold">else</code></div><div class="line number23 index22 alt2"><code class="cpp spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="cpp functions bold">printf</code><code class="cpp plain">(</code><code class="cpp string">"%d&nbsp;不是素数。\n"</code><code class="cpp plain">,n);</code></div><div class="line number24 index23 alt1"><code class="cpp plain">}</code></div></div></td></tr></tbody></table><p><br></p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383265" data-answer-id="270132" data-hasop=""><b>赞同</b></span>
            <span class="oppose " data-ques-id="383265" data-answer-id="270132" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087634860" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_270132" data-quesid="383265">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="270132" data-ques-uid="6137648">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/3" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e9700900012e3602400240.jpg" title="JAVA">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/3" target="_blank">JAVA</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383239" class="ques-con-content" target="_blank" title="public class hui07{  public static void main(String[] args)  {       long result = 0;        for (int i = 1;i &amp;lt;= 99;i+ = 2)       {           result+ = i;        }       System.out.println(&quot;result = &quot;+result);   }}">第六和第八行出现 非法表达式开始 求解</a>
        
    </div>
        <div class="answer-con first" data-answer-id="270116" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/3415849/bbs" target="_blank">Jehezekel3415849</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">&lt;...code...&gt;<span class="see-more">[ 查看全部 ]</span></div>
        <div class="answer-content-all rich-text aimgPreview"><table class="syntaxhighlighter  java" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="java keyword">public</code>&nbsp;<code class="java keyword">class</code>&nbsp;<code class="java plain">hui07</code></div><div class="line number2 index1 alt1"><code class="java plain">{</code></div><div class="line number3 index2 alt2"><code class="java spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="java keyword">public</code>&nbsp;<code class="java keyword">static</code>&nbsp;<code class="java keyword">void</code>&nbsp;<code class="java plain">main(String[]&nbsp;args)</code></div><div class="line number4 index3 alt1"><code class="java spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="java plain">{</code></div><div class="line number5 index4 alt2"><code class="java spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="java keyword">long</code>&nbsp;<code class="java plain">result&nbsp;=&nbsp;</code><code class="java value">0</code><code class="java plain">;</code></div><div class="line number6 index5 alt1"><code class="java spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="java keyword">for</code>&nbsp;<code class="java plain">(</code><code class="java keyword">int</code>&nbsp;<code class="java plain">i&nbsp;=&nbsp;</code><code class="java value">1</code><code class="java plain">;i&nbsp;&lt;=&nbsp;</code><code class="java value">99</code><code class="java plain">;i&nbsp;+=&nbsp;</code><code class="java value">2</code><code class="java plain">)</code><code class="java comments">//此处自增"&nbsp;+=&nbsp;",而不是"+&nbsp;="。</code></div><div class="line number7 index6 alt2"><code class="java spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="java plain">{</code></div><div class="line number8 index7 alt1"><code class="java spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="java plain">result&nbsp;+=&nbsp;i;</code><code class="java comments">//此处自增"&nbsp;+=&nbsp;",而不是"+&nbsp;="。</code></div><div class="line number9 index8 alt2"><code class="java spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="java plain">}</code></div><div class="line number10 index9 alt1"><code class="java spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="java plain">System.out.println(</code><code class="java string">"result&nbsp;=&nbsp;"</code><code class="java plain">+result);</code></div><div class="line number11 index10 alt2"><code class="java spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="java plain">}</code></div><div class="line number12 index11 alt1"><code class="java plain">}</code></div></div></td></tr></tbody></table><p><br></p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383239" data-answer-id="270116" data-hasop=""><b>赞同</b><em>1</em></span>
            <span class="oppose " data-ques-id="383239" data-answer-id="270116" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087634900" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_270116" data-quesid="383239">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="270116" data-ques-uid="6203505">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/22" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ed90001e4e702400240.jpg" title="AngularJS">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/22" target="_blank">AngularJS</a>
                <a href="http://www.imooc.com/wenda/5" target="_blank">Html/CSS</a>
                <a href="http://www.imooc.com/wenda/17" target="_blank">JavaScript</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383123" class="ques-con-content" target="_blank" title="&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;前端开发并不简单，哪怕对于初级甚至中级的前端开发者来说，即使他们有一定的JavaScript代码功底，如果单纯交代他们实现一个前端功能，他们可能也可以实现出来，但他们的实现风格要么乱七八糟，要么“随心所欲”。如果你对前端开发有兴趣或前端技术水平无法提升欢迎参与到这一期的话题活动，与技术嘉宾探讨前端JavaScript与框架开发同时你还将有机会获得嘉宾亲笔著作的前端图书哦！&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 那么好的学习机会，还不如赶紧来参与↓李刚，十余年软件开发从业者疯狂软件教育中心教学总...">【有奖问答】与大咖交流前端JS与框架开发，免费赢取前端图书（11.28-12.4）</a>
        
    </div>
        <div class="answer-con first" data-answer-id="269840" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/5787526/bbs" target="_blank">谢小波</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">我觉得不管学习哪门语言，到后面总还是要学习一下规范，程序员的素养必不可少啊！！</div>
        <div class="answer-content-all rich-text aimgPreview"><p>我觉得不管学习哪门语言，到后面总还是要学习一下规范，程序员的素养必不可少啊！！</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383123" data-answer-id="269840" data-hasop=""><b>赞同</b><em>10</em></span>
            <span class="oppose " data-ques-id="383123" data-answer-id="269840" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087634949" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_269840" data-quesid="383123">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="269840" data-ques-uid="10000">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/26" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96eb100019d5902400240.jpg" title="前端工具">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/26" target="_blank">前端工具</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/320982" class="ques-con-content" target="_blank" title="还是很多用户忘记初心，近期检查到很多用户恶意刷分的行为，也已进行处罚~~同时欢迎其他用户来举报慕课积分体系全新上线后，慕女神收到部分用户的举报，说有人恶意进行刷积分行为，已经严重影响到竞技的公平性和其他用户的竞技体验。针对此问题，慕女神和团队迅速进行了排查，收集以及监控所有影响用户公平赚积分的行为（课程、猿问、手记、第三方分享），发现了该ID1949284的用户存在严重作弊行为→利用马甲在猿问自问自答，课程恶意刷积分，特此发出公告↓↓慕课网将对ID为1949284的用户进行如下处理：1、清除作弊数据记录；2、永久冻结他的马甲号希望大家能以此为鉴，不要忽略了来慕课网的初衷，积分只是我们学习的一个...">刷分零容忍！关于刷分用户的处罚公告</a>
        
    </div>
        <div class="answer-con first" data-answer-id="173959" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/112179/bbs" target="_blank">爱生活爱胖胖</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">&nbsp;学习使人进步，诚信使人发光！六星好评，支持慕课网！</div>
        <div class="answer-content-all rich-text aimgPreview"><p>&nbsp;学习使人进步，诚信使人发光！六星好评，支持慕课网！</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="320982" data-answer-id="173959" data-hasop=""><b>赞同</b><em>313</em></span>
            <span class="oppose " data-ques-id="320982" data-answer-id="173959" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635002" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_173959" data-quesid="320982">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="173959" data-ques-uid="10000">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/33" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e6300011c3502400240.jpg" title="Unity 3D">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/33" target="_blank">Unity 3D</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/321340" class="ques-con-content" target="_blank" title="提到国内最赚钱、最火爆的游戏公司，那肯定非我们壕一样的主T：腾讯游戏莫属。&nbsp;横版之王DNF、竞技之王LOL还有枪战CF等大型网络游戏，以及品种多样的社交游戏，让腾讯帝国迅速崛起！&nbsp;腾讯是如何洞察游戏市场，快速做出对策的呢？&nbsp;同时他们对游戏的研发和运营又有哪些独到的见解？&nbsp;【热辣暑期档】慕课网邀请到腾讯GAD游戏学院的专家们来到猿问，给对游戏感兴趣或者从事游戏开发的朋友们带来清凉一夏！！&nbsp;通过问答形式，分享游戏开发、游戏设计与动画和游戏运营等干货知识！&nbsp; &nbsp;邓立丰&nbsp;-&nbsp;腾讯GAD游戏学院导师（慕课网昵称：MobileGameSafeBook）在2010年加入腾讯公司，早期从事端游客户端的安全工作...">腾讯游戏大牛在线，有问题尽管来</a>
        
    </div>
        <div class="answer-con first" data-answer-id="175008" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/3051921/bbs" target="_blank">xiemioc</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">制作一个游戏的过程 &nbsp; 和需要的语言 &nbsp; &nbsp;具体说一下 &nbsp; &nbsp;@邓立丰@王睿杰@廖新洪</div>
        <div class="answer-content-all rich-text aimgPreview"><p>制作一个游戏的过程 &nbsp; 和需要的语言 &nbsp; &nbsp;具体说一下 &nbsp; &nbsp;@邓立丰@王睿杰@廖新洪</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="321340" data-answer-id="175008" data-hasop=""><b>赞同</b><em>134</em></span>
            <span class="oppose " data-ques-id="321340" data-answer-id="175008" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635048" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_175008" data-quesid="321340">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="175008" data-ques-uid="10000">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/30" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e7800018e5502400240.jpg" title="C++">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/30" target="_blank">C++</a>
                <a href="http://www.imooc.com/wenda/19" target="_blank">iOS</a>
                <a href="http://www.imooc.com/wenda/3" target="_blank">JAVA</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/344091" class="ques-con-content" target="_blank" title="还是年轻时好，熬夜第二天也不会难受。">各位猿或者媛，一般几点睡啊。有时忍住头痛看java到很晚，第二天就头痛一整天</a>
        
    </div>
        <div class="answer-con first" data-answer-id="231626" id="answer-con">
        <div class="user">
            
                        <span class="had-solve">已采纳</span>
                        <a href="http://www.imooc.com/u/1953317/bbs" target="_blank">肖申克de救赎</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">没有什么事情是需要熬夜完成的</div>
        <div class="answer-content-all rich-text aimgPreview"><p><strong><span style="text-decoration:underline;">没有什么事情是需要熬夜完成的</span></strong><br></p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="344091" data-answer-id="231626" data-hasop=""><b>赞同</b><em>448</em></span>
            <span class="oppose " data-ques-id="344091" data-answer-id="231626" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635089" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_231626" data-quesid="344091">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="231626" data-ques-uid="2143740">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer no-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/5" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ff90001ab0402400240.jpg" title="Html/CSS">
            </a>
                                                            </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/5" target="_blank">Html/CSS</a>
                <a href="http://www.imooc.com/wenda/14" target="_blank">Html5</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383215" class="ques-con-content" target="_blank" title=".icon-user:before {&nbsp; content: &quot;\f007&quot;;}这是bootstrap的字体图标文件的代码，这里的“\f007”代表什么啊，还有那个反斜杠有什么特殊意义吗">bootstrap的字体图标</a>
    </div><!--.ques-con end-->
    <div class="info-bar clearfix">
        <a href="http://www.imooc.com/wenda/detail/383215" class="to-answer">撰写答案</a>
        <p class="integral-info"><a href="http://www.imooc.com/about/faq?t=3" target="_blank">回答问题最高可获<span>2积分</span>哦！</a></p>
        <a href="http://www.imooc.com/wenda/detail/383215" class="answer-num">3个回答</a>
        <a href="javascript:;" class="follow" data-ques-id="383215"><i class="heart">关注</i></a>
    </div><!--.info-bar end-->
</div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/2" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e970190001280402400240.jpg" title="PHP">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/2" target="_blank">PHP</a>
                <a href="http://www.imooc.com/wenda/5" target="_blank">Html/CSS</a>
                <a href="http://www.imooc.com/wenda/17" target="_blank">JavaScript</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/328864" class="ques-con-content" target="_blank" title="我13岁了，初二，感觉学计算机程序晚了，已经学了2个月的PHP了(面对对象还没懂)
大神我还有救没?">本人13岁，现在学还来得及吗？</a>
        
    </div>
        <div class="answer-con first" data-answer-id="194427" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/3905628/bbs" target="_blank">慕粉3905628</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">来不及了，小朋友，下辈子早点来！</div>
        <div class="answer-content-all rich-text aimgPreview"><p>来不及了，小朋友，下辈子早点来！</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="328864" data-answer-id="194427" data-hasop=""><b>赞同</b><em>1486</em></span>
            <span class="oppose " data-ques-id="328864" data-answer-id="194427" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635143" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_194427" data-quesid="328864">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="194427" data-ques-uid="3319610">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/28" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e980001d29602400240.jpg" title="C">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/28" target="_blank">C</a>
                <a href="http://www.imooc.com/wenda/30" target="_blank">C++</a>
                <a href="http://www.imooc.com/wenda/39" target="_blank">数据结构</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383242" class="ques-con-content" target="_blank" title="顺序表结构体的定义为typedef struct{&nbsp;&nbsp; &nbsp;int&nbsp;*elem;&nbsp; //线性表的基址&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;length;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;listsize;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;increment;&nbsp;&nbsp;}其中 *elem作为一个指针为什么数据类型可以定义为int">线性表的基址？</a>
        
    </div>
        <div class="answer-con first" data-answer-id="270134" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/5965186/bbs" target="_blank">慕用4063026</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">&lt;...code...&gt;<span class="see-more">[ 查看全部 ]</span></div>
        <div class="answer-content-all rich-text aimgPreview"><table class="syntaxhighlighter  cpp" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="cpp plain">ElemType&nbsp;*elem;&nbsp;原型，你代码中定义的师</code><code class="cpp color1 bold">int</code><code class="cpp plain">，</code></div><div class="line number2 index1 alt1"><code class="cpp plain">可以是整型、字符型、浮点型或者用户自定义类型</code></div></div></td></tr></tbody></table><p><br></p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383242" data-answer-id="270134" data-hasop=""><b>赞同</b><em>1</em></span>
            <span class="oppose " data-ques-id="383242" data-answer-id="270134" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635182" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_270134" data-quesid="383242">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="270134" data-ques-uid="3285161">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer no-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/28" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e980001d29602400240.jpg" title="C">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/28" target="_blank">C</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383238" class="ques-con-content" target="_blank" title="
">为什么那两个字符一直是a，c？</a>
    </div><!--.ques-con end-->
    <div class="info-bar clearfix">
        <a href="http://www.imooc.com/wenda/detail/383238" class="to-answer">撰写答案</a>
        <p class="integral-info"><a href="http://www.imooc.com/about/faq?t=3" target="_blank">回答问题最高可获<span>2积分</span>哦！</a></p>
        <a href="http://www.imooc.com/wenda/detail/383238" class="answer-num">2个回答</a>
        <a href="javascript:;" class="follow" data-ques-id="383238"><i class="heart">关注</i></a>
    </div><!--.info-bar end-->
</div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/12" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f7a0001117402400240.jpg" title="Android">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/12" target="_blank">Android</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/325341" class="ques-con-content" target="_blank" title="移动互联网已经成为当今世界发展最快、市场潜力最大的业务，而Android则是移动互联网上市场占有率最高的平台。移动互联网与Android的结合必然带来更多的就业机会与创业机会，这都值得每个安卓开发者好好把握的时机！What？有问题还不快快来提问，安卓大咖等你来！李刚，十余年软件开发从业者疯狂软件教育中心教学总监，疯狂Java实训营创始人广东技术师范学院计算机科学系兼职副教授培训的学生已在华为、IBM、阿里软件、网易、电信盈科等名企就职。国内著名高端IT技术图书作家，其中疯狂Java体系图书均已沉淀多年，赢得极高的市场认同，并被多所“985”、“211”高校选作教材。在评论区块，发布一条问题并在...">遇见好答案，Android开发问答专场</a>
        
    </div>
        <div class="answer-con first" data-answer-id="185072" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/3794065/bbs" target="_blank">beijiyaya恋雨心声</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">@李刚老师老师您好，我现在在学习的是HTML5，都说HTML5以跨平台的优势将要取代android开发，我也认为HTML5在很多实际开发中节约了大量的人力和财力，老师您对这种观点怎么看呢？</div>
        <div class="answer-content-all rich-text aimgPreview"><p>@李刚老师</p><p>老师您好，我现在在学习的是HTML5，都说HTML5以跨平台的优势将要取代android开发，我也认为HTML5在很多实际开发中节约了大量的人力和财力，老师您对这种观点怎么看呢？</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="325341" data-answer-id="185072" data-hasop=""><b>赞同</b><em>83</em></span>
            <span class="oppose " data-ques-id="325341" data-answer-id="185072" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635236" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_185072" data-quesid="325341">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="185072" data-ques-uid="10000">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/3" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e9700900012e3602400240.jpg" title="JAVA">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/3" target="_blank">JAVA</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/338299" class="ques-con-content" target="_blank" title="java好学吗.??pp">java好学吗.??pp</a>
        
    </div>
        <div class="answer-con first" data-answer-id="217545" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/3556300/bbs" target="_blank">时光_冰释</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">挺好的！</div>
        <div class="answer-content-all rich-text aimgPreview">挺好的！</div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="338299" data-answer-id="217545" data-hasop=""><b>赞同</b><em>25</em></span>
            <span class="oppose " data-ques-id="338299" data-answer-id="217545" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635276" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_217545" data-quesid="338299">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="217545" data-ques-uid="4578849">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer no-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/52" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96deb0001f9d302400240.jpg" title="Vue.js">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/52" target="_blank">Vue.js</a>
                <a href="http://www.imooc.com/wenda/15" target="_blank">JQuery</a>
                <a href="http://www.imooc.com/wenda/22" target="_blank">AngularJS</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383237" class="ques-con-content" target="_blank" title="&amp;#35831;&amp;#38382;&amp;#22823;&amp;#20332;&amp;#20204;&amp;#65292;&amp;#20851;&amp;#20110;&amp;#32593;&amp;#39029;&amp;#21152;&amp;#36733;&amp;#26465;&amp;#30340;&amp;#26174;&amp;#31034;&amp;#65292;&amp;#26159;&amp;#25918;&amp;#22312;&amp;#36335;&amp;#30001;&amp;#36339;&amp;#36716;&amp;#22788;...">页面显示加载条</a>
    </div><!--.ques-con end-->
    <div class="info-bar clearfix">
        <a href="http://www.imooc.com/wenda/detail/383237" class="to-answer">撰写答案</a>
        <p class="integral-info"><a href="http://www.imooc.com/about/faq?t=3" target="_blank">回答问题最高可获<span>2积分</span>哦！</a></p>
        <a href="http://www.imooc.com/wenda/detail/383237" class="answer-num">2个回答</a>
        <a href="javascript:;" class="follow" data-ques-id="383237"><i class="heart">关注</i></a>
    </div><!--.info-bar end-->
</div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/28" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e980001d29602400240.jpg" title="C">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/28" target="_blank">C</a>
                <a href="http://www.imooc.com/wenda/2" target="_blank">PHP</a>
                <a href="http://www.imooc.com/wenda/18" target="_blank">Python</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/332686" class="ques-con-content" target="_blank" title="话说，大家想编程的最初初衷是什么">话说，大家想编程的最初初衷是什么</a>
        
    </div>
        <div class="answer-con first" data-answer-id="204239" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/1926564/bbs" target="_blank">JustWannaHugU</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">说兴趣的话有没有人打我....</div>
        <div class="answer-content-all rich-text aimgPreview"><p>说兴趣的话有没有人打我....</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="332686" data-answer-id="204239" data-hasop=""><b>赞同</b><em>265</em></span>
            <span class="oppose " data-ques-id="332686" data-answer-id="204239" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635334" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_204239" data-quesid="332686">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="204239" data-ques-uid="3319610">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/3" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e9700900012e3602400240.jpg" title="JAVA">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/3" target="_blank">JAVA</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383235" class="ques-con-content" target="_blank" title="请问这个java中，求差，求平均值如何求取???">我是小白一枚，希望今后各位大牛能够多多帮助，请问这个java中，求差，求平均值如何求取</a>
        
    </div>
        <div class="answer-con first" data-answer-id="270074" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/6073270/bbs" target="_blank">慕用2109279</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">。。。 好好学学吧、</div>
        <div class="answer-content-all rich-text aimgPreview"><p>。。。 好好学学吧、</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383235" data-answer-id="270074" data-hasop=""><b>赞同</b><em>1</em></span>
            <span class="oppose " data-ques-id="383235" data-answer-id="270074" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635370" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_270074" data-quesid="383235">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="270074" data-ques-uid="3359900">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/3" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e9700900012e3602400240.jpg" title="JAVA">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/3" target="_blank">JAVA</a>
                <a href="http://www.imooc.com/wenda/18" target="_blank">Python</a>
                <a href="http://www.imooc.com/wenda/35" target="_blank">大数据</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/362945" class="ques-con-content" target="_blank" title="理工本科非科班工作6年，目前在服务业，IT完全0基础。大学高数学不明白。在选IT学校，家附近只有北大青鸟和达内。脱产半年，花费勉强担负得起。只是已经这个年纪，又是女生，会不会没人招……现在才来学，是不是太晚了。各位能不能给我点鼓励啊">29岁大龄单身女0基础想转行学IT</a>
        
    </div>
        <div class="answer-con first" data-answer-id="263031" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/5657247/bbs" target="_blank">长相思兮长相忆yun</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">种一棵树最好的时间是10年前，其次是现在。没有必要脱产学习，我就是从北大青鸟出来的。学完以后我根本就没找过这方面的工作，因为啥都没学明白。现在重新自学，感觉比以前效果还好，每天就晚上花两三个小时每天都进步一点。我</div>
        <div class="answer-content-all rich-text aimgPreview"><p dir="ltr">种一棵树最好的时间是10年前，其次是现在。没有必要脱产学习，我就是从北大青鸟出来的。学完以后我根本就没找过这方面的工作，因为啥都没学明白。现在重新自学，感觉比以前效果还好，每天就晚上花两三个小时每天都进步一点。我</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="362945" data-answer-id="263031" data-hasop=""><b>赞同</b><em>60</em></span>
            <span class="oppose " data-ques-id="362945" data-answer-id="263031" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635405" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_263031" data-quesid="362945">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="263031" data-ques-uid="5865920">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/28" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e980001d29602400240.jpg" title="C">
            </a>
                                                            </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/28" target="_blank">C</a>
                <a href="http://www.imooc.com/wenda/30" target="_blank">C++</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383199" class="ques-con-content" target="_blank" title="i=rand()%30;">下面这句C语言代码是什么意思啊？</a>
        
    </div>
        <div class="answer-con first" data-answer-id="270021" id="answer-con">
        <div class="user">
            
                        <span class="had-solve">已采纳</span>
                        <a href="http://www.imooc.com/u/1256770/bbs" target="_blank">伪架构师</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">字面意思:rand() 取到一个随机数&nbsp; -- 参见手册% 30 除以 30 取余= 然后将得到的值赋值给变量 i编程意图:产生一个0~29范围的随机数赋值给i, 是一种求给定范围内的随机数的常用方案</div>
        <div class="answer-content-all rich-text aimgPreview"><p>字面意思:</p><p>rand() 取到一个随机数&nbsp; -- 参见手册</p><p>% 30 除以 30 取余</p><p>= 然后将得到的值赋值给变量 i</p><p>编程意图:</p><p>产生一个0~29范围的随机数赋值给i, 是一种求给定范围内的随机数的常用方案</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383199" data-answer-id="270021" data-hasop=""><b>赞同</b></span>
            <span class="oppose " data-ques-id="383199" data-answer-id="270021" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635440" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_270021" data-quesid="383199">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="270021" data-ques-uid="5262737">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/11" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59f2cdc30001916a02400240.jpg" title="Mysql">
            </a>
                                                            </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/11" target="_blank">Mysql</a>
                <a href="http://www.imooc.com/wenda/36" target="_blank">SQL Server</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383159" class="ques-con-content" target="_blank" title="#INSERT&nbsp;INTO&nbsp;employee(id,name,age,salary,phone,in_dpt)VALUES(编号,'名字','年龄'，工资,电话,'部门');大神们，这里的“#”是啥意思啊？&nbsp;这个insert&nbsp;into语句我百度了。在在表中插入数据的。但是这个前面加个&quot;#&quot;。小白就很蒙了啊。。。我用select&nbsp;*&nbsp;from&nbsp;employee;&nbsp;做测试。没发现这个列中有编号，名字，年龄，工资，电话，部门的字段。。。那这行语句是干啥用的啊？求大神们指点。。。">各位大神们麻烦您们看下sql小白的问题吧。。谢谢了。。</a>
        
    </div>
        <div class="answer-con first" data-answer-id="269966" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/1242034/bbs" target="_blank">_Fang618</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">#是注释把后面的插入语句给注释掉了，没有执行，也就不会有字段了</div>
        <div class="answer-content-all rich-text aimgPreview"><p>#是注释</p><p>把后面的插入语句给注释掉了，没有执行，也就不会有字段了</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383159" data-answer-id="269966" data-hasop=""><b>赞同</b><em>1</em></span>
            <span class="oppose " data-ques-id="383159" data-answer-id="269966" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635478" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_269966" data-quesid="383159">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="269966" data-ques-uid="5184966">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/5" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ff90001ab0402400240.jpg" title="Html/CSS">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/5" target="_blank">Html/CSS</a>
                <a href="http://www.imooc.com/wenda/3" target="_blank">JAVA</a>
                <a href="http://www.imooc.com/wenda/20" target="_blank">Linux</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/329082" class="ques-con-content" target="_blank" title="优秀的提问者，把相关信息私信给慕女神，将获得上下两册《linux大棚 命令百篇》time_is_everything &nbsp;http://www.imooc.com/u/2855983/bbsBruceWang85 &nbsp;http://www.imooc.com/u/208261/bbsGraceLin http://www.imooc.com/u/2163778/bbssanshu1 http://www.imooc.com/u/1992159/bbsNameless13&nbsp;http://www.imooc.com/u/2226199/bbs说到linux，那真的是在计算机领域是无处不在的。从嵌入式系...">【问答专场】实力派--Linux大棚来了，更有linux图书免费送</a>
        
    </div>
        <div class="answer-con first" data-answer-id="195095" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/2855983/bbs" target="_blank">time_is_everything</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">@吴鹏冲老师，老师您好，我知道Linux这个系统是跨平台性高，兼容性强，
开发拓展广。尤其是之前看到美剧中“黑客军团”里的黑客用基于linux的shell来编写去hack，所以想问您一下，如果学好了linux能不能对网
络安全方面（hack方面）有更好的了解和知识认解呢？望解惑。。。</div>
        <div class="answer-content-all rich-text aimgPreview"><p>@吴鹏冲老师，
老师您好，我知道Linux这个系统是跨平台性高，兼容性强，开发拓展广。尤其是之前看到美剧中“黑客军团”里的黑客用基于linux的shell来编写
去hack，所以想问您一下，如果学好了linux能不能对网络安全方面（hack方面）有更好的了解和知识认解呢？望解惑。。。</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="329082" data-answer-id="195095" data-hasop=""><b>赞同</b><em>33</em></span>
            <span class="oppose " data-ques-id="329082" data-answer-id="195095" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635515" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_195095" data-quesid="329082">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="195095" data-ques-uid="10000">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/25" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ebe0001a9ad02400240.jpg" title="CSS3">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/25" target="_blank">CSS3</a>
                <a href="http://www.imooc.com/wenda/5" target="_blank">Html/CSS</a>
                <a href="http://www.imooc.com/wenda/14" target="_blank">Html5</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/318331" class="ques-con-content" target="_blank" title="最近觉得自己变懒惰了，想找些一起有理想一起奋斗一起傻逼的人哈哈哈，本人小清新。">前端一起学，一起奋斗，一起有个学习的圈子！！！</a>
        
    </div>
        <div class="answer-con first" data-answer-id="169066" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/10000/bbs" target="_blank">慕女神</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">&nbsp;慕课网Web前端讨论群②&nbsp;27810317慕课网粉丝群⑧&nbsp;433467017&nbsp;想要学习前端，可以加此群~~请大家谨慎加别人组建的群里</div>
        <div class="answer-content-all rich-text aimgPreview"><p>&nbsp;慕课网Web前端讨论群②&nbsp;27810317<br>慕课网粉丝群⑧&nbsp;433467017&nbsp;</p><p>想要学习前端，可以加此群~~请大家谨慎加别人组建的群里</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="318331" data-answer-id="169066" data-hasop=""><b>赞同</b><em>65</em></span>
            <span class="oppose " data-ques-id="318331" data-answer-id="169066" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635556" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_169066" data-quesid="318331">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="169066" data-ques-uid="2048737">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/12" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f7a0001117402400240.jpg" title="Android">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/12" target="_blank">Android</a>
                <a href="http://www.imooc.com/wenda/25" target="_blank">CSS3</a>
                <a href="http://www.imooc.com/wenda/3" target="_blank">JAVA</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/319125" class="ques-con-content" target="_blank" title="全新积分体系上线，超多好礼尽在积分商城慕女神现在就给大家科普下，积分是什么，有什么用？① 什么是积分 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;积分是慕课对用户的一种鼓励，而且还是最强的物质回报的体现。&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;慕课积分可以在积分商城兑超值礼包，有图有真相↓↓ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;★&nbsp;实战购买积分 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; ..."> 积分商城上线，超多好礼等你来兑</a>
        
    </div>
        <div class="answer-con first" data-answer-id="170531" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/1008780/bbs" target="_blank">丶包菜</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">几个月的积累才38积分，觉得上升好慢。一直帮助别人解决问题的，即使答案正
确或者先答也不被采纳，反馈没回复，也挺无奈的。好在我积极性还挺高，解决问题就是帮助自己巩固知识嘛。其实学生党我肯定想要个更好的手机啦，但是有个
VR也挺不错。好吧，认真看了下没VR，修改为：愿赐我个慕课T恤，我真的挺喜欢慕课这个平台的。我可能要写点学习积累什么的了，但怎么可能每天都有。如
果今年都没有达成目标，那就也不缺了，全部兑换成慕烟花什么的了。<span class="see-more">[ 查看全部 ]</span></div>
        <div class="answer-content-all rich-text aimgPreview"><p><br>几个月的积累才38积分，觉得上升好慢。</p><p>一直帮助别人解决问题的，即使答案正确或者先答也不被采纳，反馈没回复，也挺无奈的。</p><p>好在我积极性还挺高，解决问题就是帮助自己巩固知识嘛。<br></p><p>其实学生党我肯定想要个更好的手机啦，但是有个VR也挺不错。</p><p>好吧，认真看了下没VR，修改为：愿赐我个慕课T恤，我真的挺喜欢慕课这个平台的。<br></p><p>我可能要写点学习积累什么的了，但怎么可能每天都有。<br></p><p>如果今年都没有达成目标，那就也不缺了，全部兑换成慕烟花什么的了。<br></p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="319125" data-answer-id="170531" data-hasop=""><b>赞同</b><em>98</em></span>
            <span class="oppose " data-ques-id="319125" data-answer-id="170531" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635594" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_170531" data-quesid="319125">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="170531" data-ques-uid="10000">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/12" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f7a0001117402400240.jpg" title="Android">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/12" target="_blank">Android</a>
                <a href="http://www.imooc.com/wenda/5" target="_blank">Html/CSS</a>
                <a href="http://www.imooc.com/wenda/19" target="_blank">iOS</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/330117" class="ques-con-content" target="_blank" title="&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2016年国庆节前夕，慕课网迎来了第5个大版本更新。作为国内首个移动端IT学习类应用，慕课网App有超10000+免费学习视频课程，在以内容为根本的同时，慕课网坚持深耕产品，通过版本升级不断完善用户的使用体验。在此次升级的版本中，慕课网采用了全新的UI界面，全新开发的播放器，调整了“猿问”“手记”入口，增加了课程问答、课程评价，更加贴近PC端编程学习。更加值得一提的是，该版本中增加了夜间模式，关爱双眸妥妥的。目前，手机App安卓v5.0.0在各大应用商店会陆续上线，请下载最新版本体验。iOS...">【慕课网】安卓v5.0.0版本功能升级 新界面新体验</a>
        
    </div>
        <div class="answer-con first" data-answer-id="197596" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/3688168/bbs" target="_blank">LovingJava</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">只有我看到android打错还被用波浪线标出来了吗，，，</div>
        <div class="answer-content-all rich-text aimgPreview"><p>只有我看到android打错还被用波浪线标出来了吗，，，</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="330117" data-answer-id="197596" data-hasop=""><b>赞同</b><em>35</em></span>
            <span class="oppose " data-ques-id="330117" data-answer-id="197596" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635626" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_197596" data-quesid="330117">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="197596" data-ques-uid="10000">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/17" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f340001faac02400240.jpg" title="JavaScript">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/17" target="_blank">JavaScript</a>
                <a href="http://www.imooc.com/wenda/5" target="_blank">Html/CSS</a>
                <a href="http://www.imooc.com/wenda/15" target="_blank">JQuery</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/327235" class="ques-con-content" target="_blank" title="基础差，学不好更深的知识，面试官问的问题答不上，已经这样坚持了快两个月了，没工作，用着家人的钱生活，想放弃回家了，大家可以给我一些建议让我有理由坚持下去吗?">前端找不到实习，想放弃了怎么办?</a>
        
    </div>
        <div class="answer-con first" data-answer-id="190022" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/3074550/bbs" target="_blank">疯子520520</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">不是现实太残酷，只是你太弱了，虽是高薪，但你不努力，你也只能眼睁睁看着</div>
        <div class="answer-content-all rich-text aimgPreview"><p dir="ltr">不是现实太残酷，只是你太弱了，虽是高薪，但你不努力，你也只能眼睁睁看着</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="327235" data-answer-id="190022" data-hasop=""><b>赞同</b><em>178</em></span>
            <span class="oppose " data-ques-id="327235" data-answer-id="190022" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635661" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_190022" data-quesid="327235">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="190022" data-ques-uid="3092233">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/12" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f7a0001117402400240.jpg" title="Android">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/12" target="_blank">Android</a>
                <a href="http://www.imooc.com/wenda/3" target="_blank">JAVA</a>
                <a href="http://www.imooc.com/wenda/2" target="_blank">PHP</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/351144" class="ques-con-content" target="_blank" title="如题">为啥要做程序员，初心是什么？</a>
        
    </div>
        <div class="answer-con first" data-answer-id="245861" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/3173159/bbs" target="_blank">望远</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">&lt;...code...&gt;<span class="see-more">[ 查看全部 ]</span></div>
        <div class="answer-content-all rich-text aimgPreview"><table class="syntaxhighlighter  bash" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="bash functions">echo</code>&nbsp;<code class="bash string">"一切不以赚钱为目的的工作都是在浪费生命！！"</code></div></div></td></tr></tbody></table><p><br></p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="351144" data-answer-id="245861" data-hasop=""><b>赞同</b><em>58</em></span>
            <span class="oppose " data-ques-id="351144" data-answer-id="245861" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635695" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_245861" data-quesid="351144">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="245861" data-ques-uid="3527562">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/28" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e980001d29602400240.jpg" title="C">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/28" target="_blank">C</a>
                <a href="http://www.imooc.com/wenda/17" target="_blank">JavaScript</a>
                <a href="http://www.imooc.com/wenda/18" target="_blank">Python</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/337758" class="ques-con-content" target="_blank" title="Python天生有着开发效率高，部署简单，跨平台等诸多优点，与Java,C,C++一起成为全球前4大最流行语言。&nbsp;So，人生苦短，我用Python有其他语言编程经验的人，1周内能学会Python基础的内容。但大部分新手仅仅在Python语法和API层面体验了下，是无法在实际上胜任工作岗位的！！随意列举这些的高级Python编程知识点 ↓↓ &nbsp; &nbsp; &nbsp;你可知多少？！不懂肿么办？别担心，资深开发工程师告诉你python学习进阶的秘诀。有问题，就赶紧来提问吧~~刘硕 &nbsp;&nbsp;资深开发工程师曾就职于全球领先的半导体公司Freescale、清华大学信研院等知名企业及研究机构。是国内著名开源项目skyeye中...">遇见好答案---Python编程问答专场</a>
        
    </div>
        <div class="answer-con first" data-answer-id="216407" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/2425508/bbs" target="_blank">tanhouyusheng</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">@刘硕老师&nbsp;我现在在做一些简单的项目，一般用的就是
python，本来以前c++用的比较多，现在用过python之后觉得python真的很简单，很简单而且不容易出错，我现在就是做的主要是类似爬虫的
探测工作，以及探测得到的数据的比较和存储，虽然没怎么用到那些各种各样的库以及装饰器之类的看起来高大上的东西，但是我用的还是挺(｡･∀･)ﾉﾞ嗨
的。其次，我还曾经试着搭建过hadoop的环境，但是mapreduce程序使用python写的因为简单。下面是我的问题1、我这样用合适吗，2、我
有个同学跟我说他们做爬虫用java说python不稳定，是这样的吗，我需要注意些什么3、虽然用的很多，心里还是挺没底的，...<span class="see-more">[ 查看全部 ]</span></div>
        <div class="answer-content-all rich-text aimgPreview"><p>@刘硕老师&nbsp;</p><p>我
现在在做一些简单的项目，一般用的就是python，本来以前c++用的比较多，现在用过python之后觉得python真的很简单，很简单而且不容易
出错，我现在就是做的主要是类似爬虫的探测工作，以及探测得到的数据的比较和存储，虽然没怎么用到那些各种各样的库以及装饰器之类的看起来高大上的东西，
但是我用的还是挺(｡･∀･)ﾉﾞ嗨的。</p><p>其次，我还曾经试着搭建过hadoop的环境，但是mapreduce程序使用python写的因为简单。</p><p>下面是我的问题</p><p>1、我这样用合适吗，</p><p>2、我有个同学跟我说他们做爬虫用java说python不稳定，是这样的吗，我需要注意些什么</p><p>3、虽然用的很多，心里还是挺没底的，我对底层了解的并不深入，这么简单，会不会有什么后顾之忧。</p><p>4、Python的最适合做的是什么。&nbsp;&nbsp;&nbsp;&nbsp;</p><p>顺便说一下我的理解，我觉得语言不是那么重要，只要能实现相对应的功能就可以了，但是现在好多问题好像都有主流的语言，比如hadoop用java，opencv应C++，这不是主要的，关键是处理的速度与用户感受还有思想。</p><p><br></p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="337758" data-answer-id="216407" data-hasop=""><b>赞同</b><em>17</em></span>
            <span class="oppose " data-ques-id="337758" data-answer-id="216407" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635727" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_216407" data-quesid="337758">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="216407" data-ques-uid="10000">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/2" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e970190001280402400240.jpg" title="PHP">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/2" target="_blank">PHP</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383154" class="ques-con-content" target="_blank" title="好就业吗？">PHP好就业吗？</a>
        
    </div>
        <div class="answer-con first" data-answer-id="269915" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/2923357/bbs" target="_blank">耗子老陕</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">很好就业的</div>
        <div class="answer-content-all rich-text aimgPreview"><p>很好就业的</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383154" data-answer-id="269915" data-hasop=""><b>赞同</b><em>1</em></span>
            <span class="oppose " data-ques-id="383154" data-answer-id="269915" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635762" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_269915" data-quesid="383154">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="269915" data-ques-uid="5820380">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/12" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f7a0001117402400240.jpg" title="Android">
            </a>
                                                                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/12" target="_blank">Android</a>
                <a href="http://www.imooc.com/wenda/22" target="_blank">AngularJS</a>
                <a href="http://www.imooc.com/wenda/17" target="_blank">JavaScript</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/332055" class="ques-con-content" target="_blank" title="最近一直困扰我，到底长得丑应该干什么？">我长得丑，我适合学编程吗？</a>
        
    </div>
        <div class="answer-con first" data-answer-id="202458" id="answer-con">
        <div class="user">
            
                        <a href="http://www.imooc.com/u/1020706/bbs" target="_blank">蜂之谷</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">长得丑才编程，不丑靠脸吃饭就行了，还编什么程序</div>
        <div class="answer-content-all rich-text aimgPreview"><p>长得丑才编程，不丑靠脸吃饭就行了，还编什么程序</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="332055" data-answer-id="202458" data-hasop=""><b>赞同</b><em>173</em></span>
            <span class="oppose " data-ques-id="332055" data-answer-id="202458" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635798" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_202458" data-quesid="332055">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="202458" data-ques-uid="3050159">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/2" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e970190001280402400240.jpg" title="PHP">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/2" target="_blank">PHP</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383194" class="ques-con-content" target="_blank" title="PHP是不是在衰落了啊">PHP是不是在衰落了啊</a>
        
    </div>
        <div class="answer-con first" data-answer-id="270019" id="answer-con">
        <div class="user">
            
                        <span class="had-solve">已采纳</span>
                        <a href="http://www.imooc.com/u/1256770/bbs" target="_blank">伪架构师</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">不是 PHP 衰落了，是你'衰落'了。语言只是工具，你在一种语言中学来的经验往往也适用于其他语言，所以&nbsp; PHP 如果真的衰落了，打不了你去写 java 写 python 写 C++, 并没太大不同。&nbsp;</div>
        <div class="answer-content-all rich-text aimgPreview"><p>不是 PHP 衰落了，是你'衰落'了。语言只是工具，你在一种语言中学来的经验往往也适用于其他语言，所以&nbsp; PHP 如果真的衰落了，打不了你去写 java 写 python 写 C++, 并没太大不同。&nbsp;</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with " data-ques-id="383194" data-answer-id="270019" data-hasop=""><b>赞同</b><em>1</em></span>
            <span class="oppose " data-ques-id="383194" data-answer-id="270019" data-hasop=""><em>反对</em></span>
            
            <div class="share-box clearfix">
                <div class="show-btn">分享</div>
                <div class="share-box-con">
                    <div data-bd-bind="1512087635836" class="bdsharebuttonbox bdshare-button-style0-16" data-tag="share_answer_270019" data-quesid="383194">
                        <a title="分享到微信" class="bds_weixin icon-share-weichat" data-cmd="weixin"></a>
                        <a title="分享到新浪微博" class="bds_tsina icon-share-weibo" data-cmd="tsina"></a>
                        <a title="分享到QQ空间" class="bds_qzone icon-share-qq" data-cmd="qzone" href="#"></a>
                    </div>
                </div>
            </div>

            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->

        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">
                    <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
                </a>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <a href="http://www.imooc.com/myclub/myquestion" target="_blank">qq_夜的寂静_0</a>
                            </div>
            <div class="textarea-con">
                <textarea placeholder="写下你的回复"></textarea>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="270019" data-ques-uid="1238363">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
<div class="ques-answer no-answer">
    <div class="tag-img">
                                            <a href="http://www.imooc.com/wenda/25" target="_blank">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ebe0001a9ad02400240.jpg" title="CSS3">
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="http://www.imooc.com/wenda/25" target="_blank">CSS3</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="http://www.imooc.com/wenda/detail/383256" class="ques-con-content" target="_blank" title="css3中需要兼容不同浏览器的属性有哪些">css属性问题</a>
    </div><!--.ques-con end-->
    <div class="info-bar clearfix">
        <a href="http://www.imooc.com/wenda/detail/383256" class="to-answer">撰写答案</a>
        <p class="integral-info"><a href="http://www.imooc.com/about/faq?t=3" target="_blank">回答问题最高可获<span>2积分</span>哦！</a></p>
        <a href="http://www.imooc.com/wenda/detail/383256" class="answer-num">1个回答</a>
        <a href="javascript:;" class="follow" data-ques-id="383256"><i class="heart">关注</i></a>
    </div><!--.info-bar end-->
</div><!--.ques-answer end-->
<div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active text-page-tag">1</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/2">2</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/3">3</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/4">4</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/5">5</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/6">6</a><a class="text-page-tag" href="http://www.imooc.com/wenda/recommend/7">7</a><a href="http://www.imooc.com/wenda/recommend/2">下一页</a><a href="http://www.imooc.com/wenda/recommend/1991">尾页</a></div>

                
            </div>
        </div>
        <div class="r wenda-slider">
            
            
<div class="user-about">
    <div class="user-info">
        <div class="user-pic">
            <a href="http://www.imooc.com/u/5767042/bbs">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59a902890001f04901000100-100-100.jpg" alt="qq_夜的寂静_0">
            </a>
        </div>
        <div class="user-name">
            <a href="http://www.imooc.com/u/5767042/bbs">qq_夜的寂静_0</a>
                                </div>
        <div class="integral-info clearifx">
            <a href="http://www.imooc.com/u/5767042/credit" class="integral">积分：0</a>
            <a href="http://www.imooc.com/mall/index" class="integral-mall">积分商城</a>
        </div>
    </div><!--.user-info end-->
    <div class="user-action">
        <span class="ques"><a href="http://www.imooc.com/u/5767042/bbs">提问</a><!-- <i></i>--></span>
        <span class="reply"><a href="http://www.imooc.com/u/5767042/bbs?sort=reply">回答</a></span>
        <span class="follow"><a href="http://www.imooc.com/u/5767042/bbs?sort=follow">关注</a></span>
    </div><!--.user-action end-->
</div><!--.user-about end-->
 
<!--.my-follow-class登录后可见-->
        <div class="my-follow-class">
        <h3>我关注的分类 <span class="js-open">+</span></h3>
        <div class="no-tag">
            <h4>您还没有关注任何分类</h4>
            <div class="follow-immediately">马上关注</div>
        </div><!--.no-tag end-->
    </div>
    
<div class="recommend-class">
    <div class="title clearfix">
        <h3>推荐分类</h3>
        <span class="all-cls">全部分类</span>
    </div><!--title end-->
    <ul class="cls-list">
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="http://www.imooc.com/wenda/17" target="_blank">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f340001faac02400240.jpg" alt="JavaScript">
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="http://www.imooc.com/wenda/17" target="_blank">JavaScript</a></h4>
                <p class="follow-person">56509人关注</p>
                                <a href="javascript:void(0)" data-tag-id="17" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">JavaScript做为Web前端开发师需要掌握的必杀技术，它是互联...</div>
        </li><!--li end-->
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="http://www.imooc.com/wenda/14" target="_blank">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f4f0001379302400240.jpg" alt="Html5">
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="http://www.imooc.com/wenda/14" target="_blank">Html5</a></h4>
                <p class="follow-person">25137人关注</p>
                                <a href="javascript:void(0)" data-tag-id="14" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">HTML5它的综合性功能可助网页设计者和开发者们一臂之力，使他们在开...</div>
        </li><!--li end-->
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="http://www.imooc.com/wenda/28" target="_blank">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e980001d29602400240.jpg" alt="C">
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="http://www.imooc.com/wenda/28" target="_blank">C</a></h4>
                <p class="follow-person">23783人关注</p>
                                <a href="javascript:void(0)" data-tag-id="28" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">C，一种通用的、过程式的编程语言，广泛用于系统与应用软件的开发。</div>
        </li><!--li end-->
            </ul><!--.cls-list end-->
</div><!--.recommend-class end-->

<div class="advertisement">
        <a href="http://www.imooc.com/wenda/issuedetail/16" data-ast="yuanwenindexright_1_871">
        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/5a0a508b000106e002800100.jpg" alt="【花18】">
    </a>
    </div><!--.advertisement end-->
<div class="hot-ques">
    <h3 class="title">热门问题</h3>
    <ul>
                <li>
            <p class="content"><a target="_blank" href="http://www.imooc.com/wenda/detail/383123">【有奖问答】与大咖交流前端JS与框架开发，免费赢取前端图书（11.28-12.4）</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="http://www.imooc.com/wenda/detail/383123" class="answer-num">71 回答</a>
                <a target="_blank" href="http://www.imooc.com/wenda/detail/383123" class="follow-num">1 关注</a>
                <a target="_blank" href="http://www.imooc.com/wenda/22" class="from">来自 AngularJS</a>
            </div>
        </li>
                <li>
            <p class="content"><a target="_blank" href="http://www.imooc.com/wenda/detail/382817">为什么会错</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="http://www.imooc.com/wenda/detail/382817" class="answer-num">11 回答</a>
                <a target="_blank" href="http://www.imooc.com/wenda/detail/382817" class="follow-num">0 关注</a>
                <a target="_blank" href="http://www.imooc.com/wenda/3" class="from">来自 JAVA</a>
            </div>
        </li>
                <li>
            <p class="content"><a target="_blank" href="http://www.imooc.com/wenda/detail/382755">nodo.js是一个前端框架嘛？</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="http://www.imooc.com/wenda/detail/382755" class="answer-num">10 回答</a>
                <a target="_blank" href="http://www.imooc.com/wenda/detail/382755" class="follow-num">0 关注</a>
                <a target="_blank" href="http://www.imooc.com/wenda/13" class="from">来自 Node.js</a>
            </div>
        </li>
                <li>
            <p class="content"><a target="_blank" href="http://www.imooc.com/wenda/detail/383057">想找一个c语言大神带飞</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="http://www.imooc.com/wenda/detail/383057" class="answer-num">10 回答</a>
                <a target="_blank" href="http://www.imooc.com/wenda/detail/383057" class="follow-num">1 关注</a>
                <a target="_blank" href="http://www.imooc.com/wenda/28" class="from">来自 C</a>
            </div>
        </li>
                <li>
            <p class="content"><a target="_blank" href="http://www.imooc.com/wenda/detail/383131">28的年龄适合学前端么？</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="http://www.imooc.com/wenda/detail/383131" class="answer-num">10 回答</a>
                <a target="_blank" href="http://www.imooc.com/wenda/detail/383131" class="follow-num">0 关注</a>
                <a target="_blank" href="http://www.imooc.com/wenda/30" class="from">来自 C++</a>
            </div>
        </li>
            </ul><!--ul end-->
</div><!--.hot-ques end-->

<div class="leifeng-sort">
    <h3 class="title clearfix">
        <span>回答雷锋榜</span>
        <span class="leifeng-tab js-leifeng-tab" data-type="week">一周</span>
        <span class="leifeng-tab js-leifeng-tab active" data-type="day">今日</span>
    </h3>
    
            <div class="leifeng-tab-box leifeng-day js-leifeng-tab-box" data-type="day">
        <ul class="leifeng-tab-box-min">
                        <li>
                <div class="ranking first">1</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/261916/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/533e4ca50001117901990200-100-100.jpg" title="pardon110">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/261916/bbs">pardon110</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">PHP开发工程师</span>
                    <span class="answer-num">18回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking second">2</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/5965186/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/545866dc0001ed6b02200220-100-100.jpg" title="慕用4063026">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/5965186/bbs">慕用4063026</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role"></span>
                    <span class="answer-num">9回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking third">3</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/3538079/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/545865b90001b1d102200220-100-100.jpg" title="黑污污">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/3538079/bbs">黑污污</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">5回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">4</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/4428689/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/545862800001e2d802200220-100-100.jpg" title="慕粉1536258948">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/4428689/bbs">慕粉1536258948</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role"></span>
                    <span class="answer-num">4回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">5</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/3152007/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/5726b8840001bf6c01800180-100-100.jpg" title="小小的脾气古怪">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/3152007/bbs">小小的脾气古怪...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">4回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">6</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/5705230/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/599275650001733d01000100-100-100.jpg" title="骗子太多傻子不够用了">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/5705230/bbs">骗子太多傻子不够...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role"></span>
                    <span class="answer-num">3回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">7</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/1256770/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/54e1559d0001f9aa01000100-100-100.jpg" title="伪架构师">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/1256770/bbs">伪架构师</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">全栈工程师</span>
                    <span class="answer-num">3回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">8</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/5240521/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59f3c49e0001013b03900390-100-100.jpg" title="AurevoirXavier">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/5240521/bbs">AurevoirXavier</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">3回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">9</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/3118245/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/58cf458000016d7302000200-100-100.jpg" title="书旅">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/3118245/bbs">书旅</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">3回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">10</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/5201626/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/5a1ccd330001141b06000744-100-100.jpg" title="精神病院_院长">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/5201626/bbs">精神病院_院长...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">Web前端工程师</span>
                    <span class="answer-num">2回答</span>
                </div><!--.user-info end-->
            </li>
                    </ul>
                    <div class="lyleif"><span class="js-lyleif">显示另外5个雷锋</span></div>
            </div>
            
            <div class="leifeng-tab-box leifeng-week js-leifeng-tab-box" data-type="week">
        <ul class="leifeng-tab-box-min">
                        <li>
                <div class="ranking first">1</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/2387438/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/58e1dac500011c5807400740-100-100.jpg" title="LiebeULQQ">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/2387438/bbs">LiebeULQQ</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">35回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking second">2</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/2941309/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/58b6b3b9000105e204190419-100-100.jpg" title="wrongcode">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/2941309/bbs">wrongcode</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">20回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking third">3</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/3233775/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/587475030001b86a05800331-100-100.jpg" title="牛奶小哥哥">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/3233775/bbs">牛奶小哥哥</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">Web前端工程师</span>
                    <span class="answer-num">15回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">4</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/4860198/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/58a44bcb0001fbe101000100-100-100.png" title="qq_20151109_0">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/4860198/bbs">qq_20151109_0</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role"></span>
                    <span class="answer-num">15回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">5</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/3118245/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/58cf458000016d7302000200-100-100.jpg" title="书旅">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/3118245/bbs">书旅</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">14回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">6</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/2748967/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/567e53870001d3d301000100-100-100.jpg" title="托马斯奎">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/2748967/bbs">托马斯奎</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">12回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">7</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/5965186/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/545866dc0001ed6b02200220-100-100.jpg" title="慕用4063026">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/5965186/bbs">慕用4063026</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role"></span>
                    <span class="answer-num">10回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">8</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/5165305/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/545846580001fede02200220-100-100.jpg" title="天道酬勤_">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/5165305/bbs">天道酬勤_</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">10回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">9</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/6079591/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59f81ffe0001c13e01000100-100-100.jpg" title="qq_锅锅_3">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/6079591/bbs">qq_锅锅_3</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role"></span>
                    <span class="answer-num">9回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">10</div>
                <div class="user-pic">
                    <a target="_blank" href="http://www.imooc.com/u/5868514/bbs">
                        <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59c4d4920001539101000100-100-100.jpg" title="葙濡姒沫">
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="http://www.imooc.com/u/5868514/bbs">葙濡姒沫</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role"></span>
                    <span class="answer-num">6回答</span>
                </div><!--.user-info end-->
            </li>
                    </ul>
                    <div class="lyleif"><span class="js-lyleif">显示另外5个雷锋</span></div>
            </div>
        </div><!--.leifeng-sort end-->

        </div>
    </div>
</div>

  <div style="display: none;" data-type="allclass" class="tag-pop" id="tag-pop">
    <div class="shade"></div>
    <div class="tag-main">
        <h3><span>全部分类</span> <i class="fa fa-close js-close"></i></h3>
        <ul class="tag-list clearfix">
                        <li data-tag-id="12">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f7a0001117402400240.jpg" alt="">
                <span>Android</span>
            </li>
                        <li data-tag-id="22">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ed90001e4e702400240.jpg" alt="">
                <span>AngularJS</span>
            </li>
                        <li data-tag-id="24">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ecc0001850802400240.jpg" alt="">
                <span>Bootstrap</span>
            </li>
                        <li data-tag-id="28">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e980001d29602400240.jpg" alt="">
                <span>C</span>
            </li>
                        <li data-tag-id="38">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e2900010d7d02400240.jpg" alt="">
                <span>C#</span>
            </li>
                        <li data-tag-id="30">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e7800018e5502400240.jpg" alt="">
                <span>C++</span>
            </li>
                        <li data-tag-id="34">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e560001cb2902400240.jpg" alt="">
                <span>Cocos2d-x</span>
            </li>
                        <li data-tag-id="25">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ebe0001a9ad02400240.jpg" alt="">
                <span>CSS3</span>
            </li>
                        <li data-tag-id="31">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e6c0001108502400240.jpg" alt="">
                <span>Go</span>
            </li>
                        <li data-tag-id="5">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ff90001ab0402400240.jpg" alt="">
                <span>Html/CSS</span>
            </li>
                        <li data-tag-id="14">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f4f0001379302400240.jpg" alt="">
                <span>Html5</span>
            </li>
                        <li data-tag-id="19">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f0a0001f87902400240.jpg" alt="">
                <span>iOS</span>
            </li>
                        <li data-tag-id="3">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e9700900012e3602400240.jpg" alt="">
                <span>JAVA</span>
            </li>
                        <li data-tag-id="17">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f340001faac02400240.jpg" alt="">
                <span>JavaScript</span>
            </li>
                        <li data-tag-id="15">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f420001726302400240.jpg" alt="">
                <span>JQuery</span>
            </li>
                        <li data-tag-id="20">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ef70001954402400240.jpg" alt="">
                <span>Linux</span>
            </li>
                        <li data-tag-id="7">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96fe20001da2602400240.jpg" alt="">
                <span>Maya</span>
            </li>
                        <li data-tag-id="8">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96fd30001e6e502400240.jpg" alt="">
                <span>MongoDB</span>
            </li>
                        <li data-tag-id="11">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59f2cdc30001916a02400240.jpg" alt="">
                <span>Mysql</span>
            </li>
                        <li data-tag-id="13">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f5d00011f3602400240.jpg" alt="">
                <span>Node.js</span>
            </li>
                        <li data-tag-id="29">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e890001d79b02400240.jpg" alt="">
                <span>Oracle</span>
            </li>
                        <li data-tag-id="10">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96fab0001534402400240.jpg" alt="">
                <span>Photoshop</span>
            </li>
                        <li data-tag-id="2">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e970190001280402400240.jpg" alt="">
                <span>PHP</span>
            </li>
                        <li data-tag-id="9">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96fbe000168f102400240.jpg" alt="">
                <span>Premiere</span>
            </li>
                        <li data-tag-id="18">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96f1c0001942802400240.jpg" alt="">
                <span>Python</span>
            </li>
                        <li data-tag-id="50">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e0d0001a63a02400240.jpg" alt="">
                <span>React.JS</span>
            </li>
                        <li data-tag-id="54">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96dc70001bc0b02400240.jpg" alt="">
                <span>Ruby</span>
            </li>
                        <li data-tag-id="53">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96dd80001be3802400240.jpg" alt="">
                <span>Sass/Less</span>
            </li>
                        <li data-tag-id="36">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e370001ac0202400240.jpg" alt="">
                <span>SQL Server</span>
            </li>
                        <li data-tag-id="33">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e6300011c3502400240.jpg" alt="">
                <span>Unity 3D</span>
            </li>
                        <li data-tag-id="52">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96deb0001f9d302400240.jpg" alt="">
                <span>Vue.js</span>
            </li>
                        <li data-tag-id="27">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ea50001e08602400240.jpg" alt="">
                <span>WebApp</span>
            </li>
                        <li data-tag-id="40">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e1f000178aa02400240.jpg" alt="">
                <span>ZBrush</span>
            </li>
                        <li data-tag-id="21">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96ee90001485b02400240.jpg" alt="">
                <span>云计算</span>
            </li>
                        <li data-tag-id="26">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96eb100019d5902400240.jpg" alt="">
                <span>前端工具</span>
            </li>
                        <li data-tag-id="35">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96e4a0001989102400240.jpg" alt="">
                <span>大数据</span>
            </li>
                        <li data-tag-id="39">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96db800015f3902400240.jpg" alt="">
                <span>数据结构</span>
            </li>
                        <li data-tag-id="57">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e9995c0001a39f02400240.jpg" alt="">
                <span>机器学习</span>
            </li>
                        <li data-tag-id="51">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e96df800014e9902400240.jpg" alt="">
                <span>测试</span>
            </li>
                        <li data-tag-id="58">
                <img src="IT%E6%8A%80%E6%9C%AF%E9%97%AE%E7%AD%94%E5%B9%B3%E5%8F%B0_-%E6%85%95%E8%AF%BE%E7%BD%91%E7%8C%BF%E9%97%AE_files/59e999680001a39f02400240.jpg" alt="">
                <span>深度学习</span>
            </li>
                    </ul>
        
    </div><!--.tag-main end-->
</div><!--.tag-pop end-->


</div>



<script>
    
    $(document).on('click','.all-cls',function(){
        $('.tag-pop').show();
    })

     $(document).on('click','.js-close',function(){
        $('.tag-pop').hide();
    })
</script>


@stop
