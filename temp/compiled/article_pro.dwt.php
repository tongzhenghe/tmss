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
<body class="article">
<?php echo $this->fetch('library/page_header_user.lbi'); ?> <?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="w">
  <div class="right">
    <div class="box">
      <div class="box_1">
        <h3><span><?php echo htmlspecialchars($this->_var['article']['title']); ?></span></h3>
        <div class="boxCenterList"> 
          <?php if ($this->_var['article']['content']): ?> 
          <?php echo $this->_var['article']['content']; ?> 
          <?php endif; ?> 
          
        </div>
      </div>
    </div>
     <div class="blank5"></div>
  </div>
  <div class="left"> 
 
    <div class="help_side" id="sortlist_atc"> 
            <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?> 
      <div class="current article_list">
        <h4><b></b><?php echo $this->_var['help_cat']['cat_name']; ?></h4>
        <ul>
          <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <li class="li1"> <a href="<?php echo $this->_var['item']['url']; ?>" target="_self"><?php echo $this->_var['item']['short_title']; ?></a> </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>

  </div>
  <div class="clr"></div>
</div>
<?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
