<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>欢迎登录后台管理系统</title>
    <link  rel="stylesheet" type="text/css" href="/Public/Admin/css/layout.css"/>
    <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
    <style type="text/css">
        body{
            padding:0px;
            background: /*#303437*/url(/Public/Admin/images/loginbg.jpg) no-repeat;
            filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale')";
            -moz-background-size:100% 100%;
            background-size:100% 100%;
        }
    </style>
</head>

<script language="javascript">
    $(function(){
        $('.loginbox').css({'position':'absolute','left':($(window).width()-500)/2});
        $(window).resize(function(){
            $('.loginbox').css({'position':'absolute','left':($(window).width()-500)/2});
        })
    });
</script>
<style>
    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px #CACACA inset;
        -webkit-text-fill-color: #333;
    }
    .check-tips {
        color: red;
        position: absolute;
        left: 300px;
        top: 303px;
        font-size: 10pt;
    }
</style>


<body style="">

<div class="loginbody">

    <div class="systemlogo">
    </div>
    <div class="loginbox">
        <h1>农本后台管理系统</h1>
        <form action="<?php echo U('login');?>" method="post" class="login-form">
            <ul>
                <li><input name="username" type="text" class="loginuser" value="" onclick="JavaScript:this.value=''"/></li>
                <li><input name="password" type="password" class="loginpwd" value="" onclick="JavaScript:this.value=''"/></li>
                <li><button type="submit" class="loginbtn" >登录<div class="check-tips"></div></button></li>

            </ul>
        </form>
        </div>
</div>

<script type="text/javascript">
    $(function(){
        // ajax登录验证
        $("form").submit(function(){
            var self = $(this);
            $.post(self.attr("action"), self.serialize(), success, "json");
            return false;

            function success(data){
                if(data.status){
                    window.location.href = data.url;
                } else {
                    self.find(".check-tips").text(data.info);
                }
            }
        });
    });
</script>

</body>
</html>