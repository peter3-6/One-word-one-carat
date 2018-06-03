$(function(){
//获取屏幕宽高
var h = document.documentElement.clientHeight;
	var w = document.documentElement.clientWidth;
	$('.swiper-slide').css({'width':w+'px','height':h+'px'});
  // $('.img6-1').css({'width':w+'px','height':h+'px'});
  $('.img7-1').css({'width':w+'px','height':h+'px'});
  $('.img4-1').css({'width':w+'px'});
  $('.img6-5').css({'width':w+'px'});
//加载
     var ladtime = 0;
     var t = setInterval(function(){
        ladtime++;
        if(ladtime==100){
            $('.wrap').css("display","none");
            $("body").addClass("animatedOne");
            clearTimeout(t);
            if ($(".wrap").css('display')=='none') {
            var aud ={};
function autoMusic(musicName,loopNum)
                  {
                     aud = new Audio(musicName+".mp3");
                     aud.loop=loopNum;
                    if (window.Audio) 
                    {
                      Audio.prototype.autoPlay = function(callback) 
                      {
                        var audio = this;
                        audio.play();
                        if (audio.paused) 
                        {
                          var ev = function() 
                          {
                            document.removeEventListener('touchstart', ev, true);
                            audio.play();
                            callback && callback();
                          }
                          if (/MicroMessenger/i.test(navigator.userAgent)) 
                          {
                            if (window.WeixinJSBridge) 
                            {
                              WeixinJSBridge.invoke('getNetworkType', {}, function(e) {
                                audio.play();
                                callback && callback();
                              });
                            } 
                            else 
                            {
                              document.addEventListener("WeixinJSBridgeReady", function() {
                                WeixinJSBridge.invoke('getNetworkType', {}, function(e) {

                                  if(audio.ended)
                                  {
                                    audio.paused();
                                    callback && callback();
                                  }
                                  else
                                  {
                                    audio.play();
                                    callback && callback();
                                  }
                                  
                                });
                              }, false);
                            }
                          } 
                          else 
                          {
                            document.addEventListener('touchstart', ev, true);
                          }
                        } 
                        else 
                        {
                          callback && callback();
                        }
                      }
                    } 
                    aud.autoPlay();
                  };
                  autoMusic("bg",false);

          };
            //音乐图标旋转
     $("#music").click(function(){
          $(this).toggleClass("mc"); //控制音乐图标 自转或暂停
          $(this).toggleClass("mc2");
          //控制背景音乐 播放或暂停            
          if($(this).hasClass("mc")){
             aud.play();
          }else{
             aud.pause();
         }
    })
        }
        $('.time').html(ladtime+'%'); 
    },30)
   //视频
   var video = $('#video');
  $('#video').get(0).pause();
//点击按钮视频播放前一个页面消失
  $("#img6-5").on('click',function(){
    $('#video').css('display','block') ;
    $('.img6-5').css('display','none') ;
    $('#video').get(0).play();
    $('#video').attr('autoplay');
  });
//视频播放结束显示另一个页面的设置
  document.getElementById("video").onended = function() {myFunction()};
  function myFunction() {
    $('#video').css('display','none');
    $('.img6-5').css('display','block') ;
      document.addEventListener("WeixinJSBridgeReady", function () {
      $('#video').css('display','none');
      $('.img6-5').css('display','block') ;
    });
  }



});