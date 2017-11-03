/*******init start*****/
var httpUrl="http://"+location.hostname;
/*******init end*****/
$(function(){

	$("#recommend .suits ul").each(function(){
		$(this).width($(this).find("li").outerWidth()*$(this).find("li").size())
	})
	
	$("#recommend .tab li").click(function(){
		$("#recommend .tab li").removeClass("curr");
		$(this).addClass("curr");	
		var i = $("#recommend .tab li").index($(this));
		$("#recommend .mc").hide();
		$("#recommend .mc").eq(i).show();
	})
	
	$(".spec_list_box .item").click(function(){
		$(this).parent().find(".item").removeClass("selected");
		$(this).addClass("selected");
		$(this).parent().find("input:radio").prop("checked",false);
		$(this).find("input:radio").prop("checked",true);
		changePrice();
	})
	
	$(".yb-item-cat").mouseenter(function(){
		$(this).addClass("yb-item-hover");	
	})
	
	$(".yb-item-cat").mouseleave(function(){
		$(this).removeClass("yb-item-hover");	
	})
	
	$("#spec-list").slide({mainCell:".spec-items ul",effect:"left",autoPage:true,vis:5,pnLoop:false});
	
	$("#ranklist .tab li").mouseenter(function(){
		var i = $("#ranklist .tab li").index($(this));
		$("#ranklist .tab li").removeClass("curr");
		$(this).addClass("curr");
		$("#ranklist .tabcon").addClass("hide");
		$("#ranklist .tabcon").eq(i).removeClass("hide");
	})
	
	$("#product-detail .tab li").click(function(){
		$("#product-detail .tab li").removeClass("curr");
		$(this).addClass("curr");
		var a = $(this).attr("id");	
		if(a != 'p-con-comm')
		{
			$("#product-detail .mc").addClass("hide");
			$("#"+a+"-con").removeClass("hide");
		}
		else
		{
			$("#product-detail .mc").addClass("hide");
		}
	})
	
	$(".open_comment").click(function(){
		easyDialog.open({
			container : 'comment_show'
		});
	})
	
	$(".thickclose,.comment_btns").click(function(){
		easyDialog.close();
	})

	$("#maybe-like .mc").slide({mainCell:"#guess-scroll ul",effect:"leftLoop",vis:5,scroll:5});
	
	$(".share-ft").click(function(){
		if($(this).hasClass("share-ft-open"))
		{
			$(this).removeClass("share-ft-open");
			$(this).parents("#share-list").removeClass("share-list-open");	
			$(this).parents("#share-list").find(".share-list-item").removeClass("share-list-item-all");
		}
		else
		{
			$(this).addClass("share-ft-open");	
			$(this).parents("#share-list").addClass("share-list-open");
			$(this).parents("#share-list").find(".share-list-item").addClass("share-list-item-all");
		}
	})
})

function setAmount(i)
{
	var a = $("#buy-num").val();

	if($.isNumeric(a))
	{
		if(i == "add")
		{
			a++;
			$("#buy-num").val(a);
		}
		else if(i == "reduce")
		{
			a--;
			if(a >= 1)
			{
				$("#buy-num").val(a);
			}
			else
			{
				$("#buy-num").val(1);
				alert("商品数量不能少于1件~");	
			}
		}
		else
		{
			if(a < 1)
			{
				$("#buy-num").val(1);
				alert("商品数量不能少于1件~");		
			}
		}
	}
	else
	{
		$("#buy-num").val(1);
		alert("商品数量必须为数字~");
	}
	
	changePrice();
}