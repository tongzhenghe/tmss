$(function(){
	/*首页顶部幻灯片切换*/
	if(screen.width > 1210 && $(window).width() > 1210)
	{
		$("#slide").slide({titCell:".slide-controls-w span",mainCell:".slide-items-w",effect:"fold",titOnClassName:"curr",interTime:5000,autoPlay:true});
		$("#slide").hover(function(){$(this).find(".indexAd_qh").show();},function(){$(this).find(".indexAd_qh").hide()});
	}
	else
	{
		$("#slide").slide({titCell:".slide-controls-s span",mainCell:".slide-items-s",effect:"fold",titOnClassName:"curr",interTime:5000,autoPlay:true});
		$("#slide").hover(function(){$(this).find(".indexAd_qh").show();},function(){$(this).find(".indexAd_qh").hide()});
	}
	
	$(".catGoodsBox").each(function(i, e) {
		i++;
       	$(this).find(".cat_tit").html(i+"F");
    });
	/*首页顶部幻灯片下方左右滚动切换*/
	$("#mscroll").slide({prevCell:"#mscroll-ctrl-prev",nextCell:"#mscroll-ctrl-next",effect:"leftLoop",mainCell:"#mscroll-list ul",vis:4,scroll:4});
	$("#mscroll").hover(function(){$(this).find(".ctrl").show();},function(){$(this).find(".ctrl").hide();})
	
	
	/*活动发货单订单投票切换*/
	$("#txtMarquee-top").slide({mainCell:"#brtup1ul",autoPlay:true,effect:"topMarquee",vis:3,interTime:50});
	
	$("#virtuals-2014").slide({titCell:".mt li",mainCell:".mc",titOnClassName:"current"});
	
	/* 猜你喜欢切换 */
	jQuery(".guessLike").slide({delayTime:0});
	$(".guessLike ul").each(function(){
		$(this).find("li:first .pInfo").css({borderLeft:0})
	});	
	
	
	/*分类下商品分类切换效果及幻灯片效果*/
	jQuery(".catGoodsSlide .bdSlider").slide({titCell:".hd_Slider li",mainCell:".bd_Slider ul",prevCell:".prev_bd",nextCell:".next_bd",effect:"leftLoop"});
	jQuery(".catGoodsSlide").slide({titCell:".hd_box li",mainCell:".bd_box",delayTime:0});
	$(".bdSlider").hover(function(){$(this).find(".bdSliderQh").show();},function(){$(this).find(".bdSliderQh").hide();});
	$(".hd_box").each(function(){$(this).find("li:last i").hide();});
	//
	$(".catGoodsBox").each(function(){
		var length=$(this).find(".Category li").length;
		if( length == 2 ){
			$(this).find(".Category ul").addClass("Category02");
		}else if( length > 2 && length < 6 ){
			$(this).find(".Category ul").addClass("Category03");
			$(this).find(".Category li").eq(2).nextAll().remove();
		}else if( length > 5 ){
			$(this).find(".Category li").eq(5).nextAll().remove();
		};
	});

	/*分类下商品分类内容切换效果*/
	$(".cat_goods").each(function(){
		var a = $(this).val();
		$("#cat_slide_"+a).slide({titCell:".slide-controls span",effect:"leftLoop",delayTime:200,mainCell:".slide-items",titOnClassName:"curr"});
		$("#brand_slide_"+a).slide({titCell:".slide-controls span",effect:"leftLoop",delayTime:200,mainCell:".slide-items",titOnClassName:"curr"});
	})
	
	
	$("#share").slide({mainCell:".mc ul",autoPage:true,effect:"top",autoPlay:true,vis:2});
	
	$("#index_comment").slide({mainCell:".mc ul",autoPage:true,effect:"top",autoPlay:true,vis:2});
	
	/* 商品晒单上下滚动效果 */
	jQuery(".picScrollTop").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"topLoop",autoPlay:true,vis:3,delayTime:700,interTime:3000});
	$("#share2 .bd li").each(function(){
		var length=$(this).find(".pDetail .text").text().length;
		if( length > 15 ){
			var text=$(this).find(".pDetail .text").text().substring(0,15);
			$(this).find(".pDetail .text").text(text+"……");
		};
	});

})