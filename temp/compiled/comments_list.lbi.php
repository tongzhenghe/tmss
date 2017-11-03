<div id="comments-list" class="m">
  <div class="mt">
    <ul class="tab">
      <li class="curr"><a href="javascript:;">全部评价<em>(<?php echo $this->_var['pager']['record_count']; ?>)</em></a></li>
      <li class="tab-last"></li>
    </ul>
  </div>
  <div id="comment-0" class="mc"> 
    <?php if ($this->_var['comments']): ?> 
    <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
    <div class="item">
      <div class="user">
        <div class="u-icon"><img height="50" width="50" src="themes/jingdong2015/images/b50.gif"> </div>
        <div class="u-name" style="color:#005AA0;"><?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></div>
        <span class="u-level"><span style="color:#088000"></span></span> </div>
      <div class="i-item">
        <div class="o-topic"> <span class="star sa<?php echo $this->_var['comment']['rank']; ?>"></span><span>
          <div class="date-comment"><?php echo $this->_var['comment']['add_time']; ?></div>
          <em class="fr hl_blue"></em></span> <strong class="topic"></strong> </div>
        <div class="comment-content">
          <dl>
            <dt>心得：</dt>
            <dd><?php echo $this->_var['comment']['content']; ?></dd>
          </dl>
          <s class="clr"></s> </div>
        <div class="btns" style="height:30px;"> </div>
        <?php if ($this->_var['comment']['re_content']): ?>
        <div class="item-reply hide-default">
          <div class="reply-list">
            <div class="reply-con"> <span class="u-name"><?php echo $this->_var['lang']['admin_username']; ?><b></b></span><span class="u-con"><?php echo $this->_var['comment']['re_content']; ?></span> </div>
          </div>
        </div>
        <?php endif; ?> 
      </div>
      <div class="corner tl"></div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php else: ?> 
    <?php echo $this->_var['lang']['no_comments']; ?> 
    <?php endif; ?>
    
    <div class="clearfix">
      <div class="pagin fr" id="commentsPage0" style="margin-top:8px;">
        <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
          <?php if ($this->_var['pager']['page_prev']): ?><a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="prev"><?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?> 
          <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
          <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?> 
          <a href="javascript:void(0)" class="current"><?php echo $this->_var['key']; ?></a> 
          <?php else: ?> 
          <a href="<?php echo $this->_var['item']; ?>"><?php echo $this->_var['key']; ?></a> 
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php if ($this->_var['pager']['page_next']): ?><a href="<?php echo $this->_var['pager']['page_next']; ?>" class="next"><?php echo $this->_var['lang']['page_next']; ?></a><?php endif; ?><br>
          <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script> 



<div id="comment_show">
  <div class="comment_wrap">
    <h2 id="easyDialogTitle">发表评论<a class="thickclose" href="javascript:void(0);"></a></h2>
    <div class="comment_from" >
      <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
        <table width="660" border="0" cellspacing="5" cellpadding="0" >
          <tr width="660">
            <td width="70" align="right"><?php echo $this->_var['lang']['username']; ?>：</td>
              <td<?php if (! $this->_var['enabled_captcha']): ?><?php endif; ?>>
            <?php if ($_SESSION['user_name']): ?><?php echo $_SESSION['user_name']; ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?>
            
              </td>
          </tr>
          <tr>
            <td align="right">E-mail：</td>
            <td><input type="text" name="email" id="email"  maxlength="100" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" class="inputBorder"/></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['comment_rank']; ?>：</td>
            <td><input name="comment_rank" type="radio" value="1" id="comment_rank1" />
              <span class="star sa1"></span>
              <input name="comment_rank" type="radio" value="2" id="comment_rank2" />
              <span class="star sa2"></span>
              <input name="comment_rank" type="radio" value="3" id="comment_rank3" />
              <span class="star sa3"></span>
              <input name="comment_rank" type="radio" value="4" id="comment_rank4" />
              <span class="star sa4"></span>
              <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" />
              <span class="star sa5"></span></td>
          </tr>
          <tr>
            <td align="right" valign="top"><?php echo $this->_var['lang']['comment_content']; ?>：</td>
            <td><textarea name="content" class="inputBorder" style="height:100px; width:480px;"></textarea>
              <input type="hidden" name="cmt_type" value="<?php echo $this->_var['comment_type']; ?>" />
              <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" /></td>
          </tr>
          <tr>
            <td colspan="2"><div class="clr" style="height:3px;"></div>
              <div class="comment_captcha"> 
                <?php if ($this->_var['enabled_captcha']): ?>
                <Div class="captcha_left"> <?php echo $this->_var['lang']['comment_captcha']; ?>：
                  <input type="text" name="captcha"  class="inputCaptcha"/>
                  <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha"> </Div>
                <?php endif; ?>
                <div class="captcha_right">
                  <input type="submit" class="comment_btns" value="提交评论">
                </div>
              </div></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>

 

<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;

  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + $.toJSON(cmt), commentResponse, 'POST', 'JSON');
   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
  }

//]]>
</script>