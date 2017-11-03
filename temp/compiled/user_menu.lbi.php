<div class="mc">
  <dl>
    <dt>订单中心<b></b></dt>
    <dd>
      <div class="item <?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>curr<?php endif; ?>"><a href="user.php?act=order_list"><?php echo $this->_var['lang']['label_order']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'address_list'): ?>curr<?php endif; ?>"><a href="user.php?act=address_list"><?php echo $this->_var['lang']['label_address']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'booking_list'): ?>curr<?php endif; ?>"><a href="user.php?act=booking_list"><?php echo $this->_var['lang']['label_booking']; ?></a></div>
    </dd>
  </dl>
  <dl>
    <dt>会员中心<b></b></dt>
    <dd>
      <div class="item <?php if ($this->_var['action'] == 'profile'): ?>curr<?php endif; ?>"><a href="user.php?act=profile"><?php echo $this->_var['lang']['label_profile']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'collection_list'): ?>curr<?php endif; ?>"><a href="user.php?act=collection_list"><?php echo $this->_var['lang']['label_collection']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'tag_list'): ?>curr<?php endif; ?>"><a href="user.php?act=tag_list"><?php echo $this->_var['lang']['label_tag']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'message_list'): ?>curr<?php endif; ?>"><a href="user.php?act=message_list"><?php echo $this->_var['lang']['label_message']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'affiliate'): ?>curr<?php endif; ?>"><a href="user.php?act=affiliate"><?php echo $this->_var['lang']['label_affiliate']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'comment_list'): ?>curr<?php endif; ?>"><a href="user.php?act=comment_list"><?php echo $this->_var['lang']['label_comment']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'sellers_info'): ?>curr<?php endif; ?>"><a href="sellers.php">我的入驻信息</a></div>
    </dd>
  </dl>
  </dl>
  <dl>
    <dt>账户中心<b></b></dt>
    <dd>
      <div class="item <?php if ($this->_var['action'] == 'bonus' || $this->_var['action'] == 'order_detail'): ?>curr<?php endif; ?>"><a href="user.php?act=bonus"><?php echo $this->_var['lang']['label_bonus']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'track_packages'): ?>curr<?php endif; ?>"><a href="user.php?act=track_packages"><?php echo $this->_var['lang']['label_track_packages']; ?></a></div>
      <div class="item <?php if ($this->_var['action'] == 'account_log'): ?>curr<?php endif; ?>"><a href="user.php?act=account_log"><?php echo $this->_var['lang']['label_user_surplus']; ?></a></div>
    </dd>
  </dl>
</div>
