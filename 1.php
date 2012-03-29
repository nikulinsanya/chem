<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="gettaxi">
  <meta name="author" content="gettaxi">
  <title>GetTaxi Lite</title>

  <!-- CSS: implied media=all -->
  <%= stylesheet_link_tag '/lite/css/static.css',  :media => "screen, projection" %>
  <!-- end CSS-->
  <link rel="apple-touch-icon" href="/lite/apple-touch-icon.png"/>
</head>

<!--<body>-->
<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
<div id="content">
  <div id="header">
      <div id="page_description">
        <img src="/lite/img/marker/page_description.png" border=0 alt=""/>
      </div>
      <div id="logo">
        <img src="/lite/img/marker/logo.png" border=0 alt=""/>
      </div>
    <!--<img src="/lite/img/widget/static-header.png" width="960px;"/>-->
  </div>
  <div class="info">
    <%=I18n.t 'lite.marker.top_info_text' %>
  </div>
  <div id="main">
    <div class="content_line">
        <div id="widget-container">
            <iframe frameborder="0" height="465px" scrolling="no" src="/lite/index" width="320px"></iframe>
        </div>
        <div id="banner-container" onmousedown="return false;">
          <object id="/lite/img/widget/banner_texi_625x442a.swf" align="middle" width="650px" height="460px">
            <param name="movie" value="/lite/img/widget/banner_texi_625x442a.swf"/>
            <param name="wmode" value="transparent" />
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="/lite/img/widget/banner_texi_625x442a.swf" width="650px" height="460px">
              <param name="movie" value="/lite/img/widget/banner_texi_625x442a.swf"/>
              <param name="wmode" value="transparent" />
              <!--<![endif]-->
              <a href="http://www.adobe.com/go/getflash">
                <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
              </a>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object>
        </div>
    </div>
    <div class="content_line">
        <div id="left-bottom" class="block">
             <div class="block_header">
               <%=I18n.t 'lite.marker.features_header_text' %>
             </div>
             <div class="block_content">
               <div class="items_line">

                    <div class="item_block" >
                        <div class="item_block_header"><%=I18n.t 'lite.marker.feature_1_header' %></div>
                        <div class="item_block_content">
                          <%=I18n.t 'lite.marker.feature_1_text' %>
                        </div>
                    </div>
                    <div class="item_block" >
                         <div class="item_block_header"><%=I18n.t 'lite.marker.feature_2_header' %></div>
                         <div class="item_block_content">
                           <%=I18n.t 'lite.marker.feature_2_text' %>
                         </div>
                    </div>
               </div>

               <div class="items_line">

                 <div class="item_block" >
                   <div class="item_block_header"><%=I18n.t 'lite.marker.feature_3_header' %></div>
                   <div class="item_block_content">
                     <%=I18n.t 'lite.marker.feature_3_text' %>
                   </div>
                 </div>
                 <div class="item_block" >
                   <div class="item_block_header"><%=I18n.t 'lite.marker.feature_4_header' %></div>
                   <div class="item_block_content">
                     <%=I18n.t 'lite.marker.feature_4_text' %>
                   </div>
                 </div>
               </div>

               <div class="items_line">

                 <div class="item_block" >
                   <div class="item_block_header"><%=I18n.t 'lite.marker.feature_5_header' %></div>
                   <div class="item_block_content">
                     <%=I18n.t 'lite.marker.feature_5_text' %>
                   </div>
                 </div>
                 <div class="item_block" >
                   <div class="item_block_header"><%=I18n.t 'lite.marker.feature_6_header' %></div>
                   <div class="item_block_content">
                     <%=I18n.t 'lite.marker.feature_6_text' %>
                   </div>
                 </div>
               </div>

             </div>
        </div>
        <div id="right-bottom" class="block">
              <div class="block_header">
                <%=I18n.t 'lite.marker.ride_free_operation_header' %>
              </div>
              <div class="block_content">
                <div class="odd"><%=I18n.t 'lite.marker.ride_operation_text1' %></div>
                <div class="even"><%=I18n.t 'lite.marker.ride_operation_text2' %></div>
                <div class="odd"><%=I18n.t 'lite.marker.ride_operation_text3' %></div>

              </div>
        </div>
    </div>

  </div>
  <div id="footer">
    <div>
      <a href="#" alt="" class="mobile_link" id="apple"></a>
      <a href="#" alt="" class="mobile_link" id="bb"></a>
      <a href="#" alt="" class="mobile_link" id="android"></a>
      <span style="float: left; line-height: 34px; font-size: 18px; font-weight: bold;">
        <%=I18n.t 'lite.marker.download_app_text' %>
      </span>
    </div>

  </div>
</div>

  <!-- scripts concatenated and minified via ant build script-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="lite/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- end scripts-->

</body>
</html>