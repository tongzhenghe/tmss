/*******init start*****/
var httpUrl="http://"+location.hostname;
/*******init end*****/

$(function(){
	
	$(".flow_fittings").slide({mainCell:".bd ul",effect:"leftLoop",vis:6,scroll:6});
	
	$(".flow_collection").slide({mainCell:".bd ul",effect:"leftLoop",vis:6,scroll:6});
	
	$("#toggle-checkboxes").click(function(){
		
		var a = $("#product-list [type='checkbox']");
		
		if($(this).is(":checked"))
		{
			a.each(function(i){
				$(this).prop("checked",true)
			})
		}
		else
		{
			a.each(function(i){
				$(this).prop("checked",false);
			})
		}
	})	

	$("#product-list [type='checkbox']").click(function(){
		var a = 0;
		$("#product-list [type='checkbox']").each(function(){
			if(!$(this).is(':checked'))
			{
				a++;
			}
			if(a > 0)
			{
				$("#toggle-checkboxes").prop("checked",false);
			}
			else
			{
				$("#toggle-checkboxes").prop("checked",true);
			}
		})
	})
		
	$("#remove-batch").click(function(){
		var drop_arr = new Array();
		$("#product-list input:checked").each(function(i){
			$(this).parents(".item").remove();
			drop_arr[i] = $(this).parents(".item").find("input[name='rec_id']").val();
		})
		Ajax.call('flow.php?step=ajax_drop_goods', 'drop_arr=' + drop_arr, drop_goods_response, 'POST','JSON');
	})

})

	function drop_goods_response(result)
	{
		if(result.err_no == 1)
		{
			alert("程序内部错误，删除失败！");	
		}
		else
		{
			$('#totalSkuPrice,#finalPrice').html(result.total_price); //更新合计
			$('#selectedCount').html(result.total_goods_count);//更新购物车数量
			$('#totalRePrice').html("- "+result.total_saving)
		}
	}
		
	/********迷你购物车加减********/
	function flowClickCartNum(a,b)
	{
		var b = parseInt(b);
		var c = $("#goods_number_"+a);
		var d = parseInt(c.val());
		if(d < 1 || !$.isNumeric(d))
		{
			alert("请输入正确的商品数量");	
			e = 1;
		}
		
		if(b == -1)		
		{
			if(d == 1)
			{
				alert("购买数量不能小于1件");	
			}
			else
			{
				e = d + b;
			}
		}
		else
		{
			e = d + b;
		}
		
		flow_change_goods_number(a,e);
	}
	
	
	function flow_change_goods_number(rec_id, goods_number)
	{     
		Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number, flow_change_goods_number_response, 'POST','JSON');
	}
	function flow_change_goods_number_response(result)
	{              
	
		if (result.error == 0)
		{
			var rec_id = result.rec_id;
			
			$('#goods_number_' +rec_id).val(result.goods_number);//更新数量	
			$('#total_items_' +rec_id).html(result.goods_subtotal);//更新小计	
			$('#totalSkuPrice,#finalPrice').html(result.total_price); //更新合计
			$('#selectedCount').html(result.total_goods_count);//更新购物车数量
			$('#totalRePrice').html("- "+result.total_saving)

		}
		else if (result.message != '')
		{
			alert(result.message);                
		}
	}