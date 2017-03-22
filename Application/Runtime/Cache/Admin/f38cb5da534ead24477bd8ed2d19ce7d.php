<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>欢迎登录后台管理系统</title>
    <link  rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css"/>
    <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
    <script type="text/javascript">
        var GV = {
            JS_ROOT: "/Public/Admin/js/",
            JS_VERSION: "20141001"
        };
    </script>
    <script type="text/javascript" src="/Public/Admin/js/Wind.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
</head>

<body>


<div id="error_tips">
    <div class="error_title">提示信息！</div>
    <div class="error_content">
        <img src="/Public/Admin/images/warning.gif"><?php echo($message); ?>
    </div>
    <div class="error_tips">
        <b id="wait"><?php echo($waitSecond); ?></b> 秒后页面将自动跳转，如果您的浏览器没有跳转，请<a id="href" href="<?php echo($jumpUrl); ?>" target="_parent">点击这里</a>
    </div>
</div>

<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                top.document.location.href = href;
                clearInterval(interval);
            };
        }, 1000);
        window.stop = function (){
            console.log(111);
            clearInterval(interval);
        }
    })();
</script>

</body>
</html>