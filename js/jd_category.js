$(function(){
	
	$("#slide").slide({titCell:".slide-controls span",mainCell:".slide-items",titOnClassName:"curr",autoPlay:true});
	
	$("#bargain .cat-tab-item").mouseenter(function(){
		$("#bargain .cat-tab-item").removeClass("curr");
		$(this).addClass("curr");
	})
	
  setInterval(function(){
      $(".endtime").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
		var show_day =  obj.attr('showday');
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + 28800000;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH_show=Math.floor(nMS/(1000*60*60) % 24);
        var myH=Math.floor(nMS/(1000*60*60));
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
		var a = myH+myM+myS+myMS;
        if(a>0){
			if(show_day == 'show')
			{
		
				var str = '<span>还剩：</span><span class="num">'+myD+'</span>天<span class="num">'+myH_show+'</span>小时<span class="num">'+myM+'</span>分<span class="num">'+myS+'</span>秒'
				//var str = '还剩<strong class="tcd-d">'+myD+'</strong>天<strong class="tcd-h">'+myH_show+'</strong>小时<strong class="tcd-m">'+myM+'</strong>分<strong class="tcd-s">'+myS+'</strong>秒';
			}
			else
			{
		
				var str = '剩余<b>'+myH+'</b>小时<b>'+myM+'</b>分<b>'+myS+'</b>秒';
			}
        }else{
			var str = "已结束！";	
		}
		obj.html(str);
      });
    }, 100);
	
	$(".scroll").slide({mainCell:".con ul",autoPage:true,effect:"left",vis:9,scroll:6,prevCell:"#prev1",nextCell:"#next1",pnLoop:false});
	
	$(".top1 .tab li").mouseenter(function(){
		$(this).parent().find("li").removeClass("curr");
		$(this).addClass("curr");
		var a = $(this).parent().find("li").index($(this));
		$(this).parents(".top1").find(".tabcon").addClass("hide");
		$(this).parents(".top1").find(".tabcon").eq(a).removeClass("hide");
	})
	
	$("#sortlist_cat .item h3").click(function(){
		if($(this).parent().hasClass("current"))
		{
			$(this).parent().removeClass("current")
		}
		else
		{
			$(this).parent().addClass("current")
		}
	})
	
	
	var propAttrs=$("#select .prop-attrs"),attrExtra=$("#moreProp .attr-extra"),length=propAttrs.length;
	var zhi=[];
	propAttrs.eq(3).nextAll().find(".a-key font").each(function(){
		var z=$(this).text();
		zhi.push(z);
	});
	zhi = zhi.join("，");
	function abc(){
		if(attrExtra.hasClass("open")){
			propAttrs.show();
			attrExtra.removeClass("open");
			$("#moreProp .attr-extra").html("<div>收起<b></b></div>");
		}else{
			propAttrs.eq(3).nextAll().hide();
			attrExtra.addClass("open");
			$("#moreProp .attr-extra").html("<div>更多选项（"+zhi+"等）<b></b></div>");
		}
	}
	if(length > 4){
		abc();
		propAttrs.eq(3).nextAll().hide();
	}else{
		attrExtra.remove();
	}
	
	$("#moreProp .attr-extra").click(function(){
		abc();
	})
	
	//
	$(".crumbsBar .menuDrop").hover(function(){
		$(this).addClass("on");
	},function(){
		$(this).removeClass("on");
	})
	
	$("#sortlist .item").hover(function(){
		$(this).addClass("cur");
	},function(){
		$(this).removeClass("cur");
	});
	
	////  2015京东顶级分类页js特效
	//
	$("#bargain .mc li").hover(function(){
		$(this).find(".p-img").stop(true,false).animate({right:0},400);
	},function(){
		$(this).find(".p-img").animate({right:-40},500);
	});
	//
	$(".showAd li").hover(function(){
		$(this).find(".g_pic").stop(true,false).animate({marginRight:0},300);
	},function(){
		$(this).find(".g_pic").animate({marginRight:-10},300);
	});
	//
	jQuery(".slideBox").slide({mainCell:".bd ul",effect:"fold",interTime:6000,autoPlay:true});//图片透明切换
	jQuery(".picScrollLeft").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",scroll:3,vis:3});//图片左右不循环滚动
	//
	$(".backpanel").remove();
	var sidePanel = $("#sidepanel"),bodyW=$(window).width(),w=$(".w").width();
	sidePanel.find(".foll").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");
	});
	var rightZhi=(bodyW-w)/2-25;
	sidePanel.css({right:rightZhi});
})