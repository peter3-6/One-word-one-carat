<?php
//全局配置文件
    require_once("/w/include/config2.php");
    //局部配置文件
    require_once(ROOT."hxh5/1709/yijuhuayikela/config.php");
    //流量统计文件
    require_once(ROOT."hxh5/1709/yijuhuayikela/count_action.php");
    //jssdk
    require_once(ROOT."include/jssdk/jssdk2.php");
    $signPackage = getSignPackage();
    $title = "一句话 一克拉";
    $desc = "理想国全城相邀 分享那句情话";
    $link = THISURL;
    $imgUrl = THISURL."share.jpg";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>一句话一克拉</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
   <div class="wrap">
            <img src="images/jiazai.gif" class="jiazai">
            <span class="time"></span>
    </div>
    <div class='mc mc1 mc2'  id='music'></div>
   <!--  <img src='images/music.png' class='mc'  id='music' /> -->
    <audio style="display:none; height: 0" id="bg-music" preload="auto" src="bg.mp3"></audio>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide main-1">
                <!-- 标题 -->
                <img src="images/1-2.png" class="img1-1">
                <!-- gif -->
                <img src="images/1.gif" class="img1-2">
                <!-- 字1 -->
                <img src="images/1-3.png" class="img1-3">
                <!-- 字2 -->
                <img src="images/1-1.png" class="img1-4">
                <img src="images/up.png" class="box">
            </div>
            <div class="swiper-slide main-2">
                <!-- 标题 -->
                <img src="images/1-2.png" class="img1-1">
                <!-- gif -->
                <img src="images/2.gif" class="img2-2">
                <!-- 字1 -->
                <img src="images/2-1.png" class="img2-3">
                <!-- 字2 -->
                <img src="images/1-1.png" class="img2-4">
                <img src="images/up.png" class="box">
            </div>
            <div class="swiper-slide main-3">
                <!-- 标题 -->
                <img src="images/1-2.png" class="img1-1">
                <!-- gif -->
                <img src="images/3.gif" class="img3-2">
                <!-- 字1 -->
                <img src="images/3-1.png" class="img3-3">
                <!-- 字2 -->
                <img src="images/1-1.png" class="img3-4">
                <img src="images/up.png" class="box">
            </div>
            <div class="swiper-slide main-4">
                <!-- 标题 -->
                <img src="images/1-2.png" class="img1-1">
                <!-- gif -->
                <img src="images/4.gif" class="img4-2">
                <!-- 字1 -->
                <img src="images/4-1.png" class="img4-3">
                <!-- 字2 -->
                <img src="images/1-1.png" class="img4-4">
                <img src="images/up.png" class="box">
            </div>
            <div class="swiper-slide main-5">
                <img src="images/5.gif" alt="" class="img5-1">
                <img src="images/5-1.png" alt="" class="img5-2">
                <img src="images/1-2.png" alt="" class="img5-3">
                <img src="images/1-1.png" alt="" class="img5-4">
              <img src="images/up.png" class="box">
            </div>
            <div class="swiper-slide main-6">
                <img src="images/7.gif" alt="" class="img7-1">
                <img src="images/7-1.png" alt="" class="img7-2">
                <img src="images/1-2.png" alt="" class="img7-3">
                <img src="images/1-1.png" alt="" class="img7-4">
                <img src="images/7-2.png" alt="" class="img7-5">
              <img src="images/up.png" class="box">
            </div>
            <!-- <div class="swiper-slide main-7">
                <img src="images/6-1.png" alt="" class="img6-2">
                <img src="images/8-2.png" alt="" class="img6-3">
                <img src="images/1-1.png" alt="" class="img6-4">
                <video src="images/video.mp4" id="video"  preload="meta" x-webkit-airplay="true" webkit-playsinline="true" playsinline="true" x5-video-player-type="h5" x5-video-player-fullscreen="true"></video>
                <img src="images/视频封面.jpg" class="img6-5" id="img6-5">
              <img src="images/up.png" class="box">
            </div> -->
            <div class="swiper-slide main-7">  <!--背景-->
                <img src="images/1-2.png" alt="" class="img8-1">  <!--英文-->
                <video src="images/video.mp4" id="video"  preload="meta" x-webkit-airplay="true" webkit-playsinline="true" playsinline="true" x5-video-player-type="h5" x5-video-player-fullscreen="true"></video>
                <img src="images/视频封面.jpg" class="img6-5" id="img6-5">
                <img src="images/8-2.png" alt="" class="img8-2">    <!--logo-->
                <img src="images/8-4.png" alt="" class="img8-4">  <!--邀请-->
                <a href="http://306507-vote.m.weimob.com/306507/28893/app/vote"><img src="images/8-5.png" alt="" class="img8-5"></a> <!--参与-->
            </div>
        </div>
</body>
<script src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/base.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</html>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script>
    /*
        常用接口列表
        onMenuShareTimeline 分享到朋友圈
        onMenuShareAppMessage 分享给朋友
        onMenuShareQQ 分享到QQ
        onMenuShareWeibo 分享到腾讯微博
        onMenuShareQZone 分享到QQ空间
    */
    wx.config({
        debug: false,  // false  true 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: '<?php echo $signPackage["appId"];?>',    // 必填，公众号的唯一标识
        timestamp: '<?php echo $signPackage["timestamp"];?>',  // 必填，生成签名的时间戳
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',    // 必填，生成签名的随机串
        signature: '<?php echo $signPackage["signature"];?>',  // 必填，签名，见附录1
        jsApiList: [  // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQZone',
            'onMenuShareQQ'
        ]
    });
wx.ready(function (){
    //隐藏右上角菜单接口
    //获取“分享到朋友圈”按钮点击状态及自定义分享内容接口
   wx.onMenuShareTimeline({
        title: '<?php echo $title;?>',   // 分享标题
        desc:  '<?php echo $desc; ?>',   // 分享描述
        link:  '<?php echo $link; ?>',   // 分享链接
        imgUrl:'<?php echo $imgUrl; ?>', // 分享图标
        success: function () {
            //成功分享的操作
            $.ajax({
                url:"<?php echo REALM_NAME.'include/count.php'?>", //请求验证页面
                type:"POST", //请求方式 可换为post 注意验证页面接收方式
                data:"action=addShareToCircle&id="+<?php echo $articleId?>,
                success: function(data)
                { //请求成功时执行操作
                     //alert(data);
                }
            });
        },
        cancel: function () {
           //取消分享后的操作
        }
    });

    //获取“分享给朋友”按钮点击状态及自定义分享内容接口
    wx.onMenuShareAppMessage({
        title: '<?php echo $title; ?>',   // 分享标题
        desc:  '<?php echo $desc;  ?>',   // 分享描述
        link:  '<?php echo $link;  ?>',   // 分享链接
        imgUrl:'<?php echo $imgUrl;  ?>', // 分享图标
        type: '',                           // 分享类型,music、video或link，不填默认为link
        dataUrl: '',                        // 如果type是music或video，则要提供数据链接，默认为空
        success: function () {
            //成功分享的操作
            $.ajax({
                url:"<?php echo REALM_NAME.'include/count.php'?>", //请求验证页面
                type:"POST", //请求方式 可换为post 注意验证页面接收方式
                data:"action=addShareToFriend&id="+<?php echo $articleId?>,
                success: function(data)
                { //请求成功时执行操作
                    //alert(data);
                }
            });
        },
        cancel: function () {
           //取消分享后的操作
        }
    });
    //获取“分享到QQ”按钮点击状态及自定义分享内容接口
    wx.onMenuShareQQ({
        title: '<?php echo $title; ?>',   // 分享标题
        desc:  '<?php echo $desc;  ?>',   // 分享描述
        link:  '<?php echo $link;  ?>',   // 分享链接
        imgUrl:'<?php echo $imgUrl;  ?>', // 分享图标
        success: function () {
           // 用户确认分享后执行的回调函数
        },
        cancel: function () {
           // 用户取消分享后执行的回调函数
        }
    });
    //获取“分享到QQ空间”按钮点击状态及自定义分享内容接口
    wx.onMenuShareQZone({
        title: '<?php echo $title; ?>',   // 分享标题
        desc:  '<?php echo $desc;  ?>',   // 分享描述
        link:  '<?php echo $link;  ?>',   // 分享链接
        imgUrl:'<?php echo $imgUrl;  ?>', // 分享图标
        success: function () {
           // 用户确认分享后执行的回调函数
        },
        cancel: function () {
            // 用户取消分享后执行的回调函数
        }
    });
});
</script>
