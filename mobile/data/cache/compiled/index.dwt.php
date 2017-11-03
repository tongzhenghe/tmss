<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="con"> 
    <header class="Header clearfix">
        <div class="HeaderLogo f_l"><a href="./"><img src="__TPL__/images/logo.png" /></a></div>
        
        <div class="HeaderRight">
            <a href="<?php echo url('flow/cart');?>"><span class="h_cart"></span></a>
            <a href="<?php echo url('user/index');?>"><span class="h_logn"></span></a>
            <a href="javascript:;" class="search_on"><span class="h_search"></span></a>
        </div>
        
    </header>

    
    <div id="focus" class="focus ect-margin-tb">
    	<div class="hd">
        	<ul></ul>
        </div>
        <div class="bd"><?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    </div>

    
    <nav class="container-fluid">
    	<ul class="row ect-row-nav">
        	<?php $_from = $this->_var['navigator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['no']['iteration']++;
?>
            <?php if ($this->_foreach['no']['iteration'] < 13): ?>
            <li class="col-sm-3 col-xs-3">
            	<a href="<?php echo $this->_var['nav']['url']; ?>">
                    <i><img src="<?php echo $this->_var['nav']['pic']; ?>" width="50" height="50"></i>
                    <p class="text-center"><?php echo $this->_var['nav']['name']; ?></p>
                </a>
            </li>
            <?php endif; ?>
        	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </nav>
    
    <div class="gridRow"><?php 
$k = array (
  'name' => 'ads',
  'id' => '2',
  'num' => '4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>

    <div class="indexlist">
        <div class="indexlistTit">
            <h2>特卖广告</h2><span>|</span><em>每天10点 新品特卖</em>
        </div>
        <div class="channelImg" >
            <?php 
$k = array (
  'name' => 'ads',
  'id' => '3',
  'num' => '5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
    </div>

<!--    <div class="indexlist">
        <div class="indexlistTit" style="height:3em">
            <h2>今日新品</h2><span>|</span>
        </div>
        <?php echo $this->fetch('library/recommend_hot.lbi'); ?>
    </div>
    -->
	<footer style="display:none;">
    	<nav class="ect-nav"><?php echo $this->fetch('library/page_menu.lbi'); ?></nav>
    </footer>
    <div style="padding-bottom:4.2em;display:none;"></div>
</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">

    get_asynclist("<?php echo url('index/ajax_goods', array('type'=>'best'));?>" , '__TPL__/images/loader.gif');

</script>
</body>
</html>