<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<title>个人中心</title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="/Public/Webmall/css/common.css" />
		<link rel="stylesheet" type="text/css" href="/Public/Webmall/css/ucenter.css" />
		<!--[if lt IE 9]><script src="http://nt1.268xue.com/static/common/html5.js?v=1486227637308"></script><![endif]-->
	</head>

	<body class="W-body U-body">
		<header id="u-header">
			<section class="w1000">
				<div class="u-h-left">
					<section class="u-logo-slogn">
						<a href="index.html" title="" class="u-logo">
							<img src="/Public/Webmall/images/logo.png" alt="">
						</a>
						<span class="u-slogn" style="cursor: pointer;vertical-align: top;" onclick="location.href='personal.html'">
							<strong class="c-master">个人中心</strong>
						</span>
					</section>
					<nav class="u-nav ml10">
						<ul class="clearfix" id="userGuideInfo">
							<li>
								<a href="<?php echo U('Index/index');?>" title="首页">首页</a>
							</li>
							<li>
								<a href="<?php echo U('Academy/index');?>" title="跟我学">跟我学</a>
							</li>
							<li>
								<a href="<?php echo U('Shop/shop');?>" title="商城">商城</a>
							</li>
							<li>
								<a href="<?php echo U('Online/online');?>" title="在线监测">在线监测</a>
							</li>
							<li>
								<a href="<?php echo U('Source/trace');?>" title="农产品溯源">农产品溯源</a>
							</li>
							<li>
								<a href="<?php echo U('Info/news');?>" title="农业资讯">农业资讯</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="u-h-right">
					<section class="u-h-r-user">
						<div class="tar"> <span class="u-h-name-wrap">你好，</span><span class="u-h-name" id="unameheader"><?php echo ($user); ?></span><span class="pr"><tt id="msgCountId" class="undis tip-news pa"></tt><tt><a class="c-666" href="msg_my.html">消息</a></tt></span><span><a href="javascript:exit()" title="退出" class="c-666">退出</a></span> </div>
					</section>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</section>
		</header>
		<section class="u-banner">
			<a href="javascript:void(0)" onclick="skinChange();return false;" title="点击更换模板" class="u-tem-change"></a>
			<div id="uPosition">&nbsp;</div>
		</section>
		<section id="u-main">
			<menu class="u-m-left">
				<div class="u-elephant of">
					<aside class=""> <img id="userImgId" src="/Public/Webmall/images/user_default.jpg" height="100" width="100" alt="">
						<a href="http://nt1.268xue.com/uc/avatar.json" title="修改头像" class="c-fff">修改头像</a>
					</aside>
					<div class="u-elephant-bg"></div>
				</div>
				<section class="uMenuFixed">
					<div class="u-menu-head">
						<a href="<?php echo U('Personal/personal');?>" title="个人中心"> <em class="icon-2-18 u-m-icon-1">&nbsp;</em> <strong class="c-fff ml5 fsize18 vam">个人中心</strong> </a>
					</div>
					<div class="u-menu-list">
						<dl id='leftdl_course'>
							<dt class="curr"><em class="icon-2-18 u-m-icon-8">&nbsp;</em><span class="c-333 ml10 fsize16 vam">我的课程</span><em class="icon-2-14 u-up-down ml15">&nbsp;</em></dt>
							<dd style="display: block;">
								<ol>
									<li class="current">
										<a class="c-blue" href="personal.html" title="学习记录">学习记录</a>
									</li>
									<li>
										<a href="collect.html" title="我的收藏">我的收藏</a>
									</li>
								</ol>
							</dd>
						</dl>
						<dl id="leftdl_sns"> <dt><em class="icon-2-18 u-m-icon-6">&nbsp;</em><span class="c-333 ml10 fsize16 vam">我的消息</span><em class="icon-2-14 u-up-down ml15">&nbsp;</em></dt>
							<dd>
								<ol>
									<li>
										<a href="msg_sys.html" title="我的消息">我的消息</a>
									</li>
								</ol>
							</dd>
						</dl>
						<dl id="leftdl_account">
							<dt><em class="icon-2-18 u-m-icon-5">&nbsp;</em><span class="c-333 ml10 fsize16 vam">个人信息</span><em class="icon-2-14 u-up-down ml15">&nbsp;</em></dt>
							<dd>
								<ol>
									<li>
										<a href="info.html" title="个人信息">个人信息</a>
									</li>
									<li>
										<a href="changeEmail.html" title="更换邮箱/手机号">更换邮箱绑定</a>
									</li>
									<li>
										<a href="statistic.html" title="学习统计">学习统计</a>
									</li>
								</ol>
							</dd>
						</dl>
					</div>
				</section> 
				<input type="hidden" id="ctx" value="http://nt1.268xue.com"> 
			</menu>
			<div class="clearfix">
				<article class="u-m-c-w837 u-m-center">
					<section class="u-m-c-wrap">
						<section class="u-m-c-head">
							<ul class="fl u-m-c-h-txt">
								<li class="current">
									<a href="javascript:void(0)" title="">我的学习记录</a>
								</li>
							</ul>
							<div class="clear"></div>
						</section>
						<section class="line1">
							<!--若无学习记录-->
							<?php if(empty($course)): ?><div class="pl15 pr15">
									<section class="comm-tips-1">
										<p> <em class="vam c-tips-1">&nbsp;</em>
											<font class="c-999 fsize12 vam">对不起，你还没学习记录！建议你
												<a href="/Webmall/Academy/index" title="" class="c-orange">去学习</a>
											</font>
										</p>
									</section>
								</div><?php endif; ?>

							<!--收藏列表-->
							<div class="mt20" id="uTabCont">
								<article id="newFreeSellWayListUlId" class="indexTab" style="display: block;">
									<section class="ml20 mr20">
										<div class="">
											<ul class="u-buying-list u-collect-list">
												<?php if(is_array($course)): foreach($course as $key=>$course): ?><li>
														<input type="hidden" name="id" id="id" value="<?php echo ($course["id"]); ?>">
														<section class="fl u-c-img pr u-c-img-tc"> <span class="play-1 pa" onclick="watchCourse($('#id').val())">&nbsp;</span> <img src="<?php echo ($course["img_path"]); ?>" width="220" alt="" class="dis"> </section>
														<h6 class="hLh20 of unFw"> <a class="c-4e fsize16 f-fM" title="<?php echo ($course["name"]); ?>" href="<?php echo U('Academy/play',array('id'=>$course['id']));?>"><?php echo ($course["name"]); ?></a> </h6>
														<div class="hLh20 of mt5"> <span class="vam c-999">讲师：</span> <span class="vam u-m-c-teacher fsize12 c-999 ml10"><?php echo ($course["teacher"]); ?></span> </div>
														<div class="hLh20 of mt5"><span class="vam c-999">学习人数：</span> <span class="vam"><font class="fsize12 c-999 ml10"><?php echo ($course["learned_count"]); ?>人</font></span></div>
														<div class="hLh20 of mt5"><span class="vam c-999">评论人数：</span> <span class="vam u-m-c-teacher"><font class="fsize12 c-999 ml10"><?php echo ($course["comment_count"]); ?>人</font></span> </div>
														<div class="hLh20 of mt5 pr"> <span class="c-brow mr10"> <a class="c-brow mr10" title="" target="_blank" href="<?php echo U('Academy/play',array('id'=>$course['id']));?>">直接观看</a> | </span> <span class="c-brow mr10"> <a class="c-brow ml10" title="" target="_blank" href="<?php echo U('Academy/detail',array('id'=>$course['id']));?>">查看课程</a> </span> </div>
													</li><?php endforeach; endif; ?>
											</ul>
										</div>
									</section>
								</article>
							</div>
						</section>
					</section>
				</article>
			</div>
		</section>
		<!-- /尾部-->
		<div class="footer-section" style="padding: 2em 0;text-align: center;background: #fff;border-top: 1px solid #eee;">
			<div class="container">
				<div class="footer-top">
					<div style="text-align:center;">
						<a href="#"><img src="/Public/Webmall/images/logo1.png"></a>
					</div>
				</div>
				<div class="footer-bottom wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<p>Copyright &copy; 2016 www.nbnb.net.cn</p>
				</div>
			</div>
		</div>
		<!-- /尾部 结束-->
		<script src="/Public/Webmall/js/webutils.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Webmall/js/ucenter.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/Webmall/js/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				$(".u-menu-list>dl>dt").each(function() {
					var _this = $(this);
					_this.click(function() {
						if(_this.next("dd").is(":hidden")) {
							_this.addClass("curr");
							_this.next("dd").slideDown(100);
							_this.parent().siblings("dl").children("dt").removeClass("curr");
							_this.parent().siblings("dl").children("dd").slideUp(100);
						} else {
							_this.removeClass("curr");
							_this.next("dd").slideUp(100);
							_this.parent().next("dl").children("dt").addClass("curr");
							_this.parent().next("dl").children("dd").slideDown(100);
						}
					});
				});

			});
		</script>
	</body>

</html>