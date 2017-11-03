<?php echo $this->smarty_insert_scripts(array('files'=>'”../js/utils.js”')); ?>
<div id="turn-page">
    总计 <span id="totalRecords"><?php echo $this->_var['record_count']; ?></span>
    个记录分为 <span id="totalPages"><?php echo $this->_var['page_count']; ?></span>
    页当前第 <span id="pageCurrent"><?php echo $this->_var['filter']['page']; ?></span>页
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">首页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">尾页</a>
        </span>
</div>
