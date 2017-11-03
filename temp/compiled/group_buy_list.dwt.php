<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_group.lbi'); ?>
<?php echo $this->fetch('library/user_here.lbi'); ?>
<div class="groupBanner">
	<div class="banner-pic JQbanner">
    	<div class="bd">
        	<ul>
            	<li style="background:#d2eedf;"><div class="uiInner"><?php 
$k = array (
  'name' => 'ads',
  'id' => '25',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div></li>
                <li style="background:#ffd302;"><div class="uiInner"><?php 
$k = array (
  'name' => 'ads',
  'id' => '26',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div></li>
                <li style="background:#2188f1;"><div class="uiInner"><?php 
$k = array (
  'name' => 'ads',
  'id' => '27',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div></li>
                <li style="background:#a42d57;"><div class="uiInner"><?php 
$k = array (
  'name' => 'ads',
  'id' => '28',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div></li>
                <li style="background:#091547;"><div class="uiInner"><?php 
$k = array (
  'name' => 'ads',
  'id' => '29',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div></li>
            </ul>
        </div>
        <div class="hd">
        	<ul><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li></ul>
        </div>
    </div>
</div>
<div class="groupBannerOther">
	<div class="w">
    	<div class="adList">
        	<ul><?php 
$k = array (
  'name' => 'ads',
  'id' => '30',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></ul>
        </div>
        <div class="bannerRight">
<?php $this->assign('ads_id','31'); ?><?php $this->assign('ads_num','3'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</div>
    </div>
</div>

<div class="w" id="firstAnchor">
	<div class="mt">
    	<h2><span>单</span>品团</h2>
    </div>
    <div class="mc">
    	<ul>
        	<?php if ($this->_var['gb_list']): ?> 
            <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['group_buy']):
        $this->_foreach['no']['iteration']++;
?>
        	<li class="<?php if ($this->_foreach['no']['iteration'] < 4): ?>cury<?php endif; ?><?php if (($this->_foreach['no']['iteration'] - 1) % 3 == 2): ?> curr<?php endif; ?>">
            	<span class="ico_split"></span>
                <div class="pic-inner">
                	<a href="<?php echo $this->_var['group_buy']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>">
                    	<div class="pic-img"><img src="<?php echo $this->_var['group_buy']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" /></div>
                        <div class="pic-title"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></div>
                        <div class="pic-details">
                        	<div class="left"><?php echo $this->_var['group_buy']['price_ladder']['0']['formated_price']; ?><del><?php echo $this->_var['group_buy']['shop_price']; ?></del></div>
                            <div class="right">已抢 <?php echo $this->_var['group_buy']['cur_amount']; ?> 件</div>
                        </div>
                    </a>
                </div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php else: ?> 
            <span style="margin:2px 10px; font-size:14px; line-height:36px;"><?php echo $this->_var['lang']['group_goods_empty']; ?></span> 
            <?php endif; ?>
        </ul>
    </div>
</div>
<div class="groupBottomAd w">
	<div class="blank10"></div>
    
<?php $this->assign('ads_id','32'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

	<div class="blank10"></div>
</div>
<?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
<script>
	jQuery(".JQbanner").slide({mainCell:".bd ul",effect:"fold",interTime:5000,autoPlay:true});
	$(".adList li:first").addClass("hover");
	$(".adList li").mouseover(function(){
		$(this).addClass("hover").siblings().removeClass("hover")
	})
	//
	$(window).resize(function(){
		var bodyW=$(window).width();
		if(bodyW>=990){
			$('.banner-pic .bd ul,.banner-pic .bd li').css({width:bodyW})
		}
	})
</script>
</body>
</html>
