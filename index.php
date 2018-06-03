<?php 
	/*
		url 参数
		redirect_uri 授权回调地址 必须使用urlencode() 对链接进行处理
		response_type 返回类型 固定为code
		scope 应用授权域 snsapi_base(不弹出授权页面，直接跳转，只能获取openid，该openid不能获取用户详细信息) snsapi_userinfo (会弹出授权页面，获取openid可以进一步获取用户详细信息，需要公众号有此权限)
		state 开发者自带参数 最大128字节
	*/
	//主配置文件
	require_once("/w/include/config2.php");
	//局部配置文件
	require_once(ROOT."hxh5/1709/yijuhuayikela/config.php");
	$redirectUrl= urlencode(THISURL."home.php");
	$url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.APPID.'&redirect_uri='.$redirectUrl.'&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect';
 	header("Location:".$url);
 ?>