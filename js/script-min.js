function category_reveal(){$(".widget_mycategoryorder li:gt(4)").addClass("extraCats").hide(),$(".widget_mycategoryorder .widget-title").append('<a class="more" href="#">Show me all of them</a><a class="less" href="#">Show me just a few</a>').click(function(e){e.preventDefault(),$(this).parent().toggleClass("expanded"),$(".extraCats").slideToggle("slow")})}function swapContent(e,a,n){return c=n==e?a:e,c}function screen_change(){$("#menulink").length}function screen_size(){}$(document).ready(function(){$("body").on("click","#menulink",function(e){e.preventDefault(),$("#access").toggleClass("access-open"),$(this).toggleClass("access-open")}),Modernizr.mq("only all and (max-width: 960px)")?$("#menu-mainnav").append('<li id="back-matter"><a href="#sidebar">Back&nbsp;Matter</a></li>'):$("#back-matter").remove(),category_reveal(),$(window).resize(function(){screen_change()})});