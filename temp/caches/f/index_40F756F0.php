<?php exit;?>a:3:{s:8:"template";a:11:{i:0;s:51:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/index.dwt";i:1;s:71:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/page_header_index.lbi";i:2;s:62:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/index_ad.lbi";i:3;s:66:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/cat_articles.lbi";i:4;s:65:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/ad_position.lbi";i:5;s:67:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/invoice_query.lbi";i:6;s:65:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/order_query.lbi";i:7;s:63:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/vote_list.lbi";i:8;s:63:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/cat_goods.lbi";i:9;s:64:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/help_index.lbi";i:10;s:65:"D:/phpStudyB/WWW/TMSS/themes/jingdong2015/library/page_footer.lbi";}s:7:"expires";i:1509433428;s:8:"maketime";i:1509429828;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="网上购物,网上商城,手机,笔记本,电脑,MP3,CD,VCD,DV,相机,数码,配件,手表,存储卡,京东商城" />
<meta name="Description" content="京东网上商城-lfmartian淘宝店铺" />
<title>京东网上商城-lfmartian淘宝店铺</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/jingdong2015/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|京东网上商城-lfmartian淘宝店铺" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script></head>
<body>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/jd_common.js"></script><script type="text/javascript" src="js/easydialog.min.js"></script><script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script><script type="text/javascript" src="js/public.js"></script><div id="shortcut-2013">
	<div class="w">
        
	    <ul class="fr lh">
	        <li class="fore1 ld"><b></b>
                <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a>
            </li>
	    </ul>
    	<ul class="fr lh">
        	554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca            <li class="fore3 ld menu myJd" id="app-jd">
            	<div class="dt"><span class="outline"></span><span class="blank"></span><s></s><a href="#" target="_blank">我的汤姆</a><b></b></div>
                <div class="dd myJdCon">
                	<div class="userInfo">
                    	<div class="uPic"><a href=""><img src="themes/jingdong2015/images/no-img_mid_.jpg"></a></div>
                        <div class="uName"><a href="">你好，请登录</a></div>
                    </div>
                    <div class="otherList">
                        <p><a target="_blank" href="user.php?act=address_list">收货地址</a></p>
                        <p><a target="_blank" href="user.php?act=message_list">我的留言</a></p>
                        <p><a target="_blank" href="user.php?act=booking_list">缺货登记</a></p>
                        <p><a target="_blank" href="user.php?act=comment_list">我的评论</a></p>
                        <p><a target="_blank" href="user.php?act=profile">用户信息</a></p>
                        <p><a target="_blank" href="user.php?act=bonus">我的红包</a></p>
                        <p><a target="_blank" href="user.php?act=collection_list">我的收藏</a></p>
                        <p><a target="_blank" href="user.php?act=bonus">资金管理</a></p>
                    </div>
                    <div class="viewList" id="history_div">
                    	<div class="smt"><h4>最近浏览</h4></div>
                        <div class="smc" id="history_list">
                        	554fcae493e564ee0dc75bdf2ebf94cahistory2|a:1:{s:4:"name";s:8:"history2";}554fcae493e564ee0dc75bdf2ebf94ca                        </div>
                    </div>
                </div>
            </li>
            <script type="text/javascript">
			if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1){
				document.getElementById('history_div').style.display='none';
			}else{
				document.getElementById('history_div').style.display='block';
			}
			function clear_history(){
				Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
			}
			function clear_history_Response(res){
				document.getElementById('history_list').innerHTML = '<center>您已清空最近浏览过的商品</center>';
			}
			$(function(){
				var zhi=$(".viewList").find(".smc .item").length;
				if( zhi > 4 ){
					$(".viewList").find(".smc .item").eq(3).nextAll().remove();
				}
			});
            </script>
            
                                    <li class="fore2 ld"><div class="dt"><s></s> <a href="sellers.php" target="_blank">申请入驻</a></div></li>
                        <li class="fore2 ld"><div class="dt"><s></s> <a href="admin_shangjia" target="_blank">商家中心</a></div></li>
                                    <li class="fore3 ld menu" id="app-jd">
            	<div class="dt"><s></s><i></i><span class="outline"></span><span class="blank"></span><a href="#" target="_blank">手机汤姆</a><b></b></div>
                <div class="dd lh">
                	<div class="qr-info"></div>
                    <div class="qr-item qr-jd-app">
                    	<div class="qr-img"><img id="app-qrcode-img" src="themes/jingdong2015/images/538557daNd249a428.png" class="err-product" width="76" height="76"></div>
                        <div class="qr-ext"><strong>汤姆客户端</strong><a href="#" target="_blank" class="btn-app-apple"></a><a href="#" target="_blank" class="btn-app-android"></a></div>
                    </div>
                </div>
            </li>
            <li class="fore4 ld menu myJd" id="biz-service">
            	<div class="dt"><s></s> <span class="outline"></span> <span class="blank"></span> 客户服务 <b></b></div>
                <div class="dd">
                	<div><a href="#" target="_blank">帮助中心</a></div>
                    <div><a href="#" target="_blank" rel="nofollow">售后服务</a></div>
                    <div><a href="#" target="_blank" rel="nofollow">在线客服</a></div>
                    <div><a href="#" target="_blank" rel="nofollow">投诉中心</a></div>
                    <div><a href="#" target="_blank">客服邮箱</a></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="o-header-2013">
	<div class="w" id="header-2013">
    	<div id="logo-2013" class="ld"><a href="./index.php" hidefocus="true" ><img src="themes/jingdong2015/images/logo.gif" alt="汤姆"></a></div>
        
        <div id="search-2013">
        	<div class="i-search ld">
            	<div class="form">
                	<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
                    	<input type="text" class="text" accesskey="s" id="key" autocomplete="off" name="keywords" id="keyword" value="">
                        <input type="submit" value="搜索" class="button"/>
                    </form>
                </div>
            </div>
                        <div id="hotwords">
            	                                <a href="search.php?keywords=%E6%88%B7%E5%A4%96%E5%87%BA%E6%B8%B8" target="_blank" style="color:#ff0000">户外出游</a>
                                                                <a href="search.php?keywords=%E5%8A%9E%E5%85%AC%E6%96%87%E5%85%B7" target="_blank">办公文具</a>
                                                                <a href="search.php?keywords=%E5%AE%B6%E7%94%B5%E8%A3%B8%E4%BB%B7" target="_blank">家电裸价</a>
                                                                <a href="search.php?keywords=%E9%98%B2%E6%99%92%E9%9A%94%E7%A6%BB" target="_blank">防晒隔离</a>
                                                                <a href="search.php?keywords=%E5%A4%8F%E8%A3%851%E6%8A%98" target="_blank">夏装1折</a>
                                                                <a href="search.php?keywords=%E5%B0%8F%E7%89%9B3" target="_blank">小牛3</a>
                                                                <a href="search.php?keywords=%E7%AB%A5%E4%B9%A6%E6%BB%A1%E5%87%8F" target="_blank">童书满减</a>
                                                                <a href="search.php?keywords=%E7%90%86%E8%B4%A2" target="_blank">理财</a>
                                            </div>
                    </div>
        
        <div id="my360buy-2013" class="hide">
        	<dl>
            	<dt class="ld"><s></s><a href="user.php">我的汤姆</a><b></b></dt>
                <dd>
                	<div class="prompt"> <span class="fl"><strong></strong></span> <span class="fr"><a href="user.php">去我的汤姆首页&nbsp;&gt;</a></span> </div>
                    <div id="jduc-orderlist">
                    	<div class="orderlist">
                        	<div class="smt">
                            	<h4>最新订单状态：</h4>
                                <div class="extra"><a href="user.php?act=order_list" target="_blank">查看所有订单&nbsp;&gt;</a></div>
                            </div>
                            <div class="smc">
                            	<ul></ul>
                            </div>
                        </div>
                    </div>
                	<div class="uclist">
                    	<ul class="fore1 fl">
                        	<li><a target="_blank" href="user.php?act=address_list">收货地址&nbsp;&gt;</a></li>
                            <li><a target="_blank" href="user.php?act=booking_list">缺货登记&nbsp;&gt;</a></li>
                            <li><a target="_blank" href="user.php?act=profile">用户信息&nbsp;&gt;</a></li>
                            <li><a target="_blank" href="user.php?act=collection_list">我的收藏&nbsp;&gt;</a></li>
                        </ul>
                        <ul class="fore2 fl">
                        	<li><a target="_blank" href="user.php?act=message_list">我的留言&nbsp;&gt;</a></li>
                            <li><a target="_blank" href="user.php?act=comment_list">我的评论&nbsp;&gt;</a></li>
                            <li><a target="_blank" href="user.php?act=bonus">我的红包&nbsp;&gt;</a></li>
                            <li><a target="_blank" href="user.php?act=bonus">资金管理&nbsp;&gt;</a></li>
                        </ul>
                    </div>
                    <div class="viewlist" id="history_div">
                    	<div class="smt">
                        	<h4>最近浏览的商品：</h4>
                        </div>
                        <div class="smc" id="jduc-viewlist">
                        	<ul class="lh hide" style="display: block;" id="history_list">
                            554fcae493e564ee0dc75bdf2ebf94cahistory2|a:1:{s:4:"name";s:8:"history2";}554fcae493e564ee0dc75bdf2ebf94ca                            </ul>
                        </div>
                    </div>
					<script type="text/javascript">
                        if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1){
                            document.getElementById('history_div').style.display='none';
                        }else{
                            document.getElementById('history_div').style.display='block';
                        };
                        function clear_history(){
                            Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
                        };
                        function clear_history_Response(res){
                            document.getElementById('history_list').innerHTML = '<center>您已清空最近浏览过的商品</center>';
                        };
                    </script>
                </dd>
            </dl>
        </div>
        
        <div id="ECS_CARTINFO" class="settleup-2013">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
        
    </div>
    
    <div class="navBox">
        <div class="w">
            <div id="nav-2013">
                <div id="categorys-2013" class="categorys-2014 ">
                    <div class="mt ld">
                        <h2><a href="javascript:;">全部商品分类<b></b></a></h2>
                    </div>
                    <div id="_JD_ALLSORT" class="mc">
                                                <div class="item fore1">
                            <span><h3><a href="category.php?id=1&amp;price_min=&amp;price_max=">图书、音像、数字商品</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=22&amp;price_min=&amp;price_max=">科技<i>></i></a></dt>
                                        <dd><a href="category.php?id=68&amp;price_min=&amp;price_max=">科普</a><a href="category.php?id=69&amp;price_min=&amp;price_max=">IT</a><a href="category.php?id=70&amp;price_min=&amp;price_max=">建筑</a><a href="category.php?id=71&amp;price_min=&amp;price_max=">医学</a><a href="category.php?id=72&amp;price_min=&amp;price_max=">工业技术</a><a href="category.php?id=73&amp;price_min=&amp;price_max=">电子/通信</a><a href="category.php?id=74&amp;price_min=&amp;price_max=">农林</a><a href="category.php?id=75&amp;price_min=&amp;price_max=">科学与自然</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=15&amp;price_min=&amp;price_max=">电子书<i>></i></a></dt>
                                        <dd><a href="category.php?id=26&amp;price_min=&amp;price_max=">免费</a><a href="category.php?id=27&amp;price_min=&amp;price_max=">小说</a><a href="category.php?id=28&amp;price_min=&amp;price_max=">励志与成功</a><a href="category.php?id=29&amp;price_min=&amp;price_max=">婚恋/两性</a><a href="category.php?id=30&amp;price_min=&amp;price_max=">文学</a><a href="category.php?id=31&amp;price_min=&amp;price_max=">经管</a><a href="category.php?id=32&amp;price_min=&amp;price_max=">畅读VIP</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=16&amp;price_min=&amp;price_max=">数字音乐<i>></i></a></dt>
                                        <dd><a href="category.php?id=33&amp;price_min=&amp;price_max=">通俗流行</a><a href="category.php?id=34&amp;price_min=&amp;price_max=">古典音乐</a><a href="category.php?id=35&amp;price_min=&amp;price_max=">摇滚说唱</a><a href="category.php?id=36&amp;price_min=&amp;price_max=">爵士蓝调</a><a href="category.php?id=37&amp;price_min=&amp;price_max=">乡村民谣</a><a href="category.php?id=38&amp;price_min=&amp;price_max=">有声读物</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=17&amp;price_min=&amp;price_max=">音像<i>></i></a></dt>
                                        <dd><a href="category.php?id=39&amp;price_min=&amp;price_max=">音乐</a><a href="category.php?id=40&amp;price_min=&amp;price_max=">影视教育</a><a href="category.php?id=41&amp;price_min=&amp;price_max=">音像</a><a href="category.php?id=42&amp;price_min=&amp;price_max=">游戏</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=18&amp;price_min=&amp;price_max=">文艺<i>></i></a></dt>
                                        <dd><a href="category.php?id=43&amp;price_min=&amp;price_max=">小说</a><a href="category.php?id=44&amp;price_min=&amp;price_max=">文学</a><a href="category.php?id=45&amp;price_min=&amp;price_max=">青春文学</a><a href="category.php?id=46&amp;price_min=&amp;price_max=">传记</a><a href="category.php?id=47&amp;price_min=&amp;price_max=">艺术</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=19&amp;price_min=&amp;price_max=">人文社科<i>></i></a></dt>
                                        <dd><a href="category.php?id=48&amp;price_min=&amp;price_max=">历史</a><a href="category.php?id=49&amp;price_min=&amp;price_max=">心理学</a><a href="category.php?id=50&amp;price_min=&amp;price_max=">政治/军事</a><a href="category.php?id=51&amp;price_min=&amp;price_max=">国学/古籍</a><a href="category.php?id=52&amp;price_min=&amp;price_max=">哲学/宗教</a><a href="category.php?id=53&amp;price_min=&amp;price_max=">社会科学</a></dd>
                                    </dl>
                                                                        <dl class="fore7">
                                        <dt><a href="category.php?id=20&amp;price_min=&amp;price_max=">经管励志<i>></i></a></dt>
                                        <dd><a href="category.php?id=54&amp;price_min=&amp;price_max=">经济</a><a href="category.php?id=55&amp;price_min=&amp;price_max=">金融与投资</a><a href="category.php?id=56&amp;price_min=&amp;price_max=">管理</a><a href="category.php?id=57&amp;price_min=&amp;price_max=">励志与成功</a></dd>
                                    </dl>
                                                                        <dl class="fore8">
                                        <dt><a href="category.php?id=21&amp;price_min=&amp;price_max=">生活<i>></i></a></dt>
                                        <dd><a href="category.php?id=58&amp;price_min=&amp;price_max=">家教与育儿</a><a href="category.php?id=59&amp;price_min=&amp;price_max=">旅游/地图</a><a href="category.php?id=60&amp;price_min=&amp;price_max=">烹饪/美食</a><a href="category.php?id=61&amp;price_min=&amp;price_max=">时尚/美妆</a><a href="category.php?id=62&amp;price_min=&amp;price_max=">家居</a><a href="category.php?id=63&amp;price_min=&amp;price_max=">婚恋与两性</a><a href="category.php?id=64&amp;price_min=&amp;price_max=">娱乐/休闲</a><a href="category.php?id=65&amp;price_min=&amp;price_max=">健身与保健</a><a href="category.php?id=66&amp;price_min=&amp;price_max=">动漫/幽默</a><a href="category.php?id=67&amp;price_min=&amp;price_max=">体育/运动</a></dd>
                                    </dl>
                                                                        <dl class="fore9">
                                        <dt><a href="category.php?id=23&amp;price_min=&amp;price_max=">少儿<i>></i></a></dt>
                                        <dd><a href="category.php?id=76&amp;price_min=&amp;price_max=">少儿</a><a href="category.php?id=77&amp;price_min=&amp;price_max=">0-2岁</a><a href="category.php?id=78&amp;price_min=&amp;price_max=">3-6岁</a><a href="category.php?id=79&amp;price_min=&amp;price_max=">7-10岁</a><a href="category.php?id=80&amp;price_min=&amp;price_max=">11-14岁</a></dd>
                                    </dl>
                                                                        <dl class="fore10">
                                        <dt><a href="category.php?id=24&amp;price_min=&amp;price_max=">教育<i>></i></a></dt>
                                        <dd><a href="category.php?id=81&amp;price_min=&amp;price_max=">教材</a><a href="category.php?id=82&amp;price_min=&amp;price_max=">中小学教辅</a><a href="category.php?id=83&amp;price_min=&amp;price_max=">考试</a><a href="category.php?id=84&amp;price_min=&amp;price_max=">外语学习</a></dd>
                                    </dl>
                                                                        <dl class="fore11">
                                        <dt><a href="category.php?id=25&amp;price_min=&amp;price_max=">其它<i>></i></a></dt>
                                        <dd><a href="category.php?id=85&amp;price_min=&amp;price_max=">英文原版书</a><a href="category.php?id=86&amp;price_min=&amp;price_max=">港台图书</a><a href="category.php?id=87&amp;price_min=&amp;price_max=">工具书</a><a href="category.php?id=88&amp;price_min=&amp;price_max=">套装书</a><a href="category.php?id=89&amp;price_min=&amp;price_max=">杂志/期刊</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=8&amp;cat=1"><img src="data/brandlogo/1408388707352962838.jpg" alt="美的 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=11&amp;cat=1"><img src="data/brandlogo/1408388724151793747.jpg" alt="雷瓦 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=16&amp;cat=1"><img src="data/brandlogo/1408388757754426015.jpg" alt="惠人 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=18&amp;cat=1"><img src="data/brandlogo/1408388769268713985.gif" alt="德龙 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=22&amp;cat=1"><img src="data/brandlogo/1408388792532331469.jpg" alt="博深 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=27&amp;cat=1"><img src="data/brandlogo/1408388822765587489.jpg" alt="德尔玛 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=29&amp;cat=1"><img src="data/brandlogo/1408388834144170833.jpg" alt="春花 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=58&amp;cat=1"><img src="data/brandlogo/1408389066427584551.gif" alt="惠氏 (1)" /></a>
                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:30:"图书、音像、数字商品";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:30:"图书、音像、数字商品";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore2">
                            <span><h3><a href="category.php?id=2&amp;price_min=&amp;price_max=">家用电器</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=90&amp;price_min=&amp;price_max=">大 家 电<i>></i></a></dt>
                                        <dd><a href="category.php?id=95&amp;price_min=&amp;price_max=">平板电视</a><a href="category.php?id=96&amp;price_min=&amp;price_max=">空调</a><a href="category.php?id=97&amp;price_min=&amp;price_max=">冰箱</a><a href="category.php?id=98&amp;price_min=&amp;price_max=">洗衣机</a><a href="category.php?id=99&amp;price_min=&amp;price_max=">家庭影院</a><a href="category.php?id=100&amp;price_min=&amp;price_max=">DVD</a><a href="category.php?id=101&amp;price_min=&amp;price_max=">迷你音响</a><a href="category.php?id=102&amp;price_min=&amp;price_max=">烟机/灶具</a><a href="category.php?id=103&amp;price_min=&amp;price_max=">热水器</a><a href="category.php?id=104&amp;price_min=&amp;price_max=">消毒柜/洗碗机</a><a href="category.php?id=105&amp;price_min=&amp;price_max=">酒柜/冷柜</a><a href="category.php?id=106&amp;price_min=&amp;price_max=">家电配件</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=93&amp;price_min=&amp;price_max=">个护健康<i>></i></a></dt>
                                        <dd><a href="category.php?id=139&amp;price_min=&amp;price_max=">剃须刀</a><a href="category.php?id=140&amp;price_min=&amp;price_max=">口腔护理</a><a href="category.php?id=141&amp;price_min=&amp;price_max=">剃/脱毛器</a><a href="category.php?id=142&amp;price_min=&amp;price_max=">电吹风</a><a href="category.php?id=143&amp;price_min=&amp;price_max=">美容</a><a href="category.php?id=144&amp;price_min=&amp;price_max=">美发</a><a href="category.php?id=145&amp;price_min=&amp;price_max=">按摩器</a><a href="category.php?id=146&amp;price_min=&amp;price_max=">按摩椅</a><a href="category.php?id=147&amp;price_min=&amp;price_max=">足浴盆</a><a href="category.php?id=148&amp;price_min=&amp;price_max=">血压计</a><a href="category.php?id=149&amp;price_min=&amp;price_max=">健康秤/厨房秤</a><a href="category.php?id=150&amp;price_min=&amp;price_max=">血糖仪</a><a href="category.php?id=151&amp;price_min=&amp;price_max=">体温计</a><a href="category.php?id=152&amp;price_min=&amp;price_max=">计步器/脂肪检测仪</a><a href="category.php?id=153&amp;price_min=&amp;price_max=">其它健康电器</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=92&amp;price_min=&amp;price_max=">厨房电器<i>></i></a></dt>
                                        <dd><a href="category.php?id=122&amp;price_min=&amp;price_max=">电压力锅</a><a href="category.php?id=123&amp;price_min=&amp;price_max=">电饭煲</a><a href="category.php?id=124&amp;price_min=&amp;price_max=">豆浆机</a><a href="category.php?id=125&amp;price_min=&amp;price_max=">面包机</a><a href="category.php?id=126&amp;price_min=&amp;price_max=">咖啡机</a><a href="category.php?id=127&amp;price_min=&amp;price_max=">微波炉</a><a href="category.php?id=128&amp;price_min=&amp;price_max=">料理/榨汁机</a><a href="category.php?id=129&amp;price_min=&amp;price_max=">电烤箱</a><a href="category.php?id=130&amp;price_min=&amp;price_max=">电磁炉</a><a href="category.php?id=131&amp;price_min=&amp;price_max=">电饼铛/烧烤盘</a><a href="category.php?id=132&amp;price_min=&amp;price_max=">煮蛋器</a><a href="category.php?id=133&amp;price_min=&amp;price_max=">酸奶机</a><a href="category.php?id=134&amp;price_min=&amp;price_max=">电水壶/热水瓶</a><a href="category.php?id=135&amp;price_min=&amp;price_max=">电炖锅</a><a href="category.php?id=136&amp;price_min=&amp;price_max=">多用途锅</a><a href="category.php?id=137&amp;price_min=&amp;price_max=">果蔬解毒机</a><a href="category.php?id=138&amp;price_min=&amp;price_max=">其它厨房电器</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=91&amp;price_min=&amp;price_max=">生活电器<i>></i></a></dt>
                                        <dd><a href="category.php?id=107&amp;price_min=&amp;price_max=">电风扇</a><a href="category.php?id=108&amp;price_min=&amp;price_max=">冷风扇</a><a href="category.php?id=109&amp;price_min=&amp;price_max=">净化器</a><a href="category.php?id=110&amp;price_min=&amp;price_max=">饮水机</a><a href="category.php?id=111&amp;price_min=&amp;price_max=">净水设备</a><a href="category.php?id=112&amp;price_min=&amp;price_max=">挂烫机/熨斗</a><a href="category.php?id=113&amp;price_min=&amp;price_max=">吸尘器</a><a href="category.php?id=114&amp;price_min=&amp;price_max=">电话机</a><a href="category.php?id=115&amp;price_min=&amp;price_max=">插座</a><a href="category.php?id=116&amp;price_min=&amp;price_max=">收录/音机</a><a href="category.php?id=117&amp;price_min=&amp;price_max=">清洁机</a><a href="category.php?id=118&amp;price_min=&amp;price_max=">加湿器</a><a href="category.php?id=119&amp;price_min=&amp;price_max=">除湿/干衣机</a><a href="category.php?id=120&amp;price_min=&amp;price_max=">取暖电器</a><a href="category.php?id=121&amp;price_min=&amp;price_max=">其它生活电器</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=94&amp;price_min=&amp;price_max=">五金家装<i>></i></a></dt>
                                        <dd><a href="category.php?id=154&amp;price_min=&amp;price_max=">电动工具</a><a href="category.php?id=155&amp;price_min=&amp;price_max=">手动工具</a><a href="category.php?id=156&amp;price_min=&amp;price_max=">仪器仪表</a><a href="category.php?id=157&amp;price_min=&amp;price_max=">浴霸/排气扇</a><a href="category.php?id=158&amp;price_min=&amp;price_max=">灯具</a><a href="category.php?id=159&amp;price_min=&amp;price_max=">LED灯</a><a href="category.php?id=160&amp;price_min=&amp;price_max=">洁身器</a><a href="category.php?id=161&amp;price_min=&amp;price_max=">水槽</a><a href="category.php?id=162&amp;price_min=&amp;price_max=">龙头</a><a href="category.php?id=163&amp;price_min=&amp;price_max=">淋浴花洒</a><a href="category.php?id=164&amp;price_min=&amp;price_max=">厨卫五金</a><a href="category.php?id=165&amp;price_min=&amp;price_max=">家具五金</a><a href="category.php?id=166&amp;price_min=&amp;price_max=">门铃</a><a href="category.php?id=167&amp;price_min=&amp;price_max=">电气开关</a><a href="category.php?id=168&amp;price_min=&amp;price_max=">插座</a><a href="category.php?id=169&amp;price_min=&amp;price_max=">电工电料</a><a href="category.php?id=170&amp;price_min=&amp;price_max=">监控安防</a><a href="category.php?id=171&amp;price_min=&amp;price_max=">电线/线缆</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=1&amp;cat=2"><img src="data/brandlogo/1408388661280162950.gif" alt="创维 (2)" /></a>
                                                                                                                                                                <a href="brand.php?id=2&amp;cat=2"><img src="data/brandlogo/1408388666819567839.gif" alt="统帅 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=3&amp;cat=2"><img src="data/brandlogo/1408388672554358389.jpg" alt="志高 (2)" /></a>
                                                                                                                                                                <a href="brand.php?id=4&amp;cat=2"><img src="data/brandlogo/1408388684265799995.gif" alt="科龙 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=5&amp;cat=2"><img src="data/brandlogo/1408388690499800497.gif" alt="海尔 (2)" /></a>
                                                                                                                                                                <a href="brand.php?id=6&amp;cat=2"><img src="data/brandlogo/1408388695099889406.gif" alt="海信 (2)" /></a>
                                                                                                                                                                <a href="brand.php?id=7&amp;cat=2"><img src="data/brandlogo/1408388701900679009.gif" alt="赛忆 (2)" /></a>
                                                                                                                                                                <a href="brand.php?id=8&amp;cat=2"><img src="data/brandlogo/1408388707352962838.jpg" alt="美的 (9)" /></a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"家用电器";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"家用电器";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore3">
                            <span><h3><a href="category.php?id=3&amp;price_min=&amp;price_max=">手机、数码、京东通信</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=172&amp;price_min=&amp;price_max=">手机通讯<i>></i></a></dt>
                                        <dd><a href="category.php?id=181&amp;price_min=&amp;price_max=">手机</a><a href="category.php?id=182&amp;price_min=&amp;price_max=">对讲机</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=173&amp;price_min=&amp;price_max=">京东通信<i>></i></a></dt>
                                        <dd><a href="category.php?id=183&amp;price_min=&amp;price_max=">选号中心</a><a href="category.php?id=184&amp;price_min=&amp;price_max=">自助服务</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=174&amp;price_min=&amp;price_max=">运营商<i>></i></a></dt>
                                        <dd><a href="category.php?id=185&amp;price_min=&amp;price_max=">购机送费</a><a href="category.php?id=186&amp;price_min=&amp;price_max=">0元购机</a><a href="category.php?id=187&amp;price_min=&amp;price_max=">选号入网</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=175&amp;price_min=&amp;price_max=">手机配件<i>></i></a></dt>
                                        <dd><a href="category.php?id=188&amp;price_min=&amp;price_max=">电池</a><a href="category.php?id=189&amp;price_min=&amp;price_max=">蓝牙耳机</a><a href="category.php?id=190&amp;price_min=&amp;price_max=">充电器/数据线</a><a href="category.php?id=191&amp;price_min=&amp;price_max=">手机耳机</a><a href="category.php?id=192&amp;price_min=&amp;price_max=">贴膜</a><a href="category.php?id=193&amp;price_min=&amp;price_max=">存储卡</a><a href="category.php?id=194&amp;price_min=&amp;price_max=">保护套</a><a href="category.php?id=195&amp;price_min=&amp;price_max=">车载</a><a href="category.php?id=196&amp;price_min=&amp;price_max=">iPhone配件</a><a href="category.php?id=197&amp;price_min=&amp;price_max=">创意配件</a><a href="category.php?id=198&amp;price_min=&amp;price_max=">便携/无线音箱</a><a href="category.php?id=199&amp;price_min=&amp;price_max=">手机饰品</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=176&amp;price_min=&amp;price_max=">摄影摄像<i>></i></a></dt>
                                        <dd><a href="category.php?id=200&amp;price_min=&amp;price_max=">数码相机</a><a href="category.php?id=201&amp;price_min=&amp;price_max=">单电/微单相机</a><a href="category.php?id=202&amp;price_min=&amp;price_max=">单反相机</a><a href="category.php?id=203&amp;price_min=&amp;price_max=">拍立得</a><a href="category.php?id=204&amp;price_min=&amp;price_max=">运动相机</a><a href="category.php?id=205&amp;price_min=&amp;price_max=">摄像机</a><a href="category.php?id=206&amp;price_min=&amp;price_max=">镜头</a><a href="category.php?id=207&amp;price_min=&amp;price_max=">户外器材</a><a href="category.php?id=208&amp;price_min=&amp;price_max=">摄影器材</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=177&amp;price_min=&amp;price_max=">数码配件<i>></i></a></dt>
                                        <dd><a href="category.php?id=209&amp;price_min=&amp;price_max=">存储卡</a><a href="category.php?id=210&amp;price_min=&amp;price_max=">读卡器</a><a href="category.php?id=211&amp;price_min=&amp;price_max=">滤镜</a><a href="category.php?id=212&amp;price_min=&amp;price_max=">闪光灯/手柄</a><a href="category.php?id=213&amp;price_min=&amp;price_max=">相机包</a><a href="category.php?id=214&amp;price_min=&amp;price_max=">三脚架/云台</a><a href="category.php?id=215&amp;price_min=&amp;price_max=">相机清洁</a><a href="category.php?id=216&amp;price_min=&amp;price_max=">相机贴膜</a><a href="category.php?id=217&amp;price_min=&amp;price_max=">机身附件</a><a href="category.php?id=218&amp;price_min=&amp;price_max=">镜头附件</a><a href="category.php?id=219&amp;price_min=&amp;price_max=">电池/充电器</a><a href="category.php?id=220&amp;price_min=&amp;price_max=">移动电源</a></dd>
                                    </dl>
                                                                        <dl class="fore7">
                                        <dt><a href="category.php?id=178&amp;price_min=&amp;price_max=">时尚影音<i>></i></a></dt>
                                        <dd><a href="category.php?id=221&amp;price_min=&amp;price_max=">耳机/耳麦</a><a href="category.php?id=222&amp;price_min=&amp;price_max=">音箱/音响</a><a href="category.php?id=223&amp;price_min=&amp;price_max=">麦克风</a><a href="category.php?id=224&amp;price_min=&amp;price_max=">MP3/MP4</a><a href="category.php?id=225&amp;price_min=&amp;price_max=">数码相框</a><a href="category.php?id=226&amp;price_min=&amp;price_max=">专业音频</a><a href="category.php?id=227&amp;price_min=&amp;price_max=">苹果周边</a></dd>
                                    </dl>
                                                                        <dl class="fore8">
                                        <dt><a href="category.php?id=179&amp;price_min=&amp;price_max=">智能设备<i>></i></a></dt>
                                        <dd><a href="category.php?id=228&amp;price_min=&amp;price_max=">智能手环</a><a href="category.php?id=229&amp;price_min=&amp;price_max=">智能手表</a><a href="category.php?id=230&amp;price_min=&amp;price_max=">智能眼镜</a><a href="category.php?id=231&amp;price_min=&amp;price_max=">运动跟踪器</a><a href="category.php?id=232&amp;price_min=&amp;price_max=">健康监测</a><a href="category.php?id=233&amp;price_min=&amp;price_max=">智能配饰</a><a href="category.php?id=234&amp;price_min=&amp;price_max=">智能家居</a><a href="category.php?id=235&amp;price_min=&amp;price_max=">体感车</a><a href="category.php?id=236&amp;price_min=&amp;price_max=">其他配件</a></dd>
                                    </dl>
                                                                        <dl class="fore9">
                                        <dt><a href="category.php?id=180&amp;price_min=&amp;price_max=">电子教育<i>></i></a></dt>
                                        <dd><a href="category.php?id=237&amp;price_min=&amp;price_max=">电子词典</a><a href="category.php?id=238&amp;price_min=&amp;price_max=">电纸书</a><a href="category.php?id=239&amp;price_min=&amp;price_max=">录音笔</a><a href="category.php?id=240&amp;price_min=&amp;price_max=">复读机</a><a href="category.php?id=241&amp;price_min=&amp;price_max=">点读机/笔</a><a href="category.php?id=242&amp;price_min=&amp;price_max=">学生平板</a><a href="category.php?id=243&amp;price_min=&amp;price_max=">早教机</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:30:"手机、数码、京东通信";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:30:"手机、数码、京东通信";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore4">
                            <span><h3><a href="category.php?id=4&amp;price_min=&amp;price_max=">电脑、办公</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=244&amp;price_min=&amp;price_max=">电脑整机<i>></i></a></dt>
                                        <dd><a href="category.php?id=251&amp;price_min=&amp;price_max=">笔记本</a><a href="category.php?id=252&amp;price_min=&amp;price_max=">超极本</a><a href="category.php?id=253&amp;price_min=&amp;price_max=">游戏本</a><a href="category.php?id=254&amp;price_min=&amp;price_max=">平板电脑</a><a href="category.php?id=255&amp;price_min=&amp;price_max=">平板电脑配件</a><a href="category.php?id=256&amp;price_min=&amp;price_max=">台式机</a><a href="category.php?id=257&amp;price_min=&amp;price_max=">服务器/工作站</a><a href="category.php?id=258&amp;price_min=&amp;price_max=">笔记本配件</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=245&amp;price_min=&amp;price_max=">电脑配件<i>></i></a></dt>
                                        <dd><a href="category.php?id=259&amp;price_min=&amp;price_max=">CPU</a><a href="category.php?id=260&amp;price_min=&amp;price_max=">主板</a><a href="category.php?id=261&amp;price_min=&amp;price_max=">显卡</a><a href="category.php?id=262&amp;price_min=&amp;price_max=">硬盘</a><a href="category.php?id=263&amp;price_min=&amp;price_max=">SSD固态硬盘</a><a href="category.php?id=264&amp;price_min=&amp;price_max=">内存</a><a href="category.php?id=265&amp;price_min=&amp;price_max=">机箱</a><a href="category.php?id=266&amp;price_min=&amp;price_max=">电源</a><a href="category.php?id=267&amp;price_min=&amp;price_max=">显示器</a><a href="category.php?id=268&amp;price_min=&amp;price_max=">刻录机/光驱</a><a href="category.php?id=269&amp;price_min=&amp;price_max=">声卡/扩展卡</a><a href="category.php?id=270&amp;price_min=&amp;price_max=">散热器</a><a href="category.php?id=271&amp;price_min=&amp;price_max=">装机配件</a><a href="category.php?id=272&amp;price_min=&amp;price_max=">组装电脑</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=246&amp;price_min=&amp;price_max=">外设产品<i>></i></a></dt>
                                        <dd><a href="category.php?id=273&amp;price_min=&amp;price_max=">鼠标</a><a href="category.php?id=274&amp;price_min=&amp;price_max=">键盘</a><a href="category.php?id=275&amp;price_min=&amp;price_max=">游戏设备</a><a href="category.php?id=276&amp;price_min=&amp;price_max=">U盘</a><a href="category.php?id=277&amp;price_min=&amp;price_max=">移动硬盘</a><a href="category.php?id=278&amp;price_min=&amp;price_max=">鼠标垫</a><a href="category.php?id=279&amp;price_min=&amp;price_max=">摄像头</a><a href="category.php?id=280&amp;price_min=&amp;price_max=">线缆</a><a href="category.php?id=281&amp;price_min=&amp;price_max=">电玩</a><a href="category.php?id=282&amp;price_min=&amp;price_max=">手写板</a><a href="category.php?id=283&amp;price_min=&amp;price_max=">外置盒</a><a href="category.php?id=284&amp;price_min=&amp;price_max=">电脑工具</a><a href="category.php?id=285&amp;price_min=&amp;price_max=">电脑清洁</a><a href="category.php?id=286&amp;price_min=&amp;price_max=">UPS</a><a href="category.php?id=287&amp;price_min=&amp;price_max=">插座</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=247&amp;price_min=&amp;price_max=">网络产品<i>></i></a></dt>
                                        <dd><a href="category.php?id=288&amp;price_min=&amp;price_max=">路由器</a><a href="category.php?id=289&amp;price_min=&amp;price_max=">网卡</a><a href="category.php?id=290&amp;price_min=&amp;price_max=">交换机</a><a href="category.php?id=291&amp;price_min=&amp;price_max=">网络存储</a><a href="category.php?id=292&amp;price_min=&amp;price_max=">4G/3G上网</a><a href="category.php?id=293&amp;price_min=&amp;price_max=">网络盒子</a><a href="category.php?id=294&amp;price_min=&amp;price_max=">网络配件</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=248&amp;price_min=&amp;price_max=">办公打印<i>></i></a></dt>
                                        <dd><a href="category.php?id=295&amp;price_min=&amp;price_max=">打印机</a><a href="category.php?id=296&amp;price_min=&amp;price_max=">一体机</a><a href="category.php?id=297&amp;price_min=&amp;price_max=">投影机</a><a href="category.php?id=298&amp;price_min=&amp;price_max=">投影配件</a><a href="category.php?id=299&amp;price_min=&amp;price_max=">传真机</a><a href="category.php?id=300&amp;price_min=&amp;price_max=">复合机</a><a href="category.php?id=301&amp;price_min=&amp;price_max=">碎纸机</a><a href="category.php?id=302&amp;price_min=&amp;price_max=">扫描仪</a><a href="category.php?id=303&amp;price_min=&amp;price_max=">墨盒</a><a href="category.php?id=304&amp;price_min=&amp;price_max=">硒鼓</a><a href="category.php?id=305&amp;price_min=&amp;price_max=">墨粉</a><a href="category.php?id=306&amp;price_min=&amp;price_max=">色带</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=249&amp;price_min=&amp;price_max=">办公文仪<i>></i></a></dt>
                                        <dd><a href="category.php?id=307&amp;price_min=&amp;price_max=">办公文具</a><a href="category.php?id=308&amp;price_min=&amp;price_max=">文件管理</a><a href="category.php?id=309&amp;price_min=&amp;price_max=">笔类</a><a href="category.php?id=310&amp;price_min=&amp;price_max=">纸类</a><a href="category.php?id=311&amp;price_min=&amp;price_max=">本册/便签</a><a href="category.php?id=312&amp;price_min=&amp;price_max=">学生文具</a><a href="category.php?id=313&amp;price_min=&amp;price_max=">财务用品</a><a href="category.php?id=314&amp;price_min=&amp;price_max=">计算器</a><a href="category.php?id=315&amp;price_min=&amp;price_max=">激光笔</a><a href="category.php?id=316&amp;price_min=&amp;price_max=">白板/封装</a><a href="category.php?id=317&amp;price_min=&amp;price_max=">考勤机</a><a href="category.php?id=318&amp;price_min=&amp;price_max=">刻录碟片/附件</a><a href="category.php?id=319&amp;price_min=&amp;price_max=">点钞机</a><a href="category.php?id=320&amp;price_min=&amp;price_max=">支付设备/POS机</a><a href="category.php?id=321&amp;price_min=&amp;price_max=">安防监控</a><a href="category.php?id=322&amp;price_min=&amp;price_max=">呼叫/会议设备</a><a href="category.php?id=323&amp;price_min=&amp;price_max=">保险柜</a><a href="category.php?id=324&amp;price_min=&amp;price_max=">办公家具</a></dd>
                                    </dl>
                                                                        <dl class="fore7">
                                        <dt><a href="category.php?id=250&amp;price_min=&amp;price_max=">服务产品<i>></i></a></dt>
                                        <dd><a href="category.php?id=325&amp;price_min=&amp;price_max=">上门服务</a><a href="category.php?id=326&amp;price_min=&amp;price_max=">远程服务</a><a href="category.php?id=327&amp;price_min=&amp;price_max=">电脑软件</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=12&amp;cat=4"><img src="data/brandlogo/1408388731946030201.gif" alt="松下 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=33&amp;cat=4"><img src="data/brandlogo/1408388860169094248.jpg" alt="联想 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=35&amp;cat=4"><img src="data/brandlogo/1408388873290611085.jpg" alt="宏碁 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=36&amp;cat=4"><img src="data/brandlogo/1408388884893878072.jpg" alt="微软 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=37&amp;cat=4"><img src="data/brandlogo/1408388892253249002.jpg" alt="机械革命 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=38&amp;cat=4"><img src="data/brandlogo/1408388897063788352.jpg" alt="华硕 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=39&amp;cat=4"><img src="data/brandlogo/1408388904367521114.jpg" alt="惠普 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=66&amp;cat=4"><img src="data/brandlogo/1408389135311019767.gif" alt="维诺夫卡 (1)" /></a>
                                                                                                                                                                                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore5">
                            <span><h3><a href="category.php?id=5&amp;price_min=&amp;price_max=">家居、家具、家装、厨具</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=330&amp;price_min=&amp;price_max=">家纺<i>></i></a></dt>
                                        <dd><a href="category.php?id=353&amp;price_min=&amp;price_max=">床品套件</a><a href="category.php?id=354&amp;price_min=&amp;price_max=">被子</a><a href="category.php?id=355&amp;price_min=&amp;price_max=">蚊帐</a><a href="category.php?id=356&amp;price_min=&amp;price_max=">凉席</a><a href="category.php?id=357&amp;price_min=&amp;price_max=">床单被罩</a><a href="category.php?id=358&amp;price_min=&amp;price_max=">枕芯</a><a href="category.php?id=359&amp;price_min=&amp;price_max=">毛巾浴巾</a><a href="category.php?id=360&amp;price_min=&amp;price_max=">布艺软饰</a><a href="category.php?id=361&amp;price_min=&amp;price_max=">毯子</a><a href="category.php?id=362&amp;price_min=&amp;price_max=">抱枕靠垫</a><a href="category.php?id=363&amp;price_min=&amp;price_max=">床垫/床褥</a><a href="category.php?id=364&amp;price_min=&amp;price_max=">窗帘/窗纱</a><a href="category.php?id=365&amp;price_min=&amp;price_max=">电热毯</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=328&amp;price_min=&amp;price_max=">厨具<i>></i></a></dt>
                                        <dd><a href="category.php?id=335&amp;price_min=&amp;price_max=">烹饪锅具</a><a href="category.php?id=336&amp;price_min=&amp;price_max=">刀剪菜板</a><a href="category.php?id=337&amp;price_min=&amp;price_max=">厨房配件</a><a href="category.php?id=338&amp;price_min=&amp;price_max=">水具酒具</a><a href="category.php?id=339&amp;price_min=&amp;price_max=">餐具</a><a href="category.php?id=340&amp;price_min=&amp;price_max=">茶具/咖啡具</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=329&amp;price_min=&amp;price_max=">家装建材<i>></i></a></dt>
                                        <dd><a href="category.php?id=341&amp;price_min=&amp;price_max=">灯饰照明</a><a href="category.php?id=342&amp;price_min=&amp;price_max=">厨房卫浴</a><a href="category.php?id=343&amp;price_min=&amp;price_max=">五金工具</a><a href="category.php?id=344&amp;price_min=&amp;price_max=">电工电料</a><a href="category.php?id=345&amp;price_min=&amp;price_max=">墙地面材料</a><a href="category.php?id=346&amp;price_min=&amp;price_max=">装饰材料</a><a href="category.php?id=347&amp;price_min=&amp;price_max=">装修服务</a><a href="category.php?id=348&amp;price_min=&amp;price_max=">吸顶灯</a><a href="category.php?id=349&amp;price_min=&amp;price_max=">淋浴花洒</a><a href="category.php?id=350&amp;price_min=&amp;price_max=">开关插座</a><a href="category.php?id=351&amp;price_min=&amp;price_max=">油漆涂料</a><a href="category.php?id=352&amp;price_min=&amp;price_max=">龙头</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=331&amp;price_min=&amp;price_max=">家具<i>></i></a></dt>
                                        <dd><a href="category.php?id=366&amp;price_min=&amp;price_max=">卧室家具</a><a href="category.php?id=367&amp;price_min=&amp;price_max=">客厅家具</a><a href="category.php?id=368&amp;price_min=&amp;price_max=">餐厅家具</a><a href="category.php?id=369&amp;price_min=&amp;price_max=">书房家具</a><a href="category.php?id=370&amp;price_min=&amp;price_max=">储物家具</a><a href="category.php?id=371&amp;price_min=&amp;price_max=">阳台/户外</a><a href="category.php?id=372&amp;price_min=&amp;price_max=">商业办公</a><a href="category.php?id=373&amp;price_min=&amp;price_max=">床</a><a href="category.php?id=374&amp;price_min=&amp;price_max=">床垫</a><a href="category.php?id=375&amp;price_min=&amp;price_max=">沙发</a><a href="category.php?id=376&amp;price_min=&amp;price_max=">电脑椅</a><a href="category.php?id=377&amp;price_min=&amp;price_max=">衣柜</a><a href="category.php?id=378&amp;price_min=&amp;price_max=">茶几</a><a href="category.php?id=379&amp;price_min=&amp;price_max=">电视柜</a><a href="category.php?id=380&amp;price_min=&amp;price_max=">餐桌</a><a href="category.php?id=381&amp;price_min=&amp;price_max=">电脑桌</a><a href="category.php?id=382&amp;price_min=&amp;price_max=">鞋架/衣帽架</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=332&amp;price_min=&amp;price_max=">灯具<i>></i></a></dt>
                                        <dd><a href="category.php?id=383&amp;price_min=&amp;price_max=">台灯</a><a href="category.php?id=384&amp;price_min=&amp;price_max=">吸顶灯</a><a href="category.php?id=385&amp;price_min=&amp;price_max=">筒灯射灯</a><a href="category.php?id=386&amp;price_min=&amp;price_max=">LED灯</a><a href="category.php?id=387&amp;price_min=&amp;price_max=">节能灯</a><a href="category.php?id=388&amp;price_min=&amp;price_max=">落地灯</a><a href="category.php?id=389&amp;price_min=&amp;price_max=">五金电器</a><a href="category.php?id=390&amp;price_min=&amp;price_max=">应急灯/手电</a><a href="category.php?id=391&amp;price_min=&amp;price_max=">装饰灯</a><a href="category.php?id=392&amp;price_min=&amp;price_max=">吊灯</a><a href="category.php?id=393&amp;price_min=&amp;price_max=">氛围照明</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=333&amp;price_min=&amp;price_max=">生活日用<i>></i></a></dt>
                                        <dd><a href="category.php?id=394&amp;price_min=&amp;price_max=">收纳用品</a><a href="category.php?id=395&amp;price_min=&amp;price_max=">雨伞雨具</a><a href="category.php?id=396&amp;price_min=&amp;price_max=">浴室用品</a><a href="category.php?id=397&amp;price_min=&amp;price_max=">缝纫/针织用品</a><a href="category.php?id=398&amp;price_min=&amp;price_max=">洗晒/熨烫</a><a href="category.php?id=399&amp;price_min=&amp;price_max=">净化除味</a></dd>
                                    </dl>
                                                                        <dl class="fore7">
                                        <dt><a href="category.php?id=334&amp;price_min=&amp;price_max=">家装软饰<i>></i></a></dt>
                                        <dd><a href="category.php?id=400&amp;price_min=&amp;price_max=">桌布/罩件</a><a href="category.php?id=401&amp;price_min=&amp;price_max=">地毯地垫</a><a href="category.php?id=402&amp;price_min=&amp;price_max=">沙发垫套/椅垫</a><a href="category.php?id=403&amp;price_min=&amp;price_max=">帘艺隔断</a><a href="category.php?id=404&amp;price_min=&amp;price_max=">相框/照片墙</a><a href="category.php?id=405&amp;price_min=&amp;price_max=">装饰字画</a><a href="category.php?id=406&amp;price_min=&amp;price_max=">墙贴/装饰贴</a><a href="category.php?id=407&amp;price_min=&amp;price_max=">节庆饰品</a><a href="category.php?id=408&amp;price_min=&amp;price_max=">手工/十字绣</a><a href="category.php?id=409&amp;price_min=&amp;price_max=">钟饰</a><a href="category.php?id=410&amp;price_min=&amp;price_max=">装饰摆件</a><a href="category.php?id=411&amp;price_min=&amp;price_max=">花瓶花艺</a><a href="category.php?id=412&amp;price_min=&amp;price_max=">创意家居</a><a href="category.php?id=413&amp;price_min=&amp;price_max=">保暖防护</a><a href="category.php?id=414&amp;price_min=&amp;price_max=">香薰蜡烛</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=47&amp;cat=5"><img src="data/brandlogo/1408388968061368049.gif" alt="洗颜专科 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=48&amp;cat=5"><img src="data/brandlogo/1408388977236154439.jpg" alt="富安娜家纺 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=49&amp;cat=5"><img src="data/brandlogo/1408388984062114039.gif" alt="巧布万棉家纺 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=50&amp;cat=5"><img src="data/brandlogo/1408388992835276757.gif" alt="九洲鹿 (3)" /></a>
                                                                                                                                                                <a href="brand.php?id=51&amp;cat=5"><img src="data/brandlogo/1408389003705467870.gif" alt="爱斯基摩人 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=52&amp;cat=5"><img src="data/brandlogo/1408389011381507906.gif" alt="么小毛家纺 (1)" /></a>
                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore6">
                            <span><h3><a href="category.php?id=6&amp;price_min=&amp;price_max=">服饰内衣、珠宝首饰</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=711&amp;price_min=&amp;price_max=">女装<i>></i></a></dt>
                                        <dd><a href="category.php?id=716&amp;price_min=&amp;price_max=">连衣裙</a><a href="category.php?id=717&amp;price_min=&amp;price_max=">蕾丝/雪纺衫</a><a href="category.php?id=718&amp;price_min=&amp;price_max=">衬衫</a><a href="category.php?id=719&amp;price_min=&amp;price_max=">T恤</a><a href="category.php?id=720&amp;price_min=&amp;price_max=">半身裙</a><a href="category.php?id=721&amp;price_min=&amp;price_max=">休闲裤</a><a href="category.php?id=722&amp;price_min=&amp;price_max=">短裤</a><a href="category.php?id=723&amp;price_min=&amp;price_max=">牛仔裤</a><a href="category.php?id=724&amp;price_min=&amp;price_max=">针织衫</a><a href="category.php?id=725&amp;price_min=&amp;price_max=">吊带/背心</a><a href="category.php?id=726&amp;price_min=&amp;price_max=">打底衫</a><a href="category.php?id=727&amp;price_min=&amp;price_max=">打底裤</a><a href="category.php?id=728&amp;price_min=&amp;price_max=">正装裤</a><a href="category.php?id=729&amp;price_min=&amp;price_max=">小西服</a><a href="category.php?id=730&amp;price_min=&amp;price_max=">马甲</a><a href="category.php?id=731&amp;price_min=&amp;price_max=">风衣</a><a href="category.php?id=732&amp;price_min=&amp;price_max=">羊毛衫</a><a href="category.php?id=733&amp;price_min=&amp;price_max=">羊绒衫</a><a href="category.php?id=734&amp;price_min=&amp;price_max=">短外套</a><a href="category.php?id=735&amp;price_min=&amp;price_max=">棉服</a><a href="category.php?id=736&amp;price_min=&amp;price_max=">毛呢大衣</a><a href="category.php?id=737&amp;price_min=&amp;price_max=">加绒裤</a><a href="category.php?id=738&amp;price_min=&amp;price_max=">羽绒服</a><a href="category.php?id=739&amp;price_min=&amp;price_max=">皮草</a><a href="category.php?id=740&amp;price_min=&amp;price_max=">真皮皮衣</a><a href="category.php?id=741&amp;price_min=&amp;price_max=">仿皮皮衣</a><a href="category.php?id=742&amp;price_min=&amp;price_max=">旗袍/唐装</a><a href="category.php?id=743&amp;price_min=&amp;price_max=">礼服</a><a href="category.php?id=744&amp;price_min=&amp;price_max=">婚纱</a><a href="category.php?id=745&amp;price_min=&amp;price_max=">中老年女装</a><a href="category.php?id=746&amp;price_min=&amp;price_max=">大码女装</a><a href="category.php?id=747&amp;price_min=&amp;price_max=">设计师/潮牌</a><a href="category.php?id=748&amp;price_min=&amp;price_max=">卫衣</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=712&amp;price_min=&amp;price_max=">男装<i>></i></a></dt>
                                        <dd><a href="category.php?id=749&amp;price_min=&amp;price_max=">衬衫</a><a href="category.php?id=750&amp;price_min=&amp;price_max=">T恤</a><a href="category.php?id=751&amp;price_min=&amp;price_max=">POLO衫</a><a href="category.php?id=752&amp;price_min=&amp;price_max=">针织衫</a><a href="category.php?id=753&amp;price_min=&amp;price_max=">夹克</a><a href="category.php?id=754&amp;price_min=&amp;price_max=">卫衣</a><a href="category.php?id=755&amp;price_min=&amp;price_max=">风衣</a><a href="category.php?id=756&amp;price_min=&amp;price_max=">马甲/背心</a><a href="category.php?id=757&amp;price_min=&amp;price_max=">短裤</a><a href="category.php?id=758&amp;price_min=&amp;price_max=">休闲裤</a><a href="category.php?id=759&amp;price_min=&amp;price_max=">牛仔裤</a><a href="category.php?id=760&amp;price_min=&amp;price_max=">西服</a><a href="category.php?id=761&amp;price_min=&amp;price_max=">西裤</a><a href="category.php?id=762&amp;price_min=&amp;price_max=">西服套装</a><a href="category.php?id=763&amp;price_min=&amp;price_max=">真皮皮衣</a><a href="category.php?id=764&amp;price_min=&amp;price_max=">仿皮皮衣</a><a href="category.php?id=765&amp;price_min=&amp;price_max=">羽绒服</a><a href="category.php?id=766&amp;price_min=&amp;price_max=">毛呢大衣</a><a href="category.php?id=767&amp;price_min=&amp;price_max=">棉服</a><a href="category.php?id=768&amp;price_min=&amp;price_max=">羊绒衫</a><a href="category.php?id=769&amp;price_min=&amp;price_max=">羊毛衫</a><a href="category.php?id=770&amp;price_min=&amp;price_max=">卫裤/运动裤</a><a href="category.php?id=771&amp;price_min=&amp;price_max=">加绒裤</a><a href="category.php?id=772&amp;price_min=&amp;price_max=">设计师/潮牌</a><a href="category.php?id=773&amp;price_min=&amp;price_max=">唐装/中山装</a><a href="category.php?id=774&amp;price_min=&amp;price_max=">工装</a><a href="category.php?id=775&amp;price_min=&amp;price_max=">中老年男装</a><a href="category.php?id=776&amp;price_min=&amp;price_max=">大码男装</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=713&amp;price_min=&amp;price_max=">内衣<i>></i></a></dt>
                                        <dd><a href="category.php?id=777&amp;price_min=&amp;price_max=">文胸</a><a href="category.php?id=778&amp;price_min=&amp;price_max=">睡衣/家居服</a><a href="category.php?id=779&amp;price_min=&amp;price_max=">情侣睡衣</a><a href="category.php?id=780&amp;price_min=&amp;price_max=">文胸套装</a><a href="category.php?id=781&amp;price_min=&amp;price_max=">少女文胸</a><a href="category.php?id=782&amp;price_min=&amp;price_max=">女式内裤</a><a href="category.php?id=783&amp;price_min=&amp;price_max=">男式内裤</a><a href="category.php?id=784&amp;price_min=&amp;price_max=">商务男袜</a><a href="category.php?id=785&amp;price_min=&amp;price_max=">休闲棉袜</a><a href="category.php?id=786&amp;price_min=&amp;price_max=">吊带/背心</a><a href="category.php?id=787&amp;price_min=&amp;price_max=">打底衫</a><a href="category.php?id=788&amp;price_min=&amp;price_max=">抹胸</a><a href="category.php?id=789&amp;price_min=&amp;price_max=">连裤袜/丝袜</a><a href="category.php?id=790&amp;price_min=&amp;price_max=">美腿袜</a><a href="category.php?id=791&amp;price_min=&amp;price_max=">打底裤袜</a><a href="category.php?id=792&amp;price_min=&amp;price_max=">塑身美体</a><a href="category.php?id=793&amp;price_min=&amp;price_max=">大码内衣</a><a href="category.php?id=794&amp;price_min=&amp;price_max=">内衣配件</a><a href="category.php?id=795&amp;price_min=&amp;price_max=">泳衣</a><a href="category.php?id=796&amp;price_min=&amp;price_max=">秋衣秋裤</a><a href="category.php?id=797&amp;price_min=&amp;price_max=">保暖内衣</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=714&amp;price_min=&amp;price_max=">服饰配件<i>></i></a></dt>
                                        <dd><a href="category.php?id=798&amp;price_min=&amp;price_max=">太阳镜</a><a href="category.php?id=799&amp;price_min=&amp;price_max=">光学镜架/镜片</a><a href="category.php?id=800&amp;price_min=&amp;price_max=">防辐射眼镜</a><a href="category.php?id=801&amp;price_min=&amp;price_max=">女士丝巾/围巾/披肩</a><a href="category.php?id=802&amp;price_min=&amp;price_max=">棒球帽</a><a href="category.php?id=803&amp;price_min=&amp;price_max=">遮阳伞/雨伞</a><a href="category.php?id=804&amp;price_min=&amp;price_max=">遮阳帽</a><a href="category.php?id=805&amp;price_min=&amp;price_max=">领带/领结/领带夹</a><a href="category.php?id=806&amp;price_min=&amp;price_max=">男士腰带/礼盒</a><a href="category.php?id=807&amp;price_min=&amp;price_max=">防晒手套</a><a href="category.php?id=808&amp;price_min=&amp;price_max=">老花镜</a><a href="category.php?id=809&amp;price_min=&amp;price_max=">袖扣</a><a href="category.php?id=810&amp;price_min=&amp;price_max=">鸭舌帽</a><a href="category.php?id=811&amp;price_min=&amp;price_max=">装饰眼镜</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=715&amp;price_min=&amp;price_max=">珠宝首饰<i>></i></a></dt>
                                        <dd><a href="category.php?id=812&amp;price_min=&amp;price_max=">时尚饰品</a><a href="category.php?id=813&amp;price_min=&amp;price_max=">钻石</a><a href="category.php?id=814&amp;price_min=&amp;price_max=">翡翠玉石</a><a href="category.php?id=815&amp;price_min=&amp;price_max=">纯金K金饰品</a><a href="category.php?id=816&amp;price_min=&amp;price_max=">金银投资</a><a href="category.php?id=817&amp;price_min=&amp;price_max=">银饰</a><a href="category.php?id=818&amp;price_min=&amp;price_max=">水晶玛瑙</a><a href="category.php?id=819&amp;price_min=&amp;price_max=">彩宝</a><a href="category.php?id=820&amp;price_min=&amp;price_max=">铂金</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=40&amp;cat=6"><img src="data/brandlogo/1408388912842195129.gif" alt="刊菲 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=41&amp;cat=6"><img src="data/brandlogo/1408388917023098895.gif" alt="HARMARYCIAGA (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=42&amp;cat=6"><img src="data/brandlogo/1408388927970168396.gif" alt="俏妮妃 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=43&amp;cat=6"><img src="data/brandlogo/1408388934924405061.jpg" alt="琼瑛 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=44&amp;cat=6"><img src="data/brandlogo/1408388941128040572.gif" alt="时竟 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=45&amp;cat=6"><img src="data/brandlogo/1408388948874779333.gif" alt="誉彩 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=46&amp;cat=6"><img src="data/brandlogo/1408388959674000474.gif" alt="莱雪曼 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=50&amp;cat=6"><img src="data/brandlogo/1408388992835276757.gif" alt="九洲鹿 (1)" /></a>
                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore7">
                            <span><h3><a href="category.php?id=7&amp;price_min=&amp;price_max=">个护化妆</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=415&amp;price_min=&amp;price_max=">面部护肤<i>></i></a></dt>
                                        <dd><a href="category.php?id=421&amp;price_min=&amp;price_max=">清洁</a><a href="category.php?id=422&amp;price_min=&amp;price_max=">护肤</a><a href="category.php?id=423&amp;price_min=&amp;price_max=">面膜</a><a href="category.php?id=424&amp;price_min=&amp;price_max=">剃须</a><a href="category.php?id=425&amp;price_min=&amp;price_max=">套装</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=416&amp;price_min=&amp;price_max=">洗发护发<i>></i></a></dt>
                                        <dd><a href="category.php?id=426&amp;price_min=&amp;price_max=">洗发</a><a href="category.php?id=427&amp;price_min=&amp;price_max=">护发</a><a href="category.php?id=428&amp;price_min=&amp;price_max=">染发</a><a href="category.php?id=429&amp;price_min=&amp;price_max=">造型</a><a href="category.php?id=430&amp;price_min=&amp;price_max=">假发</a><a href="category.php?id=431&amp;price_min=&amp;price_max=">套装</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=417&amp;price_min=&amp;price_max=">身体护肤<i>></i></a></dt>
                                        <dd><a href="category.php?id=432&amp;price_min=&amp;price_max=">沐浴</a><a href="category.php?id=433&amp;price_min=&amp;price_max=">润肤</a><a href="category.php?id=434&amp;price_min=&amp;price_max=">颈部</a><a href="category.php?id=435&amp;price_min=&amp;price_max=">手足</a><a href="category.php?id=436&amp;price_min=&amp;price_max=">纤体塑形</a><a href="category.php?id=437&amp;price_min=&amp;price_max=">美胸</a><a href="category.php?id=438&amp;price_min=&amp;price_max=">套装</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=418&amp;price_min=&amp;price_max=">口腔护理<i>></i></a></dt>
                                        <dd><a href="category.php?id=439&amp;price_min=&amp;price_max=">牙膏/牙粉</a><a href="category.php?id=440&amp;price_min=&amp;price_max=">牙刷/牙线</a><a href="category.php?id=441&amp;price_min=&amp;price_max=">漱口水</a><a href="category.php?id=442&amp;price_min=&amp;price_max=">套装</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=419&amp;price_min=&amp;price_max=">女性护理<i>></i></a></dt>
                                        <dd><a href="category.php?id=443&amp;price_min=&amp;price_max=">卫生巾</a><a href="category.php?id=444&amp;price_min=&amp;price_max=">卫生护垫</a><a href="category.php?id=445&amp;price_min=&amp;price_max=">私密护理</a><a href="category.php?id=446&amp;price_min=&amp;price_max=">脱毛膏</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=420&amp;price_min=&amp;price_max=">香水彩妆<i>></i></a></dt>
                                        <dd><a href="category.php?id=447&amp;price_min=&amp;price_max=">香水</a><a href="category.php?id=448&amp;price_min=&amp;price_max=">底妆</a><a href="category.php?id=449&amp;price_min=&amp;price_max=">腮红</a><a href="category.php?id=450&amp;price_min=&amp;price_max=">眼部</a><a href="category.php?id=451&amp;price_min=&amp;price_max=">唇部</a><a href="category.php?id=452&amp;price_min=&amp;price_max=">美甲</a><a href="category.php?id=453&amp;price_min=&amp;price_max=">美容工具</a><a href="category.php?id=454&amp;price_min=&amp;price_max=">套装</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=38&amp;cat=7"><img src="data/brandlogo/1408388897063788352.jpg" alt="华硕 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=46&amp;cat=7"><img src="data/brandlogo/1408388959674000474.gif" alt="莱雪曼 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=47&amp;cat=7"><img src="data/brandlogo/1408388968061368049.gif" alt="洗颜专科 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=53&amp;cat=7"><img src="data/brandlogo/1408389020467816163.gif" alt="雅培 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=54&amp;cat=7"><img src="data/brandlogo/1408389028549234249.gif" alt="美素力 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=61&amp;cat=7"><img src="data/brandlogo/1408389088273428177.gif" alt="养生堂 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=62&amp;cat=7"><img src="data/brandlogo/1408389094494256102.gif" alt="健安喜 (1)" /></a>
                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"个护化妆";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"个护化妆";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore8">
                            <span><h3><a href="category.php?id=8&amp;price_min=&amp;price_max=">鞋靴、箱包、钟表、奢侈品</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=455&amp;price_min=&amp;price_max=">时尚女鞋<i>></i></a></dt>
                                        <dd><a href="category.php?id=463&amp;price_min=&amp;price_max=">凉鞋</a><a href="category.php?id=464&amp;price_min=&amp;price_max=">单鞋</a><a href="category.php?id=465&amp;price_min=&amp;price_max=">高跟鞋</a><a href="category.php?id=466&amp;price_min=&amp;price_max=">坡跟鞋</a><a href="category.php?id=467&amp;price_min=&amp;price_max=">松糕鞋</a><a href="category.php?id=468&amp;price_min=&amp;price_max=">鱼嘴鞋</a><a href="category.php?id=469&amp;price_min=&amp;price_max=">休闲鞋</a><a href="category.php?id=470&amp;price_min=&amp;price_max=">帆布鞋</a><a href="category.php?id=471&amp;price_min=&amp;price_max=">拖鞋/人字拖</a><a href="category.php?id=472&amp;price_min=&amp;price_max=">妈妈鞋</a><a href="category.php?id=473&amp;price_min=&amp;price_max=">防水台</a><a href="category.php?id=474&amp;price_min=&amp;price_max=">雨鞋/雨靴</a><a href="category.php?id=475&amp;price_min=&amp;price_max=">内增高</a><a href="category.php?id=476&amp;price_min=&amp;price_max=">布鞋/绣花鞋</a><a href="category.php?id=477&amp;price_min=&amp;price_max=">女靴</a><a href="category.php?id=478&amp;price_min=&amp;price_max=">雪地靴</a><a href="category.php?id=479&amp;price_min=&amp;price_max=">踝靴</a><a href="category.php?id=480&amp;price_min=&amp;price_max=">马丁靴</a><a href="category.php?id=481&amp;price_min=&amp;price_max=">鞋配件</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=456&amp;price_min=&amp;price_max=">流行男鞋<i>></i></a></dt>
                                        <dd><a href="category.php?id=482&amp;price_min=&amp;price_max=">休闲鞋</a><a href="category.php?id=483&amp;price_min=&amp;price_max=">凉鞋/沙滩鞋</a><a href="category.php?id=484&amp;price_min=&amp;price_max=">帆布鞋</a><a href="category.php?id=485&amp;price_min=&amp;price_max=">商务休闲鞋</a><a href="category.php?id=486&amp;price_min=&amp;price_max=">正装鞋</a><a href="category.php?id=487&amp;price_min=&amp;price_max=">增高鞋</a><a href="category.php?id=488&amp;price_min=&amp;price_max=">拖鞋/人字拖</a><a href="category.php?id=489&amp;price_min=&amp;price_max=">工装鞋</a><a href="category.php?id=490&amp;price_min=&amp;price_max=">男靴</a><a href="category.php?id=491&amp;price_min=&amp;price_max=">传统布鞋</a><a href="category.php?id=492&amp;price_min=&amp;price_max=">功能鞋</a><a href="category.php?id=493&amp;price_min=&amp;price_max=">鞋配件</a><a href="category.php?id=494&amp;price_min=&amp;price_max=">定制鞋</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=457&amp;price_min=&amp;price_max=">潮流女包<i>></i></a></dt>
                                        <dd><a href="category.php?id=495&amp;price_min=&amp;price_max=">单肩包</a><a href="category.php?id=496&amp;price_min=&amp;price_max=">手提包</a><a href="category.php?id=497&amp;price_min=&amp;price_max=">斜挎包</a><a href="category.php?id=498&amp;price_min=&amp;price_max=">双肩包</a><a href="category.php?id=499&amp;price_min=&amp;price_max=">钱包</a><a href="category.php?id=500&amp;price_min=&amp;price_max=">手拿包/晚宴包</a><a href="category.php?id=501&amp;price_min=&amp;price_max=">卡包/零钱包</a><a href="category.php?id=502&amp;price_min=&amp;price_max=">钥匙包</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=458&amp;price_min=&amp;price_max=">精品男包<i>></i></a></dt>
                                        <dd><a href="category.php?id=503&amp;price_min=&amp;price_max=">商务公文包</a><a href="category.php?id=504&amp;price_min=&amp;price_max=">单肩/斜挎包</a><a href="category.php?id=505&amp;price_min=&amp;price_max=">男士手包</a><a href="category.php?id=506&amp;price_min=&amp;price_max=">双肩包</a><a href="category.php?id=507&amp;price_min=&amp;price_max=">钱包/卡包</a><a href="category.php?id=508&amp;price_min=&amp;price_max=">钥匙包</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=459&amp;price_min=&amp;price_max=">功能箱包<i>></i></a></dt>
                                        <dd><a href="category.php?id=509&amp;price_min=&amp;price_max=">拉杆箱/拉杆包</a><a href="category.php?id=510&amp;price_min=&amp;price_max=">旅行包</a><a href="category.php?id=511&amp;price_min=&amp;price_max=">电脑包</a><a href="category.php?id=512&amp;price_min=&amp;price_max=">休闲运动包</a><a href="category.php?id=513&amp;price_min=&amp;price_max=">相机包</a><a href="category.php?id=514&amp;price_min=&amp;price_max=">腰包/胸包</a><a href="category.php?id=515&amp;price_min=&amp;price_max=">登山包</a><a href="category.php?id=516&amp;price_min=&amp;price_max=">旅行配件</a><a href="category.php?id=517&amp;price_min=&amp;price_max=">书包</a><a href="category.php?id=518&amp;price_min=&amp;price_max=">妈咪包</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=460&amp;price_min=&amp;price_max=">奢侈品<i>></i></a></dt>
                                        <dd><a href="category.php?id=519&amp;price_min=&amp;price_max=">箱包</a><a href="category.php?id=520&amp;price_min=&amp;price_max=">钱包</a><a href="category.php?id=521&amp;price_min=&amp;price_max=">服饰腰带</a><a href="category.php?id=522&amp;price_min=&amp;price_max=">鞋靴</a><a href="category.php?id=523&amp;price_min=&amp;price_max=">太阳镜/眼镜框</a><a href="category.php?id=524&amp;price_min=&amp;price_max=">饰品</a><a href="category.php?id=525&amp;price_min=&amp;price_max=">配件</a></dd>
                                    </dl>
                                                                        <dl class="fore7">
                                        <dt><a href="category.php?id=461&amp;price_min=&amp;price_max=">钟表<i>></i></a></dt>
                                        <dd><a href="category.php?id=526&amp;price_min=&amp;price_max=">男表</a><a href="category.php?id=527&amp;price_min=&amp;price_max=">女表</a><a href="category.php?id=528&amp;price_min=&amp;price_max=">儿童表</a><a href="category.php?id=529&amp;price_min=&amp;price_max=">座钟挂钟</a></dd>
                                    </dl>
                                                                        <dl class="fore8">
                                        <dt><a href="category.php?id=462&amp;price_min=&amp;price_max=">礼品<i>></i></a></dt>
                                        <dd><a href="category.php?id=530&amp;price_min=&amp;price_max=">火机烟具</a><a href="category.php?id=531&amp;price_min=&amp;price_max=">军刀军具</a><a href="category.php?id=532&amp;price_min=&amp;price_max=">美妆礼品</a><a href="category.php?id=533&amp;price_min=&amp;price_max=">工艺礼品</a><a href="category.php?id=534&amp;price_min=&amp;price_max=">礼盒礼券</a><a href="category.php?id=535&amp;price_min=&amp;price_max=">礼品文具</a><a href="category.php?id=536&amp;price_min=&amp;price_max=">收藏品</a><a href="category.php?id=537&amp;price_min=&amp;price_max=">古董把玩</a><a href="category.php?id=538&amp;price_min=&amp;price_max=">地方礼品</a><a href="category.php?id=539&amp;price_min=&amp;price_max=">创意礼品</a><a href="category.php?id=540&amp;price_min=&amp;price_max=">婚庆用品</a><a href="category.php?id=541&amp;price_min=&amp;price_max=">鲜花绿植</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=75&amp;cat=8"><img src="data/brandlogo/1408400628618339077.jpg" alt="美旅 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=76&amp;cat=8"><img src="data/brandlogo/1408400611316891423.jpg" alt="ELLE (1)" /></a>
                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:36:"鞋靴、箱包、钟表、奢侈品";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:36:"鞋靴、箱包、钟表、奢侈品";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore9">
                            <span><h3><a href="category.php?id=9&amp;price_min=&amp;price_max=">运动户外</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=542&amp;price_min=&amp;price_max=">运动鞋包<i>></i></a></dt>
                                        <dd><a href="category.php?id=548&amp;price_min=&amp;price_max=">休闲鞋</a><a href="category.php?id=549&amp;price_min=&amp;price_max=">跑步鞋</a><a href="category.php?id=550&amp;price_min=&amp;price_max=">板鞋</a><a href="category.php?id=551&amp;price_min=&amp;price_max=">帆布鞋</a><a href="category.php?id=552&amp;price_min=&amp;price_max=">篮球鞋</a><a href="category.php?id=553&amp;price_min=&amp;price_max=">足球鞋</a><a href="category.php?id=554&amp;price_min=&amp;price_max=">乒羽网鞋</a><a href="category.php?id=555&amp;price_min=&amp;price_max=">专项运动鞋</a><a href="category.php?id=556&amp;price_min=&amp;price_max=">训练鞋</a><a href="category.php?id=557&amp;price_min=&amp;price_max=">拖鞋</a><a href="category.php?id=558&amp;price_min=&amp;price_max=">运动包</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=543&amp;price_min=&amp;price_max=">运动服饰<i>></i></a></dt>
                                        <dd><a href="category.php?id=559&amp;price_min=&amp;price_max=">卫衣/套头衫</a><a href="category.php?id=560&amp;price_min=&amp;price_max=">毛衫/线衫</a><a href="category.php?id=561&amp;price_min=&amp;price_max=">夹克/风衣</a><a href="category.php?id=562&amp;price_min=&amp;price_max=">棉服</a><a href="category.php?id=563&amp;price_min=&amp;price_max=">羽绒服</a><a href="category.php?id=564&amp;price_min=&amp;price_max=">T恤</a><a href="category.php?id=565&amp;price_min=&amp;price_max=">乒羽网服</a><a href="category.php?id=566&amp;price_min=&amp;price_max=">训练服</a><a href="category.php?id=567&amp;price_min=&amp;price_max=">运动背心</a><a href="category.php?id=568&amp;price_min=&amp;price_max=">运动裤</a><a href="category.php?id=569&amp;price_min=&amp;price_max=">运动套装</a><a href="category.php?id=570&amp;price_min=&amp;price_max=">运动配饰</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=544&amp;price_min=&amp;price_max=">健身训练<i>></i></a></dt>
                                        <dd><a href="category.php?id=571&amp;price_min=&amp;price_max=">跑步机</a><a href="category.php?id=572&amp;price_min=&amp;price_max=">健身车/动感单车</a><a href="category.php?id=573&amp;price_min=&amp;price_max=">综合训练器</a><a href="category.php?id=574&amp;price_min=&amp;price_max=">其他大型器械</a><a href="category.php?id=575&amp;price_min=&amp;price_max=">哑铃</a><a href="category.php?id=576&amp;price_min=&amp;price_max=">仰卧板/收腹机</a><a href="category.php?id=577&amp;price_min=&amp;price_max=">其他中小型器材</a><a href="category.php?id=578&amp;price_min=&amp;price_max=">武术搏击</a><a href="category.php?id=579&amp;price_min=&amp;price_max=">运动护具</a><a href="category.php?id=580&amp;price_min=&amp;price_max=">瑜伽舞蹈</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=545&amp;price_min=&amp;price_max=">骑行运动<i>></i></a></dt>
                                        <dd><a href="category.php?id=581&amp;price_min=&amp;price_max=">山地车/公路车</a><a href="category.php?id=582&amp;price_min=&amp;price_max=">折叠车</a><a href="category.php?id=583&amp;price_min=&amp;price_max=">电动车</a><a href="category.php?id=584&amp;price_min=&amp;price_max=">其他整车</a><a href="category.php?id=585&amp;price_min=&amp;price_max=">骑行装备</a><a href="category.php?id=586&amp;price_min=&amp;price_max=">骑行服</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=546&amp;price_min=&amp;price_max=">体育用品<i>></i></a></dt>
                                        <dd><a href="category.php?id=587&amp;price_min=&amp;price_max=">乒乓球</a><a href="category.php?id=588&amp;price_min=&amp;price_max=">羽毛球</a><a href="category.php?id=589&amp;price_min=&amp;price_max=">网球</a><a href="category.php?id=590&amp;price_min=&amp;price_max=">篮球</a><a href="category.php?id=592&amp;price_min=&amp;price_max=">足球</a><a href="category.php?id=593&amp;price_min=&amp;price_max=">高尔夫</a><a href="category.php?id=594&amp;price_min=&amp;price_max=">台球</a><a href="category.php?id=595&amp;price_min=&amp;price_max=">轮滑滑板</a><a href="category.php?id=596&amp;price_min=&amp;price_max=">排球</a><a href="category.php?id=597&amp;price_min=&amp;price_max=">棋牌麻将</a><a href="category.php?id=598&amp;price_min=&amp;price_max=">其它</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=547&amp;price_min=&amp;price_max=">户外装备<i>></i></a></dt>
                                        <dd><a href="category.php?id=619&amp;price_min=&amp;price_max=">背包</a><a href="category.php?id=620&amp;price_min=&amp;price_max=">帐篷/垫子</a><a href="category.php?id=621&amp;price_min=&amp;price_max=">睡袋/吊床</a><a href="category.php?id=622&amp;price_min=&amp;price_max=">登山攀岩</a><a href="category.php?id=623&amp;price_min=&amp;price_max=">户外照明</a><a href="category.php?id=624&amp;price_min=&amp;price_max=">野餐烧烤</a><a href="category.php?id=625&amp;price_min=&amp;price_max=">便携桌椅床</a><a href="category.php?id=626&amp;price_min=&amp;price_max=">户外工具</a><a href="category.php?id=627&amp;price_min=&amp;price_max=">望远镜</a><a href="category.php?id=628&amp;price_min=&amp;price_max=">户外仪表</a><a href="category.php?id=629&amp;price_min=&amp;price_max=">旅游用品</a><a href="category.php?id=630&amp;price_min=&amp;price_max=">军迷用品</a></dd>
                                    </dl>
                                                                        <dl class="fore7">
                                        <dt><a href="category.php?id=591&amp;price_min=&amp;price_max=">户外鞋服<i>></i></a></dt>
                                        <dd><a href="category.php?id=599&amp;price_min=&amp;price_max=">冲锋衣裤</a><a href="category.php?id=600&amp;price_min=&amp;price_max=">速干衣裤</a><a href="category.php?id=601&amp;price_min=&amp;price_max=">滑雪服</a><a href="category.php?id=602&amp;price_min=&amp;price_max=">羽绒服/棉服</a><a href="category.php?id=603&amp;price_min=&amp;price_max=">休闲衣裤</a><a href="category.php?id=604&amp;price_min=&amp;price_max=">抓绒衣裤</a><a href="category.php?id=605&amp;price_min=&amp;price_max=">软壳衣裤</a><a href="category.php?id=606&amp;price_min=&amp;price_max=">T恤</a><a href="category.php?id=607&amp;price_min=&amp;price_max=">户外风衣</a><a href="category.php?id=608&amp;price_min=&amp;price_max=">功能内衣</a><a href="category.php?id=609&amp;price_min=&amp;price_max=">军迷服饰</a><a href="category.php?id=610&amp;price_min=&amp;price_max=">登山鞋</a><a href="category.php?id=611&amp;price_min=&amp;price_max=">徒步鞋</a><a href="category.php?id=612&amp;price_min=&amp;price_max=">越野跑鞋</a><a href="category.php?id=613&amp;price_min=&amp;price_max=">休闲鞋</a><a href="category.php?id=614&amp;price_min=&amp;price_max=">雪地靴</a><a href="category.php?id=615&amp;price_min=&amp;price_max=">工装鞋</a><a href="category.php?id=616&amp;price_min=&amp;price_max=">溯溪鞋</a><a href="category.php?id=617&amp;price_min=&amp;price_max=">沙滩/凉拖</a><a href="category.php?id=618&amp;price_min=&amp;price_max=">户外袜</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"运动户外";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"运动户外";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore10">
                            <span><h3><a href="category.php?id=10&amp;price_min=&amp;price_max=">汽车用品</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=631&amp;price_min=&amp;price_max=">维修保养<i>></i></a></dt>
                                        <dd><a href="category.php?id=636&amp;price_min=&amp;price_max=">润滑油</a><a href="category.php?id=637&amp;price_min=&amp;price_max=">添加剂</a><a href="category.php?id=638&amp;price_min=&amp;price_max=">防冻液</a><a href="category.php?id=639&amp;price_min=&amp;price_max=">滤清器</a><a href="category.php?id=640&amp;price_min=&amp;price_max=">火花塞</a><a href="category.php?id=641&amp;price_min=&amp;price_max=">雨刷</a><a href="category.php?id=642&amp;price_min=&amp;price_max=">车灯</a><a href="category.php?id=643&amp;price_min=&amp;price_max=">后视镜</a><a href="category.php?id=644&amp;price_min=&amp;price_max=">轮胎</a><a href="category.php?id=645&amp;price_min=&amp;price_max=">轮毂</a><a href="category.php?id=646&amp;price_min=&amp;price_max=">刹车片/盘</a><a href="category.php?id=647&amp;price_min=&amp;price_max=">喇叭/皮带</a><a href="category.php?id=648&amp;price_min=&amp;price_max=">蓄电池</a><a href="category.php?id=649&amp;price_min=&amp;price_max=">底盘装甲/护板</a><a href="category.php?id=650&amp;price_min=&amp;price_max=">贴膜</a><a href="category.php?id=651&amp;price_min=&amp;price_max=">汽修工具</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=632&amp;price_min=&amp;price_max=">车载电器<i>></i></a></dt>
                                        <dd><a href="category.php?id=652&amp;price_min=&amp;price_max=">导航仪</a><a href="category.php?id=653&amp;price_min=&amp;price_max=">安全预警仪</a><a href="category.php?id=654&amp;price_min=&amp;price_max=">行车记录仪</a><a href="category.php?id=655&amp;price_min=&amp;price_max=">倒车雷达</a><a href="category.php?id=656&amp;price_min=&amp;price_max=">蓝牙设备</a><a href="category.php?id=657&amp;price_min=&amp;price_max=">时尚影音</a><a href="category.php?id=658&amp;price_min=&amp;price_max=">净化器</a><a href="category.php?id=659&amp;price_min=&amp;price_max=">电源</a><a href="category.php?id=660&amp;price_min=&amp;price_max=">冰箱</a><a href="category.php?id=661&amp;price_min=&amp;price_max=">吸尘器</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=633&amp;price_min=&amp;price_max=">美容清洗<i>></i></a></dt>
                                        <dd><a href="category.php?id=662&amp;price_min=&amp;price_max=">车蜡</a><a href="category.php?id=663&amp;price_min=&amp;price_max=">补漆笔</a><a href="category.php?id=664&amp;price_min=&amp;price_max=">玻璃水</a><a href="category.php?id=665&amp;price_min=&amp;price_max=">清洁剂</a><a href="category.php?id=666&amp;price_min=&amp;price_max=">洗车工具</a><a href="category.php?id=667&amp;price_min=&amp;price_max=">洗车配件</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=634&amp;price_min=&amp;price_max=">汽车装饰<i>></i></a></dt>
                                        <dd><a href="category.php?id=668&amp;price_min=&amp;price_max=">脚垫</a><a href="category.php?id=669&amp;price_min=&amp;price_max=">座垫</a><a href="category.php?id=670&amp;price_min=&amp;price_max=">座套</a><a href="category.php?id=671&amp;price_min=&amp;price_max=">后备箱垫</a><a href="category.php?id=672&amp;price_min=&amp;price_max=">头枕</a><a href="category.php?id=673&amp;price_min=&amp;price_max=">腰靠</a><a href="category.php?id=674&amp;price_min=&amp;price_max=">香水</a><a href="category.php?id=675&amp;price_min=&amp;price_max=">空气净化</a><a href="category.php?id=676&amp;price_min=&amp;price_max=">车内饰品</a><a href="category.php?id=677&amp;price_min=&amp;price_max=">功能小件</a><a href="category.php?id=678&amp;price_min=&amp;price_max=">车身装饰件</a><a href="category.php?id=679&amp;price_min=&amp;price_max=">车衣</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=635&amp;price_min=&amp;price_max=">安全自驾<i>></i></a></dt>
                                        <dd><a href="category.php?id=680&amp;price_min=&amp;price_max=">安全座椅</a><a href="category.php?id=681&amp;price_min=&amp;price_max=">胎压充气</a><a href="category.php?id=682&amp;price_min=&amp;price_max=">防盗设备</a><a href="category.php?id=683&amp;price_min=&amp;price_max=">应急救援</a><a href="category.php?id=684&amp;price_min=&amp;price_max=">保温箱</a><a href="category.php?id=685&amp;price_min=&amp;price_max=">储物箱</a><a href="category.php?id=686&amp;price_min=&amp;price_max=">自驾野营</a><a href="category.php?id=687&amp;price_min=&amp;price_max=">摩托车装备</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"汽车用品";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"汽车用品";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore11">
                            <span><h3><a href="category.php?id=11&amp;price_min=&amp;price_max=">母婴、玩具乐器</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=688&amp;price_min=&amp;price_max=">奶粉<i>></i></a></dt>
                                        <dd><a href="category.php?id=821&amp;price_min=&amp;price_max=">婴幼奶粉</a><a href="category.php?id=822&amp;price_min=&amp;price_max=">成人奶粉</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=689&amp;price_min=&amp;price_max=">营养辅食<i>></i></a></dt>
                                        <dd><a href="category.php?id=830&amp;price_min=&amp;price_max=">DHA</a><a href="category.php?id=831&amp;price_min=&amp;price_max=">钙铁锌/维生素</a><a href="category.php?id=832&amp;price_min=&amp;price_max=">益生菌/初乳</a><a href="category.php?id=833&amp;price_min=&amp;price_max=">清火/开胃</a><a href="category.php?id=834&amp;price_min=&amp;price_max=">米粉/菜粉</a><a href="category.php?id=835&amp;price_min=&amp;price_max=">果泥/果汁</a><a href="category.php?id=836&amp;price_min=&amp;price_max=">面条/粥</a><a href="category.php?id=837&amp;price_min=&amp;price_max=">宝宝零食</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=690&amp;price_min=&amp;price_max=">尿裤湿巾<i>></i></a></dt>
                                        <dd><a href="category.php?id=838&amp;price_min=&amp;price_max=">婴儿尿裤</a><a href="category.php?id=839&amp;price_min=&amp;price_max=">拉拉裤</a><a href="category.php?id=840&amp;price_min=&amp;price_max=">成人尿裤</a><a href="category.php?id=841&amp;price_min=&amp;price_max=">湿巾</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=691&amp;price_min=&amp;price_max=">洗护用品<i>></i></a></dt>
                                        <dd><a href="category.php?id=842&amp;price_min=&amp;price_max=">宝宝护肤</a><a href="category.php?id=843&amp;price_min=&amp;price_max=">宝宝洗浴</a><a href="category.php?id=844&amp;price_min=&amp;price_max=">理发器</a><a href="category.php?id=845&amp;price_min=&amp;price_max=">洗衣液/皂</a><a href="category.php?id=846&amp;price_min=&amp;price_max=">奶瓶清洗</a><a href="category.php?id=847&amp;price_min=&amp;price_max=">日常护理</a><a href="category.php?id=848&amp;price_min=&amp;price_max=">座便器</a><a href="category.php?id=849&amp;price_min=&amp;price_max=">驱蚊防蚊</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=692&amp;price_min=&amp;price_max=">喂养用品<i>></i></a></dt>
                                        <dd><a href="category.php?id=850&amp;price_min=&amp;price_max=">奶瓶奶嘴</a><a href="category.php?id=851&amp;price_min=&amp;price_max=">吸奶器</a><a href="category.php?id=852&amp;price_min=&amp;price_max=">牙胶安抚</a><a href="category.php?id=853&amp;price_min=&amp;price_max=">暖奶消毒</a><a href="category.php?id=854&amp;price_min=&amp;price_max=">辅食料理机</a><a href="category.php?id=855&amp;price_min=&amp;price_max=">碗盘叉勺</a><a href="category.php?id=856&amp;price_min=&amp;price_max=">水壶/水杯</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=693&amp;price_min=&amp;price_max=">童车童床<i>></i></a></dt>
                                        <dd><a href="category.php?id=857&amp;price_min=&amp;price_max=">婴儿床</a><a href="category.php?id=858&amp;price_min=&amp;price_max=">婴儿推车</a><a href="category.php?id=859&amp;price_min=&amp;price_max=">餐椅摇椅</a><a href="category.php?id=860&amp;price_min=&amp;price_max=">学步车</a><a href="category.php?id=861&amp;price_min=&amp;price_max=">三轮车</a><a href="category.php?id=862&amp;price_min=&amp;price_max=">自行车</a><a href="category.php?id=863&amp;price_min=&amp;price_max=">扭扭车</a><a href="category.php?id=864&amp;price_min=&amp;price_max=">滑板车</a><a href="category.php?id=865&amp;price_min=&amp;price_max=">电动车</a></dd>
                                    </dl>
                                                                        <dl class="fore7">
                                        <dt><a href="category.php?id=694&amp;price_min=&amp;price_max=">安全座椅<i>></i></a></dt>
                                        <dd><a href="category.php?id=866&amp;price_min=&amp;price_max=">提篮式</a><a href="category.php?id=867&amp;price_min=&amp;price_max=">安全座椅</a><a href="category.php?id=868&amp;price_min=&amp;price_max=">增高垫</a></dd>
                                    </dl>
                                                                        <dl class="fore8">
                                        <dt><a href="category.php?id=695&amp;price_min=&amp;price_max=">寝居服饰<i>></i></a></dt>
                                        <dd><a href="category.php?id=869&amp;price_min=&amp;price_max=">婴儿外出服</a><a href="category.php?id=870&amp;price_min=&amp;price_max=">婴儿内衣</a><a href="category.php?id=871&amp;price_min=&amp;price_max=">婴儿礼盒</a><a href="category.php?id=872&amp;price_min=&amp;price_max=">婴儿鞋帽袜</a><a href="category.php?id=873&amp;price_min=&amp;price_max=">家居床品</a><a href="category.php?id=874&amp;price_min=&amp;price_max=">安全防护</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=53&amp;cat=11"><img src="data/brandlogo/1408389020467816163.gif" alt="雅培 (2)" /></a>
                                                                                                                                                                <a href="brand.php?id=54&amp;cat=11"><img src="data/brandlogo/1408389028549234249.gif" alt="美素力 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=55&amp;cat=11"><img src="data/brandlogo/1408389036032699536.gif" alt="美赞臣 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=56&amp;cat=11"><img src="data/brandlogo/1408389045513441324.jpg" alt="雀巢 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=57&amp;cat=11"><img src="data/brandlogo/1408389052474444489.gif" alt="可瑞康 (2)" /></a>
                                                                                                                                                                <a href="brand.php?id=58&amp;cat=11"><img src="data/brandlogo/1408389066427584551.gif" alt="惠氏 (1)" /></a>
                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore12">
                            <span><h3><a href="category.php?id=12&amp;price_min=&amp;price_max=">食品饮料、酒类、生鲜</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=696&amp;price_min=&amp;price_max=">中外名酒<i>></i></a></dt>
                                        <dd><a href="category.php?id=875&amp;price_min=&amp;price_max=">白酒</a><a href="category.php?id=876&amp;price_min=&amp;price_max=">葡萄酒</a><a href="category.php?id=877&amp;price_min=&amp;price_max=">洋酒</a><a href="category.php?id=878&amp;price_min=&amp;price_max=">啤酒</a><a href="category.php?id=879&amp;price_min=&amp;price_max=">黄酒/养生酒</a><a href="category.php?id=880&amp;price_min=&amp;price_max=">收藏酒/陈年老酒</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=697&amp;price_min=&amp;price_max=">进口食品<i>></i></a></dt>
                                        <dd><a href="category.php?id=881&amp;price_min=&amp;price_max=">牛奶</a><a href="category.php?id=882&amp;price_min=&amp;price_max=">饼干蛋糕</a><a href="category.php?id=883&amp;price_min=&amp;price_max=">糖果/巧克力</a><a href="category.php?id=884&amp;price_min=&amp;price_max=">休闲零食</a><a href="category.php?id=885&amp;price_min=&amp;price_max=">冲调饮品</a><a href="category.php?id=886&amp;price_min=&amp;price_max=">粮油调味</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=698&amp;price_min=&amp;price_max=">休闲食品<i>></i></a></dt>
                                        <dd><a href="category.php?id=887&amp;price_min=&amp;price_max=">休闲零食</a><a href="category.php?id=888&amp;price_min=&amp;price_max=">坚果炒货</a><a href="category.php?id=889&amp;price_min=&amp;price_max=">肉干肉脯</a><a href="category.php?id=890&amp;price_min=&amp;price_max=">蜜饯果干</a><a href="category.php?id=891&amp;price_min=&amp;price_max=">糖果/巧克力</a><a href="category.php?id=892&amp;price_min=&amp;price_max=">饼干蛋糕</a><a href="category.php?id=893&amp;price_min=&amp;price_max=">无糖食品</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=699&amp;price_min=&amp;price_max=">地方特产<i>></i></a></dt>
                                        <dd><a href="category.php?id=894&amp;price_min=&amp;price_max=">新疆</a><a href="category.php?id=895&amp;price_min=&amp;price_max=">四川</a><a href="category.php?id=896&amp;price_min=&amp;price_max=">云南</a><a href="category.php?id=897&amp;price_min=&amp;price_max=">湖南</a><a href="category.php?id=898&amp;price_min=&amp;price_max=">内蒙</a><a href="category.php?id=899&amp;price_min=&amp;price_max=">北京</a><a href="category.php?id=900&amp;price_min=&amp;price_max=">山西</a><a href="category.php?id=901&amp;price_min=&amp;price_max=">福建</a><a href="category.php?id=902&amp;price_min=&amp;price_max=">东北</a><a href="category.php?id=903&amp;price_min=&amp;price_max=">其他</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=700&amp;price_min=&amp;price_max=">茗茶<i>></i></a></dt>
                                        <dd><a href="category.php?id=904&amp;price_min=&amp;price_max=">铁观音</a><a href="category.php?id=905&amp;price_min=&amp;price_max=">普洱</a><a href="category.php?id=906&amp;price_min=&amp;price_max=">龙井</a><a href="category.php?id=907&amp;price_min=&amp;price_max=">绿茶</a><a href="category.php?id=908&amp;price_min=&amp;price_max=">红茶</a><a href="category.php?id=909&amp;price_min=&amp;price_max=">乌龙茶</a><a href="category.php?id=910&amp;price_min=&amp;price_max=">花草茶</a><a href="category.php?id=911&amp;price_min=&amp;price_max=">花果茶</a><a href="category.php?id=912&amp;price_min=&amp;price_max=">黑茶</a><a href="category.php?id=913&amp;price_min=&amp;price_max=">白茶</a><a href="category.php?id=914&amp;price_min=&amp;price_max=">养生茶</a><a href="category.php?id=915&amp;price_min=&amp;price_max=">其他茶</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=701&amp;price_min=&amp;price_max=">饮料冲调<i>></i></a></dt>
                                        <dd><a href="category.php?id=916&amp;price_min=&amp;price_max=">牛奶乳品</a><a href="category.php?id=917&amp;price_min=&amp;price_max=">饮料</a><a href="category.php?id=918&amp;price_min=&amp;price_max=">饮用水</a><a href="category.php?id=919&amp;price_min=&amp;price_max=">咖啡/奶茶</a><a href="category.php?id=920&amp;price_min=&amp;price_max=">蜂蜜/柚子茶</a><a href="category.php?id=921&amp;price_min=&amp;price_max=">冲饮谷物</a><a href="category.php?id=922&amp;price_min=&amp;price_max=">成人奶粉</a></dd>
                                    </dl>
                                                                        <dl class="fore7">
                                        <dt><a href="category.php?id=702&amp;price_min=&amp;price_max=">粮油调味<i>></i></a></dt>
                                        <dd><a href="category.php?id=923&amp;price_min=&amp;price_max=">米面杂粮</a><a href="category.php?id=924&amp;price_min=&amp;price_max=">食用油</a><a href="category.php?id=925&amp;price_min=&amp;price_max=">调味品</a><a href="category.php?id=926&amp;price_min=&amp;price_max=">南北干货</a><a href="category.php?id=927&amp;price_min=&amp;price_max=">方便食品</a><a href="category.php?id=928&amp;price_min=&amp;price_max=">有机食品</a><a href="category.php?id=935&amp;price_min=&amp;price_max=">环球美食</a><a href="category.php?id=936&amp;price_min=&amp;price_max=">产地直供</a></dd>
                                    </dl>
                                                                        <dl class="fore8">
                                        <dt><a href="category.php?id=703&amp;price_min=&amp;price_max=">生鲜食品<i>></i></a></dt>
                                        <dd><a href="category.php?id=929&amp;price_min=&amp;price_max=">水果蔬菜</a><a href="category.php?id=930&amp;price_min=&amp;price_max=">海鲜水产</a><a href="category.php?id=931&amp;price_min=&amp;price_max=">海参</a><a href="category.php?id=932&amp;price_min=&amp;price_max=">牛排</a><a href="category.php?id=933&amp;price_min=&amp;price_max=">肉禽蛋奶</a><a href="category.php?id=934&amp;price_min=&amp;price_max=">熟食腊味</a></dd>
                                    </dl>
                                                                        <dl class="fore9">
                                        <dt><a href="category.php?id=704&amp;price_min=&amp;price_max=">食品礼券<i>></i></a></dt>
                                        <dd></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=76&amp;cat=12"><img src="data/brandlogo/1408400611316891423.jpg" alt="ELLE (1)" /></a>
                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:30:"食品饮料、酒类、生鲜";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:30:"食品饮料、酒类、生鲜";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore13">
                            <span><h3><a href="category.php?id=13&amp;price_min=&amp;price_max=">营养保健</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=705&amp;price_min=&amp;price_max=">营养健康<i>></i></a></dt>
                                        <dd><a href="category.php?id=937&amp;price_min=&amp;price_max=">调节免疫</a><a href="category.php?id=938&amp;price_min=&amp;price_max=">调节三高</a><a href="category.php?id=939&amp;price_min=&amp;price_max=">缓解疲劳</a><a href="category.php?id=940&amp;price_min=&amp;price_max=">美体塑身</a><a href="category.php?id=941&amp;price_min=&amp;price_max=">美容养颜</a><a href="category.php?id=942&amp;price_min=&amp;price_max=">肝肾养护</a><a href="category.php?id=943&amp;price_min=&amp;price_max=">肠胃养护</a><a href="category.php?id=944&amp;price_min=&amp;price_max=">明目益智</a><a href="category.php?id=945&amp;price_min=&amp;price_max=">骨骼健康</a><a href="category.php?id=946&amp;price_min=&amp;price_max=">改善睡眠</a><a href="category.php?id=947&amp;price_min=&amp;price_max=">抗氧化</a><a href="category.php?id=948&amp;price_min=&amp;price_max=">耐缺氧</a></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=706&amp;price_min=&amp;price_max=">营养成分<i>></i></a></dt>
                                        <dd><a href="category.php?id=949&amp;price_min=&amp;price_max=">维生素/矿物质</a><a href="category.php?id=950&amp;price_min=&amp;price_max=">蛋白质</a><a href="category.php?id=951&amp;price_min=&amp;price_max=">鱼油/磷脂</a><a href="category.php?id=952&amp;price_min=&amp;price_max=">螺旋藻</a><a href="category.php?id=953&amp;price_min=&amp;price_max=">番茄红素</a><a href="category.php?id=954&amp;price_min=&amp;price_max=">叶酸</a><a href="category.php?id=955&amp;price_min=&amp;price_max=">葡萄籽</a><a href="category.php?id=956&amp;price_min=&amp;price_max=">左旋肉碱</a><a href="category.php?id=957&amp;price_min=&amp;price_max=">辅酶Q10</a><a href="category.php?id=958&amp;price_min=&amp;price_max=">益生菌</a><a href="category.php?id=959&amp;price_min=&amp;price_max=">玛咖</a><a href="category.php?id=960&amp;price_min=&amp;price_max=">膳食纤维</a><a href="category.php?id=961&amp;price_min=&amp;price_max=">牛初乳</a><a href="category.php?id=962&amp;price_min=&amp;price_max=">胶原蛋白</a><a href="category.php?id=963&amp;price_min=&amp;price_max=">大豆异黄酮</a><a href="category.php?id=964&amp;price_min=&amp;price_max=">芦荟提取</a><a href="category.php?id=965&amp;price_min=&amp;price_max=">酵素</a></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=707&amp;price_min=&amp;price_max=">传统滋补<i>></i></a></dt>
                                        <dd><a href="category.php?id=966&amp;price_min=&amp;price_max=">蜂产品</a><a href="category.php?id=967&amp;price_min=&amp;price_max=">阿胶</a><a href="category.php?id=968&amp;price_min=&amp;price_max=">参类</a><a href="category.php?id=969&amp;price_min=&amp;price_max=">冬虫夏草</a><a href="category.php?id=970&amp;price_min=&amp;price_max=">燕窝</a><a href="category.php?id=971&amp;price_min=&amp;price_max=">海参</a><a href="category.php?id=972&amp;price_min=&amp;price_max=">养生茶饮</a><a href="category.php?id=973&amp;price_min=&amp;price_max=">鹿茸</a><a href="category.php?id=974&amp;price_min=&amp;price_max=">灵芝</a><a href="category.php?id=975&amp;price_min=&amp;price_max=">药食同源</a></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=708&amp;price_min=&amp;price_max=">成人用品<i>></i></a></dt>
                                        <dd><a href="category.php?id=976&amp;price_min=&amp;price_max=">安全避孕</a><a href="category.php?id=977&amp;price_min=&amp;price_max=">验孕测孕</a><a href="category.php?id=978&amp;price_min=&amp;price_max=">人体润滑</a><a href="category.php?id=979&amp;price_min=&amp;price_max=">情爱玩具</a><a href="category.php?id=980&amp;price_min=&amp;price_max=">情趣内衣</a></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=709&amp;price_min=&amp;price_max=">保健器械<i>></i></a></dt>
                                        <dd><a href="category.php?id=981&amp;price_min=&amp;price_max=">血压仪器</a><a href="category.php?id=982&amp;price_min=&amp;price_max=">血糖用品</a><a href="category.php?id=983&amp;price_min=&amp;price_max=">养生器械</a><a href="category.php?id=984&amp;price_min=&amp;price_max=">康复辅助</a><a href="category.php?id=985&amp;price_min=&amp;price_max=">中医保健</a><a href="category.php?id=986&amp;price_min=&amp;price_max=">家庭护理</a><a href="category.php?id=987&amp;price_min=&amp;price_max=">呼吸制氧</a></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=710&amp;price_min=&amp;price_max=">急救卫生<i>></i></a></dt>
                                        <dd><a href="category.php?id=988&amp;price_min=&amp;price_max=">口罩</a><a href="category.php?id=989&amp;price_min=&amp;price_max=">跌打损伤</a><a href="category.php?id=990&amp;price_min=&amp;price_max=">防裂抗冻</a><a href="category.php?id=991&amp;price_min=&amp;price_max=">眼部保健</a><a href="category.php?id=992&amp;price_min=&amp;price_max=">鼻炎健康</a></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                                                                <a href="brand.php?id=59&amp;cat=13"><img src="data/brandlogo/1408389072317069867.gif" alt="纽诺迪克 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=60&amp;cat=13"><img src="data/brandlogo/1408389079817514576.gif" alt="太太 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=61&amp;cat=13"><img src="data/brandlogo/1408389088273428177.gif" alt="养生堂 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=62&amp;cat=13"><img src="data/brandlogo/1408389094494256102.gif" alt="健安喜 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=63&amp;cat=13"><img src="data/brandlogo/1408389099241315294.gif" alt="东阿阿胶 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=64&amp;cat=13"><img src="data/brandlogo/1408389123539332672.gif" alt="康宝 (1)" /></a>
                                                                                                                                                                <a href="brand.php?id=66&amp;cat=13"><img src="data/brandlogo/1408389135311019767.gif" alt="维诺夫卡 (1)" /></a>
                                                                                                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"营养保健";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:12:"营养保健";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore14">
                            <span><h3><a href="category.php?id=14&amp;price_min=&amp;price_max=">彩票、旅行、充值、票务</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                                                        <dl class="fore1">
                                        <dt><a href="category.php?id=823&amp;price_min=&amp;price_max=">彩票<i>></i></a></dt>
                                        <dd></dd>
                                    </dl>
                                                                        <dl class="fore2">
                                        <dt><a href="category.php?id=824&amp;price_min=&amp;price_max=">通讯充值<i>></i></a></dt>
                                        <dd></dd>
                                    </dl>
                                                                        <dl class="fore3">
                                        <dt><a href="category.php?id=825&amp;price_min=&amp;price_max=">游戏<i>></i></a></dt>
                                        <dd></dd>
                                    </dl>
                                                                        <dl class="fore4">
                                        <dt><a href="category.php?id=826&amp;price_min=&amp;price_max=">便利生活<i>></i></a></dt>
                                        <dd></dd>
                                    </dl>
                                                                        <dl class="fore5">
                                        <dt><a href="category.php?id=827&amp;price_min=&amp;price_max=">演出票务<i>></i></a></dt>
                                        <dd></dd>
                                    </dl>
                                                                        <dl class="fore6">
                                        <dt><a href="category.php?id=828&amp;price_min=&amp;price_max=">保险<i>></i></a></dt>
                                        <dd></dd>
                                    </dl>
                                                                        <dl class="fore7">
                                        <dt><a href="category.php?id=829&amp;price_min=&amp;price_max=">教育培训<i>></i></a></dt>
                                        <dd></dd>
                                    </dl>
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"彩票、旅行、充值、票务";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"彩票、旅行、充值、票务";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                                <div class="item fore15">
                            <span><h3><a href="category.php?id=996&amp;price_min=&amp;price_max=">理财、众筹、白条、保险</a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                     
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"理财、众筹、白条、保险";s:4:"type";s:19:"左侧导航广告1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                                <li> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"理财、众筹、白条、保险";s:4:"type";s:19:"左侧导航广告2";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                                            </div>
                    <script>
                    $(function(){
						$("#_JD_ALLSORT .item").each(function(){
							var h=$(this).find(".i-mc").outerHeight();
							if( h<466){
								$(this).find(".i-mc").height(465);
							};
						});
					});
                    </script>
                </div>
                <ul id="navitems-2013">
                    <li class="fore1 curr"><a href="./index.php">首页</a></li>
                                        <li class="fore1 "><a href="category.php?id=1" >女装</a></li>
                                        <li class="fore2 "><a href="category.php?id=2" >手机、数码、京东通信</a></li>
                                        <li class="fore3 "><a href="category.php?id=4" >家居、家具、家装、厨具</a></li>
                                        <li class="fore4 "><a href="category.php?id=6" >童装</a></li>
                                        <li class="fore5 "><a href="category.php?id=3" >女鞋/男鞋</a></li>
                                        <li class="fore6 "><a href="category.php?id=5" >家用电器</a></li>
                                        <li class="fore7 "><a href="group_buy.php" >团购商品</a></li>
                                        <li class="fore8 "><a href="store_street.php" target="_blank" >店铺街</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</div>
 <script type="text/javascript" src="js/jd_index.js"></script><div class="w">
	<div id="o-slide"> <div id="slide" class="m indexAd">
	<ul class="slide-items slide-items-w">
    	        <li> <a href="http://localhost/TMSS/index.php" target="_blank"><img src="data/afficheimg/20151228baybwr.gif" width="730" height="454"></a> </li>
                <li> <a href="http://localhost/TMSS/index.php" target="_blank"><img src="data/afficheimg/20151228ivdoyj.gif" width="730" height="454"></a> </li>
            </ul>
    <ul class="slide-items slide-items-s">
    	    </ul>
    <div class="slide-controls slide-controls-w">
    	<div class="slideLiseCon"><span class="curr">1</span><span >2</span></div>
    </div>
    <div class="slide-controls slide-controls-s">
    	<div class="slideLiseCon"></div>
    </div>
    <a class="indexAd_qh prev" href="javascript:void(0)"><</a>
    <a class="indexAd_qh next" href="javascript:void(0)">></a>
</div>
</div>
  
  <div id="jdnews" class="m m1"> 
<div class="mt">
	<h2>站内快讯</h2>
    <div class="extra"><a href="article_cat.php?id=12" target="_blank">更多&nbsp;&gt;</a></div>
</div>
<div class="mc">
	<ul>
    	        <li ><a href="article.php?id=33" target="_blank" title="三星SGHU308说明书下载">三星SGHU308说明书下载</a></li>
                <li ><a href="article.php?id=32" target="_blank" title="手机游戏下载">手机游戏下载</a></li>
                <li ><a href="article.php?id=43" target="_blank" title="海尔品牌团 特价一天！">海尔品牌团 特价一天！</a></li>
                <li ><a href="article.php?id=42" target="_blank" title="手机7周年特惠盛典">手机7周年特惠盛典</a></li>
                <li ><a href="article.php?id=41" target="_blank" title="小家电专场满500减100">小家电专场满500减100</a></li>
                <li ><a href="article.php?id=40" target="_blank" title="出游装备1-5折还满减">出游装备1-5折还满减</a></li>
                <li ><a href="article.php?id=39" target="_blank" title="七夕表白珠宝专场">七夕表白珠宝专场</a></li>
                <li ><a href="article.php?id=38" target="_blank" title="京东大篷车百城行">京东大篷车百城行</a></li>
            </ul>
</div>
 </div>
  
  
  <div class="m _520_a_lifeandjourney_1 hover" id="virtuals-2014">
    <div class="mt">
    	<h2>其它服务</h2>
        <ul class="fore1 lh">
        	<li class="fore1 abtest_huafei current"><a href="javascript:void(0);"><s></s>活动<i></i></a></li>
            <li class="fore2 abtest_lvxing"><a href="javascript:void(0);"><s></s>发货单<i></i></a></li>
            <li class="fore3 abtest_caipiao"><a href="javascript:void(0);"><s></s>订单<i></i></a></li>
            <li class="fore4 abtest_youxi"><a href="javascript:void(0);"><s></s>投票<i></i></a></li>
        </ul>
    </div>
    <div class="mc" style="position:absolute;">
      <div class="virtuals-iframes">
        <div class="virtuals-w"> 
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"3";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca </div>
        <div class="virtuals-s"> 
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"6";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca </div>
      </div>
      <div class="virtuals-iframes" id="txtMarquee-top"> 
<ul  id="brtup1ul" >
<li style="padding-top:6px;">
 <table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			  <td width="45%" align="left">&nbsp;订单号:&nbsp;</td>
			  <td>2014073126550</td>
		  </tr>
		  <tr >
			  <td  align="left">&nbsp;发货单:&nbsp;</td>
			  <td ><form style="margin:0px" methods="post" action="http://115.238.100.211:8081/result.aspx" name="queryForm_444444" target="_blank"><input type="hidden" name="wen" value="444444" /><a href="javascript:document.forms['queryForm_444444'].submit();">444444</a></form></td>
		  </tr>
	  </table>
   <div style="height:10px; border-bottom:1px dashed #ccc; width:100%;"></div>
</li>
<li style="padding-top:6px;">
 <table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			  <td width="45%" align="left">&nbsp;订单号:&nbsp;</td>
			  <td>2014073113030</td>
		  </tr>
		  <tr >
			  <td  align="left">&nbsp;发货单:&nbsp;</td>
			  <td ><form style="margin:0px" methods="post" action="http://115.238.100.211:8081/result.aspx" name="queryForm_5555" target="_blank"><input type="hidden" name="wen" value="5555" /><a href="javascript:document.forms['queryForm_5555'].submit();">5555</a></form></td>
		  </tr>
	  </table>
   <div style="height:10px; border-bottom:1px dashed #ccc; width:100%;"></div>
</li>
<li style="padding-top:6px;">
 <table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			  <td width="45%" align="left">&nbsp;订单号:&nbsp;</td>
			  <td>2014080751421</td>
		  </tr>
		  <tr >
			  <td  align="left">&nbsp;发货单:&nbsp;</td>
			  <td ><form style="margin:0px" methods="post" action="http://115.238.100.211:8081/result.aspx" name="queryForm_3333" target="_blank"><input type="hidden" name="wen" value="3333" /><a href="javascript:document.forms['queryForm_3333'].submit();">3333</a></form></td>
		  </tr>
	  </table>
   <div style="height:10px; border-bottom:1px dashed #ccc; width:100%;"></div>
</li>
<li style="padding-top:6px;">
 <table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			  <td width="45%" align="left">&nbsp;订单号:&nbsp;</td>
			  <td>2014081499923</td>
		  </tr>
		  <tr >
			  <td  align="left">&nbsp;发货单:&nbsp;</td>
			  <td ><form style="margin:0px" methods="post" action="http://115.238.100.211:8081/result.aspx" name="queryForm_2222" target="_blank"><input type="hidden" name="wen" value="2222" /><a href="javascript:document.forms['queryForm_2222'].submit();">2222</a></form></td>
		  </tr>
	  </table>
   <div style="height:10px; border-bottom:1px dashed #ccc; width:100%;"></div>
</li>
<li style="padding-top:6px;">
 <table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			  <td width="45%" align="left">&nbsp;订单号:&nbsp;</td>
			  <td>2014081591904</td>
		  </tr>
		  <tr >
			  <td  align="left">&nbsp;发货单:&nbsp;</td>
			  <td ><form style="margin:0px" methods="post" action="http://115.238.100.211:8081/result.aspx" name="queryForm_1111111" target="_blank"><input type="hidden" name="wen" value="1111111" /><a href="javascript:document.forms['queryForm_1111111'].submit();">1111111</a></form></td>
		  </tr>
	  </table>
   <div style="height:10px; border-bottom:1px dashed #ccc; width:100%;"></div>
</li>
</ul>
 </div>
      <div class="virtuals-iframes"> 
<script>var invalid_order_sn = "无效订单号"</script>
<div style="padding:8px; ">
    <form name="ecsOrderQuery">
    <input type="text" name="order_sn" class="inputBg" /><br />
    <div class="blank5"></div>
    <input type="button" value="查询该订单号" class="bnt_blue_2" onclick="orderQuery()" />
    </form>
    <div id="ECS_ORDER_QUERY" style="margin-top:8px;">
          </div>
</div> </div>
      <div class="virtuals-iframes"> 
554fcae493e564ee0dc75bdf2ebf94cavote|a:1:{s:4:"name";s:4:"vote";}554fcae493e564ee0dc75bdf2ebf94ca </div>
    </div>
  </div>
  
   
</div>
<Div class="clear"></Div>
<div class="w todayRest">
	<div class="mt">
    	<div class="jd-clock-wrap">
        	<div class="jd-clock">
            	<i class="dian"></i>
                <div class="jd-clock-h" style="-webkit-transform: rotate(327deg);"></div>
                <div class="jd-clock-m"><i></i></div>
                <div class="jd-clock-s"><i></i></div>
            </div>
        </div>
    </div>
    
    <div class="jscroll" id="mscroll">
        <div class="ctrl" id="mscroll-ctrl-prev"><</div>
        <div class="ctrl" id="mscroll-ctrl-next">></div>
        <div class="o-list">
            <div class="list" id="mscroll-list">
                <ul class="mscroll-ul" >
                
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"2";s:3:"num";s:1:"9";}554fcae493e564ee0dc75bdf2ebf94ca
                </ul>
            </div>
        </div>
    </div>
    
</div>
554fcae493e564ee0dc75bdf2ebf94cabrowse_related_index|a:1:{s:4:"name";s:20:"browse_related_index";}554fcae493e564ee0dc75bdf2ebf94ca<div class="blank20"></div>
<div id="showcase" class="w advanced">
	<div class="m">
    	<div class="mt"><h2>汤姆叔叔特色购</h2></div>
        <div class="mc">
        	<div class="sc-list clearfix">
            	<div class="item fore1"> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:2:{s:4:"name";s:7:"ads_pro";s:4:"type";s:7:"特色1";}554fcae493e564ee0dc75bdf2ebf94ca </div>
                <div class="item fore2"> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:2:{s:4:"name";s:7:"ads_pro";s:4:"type";s:7:"特色2";}554fcae493e564ee0dc75bdf2ebf94ca </div>
                <div class="item fore3"> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:2:{s:4:"name";s:7:"ads_pro";s:4:"type";s:7:"特色3";}554fcae493e564ee0dc75bdf2ebf94ca </div>
                <div class="item fore4"> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:2:{s:4:"name";s:7:"ads_pro";s:4:"type";s:7:"特色4";}554fcae493e564ee0dc75bdf2ebf94ca </div>
                <div class="item fore5"> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:2:{s:4:"name";s:7:"ads_pro";s:4:"type";s:7:"特色5";}554fcae493e564ee0dc75bdf2ebf94ca </div>
                <div class="item fore6"> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:2:{s:4:"name";s:7:"ads_pro";s:4:"type";s:7:"特色6";}554fcae493e564ee0dc75bdf2ebf94ca </div>
                <div class="item fore7"> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:2:{s:4:"name";s:7:"ads_pro";s:4:"type";s:7:"特色7";}554fcae493e564ee0dc75bdf2ebf94ca </div>
                <div class="item fore8"> 554fcae493e564ee0dc75bdf2ebf94caads_pro|a:2:{s:4:"name";s:7:"ads_pro";s:4:"type";s:7:"特色8";}554fcae493e564ee0dc75bdf2ebf94ca </div>
            </div>
            <div class="blank10"></div>
            <div id="showcase-promotion-1" class="sc-bottom" style="display: block; ">
            	<div class="item">
                	
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"7";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div id="floors-list">
   
<div class="w catGoodsBox catGoodsSlide">
	<div class="mt">
    	<h2><i></i><span></span><font></font></h2>
        <div class="hd_box">
        	<ul>
            	<li><a href="javascript:;">热门<i></i></a></li>
            	            </ul>
        </div>
    </div>
    <div class="mc">
    	<div class="side">
        	<div class="banner">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:24:"分类下商品左广告";}554fcae493e564ee0dc75bdf2ebf94ca<i></i></div>
            <div class="themes Category">
            	<ul>
                                    </ul>
            </div>
            <div class="words">
            	<ul>
                	                </ul>
            </div>
        </div>
        <div class="bd_box">
        	<div class="bdBox bdBox01">
            	<div class="mainInner">
                	<ul class="mainBody">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:31:"分类下商品右侧小广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:31:"分类下商品右侧小广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:25:"分类下商品右广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:25:"分类下商品右广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:25:"分类下商品右广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                    <ul class="mainExtra">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:31:"分类下商品右侧小广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:31:"分类下商品右侧小广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore3">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:25:"分类下商品右广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                </div>
                <div class="bdSlider">
                	<div class="hd_Slider">
                    	<ul>
                        	<li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="bd_Slider">
                    	<ul>
                        	<li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:37:"分类下商品右侧幻灯片广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:37:"分类下商品右侧幻灯片广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:37:"分类下商品右侧幻灯片广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";N;s:4:"type";s:37:"分类下商品右侧幻灯片广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        </ul>
                    </div>
                    <a class="bdSliderQh prev_bd" href="javascript:void(0)"><</a>
                    <a class="bdSliderQh next_bd" href="javascript:void(0)">></a>
                </div>
            </div>
        	        </div>
    </div>
    <div class="cat_brands">
    	<ul>
        	        </ul>
    </div>
</div><div class="w catGoodsBox catGoodsSlide">
	<div class="mt">
    	<h2><i></i><span></span><font>电脑、办公</font></h2>
        <div class="hd_box">
        	<ul>
            	<li><a href="javascript:;">热门<i></i></a></li>
            	                            	<li><a href="javascript:;">电脑整机<i></i></a></li>
                                                            	<li><a href="javascript:;">办公打印<i></i></a></li>
                                                            	<li><a href="javascript:;">电脑配件<i></i></a></li>
                                                            	<li><a href="javascript:;">办公文仪<i></i></a></li>
                                                            	<li><a href="javascript:;">外设产品<i></i></a></li>
                                                            	<li><a href="javascript:;">服务产品<i></i></a></li>
                                                            	<li><a href="javascript:;">网络产品<i></i></a></li>
                                            </ul>
        </div>
    </div>
    <div class="mc">
    	<div class="side">
        	<div class="banner">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:24:"分类下商品左广告";}554fcae493e564ee0dc75bdf2ebf94ca<i></i></div>
            <div class="themes Category">
            	<ul>
                                                            <li class="fore1"><a href="category.php?id=244&amp;price_min=&amp;price_max="><i></i><span>电脑整机</span></a></li>
                                                                                <li class="fore2"><a href="category.php?id=245&amp;price_min=&amp;price_max="><i></i><span>电脑配件</span></a></li>
                                                                                <li class="fore3"><a href="category.php?id=246&amp;price_min=&amp;price_max="><i></i><span>外设产品</span></a></li>
                                                                                <li class="fore4"><a href="category.php?id=247&amp;price_min=&amp;price_max="><i></i><span>网络产品</span></a></li>
                                                                                <li class="fore5"><a href="category.php?id=248&amp;price_min=&amp;price_max="><i></i><span>办公打印</span></a></li>
                                                                                <li class="fore6"><a href="category.php?id=249&amp;price_min=&amp;price_max="><i></i><span>办公文仪</span></a></li>
                                                                                                </ul>
            </div>
            <div class="words">
            	<ul>
                	                	                	<li>
                                        	                                                <span><a href="category.php?id=251&amp;price_min=&amp;price_max=" target="_blank" title="笔记本">笔记本</a></span>
                                                                                                <span><a href="category.php?id=252&amp;price_min=&amp;price_max=" target="_blank" title="超极本">超极本</a></span>
                                                                                                <span><a href="category.php?id=253&amp;price_min=&amp;price_max=" target="_blank" title="游戏本">游戏本</a></span>
                                                                                                <span><a href="category.php?id=254&amp;price_min=&amp;price_max=" target="_blank" title="平板电脑">平板电脑</a></span>
                                                                                                                                                                                                                                                                                                        	                    	                                                <span><a href="category.php?id=259&amp;price_min=&amp;price_max=" target="_blank" title="CPU">CPU</a></span>
                                                                                                <span><a href="category.php?id=260&amp;price_min=&amp;price_max=" target="_blank" title="主板">主板</a></span>
                                                                                                <span><a href="category.php?id=261&amp;price_min=&amp;price_max=" target="_blank" title="显卡">显卡</a></span>
                                                                                                <span><a href="category.php?id=262&amp;price_min=&amp;price_max=" target="_blank" title="硬盘">硬盘</a></span>
                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=273&amp;price_min=&amp;price_max=" target="_blank" title="鼠标">鼠标</a></span>
                                                                                                <span><a href="category.php?id=274&amp;price_min=&amp;price_max=" target="_blank" title="键盘">键盘</a></span>
                                                                                                <span><a href="category.php?id=275&amp;price_min=&amp;price_max=" target="_blank" title="游戏设备">游戏设备</a></span>
                                                                                                <span><a href="category.php?id=276&amp;price_min=&amp;price_max=" target="_blank" title="U盘">U盘</a></span>
                                                                                                                                                                                                                                                                                                                                                                                                        	                    	                                                <span><a href="category.php?id=288&amp;price_min=&amp;price_max=" target="_blank" title="路由器">路由器</a></span>
                                                                                                <span><a href="category.php?id=289&amp;price_min=&amp;price_max=" target="_blank" title="网卡">网卡</a></span>
                                                                                                <span><a href="category.php?id=290&amp;price_min=&amp;price_max=" target="_blank" title="交换机">交换机</a></span>
                                                                                                <span><a href="category.php?id=291&amp;price_min=&amp;price_max=" target="_blank" title="网络存储">网络存储</a></span>
                                                                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=295&amp;price_min=&amp;price_max=" target="_blank" title="打印机">打印机</a></span>
                                                                                                <span><a href="category.php?id=296&amp;price_min=&amp;price_max=" target="_blank" title="一体机">一体机</a></span>
                                                                                                <span><a href="category.php?id=297&amp;price_min=&amp;price_max=" target="_blank" title="投影机">投影机</a></span>
                                                                                                <span><a href="category.php?id=298&amp;price_min=&amp;price_max=" target="_blank" title="投影配件">投影配件</a></span>
                                                                                                                                                                                                                                                                                                                                                                                                        	                    	                                                <span><a href="category.php?id=307&amp;price_min=&amp;price_max=" target="_blank" title="办公文具">办公文具</a></span>
                                                                                                <span><a href="category.php?id=308&amp;price_min=&amp;price_max=" target="_blank" title="文件管理">文件管理</a></span>
                                                                                                <span><a href="category.php?id=309&amp;price_min=&amp;price_max=" target="_blank" title="笔类">笔类</a></span>
                                                                                                <span><a href="category.php?id=310&amp;price_min=&amp;price_max=" target="_blank" title="纸类">纸类</a></span>
                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=325&amp;price_min=&amp;price_max=" target="_blank" title="上门服务">上门服务</a></span>
                                                                                                <span><a href="category.php?id=326&amp;price_min=&amp;price_max=" target="_blank" title="远程服务">远程服务</a></span>
                                                                                                <span><a href="category.php?id=327&amp;price_min=&amp;price_max=" target="_blank" title="电脑软件">电脑软件</a></span>
                                                                                        </li>
                                                        </ul>
            </div>
        </div>
        <div class="bd_box">
        	<div class="bdBox bdBox01">
            	<div class="mainInner">
                	<ul class="mainBody">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:31:"分类下商品右侧小广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:31:"分类下商品右侧小广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:25:"分类下商品右广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:25:"分类下商品右广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:25:"分类下商品右广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                    <ul class="mainExtra">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:31:"分类下商品右侧小广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:31:"分类下商品右侧小广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore3">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:25:"分类下商品右广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                </div>
                <div class="bdSlider">
                	<div class="hd_Slider">
                    	<ul>
                        	<li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="bd_Slider">
                    	<ul>
                        	<li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:37:"分类下商品右侧幻灯片广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:37:"分类下商品右侧幻灯片广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:37:"分类下商品右侧幻灯片广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:15:"电脑、办公";s:4:"type";s:37:"分类下商品右侧幻灯片广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        </ul>
                    </div>
                    <a class="bdSliderQh prev_bd" href="javascript:void(0)"><</a>
                    <a class="bdSliderQh next_bd" href="javascript:void(0)">></a>
                </div>
            </div>
        	                    	<div class="bdBox bdBoxPro">
            	<ul>
                	                	<li>
                    	<div class="pImg"><a href="goods.php?id=142" target="_blank" title="清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金"><img width="100" height="100" alt="清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金" src="images/201408/thumb_img/142_thumb_G_1408400346592.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=142" target="_blank" title="清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金">清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G...</a></div>
                        <div class="pPrice">￥0</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=141" target="_blank" title="海尔（Haier） S400 14英寸游戏本（i7-4500U 4G 500G HD4400+GT745M 2G独显）黑色"><img width="100" height="100" alt="海尔（Haier） S400 14英寸游戏本（i7-4500U 4G 500G HD4400+GT745M 2G独显）黑色" src="images/201408/thumb_img/141_thumb_G_1408400311748.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=141" target="_blank" title="海尔（Haier） S400 14英寸游戏本（i7-4500U 4G 500G HD4400+GT745M 2G独显）黑色">海尔（Haier） S400 14英寸游戏本（i7-4500U 4G 500G ...</a></div>
                        <div class="pPrice">￥4499</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=60" target="_blank" title="联想（Lenovo） C245 18.5英寸一体电脑（E1-1200 2G 500G DVD刻录 Dos）白色"><img width="100" height="100" alt="联想（Lenovo） C245 18.5英寸一体电脑（E1-1200 2G 500G DVD刻录 Dos）白色" src="images/201407/thumb_img/60_thumb_G_1406502424054.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=60" target="_blank" title="联想（Lenovo） C245 18.5英寸一体电脑（E1-1200 2G 500G DVD刻录 Dos）白色">联想（Lenovo） C245 18.5英寸一体电脑（E1-1200 2G 50...</a></div>
                        <div class="pPrice">￥1999</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=59" target="_blank" title="微软（Microsoft） Surface2 64G（Tegra 4四核 2G内存 64G硬盘 1080P高清屏 USB3.0）"><img width="100" height="100" alt="微软（Microsoft） Surface2 64G（Tegra 4四核 2G内存 64G硬盘 1080P高清屏 USB3.0）" src="images/201407/thumb_img/59_thumb_G_1406502346659.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=59" target="_blank" title="微软（Microsoft） Surface2 64G（Tegra 4四核 2G内存 64G硬盘 1080P高清屏 USB3.0）">微软（Microsoft） Surface2 64G（Tegra 4四核 2G内...</a></div>
                        <div class="pPrice">￥4088</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=58" target="_blank" title="机械革命（MECHREVO） MR X3 升级版 14英寸游戏本(i7-4702MQ 4G 64G SSD+1T机械 GTX850M 游戏键盘)黑色"><img width="100" height="100" alt="机械革命（MECHREVO） MR X3 升级版 14英寸游戏本(i7-4702MQ 4G 64G SSD+1T机械 GTX850M 游戏键盘)黑色" src="images/201407/thumb_img/58_thumb_G_1406502297662.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=58" target="_blank" title="机械革命（MECHREVO） MR X3 升级版 14英寸游戏本(i7-4702MQ 4G 64G SSD+1T机械 GTX850M 游戏键盘)黑色">机械革命（MECHREVO） MR X3 升级版 14英寸游戏本(i7-4702...</a></div>
                        <div class="pPrice">￥4999</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=57" target="_blank" title="华硕（ASUS） N550JV 15.6英寸笔记本(i5-4200H 4G 750G GT750M 2G独显 1920x1080 Win8 黑色)"><img width="100" height="100" alt="华硕（ASUS） N550JV 15.6英寸笔记本(i5-4200H 4G 750G GT750M 2G独显 1920x1080 Win8 黑色)" src="images/201407/thumb_img/57_thumb_G_1406502251842.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=57" target="_blank" title="华硕（ASUS） N550JV 15.6英寸笔记本(i5-4200H 4G 750G GT750M 2G独显 1920x1080 Win8 黑色)">华硕（ASUS） N550JV 15.6英寸笔记本(i5-4200H 4G 75...</a></div>
                        <div class="pPrice">￥5999</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=56" target="_blank" title="惠普（HP） CQ14-a104TX 14英寸笔记本电脑 （i5-4200M 4G 750GB GT820M 2G独显 DOS）"><img width="100" height="100" alt="惠普（HP） CQ14-a104TX 14英寸笔记本电脑 （i5-4200M 4G 750GB GT820M 2G独显 DOS）" src="images/201407/thumb_img/56_thumb_G_1406502138545.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=56" target="_blank" title="惠普（HP） CQ14-a104TX 14英寸笔记本电脑 （i5-4200M 4G 750GB GT820M 2G独显 DOS）">惠普（HP） CQ14-a104TX 14英寸笔记本电脑 （i5-4200M 4...</a></div>
                        <div class="pPrice">￥3199</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=55" target="_blank" title="宏碁（acer） V3-572G 15.6英寸超薄本 （i5-4210U 4G 500G GT840M 2G独显 win8.1 料号59TB）银色"><img width="100" height="100" alt="宏碁（acer） V3-572G 15.6英寸超薄本 （i5-4210U 4G 500G GT840M 2G独显 win8.1 料号59TB）银色" src="images/201407/thumb_img/55_thumb_G_1406502466933.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=55" target="_blank" title="宏碁（acer） V3-572G 15.6英寸超薄本 （i5-4210U 4G 500G GT840M 2G独显 win8.1 料号59TB）银色">宏碁（acer） V3-572G 15.6英寸超薄本 （i5-4210U 4G ...</a></div>
                        <div class="pPrice">￥3599</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=54" target="_blank" title="雷神（ThundeRobot）911-E1 15.6英寸游戏本（i7-4710HQ 4G 500G GTX850M 2G DDR5 背光键盘 全高清屏）黑"><img width="100" height="100" alt="雷神（ThundeRobot）911-E1 15.6英寸游戏本（i7-4710HQ 4G 500G GTX850M 2G DDR5 背光键盘 全高清屏）黑" src="images/201407/thumb_img/54_thumb_G_1406501940558.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=54" target="_blank" title="雷神（ThundeRobot）911-E1 15.6英寸游戏本（i7-4710HQ 4G 500G GTX850M 2G DDR5 背光键盘 全高清屏）黑">雷神（ThundeRobot）911-E1 15.6英寸游戏本（i7-4710H...</a></div>
                        <div class="pPrice">￥6499</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=53" target="_blank" title="联想（Lenovo） Y400N 14.0英寸笔记本电脑（i5-3230M 4G 1T 2G独显 摄像头 DVD刻 Win8）"><img width="100" height="100" alt="联想（Lenovo） Y400N 14.0英寸笔记本电脑（i5-3230M 4G 1T 2G独显 摄像头 DVD刻 Win8）" src="images/201407/thumb_img/53_thumb_G_1406501874150.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=53" target="_blank" title="联想（Lenovo） Y400N 14.0英寸笔记本电脑（i5-3230M 4G 1T 2G独显 摄像头 DVD刻 Win8）">联想（Lenovo） Y400N 14.0英寸笔记本电脑（i5-3230M 4G...</a></div>
                        <div class="pPrice">￥4899</div>
                    </li>
                                    </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                </div>
    </div>
    <div class="cat_brands">
    	<ul>
        	                    	<li class="fore1"><a target="_blank" href="brand.php?id=12"><img height="40" width="100" src="data/brandlogo/1408388731946030201.gif"></a></li>
                                            	<li class="fore2"><a target="_blank" href="brand.php?id=33"><img height="40" width="100" src="data/brandlogo/1408388860169094248.jpg"></a></li>
                                            	<li class="fore3"><a target="_blank" href="brand.php?id=35"><img height="40" width="100" src="data/brandlogo/1408388873290611085.jpg"></a></li>
                                            	<li class="fore4"><a target="_blank" href="brand.php?id=36"><img height="40" width="100" src="data/brandlogo/1408388884893878072.jpg"></a></li>
                                            	<li class="fore5"><a target="_blank" href="brand.php?id=37"><img height="40" width="100" src="data/brandlogo/1408388892253249002.jpg"></a></li>
                                            	<li class="fore6"><a target="_blank" href="brand.php?id=38"><img height="40" width="100" src="data/brandlogo/1408388897063788352.jpg"></a></li>
                                            	<li class="fore7"><a target="_blank" href="brand.php?id=39"><img height="40" width="100" src="data/brandlogo/1408388904367521114.jpg"></a></li>
                                            	<li class="fore8"><a target="_blank" href="brand.php?id=66"><img height="40" width="100" src="data/brandlogo/1408389135311019767.gif"></a></li>
                                            	<li class="fore9"><a target="_blank" href="brand.php?id=73"><img height="40" width="100" src="data/brandlogo/1408400371994766756.gif"></a></li>
                                            	<li class="fore10"><a target="_blank" href="brand.php?id=74"><img height="40" width="100" src="data/brandlogo/1408400377137441291.gif"></a></li>
                                </ul>
    </div>
</div><div class="w catGoodsBox catGoodsSlide">
	<div class="mt">
    	<h2><i></i><span></span><font>服饰内衣、珠宝首饰</font></h2>
        <div class="hd_box">
        	<ul>
            	<li><a href="javascript:;">热门<i></i></a></li>
            	                            	<li><a href="javascript:;">女装<i></i></a></li>
                                                            	<li><a href="javascript:;">珠宝首饰<i></i></a></li>
                                                            	<li><a href="javascript:;">男装<i></i></a></li>
                                                            	<li><a href="javascript:;">内衣<i></i></a></li>
                                                            	<li><a href="javascript:;">服饰配件<i></i></a></li>
                                            </ul>
        </div>
    </div>
    <div class="mc">
    	<div class="side">
        	<div class="banner">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:24:"分类下商品左广告";}554fcae493e564ee0dc75bdf2ebf94ca<i></i></div>
            <div class="themes Category">
            	<ul>
                                                            <li class="fore1"><a href="category.php?id=711&amp;price_min=&amp;price_max="><i></i><span>女装</span></a></li>
                                                                                <li class="fore2"><a href="category.php?id=712&amp;price_min=&amp;price_max="><i></i><span>男装</span></a></li>
                                                                                <li class="fore3"><a href="category.php?id=713&amp;price_min=&amp;price_max="><i></i><span>内衣</span></a></li>
                                                                                <li class="fore4"><a href="category.php?id=714&amp;price_min=&amp;price_max="><i></i><span>服饰配件</span></a></li>
                                                                                <li class="fore5"><a href="category.php?id=715&amp;price_min=&amp;price_max="><i></i><span>珠宝首饰</span></a></li>
                                                        </ul>
            </div>
            <div class="words">
            	<ul>
                	                	                	<li>
                                        	                                                <span><a href="category.php?id=716&amp;price_min=&amp;price_max=" target="_blank" title="连衣裙">连衣裙</a></span>
                                                                                                <span><a href="category.php?id=717&amp;price_min=&amp;price_max=" target="_blank" title="蕾丝/雪纺衫">蕾丝/雪纺衫</a></span>
                                                                                                <span><a href="category.php?id=718&amp;price_min=&amp;price_max=" target="_blank" title="衬衫">衬衫</a></span>
                                                                                                <span><a href="category.php?id=719&amp;price_min=&amp;price_max=" target="_blank" title="T恤">T恤</a></span>
                                                                                                                                                                                                                                                                                                                                                                                                        	                    	                                                <span><a href="category.php?id=749&amp;price_min=&amp;price_max=" target="_blank" title="衬衫">衬衫</a></span>
                                                                                                <span><a href="category.php?id=750&amp;price_min=&amp;price_max=" target="_blank" title="T恤">T恤</a></span>
                                                                                                <span><a href="category.php?id=751&amp;price_min=&amp;price_max=" target="_blank" title="POLO衫">POLO衫</a></span>
                                                                                                <span><a href="category.php?id=752&amp;price_min=&amp;price_max=" target="_blank" title="针织衫">针织衫</a></span>
                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=777&amp;price_min=&amp;price_max=" target="_blank" title="文胸">文胸</a></span>
                                                                                                <span><a href="category.php?id=778&amp;price_min=&amp;price_max=" target="_blank" title="睡衣/家居服">睡衣/家居服</a></span>
                                                                                                <span><a href="category.php?id=779&amp;price_min=&amp;price_max=" target="_blank" title="情侣睡衣">情侣睡衣</a></span>
                                                                                                <span><a href="category.php?id=780&amp;price_min=&amp;price_max=" target="_blank" title="文胸套装">文胸套装</a></span>
                                                                                                                                                                                                                                                                                                                                                                                                        	                    	                                                <span><a href="category.php?id=798&amp;price_min=&amp;price_max=" target="_blank" title="太阳镜">太阳镜</a></span>
                                                                                                <span><a href="category.php?id=799&amp;price_min=&amp;price_max=" target="_blank" title="光学镜架/镜片">光学镜架/镜片</a></span>
                                                                                                <span><a href="category.php?id=800&amp;price_min=&amp;price_max=" target="_blank" title="防辐射眼镜">防辐射眼镜</a></span>
                                                                                                <span><a href="category.php?id=801&amp;price_min=&amp;price_max=" target="_blank" title="女士丝巾/围巾/披肩">女士丝巾/围巾/披肩</a></span>
                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=812&amp;price_min=&amp;price_max=" target="_blank" title="时尚饰品">时尚饰品</a></span>
                                                                                                <span><a href="category.php?id=813&amp;price_min=&amp;price_max=" target="_blank" title="钻石">钻石</a></span>
                                                                                                <span><a href="category.php?id=814&amp;price_min=&amp;price_max=" target="_blank" title="翡翠玉石">翡翠玉石</a></span>
                                                                                                <span><a href="category.php?id=815&amp;price_min=&amp;price_max=" target="_blank" title="纯金K金饰品">纯金K金饰品</a></span>
                                                                                                                                                                                                                                                                                                                                        </li>
                                                        </ul>
            </div>
        </div>
        <div class="bd_box">
        	<div class="bdBox bdBox01">
            	<div class="mainInner">
                	<ul class="mainBody">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:31:"分类下商品右侧小广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:31:"分类下商品右侧小广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:25:"分类下商品右广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:25:"分类下商品右广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:25:"分类下商品右广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                    <ul class="mainExtra">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:31:"分类下商品右侧小广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:31:"分类下商品右侧小广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore3">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:25:"分类下商品右广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                </div>
                <div class="bdSlider">
                	<div class="hd_Slider">
                    	<ul>
                        	<li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="bd_Slider">
                    	<ul>
                        	<li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:37:"分类下商品右侧幻灯片广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:37:"分类下商品右侧幻灯片广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:37:"分类下商品右侧幻灯片广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:27:"服饰内衣、珠宝首饰";s:4:"type";s:37:"分类下商品右侧幻灯片广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        </ul>
                    </div>
                    <a class="bdSliderQh prev_bd" href="javascript:void(0)"><</a>
                    <a class="bdSliderQh next_bd" href="javascript:void(0)">></a>
                </div>
            </div>
        	                    	<div class="bdBox bdBoxPro">
            	<ul>
                	                	<li>
                    	<div class="pImg"><a href="goods.php?id=68" target="_blank" title="莱雪曼2014夏装上新蕾丝镂空拼接修身连衣裙两件套8272 黑色 M"><img width="100" height="100" alt="莱雪曼2014夏装上新蕾丝镂空拼接修身连衣裙两件套8272 黑色 M" src="images/201407/thumb_img/68_thumb_G_1406503025139.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=68" target="_blank" title="莱雪曼2014夏装上新蕾丝镂空拼接修身连衣裙两件套8272 黑色 M">莱雪曼2014夏装上新蕾丝镂空拼接修身连衣裙两件套8272 黑色 M</a></div>
                        <div class="pPrice">￥138</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=67" target="_blank" title="誉彩 2014夏季新款无袖碎花长裙 大码女装裙子 韩版修身大摆连衣裙 兰花 M"><img width="100" height="100" alt="誉彩 2014夏季新款无袖碎花长裙 大码女装裙子 韩版修身大摆连衣裙 兰花 M" src="images/201407/thumb_img/67_thumb_G_1406502995304.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=67" target="_blank" title="誉彩 2014夏季新款无袖碎花长裙 大码女装裙子 韩版修身大摆连衣裙 兰花 M">誉彩 2014夏季新款无袖碎花长裙 大码女装裙子 韩版修身大摆连衣裙 兰花 M</a></div>
                        <div class="pPrice">￥179</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=66" target="_blank" title="时竟 2014夏季女装新款时尚气质OL显瘦一字领套装两件套套裙 修身连衣裙D8618 白配大红 M"><img width="100" height="100" alt="时竟 2014夏季女装新款时尚气质OL显瘦一字领套装两件套套裙 修身连衣裙D8618 白配大红 M" src="images/201407/thumb_img/66_thumb_G_1406502944980.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=66" target="_blank" title="时竟 2014夏季女装新款时尚气质OL显瘦一字领套装两件套套裙 修身连衣裙D8618 白配大红 M">时竟 2014夏季女装新款时尚气质OL显瘦一字领套装两件套套裙 修身连衣裙D86...</a></div>
                        <div class="pPrice">￥169</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=65" target="_blank" title="琼瑛女装2014夏季新款 韩版修身圆领雪纺连衣裙短袖纯色提花裙子3368 黄色 M"><img width="100" height="100" alt="琼瑛女装2014夏季新款 韩版修身圆领雪纺连衣裙短袖纯色提花裙子3368 黄色 M" src="images/201407/thumb_img/65_thumb_G_1406502906479.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=65" target="_blank" title="琼瑛女装2014夏季新款 韩版修身圆领雪纺连衣裙短袖纯色提花裙子3368 黄色 M">琼瑛女装2014夏季新款 韩版修身圆领雪纺连衣裙短袖纯色提花裙子3368 黄色 ...</a></div>
                        <div class="pPrice">￥138</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=64" target="_blank" title="俏妮妃 2014夏装新款时尚韩版女装 雪纺连衣裙圆领气质修身显瘦休闲OL淑女短袖打底连衣裙 白色 M"><img width="100" height="100" alt="俏妮妃 2014夏装新款时尚韩版女装 雪纺连衣裙圆领气质修身显瘦休闲OL淑女短袖打底连衣裙 白色 M" src="images/201407/thumb_img/64_thumb_G_1406502869209.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=64" target="_blank" title="俏妮妃 2014夏装新款时尚韩版女装 雪纺连衣裙圆领气质修身显瘦休闲OL淑女短袖打底连衣裙 白色 M">俏妮妃 2014夏装新款时尚韩版女装 雪纺连衣裙圆领气质修身显瘦休闲OL淑女短袖...</a></div>
                        <div class="pPrice">￥145</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=63" target="_blank" title="丝露怡语 2014夏雪纺撞色青花瓷修身连衣裙女 661 9919蓝色 M"><img width="100" height="100" alt="丝露怡语 2014夏雪纺撞色青花瓷修身连衣裙女 661 9919蓝色 M" src="images/201407/thumb_img/63_thumb_G_1406502822723.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=63" target="_blank" title="丝露怡语 2014夏雪纺撞色青花瓷修身连衣裙女 661 9919蓝色 M">丝露怡语 2014夏雪纺撞色青花瓷修身连衣裙女 661 9919蓝色 M</a></div>
                        <div class="pPrice">￥139</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=62" target="_blank" title="HARMARYCIAGA2014女装夏新款修身气质甜美糖果色假两件无袖连衣裙QZ109 水蓝 M"><img width="100" height="100" alt="HARMARYCIAGA2014女装夏新款修身气质甜美糖果色假两件无袖连衣裙QZ109 水蓝 M" src="images/201407/thumb_img/62_thumb_G_1406502731512.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=62" target="_blank" title="HARMARYCIAGA2014女装夏新款修身气质甜美糖果色假两件无袖连衣裙QZ109 水蓝 M">HARMARYCIAGA2014女装夏新款修身气质甜美糖果色假两件无袖连衣裙QZ...</a></div>
                        <div class="pPrice">￥128</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=61" target="_blank" title="刊菲(kanfei) 2014夏季新款修身中袖韩国金线蕾丝连衣裙9068 金色 M"><img width="100" height="100" alt="刊菲(kanfei) 2014夏季新款修身中袖韩国金线蕾丝连衣裙9068 金色 M" src="images/201407/thumb_img/61_thumb_G_1406502691863.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=61" target="_blank" title="刊菲(kanfei) 2014夏季新款修身中袖韩国金线蕾丝连衣裙9068 金色 M">刊菲(kanfei) 2014夏季新款修身中袖韩国金线蕾丝连衣裙9068 金色 ...</a></div>
                        <div class="pPrice">￥168</div>
                    </li>
                                    </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                </div>
    </div>
    <div class="cat_brands">
    	<ul>
        	                    	<li class="fore1"><a target="_blank" href="brand.php?id=40"><img height="40" width="100" src="data/brandlogo/1408388912842195129.gif"></a></li>
                                            	<li class="fore2"><a target="_blank" href="brand.php?id=41"><img height="40" width="100" src="data/brandlogo/1408388917023098895.gif"></a></li>
                                            	<li class="fore3"><a target="_blank" href="brand.php?id=42"><img height="40" width="100" src="data/brandlogo/1408388927970168396.gif"></a></li>
                                            	<li class="fore4"><a target="_blank" href="brand.php?id=43"><img height="40" width="100" src="data/brandlogo/1408388934924405061.jpg"></a></li>
                                            	<li class="fore5"><a target="_blank" href="brand.php?id=44"><img height="40" width="100" src="data/brandlogo/1408388941128040572.gif"></a></li>
                                            	<li class="fore6"><a target="_blank" href="brand.php?id=45"><img height="40" width="100" src="data/brandlogo/1408388948874779333.gif"></a></li>
                                            	<li class="fore7"><a target="_blank" href="brand.php?id=46"><img height="40" width="100" src="data/brandlogo/1408388959674000474.gif"></a></li>
                                            	<li class="fore8"><a target="_blank" href="brand.php?id=50"><img height="40" width="100" src="data/brandlogo/1408388992835276757.gif"></a></li>
                                </ul>
    </div>
</div><div class="w catGoodsBox catGoodsSlide">
	<div class="mt">
    	<h2><i></i><span></span><font>家居、家具、家装、厨具</font></h2>
        <div class="hd_box">
        	<ul>
            	<li><a href="javascript:;">热门<i></i></a></li>
            	                            	<li><a href="javascript:;">家纺<i></i></a></li>
                                                            	<li><a href="javascript:;">家装软饰<i></i></a></li>
                                                            	<li><a href="javascript:;">家具<i></i></a></li>
                                                            	<li><a href="javascript:;">厨具<i></i></a></li>
                                                            	<li><a href="javascript:;">灯具<i></i></a></li>
                                                            	<li><a href="javascript:;">家装建材<i></i></a></li>
                                                            	<li><a href="javascript:;">生活日用<i></i></a></li>
                                            </ul>
        </div>
    </div>
    <div class="mc">
    	<div class="side">
        	<div class="banner">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:24:"分类下商品左广告";}554fcae493e564ee0dc75bdf2ebf94ca<i></i></div>
            <div class="themes Category">
            	<ul>
                                                            <li class="fore1"><a href="category.php?id=330&amp;price_min=&amp;price_max="><i></i><span>家纺</span></a></li>
                                                                                <li class="fore2"><a href="category.php?id=328&amp;price_min=&amp;price_max="><i></i><span>厨具</span></a></li>
                                                                                <li class="fore3"><a href="category.php?id=329&amp;price_min=&amp;price_max="><i></i><span>家装建材</span></a></li>
                                                                                <li class="fore4"><a href="category.php?id=331&amp;price_min=&amp;price_max="><i></i><span>家具</span></a></li>
                                                                                <li class="fore5"><a href="category.php?id=332&amp;price_min=&amp;price_max="><i></i><span>灯具</span></a></li>
                                                                                <li class="fore6"><a href="category.php?id=333&amp;price_min=&amp;price_max="><i></i><span>生活日用</span></a></li>
                                                                                                </ul>
            </div>
            <div class="words">
            	<ul>
                	                	                	<li>
                                        	                                                <span><a href="category.php?id=353&amp;price_min=&amp;price_max=" target="_blank" title="床品套件">床品套件</a></span>
                                                                                                <span><a href="category.php?id=354&amp;price_min=&amp;price_max=" target="_blank" title="被子">被子</a></span>
                                                                                                <span><a href="category.php?id=355&amp;price_min=&amp;price_max=" target="_blank" title="蚊帐">蚊帐</a></span>
                                                                                                <span><a href="category.php?id=356&amp;price_min=&amp;price_max=" target="_blank" title="凉席">凉席</a></span>
                                                                                                                                                                                                                                                                                                                                                                                                        	                    	                                                <span><a href="category.php?id=335&amp;price_min=&amp;price_max=" target="_blank" title="烹饪锅具">烹饪锅具</a></span>
                                                                                                <span><a href="category.php?id=336&amp;price_min=&amp;price_max=" target="_blank" title="刀剪菜板">刀剪菜板</a></span>
                                                                                                <span><a href="category.php?id=337&amp;price_min=&amp;price_max=" target="_blank" title="厨房配件">厨房配件</a></span>
                                                                                                <span><a href="category.php?id=338&amp;price_min=&amp;price_max=" target="_blank" title="水具酒具">水具酒具</a></span>
                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=341&amp;price_min=&amp;price_max=" target="_blank" title="灯饰照明">灯饰照明</a></span>
                                                                                                <span><a href="category.php?id=342&amp;price_min=&amp;price_max=" target="_blank" title="厨房卫浴">厨房卫浴</a></span>
                                                                                                <span><a href="category.php?id=343&amp;price_min=&amp;price_max=" target="_blank" title="五金工具">五金工具</a></span>
                                                                                                <span><a href="category.php?id=344&amp;price_min=&amp;price_max=" target="_blank" title="电工电料">电工电料</a></span>
                                                                                                                                                                                                                                                                                                                                                                                                        	                    	                                                <span><a href="category.php?id=366&amp;price_min=&amp;price_max=" target="_blank" title="卧室家具">卧室家具</a></span>
                                                                                                <span><a href="category.php?id=367&amp;price_min=&amp;price_max=" target="_blank" title="客厅家具">客厅家具</a></span>
                                                                                                <span><a href="category.php?id=368&amp;price_min=&amp;price_max=" target="_blank" title="餐厅家具">餐厅家具</a></span>
                                                                                                <span><a href="category.php?id=369&amp;price_min=&amp;price_max=" target="_blank" title="书房家具">书房家具</a></span>
                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=383&amp;price_min=&amp;price_max=" target="_blank" title="台灯">台灯</a></span>
                                                                                                <span><a href="category.php?id=384&amp;price_min=&amp;price_max=" target="_blank" title="吸顶灯">吸顶灯</a></span>
                                                                                                <span><a href="category.php?id=385&amp;price_min=&amp;price_max=" target="_blank" title="筒灯射灯">筒灯射灯</a></span>
                                                                                                <span><a href="category.php?id=386&amp;price_min=&amp;price_max=" target="_blank" title="LED灯">LED灯</a></span>
                                                                                                                                                                                                                                                                                                                                                                                                        	                    	                                                <span><a href="category.php?id=394&amp;price_min=&amp;price_max=" target="_blank" title="收纳用品">收纳用品</a></span>
                                                                                                <span><a href="category.php?id=395&amp;price_min=&amp;price_max=" target="_blank" title="雨伞雨具">雨伞雨具</a></span>
                                                                                                <span><a href="category.php?id=396&amp;price_min=&amp;price_max=" target="_blank" title="浴室用品">浴室用品</a></span>
                                                                                                <span><a href="category.php?id=397&amp;price_min=&amp;price_max=" target="_blank" title="缝纫/针织用品">缝纫/针织用品</a></span>
                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=400&amp;price_min=&amp;price_max=" target="_blank" title="桌布/罩件">桌布/罩件</a></span>
                                                                                                <span><a href="category.php?id=401&amp;price_min=&amp;price_max=" target="_blank" title="地毯地垫">地毯地垫</a></span>
                                                                                                <span><a href="category.php?id=402&amp;price_min=&amp;price_max=" target="_blank" title="沙发垫套/椅垫">沙发垫套/椅垫</a></span>
                                                                                                <span><a href="category.php?id=403&amp;price_min=&amp;price_max=" target="_blank" title="帘艺隔断">帘艺隔断</a></span>
                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                        </ul>
            </div>
        </div>
        <div class="bd_box">
        	<div class="bdBox bdBox01">
            	<div class="mainInner">
                	<ul class="mainBody">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:31:"分类下商品右侧小广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:31:"分类下商品右侧小广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:25:"分类下商品右广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:25:"分类下商品右广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:25:"分类下商品右广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                    <ul class="mainExtra">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:31:"分类下商品右侧小广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:31:"分类下商品右侧小广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore3">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:25:"分类下商品右广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                </div>
                <div class="bdSlider">
                	<div class="hd_Slider">
                    	<ul>
                        	<li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="bd_Slider">
                    	<ul>
                        	<li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:37:"分类下商品右侧幻灯片广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:37:"分类下商品右侧幻灯片广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:37:"分类下商品右侧幻灯片广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:33:"家居、家具、家装、厨具";s:4:"type";s:37:"分类下商品右侧幻灯片广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        </ul>
                    </div>
                    <a class="bdSliderQh prev_bd" href="javascript:void(0)"><</a>
                    <a class="bdSliderQh next_bd" href="javascript:void(0)">></a>
                </div>
            </div>
        	                    	<div class="bdBox bdBoxPro">
            	<ul>
                	                	<li>
                    	<div class="pImg"><a href="goods.php?id=83" target="_blank" title="九洲鹿全工艺100%全棉超耐磨转移印花四件套 北京遇上西雅图 1.8米床"><img width="100" height="100" alt="九洲鹿全工艺100%全棉超耐磨转移印花四件套 北京遇上西雅图 1.8米床" src="images/201407/thumb_img/83_thumb_G_1406503766514.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=83" target="_blank" title="九洲鹿全工艺100%全棉超耐磨转移印花四件套 北京遇上西雅图 1.8米床">九洲鹿全工艺100%全棉超耐磨转移印花四件套 北京遇上西雅图 1.8米床</a></div>
                        <div class="pPrice">￥159</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=82" target="_blank" title="么小毛家纺 床上用品欧式经典 莫代尔全棉大提花 床单式婚庆四件套 加州记忆 1.8米床"><img width="100" height="100" alt="么小毛家纺 床上用品欧式经典 莫代尔全棉大提花 床单式婚庆四件套 加州记忆 1.8米床" src="images/201407/thumb_img/82_thumb_G_1406503733665.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=82" target="_blank" title="么小毛家纺 床上用品欧式经典 莫代尔全棉大提花 床单式婚庆四件套 加州记忆 1.8米床">么小毛家纺 床上用品欧式经典 莫代尔全棉大提花 床单式婚庆四件套 加州记忆 1....</a></div>
                        <div class="pPrice">￥488</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=81" target="_blank" title="爱斯基摩人 四件套 纯棉床上用品 斜纹家纺 双人 丽人风尚 1.5米/1.8米"><img width="100" height="100" alt="爱斯基摩人 四件套 纯棉床上用品 斜纹家纺 双人 丽人风尚 1.5米/1.8米" src="images/201710/thumb_img/81_thumb_G_1507681886477.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=81" target="_blank" title="爱斯基摩人 四件套 纯棉床上用品 斜纹家纺 双人 丽人风尚 1.5米/1.8米">爱斯基摩人 四件套 纯棉床上用品 斜纹家纺 双人 丽人风尚 1.5米/1.8米</a></div>
                        <div class="pPrice">￥169</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=80" target="_blank" title="绿野仙踪床上用品 全棉斜纹印花套件纯棉四件套 1.5/1.8米床 醉花樱-玫红 1.5-1.8米床适用"><img width="100" height="100" alt="绿野仙踪床上用品 全棉斜纹印花套件纯棉四件套 1.5/1.8米床 醉花樱-玫红 1.5-1.8米床适用" src="images/201407/thumb_img/80_thumb_G_1406503667991.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=80" target="_blank" title="绿野仙踪床上用品 全棉斜纹印花套件纯棉四件套 1.5/1.8米床 醉花樱-玫红 1.5-1.8米床适用">绿野仙踪床上用品 全棉斜纹印花套件纯棉四件套 1.5/1.8米床 醉花樱-玫红 ...</a></div>
                        <div class="pPrice">￥139</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=79" target="_blank" title="九洲鹿 100%全棉斜纹印花套件纯棉四件套 1.5米1.8米床 北京遇上西雅图 1.5米床"><img width="100" height="100" alt="九洲鹿 100%全棉斜纹印花套件纯棉四件套 1.5米1.8米床 北京遇上西雅图 1.5米床" src="images/201407/thumb_img/79_thumb_G_1406503627548.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=79" target="_blank" title="九洲鹿 100%全棉斜纹印花套件纯棉四件套 1.5米1.8米床 北京遇上西雅图 1.5米床">九洲鹿 100%全棉斜纹印花套件纯棉四件套 1.5米1.8米床 北京遇上西雅图 ...</a></div>
                        <div class="pPrice">￥129</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=78" target="_blank" title="巧布万棉家纺 床品件套 贡缎提花绣花1.5/1.8米婚庆四件套 舞动时尚-米白 1.8m床四件套"><img width="100" height="100" alt="巧布万棉家纺 床品件套 贡缎提花绣花1.5/1.8米婚庆四件套 舞动时尚-米白 1.8m床四件套" src="images/201407/thumb_img/78_thumb_G_1406503592733.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=78" target="_blank" title="巧布万棉家纺 床品件套 贡缎提花绣花1.5/1.8米婚庆四件套 舞动时尚-米白 1.8m床四件套">巧布万棉家纺 床品件套 贡缎提花绣花1.5/1.8米婚庆四件套 舞动时尚-米白 ...</a></div>
                        <div class="pPrice">￥249</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=77" target="_blank" title="富安娜家纺 圣之花床品套件 全棉清新田园 纯棉印花双人四件套 淑姿丰盈 蓝色 1.8m(6英尺)床"><img width="100" height="100" alt="富安娜家纺 圣之花床品套件 全棉清新田园 纯棉印花双人四件套 淑姿丰盈 蓝色 1.8m(6英尺)床" src="images/201407/thumb_img/77_thumb_G_1406503551340.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=77" target="_blank" title="富安娜家纺 圣之花床品套件 全棉清新田园 纯棉印花双人四件套 淑姿丰盈 蓝色 1.8m(6英尺)床">富安娜家纺 圣之花床品套件 全棉清新田园 纯棉印花双人四件套 淑姿丰盈 蓝色 1...</a></div>
                        <div class="pPrice">￥398</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=76" target="_blank" title="胜伟 高支棉斜纹四件套裸婚时代100%棉1.5/1.8米床"><img width="100" height="100" alt="胜伟 高支棉斜纹四件套裸婚时代100%棉1.5/1.8米床" src="images/201407/thumb_img/76_thumb_G_1406503516258.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=76" target="_blank" title="胜伟 高支棉斜纹四件套裸婚时代100%棉1.5/1.8米床">胜伟 高支棉斜纹四件套裸婚时代100%棉1.5/1.8米床</a></div>
                        <div class="pPrice">￥149</div>
                    </li>
                                    </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                </div>
    </div>
    <div class="cat_brands">
    	<ul>
        	                    	<li class="fore1"><a target="_blank" href="brand.php?id=47"><img height="40" width="100" src="data/brandlogo/1408388968061368049.gif"></a></li>
                                            	<li class="fore2"><a target="_blank" href="brand.php?id=48"><img height="40" width="100" src="data/brandlogo/1408388977236154439.jpg"></a></li>
                                            	<li class="fore3"><a target="_blank" href="brand.php?id=49"><img height="40" width="100" src="data/brandlogo/1408388984062114039.gif"></a></li>
                                            	<li class="fore4"><a target="_blank" href="brand.php?id=50"><img height="40" width="100" src="data/brandlogo/1408388992835276757.gif"></a></li>
                                            	<li class="fore5"><a target="_blank" href="brand.php?id=51"><img height="40" width="100" src="data/brandlogo/1408389003705467870.gif"></a></li>
                                            	<li class="fore6"><a target="_blank" href="brand.php?id=52"><img height="40" width="100" src="data/brandlogo/1408389011381507906.gif"></a></li>
                                </ul>
    </div>
</div><div class="w catGoodsBox catGoodsSlide">
	<div class="mt">
    	<h2><i></i><span></span><font>母婴、玩具乐器</font></h2>
        <div class="hd_box">
        	<ul>
            	<li><a href="javascript:;">热门<i></i></a></li>
            	                            	<li><a href="javascript:;">奶粉<i></i></a></li>
                                                            	<li><a href="javascript:;">营养辅食<i></i></a></li>
                                                            	<li><a href="javascript:;">童车童床<i></i></a></li>
                                                            	<li><a href="javascript:;">尿裤湿巾<i></i></a></li>
                                                            	<li><a href="javascript:;">安全座椅<i></i></a></li>
                                                            	<li><a href="javascript:;">洗护用品<i></i></a></li>
                                                            	<li><a href="javascript:;">寝居服饰<i></i></a></li>
                                                            	<li><a href="javascript:;">喂养用品<i></i></a></li>
                                            </ul>
        </div>
    </div>
    <div class="mc">
    	<div class="side">
        	<div class="banner">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:24:"分类下商品左广告";}554fcae493e564ee0dc75bdf2ebf94ca<i></i></div>
            <div class="themes Category">
            	<ul>
                                                            <li class="fore1"><a href="category.php?id=688&amp;price_min=&amp;price_max="><i></i><span>奶粉</span></a></li>
                                                                                <li class="fore2"><a href="category.php?id=689&amp;price_min=&amp;price_max="><i></i><span>营养辅食</span></a></li>
                                                                                <li class="fore3"><a href="category.php?id=690&amp;price_min=&amp;price_max="><i></i><span>尿裤湿巾</span></a></li>
                                                                                <li class="fore4"><a href="category.php?id=691&amp;price_min=&amp;price_max="><i></i><span>洗护用品</span></a></li>
                                                                                <li class="fore5"><a href="category.php?id=692&amp;price_min=&amp;price_max="><i></i><span>喂养用品</span></a></li>
                                                                                <li class="fore6"><a href="category.php?id=693&amp;price_min=&amp;price_max="><i></i><span>童车童床</span></a></li>
                                                                                                                                        </ul>
            </div>
            <div class="words">
            	<ul>
                	                	                	<li>
                                        	                                                <span><a href="category.php?id=821&amp;price_min=&amp;price_max=" target="_blank" title="婴幼奶粉">婴幼奶粉</a></span>
                                                                                                <span><a href="category.php?id=822&amp;price_min=&amp;price_max=" target="_blank" title="成人奶粉">成人奶粉</a></span>
                                                                                                        	                    	                                                <span><a href="category.php?id=830&amp;price_min=&amp;price_max=" target="_blank" title="DHA">DHA</a></span>
                                                                                                <span><a href="category.php?id=831&amp;price_min=&amp;price_max=" target="_blank" title="钙铁锌/维生素">钙铁锌/维生素</a></span>
                                                                                                <span><a href="category.php?id=832&amp;price_min=&amp;price_max=" target="_blank" title="益生菌/初乳">益生菌/初乳</a></span>
                                                                                                <span><a href="category.php?id=833&amp;price_min=&amp;price_max=" target="_blank" title="清火/开胃">清火/开胃</a></span>
                                                                                                                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=838&amp;price_min=&amp;price_max=" target="_blank" title="婴儿尿裤">婴儿尿裤</a></span>
                                                                                                <span><a href="category.php?id=839&amp;price_min=&amp;price_max=" target="_blank" title="拉拉裤">拉拉裤</a></span>
                                                                                                <span><a href="category.php?id=840&amp;price_min=&amp;price_max=" target="_blank" title="成人尿裤">成人尿裤</a></span>
                                                                                                <span><a href="category.php?id=841&amp;price_min=&amp;price_max=" target="_blank" title="湿巾">湿巾</a></span>
                                                                                                        	                    	                                                <span><a href="category.php?id=842&amp;price_min=&amp;price_max=" target="_blank" title="宝宝护肤">宝宝护肤</a></span>
                                                                                                <span><a href="category.php?id=843&amp;price_min=&amp;price_max=" target="_blank" title="宝宝洗浴">宝宝洗浴</a></span>
                                                                                                <span><a href="category.php?id=844&amp;price_min=&amp;price_max=" target="_blank" title="理发器">理发器</a></span>
                                                                                                <span><a href="category.php?id=845&amp;price_min=&amp;price_max=" target="_blank" title="洗衣液/皂">洗衣液/皂</a></span>
                                                                                                                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=850&amp;price_min=&amp;price_max=" target="_blank" title="奶瓶奶嘴">奶瓶奶嘴</a></span>
                                                                                                <span><a href="category.php?id=851&amp;price_min=&amp;price_max=" target="_blank" title="吸奶器">吸奶器</a></span>
                                                                                                <span><a href="category.php?id=852&amp;price_min=&amp;price_max=" target="_blank" title="牙胶安抚">牙胶安抚</a></span>
                                                                                                <span><a href="category.php?id=853&amp;price_min=&amp;price_max=" target="_blank" title="暖奶消毒">暖奶消毒</a></span>
                                                                                                                                                                                                                                                        	                    	                                                <span><a href="category.php?id=857&amp;price_min=&amp;price_max=" target="_blank" title="婴儿床">婴儿床</a></span>
                                                                                                <span><a href="category.php?id=858&amp;price_min=&amp;price_max=" target="_blank" title="婴儿推车">婴儿推车</a></span>
                                                                                                <span><a href="category.php?id=859&amp;price_min=&amp;price_max=" target="_blank" title="餐椅摇椅">餐椅摇椅</a></span>
                                                                                                <span><a href="category.php?id=860&amp;price_min=&amp;price_max=" target="_blank" title="学步车">学步车</a></span>
                                                                                                                                                                                                                                                                                                                                        </li>
                                                        	                	<li>
                                        	                                                <span><a href="category.php?id=866&amp;price_min=&amp;price_max=" target="_blank" title="提篮式">提篮式</a></span>
                                                                                                <span><a href="category.php?id=867&amp;price_min=&amp;price_max=" target="_blank" title="安全座椅">安全座椅</a></span>
                                                                                                <span><a href="category.php?id=868&amp;price_min=&amp;price_max=" target="_blank" title="增高垫">增高垫</a></span>
                                                                                                        	                    	                                                <span><a href="category.php?id=869&amp;price_min=&amp;price_max=" target="_blank" title="婴儿外出服">婴儿外出服</a></span>
                                                                                                <span><a href="category.php?id=870&amp;price_min=&amp;price_max=" target="_blank" title="婴儿内衣">婴儿内衣</a></span>
                                                                                                <span><a href="category.php?id=871&amp;price_min=&amp;price_max=" target="_blank" title="婴儿礼盒">婴儿礼盒</a></span>
                                                                                                <span><a href="category.php?id=872&amp;price_min=&amp;price_max=" target="_blank" title="婴儿鞋帽袜">婴儿鞋帽袜</a></span>
                                                                                                                                                                                        </li>
                                                        </ul>
            </div>
        </div>
        <div class="bd_box">
        	<div class="bdBox bdBox01">
            	<div class="mainInner">
                	<ul class="mainBody">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:31:"分类下商品右侧小广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:31:"分类下商品右侧小广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:25:"分类下商品右广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:25:"分类下商品右广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:25:"分类下商品右广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                    <ul class="mainExtra">
                    	<li class="fore1">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:31:"分类下商品右侧小广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore2">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:31:"分类下商品右侧小广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        <li class="fore3">554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:25:"分类下商品右广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                    </ul>
                </div>
                <div class="bdSlider">
                	<div class="hd_Slider">
                    	<ul>
                        	<li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="bd_Slider">
                    	<ul>
                        	<li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:37:"分类下商品右侧幻灯片广告1";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:37:"分类下商品右侧幻灯片广告2";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:37:"分类下商品右侧幻灯片广告3";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                            <li>554fcae493e564ee0dc75bdf2ebf94caads_pro|a:3:{s:4:"name";s:7:"ads_pro";s:8:"cat_name";s:21:"母婴、玩具乐器";s:4:"type";s:37:"分类下商品右侧幻灯片广告4";}554fcae493e564ee0dc75bdf2ebf94ca</li>
                        </ul>
                    </div>
                    <a class="bdSliderQh prev_bd" href="javascript:void(0)"><</a>
                    <a class="bdSliderQh next_bd" href="javascript:void(0)">></a>
                </div>
            </div>
        	                    	<div class="bdBox bdBoxPro">
            	<ul>
                	                	<li>
                    	<div class="pImg"><a href="goods.php?id=91" target="_blank" title="惠氏 Wyeth 启赋 illuma 亲和人体配方 幼儿配方奶粉 3段(1-3岁幼儿适用) 900克"><img width="100" height="100" alt="惠氏 Wyeth 启赋 illuma 亲和人体配方 幼儿配方奶粉 3段(1-3岁幼儿适用) 900克" src="images/201407/thumb_img/91_thumb_G_1406504177983.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=91" target="_blank" title="惠氏 Wyeth 启赋 illuma 亲和人体配方 幼儿配方奶粉 3段(1-3岁幼儿适用) 900克">惠氏 Wyeth 启赋 illuma 亲和人体配方 幼儿配方奶粉 3段(1-3岁...</a></div>
                        <div class="pPrice">￥368</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=90" target="_blank" title="雅培 Abbott 金装喜康宝 婴儿配方奶粉 1段（0-12个月婴儿适用）900克 购雅培亲体新品，Mini Pad、万元大奖等你赢！点此查看！"><img width="100" height="100" alt="雅培 Abbott 金装喜康宝 婴儿配方奶粉 1段（0-12个月婴儿适用）900克 购雅培亲体新品，Mini Pad、万元大奖等你赢！点此查看！" src="images/201407/thumb_img/90_thumb_G_1406504148671.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=90" target="_blank" title="雅培 Abbott 金装喜康宝 婴儿配方奶粉 1段（0-12个月婴儿适用）900克 购雅培亲体新品，Mini Pad、万元大奖等你赢！点此查看！">雅培 Abbott 金装喜康宝 婴儿配方奶粉 1段（0-12个月婴儿适用）900...</a></div>
                        <div class="pPrice">￥198</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=89" target="_blank" title="Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克*6罐"><img width="100" height="100" alt="Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克*6罐" src="images/201407/thumb_img/89_thumb_G_1406504107463.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=89" target="_blank" title="Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克*6罐">Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适...</a></div>
                        <div class="pPrice">￥1140</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=88" target="_blank" title="Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克"><img width="100" height="100" alt="Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克" src="images/201407/thumb_img/88_thumb_G_1406504077741.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=88" target="_blank" title="Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克">Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适...</a></div>
                        <div class="pPrice">￥190</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=87" target="_blank" title="Nestle 雀巢 能恩 幼儿配方奶粉 3段（1-3岁幼儿适用） 900克（新老包装随机发货）"><img width="100" height="100" alt="Nestle 雀巢 能恩 幼儿配方奶粉 3段（1-3岁幼儿适用） 900克（新老包装随机发货）" src="images/201407/thumb_img/87_thumb_G_1406504046697.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=87" target="_blank" title="Nestle 雀巢 能恩 幼儿配方奶粉 3段（1-3岁幼儿适用） 900克（新老包装随机发货）">Nestle 雀巢 能恩 幼儿配方奶粉 3段（1-3岁幼儿适用） 900克（新老...</a></div>
                        <div class="pPrice">￥168</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=86" target="_blank" title="美赞臣 MeadJohnson 进口奶源 安儿宝A+ 幼儿配方奶粉 3段（1-3岁幼儿适用） 1200克"><img width="100" height="100" alt="美赞臣 MeadJohnson 进口奶源 安儿宝A+ 幼儿配方奶粉 3段（1-3岁幼儿适用） 1200克" src="images/201407/thumb_img/86_thumb_G_1406504012770.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=86" target="_blank" title="美赞臣 MeadJohnson 进口奶源 安儿宝A+ 幼儿配方奶粉 3段（1-3岁幼儿适用） 1200克">美赞臣 MeadJohnson 进口奶源 安儿宝A+ 幼儿配方奶粉 3段（1-3...</a></div>
                        <div class="pPrice">￥194</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=85" target="_blank" title="雅培 Similac 美国雅培Similac Go&Grow 较大婴儿和幼儿配方奶粉 2段（9-24个月以上婴儿适用）624克"><img width="100" height="100" alt="雅培 Similac 美国雅培Similac Go&Grow 较大婴儿和幼儿配方奶粉 2段（9-24个月以上婴儿适用）624克" src="images/201407/thumb_img/85_thumb_G_1406503933218.jpg"></a></div>
                        <div class="pName"><a href="goods.php?id=85" target="_blank" title="雅培 Similac 美国雅培Similac Go&Grow 较大婴儿和幼儿配方奶粉 2段（9-24个月以上婴儿适用）624克">雅培 Similac 美国雅培Similac Go&Grow 较大婴儿和幼儿配方...</a></div>
                        <div class="pPrice">￥199</div>
                    </li>
                                    	<li>
                    	<div class="pImg"><a href="goods.php?id=84" target="_blank" title="美素力 Frisolac 荷兰原装进口 金装婴儿配方奶粉 1段（0-6个月婴儿适用） 900克"><img width="100" height="100" alt="美素力 Frisolac 荷兰原装进口 金装婴儿配方奶粉 1段（0-6个月婴儿适用） 900克" src=""></a></div>
                        <div class="pName"><a href="goods.php?id=84" target="_blank" title="美素力 Frisolac 荷兰原装进口 金装婴儿配方奶粉 1段（0-6个月婴儿适用） 900克">美素力 Frisolac 荷兰原装进口 金装婴儿配方奶粉 1段（0-6个月婴儿适...</a></div>
                        <div class="pPrice">￥239</div>
                    </li>
                                    </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                            	<div class="bdBox bdBoxPro">
            	<ul>
                	                </ul>
            </div>
                                </div>
    </div>
    <div class="cat_brands">
    	<ul>
        	                    	<li class="fore1"><a target="_blank" href="brand.php?id=53"><img height="40" width="100" src="data/brandlogo/1408389020467816163.gif"></a></li>
                                            	<li class="fore2"><a target="_blank" href="brand.php?id=54"><img height="40" width="100" src="data/brandlogo/1408389028549234249.gif"></a></li>
                                            	<li class="fore3"><a target="_blank" href="brand.php?id=55"><img height="40" width="100" src="data/brandlogo/1408389036032699536.gif"></a></li>
                                            	<li class="fore4"><a target="_blank" href="brand.php?id=56"><img height="40" width="100" src="data/brandlogo/1408389045513441324.jpg"></a></li>
                                            	<li class="fore5"><a target="_blank" href="brand.php?id=57"><img height="40" width="100" src="data/brandlogo/1408389052474444489.gif"></a></li>
                                            	<li class="fore6"><a target="_blank" href="brand.php?id=58"><img height="40" width="100" src="data/brandlogo/1408389066427584551.gif"></a></li>
                                </ul>
    </div>
</div>
</div>
<div class="w">
	<div id="special">
        <div class="mt"><h2>天天低价</h2></div>
        <div class="mc">
            <ul>
                                <li class="cur">
                    <div class="pImg"><a href="goods.php?id=1" title="创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）" target="_blank"><img src="images/201407/thumb_img/1_thumb_G_1406490380141.jpg" alt="创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）"></a></div>
                    <div class="pInfo">
                        <h2><a href="goods.php?id=1" target="_blank">创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）</a></h2>
                        <p>￥1799</p>
                    </div>
                </li>
                                <li >
                    <div class="pImg"><a href="goods.php?id=2" title="海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）" target="_blank"><img src="images/201407/thumb_img/2_thumb_G_1406490449936.jpg" alt="海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）"></a></div>
                    <div class="pInfo">
                        <h2><a href="goods.php?id=2" target="_blank">海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（...</a></h2>
                        <p>￥2399</p>
                    </div>
                </li>
                                <li >
                    <div class="pImg"><a href="goods.php?id=120" title="华帝(VATTI) ZTD110-i13001 嵌入式 消毒柜" target="_blank"><img src="images/201408/thumb_img/120_thumb_G_1408036989163.jpg" alt="华帝(VATTI) ZTD110-i13001 嵌入式 消毒柜"></a></div>
                    <div class="pInfo">
                        <h2><a href="goods.php?id=120" target="_blank">华帝(VATTI) ZTD110-i13001 嵌入式 消毒柜</a></h2>
                        <p>￥1799</p>
                    </div>
                </li>
                                <li >
                    <div class="pImg"><a href="goods.php?id=141" title="海尔（Haier） S400 14英寸游戏本（i7-4500U 4G 500G HD4400+GT745M 2G独显）黑色" target="_blank"><img src="images/201408/thumb_img/141_thumb_G_1408400311748.jpg" alt="海尔（Haier） S400 14英寸游戏本（i7-4500U 4G 500G HD4400+GT745M 2G独显）黑色"></a></div>
                    <div class="pInfo">
                        <h2><a href="goods.php?id=141" target="_blank">海尔（Haier） S400 14英寸游戏本（i7-4500U 4G 500G ...</a></h2>
                        <p>￥4499</p>
                    </div>
                </li>
                                <li >
                    <div class="pImg"><a href="goods.php?id=3" title="科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调" target="_blank"><img src="images/201407/thumb_img/3_thumb_G_1406490512409.jpg" alt="科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调"></a></div>
                    <div class="pInfo">
                        <h2><a href="goods.php?id=3" target="_blank">科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调</a></h2>
                        <p>￥5399</p>
                    </div>
                </li>
                                <li >
                    <div class="pImg"><a href="goods.php?id=43" title="春花（CHUNHUA ） JC621-160J 旋风锥尘杯 真空吸尘器（黑色）" target="_blank"><img src="images/201407/thumb_img/43_thumb_G_1406499764367.jpg" alt="春花（CHUNHUA ） JC621-160J 旋风锥尘杯 真空吸尘器（黑色）"></a></div>
                    <div class="pInfo">
                        <h2><a href="goods.php?id=43" target="_blank">春花（CHUNHUA ） JC621-160J 旋风锥尘杯 真空吸尘器（黑色）</a></h2>
                        <p>￥339</p>
                    </div>
                </li>
                                <li >
                    <div class="pImg"><a href="goods.php?id=45" title="沁园（QINYUAN） QR-RU-05B(灰) 快接式 双膜纯水机" target="_blank"><img src="images/201407/thumb_img/45_thumb_G_1406499940988.jpg" alt="沁园（QINYUAN） QR-RU-05B(灰) 快接式 双膜纯水机"></a></div>
                    <div class="pInfo">
                        <h2><a href="goods.php?id=45" target="_blank">沁园（QINYUAN） QR-RU-05B(灰) 快接式 双膜纯水机</a></h2>
                        <p>￥1699</p>
                    </div>
                </li>
                            </ul>
        </div>
    </div>
    <div id="share2">
    	<div class="mt"><h2>热门评价</h2></div>
        <div class="mc">
        	<div class="sw picScrollTop">
            	<div class="bd">
                    <ul>
                                                                        <li>
                            <div class="pImg"><a href="goods.php?id=106" title="Android开发秘籍进阶篇：Android 4编程入门经典+Android 4高级编程（第3版　套装共2册） " target="_blank"><img src="images/201407/thumb_img/106_thumb_G_1406506885979.jpg" alt="Android开发秘籍进阶篇：Android 4编程入门经典+Android 4高级编程（第3版　套装共2册） "></a></div>
                            <div class="pInfo">
                                <div class="authorInfo">
                                    <img title="a2d3g42011" src="http://img10.360buyimg.com/vclist/jfs/t499/282/910193630/1286/3c1f5272/552326deN5e96a96c.jpg" alt="a2d3g42011" width="28" height="28">
                                    <span>a2d3g42011</span>
                                </div>
                                <div class="pDetail">
                                    <a href="goods.php?id=106" target="_blank" title="1111"><span class="text">1111</span><span class="iconR">”</span></a>
                                    <span class="detailArrow">◆</span>
                                    <span class="iconL">“</span>
                                </div>
                            </div>
                        </li>
                                                                                                <li>
                            <div class="pImg"><a href="goods.php?id=24" title="美的（Midea） FS406C 4L 电脑版电饭煲" target="_blank"><img src="images/201407/thumb_img/24_thumb_G_1406497130539.jpg" alt="美的（Midea） FS406C 4L 电脑版电饭煲"></a></div>
                            <div class="pInfo">
                                <div class="authorInfo">
                                    <img title="a2d3g42011" src="http://img10.360buyimg.com/vclist/jfs/t499/282/910193630/1286/3c1f5272/552326deN5e96a96c.jpg" alt="a2d3g42011" width="28" height="28">
                                    <span>a2d3g42011</span>
                                </div>
                                <div class="pDetail">
                                    <a href="goods.php?id=24" target="_blank" title="ssssssssssss"><span class="text">ssssssssssss</span><span class="iconR">”</span></a>
                                    <span class="detailArrow">◆</span>
                                    <span class="iconL">“</span>
                                </div>
                            </div>
                        </li>
                                                                                                <li>
                            <div class="pImg"><a href="goods.php?id=2" title="海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）" target="_blank"><img src="images/201407/thumb_img/2_thumb_G_1406490449936.jpg" alt="海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）"></a></div>
                            <div class="pInfo">
                                <div class="authorInfo">
                                    <img title="a2d3g42011" src="http://img10.360buyimg.com/vclist/jfs/t499/282/910193630/1286/3c1f5272/552326deN5e96a96c.jpg" alt="a2d3g42011" width="28" height="28">
                                    <span>a2d3g42011</span>
                                </div>
                                <div class="pDetail">
                                    <a href="goods.php?id=2" target="_blank" title="11113V"><span class="text">11113V</span><span class="iconR">”</span></a>
                                    <span class="detailArrow">◆</span>
                                    <span class="iconL">“</span>
                                </div>
                            </div>
                        </li>
                                                                                                <li>
                            <div class="pImg"><a href="goods.php?id=2" title="海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）" target="_blank"><img src="images/201407/thumb_img/2_thumb_G_1406490449936.jpg" alt="海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）"></a></div>
                            <div class="pInfo">
                                <div class="authorInfo">
                                    <img title="a2d3g42011" src="http://img10.360buyimg.com/vclist/jfs/t499/282/910193630/1286/3c1f5272/552326deN5e96a96c.jpg" alt="a2d3g42011" width="28" height="28">
                                    <span>a2d3g42011</span>
                                </div>
                                <div class="pDetail">
                                    <a href="goods.php?id=2" target="_blank" title="深深深"><span class="text">深深深</span><span class="iconR">”</span></a>
                                    <span class="detailArrow">◆</span>
                                    <span class="iconL">“</span>
                                </div>
                            </div>
                        </li>
                                                                                                <li>
                            <div class="pImg"><a href="goods.php?id=5" title="海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调" target="_blank"><img src="images/201407/thumb_img/5_thumb_G_1406490659032.jpg" alt="海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调"></a></div>
                            <div class="pInfo">
                                <div class="authorInfo">
                                    <img title="a2d3g42011" src="http://img10.360buyimg.com/vclist/jfs/t499/282/910193630/1286/3c1f5272/552326deN5e96a96c.jpg" alt="a2d3g42011" width="28" height="28">
                                    <span>a2d3g42011</span>
                                </div>
                                <div class="pDetail">
                                    <a href="goods.php?id=5" target="_blank" title="全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4"><span class="text">全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4</span><span class="iconR">”</span></a>
                                    <span class="detailArrow">◆</span>
                                    <span class="iconL">“</span>
                                </div>
                            </div>
                        </li>
                                                                                                <li>
                            <div class="pImg"><a href="goods.php?id=5" title="海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调" target="_blank"><img src="images/201407/thumb_img/5_thumb_G_1406490659032.jpg" alt="海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调"></a></div>
                            <div class="pInfo">
                                <div class="authorInfo">
                                    <img title="a2d3g42011" src="http://img10.360buyimg.com/vclist/jfs/t499/282/910193630/1286/3c1f5272/552326deN5e96a96c.jpg" alt="a2d3g42011" width="28" height="28">
                                    <span>a2d3g42011</span>
                                </div>
                                <div class="pDetail">
                                    <a href="goods.php?id=5" target="_blank" title="全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3"><span class="text">全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3</span><span class="iconR">”</span></a>
                                    <span class="detailArrow">◆</span>
                                    <span class="iconL">“</span>
                                </div>
                            </div>
                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<span class="clr"></span>
</div>
<div class="service2015">
	<div class="service2015Box">
        <div class="slogen">
            <ul>
                <li class="item fore1"><i></i></li>
                <li class="item fore2"><i></i></li>
                <li class="item fore3"><i></i></li>
                <li class="item fore4"><i></i></li>
            </ul>
        </div>
    </div>
</div>
<div id="elevator" class="elevator">
    <ul>
        <li><span class="lou">1F</span><span class="text">男鞋</span></li>
        <li><span class="lou">2F</span><span class="text">女鞋</span></li>
        <li><span class="lou">3F</span><span class="text">来样定制</span></li>
        <li><span class="lou">4F</span><span class="text">定制女鞋</span></li>
        <li><span class="lou">5F</span><span class="text">功能包</span></li>
    </ul>
</div>
<div class="w">
    <div id="service2015">
                        <dl class="fore1">
            <dt>新手上路 </dt>
            <dd>
                                <p><a href="article.php?id=9" target="_blank" title="售后流程">售后流程</a></p>
                                <p><a href="article.php?id=10" target="_blank" title="购物流程">购物流程</a></p>
                                <p><a href="article.php?id=11" target="_blank" title="订购方式">订购方式</a></p>
                            </dd>
        </dl>
                                <dl class="fore2">
            <dt>手机常识 </dt>
            <dd>
                                <p><a href="article.php?id=12" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a></p>
                                <p><a href="article.php?id=13" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a></p>
                                <p><a href="article.php?id=14" target="_blank" title="如何享受全国联保">如何享受全国联保</a></p>
                            </dd>
        </dl>
                                <dl class="fore3">
            <dt>配送与支付 </dt>
            <dd>
                                <p><a href="article.php?id=15" target="_blank" title="货到付款区域">货到付款区域</a></p>
                                <p><a href="article.php?id=16" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a></p>
                                <p><a href="article.php?id=17" target="_blank" title="支付方式说明">支付方式说明</a></p>
                            </dd>
        </dl>
                                <dl class="fore4">
            <dt>会员中心</dt>
            <dd>
                                <p><a href="article.php?id=18" target="_blank" title="资金管理">资金管理</a></p>
                                <p><a href="article.php?id=19" target="_blank" title="我的收藏">我的收藏</a></p>
                                <p><a href="article.php?id=20" target="_blank" title="我的订单">我的订单</a></p>
                            </dd>
        </dl>
                                <dl class="fore5">
            <dt>服务保证 </dt>
            <dd>
                                <p><a href="article.php?id=21" target="_blank" title="退换货原则">退换货原则</a></p>
                                <p><a href="article.php?id=22" target="_blank" title="售后服务保证 ">售后服务保证</a></p>
                                <p><a href="article.php?id=23" target="_blank" title="产品质量保证 ">产品质量保证</a></p>
                            </dd>
        </dl>
                                        <dl class="coverage">
        	<dt>汤姆叔叔自营覆盖成都</dt>
            <dd>
            	<div class="text">汤姆叔叔已向全市提供自营配送服务，支持货到付款、微信支付和售后服务。</div>
            </dd>
        </dl>
    </div>
</div>
 
<div class="w">
  <div id="footer-2013"> 
        <div class="links"> 
       
      <a href="article.php?id=1" >免责条款</a> 
       |  
       
      <a href="article.php?id=2" >隐私保护</a> 
       |  
       
      <a href="article.php?id=3" >咨询热点</a> 
       |  
       
      <a href="article.php?id=4" >联系我们</a> 
       |  
       
      <a href="article.php?id=5" >公司简介</a> 
       |  
       
      <a href="wholesale.php" >批发方案</a> 
       |  
       
      <a href="myship.php" >配送方式</a> 
       
       
    </div>
        
    <div class="copyright"> 
     &copy; 2005-2017 京东网上商城-lfmartian淘宝店铺 版权所有，并保留所有权利。<br />
      
       
       
       
       
       
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=455201007&amp;Site=京东网上商城-lfmartian淘宝店铺&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:455201007:4" height="16" border="0" alt="QQ" /> 455201007</a> 
       
       
       
       
      <a href="http://amos1.taobao.com/msg.ww?v=2&uid=lfmartian&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=lfmartian&s=2" width="16" height="16" border="0" alt="淘宝旺旺" />lfmartian</a> 
       
       
       
       
       
       
       
       
       
       
      <br />
      
       
      ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank">京ICP证070359号</a> 
       
      
    </div>
    
    <div class="authentication">
     <a href="javascript:void(0);" target="_blank"><img width="103" height="32" alt="经营性网站备案中心" src="themes/jingdong2015/images/108_40_zZOKnl.gif"></a> 
     <a href="javascript:void(0);" target="_blank"> <img width="103" height="32" alt="可信网站" src="themes/jingdong2015/images/rBEHaFCFC5QIAAAAAAASVQX9RAYAACb2wHUV1kAABJt760.gif"></a> 
     <a href="javascript:void(0);" target="_blank"><img width="103" height="32" alt="朝阳网络警察" src="themes/jingdong2015/images/rBEIDE_nzcIIAAAAAAB30mYXo5QAACrhACj22IAAHfq378.png"></a> 
     <a href="javascript:void(0);" target="_blank"><img width="103" height="32" src="themes/jingdong2015/images/112_40_WvArIl.png"></a></div>    
  </div>
</div>
<div class="w backpanel hide" id="backpanel0708" style="display: none; ">
	<div class="backpanel-inner">
        <div class=" bp-item bp-item-survey"><a href="message.php" class="survey" target="_blank">反馈</a><s></s></div>
        <div class=" bp-item bp-item-backtop" data-top="0"><a href="#none" class="backtop" target="_self">顶部</a><s></s></div>
    </div>
</div>
<div id="cart_show" class="m">
	<div class="cart_show_wrap">
			<div class="success">
                <div class="success-b">
                    <h3>商品已成功加入购物车！</h3>
                 
                </div>
                	<div class="clr"></div>
            <div id="initCart_next_go"><a class="btn-pay " href="./flow.php" id="GotoShoppingCart">去结算</a><a class="btn-continue " href="javascript:void(0)" onclick="easyDialog.close();">继续购物</a>
            	<div class="clr"></div>
            </div></div>
			</div>
		</div>
<script>
$(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 300){
			$(".backpanel").fadeIn(500);
		}
		else
		{
			$(".backpanel").fadeOut(500);
		}
		
	});
	
	$(".backtop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
})
</script>
<script>
var bodyH=$(window).height(),scTop=$("#floors-list").offset().top-bodyH;
if($(window).scrollTop() >= scTop ){
	$("#elevator").show()
}else{
	$("#elevator").hide()
}
$(window).scroll(function(){
	if($(window).scrollTop() >= scTop ){
			$("#elevator").show()
	}else{
		$("#elevator").hide()
	}
});
//
var slide_move=function(o){
	var a=$(o.menu).find(o.li),arr=[];
	
	$(o.floors).each(function(i){
		arr[i]=$(this).offset().top-($(window).height()/2);
		$(this).find(".mt h2 span").text((i+1)+"F");
		$(this).find(".words li").eq(1).nextAll().remove();
	});
	a.click(function(){
		var index=a.index(this);
		$("body,html").stop(true,false).animate({scrollTop:arr[index]},1000);
	});
	
	$(window).scroll(function(){
		var t=$(document).scrollTop();
		o.callBack && o.callBack();
		$.each(arr,function(k,v){
			if(t>=v){
				a.removeClass(o.active);
				a.eq(k).addClass(o.active);
				$(o.floors).removeClass(o.active).eq(k).addClass(o.active);
			}
		});
	});	
}
slide_move({
	menu:".elevator",
	li:"li",
	active:"on",
	floors:".catGoodsSlide"
});
//
var bodyW=$(window).width(),wW=$(".w").width(),elevatorML=((bodyW-wW)/2-30-5),elevatorMT=$(".elevator").height()/2;
$(".elevator").css({left:elevatorML,marginTop:-elevatorMT});
</script>
</body>
</html>
