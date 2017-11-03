<div class="search" style="display:none;">
  <div class="ect-bg search_top">
    <header class="ect-header ect-margin-tb ect-margin-lr text-center"><span><?php echo $this->_var['lang']['search']; ?></span><a href="javascript:;" class="search_guan"><i class="icon-close pull-right"></i></a></header>
  </div>
  <div class="ect-padding-lr search_con">
     <form action="<?php echo url('category/index');?><?php if ($this->_var['id']): ?>&id=<?php echo $this->_var['id']; ?><?php endif; ?>"  method="post" id="searchForm" name="searchForm">
      <div class="input-search"> <span>
        <input name="keywords" type="search" placeholder="<?php echo $this->_var['lang']['no_keywords']; ?>" id="keywordBox">
        </span>
        <button type="submit" value="<?php echo $this->_var['lang']['search']; ?>" onclick="return check('keywordBox')"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </form>
    <?php if ($this->_var['hot_search_keywords']): ?>
    <div class="hot-search">
      <h4 class="title" style="display:none;"><b><?php echo $this->_var['lang']['hot_search']; ?>：</b></h4>
      <p></p>
      <?php $_from = $this->_var['hot_search_keywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ky');if (count($_from)):
    foreach ($_from AS $this->_var['ky']):
?> 
      <a href="<?php echo url('category/index', array('keywords'=>$this->_var[ky]));?><?php if ($this->_var['id']): ?>&id=<?php echo $this->_var['id']; ?><?php endif; ?>"><?php echo $this->_var['ky']; ?></a> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php endif; ?> 
  </div>
</div>
