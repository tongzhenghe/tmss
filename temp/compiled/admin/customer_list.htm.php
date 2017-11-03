<?php echo $this->fetch('pageheader1.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<form method="post" action="" name="listForm" enctype="multipart/form-data">
    <div class="list-div" id="listDiv">
        <table cellpadding="15" cellspacing="1" align="center">

            <tr>
                <td>商品编号</td>
                <td>客户姓名</td>
                <td>电话</td>
                <td>详细地址</td>
                <td>商品名称</td>
                <td>维修内容</td>
                <td>备注</td>
                <td>商品正面图片</td>
                <td>商品侧面图片</td>
                <td>商品背面图片</td>
                <td>商品内部图片</td>
            </tr>
            <?php $_from = $this->_var['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['item']):
?>
            <tr>
                <td><?php echo $this->_var['item']['id']; ?></td>
                <td><?php echo $this->_var['item']['username']; ?></td>
                <td><?php echo $this->_var['item']['phone']; ?></td>
                <td><?php echo $this->_var['item']['addr']; ?></td>
                <td><?php echo $this->_var['item']['goodsinfo']; ?></td>
                <td><?php echo $this->_var['item']['contents']; ?></td>
                <td><?php echo $this->_var['item']['remark']; ?></td>
                <td><img src="/TMSS/data/order/<?php echo $this->_var['item']['imagepath1']; ?>" alt="" width="100" height="100" /></td>
                <td><img src="/TMSS/data/order/<?php echo $this->_var['item']['imagepath2']; ?>" alt="" width="100" height="100" /></td>
                <td><img src="/TMSS/data/order/<?php echo $this->_var['item']['imagepath3']; ?>" alt="" width="100" height="100" /></td>
                <td><img src="/TMSS/data/order/<?php echo $this->_var['item']['imagepath4']; ?>" alt="" width="100" height="100" /></td>
            </tr>

            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        </table>

        <!-- 分页 -->
        <table id="page-table" cellspacing="0" align="center">
            <tr>
                <td align="right" nowrap="true">
                    <!--<?php echo $this->fetch('page1.htm'); ?>-->
                </td>
            </tr>
        </table>
    </div>
</form>
<?php echo $this->fetch('pagefooter.htm'); ?>