<!DOCTYPE html>
<html class="smart-design-mode">
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
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" />
  <meta name="keywords" />
  <meta name="renderer" content="webkit" />
  <meta name="applicable-device" content="pc" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <title><?php echo $article['title'];?>-意象音频</title>
  <link rel="icon" href="//nwzimg.wezhan.cn/sitefiles10185/10185258/意象音频 2 s.png" />
  <link rel="shortcut icon" href="//nwzimg.wezhan.cn/sitefiles10185/10185258/意象音频 2 s.png" />
  <link rel="bookmark" href="//nwzimg.wezhan.cn/sitefiles10185/10185258/意象音频 2 s.png" />
  <link href="static/Designer/Content/bottom/pcstyle.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <link href="static/Content/public/css/reset.css?_version=20211217144519" rel="stylesheet" type="text/css" />
  <link href="static/static/iconfont/1.0.0/iconfont.css?_version=20210414103602" rel="stylesheet" type="text/css" />
  <link href="static/static/iconfont/companyinfo/iconfont.css?_version=20210830113640" rel="stylesheet" type="text/css" />
  <link href="static/Designer/Content/base/css/pager.css?_version=20210917111955" rel="stylesheet" type="text/css" />
  <link href="static/Designer/Content/base/css/hover-effects.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <link href="static/Designer/Content/base/css/antChain.css?_version=20210414103601" rel="stylesheet" type="text/css" />
  <link href="//nwzimg.wezhan.cn/prevsf/10185/10185258/css/1133604_Pc_zh-CN.css" rel="stylesheet" />
  <script src="static/Scripts/JQuery/jquery-1.10.2.min.js?_version=20210414103602" type="text/javascript"></script>
  <script src="static/Designer/Scripts/jquery.lazyload.min.js?_version=20210414103601" type="text/javascript"></script>
  <script src="static/Designer/Scripts/smart.animation.min.js?_version=20211217144519" type="text/javascript"></script>
  <script src="static/Designer/Content/Designer-panel/js/kino.razor.min.js?_version=20210414103601" type="text/javascript"></script>
  <script src="static/Scripts/common.min.js?v=20200318&_version=20220120174243" type="text/javascript"></script>
  <script src="static/Administration/Scripts/admin.validator.min.js?_version=20210414103601" type="text/javascript"></script>
  <script src="static/Administration/Content/plugins/cookie/jquery.cookie.js?_version=20210414103601" type="text/javascript"></script>
  <script type='text/javascript' id='lz-slider' src='static/Scripts/statics/js/lz-slider.min.js'></script>
  <script type='text/javascript' id='lz-preview' src='static/Scripts/statics/js/lz-preview.min.js'></script>
  <script type='text/javascript' id='jssor-all' src='static/Designer/Scripts/jssor.slider-22.2.16-all.min.js?_version=20210414103601'></script>
  <script type='text/javascript' id='slideshown' src='static/Designer/Scripts/slideshow.js?_version=20210414103601'></script>
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
  <input type="hidden" id="pageinfo" value="1133604" data-type="2" data-device="Pc" data-entityid="2182826" />
  <input id="txtDeviceSwitchEnabled" value="show" type="hidden" />
  <script type="text/javascript">
  $(function() {

    if ("False" == "True") {
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
          <div class="smvWrapper" style="width: 100%;  position: relative; background-color: transparent; background-image: none; background-repeat: no-repeat; background:-moz-linear-gradient(top, none, none);background:-webkit-gradient(linear, left top, left bottom, from(none), to(none));background:-o-linear-gradient(top, none, none);background:-ms-linear-gradient(top, none, none);background:linear-gradient(top, none, none);;background-position:0 0;">
            <div class="smvContainer" id="smv_Main" cpid="1133604" style="min-height:200px;width:1200px;height:894px;  position: relative; ">
              <div id="smv_tem_1_4" ctype="newsItemTitleBind" class="smartRecpt esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="min-height: 34px; width: 1053px; left: 75px; top: 604px;z-index:2;">
                <div class="yibuFrameContent tem_1_4  newsItemTitleBind_Style1  " style="overflow:visible;;">
                  <h1 class="w-title"><?php echo $article['title'];?></h1>
                </div>
              </div>
              <div id="smv_tem_2_28" ctype="newsItemCrumbsBind" class="smartRecpt esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="min-height: 35px; width: 850px; left: 50px; top: 552px;z-index:3;">
                <div class="yibuFrameContent tem_2_28  newsItemCrumbsBind_Style1  " style="overflow:visible;;">
                  <!--crumbs-->
                  <div class="w-crumbs">
                    <a href="/" class="w-crumbs-item">首页</a>
                    <span class="w-crumbs-category ">&nbsp;</span><i class="w-arrowicon mw-iconfont w-crumbs-category ">&#xa132;</i>
                    <span class="w-crumbs-category ">&nbsp;</span><a href="/NewsInfoCategory?categoryId=204704,204704,204706,204707" class="w-crumbs-item w-crumbs-category ">业内新闻</a>
                    <span class="w-crumbs-caption ">&nbsp;</span><i class="w-arrowicon mw-iconfont w-crumbs-caption">&#xa132;</i>
                    <span class="w-crumbs-caption">&nbsp;</span><span class="w-crumbs-caption"><?php echo $article['title'];?></span>
                  </div>
                  <!--/crumbs-->
                  <script type="text/javascript">
                  $(function() {
                    $('#smv_tem_2_28').smartNPCrumbsControl({
                      controlId: 'smv_tem_2_28',
                      languageId: 2,
                      isHideTitle: false
                    });
                  });
                  </script>
                </div>
              </div>
              <div id="smv_tem_3_50" ctype="newsItemContentBind" class="smartRecpt esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="all" daxis="All" isdeletable="True" style="min-height: 89px; width: 1102px; left: 50px; top: 707px;z-index:4;">
                <div class="yibuFrameContent tem_3_50  newsItemContentBind_Style1  " style="overflow:visible;;">
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
                  <div id="tem_3_50_txt" class="w-detailcontent">
                    <div class="w-detail">
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
                    var contentWidth = parseInt($('#smv_tem_3_50').css("width"));
                    ///长图自适应屏幕


                    $('#smv_tem_3_50 table').each(function() {
                      $(this).removeAttr("width");
                      if ($(this).width() > contentWidth) {
                        $(this).css("width", "100%");
                      }
                    });
                    var splitLength = $('#tem_3_50_txt').find("div").html().split("_ueditor_page_break_tag_");
                    if (splitLength.length > 1) {
                      pagination('tem_3_50_txt', "首页", "末页", "上一页", "下一页", function(hisHeight) {
                        if (typeof hisHeight == 'undefined') {
                          $('#smv_tem_3_50').smrecompute();
                        } else {
                          var tabContentHeight = $('#tem_3_50_txt').height();
                          $('#smv_tem_3_50').smrecompute("recomputeTo", [tabContentHeight, hisHeight]);
                        }
                        $('#smv_tem_3_50 img').each(function() {
                          var src = $(this).attr("src");
                          if (typeof src != 'undefined' && src != "") {
                            $(this).attr("src", "");
                            $(this)[0].onload = function() {
                              $('#smv_tem_3_50').smrecompute();
                            };
                            $(this).attr("src", src);
                          }
                        });
                        showBigImg_tem_3_50();
                      });
                    } else {
                      $('#smv_tem_3_50 img').each(function() {
                        var src = $(this).attr("src");
                        if (typeof src != 'undefined' && src != "") {
                          $(this).attr("src", "");
                          $(this)[0].onload = function() {
                            var width = $(this).width();
                            if (width > contentWidth) {
                              $(this).css("cssText", 'max-width:' + contentWidth + 'px !important;height:auto !important;');
                            }
                            $('#smv_tem_3_50').smrecompute();
                          };
                          $(this).attr("src", src);
                        }
                      });
                      showBigImg_tem_3_50();
                    }
                    xwezhan.cssUeditorTale();
                  });

                  function showBigImg_tem_3_50() {
                    if (false) {
                      var bigImageArray = [];
                      $('#smv_tem_3_50 img').each(function() {
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
              <div id="smv_tem_4_55" ctype="newsItemCreatedDatetimeBind" class="esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 12px; width: 123px; left: 416px; top: 667px;z-index:5;">
                <div class="yibuFrameContent tem_4_55  newsItemCreatedDatetimeBind_Style1  " style="overflow:visible;;">
                  <!--product createtime-->
                  <div class="w-createtime"><span class="w-createtime-item w-createtime-caption"></span><span class="w-createtime-item w-createtime-date">2020-03-09</span> <span class="w-createtime-item w-createtime-time">14:30</span></div>
                  <!--/product createtime-->
                </div>
              </div>
              <div id="smv_tem_5_14" ctype="newsItemHitsBind" class="esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="False" pvid="" tareaId="" re-direction="x" daxis="All" isdeletable="True" style="height: 26px; width: 103px; left: 671px; top: 660px;z-index:6;">
                <div class="yibuFrameContent tem_5_14  newsItemHitsBind_Style1  " style="overflow:visible;;">
                  <!--product pageviews   控制图标隐藏-->
                  <div class="w-pageviews"><i class="w-viewsicon mw-iconfont ">ꄘ</i><span class="w-pageviews-caption">浏览量：</span><span class="w-pageviews-num">0</span></div>
                  <!--/product pageviews-->
                </div>
              </div>
              <div id="smv_tem_9_48" ctype="slideset" class="esmartMargin smartAbs " cpid="1133604" cstyle="Style1" ccolor="Item0" areaId="" isContainer="True" pvid="" tareaId="" re-direction="y" daxis="Y" isdeletable="True" style="height: 614px; width: 1200px; left: 0px; top: -105px;z-index:0;">
                <div class="yibuFrameContent tem_9_48  slideset_Style1  " style="overflow:visible;;">
                  <!--w-slide-->
                  <div id="lider_smv_tem_9_48_wrapper">
                    <div class="w-slide" id="slider_smv_tem_9_48">
                      <div class="w-slide-inner" data-u="slides">
                        <div class="content-box" data-area="Area1">
                          <div id="smc_Area1" cid="tem_9_48" class="smAreaC slideset_AreaC">
                          </div>
                          <div class="content-box-inner" style="background-image:url(//ntemimg.wezhan.cn/contents/sitefiles2001/10007281/images/-15068.jpg);background-position:50% 50%;background-repeat:no-repeat;background-size: cover;background-color:#ffffff;opacity:1"></div>
                        </div>
                      </div>
                      <!-- Bullet Navigator -->
                      <div data-u="navigator" class="w-slide-btn-box  f-hide " data-autocenter="1">
                        <!-- bullet navigator item prototype -->
                        <div class="w-slide-btn" data-u="prototype"></div>
                      </div>
                      <!-- 1Arrow Navigator -->
                      <span data-u="arrowleft" class="w-slide-arrowl  slideArrow  " data-autocenter="2" id="left_tem_9_48">
                        <i class="w-itemicon mw-iconfont">&#xb133;</i>
                      </span>
                      <span data-u="arrowright" class="w-slide-arrowr slideArrow " data-autocenter="2" id="right_tem_9_48">
                        <i class="w-itemicon mw-iconfont">&#xb132;</i>
                      </span>
                    </div>
                  </div>
                  <!--/w-slide-->
                  <script type="text/javascript">
                  var jssorCache_tem_9_48 = {
                    CtrlId: "tem_9_48",
                    SliderId: "slider_smv_tem_9_48",
                    Html: $("#slider_smv_tem_9_48")[0].outerHTML,
                  };
                  var slide_tem_9_48;
                  var slideAnimation_tem_9_48 = function(slideIndex, fromIndex) {
                    var $slideWrapper = $("#slider_smv_tem_9_48 .w-slide-inner:last");
                    var $fromSlide = $slideWrapper.find(".content-box:eq(" + fromIndex + ")");
                    var $curSlide = $slideWrapper.find(".content-box:eq(" + slideIndex + ")");
                    var $nextSlide = $slideWrapper.find(".content-box:eq(" + (slideIndex + 1) + ")");
                    $("#smv_tem_9_48").attr("selectArea", $curSlide.attr("data-area"));

                    $slideWrapper.find(".animated").smanimate("stop");
                    $fromSlide.find(".animated").smanimate("stop");
                    $curSlide.find(".animated").smanimate("stop");
                    $nextSlide.find(".animated").smanimate("stop");
                    $("#switch_tem_9_48 .page").html(slideIndex + 1);
                    // debugger
                    $curSlide.find(".animated").smanimate("replay");
                    return false;
                  }
                  tem_9_48_page = 1;
                  tem_9_48_sliderset3_init = function() {
                    var jssor_1_options_tem_9_48 = {
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
                    var slide = slide_tem_9_48 = new $JssorSlider$("slider_smv_tem_9_48", jssor_1_options_tem_9_48);
                    if (typeof(LayoutConverter) !== "undefined") {
                      jssorCache_tem_9_48.JssorOpt = jssor_1_options_tem_9_48,
                        jssorCache_tem_9_48.Jssor = slide;
                    }
                    $('#smv_tem_9_48').data('jssor_slide', slide);

                    //resize游览器的时候触发自动缩放幻灯秀
                    //幻灯栏目自动或手动切换时触发的事件
                    slide.$On($JssorSlider$.$EVT_PARK, slideAnimation_tem_9_48);
                    //切换栏点击事件
                    $("#switch_tem_9_48 .left").unbind("click").click(function() {
                      if (tem_9_48_page == 1) {
                        tem_9_48_page = 1;
                      } else {
                        tem_9_48_page = tem_9_48_page - 1;
                      }
                      $("#switch_tem_9_48 .page").html(tem_9_48_page);
                      slide.$Prev();
                      return false;
                    });
                    $("#switch_tem_9_48 .right").unbind("click").click(function() {
                      if (tem_9_48_page == 1) {
                        tem_9_48_page = 1;
                      } else {
                        tem_9_48_page = tem_9_48_page + 1;
                      }
                      $("#switch_tem_9_48 .page").html(tem_9_48_page);
                      slide.$Next();
                      return false;
                    });
                  };


                  $(function() {

                    var jssorCopyTmp = document.getElementById('slider_smv_tem_9_48').cloneNode(true);

                    var $jssorIntt = function(skipInit) {

                      //获取幻灯显示动画类型
                      var $this = $('#slider_smv_tem_9_48');
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
                        tem_9_48_sliderset3_init();
                      }


                      var areaId = $("#smv_tem_9_48").attr("tareaid");
                      if (areaId == "") {
                        var mainWidth = $("#smv_Main").width();
                        $("#smv_tem_9_48 .slideset_AreaC").css({
                          "width": mainWidth + "px",
                          "position": "relative",
                          "margin": "0 auto"
                        });
                      } else {
                        var controlWidth = $("#smv_tem_9_48").width();
                        $("#smv_tem_9_48 .slideset_AreaC").css({
                          "width": controlWidth + "px",
                          "position": "relative",
                          "margin": "0 auto"
                        });
                      }
                      $("#smv_tem_9_48").attr("selectArea", "Area1");

                      var arrowHeight = $('#slider_smv_tem_9_48 .w-slide-arrowl').eq(-1).outerHeight();
                      var arrowTop = (18 - arrowHeight) / 2;
                      $('#slider_smv_tem_9_48 .w-slide-arrowl').eq(-1).css('top', arrowTop);
                      $('#slider_smv_tem_9_48 .w-slide-arrowr').eq(-1).css('top', arrowTop);
                    }
                    $jssorIntt();


                    var ctime = null;

                    function ScaleSlider() {
                      slide_tem_9_48.$Off($JssorSlider$.$EVT_PARK, slideAnimation_tem_9_48);
                      if (ctime) {
                        clearTimeout(ctime);
                        ctime = null;
                      }
                      ctime = setTimeout(function() {
                        var inst = $('#slider_smv_tem_9_48');
                        var orginWidth = inst.width();
                        if (orginWidth == $(window).width()) return;
                        var inst_parent = inst.parent();
                        inst.remove()
                        inst_parent.append(jssorCopyTmp.cloneNode(true));

                        inst_parent.find('.animated').smanimate().stop();
                        //$('.smartRecpt').smrecompute()

                        $jssorIntt();
                        ctime = null;
                      }, 200);

                    }
                    if (typeof(LayoutConverter) !== "undefined") {
                      jssorCache_tem_9_48.ResizeFunc = $jssorIntt;
                      LayoutConverter.CtrlJsVariableList.push(jssorCache_tem_9_48);
                    } else {
                      $Jssor$.$CancelEvent(window, "resize", ScaleSlider);
                      $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    }



                  });
                  </script>
                </div>
              </div>
            </div>
          </div><input type='hidden' name='__RequestVerificationToken' id='token__RequestVerificationToken' value='Fj0npdcewh7_LkQrYhoMFLCe-ozRXKGBKa3zc-B_gAfG6Rw_T4v7QtC_oB7mAXi0O0j78gR8MU5p7oTcvliKWlGH1PsnxocdYRJtm98M-6qZJmIS8pM_pZeoXnWM1Vmm0' />
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
    setCurrentPageTitle('第四届宁波国际微电影节入围作品名单！', 2);
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