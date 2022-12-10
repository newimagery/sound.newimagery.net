<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="smart-design-mode">
<?php
    $data = include('data.php');
    $news_id = isset($_GET['id']) ? $_GET['id'] : null;

    $article = null;
    foreach($data['news'] as $item){
        if($item['id'] == $news_id){
            $article = $item;
            break;
        }
    }

?>
<head>
  <meta name="viewport" content="width=320,maximum-scale=1,user-scalable=no" />
  <meta name="screen-orientation" content="portrait" />
  <meta name="x5-orientation" content="portrait" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" />
  <meta name="keywords" />
  <meta name="applicable-device" content="mobile" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <title><?php echo $article['title'];?>-意象音频</title>
  <link rel="icon" href="static/sitefiles10185/10185258/意象音频 2 s.png" />
  <link rel="shortcut icon" href="static/sitefiles10185/10185258/意象音频 2 s.png" />
  <link rel="bookmark" href="static/sitefiles10185/10185258/意象音频 2 s.png" />
  <link href="static/Designer/Content/bottom/mbstyle.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <link href="static/Content/public/css/reset.mobile.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <link href="static/static/iconfont/1.0.0/iconfont.css?_version=20210414103602" rel="stylesheet" type="text/css" />
  <link href="static/static/iconfont/companyinfo/iconfont.css?_version=20210830113640" rel="stylesheet" type="text/css" />
  <link href="static/Designer/Content/base/css/pager.mobile.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <link href="static/prevsf/10185/10185258/css/1133604_Mobile_zh-CN.css" rel="stylesheet" />
  <script src="static/Scripts/JQuery/jquery-1.10.2.min.js?_version=20210414103602" type="text/javascript"></script>
  <script src="static/Scripts/mobileAdapter.min.js?v=20181228&_version=20210414103602" type="text/javascript"></script>
  <script type="text/javascript">
  var fixFlagId;

  function fixMobileScreen() {
    mobileUtil.fixScreen();
    mobileUtil.formatUcBrowser();
    window.addEventListener("orientationchange", function() {
      mobileUtil.fixScreen(true);
    });
    window.addEventListener("pageshow", function(e) {
      if (e.persisted) { // 浏览器后退的时候重新计算
        clearTimeout(fixFlagId);
        fixFlagId = setTimeout(function() {
          mobileUtil.fixScreen(true);
        }, 600);

      }
    }, false);
  }
  fixMobileScreen();
  </script>
  <script src="static/Scripts/JQuery/jquery-ui.min.js?_version=20210414103602" type="text/javascript"></script>
  <script src="static/Designer/Scripts/jquery.lazyload.min.js?_version=20210414103601" type="text/javascript"></script>
  <script src="static/Designer/Scripts/smart.animation.min.js?_version=20211217144519" type="text/javascript"></script>
  <script src="static/Designer/Content/Designer-panel/js/kino.razor.min.js?_version=20210414103601" type="text/javascript"></script>
  <script src="static/Scripts/common.min.js?v=20200318&_version=20220120174243" type="text/javascript"></script>
  <script src="static/Administration/Scripts/admin.validator.min.js?_version=20210414103601" type="text/javascript"></script>
  <script src="static/Administration/Content/plugins/cookie/jquery.cookie.js?_version=20210414103601" type="text/javascript"></script>
  <link href="static/Designer/Content/base/css/antChain_mobile.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <script type='text/javascript' id='jssor-all' src='static/Designer/Scripts/jssor.slider-22.2.16-all.min.js?_version=20210414103601'></script>
  <script type='text/javascript' id='slideshown' src='static/Designer/Scripts/slideshow.js?_version=20210414103601'></script>
  <script type='text/javascript' id='lz-slider' src='static/Scripts/statics/js/lz-slider.min.js'></script>
  <script type='text/javascript' id='lz-preview' src='static/Scripts/statics/js/lz-preview.min.js'></script>
  <script type="text/javascript">
  $.ajaxSetup({
    cache: false,
    beforeSend: function(jqXHR, settings) {
      settings.data = settings.data && settings.data.length > 0 ? (settings.data + "&") : "";
      settings.data = settings.data + "__RequestVerificationToken=" + $('input[name="__RequestVerificationToken"]').val();
      return true;
    }
  });
  </script>
  <style>
    /*scrollbar*/

        ::-webkit-scrollbar {
            width: 0;
            height: 3px;
        }

        ::-webkit-scrollbar-track-piece {
            margin-right: 10px;
            background-color: #EEE;
            -webkit-border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:vertical {
            height: 6px;
            background-color: #DDD;
            -webkit-border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:horizontal {
            width: 3px;
            background-color: #EEE;
            -webkit-border-radius: 6px;
        }
    </style>
  <!-- GrowingIO Analytics code version 2.1 智能埋点-->
  <!-- Copyright 2015-2018 GrowingIO, Inc. More info available at http://www.growingio.com -->
  <script type='text/javascript'>
  ! function(e, t, n, g, i) {
    e[i] = e[i] || function() {
      (e[i].q = e[i].q || []).push(arguments)
    }, n = t.createElement("script"), tag = t.getElementsByTagName("script")[0], n.async = 1, n.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + g, tag.parentNode.insertBefore(n, tag)
  }(window, document, "script", "assets.giocdn.com/2.1/gio.js", "gio");
  gio('init', '91347d56b9f11729', {});

  //custom page code begin here

  //custom page code end here

  gio('send');
  </script>
  <!-- End GrowingIO Analytics code version: 2.1 -->
</head>

<body style="overflow-x: hidden;">
  <input type="hidden" id="pageinfo" value="1133604" data-type="2" data-device="Mobile" data-entityid="2182826" />
  <div id="mainContentWrapper" style="background-color: transparent; background-image: none; background-repeat: no-repeat; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;
     position: relative; width: 100%;background-size: auto;" bgScroll="none">
    <div style="background-color: transparent; background-image: none; background-repeat: no-repeat; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;
         position: relative; width: 100%;background-size: auto;" bgScroll="none">
      <div class=" header" cpid="1133606" id="smv_Area0" style="width:100%; height: 62px;  position: relative; margin: 0 auto">
        <div id="smv_tem_1_10" ctype="area" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="True" pvid="" tareaId="Area0" re-direction="all" daxis="All" isdeletable="True" style="height: 25px; width: 100%; left: 0px; top: 0px;z-index:2;">
          <div class="yibuFrameContent tem_1_10  area_Style1 yibuFullScreen " style="overflow:visible;margin:0 0px;">
            <div class="m-container">
              <div class="smAreaC" id="smc_Area0" cid="tem_1_10">
                <div id="smv_tem_3_28" ctype="nav" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_1_10" tareaId="Area0" re-direction="all" daxis="All" isdeletable="True" style="height: 45px; width: 27px; left: 291px; top: 12px;z-index:3;">
                  <div class="yibuFrameContent tem_3_28  nav_Style1  " style="overflow:visible;;">
                    <?php include('header.php'); ?>
                    <script>
                    $(function() {

                      var $navBtn = $('#nav_tem_3_28 a.m-btn');
                      var $closeBtn = $(".tem_3_28_nav .m-btn");
                      var $navBody = $('.tem_3_28_nav');

                      if ("Prev" == "Design") {
                        $navBody.css({
                          "width": "320px",
                          "left": "50%",
                          "marginLeft": "-160px"
                        });
                      }
                      //弹出弹层
                      $navBtn.click(function() {
                        $('.tem_3_28_nav').addClass('exist').appendTo($('body'));
                        $navBody.fadeIn(200);
                      });
                      //隐藏弹层
                      $closeBtn.click(function() {
                        $navBody.fadeOut(200);
                        if ($('.tem_3_28_nav').hasClass("exist")) {
                          $('.tem_3_28_nav').removeClass("exist").appendTo(".nav_tem_3_28:last");
                        }
                      });

                      $(".tem_3_28_nav .mw-nav-item-link").click(function() {
                        $(".tem_3_28_nav .mw-nav-item-link").removeClass("current");
                        $(this).addClass("current");
                      });
                      //选中
                      SetNavSelectedStyleForMobileOpen('nav_tem_3_28');
                    });
                    </script>
                  </div>
                </div>
                <div id="smv_tem_9_52" ctype="logoimage" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_1_10" tareaId="Area0" re-direction="all" daxis="All" isdeletable="True" style="height: 35px; width: 86px; left: 12px; top: 15px;z-index:5;">
                  <div class="yibuFrameContent tem_9_52  logoimage_Style1  " style="overflow:visible;;">
                    <div class="pic_m_t_1" data-filltype="0" id="div_tem_9_52">
                      <a class="w-image-box" target="_self" href="/sy">
                        <img src="static/contents/sitefiles2037/10185258/images/14189929.png" alt="" title="" id="img_smv_tem_9_52">
                      </a>
                    </div>
                    <script type="text/javascript">
                    $(function() {
                      InitImageSmv("tem_9_52", "86", "35", "0");
                    });
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-layout-wrapper" id="smv_AreaMainWrapper" style="background-color: transparent; background-image: none;
         background-repeat: no-repeat; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;background-size: auto;" bgScroll="none">
      <div class="main-layout" id="tem-main-layout11" style="width: 100%;">
        <div style="display: none">
        </div>
        <div class="" id="smv_MainContent" rel="mainContentWrapper" style="width: 100%; min-height: 300px; position: relative; ">
          <div class="smvContainer" id="smv_Main" cpid="1133604" style="width: 100%;height:515px;  position: relative; background-color: transparent; background-image:none;background-repeat:no-repeat; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;background-position:0 0;">
            <div id="smv_tem_4_35" ctype="newsItemTitleBind" class="smartRecpt esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="min-height: 28px; width: 100%; left: 0px; top: 70px;z-index:4;">
              <div class="yibuFrameContent tem_4_35  newsItemTitleBind_Style1 yibuFullScreen " style="overflow:visible;margin:0 15px;">
                <h1 class="mw-title"><?php echo $article['title'];?></h1>
              </div>
            </div>
            <div id="smv_tem_5_49" ctype="newsItemCreatedDatetimeBind" class="esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 17px; width: 182px; left: 14px; top: 102px;z-index:1;">
              <div class="yibuFrameContent tem_5_49  newsItemCreatedDatetimeBind_Style1  " style="overflow:visible;;">
                <!--article createtime-->
                <div class="mw-createtime"><span class="mw-createtime-item w-createtime-caption"></span><span class="mw-createtime-item w-createtime-date">2020-03-09</span> <span class="mw-createtime-item w-createtime-time">14:30</span></div>
                <!--/article createtime-->
              </div>
            </div>
            <div id="smv_tem_7_24" ctype="line" class="esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 100%; left: 0px; top: 118px;z-index:6;">
              <div class="yibuFrameContent tem_7_24  line_Style1 yibuFullScreen " style="overflow:visible;margin:0 15px;">
                <!-- w-line -->
                <div style="position:relative; height:100%">
                  <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                </div>
              </div>
            </div>
            <div id="smv_tem_12_14" ctype="slideset" class="esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="Main" isContainer="True" pvid="" tareaId="Main" re-direction="y" daxis="Y" isdeletable="True" style="height: 119px; width: 100%; left: 0px; top: -65px;z-index:0;">
              <div class="yibuFrameContent tem_12_14  slideset_Style1 yibuFullScreen " style="overflow:visible;margin:0 0px;">
                <!--w-slide-->
                <div class="m-slide" id="slider_smv_tem_12_14">
                  <div class="m-slide-inner" data-u="slides">
                    <div class="content-box" data-area="Area1">
                      <div id="smc_Area1" cid="tem_12_14" class="smAreaC slideset_AreaC">
                      </div>
                      <div class="content-box-inner" style="background-image:url(//ntemimg.wezhan.cn/contents/sitefiles2001/10007281/images/-15068.jpg);background-position:50% 50%;background-repeat:no-repeat;background-size: cover;background-color:#ffffff;opacity:1"></div>
                    </div>
                  </div>
                  <!-- Bullet Navigator -->
                  <div data-u="navigator" class="m-slide-btn-box  f-hide " data-autocenter="1">
                    <!-- bullet navigator item prototype -->
                    <div class="m-slide-btn" data-u="prototype"></div>
                  </div>
                  <!-- 1Arrow Navigator -->
                  <span data-u="arrowleft" class="m-slide-arrowl slideArrow  f-hide " data-autocenter="2">
                    <i class="m-itemicon mw-iconfont">&#xb133;</i>
                  </span>
                  <span data-u="arrowright" class="m-slide-arrowr slideArrow  f-hide " data-autocenter="2">
                    <i class="m-itemicon mw-iconfont">&#xb132;</i>
                  </span>
                </div>
                <!--/w-slide-->
                <script type="text/javascript">
                tem_12_14_page = 1;
                //刷新屏幕后 用延迟的话会执行两次动画，故特殊处理
                tem_12_14_firstTime = true;
                tem_12_14_sliderset3_init = function() {
                  var jssor_1_options_tem_12_14 = {
                    $AutoPlay: "False" == "True" ? false : "off" == "on", //自动播放
                    $PlayOrientation: 1, //2为向上滑，1为向左滑
                    $Loop: 1, //循环
                    $Idle: parseInt("1000"), //切换间隔
                    $SlideDuration: "1000", //延时
                    $SlideEasing: $Jease$.$OutQuint,

                    $CaptionSliderOptions: {
                      $Class: $JssorCaptionSlideo$,
                      $Transitions: GetSlideAnimation("1", "1000"),
                    },

                    $ArrowNavigatorOptions: {
                      $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                      $Class: $JssorBulletNavigator$,
                      $ActionMode: "1"
                    }
                  };
                  //初始化幻灯
                  var slide = new $JssorSlider$("slider_smv_tem_12_14", jssor_1_options_tem_12_14);
                  $('#smv_tem_12_14').data('jssor_slide', slide);

                  //幻灯栏目自动或手动切换时触发的事件
                  slide.$On($JssorSlider$.$EVT_PARK, function(slideIndex, fromIndex) {
                    var $slideWrapper = $("#slider_smv_tem_12_14 .m-slide-inner:last");
                    var $fromSlide = $slideWrapper.find(".content-box:eq(" + fromIndex + ")");
                    var $curSlide = $slideWrapper.find(".content-box:eq(" + slideIndex + ")");

                    $("#smv_tem_12_14").attr("selectArea", $curSlide.attr("data-area"));
                    $fromSlide.find(".animated").smanimate("stop");
                    $curSlide.find(".animated").smanimate("stop");
                    $("#switch_tem_12_14 .page").html(slideIndex + 1);

                    $curSlide.find(".animated").smanimate("replay");
                    return false;
                  });
                  //切换栏点击事件
                  $("#switch_tem_12_14 .left").unbind("click").click(function() {
                    if (tem_12_14_page == 1) {
                      tem_12_14_page = 1;
                    } else {
                      tem_12_14_page = tem_12_14_page - 1;
                    }
                    $("#switch_tem_12_14 .page").html(tem_12_14_page);
                    slide.$Prev();
                  });
                  $("#switch_tem_12_14 .right").unbind("click").click(function() {
                    if (tem_12_14_page == 1) {
                      tem_12_14_page = 1;
                    } else {
                      tem_12_14_page = tem_12_14_page + 1;
                    }
                    $("#switch_tem_12_14 .page").html(tem_12_14_page);
                    slide.$Next();
                  });
                }

                $(function() {
                  tem_12_14_sliderset3_init();
                  var areaId = $("#smv_tem_12_14").attr("tareaid");
                  if (areaId == "") {
                    var mainWidth = $("#smv_Main").width();
                    $("#smv_tem_12_14 .slideset_AreaC").css({
                      "width": mainWidth + "px",
                      "position": "relative",
                      "margin": "0 auto"
                    });
                  } else {
                    var controlWidth = $("#smv_tem_12_14").width();
                    $("#smv_tem_12_14 .slideset_AreaC").css({
                      "width": controlWidth + "px",
                      "position": "relative",
                      "margin": "0 auto"
                    });
                  }
                  $("#smv_tem_12_14").attr("selectArea", "Area1");

                  var arrowHeight = $('#slider_smv_tem_12_14 .m-slide-arrowl').outerHeight();
                  var boxHeight = parseInt("117");
                  var arrowTop = (boxHeight - arrowHeight) / 2;
                  $('#slider_smv_tem_12_14 .m-slide-arrowl').css('top', arrowTop).parent().css('top', 0);
                  $('#slider_smv_tem_12_14 .m-slide-arrowr').css('top', arrowTop).parent().css('top', 0);
                });
                </script>
              </div>
            </div>
            <div id="smv_tem_18_31" ctype="newsItemContentBind" class="smartRecpt esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="min-height: 325px; width: 100%; left: 0px; top: 138px;z-index:10;">
              <div class="yibuFrameContent tem_18_31  newsItemContentBind_Style1 yibuFullScreen " style="overflow:visible;margin:0 0px;">
                <style>
                .w-detail ul,
                .w-detail li,
                .w-detail ol {
                  list-style: inherit;
                }

                .w-detail ul,
                .w-detail ol {
                  padding-left: 40px;
                }
                </style>
                <!--article detail-->
                <div id="tem_18_31_txt" class="w-detailcontent">
                  <div class="mw-detail w-detail">
                    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
                    <title></title>
                    <style type="text/css">
                    body {
                      font-family: 'Times New Roman';
                      font-size: 1em;
                    }

                    ul,
                    ol {
                      margin-top: 0;
                      margin-bottom: 0;
                    }

                    .Normal {
                      text-align: left;
                      page-break-inside: auto;
                      page-break-after: auto;
                      page-break-before: auto;
                      margin-top: 0pt;
                      margin-bottom: 0pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 10.5pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                    }

                    .Heading-1 {
                      text-align: left;
                      page-break-inside: avoid;
                      page-break-after: avoid;
                      page-break-before: auto;
                      line-height: 2.41;
                      margin-top: 17pt;
                      margin-bottom: 16.5pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 22pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .Heading-2 {
                      text-align: left;
                      page-break-inside: avoid;
                      page-break-after: avoid;
                      page-break-before: auto;
                      line-height: 1.73;
                      margin-top: 13pt;
                      margin-bottom: 13pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 16pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .Heading-3 {
                      text-align: left;
                      page-break-inside: avoid;
                      page-break-after: avoid;
                      page-break-before: auto;
                      line-height: 1.73;
                      margin-top: 13pt;
                      margin-bottom: 13pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 16pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .Heading-4 {
                      text-align: left;
                      page-break-inside: avoid;
                      page-break-after: avoid;
                      page-break-before: auto;
                      line-height: 1.57;
                      margin-top: 14pt;
                      margin-bottom: 14.5pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 14pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .Heading-5 {
                      text-align: left;
                      page-break-inside: avoid;
                      page-break-after: avoid;
                      page-break-before: auto;
                      line-height: 1.57;
                      margin-top: 14pt;
                      margin-bottom: 14.5pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 14pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .Heading-6 {
                      text-align: left;
                      page-break-inside: avoid;
                      page-break-after: avoid;
                      page-break-before: auto;
                      line-height: 1.33;
                      margin-top: 12pt;
                      margin-bottom: 3.2pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 12pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .Heading-7 {
                      text-align: left;
                      page-break-inside: avoid;
                      page-break-after: avoid;
                      page-break-before: auto;
                      line-height: 1.33;
                      margin-top: 12pt;
                      margin-bottom: 3.2pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 12pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .Heading-8 {
                      text-align: left;
                      page-break-inside: avoid;
                      page-break-after: avoid;
                      page-break-before: auto;
                      line-height: 1.33;
                      margin-top: 12pt;
                      margin-bottom: 3.2pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 12pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                    }

                    .Heading-9 {
                      text-align: left;
                      page-break-inside: avoid;
                      page-break-after: avoid;
                      page-break-before: auto;
                      line-height: 1.33;
                      margin-top: 12pt;
                      margin-bottom: 3.2pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 10.5pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                    }

                    .Default-Paragraph-Font {
                      font-size: 10.5pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                    }

                    .Normal-Table {}

                    .标题-1-Char {
                      font-size: 22pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .标题-2-Char {
                      font-size: 16pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .标题-3-Char {
                      font-size: 16pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .标题-4-Char {
                      font-size: 14pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .标题-5-Char {
                      font-size: 14pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .标题-6-Char {
                      font-size: 12pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .标题-7-Char {
                      font-size: 12pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                      font-weight: bold;
                    }

                    .标题-8-Char {
                      font-size: 12pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                    }

                    .标题-9-Char {
                      font-size: 10.5pt;
                      font-family: 微软雅黑;
                      mso-fareast-font-family: 微软雅黑;
                    }

                    .Title {
                      text-align: center;
                      page-break-inside: auto;
                      page-break-after: auto;
                      page-break-before: auto;
                      margin-top: 12pt;
                      margin-bottom: 3pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 16pt;
                      font-family: 宋体;
                      mso-fareast-font-family: 宋体;
                      font-weight: bold;
                    }

                    .标题-Char {
                      font-size: 16pt;
                      font-family: 宋体;
                      mso-fareast-font-family: 宋体;
                      font-weight: bold;
                    }

                    .Subtitle {
                      text-align: center;
                      page-break-inside: auto;
                      page-break-after: auto;
                      page-break-before: auto;
                      line-height: 1.3;
                      margin-top: 12pt;
                      margin-bottom: 3pt;
                      margin-left: 0pt;
                      text-indent: 0pt;
                      border-top-style: none;
                      border-left-style: none;
                      border-right-style: none;
                      border-bottom-style: none;
                      font-size: 16pt;
                      font-family: 宋体;
                      mso-fareast-font-family: 宋体;
                      font-weight: bold;
                    }

                    .副标题-Char {
                      font-size: 16pt;
                      font-family: 宋体;
                      mso-fareast-font-family: 宋体;
                      font-weight: bold;
                    }
                    </style>
                    <div class="Section0">
                      <?php echo $article['content'];?>
                    </div>
                  </div>
                </div>
                <!--/article detail-->
                <script type="text/javascript">
                $(function() {
                  var marginLeft = parseInt($('#smv_tem_18_31').children().first().css("margin-left"));
                  // var contentWidth = $(window).width() - marginLeft * 2;
                  $('#smv_tem_18_31 img').css("cssText", 'max-width:100% !important;height:auto !important;');
                  $('#smv_tem_18_31 embed').css("cssText", 'max-width:100% !important;height:auto !important;');
                  $('#smv_tem_18_31 iframe').css("cssText", 'max-width:100% !important;height:auto !important;');

                  $('#smv_tem_18_31 table').each(function() {
                    var contentWidth = $(this).closest(".mw-detail").width();
                    if ($(this).width() > contentWidth) {
                      $(this).before("<span id='2725f6e2ddc74d6bbe1304501d2c6258' style='display:inline-block;height:20px;line-height:20px;width:132px;background-color:#aaa;border-radius:3px 3px 0 0;text-align: center;color:#FFF;font-size:12px;'>左右滑动查看完整表格</span>");
                    }
                    $(this).wrap("<div style='width:" + contentWidth + "px; overflow-x:auto;-webkit-overflow-scrolling:touch;'></div>");
                  });
                  var splitLength = $('#tem_18_31_txt').find("div").html().split("_ueditor_page_break_tag_");
                  if (splitLength.length > 1) {
                    pagination('tem_18_31_txt', "首页", "末页", "上一页", "下一页", function(hisHeight) {
                      if (typeof hisHeight == 'undefined') {
                        $('#smv_tem_18_31').smrecompute();
                      } else {
                        var tabContentHeight = $('#tem_18_31_txt').height();
                        $('#smv_tem_18_31').smrecompute("recomputeTo", [tabContentHeight, hisHeight]);
                      }
                      $('#smv_tem_18_31 img').each(function() {
                        var src = $(this).attr("src");
                        if (typeof src != 'undefined' && src != "") {
                          $(this).attr("src", "");
                          $(this)[0].onload = function() {
                            $('#smv_tem_18_31').smrecompute();
                          };
                          $(this).attr("src", src);
                        }
                      });
                      showBigImg_tem_18_31();
                    });
                  } else {
                    $('#smv_tem_18_31 img').each(function() {
                      var src = $(this).attr("src");
                      if (typeof src != 'undefined' && src != "") {
                        $(this).attr("src", "");
                        $(this)[0].onload = function() {
                          $('#smv_tem_18_31').smrecompute();
                        };
                        $(this).attr("src", src);
                      }
                    });
                    showBigImg_tem_18_31();
                  }

                  xwezhan.cssUeditorTale();
                });

                function showBigImg_tem_18_31() {
                  if (false) {
                    var bigImageArray = [];
                    $('#smv_tem_18_31 img').each(function() {
                      if ($(this).parents("a").length == 0) {
                        var srcStr = $(this).attr("src");
                        $(this).lzpreview({
                          cssLink: '/Content/css/atlas-preview.css',
                          pageSize: 1, //每页最大图片数
                          imgUrl: [srcStr],
                          imgAlt: [''],
                          imgLink: ['javascript:void(0)'],
                          imgTarget: [''],
                          itemSelect: $(this),
                          arrow: false,
                          thumbnail: false
                        });
                      }
                    });
                  }
                }
                </script>
              </div>
            </div>
          </div><input type='hidden' name='__RequestVerificationToken' id='token__RequestVerificationToken' value='7mtD0i1GF9iOX-rnM6PG6ilqwTnHBav4CxQNTuoEZo3tC_Y_Fk-fGCZq4sMNRJjX5CQpwwsn4H22E__upFcEy9z5BmcZ92ujhEeOVGMa9tYXli5nRaLsXTJqFj26Qxax0' />
        </div>
      </div>
    </div>
    <div style="background-color: transparent; background-image: none; background-repeat: no-repeat; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;
         position: relative; width: 100%;background-size: auto;" bgScroll="none">
      <div class=" footer" cpid="1133606" id="smv_Area3" style="width:100%; height: 98px; position: relative; margin: 0 auto;">
        <div id="smv_tem_4_31" ctype="area" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area3" isContainer="True" pvid="" tareaId="Area3" re-direction="all" daxis="All" isdeletable="True" style="height: 98px; width: 100%; left: 0px; top: 0px;z-index:2;">
          <div class="yibuFrameContent tem_4_31  area_Style1 yibuFullScreen " style="overflow:visible;margin:0 0px;">
            <div class="m-container">
              <div class="smAreaC" id="smc_Area0" cid="tem_4_31">
                <div id="smv_tem_5_2" ctype="button" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_4_31" tareaId="Area3" re-direction="all" daxis="All" isdeletable="True" style="height: 40px; width: 27px; left: 108px; top: 5px;z-index:2;">
                  <div class="yibuFrameContent tem_5_2  button_Style1  " style="overflow:visible;;"><a class="mw-btn" target="_self" href="">
                      <span class="mw-iconfont"></span>
                      <span class="mw-txt"></span>
                    </a>
                    <script type="text/javascript">
                    $(function() {});
                    </script>
                  </div>
                </div>
                <div id="smv_tem_6_43" ctype="button" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_4_31" tareaId="Area3" re-direction="all" daxis="All" isdeletable="True" style="height: 40px; width: 27px; left: 141px; top: 5px;z-index:2;">
                  <div class="yibuFrameContent tem_6_43  button_Style1  " style="overflow:visible;;"><a class="mw-btn" target="_self" href="">
                      <span class="mw-iconfont"></span>
                      <span class="mw-txt"></span>
                    </a>
                    <script type="text/javascript">
                    $(function() {});
                    </script>
                  </div>
                </div>
                <div id="smv_tem_7_55" ctype="button" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_4_31" tareaId="Area3" re-direction="all" daxis="All" isdeletable="True" style="height: 33px; width: 27px; left: 179px; top: 8px;z-index:2;">
                  <div class="yibuFrameContent tem_7_55  button_Style1  " style="overflow:visible;;"><a class="mw-btn" target="_self" href="http://weibo.com/imagerysounddesign">
                      <span class="mw-iconfont"></span>
                      <span class="mw-txt"></span>
                    </a>
                    <script type="text/javascript">
                    $(function() {});
                    </script>
                  </div>
                </div>
                <div id="smv_tem_11_50" ctype="companyinfo" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_4_31" tareaId="Area3" re-direction="all" daxis="All" isdeletable="True" style="height: 40px; width: 100%; left: 0px; top: 45px;z-index:5;">
                  <div class="yibuFrameContent tem_11_50  companyinfo_Style1 yibuFullScreen " style="overflow:hidden;margin:0 0px;">
                    <ul class="w-company-info iconStyle2">
                      <li class="company-info-item">
                        <a href="javascript:void(0)" style="padding-left:0px;margin-left: 0px;">
                          <span class="icon company-info-icon   mw-icon-hide ">
                            <i class="ltd-icon gs-gongsi"></i>
                          </span><span class="company-text"><span class="company-info-title" style="white-space:pre">版权信息：</span><span class="company-info-text">新意象音频</span>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="text-align:center;width: 100%;padding-top: 4px;font-size: 12; background-color: #ffffff;font-family:Scd.Data.Domain.Site.IcpStyleConfig?.FontFamily;opacity:1.0;position: relative; z-index: 3;" id="all-icp-bottom">
    <div class="page-bottom--area style1" id="b_style1" style="display:none">
      <div class="bottom-content">
        <div class="icp-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="https://beian.miit.gov.cn" class="bottom-words">
            <span class="icp-words"></span>
          </a>
        </div>
        <div class="ga-area common-style bottom-words margin-bottom12">
          <a href="#" target="_blank" class="bottom-words ga_link">
            <img src="static/Designer/Content/images/ga_icon.png" alt="" /><span class="ga-words bottom-words"></span>
          </a>
        </div>
        <div class="ali-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="#" class="bottom-words">
            <?xml version="1.0" encoding="UTF-8" ?>
            <svg width="55px" height="13px" viewBox="0 0 55 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="备案信息优化" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="底部样式4-没有ipv6" transform="translate(-562.000000, -366.000000)" fill="#989898" fill-rule="nonzero">
                  <g id="编组-2备份" transform="translate(57.000000, 301.000000)">
                    <g id="编组-5" transform="translate(505.000000, 49.000000)">
                      <g id="编组" transform="translate(0.000000, 16.000000)">
                        <path d="M30.4355785,11.3507179 C32.2713894,11.2986909 32.9105785,10.0128801 32.9105785,8.9203125 L32.9105785,2.23112331 L33.1558488,2.23112331 L33.4011191,1.2426098 L28.0051731,1.2426098 L28.2504434,2.23112331 L31.9146326,2.23112331 L31.9146326,8.82369088 C31.9146326,9.7676098 31.2234164,10.406799 30.1828758,10.406799 L30.4355785,11.3507179 L30.4355785,11.3507179 Z" id="路径"></path>
                        <path d="M30.6288218,9.06896115 C30.8740921,8.82369088 30.9781461,8.47436655 30.9781461,7.87977196 L30.9781461,3.1230152 L28.0572002,3.1230152 L28.0572002,9.41828547 L29.6923353,9.41828547 C30.0862542,9.41828547 30.4355785,9.32166385 30.6288218,9.06896115 Z M29.0977407,8.32571791 L29.0977407,4.11896115 L29.9896326,4.11896115 L29.9896326,7.78315034 C29.9896326,8.17706926 29.840984,8.32571791 29.4916596,8.32571791 L29.0977407,8.32571791 Z M23.9396326,1.14598818 L23.9396326,11.3061233 L24.9281461,11.3061233 L24.9281461,2.23855574 L26.1693623,2.23855574 L25.4261191,5.41220439 C25.7234164,5.65747466 26.265984,6.30409628 26.265984,7.44125845 C26.265984,8.57842061 25.6193623,8.97977196 25.4261191,9.07639358 L25.4261191,10.1169341 C25.9686867,10.0649071 27.3585515,9.32166385 27.3585515,7.49328547 C27.3585515,6.40071791 26.9646326,5.61288007 26.6153083,5.11490709 L27.5072002,1.15342061 C27.5072002,1.14598818 23.9396326,1.14598818 23.9396326,1.14598818 L23.9396326,1.14598818 Z M35.340984,10.3101774 L35.1403083,11.2986909 L44.1558488,11.2986909 L43.9105785,10.3101774 L40.1423353,10.3101774 L40.1423353,9.02436655 L43.6132812,9.02436655 L43.368011,8.03585304 L40.1497677,8.03585304 L40.1497677,6.7426098 L42.4761191,6.7426098 C43.5686867,6.7426098 44.1632813,6.20004223 44.1632813,5.05544764 L44.1632813,1.09396115 L35.1403083,1.09396115 L35.1403083,6.69058277 L39.1017948,6.69058277 L39.1017948,7.93179899 L35.8835515,7.93179899 L35.6382812,8.9203125 L39.1092272,8.9203125 L39.1092272,10.2581503 L35.340984,10.2581503 L35.340984,10.3101774 Z M40.1423353,4.51288007 L42.5207137,4.51288007 L42.2754434,3.52436655 L40.1423353,3.52436655 L40.1423353,2.23112331 L43.1153083,2.23112331 L43.1153083,5.05544764 C43.1153083,5.55342061 42.9146326,5.74666385 42.5207137,5.74666385 L40.1423353,5.74666385 L40.1423353,4.51288007 Z M36.2328758,5.75409628 L36.2328758,2.23112331 L39.1538218,2.23112331 L39.1538218,3.47233953 L37.0207137,3.47233953 L36.7754434,4.46085304 L39.1538218,4.46085304 L39.1538218,5.74666385 L36.2328758,5.74666385 L36.2328758,5.75409628 Z M53.922065,1.14598818 L46.8389569,1.14598818 L46.5862542,2.23112331 L54.2193623,2.23112331 L53.922065,1.14598818 Z M46.4376056,11.2540963 L46.3855785,11.3507179 L53.320038,11.3507179 C53.7139569,11.3507179 54.0112542,11.2540963 54.2119299,11.0013936 C54.4126056,10.7040963 54.3605785,10.354772 54.2639569,10.1615287 C54.1673353,9.66355574 53.765984,7.87977196 53.6693623,7.63450169 L53.6693623,7.58247466 L52.6288218,7.58247466 L52.6808488,7.67909628 C52.7328758,7.92436655 53.1788218,9.76017736 53.2754434,10.354772 L47.7234164,10.354772 C47.9686867,9.16558277 48.4146326,7.18112331 48.6673353,6.1926098 L54.9105785,6.1926098 L54.6653083,5.20409628 L46.1403083,5.20409628 L45.895038,6.1926098 L47.6267948,6.1926098 C47.4261191,7.09193412 46.7869299,9.61896115 46.4376056,11.2540963 L46.4376056,11.2540963 Z M3.72341639,9.86423142 C3.27747044,9.7676098 2.98017314,9.41828547 2.98017314,8.9203125 L2.98017314,3.91828547 C3.03220017,3.47233953 3.32949747,3.1230152 3.72341639,3.02639358 L8.38355152,2.03788007 L8.88152449,0.0534206081 L3.47814611,0.0534206081 C1.54571368,0.00139358108 0.00720016892,1.53990709 0.00720016892,3.4203125 L0.00720016892,9.36625845 C0.00720016892,11.2466639 1.59030828,12.8372044 3.47814611,12.8372044 L8.88152449,12.8372044 L8.38355152,10.8527449 L3.72341639,9.86423142 Z M17.3024704,0.00139358108 L11.8544975,0.00139358108 L12.3524704,1.98585304 L17.0051731,2.97436655 C17.4511191,3.07098818 17.7484164,3.4203125 17.7484164,3.86625845 L17.7484164,8.86828547 C17.6963894,9.31423142 17.3990921,9.66355574 17.0051731,9.76017736 L12.345038,10.7561233 L11.847065,12.7405828 L17.3024704,12.7405828 C19.1828758,12.7405828 20.7734164,11.2020693 20.7734164,9.26963682 L20.7734164,3.32369088 C20.7213894,1.53990709 19.1828758,0.00139358108 17.3024704,0.00139358108 Z" id="形状"></path>
                        <polygon id="路径" points="8.38355152 6.1480152 12.345038 6.1480152 12.345038 6.64598818 8.38355152 6.64598818"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </svg><span>&nbsp;本网站由阿里云提供云计算及安全服务</span>
          </a>
        </div>
        <div class="ipv-powerby margin-bottom12">
          <div class="ipv-area inline-style common-style bottom-words">
            本网站支持<span class="ipv6-box">IPv6</span>
          </div>
          <div class="divider inline-style common-style bottom-words"></div>
          <div class="powerby-area inline-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
              <span class="bottom-words" style="display: block;"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="page-bottom--area style2" id="b_style2" style="display:none">
      <div class="bottom-content">
        <div class="ga-area common-style bottom-words margin-bottom12">
          <a href="#" target="_blank" class="bottom-words ga_link">
            <img src="static/Designer/Content/images/ga_icon.png" alt="" /><span class="ga-words"></span>
          </a>
        </div>
        <div class="icp-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="https://beian.miit.gov.cn" class="bottom-words">
            <span class="icp-words"></span>
          </a>
        </div>
        <div class="ali-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="#" class="bottom-words">
            <?xml version="1.0" encoding="UTF-8" ?>
            <svg width="55px" height="13px" viewBox="0 0 55 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="备案信息优化" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="底部样式4-没有ipv6" transform="translate(-562.000000, -366.000000)" fill="#989898" fill-rule="nonzero">
                  <g id="编组-2备份" transform="translate(57.000000, 301.000000)">
                    <g id="编组-5" transform="translate(505.000000, 49.000000)">
                      <g id="编组" transform="translate(0.000000, 16.000000)">
                        <path d="M30.4355785,11.3507179 C32.2713894,11.2986909 32.9105785,10.0128801 32.9105785,8.9203125 L32.9105785,2.23112331 L33.1558488,2.23112331 L33.4011191,1.2426098 L28.0051731,1.2426098 L28.2504434,2.23112331 L31.9146326,2.23112331 L31.9146326,8.82369088 C31.9146326,9.7676098 31.2234164,10.406799 30.1828758,10.406799 L30.4355785,11.3507179 L30.4355785,11.3507179 Z" id="路径"></path>
                        <path d="M30.6288218,9.06896115 C30.8740921,8.82369088 30.9781461,8.47436655 30.9781461,7.87977196 L30.9781461,3.1230152 L28.0572002,3.1230152 L28.0572002,9.41828547 L29.6923353,9.41828547 C30.0862542,9.41828547 30.4355785,9.32166385 30.6288218,9.06896115 Z M29.0977407,8.32571791 L29.0977407,4.11896115 L29.9896326,4.11896115 L29.9896326,7.78315034 C29.9896326,8.17706926 29.840984,8.32571791 29.4916596,8.32571791 L29.0977407,8.32571791 Z M23.9396326,1.14598818 L23.9396326,11.3061233 L24.9281461,11.3061233 L24.9281461,2.23855574 L26.1693623,2.23855574 L25.4261191,5.41220439 C25.7234164,5.65747466 26.265984,6.30409628 26.265984,7.44125845 C26.265984,8.57842061 25.6193623,8.97977196 25.4261191,9.07639358 L25.4261191,10.1169341 C25.9686867,10.0649071 27.3585515,9.32166385 27.3585515,7.49328547 C27.3585515,6.40071791 26.9646326,5.61288007 26.6153083,5.11490709 L27.5072002,1.15342061 C27.5072002,1.14598818 23.9396326,1.14598818 23.9396326,1.14598818 L23.9396326,1.14598818 Z M35.340984,10.3101774 L35.1403083,11.2986909 L44.1558488,11.2986909 L43.9105785,10.3101774 L40.1423353,10.3101774 L40.1423353,9.02436655 L43.6132812,9.02436655 L43.368011,8.03585304 L40.1497677,8.03585304 L40.1497677,6.7426098 L42.4761191,6.7426098 C43.5686867,6.7426098 44.1632813,6.20004223 44.1632813,5.05544764 L44.1632813,1.09396115 L35.1403083,1.09396115 L35.1403083,6.69058277 L39.1017948,6.69058277 L39.1017948,7.93179899 L35.8835515,7.93179899 L35.6382812,8.9203125 L39.1092272,8.9203125 L39.1092272,10.2581503 L35.340984,10.2581503 L35.340984,10.3101774 Z M40.1423353,4.51288007 L42.5207137,4.51288007 L42.2754434,3.52436655 L40.1423353,3.52436655 L40.1423353,2.23112331 L43.1153083,2.23112331 L43.1153083,5.05544764 C43.1153083,5.55342061 42.9146326,5.74666385 42.5207137,5.74666385 L40.1423353,5.74666385 L40.1423353,4.51288007 Z M36.2328758,5.75409628 L36.2328758,2.23112331 L39.1538218,2.23112331 L39.1538218,3.47233953 L37.0207137,3.47233953 L36.7754434,4.46085304 L39.1538218,4.46085304 L39.1538218,5.74666385 L36.2328758,5.74666385 L36.2328758,5.75409628 Z M53.922065,1.14598818 L46.8389569,1.14598818 L46.5862542,2.23112331 L54.2193623,2.23112331 L53.922065,1.14598818 Z M46.4376056,11.2540963 L46.3855785,11.3507179 L53.320038,11.3507179 C53.7139569,11.3507179 54.0112542,11.2540963 54.2119299,11.0013936 C54.4126056,10.7040963 54.3605785,10.354772 54.2639569,10.1615287 C54.1673353,9.66355574 53.765984,7.87977196 53.6693623,7.63450169 L53.6693623,7.58247466 L52.6288218,7.58247466 L52.6808488,7.67909628 C52.7328758,7.92436655 53.1788218,9.76017736 53.2754434,10.354772 L47.7234164,10.354772 C47.9686867,9.16558277 48.4146326,7.18112331 48.6673353,6.1926098 L54.9105785,6.1926098 L54.6653083,5.20409628 L46.1403083,5.20409628 L45.895038,6.1926098 L47.6267948,6.1926098 C47.4261191,7.09193412 46.7869299,9.61896115 46.4376056,11.2540963 L46.4376056,11.2540963 Z M3.72341639,9.86423142 C3.27747044,9.7676098 2.98017314,9.41828547 2.98017314,8.9203125 L2.98017314,3.91828547 C3.03220017,3.47233953 3.32949747,3.1230152 3.72341639,3.02639358 L8.38355152,2.03788007 L8.88152449,0.0534206081 L3.47814611,0.0534206081 C1.54571368,0.00139358108 0.00720016892,1.53990709 0.00720016892,3.4203125 L0.00720016892,9.36625845 C0.00720016892,11.2466639 1.59030828,12.8372044 3.47814611,12.8372044 L8.88152449,12.8372044 L8.38355152,10.8527449 L3.72341639,9.86423142 Z M17.3024704,0.00139358108 L11.8544975,0.00139358108 L12.3524704,1.98585304 L17.0051731,2.97436655 C17.4511191,3.07098818 17.7484164,3.4203125 17.7484164,3.86625845 L17.7484164,8.86828547 C17.6963894,9.31423142 17.3990921,9.66355574 17.0051731,9.76017736 L12.345038,10.7561233 L11.847065,12.7405828 L17.3024704,12.7405828 C19.1828758,12.7405828 20.7734164,11.2020693 20.7734164,9.26963682 L20.7734164,3.32369088 C20.7213894,1.53990709 19.1828758,0.00139358108 17.3024704,0.00139358108 Z" id="形状"></path>
                        <polygon id="路径" points="8.38355152 6.1480152 12.345038 6.1480152 12.345038 6.64598818 8.38355152 6.64598818"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </svg><span>&nbsp;本网站由阿里云提供云计算及安全服务</span>
          </a>
        </div>
        <div class="ipv-powerby margin-bottom12">
          <div class="ipv-area inline-style common-style bottom-words">
            本网站支持<span class="ipv6-box">IPv6</span>
          </div>
          <div class="divider inline-style common-style bottom-words"></div>
          <div class="powerby-area inline-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
              <span class="bottom-words" style="display: block;"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="page-bottom--area style3" id="b_style3" style="display:none">
      <div class="bottom-content">
        <div class="ga-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="#" class="bottom-words ga_link">
            <img src="static/Designer/Content/images/ga_icon.png" alt="" /><span class="ga-words"></span>
          </a>
        </div>
        <div class="copyright-area common-style bottom-words margin-bottom12 bottom-words"></div>
        <div class="icp-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="https://beian.miit.gov.cn" class="bottom-words">
            <span class="icp-words"></span>
          </a>
        </div>
        <div class="ali-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="#" class="bottom-words">
            <?xml version="1.0" encoding="UTF-8" ?>
            <svg width="55px" height="13px" viewBox="0 0 55 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="备案信息优化" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="底部样式4-没有ipv6" transform="translate(-562.000000, -366.000000)" fill="#989898" fill-rule="nonzero">
                  <g id="编组-2备份" transform="translate(57.000000, 301.000000)">
                    <g id="编组-5" transform="translate(505.000000, 49.000000)">
                      <g id="编组" transform="translate(0.000000, 16.000000)">
                        <path d="M30.4355785,11.3507179 C32.2713894,11.2986909 32.9105785,10.0128801 32.9105785,8.9203125 L32.9105785,2.23112331 L33.1558488,2.23112331 L33.4011191,1.2426098 L28.0051731,1.2426098 L28.2504434,2.23112331 L31.9146326,2.23112331 L31.9146326,8.82369088 C31.9146326,9.7676098 31.2234164,10.406799 30.1828758,10.406799 L30.4355785,11.3507179 L30.4355785,11.3507179 Z" id="路径"></path>
                        <path d="M30.6288218,9.06896115 C30.8740921,8.82369088 30.9781461,8.47436655 30.9781461,7.87977196 L30.9781461,3.1230152 L28.0572002,3.1230152 L28.0572002,9.41828547 L29.6923353,9.41828547 C30.0862542,9.41828547 30.4355785,9.32166385 30.6288218,9.06896115 Z M29.0977407,8.32571791 L29.0977407,4.11896115 L29.9896326,4.11896115 L29.9896326,7.78315034 C29.9896326,8.17706926 29.840984,8.32571791 29.4916596,8.32571791 L29.0977407,8.32571791 Z M23.9396326,1.14598818 L23.9396326,11.3061233 L24.9281461,11.3061233 L24.9281461,2.23855574 L26.1693623,2.23855574 L25.4261191,5.41220439 C25.7234164,5.65747466 26.265984,6.30409628 26.265984,7.44125845 C26.265984,8.57842061 25.6193623,8.97977196 25.4261191,9.07639358 L25.4261191,10.1169341 C25.9686867,10.0649071 27.3585515,9.32166385 27.3585515,7.49328547 C27.3585515,6.40071791 26.9646326,5.61288007 26.6153083,5.11490709 L27.5072002,1.15342061 C27.5072002,1.14598818 23.9396326,1.14598818 23.9396326,1.14598818 L23.9396326,1.14598818 Z M35.340984,10.3101774 L35.1403083,11.2986909 L44.1558488,11.2986909 L43.9105785,10.3101774 L40.1423353,10.3101774 L40.1423353,9.02436655 L43.6132812,9.02436655 L43.368011,8.03585304 L40.1497677,8.03585304 L40.1497677,6.7426098 L42.4761191,6.7426098 C43.5686867,6.7426098 44.1632813,6.20004223 44.1632813,5.05544764 L44.1632813,1.09396115 L35.1403083,1.09396115 L35.1403083,6.69058277 L39.1017948,6.69058277 L39.1017948,7.93179899 L35.8835515,7.93179899 L35.6382812,8.9203125 L39.1092272,8.9203125 L39.1092272,10.2581503 L35.340984,10.2581503 L35.340984,10.3101774 Z M40.1423353,4.51288007 L42.5207137,4.51288007 L42.2754434,3.52436655 L40.1423353,3.52436655 L40.1423353,2.23112331 L43.1153083,2.23112331 L43.1153083,5.05544764 C43.1153083,5.55342061 42.9146326,5.74666385 42.5207137,5.74666385 L40.1423353,5.74666385 L40.1423353,4.51288007 Z M36.2328758,5.75409628 L36.2328758,2.23112331 L39.1538218,2.23112331 L39.1538218,3.47233953 L37.0207137,3.47233953 L36.7754434,4.46085304 L39.1538218,4.46085304 L39.1538218,5.74666385 L36.2328758,5.74666385 L36.2328758,5.75409628 Z M53.922065,1.14598818 L46.8389569,1.14598818 L46.5862542,2.23112331 L54.2193623,2.23112331 L53.922065,1.14598818 Z M46.4376056,11.2540963 L46.3855785,11.3507179 L53.320038,11.3507179 C53.7139569,11.3507179 54.0112542,11.2540963 54.2119299,11.0013936 C54.4126056,10.7040963 54.3605785,10.354772 54.2639569,10.1615287 C54.1673353,9.66355574 53.765984,7.87977196 53.6693623,7.63450169 L53.6693623,7.58247466 L52.6288218,7.58247466 L52.6808488,7.67909628 C52.7328758,7.92436655 53.1788218,9.76017736 53.2754434,10.354772 L47.7234164,10.354772 C47.9686867,9.16558277 48.4146326,7.18112331 48.6673353,6.1926098 L54.9105785,6.1926098 L54.6653083,5.20409628 L46.1403083,5.20409628 L45.895038,6.1926098 L47.6267948,6.1926098 C47.4261191,7.09193412 46.7869299,9.61896115 46.4376056,11.2540963 L46.4376056,11.2540963 Z M3.72341639,9.86423142 C3.27747044,9.7676098 2.98017314,9.41828547 2.98017314,8.9203125 L2.98017314,3.91828547 C3.03220017,3.47233953 3.32949747,3.1230152 3.72341639,3.02639358 L8.38355152,2.03788007 L8.88152449,0.0534206081 L3.47814611,0.0534206081 C1.54571368,0.00139358108 0.00720016892,1.53990709 0.00720016892,3.4203125 L0.00720016892,9.36625845 C0.00720016892,11.2466639 1.59030828,12.8372044 3.47814611,12.8372044 L8.88152449,12.8372044 L8.38355152,10.8527449 L3.72341639,9.86423142 Z M17.3024704,0.00139358108 L11.8544975,0.00139358108 L12.3524704,1.98585304 L17.0051731,2.97436655 C17.4511191,3.07098818 17.7484164,3.4203125 17.7484164,3.86625845 L17.7484164,8.86828547 C17.6963894,9.31423142 17.3990921,9.66355574 17.0051731,9.76017736 L12.345038,10.7561233 L11.847065,12.7405828 L17.3024704,12.7405828 C19.1828758,12.7405828 20.7734164,11.2020693 20.7734164,9.26963682 L20.7734164,3.32369088 C20.7213894,1.53990709 19.1828758,0.00139358108 17.3024704,0.00139358108 Z" id="形状"></path>
                        <polygon id="路径" points="8.38355152 6.1480152 12.345038 6.1480152 12.345038 6.64598818 8.38355152 6.64598818"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </svg><span>&nbsp;本网站由阿里云提供云计算及安全服务</span>
          </a>
        </div>
        <div class="ipv-powerby margin-bottom12">
          <div class="ipv-area inline-style common-style bottom-words">
            本网站支持<span class="ipv6-box">IPv6</span>
          </div>
          <div class="divider inline-style common-style bottom-words"></div>
          <div class="powerby-area inline-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
              <span class="bottom-words" style="display: block;"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="page-bottom--area style4" id="b_style4" style="display:none">
      <div class="bottom-content">
        <div class="copyright-area common-style bottom-words margin-bottom12 bottom-words"></div>
        <div class="icp-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="https://beian.miit.gov.cn" class="bottom-words">
            <span class="icp-words"></span>
          </a>
        </div>
        <div class="ga-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="#" class="bottom-words ga_link">
            <img src="static/Designer/Content/images/ga_icon.png" alt="" /><span class="ga-words"></span>
          </a>
        </div>
        <div class="ali-area common-style bottom-words margin-bottom12">
          <a target="_blank" href="#" class="bottom-words">
            <?xml version="1.0" encoding="UTF-8" ?>
            <svg width="55px" height="13px" viewBox="0 0 55 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="备案信息优化" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="底部样式4-没有ipv6" transform="translate(-562.000000, -366.000000)" fill="#989898" fill-rule="nonzero">
                  <g id="编组-2备份" transform="translate(57.000000, 301.000000)">
                    <g id="编组-5" transform="translate(505.000000, 49.000000)">
                      <g id="编组" transform="translate(0.000000, 16.000000)">
                        <path d="M30.4355785,11.3507179 C32.2713894,11.2986909 32.9105785,10.0128801 32.9105785,8.9203125 L32.9105785,2.23112331 L33.1558488,2.23112331 L33.4011191,1.2426098 L28.0051731,1.2426098 L28.2504434,2.23112331 L31.9146326,2.23112331 L31.9146326,8.82369088 C31.9146326,9.7676098 31.2234164,10.406799 30.1828758,10.406799 L30.4355785,11.3507179 L30.4355785,11.3507179 Z" id="路径"></path>
                        <path d="M30.6288218,9.06896115 C30.8740921,8.82369088 30.9781461,8.47436655 30.9781461,7.87977196 L30.9781461,3.1230152 L28.0572002,3.1230152 L28.0572002,9.41828547 L29.6923353,9.41828547 C30.0862542,9.41828547 30.4355785,9.32166385 30.6288218,9.06896115 Z M29.0977407,8.32571791 L29.0977407,4.11896115 L29.9896326,4.11896115 L29.9896326,7.78315034 C29.9896326,8.17706926 29.840984,8.32571791 29.4916596,8.32571791 L29.0977407,8.32571791 Z M23.9396326,1.14598818 L23.9396326,11.3061233 L24.9281461,11.3061233 L24.9281461,2.23855574 L26.1693623,2.23855574 L25.4261191,5.41220439 C25.7234164,5.65747466 26.265984,6.30409628 26.265984,7.44125845 C26.265984,8.57842061 25.6193623,8.97977196 25.4261191,9.07639358 L25.4261191,10.1169341 C25.9686867,10.0649071 27.3585515,9.32166385 27.3585515,7.49328547 C27.3585515,6.40071791 26.9646326,5.61288007 26.6153083,5.11490709 L27.5072002,1.15342061 C27.5072002,1.14598818 23.9396326,1.14598818 23.9396326,1.14598818 L23.9396326,1.14598818 Z M35.340984,10.3101774 L35.1403083,11.2986909 L44.1558488,11.2986909 L43.9105785,10.3101774 L40.1423353,10.3101774 L40.1423353,9.02436655 L43.6132812,9.02436655 L43.368011,8.03585304 L40.1497677,8.03585304 L40.1497677,6.7426098 L42.4761191,6.7426098 C43.5686867,6.7426098 44.1632813,6.20004223 44.1632813,5.05544764 L44.1632813,1.09396115 L35.1403083,1.09396115 L35.1403083,6.69058277 L39.1017948,6.69058277 L39.1017948,7.93179899 L35.8835515,7.93179899 L35.6382812,8.9203125 L39.1092272,8.9203125 L39.1092272,10.2581503 L35.340984,10.2581503 L35.340984,10.3101774 Z M40.1423353,4.51288007 L42.5207137,4.51288007 L42.2754434,3.52436655 L40.1423353,3.52436655 L40.1423353,2.23112331 L43.1153083,2.23112331 L43.1153083,5.05544764 C43.1153083,5.55342061 42.9146326,5.74666385 42.5207137,5.74666385 L40.1423353,5.74666385 L40.1423353,4.51288007 Z M36.2328758,5.75409628 L36.2328758,2.23112331 L39.1538218,2.23112331 L39.1538218,3.47233953 L37.0207137,3.47233953 L36.7754434,4.46085304 L39.1538218,4.46085304 L39.1538218,5.74666385 L36.2328758,5.74666385 L36.2328758,5.75409628 Z M53.922065,1.14598818 L46.8389569,1.14598818 L46.5862542,2.23112331 L54.2193623,2.23112331 L53.922065,1.14598818 Z M46.4376056,11.2540963 L46.3855785,11.3507179 L53.320038,11.3507179 C53.7139569,11.3507179 54.0112542,11.2540963 54.2119299,11.0013936 C54.4126056,10.7040963 54.3605785,10.354772 54.2639569,10.1615287 C54.1673353,9.66355574 53.765984,7.87977196 53.6693623,7.63450169 L53.6693623,7.58247466 L52.6288218,7.58247466 L52.6808488,7.67909628 C52.7328758,7.92436655 53.1788218,9.76017736 53.2754434,10.354772 L47.7234164,10.354772 C47.9686867,9.16558277 48.4146326,7.18112331 48.6673353,6.1926098 L54.9105785,6.1926098 L54.6653083,5.20409628 L46.1403083,5.20409628 L45.895038,6.1926098 L47.6267948,6.1926098 C47.4261191,7.09193412 46.7869299,9.61896115 46.4376056,11.2540963 L46.4376056,11.2540963 Z M3.72341639,9.86423142 C3.27747044,9.7676098 2.98017314,9.41828547 2.98017314,8.9203125 L2.98017314,3.91828547 C3.03220017,3.47233953 3.32949747,3.1230152 3.72341639,3.02639358 L8.38355152,2.03788007 L8.88152449,0.0534206081 L3.47814611,0.0534206081 C1.54571368,0.00139358108 0.00720016892,1.53990709 0.00720016892,3.4203125 L0.00720016892,9.36625845 C0.00720016892,11.2466639 1.59030828,12.8372044 3.47814611,12.8372044 L8.88152449,12.8372044 L8.38355152,10.8527449 L3.72341639,9.86423142 Z M17.3024704,0.00139358108 L11.8544975,0.00139358108 L12.3524704,1.98585304 L17.0051731,2.97436655 C17.4511191,3.07098818 17.7484164,3.4203125 17.7484164,3.86625845 L17.7484164,8.86828547 C17.6963894,9.31423142 17.3990921,9.66355574 17.0051731,9.76017736 L12.345038,10.7561233 L11.847065,12.7405828 L17.3024704,12.7405828 C19.1828758,12.7405828 20.7734164,11.2020693 20.7734164,9.26963682 L20.7734164,3.32369088 C20.7213894,1.53990709 19.1828758,0.00139358108 17.3024704,0.00139358108 Z" id="形状"></path>
                        <polygon id="路径" points="8.38355152 6.1480152 12.345038 6.1480152 12.345038 6.64598818 8.38355152 6.64598818"></polygon>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </svg><span>&nbsp;本网站由阿里云提供云计算及安全服务</span>
          </a>
        </div>
        <div class="ipv-powerby margin-bottom12">
          <div class="ipv-area inline-style common-style bottom-words">
            本网站支持<span class="ipv6-box">IPv6</span>
          </div>
          <div class="divider inline-style common-style bottom-words"></div>
          <div class="powerby-area inline-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
              <span class="bottom-words" style="display: block;"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(function() {
    if ("False" == "True") {
      $('#antChainWrap').fadeIn(500);

      $('#closeAntChain').off('click').on('click', function() {
        $('#antChainWrap').fadeOut('slow', function() {});
      });
      $('#showQrcodeBtn').off('click').on('click', function() {
        $('#qrCodeWrappper').toggleClass('qrCodeShow');
      });
    }
  })
  </script>
  <script type="text/javascript">
  $(function() {
    $("img.lazyload").lazyload({
      skip_invisible: false,
      effect: "fadeIn",
      failure_limit: 15,
      threshold: 100
    });
    $('.animated').smanimate();
    $('.smartRecpt').smrecompute();
    xwezhan.initWz();

    // 隐藏备案信息展示
    $('div[ctype=companyinfo]').find('.company-info-title').each(function(i, it) {
      if ($(it).text().indexOf('备案') > -1 || $(it).next().text().toLowerCase().indexOf('icp') > -1) {
        $(it).parent().parent().css('display', 'none');
      }
    })
    var info = {
      icp: "京ICP备19043914号-2",
      ga: '',
      copyright: '新意象音频' != "" ? '版权所有© ' + '新意象音频' : "",
      color: '#989898',
      background: '#ffffff',
      powerby: 'Powered by ' + 'CloudDream',
      ipv6: 'True' == 'True',
      ali: "False" == "True",
      style: 'style2',
      fontsize: 12
    }

    _initData();
    _initShow();

    function _initData() {
      if (info.ga != "") {
        var linkUrl = "http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=" + info.ga.substring(5, 19);
        $('.ga_link').attr('href', linkUrl);
      }
      $('.icp-area .icp-words').text(info.icp)
      $('.ga-area .ga-words').text(info.ga)
      $('.copyright-area').text(info.copyright)
      $('.powerby-area').find('span').text(info.powerby)
      $('.page-bottom--area').css({
        background: info.background
      })
      $('.bottom-words').css({
        color: info.color
      })
      $('.bottom-border').css({
        background: info.color
      })
      $('.ipv6-box').css({
        'border-color': info.color
      })
      $('.ali-area').find('svg g').css({
        'fill': info.color,
        height: info.fontsize,
        width: parseInt(info.fontsize * 55 / 13 + 'px')
      })

      $('.ga-area').find('img').css({
        width: info.fontszie + 'px'
      })
      $('.ipv-area').css({
        'line-height': info.fontsize + 'px'
      })
      $('.ali-area').find('svg g').css({
        'fill': info.color
      })
      $('.divider').css({
        height: info.fontsize + 'px'
      })
      $('.ali-area').find('svg').css({
        height: info.fontsize,
        width: parseInt(info.fontsize * 55 / 13 + 'px')
      })
      $('.ga-area').find('img').css({
        width: info.fontsize + 'px',
        height: info.fontsize + 'px'
      })
      $('.page-bottom--area').find('.common-style').css({
        fontSize: info.fontsize + 'px'
      })
    }

    function _initShow() {
      if ("True" == "False") {
        $('.top-area').css('display', 'none');
      }
      if (info.style === 'style1') {
        $('#b_style1').css('display', 'block');
        if (!info.ga) {
          $('.ga-area').hide()
          $('.ga-area')
            .prev('.divider')
            .hide()
        }
        if (!info.icp) {
          $('.icp-area').hide()
          $('.icp-area')
            .next('.divider')
            .hide()
        }
      }
      if (info.style === 'style2') {
        $('#b_style2').css('display', 'block');
        if (!info.ga) {
          $('.ga-area').hide()
          $('.ga-area')
            .next('.divider')
            .hide()
        }
        if (!info.icp) {
          $('.icp-area').hide()
          $('.icp-area')
            .prev('.divider')
            .hide()
        }
      }
      if (info.style === 'style3') {
        $('#b_style3').css('display', 'block');
        if (!info.ga) {
          $('.ga-area').hide()
          $('.ga-area')
            .next('.divider')
            .hide()
        }
        if (!info.copyright) {
          $('.copyright-area').hide()
          $('.copyright-area')
            .prev('.divider')
            .hide()
        }
        if (!info.icp) {
          $('.icp-area').hide()
          $('.icp-area')
            .prev('.divider')
            .hide()
          $('.copyright-area').hide()
          $('.copyright-area')
            .prev('.divider')
            .hide()
        }
        if (!info.ga && !info.copyright) {
          $('.copyright-area').hide()
          $('.copyright-area')
            .next('.divider')
            .hide()
        }
      }
      if (info.style === 'style4') {
        $('#b_style4').css('display', 'block');
        if (!info.icp) {
          $('.icp-area').hide()
          $('.icp-area')
            .prev('.divider')
            .hide()
          $('.copyright-area').hide()
          $('.copyright-area')
            .next('.divider')
            .hide()
        }
        if (!info.copyright) {
          $('.copyright-area').hide()
          $('.copyright-area')
            .next('.divider')
            .hide()
        }
        if (!info.ga) {
          $('.ga-area').hide()
          $('.ga-area')
            .prev('.divider')
            .hide()
        }
        if (!info.icp && !info.copyright) {
          $('.icp-area').hide()
          $('.icp-area')
            .next('.divider')
            .hide()
        }
      }
      if ("False".toLowerCase() == "false") {
        $('.ali-area').hide()
        $('.ali-area')
          .next('.divider')
          .hide()
      }
      if ("True".toLowerCase() == "false") {
        $('.ipv-area').hide()
        $('.ipv-area')
          .next('.divider')
          .hide()
      }
      if ("False".toLowerCase() == "false") {
        $('.powerby-area').hide()
        $('.powerby-area')
          .prev('.divider')
          .hide()
      }
      if ("False".toLowerCase() == "false" && "True".toLowerCase() == "false") {
        $('.ipv-area').hide()
        $('.ipv-area')
          .next('.divider')
          .hide()
      }
      if (!info.ga && !info.icp) {
        $('.top-area').css({
          'margin-bottom': 0
        })
      }
      if (!info.ga && !info.icp && "False".toLowerCase() == "false" && "True".toLowerCase() == "false" && "False".toLowerCase() == "false") {
        $('#all-icp-bottom').css({
          'display': 'none'
        })
      }
    }
  });
  </script>
  <script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?c96e59d4fe2511ef2081cf9f9ab0d86a";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();
  </script>
  <div id="systemDialogLayer" style="position:relative;z-index:999999"></div>
</body>

</html>