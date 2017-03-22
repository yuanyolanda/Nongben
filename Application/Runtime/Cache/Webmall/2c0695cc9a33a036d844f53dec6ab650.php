<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <title>用户登录 · 注册</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9, IE=8" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/Public/Webmall/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Webmall/css/page-style.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Webmall/css/theme.css"/>
    <script src="/Public/Webmall/js/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
    <!--[if lt IE 9]><script src="http://nt1.268xue.com/static/common/html5.js"></script><![endif]-->
    <style type="text/css">
        .ness-wrap {display: none;}
        .phcolor{ color:#999;}
    </style>

</head>
<body class="W-body">
<input id="shareUser" type="hidden" value=""/>
<!-- /登录 头 -->
<div class="rl-header">
    <section class="w1000">
        <aside class="rl-tel"><span class="c-master fsize20 f-fM">Email：service@nbnb.net.cn</span></aside>
        <h1 class="of unFw lr-logo">
            <a href="index.html"><img src="/Public/Webmall/images/logo.png" class="logo-2013" style="margin-top:30px;"/></a>
        </h1>
        <div class="rl-subTitle"><span class="c-master fsize20 f-fM fromflagtitle">跟我学 — 登录 · 注册</span></div>
        <div class="clear"></div>
    </section>
</div>
<!-- /登录 -->
<div class="rl-wrap-bg fromflag" >
    <section class="w1000">
        <div class="rl-r-box ">
            <section class="mt50">
                <div class="rl-r-tab-title">
                    <ul id="lr-title">
                        <li class="current"><a href="javascript: void(0);">用户登录 / <small>UserLogin</small></a></li>
                        <li><a href="javascript: void(0);" id="goregister">新用户注册 / <small>Register</small></a></li>
                    </ul>
                </div>
                <div id="lr-cont" class="rl-r-tab-cont">
                    <!-- 登录 开始 -->
                    <section>
                        <div class="rl-r-tab-c-l">
                            <ol>
                                <li>
                                    <label>
                                        <input type="text" placeholder="请输入邮箱" id="userEmail" onkeyup="enterSubmit(event,'pageLogin(2)')">
                                    </label>
										<span class="rl-jy-span enwErrorMsg">
											<tt class="o-wrong" id="userNameError"></tt>
										</span>
                                </li>
                                <li>
                                    <label>
                                        <input onkeyup="enterSubmit(event,'pageLogin(2)')"  type="password" id="userPassword" name="" value="" class="lTxt" placeholder="请输入您的密码">
                                    </label>
										<span class="rl-jy-span enwErrorMsg">
											<tt class="o-wrong" id="passwordError"></tt>
										</span>
                                </li>
                                <li class="pt10">
										<span class="inpCb ml10 hand">
											<input type="checkbox" name="autoThirty" checked="checked" class="c-icon" id="autoThirty"><tt for="forget" class="vam c-999 ml10">自动登录</tt>
										</span>
                                    <span class="ml190"><a href="<?php echo U('forget');?>" title="忘记密码？" class="c-orange"><u>忘记密码？</u></a></span>
                                </li>
                            </ol>
                            <section class="rl-login-btn mt20 tac"><a href="javascript:void(0)" onclick="pageLogin(2)" title="登录">登 录</a></section>
                        </div>

                        <div class="clear"></div>
                    </section>
                    <!-- 登录 结束 -->
                    <!-- 注册 开始 -->
                    <section class="undis">
                        <form id="regForm"  method="post" >
                            <div class="rl-r-tab-c-l">
                                <div class="sj-login-body">
                                    <!-- 邮箱注册 开始 -->
                                    <div class="sj-login-body-emli register">
                                        <ol>
                                            <li>
                                                <label>
                                                    <input  type="text" placeholder="请输入邮箱" id="regEmail"  onblur="emailCheck('email')" onkeyup="gohsData('emailError')"/>
                                                </label>
												<span class="rl-jy-span enwErrorMsg">
													<tt class="o-wrong" id="emailError"></tt>
												</span>
                                            </li>
                                            <li>
                                                <label>
                                                    <input onkeyup="gohsData('regPwdError')" placeholder="请输入密码" type="password" id="regPwd" onblur="passCheck('regPwd')" maxlength="18"/>
                                                </label>
												<span class="rl-jy-span enwErrorMsg">
													<tt class="o-wrong" id="regPwdError"></tt>
												</span>
                                            </li>
                                            <li>
                                                <label>
                                                    <input onkeyup="gohsData('cusPwdConfirmError')" type="password" placeholder="请再输入一次" id="cusPwdConfirm" onblur="passConfirmCheck('cusPwdConfirm','regPwd')" maxlength="18"/>
                                                </label>
												<span class="rl-jy-span enwErrorMsg">
													<tt class="o-wrong" id="cusPwdConfirmError"></tt>
												</span>
                                            </li>
                                            <li>
												<span class="inpCb hand">
		                                            <input type="checkbox" id="t268xueAgreementEmail" checked="checked"  class="c-icon" id="forget">
		                                            <tt for="forget" class="vam c-999 ml10">同意并阅读</tt>
		                                            <a title="用户注册协议" class="c-blue" href="http://nt1.268xue.com/help.json?id=191" target="_blank">《用户注册协议》</a>
												</span>
                                            </li>
                                        </ol>
                                        <div class="mt20 pr">
                                            <!--<aside class="lr-u-xy">
                                                <span class="inpCb hand">
                                                    <input type="checkbox" id="t268xueAgreementEmail" checked="checked"  class="c-icon" id="forget"><tt for="forget" class="vam c-999 ml10">同意并阅读</tt><a title="用户注册协议" class="c-blue" href="http://nt1.268xue.com/help.json?id=191" target="_blank">《用户注册协议》</a></span>
                                            </aside>-->
                                            <section class="rl-login-btn tac"><a href="javascript:void(0)" onclick="emailregister()"  title="注 册">注 册</a></section>
                                        </div>
                                    </div>
                                    <!-- 邮箱注册 结束 -->
                                </div>
                            </div>

                            <div class="clear"></div>
                        </form>
                    </section>

                    <!-- 注册 结束 -->
                </div>
            </section>
        </div>
        <div class="clear"></div>
    </section>
</div>

<!-- / 帮助 结束 -->

<!-- 公共底引入 -->
<script type="text/javascript">
    var baselocation = "";
</script>
<script src="/Public/Webmall/js/web_top.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/Webmall/js/webutils.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/Webmall/js/pageJs.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/Webmall/js/emailList.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/Webmall/js/register.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    //
    cardChange("#lr-title>li", "#lr-cont>section", "current"); //登录注册切换
    function cardChange(oTitle, oCont, current) {
        var oTitle = $(oTitle),
                oCont = $(oCont),
                _index;
        oTitle.click(function() {
            _index = oTitle.index(this);
            console.log(_index);
            $(this).addClass(current).siblings().removeClass(current);
            oCont.eq(_index).show().siblings().hide();
        }).eq(1).click();
    }

    $("#userEmail").mailAutoComplete({
        boxClass: "out_box", //外部box样式
        listClass: "list_box", //默认的列表样式
        focusClass: "focus_box", //列表选样式中
        markCalss: "mark_box", //高亮样式
        autoClass: false, //不使用默认的样式
        textHint: true //提示文字自动隐藏
    });
</script>
<!-- /登录 结束 -->
</body>
</html>