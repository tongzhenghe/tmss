/*******init start*****/
var httpUrl="http://"+location.hostname;
/*******init end*****/

/*****宽窄屏幕自适应****/
if(screen.width > 1210 && $(window).width() > 1210)
{
	$("body").addClass("root61");
}
$(function(){
	/*头部客户服务鼠标移入效果*/
	$(".fr .menu").mouseenter(function(){
		$(this).addClass("hover");
	})
	
	$(".fr .menu").mouseleave(function(){
		$(this).removeClass("hover");
	})
	
	/*头部我的京东鼠标移入效果*/
	$("#my360buy-2013").mouseenter(function(){
		$(this).find("dl").addClass("hover");
	})
	
	$("#my360buy-2013").mouseleave(function(){
		$(this).find("dl").removeClass("hover");
	})
	
	/*头部购物车鼠标移入效果*/
	$(".settleup-2013").mouseenter(function(){
		$(this).find("dl").addClass("hover");
	})
	
	$(".settleup-2013").mouseleave(function(){
		$(this).find("dl").removeClass("hover");
	})
	
	/*头部导航分类鼠标移入效果*/
	$("#_JD_ALLSORT .item").mouseenter(function(){
		$(this).addClass("hover");
	})
	
	$("#_JD_ALLSORT .item").mouseleave(function(){
		$(this).removeClass("hover");
	})
	
	$(".no_index").mouseenter(function(){
		$(this).addClass("hover");
	})
	
	$(".no_index").mouseleave(function(){
		$(this).removeClass("hover");
	})
	
	var a = $(".backpanel").offset();
	var b = ($(window).width()-$(".backpanel").width())/2;

	var c = Math.round(b)+$(".backpanel").width();
	
	$(".backpanel-inner").css("left",c);
	
})


/*收藏夹功能*/
function addToFavorite() {
    var c;
    var a = /^http{1}s{0,1}:\/\/([a-z0-9_\\-]+\.)+(yihaodian|1mall|111|yhd){1}\.(com|com\.cn){1}\?(.+)+$/;
    if (a.test(httpUrl)) {
        c = "&ref=favorite"
    } else {
        c = "?ref=favorite"
    }
    var d = httpUrl + c;
    if ('undefined' == typeof (document.body.style.maxHeight)) {
        d = httpUrl
    }
    try {
        if (document.all) {
            window.external.AddFavorite(d, favorite)
        } else {
            try {
                window.sidebar.addPanel(favorite, d, "")
            } catch(b) {
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
            }
        }
    } catch(b) {
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
    }
}
