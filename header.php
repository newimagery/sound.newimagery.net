<script type="text/javascript">
  
function IsPC(){    
     var userAgentInfo = navigator.userAgent;  
     var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");    
     var flag = true;    
     for (var v = 0; v < Agents.length; v++) {    
         if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }    
     }    
     return flag;    
  }
  if(!IsPC()){
    window.location.href = '/mobile'
  }
</script>
 <div class=" header" cpid="1133606" id="smv_Area0" style="width: 1200px; height: 99px;  position: relative; margin: 0 auto">
        <div id="smv_tem_1_27" ctype="banner" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="True" pvid="" tareaId="Area0" re-direction="y" daxis="Y" isdeletable="True" style="height: 99px; width: 100%; left: 0px; top: 0px;z-index:2;">
          <div class="yibuFrameContent tem_1_27  banner_Style1  " style="overflow:visible;;">
            <div class="fullcolumn-inner smAreaC" id="smc_Area0" cid="tem_1_27" style="width:1200px">
              <div id="smv_tem_3_46" ctype="nav" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style3" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_1_27" tareaId="Area0" re-direction="all" daxis="All" isdeletable="True" style="height: 47px; width: 638px; left: 582px; top: 27px;z-index:3;">
                <div class="yibuFrameContent tem_3_46  nav_Style3  " style="overflow:visible;;">
                  <div id="nav_tem_3_46" class="nav_pc_t_3">
                    <ul class="w-nav" navstyle="style3">
                      <li class="sliding-box" style="left:-0px;top:-0px">
                        <div class="sliding" style="width:20%;"></div>
                      </li>
                      <li class="w-nav-inner" style="height:47px;line-height:47px;width:20%;">
                        <div class="w-nav-item">
                          <a href="/" target="_self" class="w-nav-item-link">
                            <span class="mw-iconfont"></span>
                            <span class="w-link-txt">首页</span>
                          </a>
                          <div class="sliding" style="width:20%;"></div>
                        </div>
                      </li>
                      <li class="w-nav-inner" style="height:47px;line-height:47px;width:20%;">
                        <div class="w-nav-item">
                          <a href="/cpzx.php" target="_self" class="w-nav-item-link">
                            <span class="mw-iconfont"></span>
                            <span class="w-link-txt">产品中心</span>
                          </a>
                          <div class="sliding" style="width:20%;"></div>
                        </div>
                      </li>
                      <li class="w-nav-inner" style="height:47px;line-height:47px;width:20%;">
                        <div class="w-nav-item">
                          <a href="/ywzp.php" target="_self" class="w-nav-item-link">
                            <span class="mw-iconfont"></span>
                            <span class="w-link-txt">以往作品</span>
                          </a>
                          <div class="sliding" style="width:20%;"></div>
                        </div>
                      </li>
                      <li class="w-nav-inner" style="height:47px;line-height:47px;width:20%;">
                        <div class="w-nav-item">
                          <a href="/tdcy.php" target="_self" class="w-nav-item-link">
                            <span class="mw-iconfont"></span>
                            <span class="w-link-txt">团队成员</span>
                          </a>
                          <div class="sliding" style="width:20%;"></div>
                        </div>
                      </li>
                      <li class="w-nav-inner" style="height:47px;line-height:47px;width:20%;">
                        <div class="w-nav-item">
                          <a href="/xwzx.php" target="_self" class="w-nav-item-link">
                            <span class="mw-iconfont"></span>
                            <span class="w-link-txt">新闻资讯</span>
                          </a>
                          <div class="sliding" style="width:20%;"></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <script>
                  $(function() {
                    $('#nav_tem_3_46').find('.w-subnav').hide();
                    var $this, item, itemAll, index, itemW, goTo;
                    $('#nav_tem_3_46').off('mouseenter').on('mouseenter', '.w-nav-inner', function() {

                      itemAll = $('#nav_tem_3_46').find('.w-subnav');
                      $this = $(this);
                      item = $this.find('.w-subnav');
                      index = $this.index() - 1;
                      itemW = $this.width();
                      goTo = itemW * index;
                      item.slideDown();
                      $('#nav_tem_3_46').find('.sliding-box .sliding').hide().show().stop().animate({
                        left: goTo
                      }, 200, "linear");
                    }).off('mouseleave').on('mouseleave', '.w-nav-inner', function() {
                      item = $(this).find('.w-subnav');
                      item.stop().slideUp();
                      $('#nav_tem_3_46').find('.sliding-box .sliding').stop().fadeOut(200);
                    });
                    SetNavSelectedStyle('nav_tem_3_46'); //选中当前导航
                  });
                  </script>
                </div>
              </div>
              <div id="smv_tem_10_42" ctype="logoimage" class="esmartMargin smartAbs " cpid="1133606" cstyle="Style1" ccolor="Item0" areaId="Area0" isContainer="False" pvid="tem_1_27" tareaId="Area0" re-direction="all" daxis="All" isdeletable="True" style="height: 89px; width: 305px; left: 7px; top: 6px;z-index:6;">
                <div class="yibuFrameContent tem_10_42  logoimage_Style1  " style="overflow:visible;;">
                  <div class="w-image-box" data-fillType="0" id="div_tem_10_42">
                    <a target="_self" href="">
                      <img src="static/contents/sitefiles2037/10185258/images/14189929.png" alt="" title="" id="img_smv_tem_10_42" style="width: 305px; height:89px;">
                    </a>
                  </div>
                  <script type="text/javascript">
                  $(function() {
                    InitImageSmv("tem_10_42", "305", "89", "0");
                  });
                  </script>
                </div>
              </div>
            </div>
            <div id="bannerWrap_tem_1_27" class="fullcolumn-outer" style="position: absolute; top: 0; bottom: 0;">
            </div>
            <script type="text/javascript">
            $(function() {
              var resize = function() {
                $("#smv_tem_1_27 >.yibuFrameContent>.fullcolumn-inner").width($("#smv_tem_1_27").parent().width());
                $('#bannerWrap_tem_1_27').fullScreen(function(t) {
                  if (VisitFromMobile()) {
                    t.css("min-width", t.parent().width())
                  }
                });
              }
              if (typeof(LayoutConverter) !== "undefined") {
                LayoutConverter.CtrlJsVariableList.push({
                  CtrlId: "tem_1_27",
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