<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jd_group.js,easydialog.min.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js')); ?>
<div id="shortcut-2013">
	<div class="w">
    	<ul class="fl lh">
        	<li class="fore1 ld"><b></b><a href="javascript:addToFavorite()" rel="nofollow">收藏汤姆</a></li>
        </ul>
        <ul class="fr lh">
        	<?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            <?php if ($this->_var['navigator_list']['top']): ?>
            <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <li class="fore2 ld"><div class="dt"><s></s> <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></div></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
            <li class="fore3 ld menu" id="app-jd">
            	<div class="dt"><s></s><i></i><span class="outline"></span><span class="blank"></span><a href="#" target="_blank">手机汤姆</a><b></b></div>
                <div class="dd lh">
                    <div class="qr-info"></div>
                    <div class="qr-item qr-jd-app">
                    	<div class="qr-img"><img id="app-qrcode-img" src="themes/jingdong2015/images/538557daNd249a428.png" class="err-product" width="76" height="76" alt="手机汤姆" src="themes/jingdong2015/images/blank.gif"></div>
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
<div id="o-header-2013" class="PageHeader">
    <div class="w" id="header-2013">
    <div id="logo-2013" class="ld"><a href="./index.php" hidefocus="true" ><b></b><img src="themes/jingdong2015/images/logo.gif" width="270" height="48" alt="汤姆"></a></div>
    
    <div id="search-2013">
      <div class="i-search ld">
        <ul id="shelper" class="hide">
        </ul>
        <div class="form">
          <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
            <input type="text" class="text" accesskey="s" id="key" autocomplete="off" name="keywords" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>">
            <input type="submit" value="搜索" class="button">
          </form>
        </div>
      </div>
      <?php if ($this->_var['searchkeywords']): ?>
      <div id="hotwords"><strong>热门搜索：</strong> <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['foo']['iteration']++;
?>
        <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank" style="color:#ff0000"><?php echo $this->_var['val']; ?></a> <?php else: ?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank"><?php echo $this->_var['val']; ?></a> <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
      <?php endif; ?> </div>
    
    <div id="my360buy-2013">
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
                <ul>
                </ul>
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
                	 <?php 
$k = array (
  'name' => 'history2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
              </ul>
            </div>
          </div>
			<script type="text/javascript">
            if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
            {
                document.getElementById('history_div').style.display='none';
            }
            else
            {
                document.getElementById('history_div').style.display='block';
            }
            function clear_history()
            {
            Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
            }
            function clear_history_Response(res)
            {
            document.getElementById('history_list').innerHTML = '<center><?php echo $this->_var['lang']['no_history']; ?></center>';
            }
            </script>
          
        </dd>
      </dl>
    </div>
    
    <div id="ECS_CARTINFO" class="settleup-2013">
       <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
     
  </div>
  	<div class="nav-2013Box groupNav">
    	<div class="nav-2013 w">
      		<div id="categorys-2013" class="categorys-2014">
            	<div class="mt ld"><h2><a href="javascript:;">全部商品分类<b></b></a></h2></div>
                <div id="_JD_ALLSORT" class="mc">
                        <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
                        <div class="item fore<?php echo $this->_foreach['foo']['iteration']; ?>">
                            <span><h3><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h3><s></s></span>
                            <div class="i-mc">
                                <div class="subitem">
                                    <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['foo2']['iteration']++;
?>
                                    <dl class="fore<?php echo $this->_foreach['foo2']['iteration']; ?>">
                                        <dt><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?><i>></i></a></dt>
                                        <dd><?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?><a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></dd>
                                    </dl>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                </div>
                                <div class="cat-right-con fr" id="JD_sort_a">
                                	<div class="itemBrands">
                                    	<?php $_from = $this->_var['cat']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brands');$this->_foreach['brands_no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands_no']['total'] > 0):
    foreach ($_from AS $this->_var['brands']):
        $this->_foreach['brands_no']['iteration']++;
?>
                                        <?php if ($this->_foreach['brands_no']['iteration'] < 9): ?>
                                        <a href="<?php echo $this->_var['brands']['url']; ?>"><img src="data/brandlogo/<?php echo $this->_var['brands']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brands']['brand_name']); ?> (<?php echo $this->_var['brands']['goods_num']; ?>)" /></a>
                                        <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                    <dl class="categorys-promotions">
                                        <dd>
                                            <ul>
                                                <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat']['name'],
  'type' => '左侧导航广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </li>
                                                <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat']['name'],
  'type' => '左侧导航广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                    <script>
                    $(function(){
						$("#_JD_ALLSORT .item").each(function(){
							var h=$(this).find(".i-mc").outerHeight();
							if( h<466){
								$(this).find(".i-mc").height(460);
							};
						});
					});
                    </script>
      </div>
      <ul id="navitems-2013">
      
            <li class="fore1 <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?>curr<?php endif; ?>"><a href="./index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['foo']['iteration']++;
?>
  <li class="fore<?php echo $this->_foreach['foo']['iteration']; ?> <?php if ($this->_var['nav']['active'] == 1): ?>curr<?php endif; ?>"><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>

 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
      
     
      </ul>
    </div>
  </div>
</div>
