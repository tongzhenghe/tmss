<div class="footer">
	<ul>
        <li><a href="<?php echo url('index/index');?>">首页</a></li>
        <li><a href="<?php echo url('user/index');?>">个人中心</a></li>
        <li><a href="<?php echo url('flow/cart');?>">购物车</a></li>
        <li><a href="<?php echo url('groupbuy/index');?>">团购</a></li>
    </ul>
    <p><?php echo $this->_var['copyright']; ?></p>
    <div align="center"><a href="http://www.ectouch.cn" target="_blank"><img src="__TPL__/images/copyright.gif" ></a></div>
</div>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 10;"><i class="fa fa-angle"></i></a>
<a class="scrollUp" href="<?php echo url('flow/cart');?>" style="position: fixed; z-index: 10; left:.25em;right:auto;"><i class="fa fa-angle"></i><span class="flow_cart_num"></span></a>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.json.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/common.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.more.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/utils.js" ></script> 
<script src="__TPL__/js/TouchSlide.1.1.js"></script> 
<script src="__TPL__/js/ectouch.js"></script> 
<script src="__TPL__/js/simple-inheritance.min.js"></script> 
<script src="__TPL__/js/code-photoswipe-1.0.11.min.js"></script> 
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script> 
<script src="__TPL__/js/jquery.scrollUp.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/validform.js" ></script> 
<script language="javascript">
	/*banner滚动图片*/
		TouchSlide({
			slideCell : "#focus",
			titCell : ".hd ul", // 开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell : ".bd ul",
			effect : "left",
			autoPlay : true, // 自动播放
			autoPage : true, // 自动分页
			switchLoad : "_src" // 切换加载，真实图片路径为"_src"
		});
	
	//首页菜单下特卖广告
	$(function(){
		var a=$(".gridRow li");
		a.each(function(i){
			a.eq(i*2-1).addClass("on");
		});
	});
</script> 
