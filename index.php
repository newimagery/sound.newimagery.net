<!DOCTYPE html>
<html class="smart-design-mode">
<head>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="新意象音频是一家专注于音频的公司，有成熟的团队和优秀的作品。" />
  <meta name="keywords" content="新意象音频" />
  <meta name="renderer" content="webkit" />
  <meta name="applicable-device" content="pc" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <title>新意象音频</title>
  <link rel="icon" href="static/sitefiles10185/10185258/意象音频 2 s.png" />
  <link rel="shortcut icon" href="static/sitefiles10185/10185258/意象音频 2 s.png" />
  <link rel="bookmark" href="static/sitefiles10185/10185258/意象音频 2 s.png" />
  <link href="static/Designer/Content/bottom/pcstyle.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <link href="static/Content/public/css/reset.css?_version=20211217144519" rel="stylesheet" type="text/css" />
  <link href="static/static/iconfont/1.0.0/iconfont.css?_version=20210414103602" rel="stylesheet" type="text/css" />
  <link href="static/static/iconfont/companyinfo/iconfont.css?_version=20210830113640" rel="stylesheet" type="text/css" />
  <link href="static/Designer/Content/base/css/pager.css?_version=20210917111955" rel="stylesheet" type="text/css" />
  <link href="static/Designer/Content/base/css/hover-effects.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <link href="static/Designer/Content/base/css/antChain.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <link href="static/prevsf/10185/10185258/css/32_Pc_zh-CN.css" rel="stylesheet" />
  <script src="static/Scripts/JQuery/jquery-1.10.2.min.js?_version=20210414103602" type="text/javascript"></script>
  <script src="static/Designer/Scripts/jquery.lazyload.min.js?_version=20210414103601" type="text/javascript"></script>
  <script src="static/Designer/Scripts/smart.animation.min.js?_version=20211217144519" type="text/javascript"></script>
  <script src="static/Designer/Content/Designer-panel/js/kino.razor.min.js?_version=20210414103601" type="text/javascript"></script>
  <script src="static/Scripts/common.min.js?v=20200318&_version=20220120174243" type="text/javascript"></script>
  <script src="static/Administration/Scripts/admin.validator.min.js?_version=20210414103601" type="text/javascript"></script>
  <script src="static/Administration/Content/plugins/cookie/jquery.cookie.js?_version=20210414103601" type="text/javascript"></script>
  <script type='text/javascript' id='jssor-all' src='static/Designer/Scripts/jssor.slider-22.2.16-all.min.js?_version=20210414103601'></script>
  <script type='text/javascript' id='slideshown' src='static/Designer/Scripts/slideshow.js?_version=20210414103601'></script>
  <script type='text/javascript' id='jqueryzoom' src='static/Designer/Scripts/jquery.jqueryzoom.js?_version=20210414103601'></script>
  <script type='text/javascript' id='jplaceholder' src='static/Content/public/plugins/placeholder/jplaceholder.js'></script>
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
</head>

<body id="smart-body" area="main">
  <input type="hidden" id="pageinfo" value="32" data-type="1" data-device="Pc" data-entityid="32" />
  <input id="txtDeviceSwitchEnabled" value="show" type="hidden" />
  <script type="text/javascript">
  $(function() {

    if ("" == "True") {
      $('#mainContentWrapper').addClass('translate');
      $('#antChainWrap').fadeIn(500);

      $('#closeAntChain').off('click').on('click', function() {
        $('#antChainWrap').fadeOut('slow', function() {
          $('#mainContentWrapper').removeClass('translate');
        });
        $(document).off("scroll", isWatchScroll);

      });
      $('#showQrcodeBtn').off('click').on('click', function() {
        $('#qrCodeWrappper').toggleClass('qrCodeShow');
      });
      $(document).scroll(isWatchScroll)
    }


    function isWatchScroll() {
      var scroH = $(document).scrollTop();
      if (scroH >= 80) {
        $('#mainContentWrapper').removeClass('translate');
      } else {
        $('#mainContentWrapper').addClass('translate');
      }
    }


  })
  </script>
  <link href="static/Designer/Content/Language/Chinese/css/view.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <input type="hidden" id="secUrl" />
  <script type="text/javascript">
  function initialDeviceSwitch() {
    try {

      $(".m-deviceSwitch").find("li[data-device=Pc]").removeClass("active").find("a").removeClass("z-current");
      $(".m-deviceSwitch").find("li[data-device=Mobile]").removeClass("active").find("a").removeClass("z-current");

      var pageinfo = $("#pageinfo");
      var l = window.location;
      if (pageinfo.length == 0 && window.frames.length > 0) {
        pageinfo = $(window.frames[0].document).find("#pageinfo");
        l = window.frames[0].document.location;


      }
      $(".m-deviceSwitch").show();
      if (pageinfo.length == 0) {
        $(".m-deviceSwitch").hide();
        return;
      }
      $("#secUrl").attr("data-host", l.host).attr("data-pathname", l.pathname).attr("data-search", l.search).attr("data-hash", l.hash);
      var pagedevice = pageinfo.attr("data-device");
      $(".m-deviceSwitch").find("li[data-device=" + pagedevice + "]").addClass("active").find("a").addClass("z-current");
      $(".m-deviceSwitch").find("li").not(".active").click(function() {
        var secUrl = $("#secUrl");
        var pathname = secUrl.attr("data-pathname");
        var search = secUrl.attr("data-search");
        var hash = secUrl.attr("data-hash");
        var npagedevice = $(this).attr("data-device");
        var flag = "yibu_IsMobileDevice=true";
        var mobileUrl = "";
        if (npagedevice == "Pc") {
          mobileUrl = mobileUrl + pathname + search.replace("deviceModel=mobile", "deviceModel=pc") + hash;
          mobileUrl = mobileUrl.replace("&" + flag, "").replace("?" + flag, "");
        } else if (npagedevice == "Mobile") {
          var toUrl = pathname + search.replace("deviceModel=pc", "deviceModel=mobile") + hash;
          toUrl = toUrl.replace("&" + flag, "").replace("?" + flag, "");
          //if (toUrl.indexOf("?") === -1) {
          //    toUrl += "?" + flag;
          //}
          //else {
          //    toUrl += "&" + flag;
          //}

          mobileUrl = mobileUrl + "/Runtime/MobileContainer?url=" + encodeURIComponent(toUrl) + "&" + flag;
        }
        $.ajax({
          cache: false,
          url: "/Common/ChangeRunTimeDeviceMode",
          type: "post",
          data: {
            type: "Pc"
          },
          dataType: "json",
          success: function(result) {
            if (result.IsSuccess) {
              window.top.location.href = mobileUrl;
            }
          },
          error: function() {}
        });
      });
    } catch (e) {
      $(".m-deviceSwitch").find("li[data-device=Mobile]").addClass("active").find("a").addClass("z-current");
    }
  }
  $(function() {
    if ($("#prevMainFrame").length > 0) {
      $("#prevMainFrame").load(initialDeviceSwitch);
    } else {
      initialDeviceSwitch();
    }
  });
  </script>
  <div id="mainContentWrapper" style="background-color: transparent; background-image: none; background-repeat: no-repeat;background-position:0 0; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;
     position: relative; width: 100%;min-width:1200px;background-size: auto;" bgScroll="none">
    <div style="background-color: transparent; background-image: none; background-repeat: no-repeat;background-position:0 0; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;
         position: relative; width: 100%;min-width:1200px;background-size: auto;" bgScroll="none">
     <?php include('header.php'); ?>
    </div>
    <div class="main-layout-wrapper" id="smv_AreaMainWrapper" style="background-color: transparent; background-image: none;
         background-repeat: no-repeat;background-position:0 0; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;background-size: auto;" bgScroll="none">
      <div class="main-layout" id="tem-main-layout11" style="width: 100%;">
        <div style="display: none">
        </div>
        <div class="" id="smv_MainContent" rel="mainContentWrapper" style="width: 100%; min-height: 300px; position: relative; ">
          <div class="smvWrapper" style="min-width:1200px;  position: relative; background-color: transparent; background-image: none; background-repeat: no-repeat; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;background-position:0 0;background-size:auto;" bgScroll="none">
            <div class="smvContainer" id="smv_Main" cpid="32" style="min-height:400px;width:1200px;height:2756px;  position: relative; ">
              <div id="smv_con_16_53" ctype="slideset" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="True" pvid="" tareaId="" re-direction="y" daxis="Y" isdeletable="True" style="height: 1003px; width: 1200px; left: 0px; top: -105px;z-index:1;">
                <div class="yibuFrameContent con_16_53  slideset_Style1  " style="overflow:visible;;">
                  <!--w-slide-->
                  <div id="lider_smv_con_16_53_wrapper">
                    <div class="w-slide" id="slider_smv_con_16_53">
                      <div class="w-slide-inner" data-u="slides">
                        <div class="content-box" data-area="Area0">
                          <div id="smc_Area0" cid="con_16_53" class="smAreaC slideset_AreaC">
                            <div id="smv_con_17_50" ctype="text" smanim='{"delay":0.0,"duration":1.0,"direction":"Left","animationName":"slideIn","infinite":"1"}' class="esmartMargin smartAbs animated" cpid="32" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="con_16_53" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 88px; width: 1010px; left: 110px; top: 422px;z-index:4;">
                              <div class="yibuFrameContent con_17_50  text_Style1  " style="overflow:hidden;;">
                                <div id='txt_con_17_50' style="height: 100%;">
                                  <div class="editableContent" id="txtc_con_17_50" style="height: 100%; word-wrap:break-word;">
                                    <p style="text-align:center"><strong><span style="font-family:Arial,Helvetica,sans-serif; font-size:48px">专注于优秀的音频产品</span></strong></p>
                                  </div>
                                </div>
                                <script>
                                var tables = $(' #smv_con_17_50').find('table')
                                for (var i = 0; i < tables.length; i++) {
                                  var tab = tables[i]
                                  var borderWidth = $(tab).attr('border')
                                  if (borderWidth <= 0 || !borderWidth) {
                                    console.log(tab)
                                    $(tab).addClass('hidden-border')
                                    $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                                    $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                                    $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                                    $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                                    $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                                    $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                                  }
                                }
                                </script>
                              </div>
                            </div>
                            <div id="smv_con_21_50" ctype="line" smanim='{"delay":0.75,"duration":0.75,"direction":"Left","animationName":"slideIn","infinite":"1"}' class="esmartMargin smartAbs animated" cpid="32" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="con_16_53" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 143px; left: 417px; top: 566px;z-index:8;">
                              <div class="yibuFrameContent con_21_50  line_Style1  " style="overflow:visible;;">
                                <!-- w-line -->
                                <div style="position:relative; height:100%">
                                  <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                                </div>
                              </div>
                            </div>
                            <div id="smv_con_22_50" ctype="text" smanim='{"delay":0.75,"duration":0.75,"direction":"Left","animationName":"slideIn","infinite":"1"}' class="esmartMargin smartAbs animated" cpid="32" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="con_16_53" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 96px; width: 47px; left: 578px; top: 522px;z-index:7;">
                              <div class="yibuFrameContent con_22_50  text_Style1  " style="overflow:hidden;;">
                                <div id='txt_con_22_50' style="height: 100%;">
                                  <div class="editableContent" id="txtc_con_22_50" style="height: 100%; word-wrap:break-word;">
                                    <p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:90px"><span style="font-family:Georgia,serif"><span style="line-height:24px">&middot;</span></span>
                                        </span>
                                      </span>
                                    </p>
                                  </div>
                                </div>
                                <script>
                                var tables = $(' #smv_con_22_50').find('table')
                                for (var i = 0; i < tables.length; i++) {
                                  var tab = tables[i]
                                  var borderWidth = $(tab).attr('border')
                                  if (borderWidth <= 0 || !borderWidth) {
                                    console.log(tab)
                                    $(tab).addClass('hidden-border')
                                    $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                                    $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                                    $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                                    $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                                    $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                                    $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                                  }
                                }
                                </script>
                              </div>
                            </div>
                            <div id="smv_con_23_50" ctype="line" smanim='{"delay":0.75,"duration":0.75,"direction":"Left","animationName":"slideIn","infinite":"1"}' class="esmartMargin smartAbs animated" cpid="32" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="con_16_53" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 143px; left: 642px; top: 570px;z-index:8;">
                              <div class="yibuFrameContent con_23_50  line_Style1  " style="overflow:visible;;">
                                <!-- w-line -->
                                <div style="position:relative; height:100%">
                                  <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="content-box-inner" style="background-image:url(static/contents/sitefiles2001/10007281/images/-33833.jpg);background-position:50% 0;background-repeat:cover;background-size:cover;background-color:#ffffff;opacity:1"></div>
                        </div>
                        <div class="content-box" data-area="Area1">
                          <div id="smc_Area1" cid="con_16_53" class="smAreaC slideset_AreaC">
                            <div id="smv_con_120_7" ctype="text" smanim='{"delay":0.0,"duration":1.0,"direction":"Left","animationName":"slideIn","infinite":"1"}' class="esmartMargin smartAbs animated" cpid="32" cstyle="Style1" ccolor="Item0" areaId="Area1" isContainer="False" pvid="con_16_53" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 88px; width: 1010px; left: 65px; top: 319px;z-index:4;">
                              <div class="yibuFrameContent con_120_7  text_Style1  " style="overflow:hidden;;">
                                <div id='txt_con_120_7' style="height: 100%;">
                                  <div class="editableContent" id="txtc_con_120_7" style="height: 100%; word-wrap:break-word;">
                                    <p style="text-align:center"><strong><span style="font-family:Arial,Helvetica,sans-serif; font-size:48px">致力于优秀的听觉体验</span></strong></p>
                                  </div>
                                </div>
                                <script>
                                var tables = $(' #smv_con_120_7').find('table')
                                for (var i = 0; i < tables.length; i++) {
                                  var tab = tables[i]
                                  var borderWidth = $(tab).attr('border')
                                  if (borderWidth <= 0 || !borderWidth) {
                                    console.log(tab)
                                    $(tab).addClass('hidden-border')
                                    $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                                    $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                                    $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                                    $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                                    $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                                    $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                                  }
                                }
                                </script>
                              </div>
                            </div>
                            <div id="smv_con_124_17" ctype="line" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="Area1" isContainer="False" pvid="con_16_53" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 173px; left: 240px; top: 598px;z-index:9;">
                              <div class="yibuFrameContent con_124_17  line_Style1  " style="overflow:visible;;">
                                <!-- w-line -->
                                <div style="position:relative; height:100%">
                                  <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                                </div>
                              </div>
                            </div>
                            <div id="smv_con_122_44" ctype="line" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="Area1" isContainer="False" pvid="con_16_53" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 175px; left: 623px; top: 600px;z-index:7;">
                              <div class="yibuFrameContent con_122_44  line_Style1  " style="overflow:visible;;">
                                <!-- w-line -->
                                <div style="position:relative; height:100%">
                                  <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="content-box-inner" style="background-image:url(static/contents/sitefiles2001/10007281/images/-33832.jpg);background-position:50% 50%;background-repeat:cover;background-size:cover;background-color:#ffffff;opacity:1"></div>
                        </div>
                      </div>
                      <!-- Bullet Navigator -->
                      <div data-u="navigator" class="w-slide-btn-box  f-hide " data-autocenter="1">
                        <!-- bullet navigator item prototype -->
                        <div class="w-slide-btn" data-u="prototype"></div>
                      </div>
                      <!-- 1Arrow Navigator -->
                      <span data-u="arrowleft" class="w-slide-arrowl  slideArrow  " data-autocenter="2" id="left_con_16_53">
                        <i class="w-itemicon mw-iconfont">&#xb133;</i>
                      </span>
                      <span data-u="arrowright" class="w-slide-arrowr slideArrow " data-autocenter="2" id="right_con_16_53">
                        <i class="w-itemicon mw-iconfont">&#xb132;</i>
                      </span>
                    </div>
                  </div>
                  <!--/w-slide-->
                  <script type="text/javascript">
                  var jssorCache_con_16_53 = {
                    CtrlId: "con_16_53",
                    SliderId: "slider_smv_con_16_53",
                    Html: $("#slider_smv_con_16_53")[0].outerHTML,
                  };
                  con_16_53_page = 1;
                  con_16_53_sliderset3_init = function() {
                    var jssor_1_options_con_16_53 = {
                      $AutoPlay: "False" == "True" ? false : "on" == "on", //自动播放
                      $PlayOrientation: 1, //2为向上滑，1为向左滑
                      $Loop: 1, //循环
                      $Idle: parseInt("3000"), //切换间隔
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
                    var slide = new $JssorSlider$("slider_smv_con_16_53", jssor_1_options_con_16_53);
                    if (typeof(LayoutConverter) !== "undefined") {
                      jssorCache_con_16_53.JssorOpt = jssor_1_options_con_16_53,
                        jssorCache_con_16_53.Jssor = slide;
                    }
                    $('#smv_con_16_53').data('jssor_slide', slide);

                    //resize游览器的时候触发自动缩放幻灯秀

                    //幻灯栏目自动或手动切换时触发的事件
                    slide.$On($JssorSlider$.$EVT_PARK, function(slideIndex, fromIndex) {
                      var $slideWrapper = $("#slider_smv_con_16_53 .w-slide-inner:last");
                      var $fromSlide = $slideWrapper.find(".content-box:eq(" + fromIndex + ")");
                      var $curSlide = $slideWrapper.find(".content-box:eq(" + slideIndex + ")");
                      var $nextSlide = $slideWrapper.find(".content-box:eq(" + (slideIndex + 1) + ")");
                      $("#smv_con_16_53").attr("selectArea", $curSlide.attr("data-area"));
                      $fromSlide.find(".animated").smanimate("stop");
                      $curSlide.find(".animated").smanimate("stop");
                      $nextSlide.find(".animated").smanimate("stop");
                      $("#switch_con_16_53 .page").html(slideIndex + 1);
                      $curSlide.find(".animated").smanimate("replay");
                      return false;
                    });
                    //切换栏点击事件
                    $("#switch_con_16_53 .left").unbind("click").click(function() {
                      if (con_16_53_page == 1) {
                        con_16_53_page = 2;
                      } else {
                        con_16_53_page = con_16_53_page - 1;
                      }
                      $("#switch_con_16_53 .page").html(con_16_53_page);
                      slide.$Prev();
                      return false;
                    });
                    $("#switch_con_16_53 .right").unbind("click").click(function() {
                      if (con_16_53_page == 2) {
                        con_16_53_page = 1;
                      } else {
                        con_16_53_page = con_16_53_page + 1;
                      }
                      $("#switch_con_16_53 .page").html(con_16_53_page);
                      slide.$Next();
                      return false;
                    });
                  };


                  $(function() {

                    var jssorCopyTmp = document.getElementById('slider_smv_con_16_53').cloneNode(true);

                    var $jssorIntt = function(skipInit) {

                      //获取幻灯显示动画类型
                      var $this = $('#slider_smv_con_16_53');
                      var dh = $(document).height();
                      var wh = $(window).height();
                      var ww = $(window).width();
                      var width = 1000;
                      //区分页头、页尾、内容区宽度
                      if ($this.parents(".header").length > 0) {
                        width = $this.parents(".header").width();
                      } else if ($this.parents(".footer").length > 0) {
                        width = $this.parents(".footer").width();
                      } else {
                        width = $this.parents(".smvContainer").width();
                      }

                      if (ww > width) {
                        var left = parseInt((ww - width) * 10 / 2) / 10;
                        $this.css({
                          'left': -left,
                          'width': ww
                        });
                      } else {
                        $this.css({
                          'left': 0,
                          'width': ww
                        });
                      }

                      //解决手机端预览PC端幻灯秀时不通栏问题
                      if (VisitFromMobile() && typeof(LayoutConverter) === "undefined") {
                        $this.css("min-width", width);
                        setTimeout(function() {
                          var boxleft = (width - 330) / 2;
                          $this.find(".w-slide-btn-box").css("left", boxleft + "px");
                        }, 300);
                      }
                      $this.children().not(".slideArrow").css({
                        "width": $this.width()
                      });

                      if (!skipInit) {
                        con_16_53_sliderset3_init();
                      }


                      var areaId = $("#smv_con_16_53").attr("tareaid");
                      if (areaId == "") {
                        var mainWidth = $("#smv_Main").width();
                        $("#smv_con_16_53 .slideset_AreaC").css({
                          "width": mainWidth + "px",
                          "position": "relative",
                          "margin": "0 auto"
                        });
                      } else {
                        var controlWidth = $("#smv_con_16_53").width();
                        $("#smv_con_16_53 .slideset_AreaC").css({
                          "width": controlWidth + "px",
                          "position": "relative",
                          "margin": "0 auto"
                        });
                      }
                      $("#smv_con_16_53").attr("selectArea", "Area0");

                      var arrowHeight = $('#slider_smv_con_16_53 .w-slide-arrowl').eq(-1).outerHeight();
                      var arrowTop = (18 - arrowHeight) / 2;
                      $('#slider_smv_con_16_53 .w-slide-arrowl').eq(-1).css('top', arrowTop);
                      $('#slider_smv_con_16_53 .w-slide-arrowr').eq(-1).css('top', arrowTop);
                    }
                    $jssorIntt();


                    function ScaleSlider() {
                      var inst = $('#slider_smv_con_16_53');
                      var orginWidth = inst.width();
                      if (orginWidth == $(window).width()) return;
                      var inst_parent = inst.parent();
                      inst.remove()
                      inst_parent.append(jssorCopyTmp.cloneNode(true));

                      $jssorIntt();
                    }
                    if (typeof(LayoutConverter) !== "undefined") {
                      jssorCache_con_16_53.ResizeFunc = $jssorIntt;
                      LayoutConverter.CtrlJsVariableList.push(jssorCache_con_16_53);
                    } else {
                      $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    }



                  });
                  </script>
                </div>
              </div>
              <div id="smv_con_63_42" ctype="image" smanim='{"delay":0.5,"duration":1.5,"direction":"","animationName":"fadeIn","infinite":"1"}' class="esmartMargin smartAbs animated" cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 308px; width: 460px; left: 65px; top: 1042px;z-index:23;">
                <div class="yibuFrameContent con_63_42  image_Style1  " style="overflow:visible;;">
                  <div class="w-image-box image-clip-wrap" data-fillType="1" id="div_con_63_42">
                    <a target="_self" href="">
                      <img src="static/contents/sitefiles2001/10007281/images/-33837.jpg" alt="work-731198_1920" title="work-731198_1920" id="img_smv_con_63_42" style="width: 460px; height:308px;" class="">
                    </a>
                  </div>
                  <script type="text/javascript">
                  $(function() {

                    InitImageSmv("con_63_42", "460", "308", "1");

                  });
                  </script>
                </div>
              </div>
              <div id="smv_con_64_41" ctype="text" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 46px; width: 360px; left: 604px; top: 1042px;z-index:24;">
                <div class="yibuFrameContent con_64_41  text_Style1  " style="overflow:hidden;;">
                  <div id='txt_con_64_41' style="height: 100%;">
                    <div class="editableContent" id="txtc_con_64_41" style="height: 100%; word-wrap:break-word;">
                      <p><span style="font-size:36px"><span style="color:#444444"><strong><span style="font-family:Arial,Helvetica,sans-serif">关于我们</span></strong>
                          </span>
                        </span>
                      </p>
                    </div>
                  </div>
                  <script>
                  var tables = $(' #smv_con_64_41').find('table')
                  for (var i = 0; i < tables.length; i++) {
                    var tab = tables[i]
                    var borderWidth = $(tab).attr('border')
                    if (borderWidth <= 0 || !borderWidth) {
                      console.log(tab)
                      $(tab).addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                    }
                  }
                  </script>
                </div>
              </div>
              <div id="smv_con_70_19" ctype="image" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 34px; width: 10px; left: 574px; top: 1048px;z-index:27;">
                <div class="yibuFrameContent con_70_19  image_Style1  " style="overflow:visible;;">
                  <div class="w-image-box image-clip-wrap" data-fillType="2" id="div_con_70_19">
                    <a target="_self" href="">
                      <img src="static/contents/sitefiles2001/10007281/images/-15017.png" alt="-4770" title="-4770" id="img_smv_con_70_19" style="width: 10px; height:34px;" class="">
                    </a>
                  </div>
                  <script type="text/javascript">
                  $(function() {

                    InitImageSmv("con_70_19", "10", "34", "2");

                  });
                  </script>
                </div>
              </div>
              <div id="smv_con_83_10" ctype="text" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 39px; width: 361px; left: 424px; top: 1443px;z-index:28;">
                <div class="yibuFrameContent con_83_10  text_Style1  " style="overflow:hidden;;">
                  <div id='txt_con_83_10' style="height: 100%;">
                    <div class="editableContent" id="txtc_con_83_10" style="height: 100%; word-wrap:break-word;">
                      <p style="text-align:center"><span style="font-size:36px"><strong><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#555555">产品中心</span></span>
                          </strong>
                        </span>
                      </p>
                    </div>
                  </div>
                  <script>
                  var tables = $(' #smv_con_83_10').find('table')
                  for (var i = 0; i < tables.length; i++) {
                    var tab = tables[i]
                    var borderWidth = $(tab).attr('border')
                    if (borderWidth <= 0 || !borderWidth) {
                      console.log(tab)
                      $(tab).addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                    }
                  }
                  </script>
                </div>
              </div>
              <div id="smv_con_84_25" ctype="text" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item3" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 126px; width: 465px; left: 362px; top: 1508px;z-index:29;">
                <div class="yibuFrameContent con_84_25  text_Style1  " style="overflow:hidden;;">
                  <div id='txt_con_84_25' style="height: 100%;">
                    <div class="editableContent" id="txtc_con_84_25" style="height: 100%; word-wrap:break-word;">
                      <p style="text-align:center"><span style="color:#7f8c8d"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:14px">为客户创造价值的的过程中，不断提升企业自身的价值。</span></span>
                        </span>
                      </p>
                    </div>
                  </div>
                  <script>
                  var tables = $(' #smv_con_84_25').find('table')
                  for (var i = 0; i < tables.length; i++) {
                    var tab = tables[i]
                    var borderWidth = $(tab).attr('border')
                    if (borderWidth <= 0 || !borderWidth) {
                      console.log(tab)
                      $(tab).addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                    }
                  }
                  </script>
                </div>
              </div>
              <div id="smv_con_85_59" ctype="line" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 143px; left: 441px; top: 1546px;z-index:8;">
                <div class="yibuFrameContent con_85_59  line_Style1  " style="overflow:visible;;">
                  <!-- w-line -->
                  <div style="position:relative; height:100%">
                    <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                  </div>
                </div>
              </div>
              <div id="smv_con_86_59" ctype="text" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 96px; width: 47px; left: 583px; top: 1499px;z-index:7;">
                <div class="yibuFrameContent con_86_59  text_Style1  " style="overflow:hidden;;">
                  <div id='txt_con_86_59' style="height: 100%;">
                    <div class="editableContent" id="txtc_con_86_59" style="height: 100%; word-wrap:break-word;">
                      <p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:90px"><span style="font-family:Georgia,serif"><span style="line-height:24px">&middot;</span></span>
                          </span>
                        </span>
                      </p>
                    </div>
                  </div>
                  <script>
                  var tables = $(' #smv_con_86_59').find('table')
                  for (var i = 0; i < tables.length; i++) {
                    var tab = tables[i]
                    var borderWidth = $(tab).attr('border')
                    if (borderWidth <= 0 || !borderWidth) {
                      console.log(tab)
                      $(tab).addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                    }
                  }
                  </script>
                </div>
              </div>
              <div id="smv_con_87_59" ctype="line" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 143px; left: 637px; top: 1546px;z-index:8;">
                <div class="yibuFrameContent con_87_59  line_Style1  " style="overflow:visible;;">
                  <!-- w-line -->
                  <div style="position:relative; height:100%">
                    <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                  </div>
                </div>
              </div>
              <div id="smv_con_90_56" ctype="listproduct" class="esmartMargin smartAbs " cpid="32" cstyle="Style3" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 371px; width: 1200px; left: 6px; top: 1615px;z-index:32;">
                <div class="yibuFrameContent con_90_56  listproduct_Style3  " style="overflow:visible;;">
                  <div class="w-list" id="ulList_con_90_56" style="width: 1185px;" data-title-autolines="1" data-desc-autolines="1">
                    <div class="w-list-ul f-clearfix" data-u="slides">
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/13370062.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">作曲</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/13369511.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">游戏音效</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/13369622.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">影视后期音频</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/13369656.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">舞台剧音乐</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/16372190.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">同期分轨录音</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/19150857.jpeg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">全景声制作</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/19150790.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">配器</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/13369719.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">环绕声制作</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/13369755.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">制谱</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/13369766.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">电脑音乐制作</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                      <div class="w-list-item f-clearfix">
                        <a target="_self" class="w-list-link">
                          <div class="w-list-pic"><img src="static/contents/sitefiles2037/10185258/images/13369790.jpg" class="w-listpic-in" /></div>
                          <div class="w-list-bottom">
                            <h5 class="w-list-title">ambisonics音频</h5>
                            <div class="w-list-desc "></div>
                            <div class="w-list-price w-hide">¥&nbsp;0.00</div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <a data-u="arrowleft" class="m-list-arrow u-left mw-iconfont" data-autocenter="2">&#xb133;</a>
                    <a data-u="arrowright" class="m-list-arrow u-right mw-iconfont" data-autocenter="2">&#xb132;</a>
                  </div>
                  <script>
                  var con_90_56_init = function() {
                    var sliderId = "ulList_con_90_56";
                    var jssorCache_con_90_56 = {
                      CtrlId: "con_90_56",
                      SliderId: sliderId,
                      Html: $("#" + sliderId)[0].outerHTML,
                    };


                    var jssor_options = {
                      $AutoPlay: parseInt("1"), //自动播放
                      $AutoPlaySteps: parseInt("1"),
                      $SlideDuration: parseInt("2000"),
                      $SlideWidth: parseInt("285"),
                      $SlideSpacing: parseInt("15"),
                      $Cols: parseInt("4"),
                      $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,
                        $Steps: parseInt("1")
                      }
                    };
                    jssorCache_con_90_56.JssorOpt = jssor_options;
                    var jssor_1_slider = new $JssorSlider$(sliderId, jssor_options);

                    /*responsive code begin*/
                    /*remove responsive code if you don't want the slider scales while window resizing*/
                    function ScaleSlider() {
                      var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                      if (refSize) {
                        refSize = Math.min(refSize, 1920);
                      } else {
                        window.setTimeout(ScaleSlider, 30);
                      }
                    }
                    ScaleSlider();

                    if (typeof(LayoutConverter) !== "undefined") {
                      jssorCache_con_90_56.Jssor = jssor_1_slider;
                      LayoutConverter.CtrlJsVariableList.push(jssorCache_con_90_56);
                    } else {
                      $Jssor$.$AddEvent(window, "load", ScaleSlider);
                      $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                      $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    }
                    /*responsive code end*/
                  };

                  $(function() {
                    var control = $("#smv_con_90_56");
                    control.find("img").cutFill();
                    con_90_56_init();
                  });
                  </script>
                </div>
              </div>
              <div id="smv_con_91_49" ctype="text" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item3" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 34px; width: 537px; left: 336px; top: 2171px;z-index:29;">
                <div class="yibuFrameContent con_91_49  text_Style1  " style="overflow:hidden;;">
                  <div id='txt_con_91_49' style="height: 100%;">
                    <div class="editableContent" id="txtc_con_91_49" style="height: 100%; word-wrap:break-word;">
                      <p style="text-align:center"><span style="color:#7f8c8d"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:14px">定制新视野，创造新科技！</span></span>
                        </span>
                      </p>
                    </div>
                  </div>
                  <script>
                  var tables = $(' #smv_con_91_49').find('table')
                  for (var i = 0; i < tables.length; i++) {
                    var tab = tables[i]
                    var borderWidth = $(tab).attr('border')
                    if (borderWidth <= 0 || !borderWidth) {
                      console.log(tab)
                      $(tab).addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                    }
                  }
                  </script>
                </div>
              </div>
              <div id="smv_con_92_49" ctype="text" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 38px; width: 360px; left: 417px; top: 2120px;z-index:28;">
                <div class="yibuFrameContent con_92_49  text_Style1  " style="overflow:hidden;;">
                  <div id='txt_con_92_49' style="height: 100%;">
                    <div class="editableContent" id="txtc_con_92_49" style="height: 100%; word-wrap:break-word;">
                      <p style="text-align:center"><strong><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#555555"><span style="font-size:30px">联系我们</span></span></span></strong></p>
                    </div>
                  </div>
                  <script>
                  var tables = $(' #smv_con_92_49').find('table')
                  for (var i = 0; i < tables.length; i++) {
                    var tab = tables[i]
                    var borderWidth = $(tab).attr('border')
                    if (borderWidth <= 0 || !borderWidth) {
                      console.log(tab)
                      $(tab).addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                    }
                  }
                  </script>
                </div>
              </div>
              <div id="smv_con_93_49" ctype="line" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 143px; left: 422px; top: 2218px;z-index:8;">
                <div class="yibuFrameContent con_93_49  line_Style1  " style="overflow:visible;;">
                  <!-- w-line -->
                  <div style="position:relative; height:100%">
                    <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                  </div>
                </div>
              </div>
              <div id="smv_con_94_49" ctype="text" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 96px; width: 47px; left: 578px; top: 2171px;z-index:7;">
                <div class="yibuFrameContent con_94_49  text_Style1  " style="overflow:hidden;;">
                  <div id='txt_con_94_49' style="height: 100%;">
                    <div class="editableContent" id="txtc_con_94_49" style="height: 100%; word-wrap:break-word;">
                      <p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:90px"><span style="font-family:Georgia,serif"><span style="line-height:24px">&middot;</span></span>
                          </span>
                        </span>
                      </p>
                    </div>
                  </div>
                  <script>
                  var tables = $(' #smv_con_94_49').find('table')
                  for (var i = 0; i < tables.length; i++) {
                    var tab = tables[i]
                    var borderWidth = $(tab).attr('border')
                    if (borderWidth <= 0 || !borderWidth) {
                      console.log(tab)
                      $(tab).addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                      $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                    }
                  }
                  </script>
                </div>
              </div>
              <div id="smv_con_95_49" ctype="line" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 143px; left: 658px; top: 2218px;z-index:8;">
                <div class="yibuFrameContent con_95_49  line_Style1  " style="overflow:visible;;">
                  <!-- w-line -->
                  <div style="position:relative; height:100%">
                    <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                  </div>
                </div>
              </div>
              <div id="smv_con_100_22" ctype="button" smanim='{"delay":0.4,"duration":1.0,"direction":"","animationName":"zoomIn","infinite":"1"}' class="esmartMargin smartAbs animated" cpid="32" cstyle="Style1" ccolor="Item2" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 47px; width: 167px; left: 514px; top: 2017px;z-index:11;">
                <div class="yibuFrameContent con_100_22  button_Style1  " style="overflow:visible;;"><a target="_self" href="/cpzx.php" class="w-button f-ellipsis" style="width: 163px; height: 43px; line-height: 43px;">
                    <span class="w-button-position">
                      <em class="w-button-text f-ellipsis">
                        <i class="mw-iconfont w-button-icon w-icon-hide"></i>查看更多
                      </em>
                    </span>
                  </a>
                  <script type="text/javascript">
                  $(function() {});
                  </script>
                </div>
              </div>
              <div id="smv_con_101_7" ctype="area" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="True" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 405px; width: 417px; left: 47px; top: 2254px;z-index:33;">
                <div class="yibuFrameContent con_101_7  area_Style1  " style="overflow:visible;;">
                  <div class="w-container" data-effect-name="enterTop">
                    <div class="smAreaC" id="smc_Area0" cid="con_101_7">
                      <div id="smv_con_114_50" ctype="companyinfo" class="esmartMargin smartAbs " cpid="32" cstyle="Style2" ccolor="Item0" areaId="Area0" isContainer="False" pvid="con_101_7" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 394px; width: 320px; left: 9px; top: 5px;z-index:4;">
                        <div class="yibuFrameContent con_114_50  companyinfo_Style2  " style="overflow:hidden;;">
                          <ul class="w-company-info iconStyle1">
                            <li class="company-info-item">
                              <a href="javascript:void(0)" style="padding-left:0px;margin-left: 0px;">
                                <div class="company-info-titleBox">
                                  <span class="company-info-icon   mw-icon-hide ">
                                    <i class="ltd-icon  gs-dizhi"></i>
                                  </span>
                                  <span class="company-info-title " style="white-space:pre">地址：</span>
                                </div>
                                <div class="company-text">
                                  <span class="company-info-text">北京市通州区华远铭悦园16-306</span>
                                </div>
                              </a>
                            </li>
                            <li class="company-info-item">
                              <a href="tel:010-81537750" style="padding-left:0px;margin-left: 0px;">
                                <div class="company-info-titleBox">
                                  <span class="company-info-icon   mw-icon-hide ">
                                    <i class="ltd-icon  gs-dianhua"></i>
                                  </span>
                                  <span class="company-info-title " style="white-space:pre">电话：</span>
                                </div>
                                <div class="company-text">
                                  <span class="company-info-text">010-81537750</span>
                                </div>
                              </a>
                            </li>
                            <li class="company-info-item">
                              <a href="mailto:xuetao@newimagery.net" style="padding-left:0px;margin-left: 0px;">
                                <div class="company-info-titleBox">
                                  <span class="company-info-icon   mw-icon-hide ">
                                    <i class="ltd-icon  gs-youxiang"></i>
                                  </span>
                                  <span class="company-info-title " style="white-space:pre">邮箱：</span>
                                </div>
                                <div class="company-text">
                                  <span class="company-info-text">xuetao@newimagery.net</span>
                                </div>
                              </a>
                            </li>
                            <li class="company-info-item">
                              <a href="tel:18601106543" style="padding-left:0px;margin-left: 0px;">
                                <div class="company-info-titleBox">
                                  <span class="company-info-icon   mw-icon-hide ">
                                    <i class="ltd-icon  gs-shouji"></i>
                                  </span>
                                  <span class="company-info-title " style="white-space:pre">手机：</span>
                                </div>
                                <div class="company-text">
                                  <span class="company-info-text">18601106543</span>
                                </div>
                              </a>
                            </li>
                            <li class="company-info-item">
                              <a href="//wpa.qq.com/msgrd?v=3&amp;uin=94043728&amp;site=qq&amp;menu=yes" target=_blank style="padding-left:0px;margin-left: 0px;">
                                <div class="company-info-titleBox">
                                  <span class="company-info-icon   mw-icon-hide ">
                                    <i class="ltd-icon  gs-qq"></i>
                                  </span>
                                  <span class="company-info-title " style="white-space:pre">QQ：</span>
                                </div>
                                <div class="company-text">
                                  <span class="company-info-text">94043728</span>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div id="smv_con_117_24" ctype="image" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="con_101_7" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 150px; width: 150px; left: 246px; top: 240px;z-index:1;">
                        <div class="yibuFrameContent con_117_24  image_Style1  " style="overflow:visible;;">
                          <div class="w-image-box image-clip-wrap" data-fillType="0" id="div_con_117_24">
                            <a target="_self" href="">
                              <img src="static/contents/sitefiles2037/10185258/images/13096644.jpg" alt="微信图片_20200221172206" title="微信图片_20200221172206" id="img_smv_con_117_24" style="width: 148px; height:148px;" class="">
                            </a>
                          </div>
                          <script type="text/javascript">
                          $(function() {

                            InitImageSmv("con_117_24", "148", "150", "0");

                          });
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="smv_con_102_9" ctype="area" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="True" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 410px; width: 643px; left: 493px; top: 2249px;z-index:33;">
                <div class="yibuFrameContent con_102_9  area_Style1  " style="overflow:visible;;">
                  <div class="w-container" data-effect-name="enterTop">
                    <div class="smAreaC" id="smc_Area0" cid="con_102_9">
                      <div id="smv_con_109_3" ctype="leaveword" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="con_102_9" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 346px; width: 590px; left: 43px; top: 54px;z-index:2;">
                        <div class="yibuFrameContent con_109_3  leaveword_Style1  " style="overflow:visible;;">
                          <!--w-guestbook-->
                          <div class="w-guestbook f-clearfix">
                            <!-- 验证信息 w-hide 隐藏验证信息-->
                            <div class="w-verify w-hide">
                              <span class="w-verify-in"><i class="mw-iconfont">&#xb078;</i><span class="w-verify-text"></span></span>
                            </div>
                            <!--w-guestbook-container-->
                            <div class="w-guestbook-container">
                              <!--w-guestbook-item  w-haserror验证错误样式-->
                              <div class="w-guestbook-item w-placeholder">
                                <input type="text" class="w-guestbook-input" placeHolder="标题" id="con_109_3_Subject" name="Subject" autocomplete="off" />
                              </div>
                              <!--/w-guestbook-item-->
                              <!--w-guestbook-item-->
                              <div class="w-guestbook-item w-placeholder w-item-textarea">
                                <textarea class="w-guestbook-textarea" placeHolder="内容" id="con_109_3_Message" name="Message" autocomplete="off"></textarea>
                              </div>
                              <!--/w-guestbook-item-->
                              <!--w-guestbook-item-->
                              <div class="w-guestbook-item w-placeholder">
                                <input type="text" class="w-guestbook-input" placeHolder="电子邮件" id="con_109_3_Email" name="Email" autocomplete="off" />
                              </div>
                              <!--/w-guestbook-item-->
                              <!--w-guestbook-item-->
                              <div class="w-guestbook-code f-clearfix">
                                <div class="w-guestbook-item w-placeholder">
                                  <input type="text" class="w-guestbook-input" placeHolder="验证码" id="con_109_3_Captcha" name="Captcha" autocomplete="off" />
                                </div>
                                <div class="w-guestbook-codeimg"><img src="static/Content/images/code.png" alt="验证码" name="Captcha"></div>
                              </div>
                              <!--/w-guestbook-item-->
                            </div>
                            <!--/w-guestbook-container-->
                            <!--w-guestbook-bottom-->
                            <div class="w-guestbook-bottom f-clearfix">
                              <a href="javascript:void(0)" class="w-guestbook-btn" id="con_109_3_Submit" name="Submit">提交</a>
                            </div>
                            <!--/w-guestbook-bottom-->
                          </div>
                          <!--/w-guestbook-->
                          <script type="text/javascript">
                          $(function() {
                            $('#smv_con_109_3').smartNPLeavewordControl({
                              controlId: 'smv_con_109_3',
                              emptyPrefix: '请输入',
                              correctMailPrefix: '请输入正确的',
                              contentMaxLength: '不能超过200个字符',
                              postSucess: '提交成功',
                              postFail: '提交失败',
                              correctMailValidate: '请输入正确格式的邮箱！'
                            });
                          });

                          (function() {
                            JPlaceHolder(leavewordPlaceHolder);

                            function leavewordPlaceHolder() {
                              var placeHeight = $(".w-guestbook-item.w-placeholder .placeholder-text .placeholder-text-in").height();
                              $(".w-guestbook-item.w-placeholder .placeholder-text .placeholder-text-in").css("lineHeight", placeHeight + "px");
                            }
                          })(jQuery);
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="smv_con_113_35" ctype="companyIntroduction" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 256px; width: 615px; left: 572px; top: 1114px;z-index:35;">
                <div class="yibuFrameContent con_113_35  companyIntroduction_Style1  " style="overflow:hidden;;">
                  <!--article info-->
                  <div class="w-info">新意象音频，成立于2008年<br />工作室分布于北京、西安、呼和浩特<br />成员或曾任职于非物质文化遗产保护单位<br />或曾任教于高校影视动画专业<br />或曾任职于国家级文艺单位<br />团队在声音领域耕耘多年<br />在业内获得了良好的口碑<br /></div>
                  <!--/article info-->
                </div>
              </div>
              <div id="smv_con_118_57" ctype="text" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item3" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="height: 71px; width: 360px; left: 63px; top: 2614px;z-index:37;">
                <div class="yibuFrameContent con_118_57  text_Style1  " style="overflow:hidden;;">
                  <div id='txt_con_118_57' style="height: 100%;">
                    <div class="editableContent" id="txtc_con_118_57" style="height: 100%; word-wrap:break-word;">
                      <p><strong><span style="font-family:Source Han Sans,Geneva,sans-serif; font-size:medium">扫描右侧二维码关注我们：</span></strong></p>
                    </div>
                  </div>
                  <script>
                    var tables = $(' #smv_con_118_57').find('table')
                                        for (var i = 0; i < tables.length; i++) {
                                            var tab = tables[i]
                                            var borderWidth = $(tab).attr('border')
                                            if (borderWidth <= 0 || !borderWidth) {
                                                console.log(tab)
                                                $(tab).addClass('hidden-border')
                                                $(tab).children("tbody").children("tr").children("td").addClass('hidden-border')
                                                $(tab).children("tbody").children("tr").children("th").addClass('hidden-border')
                                                $(tab).children("thead").children("tr").children("td").addClass('hidden-border')
                                                $(tab).children("thead").children("tr").children("th").addClass('hidden-border')
                                                $(tab).children("tfoot").children("tr").children("td").addClass('hidden-border')
                                                $(tab).children("tfoot").children("tr").children("th").addClass('hidden-border')
                                            }
                                        }
                                    </script>
                </div>
              </div>
              <div id="smv_con_119_20" ctype="line" class="esmartMargin smartAbs " cpid="32" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 20px; width: 1158px; left: 13px; top: 2702px;z-index:38;">
                <div class="yibuFrameContent con_119_20  line_Style1  " style="overflow:visible;;">
                  <!-- w-line -->
                  <div style="position:relative; height:100%">
                    <div class="w-line" style="position:absolute;top:50%;" linetype="horizontal"></div>
                  </div>
                </div>
              </div>
            </div>
          </div><input type='hidden' name='__RequestVerificationToken' id='token__RequestVerificationToken' value='17nLUOuin3A-gDHN4-jhZt1EFasrE-sPfsy-Y2KHjIibZ09x96mAga96By2iFOGudCwercwnVc4oWbnBn9ba2sPegzcsejpPbsSjg0ExvHJIsyCJPwrzJWdvKdsvxJLi0' />
        </div>
      </div>
    </div>
    <div style="background-color: transparent; background-image: none; background-repeat: no-repeat;background-position:0 0; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;
         position: relative; width: 100%;min-width:1200px;background-size: auto;" bgScroll="none">
      <div class=" footer" cpid="1133606" id="smv_Area3" style="width: 1200px; height: 87px; position: relative; margin: 0 auto;">
        <div id="smv_tem_4_22" ctype="banner" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area3" isContainer="True" pvid="" tareaId="Area3" re-direction="y" daxis="Y" isdeletable="True" style="height: 87px; width: 100%; left: 0px; top: 0px;z-index:2;">
          <div class="yibuFrameContent tem_4_22  banner_Style1  " style="overflow:visible;;">
            <div class="fullcolumn-inner smAreaC" id="smc_Area0" cid="tem_4_22" style="width:1200px">
              <div id="smv_tem_5_51" ctype="button" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_4_22" tareaId="Area3" re-direction="all" daxis="All" isdeletable="True" style="height: 37px; width: 31px; left: 27px; top: 27px;z-index:2;">
                <div class="yibuFrameContent tem_5_51  button_Style1  " style="overflow:visible;;"><a target="_self" href="" class="w-button f-ellipsis" style="width: 29px; height: 35px; line-height: 35px;">
                    <span class="w-button-position">
                      <em class="w-button-text f-ellipsis">
                        <i class="mw-iconfont w-button-icon w-icon-hide"></i>
                      </em>
                    </span>
                  </a>
                  <script type="text/javascript">
                  $(function() {});
                  </script>
                </div>
              </div>
              <div id="smv_tem_6_22" ctype="button" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_4_22" tareaId="Area3" re-direction="all" daxis="All" isdeletable="True" style="height: 38px; width: 34px; left: -9px; top: 26px;z-index:2;">
                <div class="yibuFrameContent tem_6_22  button_Style1  " style="overflow:visible;;"><a target="_self" href="" class="w-button f-ellipsis" style="width: 32px; height: 36px; line-height: 36px;">
                    <span class="w-button-position">
                      <em class="w-button-text f-ellipsis">
                        <i class="mw-iconfont w-button-icon w-icon-hide"></i>
                      </em>
                    </span>
                  </a>
                  <script type="text/javascript">
                  $(function() {});
                  </script>
                </div>
              </div>
              <div id="smv_tem_7_51" ctype="button" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_4_22" tareaId="Area3" re-direction="all" daxis="All" isdeletable="True" style="height: 36px; width: 35px; left: 66px; top: 27px;z-index:2;">
                <div class="yibuFrameContent tem_7_51  button_Style1  " style="overflow:visible;;"><a target="_self" href="http://weibo.com/imagerysounddesign" class="w-button f-ellipsis" style="width: 33px; height: 34px; line-height: 34px;">
                    <span class="w-button-position">
                      <em class="w-button-text f-ellipsis">
                        <i class="mw-iconfont w-button-icon w-icon-hide"></i>
                      </em>
                    </span>
                  </a>
                  <script type="text/javascript">
                  $(function() {});
                  </script>
                </div>
              </div>
              <div id="smv_tem_11_6" ctype="companyinfo" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style4" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_4_22" tareaId="Area3" re-direction="all" daxis="All" isdeletable="True" style="height: 22px; width: 1102px; left: 98px; top: 33px;z-index:4;">
                <div class="yibuFrameContent tem_11_6  companyinfo_Style4  " style="overflow:hidden;;">
                  <div class="w-company-info iconStyle1">
                    <span class="company-info-item">
                      <a href="javascript:void(0)">
                        <span class="icon company-info-icon    mw-icon-hide ">
                          <i class="ltd-icon gs-gongsi"></i>
                        </span>
                        <span class="company-info-title" style="white-space:pre">版权所有：</span>
                        <span class="company-info-text">新意象音频</span>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div id="bannerWrap_tem_4_22" class="fullcolumn-outer" style="position: absolute; top: 0; bottom: 0;">
            </div>
            <script type="text/javascript">
            $(function() {
              var resize = function() {
                $("#smv_tem_4_22 >.yibuFrameContent>.fullcolumn-inner").width($("#smv_tem_4_22").parent().width());
                $('#bannerWrap_tem_4_22').fullScreen(function(t) {
                  if (VisitFromMobile()) {
                    t.css("min-width", t.parent().width())
                  }
                });
              }
              if (typeof(LayoutConverter) !== "undefined") {
                LayoutConverter.CtrlJsVariableList.push({
                  CtrlId: "tem_4_22",
                  ResizeFunc: resize,
                });
              } else {
                $(window).resize(function(e) {
                  if (e.target == this) {
                    resize();
                  }
                });
              }

              resize();
            });
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="static/static/lzparallax/1.0.0/lz-parallax.min.js?_version=20211217144519" type="text/javascript"></script>
  <script type="text/javascript">
  $(function() {
    jsmart.autoContainer = 0;
    jsmart.autoComputeCallback = function() {
      if (jsmart.autoContainer) {
        clearTimeout(jsmart.autoContainer);
        jsmart.autoContainer = 0;
      }
      jsmart.autoContainer = setTimeout(function() {
        if (window.refreshBgScroll) {
          window.refreshBgScroll();
        }
      }, 50);
    }
    $("div[bgscroll]").each(function() {
      var bgscroll = $(this).attr("bgscroll");
      $(this).lzparallax({
        effect: bgscroll,
        autoPosition: false,
        clone: true
      });
    });
  });
  window.refreshBgScroll = function() {
    $("div[bgscroll]").each(function() {
      var bgscroll = $(this).attr("bgscroll");
      var bgclear = $(this).attr("bgclear");
      $(this).removeAttr("bgclear");
      $(this).lzparallax("refresh", bgscroll, bgclear);
    });
  }
  </script>
  <div style="text-align:center;width: 100%;padding-top: 4px;font-size: 12; background-color: #ffffff;font-family:Open Sans;opacity:1.0;position: relative; z-index: 3;" id="all-icp-bottom">
    <div class="page-bottom--area style1" id="b_style1" style="display:none">
      <div class="bottom-content">
        <div class="top-area">
          <div class="icp-area display-style common-style bottom-words" style="margin-bottom: 1px;">
            <a target="_blank" class="bottom-words" href="https://beian.miit.gov.cn">
              <span class="icp-words bottom-words"></span>
            </a>
          </div>
          <div class="divider display-style common-style bottom-border" style="vertical-align:-7px;"></div>
          <div class="ga-area display-style common-style bottom-words">
            <a target="_blank" class="bottom-words ga_link" href="#">
              <img src="static/Designer/Content/images/ga_icon.png" alt="" /><span class="ga-words bottom-words"></span>
            </a>
          </div>
        </div>
        <div class="bottom-area">
          <div class="ali-area display-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
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
              </svg><span class="bottom-words"> &nbsp;本网站由阿里云提供云计算及安全服务</span>
            </a>
          </div>
          <div class="divider display-style common-style bottom-border"></div>
          <div class="ipv-area display-style common-style bottom-words">
            <span class="bottom-words">本网站支持</span>
            <span class="ipv6-box bottom-words">IPv6</span>
          </div>
          <div class="divider display-style common-style bottom-border"></div>
          <div class="powerby-area display-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
              <span class="bottom-words" style="display: block;"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="page-bottom--area style3" id="b_style3" style="display:none">
      <div class="bottom-content">
        <div class="top-area">
          <div class="ga-area display-style common-style bottom-words">
            <a target="_blank" class="bottom-words ga_link" href="#">
              <img src="static/Designer/Content/images/ga_icon.png" alt="" /><span class="ga-words bottom-words"></span>
            </a>
          </div>
          <div class="divider display-style common-style bottom-border" style="vertical-align:-7px;"></div>
          <div class="copyright-area display-style common-style bottom-words" style="margin-top:2px;"></div>
          <div class="divider display-style common-style bottom-border" style="vertical-align:-7px;"></div>
          <div class="icp-area display-style common-style bottom-words" style="margin-bottom: 1px;">
            <a target="_blank" class="bottom-words" href="https://beian.miit.gov.cn">
              <span class="icp-words bottom-words"></span>
            </a>
          </div>
        </div>
        <div class="bottom-area">
          <div class="ali-area display-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
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
              </svg><span class="bottom-words">&nbsp;本网站由阿里云提供云计算及安全服务</span>
            </a>
          </div>
          <div class="divider display-style common-style bottom-border"></div>
          <div class="ipv-area display-style common-style bottom-words">
            <span class="bottom-words">本网站支持</span>
            <span class="ipv6-box bottom-words">IPv6</span>
          </div>
          <div class="divider display-style common-style bottom-border"></div>
          <div class="powerby-area display-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
              <span class="bottom-words" style="display: block;"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="page-bottom--area style4" id="b_style4" style="display:none">
      <div class="bottom-content">
        <div class="top-area">
          <div class="copyright-area display-style common-style bottom-words" style="margin-top:2px;"></div>
          <div class="divider display-style common-style bottom-border" style="vertical-align:-7px;"></div>
          <div class="icp-area display-style common-style bottom-words" style="margin-bottom: 1px;">
            <a target="_blank" class="bottom-words" href="https://beian.miit.gov.cn">
              <span class="icp-words bottom-words"></span>
            </a>
          </div>
          <div class="divider display-style common-style bottom-border" style="vertical-align:-7px;"></div>
          <div class="ga-area display-style common-style bottom-words">
            <a target="_blank" class="bottom-words ga_link" href="#">
              <img src="static/Designer/Content/images/ga_icon.png" alt="" /><span class="ga-words bottom-words"></span>
            </a>
          </div>
        </div>
        <div class="bottom-area">
          <div class="ali-area display-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
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
              </svg><span class="bottom-words">&nbsp;本网站由阿里云提供云计算及安全服务</span>
            </a>
          </div>
          <div class="divider display-style common-style bottom-border"></div>
          <div class="ipv-area display-style common-style bottom-words">
            <span class="bottom-words">本网站支持</span>
            <span class="ipv6-box bottom-words">IPv6</span>
          </div>
          <div class="divider display-style common-style bottom-border"></div>
          <div class="powerby-area display-style common-style bottom-words">
            <a class="bottom-words" target="_blank" href="#">
              <span class="bottom-words" style="display: block;"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document.body).bind('contextmenu', function() {
    return false;
  });

  $(function() {
    $("img.lazyload").lazyload({
      skip_invisible: false,
      effect: "fadeIn",
      failure_limit: 15,
      threshold: 100
    });
    $('.animated').smanimate();
    $('.smartRecpt').smrecompute();
    setCurrentPageTitle('首页', 2);
    xwezhan.initWz();

    if ($("#txtDeviceSwitchEnabled").val() == "hide") {
      $(".m-deviceSwitch").css("display", "none");
    }

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
      align: 'center',
      fontsize: 12
    };

    _initData()
    _initShow()

    function _initData() {
      var linkUrl = "http://www.beian.gov.cn/portal/registerSystemInfo?recordcode="
      if (info.ga != "") {
        linkUrl = linkUrl + info.ga.substring(5, 19);
      }
      $('.ga_link').attr('href', linkUrl);
      $('.bottom-content').css({
        'text-align': info.align
      })
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
          .prev('.divider')
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
      if ((!info.ga && !info.icp) || ("False".toLowerCase() == "false" && "True".toLowerCase() == "false" && "False".toLowerCase() == "false")) {
        $('.top-area').css({
          'margin-bottom': 0
        })
      }
      if (!info.ga && !info.icp && "False".toLowerCase() == "false" && "True".toLowerCase() == "false" && "False".toLowerCase() == "false") {
        $('#all-icp-bottom').css({
          'display': 'none'
        });
      }
    }
  });
  </script>
  <div id="systemDialogLayer" style="position:relative;z-index:999999"></div>
</body>

</html>