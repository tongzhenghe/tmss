#ECTouchThemes

该版本库用于存放ECTouch模板主题文件，模板主题安装文档应包含需要修改的控制器，增加的文件，执行的sql。

其他内容陆续补充。
1.目录：data\install.sql
  位置： 
  下面添加代码：

  INSERT INTO `ecs_touch_ad_position` (`position_id`, `position_name`, `ad_width`, `ad_height`, `position_desc`, `position_style`) VALUES
(2, '首页促销活动', 360, 168, '', '{foreach from=$ads item=ad}\r\n{$ad}\r\n{/foreach}\r\n');

  位置：
  下面添加代码：

INSERT INTO `ecs_touch_ad` (`ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled`) VALUES
(3, 2, 0, '3', '', 'http://demo.ecmoban.com/touch/jd/mobile/data/afficheimg/1413280788866649882.jpg', 1413187200, 1447315200, '', '', '', 0, 1);


2.目录：include\apps\default\controller\IndexController.class.php
  位置：$this->assign('navigator', $navigator['middle']); 
  下面添加代码：
   //首页推荐分类
   $cat_rec = model('Common')->get_recommend_res();
   $this->assign('cat_rec', $cat_rec[1]); 


3.目录：include\apps\default\controller\CategoryController.class.php
  位置：$arr[$row['goods_id']]['promotion'] = model('GoodsBase')->get_promotion_show($row['goods_id']);
  下面添加代码：
  $arr[$row['goods_id']]['comment_count']  = model('Comment')->get_goods_comment( $row['goods_id'] , 0);  //商品总评论数量 
  $arr[$row['goods_id']]['good_commnet_count']  = model('Comment')->favorable_comment( $row['goods_id'], 0);  //获得商品好评数量  


4.目录：include\apps\default\controller\FlowController.class.php
  位置：$result ['total_number'] = $cart_goods ['total'] ['total_number'];
  下面添加代码：
  $result['market_total'] =  $cart_goods['total']['market_price'];//市场价格


5.目录：include\apps\default\controller\GoodsController.class.php
  位置：最后一个方法下面
  添加代码：
    /**
     * 商品信息 
     */
    public function goods_info() {
        /* 获得商品的信息 */
        $goods = model('Goods')->get_goods_info($this->goods_id);
        $this->assign('goods', $goods);

        $properties = model('Goods')->get_goods_properties($this->goods_id);  // 获得商品的规格和属性

        $this->assign('properties', $properties['pro']);                              // 商品属性
        $this->assign('specification', $properties['spe']);                              // 商品规格

        $this->display('goods_info.dwt');
    }
    /**
     * 商品评论
     */
    public function comment_list() {
        $cmt = new stdClass();
        $cmt->id = !empty($_GET['id']) ? intval($_GET['id']) : 0;
        $cmt->type = !empty($_GET['type']) ? intval($_GET['type']) : 0;
        $cmt->page = isset($_GET['page']) && intval($_GET['page']) > 0 ? intval($_GET['page']) : 1;

        $comment_good = model('Comment')->assign_comment($cmt->id, $cmt->type, '1', $cmt->page);
        $this->assign('comment_good', $comment_good['comments']);
        $this->assign('pager_good', $comment_good['pager']);

        $comment_medium = model('Comment')->assign_comment($cmt->id, $cmt->type, '2', $cmt->page);
        $this->assign('comment_medium', $comment_medium['comments']);
        $this->assign('pager_medium', $comment_medium['pager']);

        $comment_poor = model('Comment')->assign_comment($cmt->id, $cmt->type, '3', $cmt->page);
        $this->assign('comment_poor', $comment_poor['comments']);
        $this->assign('pager_poor', $comment_poor['pager']);

        $this->assign('comment_info', model('Comment')->get_comment_info($cmt->id, $cmt->type));
        $this->assign('comment_type', $cmt->type);
        $this->assign('id', $cmt->id);
        $this->assign('username', $_SESSION['user_name']);
        $this->assign('email', $_SESSION['email']);
        /* 验证码相关设置 */
        if ((intval(C('captcha')) & CAPTCHA_COMMENT) && gd_version() > 0) {
            $this->assign('enabled_captcha', 1);
            $this->assign('rand', mt_rand());
        }
        $result['message'] = C('comment_check') ? L('cmt_submit_wait') : L('cmt_submit_done');
        $this->display('goods_comment_list.dwt');
    }

6.目录：include\apps\default\controller\UserController.class.php
  位置：最后一个方法下面
  添加代码：
     /**
     * 收藏 
     */
    public function collection_list() {
        $this->display('user_collection_list.dwt');
    }
    /**
     * 异步加载收藏
     */
    public function async_collection_list() {
        if (IS_AJAX) {
            $start = $_POST['last'];
            $limit = $_POST['amount'];
            $goods_list = model('ClipsBase')->get_collection_goods($this->user_id, $limit, $start);
            foreach ($goods_list as $key => $good) {
                $this->assign('collection_good', $good);
                $sayList[] = array(
                    'single_item' => ECTouch::view()->fetch('library/asynclist_info.lbi')
                );
            }
            die(json_encode($sayList));
        } else {
            $this->redirect(url('index'));
        }
    }


7.目录：include\apps\default\model\BrandModel.class.php
  位置：$arr[$row['goods_id']]['promotion'] = model('GoodsBase')->get_promotion_show($row['goods_id']);
  添加代码：
 $arr[$row['goods_id']]['comment_count']  = model('Comment')->get_goods_comment( $row['goods_id'] , 0);  //商品总评论数量
 $arr[$row['goods_id']]['good_commnet_count']  = model('Comment')->favorable_comment( $row['goods_id'], 0);  //获得商品好评数量

8.目录：include\apps\default\model\CommentModel.class.php
  位置：最后一个funciton 结束位置后
  添加代码：
   /**
     * 获取商品总的评价详情 by Leah
     * @param type $id
     * @param type $type
     */
    function get_comment_info($id, $type) {

        $sql = 'SELECT COUNT(*) as count FROM ' . $this->pre .
                "comment WHERE id_value = '$id' AND comment_type = '$type' AND status = 1 AND parent_id = 0" .
                ' ORDER BY comment_id DESC';
        $result = $this->row($sql);
        $info['count'] = $result['count'];

        $sql = 'SELECT COUNT(*) as count FROM ' . $this->pre .
                "comment WHERE id_value = '$id' AND comment_type = '$type' AND (comment_rank= 5 OR comment_rank = 4) AND status = 1 AND parent_id = 0" .
                ' ORDER BY comment_id DESC';
        $result = $this->row($sql);
        $good = $result['count'];
        
        $sql = 'SELECT COUNT(*) as count FROM ' . $this->pre .
                "comment WHERE id_value = '$id' AND comment_type = '$type' AND status = 1 AND parent_id = 0 AND(comment_rank = 2 OR comment_rank = 3)" .
                ' ORDER BY comment_id DESC';
        $result = $this->row($sql);
        $medium = $result['count'];

        $sql = 'SELECT COUNT(*) as count FROM ' . $this->pre .
                "comment WHERE id_value = '$id' AND comment_type = '$type' AND status = 1 AND parent_id = 0 AND comment_rank = 1 " .
                ' ORDER BY comment_id DESC';
        $result = $this->row($sql);
        $poor = $result['count'];

        $info['good_count'] = $good['count'];    //好评数量
        $info['medium_count'] = $medium['count']; //中评数量
        $info['poor_count'] = $poor['count'];     //差评数量
        $info['good'] = 0;
        if ($info['count'] > 0) {
            if ($good) {
                $info['good'] = round(($good / $info['count']) * 100);  //好评率
            }
            $info['medium'] = 0;
            if ($medium) {
                $info['medium'] = round(($medium / $info['count']) * 100); //中评
            }
            $info['poor'] = 0;
            if ($poor) {
                $info['poor'] = round(($poor / $info['count']) * 100); //差评
            }
        }
        return $info;
    }
    /**
     * 获取商品所有评论数量 by Leah
     * @param type $goods_id
     * @param type $type
     * @return type
     */
    function get_goods_comment($goods_id, $type) {

        $sql = 'SELECT COUNT(*) as count FROM ' . $this->pre .
                "comment WHERE id_value = '$goods_id' AND comment_type = '$type' AND status = 1 AND parent_id = 0" .
                ' ORDER BY comment_id DESC';
        $result = $this->row($sql);
        return $result['count'];
    }

    /**
     * 获取商品好评百分比 by Leah
     * @param type $goods_id
     * @param type $type
     * @return type
     */
    function favorable_comment($goods_id, $type) {

        $sql = 'SELECT COUNT(*) as count FROM ' . $this->pre .
                "comment WHERE id_value = '$goods_id' AND comment_type = '$type' AND status = 1 AND parent_id = 0" .
                ' ORDER BY comment_id DESC';
        $result = $this->row($sql);
        $count = $result['count'];

        $sql = 'SELECT COUNT(*) as count FROM ' . $this->pre .
                "comment WHERE id_value = '$goods_id' AND comment_type = '$type' AND (comment_rank= 5 OR comment_rank = 4) AND status = 1 AND parent_id = 0" .
                ' ORDER BY comment_id DESC';
        $goods_result = $this->row($sql);
        $good_count = $goods_result['count'];
        $round = 100;
        if($count > 0){
             $round = round(($good_count / $count) * 100);
        }
        return $round;
    }

   覆盖assign_comment 方法为:
   /**
     * 查询评论内容
     *
     * @access  public
     * @params  integer     $id
     * @params  integer     $type
     * @params  integer     $page
     * @return  array
     */
    function assign_comment($id, $type, $rank, $page = 1) {
        /* 取得评论列表 */
        $res = $this->row('SELECT COUNT(*) as count FROM ' . $this->pre .
                "comment WHERE id_value = '$id' AND comment_type = '$type' AND status = 1 AND parent_id = 0");
        $count = $res['count'];
        $size = C('comments_number') > 0 ? C('comments_number') : 5;
        $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;
        $start = ($page - 1) * $size;
        $rank_info  = '';
        if($rank == '1'){
           $rank_info = ' AND (comment_rank= 5 OR comment_rank = 4)';    
        }
         if($rank == '2'){
           $rank_info = ' AND (comment_rank= 2 OR comment_rank = 3)';    
        }
         if($rank == '3'){
           $rank_info = ' AND comment_rank= 1 ';    
        }
        
        $sql = 'SELECT * FROM ' . $this->pre .
                "comment WHERE id_value = '$id' AND comment_type = '$type' AND status = 1 AND parent_id = 0".$rank_info .
                " ORDER BY comment_id DESC LIMIT $start , $size";
        $res = $this->query($sql);
        $arr = array();
        $ids = '';
        foreach ($res as $key => $row) {
            $ids .= $ids ? ",$row[comment_id]" : $row['comment_id'];
            $arr[$row['comment_id']]['id'] = $row['comment_id'];
            $arr[$row['comment_id']]['email'] = $row['email'];
            $arr[$row['comment_id']]['username'] = $row['user_name'];
            $arr[$row['comment_id']]['content'] = str_replace('\r\n', '<br />', htmlspecialchars($row['content']));
            $arr[$row['comment_id']]['content'] = nl2br(str_replace('\n', '<br />', $arr[$row['comment_id']]['content']));
            $arr[$row['comment_id']]['rank'] = $row['comment_rank'];
            $arr[$row['comment_id']]['add_time'] = local_date(C('time_format'), $row['add_time']);
        }
        /* 取得已有回复的评论 */
        if ($ids) {
            $sql = 'SELECT * FROM ' . $this->pre .
                    "comment WHERE parent_id IN( $ids )";
            $res = $this->query($sql);
            foreach ($res as $row) {
                $arr[$row['parent_id']]['re_content'] = nl2br(str_replace('\n', '<br />', htmlspecialchars($row['content'])));
                $arr[$row['parent_id']]['re_add_time'] = local_date(C('time_format'), $row['add_time']);
                $arr[$row['parent_id']]['re_email'] = $row['email'];
                $arr[$row['parent_id']]['re_username'] = $row['user_name'];
            }
        }
        /* 分页样式 */
        //$pager['styleid'] = isset(C('page_style'))? intval(C('page_style')) : 0;
        $pager['page'] = $page;
        $pager['size'] = $size;
        $pager['record_count'] = $count;
        $pager['page_count'] = $page_count;
        $pager['page_first'] = "javascript:gotoPage(1,$id,$type,$rank)";
        $pager['page_prev'] = $page > 1 ? "javascript:gotoPage(" . ($page - 1) . ",$id,$type,$rank)" : 'javascript:;';
        $pager['page_next'] = $page < $page_count ? 'javascript:gotoPage(' . ($page + 1) . ",$id,$type,$rank)" : 'javascript:;';
        $pager['page_last'] = $page < $page_count ? 'javascript:gotoPage(' . $page_count . ",$id,$type,$rank)" : 'javascript:;';

        $cmt = array('comments' => $arr, 'pager' => $pager);

        return $cmt;
    } 


9.目录：include\apps\default\model\CommonModel.class.php
  位置：最后一个funciton 结束位置后
  添加代码:
    /**
     * 首页推荐分类
     * @return type
     *  by Leah
     */
    function get_recommend_res() {
        $cat_recommend_res = $this->query("SELECT c.cat_id, c.cat_name, cr.recommend_type FROM " . $this->pre . "cat_recommend AS cr INNER JOIN " . $this->pre . "category AS c ON cr.cat_id=c.cat_id");
        if (!empty($cat_recommend_res)) {
            $cat_rec_array = array();
            foreach ($cat_recommend_res as $cat_recommend_data) {
                $cat_rec[$cat_recommend_data['recommend_type']][] = array('cat_id' => $cat_recommend_data['cat_id'], 'cat_name' => $cat_recommend_data['cat_name']);
            }
            return $cat_rec;
        }
    } 


10.目录：include\apps\default\model\GroupbuyModel.class.php
   位置：待定

11.目录：include\apps\default\language\zh_cn\common.php
   位置：任意
   添加代码：
    //by Leah
    $_LANG['after_sales'] = '售后服务';
    $_LANG['continue_buy'] = '继续购物';
    $_LANG['my_cart'] = '我的购物车';
    $_LANG['total_price'] = '合计金额';
    $_LANG['view_collect'] = '查看收藏夹';
    $_LANG['is_invoice'] = '是否开发票';
    $_LANG['no_select'] = '未选择';
    $_LANG['add_success'] = '添加成功!';
    $_LANG['add_cart_success'] = '商品已成功加入购物车';
    $_LANG['think_like_goods'] = '也许您还喜欢';
  

12.目录：include\apps\default\common\insert.php
   位置：最后一个方法结束后
   添加代码：
    /**
     * 调用评论信息 by  Leah
     * @param type $arr
     * @return type
     */
    function insert_comment_info($arr){

        $need_cache = ECTouch::view()->caching;
        $need_compile = ECTouch::view()->force_compile;

        ECTouch::view()->caching = false;
        ECTouch::view()->force_compile = true;

        /* 验证码相关设置 */
        if ((intval($GLOBALS['_CFG']['captcha']) & CAPTCHA_COMMENT) && gd_version() > 0)
        {
            ECTouch::view()->assign('enabled_captcha', 1);
            ECTouch::view()->assign('rand', mt_rand());
        }
        ECTouch::view()->assign('username',     stripslashes($_SESSION['user_name']));
        ECTouch::view()->assign('email',        $_SESSION['email']);
        ECTouch::view()->assign('comment_type', $arr['type']);
        ECTouch::view()->assign('id',           $arr['id']);
        $comment = model('Comment')->get_comment_info( $arr['id'] , $arr['type']);
        ECTouch::view()->assign('comment',     $comment);
        $val = ECTouch::view()->fetch('library/comments_info.lbi');

        ECTouch::view()->caching = $need_cache;
        ECTouch::view()->force_compile = $need_compile;

        return $val;
    }


13.目录：D:\wamp\www\ectouch\ectouch\data\common\js\shopping_flow.js
   位置：function changeNeedInv(need)
   整段方法替换为：
    /* *
    * 改变发票的方式
    */
    function changeNeedInv(need)
    {
      var objType    = document.getElementById('ECS_INVTYPE');
      var objPayee   = document.getElementById('ECS_INVPAYEE');
      var objContent = document.getElementById('ECS_INVCONTENT');
      var invType    = need ? (objType != undefined ? objType.value : '') : '';
      var invPayee   = need ? objPayee.value : '';
      var invContent = need ? objContent.value : '';
      objType.disabled = objPayee.disabled = objContent.disabled = ! need;
      if(objType != null)
      {
        objType.disabled = ! need;
      }
    $.get('index.php?m=default&c=flow&a=change_needinv', {need_inv:need, inv_type:encodeURIComponent(invType), inv_payee:encodeURIComponent(invPayee), inv_content:encodeURIComponent(invContent)}, function(data){
        orderSelectedResponse(data);
      }); 
    }

14.目录：data\common\js\common.js
   位置：document.getElementById('carId').innerHTML = result.cart_number;
         document.getElementById('globalId').innerHTML = result.cart_number;
   注释掉以上代码
   添加：
   showDiv(); 

   位置：function collectResponse(result) 
   替换掉整段方法为： 
    /* *
     * 处理收藏商品的反馈信息
     */
    function collectResponse(result) {
        if (result.error == 0) {
              alert(result.message);
        }
        if (result.error == 2) {
            var returnVal = window.confirm("未登录不能使用收藏功能 \n是否登录");
            if (returnVal) {
                window.location.href = 'index.php?m=default&c=user&a=login';
            }
        }
    }
   位置：function gotoPage(page, id, type,rank)
   替换函数 ： 
    /* *
     * 评论的翻页函数
     */
    function gotoPage(page, id, type,rank) {
        $.get('index.php?m=default&c=comment&a=index&act=gotopage', {
            page: page,
            id: id,
            type: type,
            rank: rank
        }, function(data) {
            gotoPageResponse(data);
        }, 'json');
    }

  位置：function gotoPageResponse(result)
  替换函数：  
    document.getElementById("ECS_COMMENT").innerHTML = result.content;
    tab( result.rank);

15.目录：include\apps\default\controller\CommentController.class.php
   位置:$page = I('get.page');
   下面添加：$rank = I('get.rank');

   位置：if ($result ['error'] == 0)  
   里面替换为：
   if ($rank == 1) {
                $comment_good = model('Comment')->assign_comment($cmt->id, $cmt->type, '1', $cmt->page);
                $this->assign('comment_good', $comment_good['comments']);
                $this->assign('pager_good', $comment_good['pager']);
            }
            if ($rank == 2) {
                $comment_medium = model('Comment')->assign_comment($cmt->id, $cmt->type, '2', $cmt->page);
                $this->assign('comment_medium', $comment_medium['comments']);
                $this->assign('pager_medium', $comment_medium['pager']);
            }
            if ($rank == 3) {
                $comment_poor = model('Comment')->assign_comment($cmt->id, $cmt->type, '3', $cmt->page);
                $this->assign('comment_poor', $comment_poor['comments']);
                $this->assign('pager_poor', $comment_poor['pager']);
            }
            $this->assign('comment_info', model('Comment')->get_comment_info($cmt->id, $cmt->type));
            $this->assign('comment_type', $cmt->type);
            $this->assign('id', $cmt->id);
            $this->assign('username', $_SESSION['user_name']);
            $this->assign('email', $_SESSION['email']);

            /* 验证码相关设置 */
            if ((intval(C('captcha')) & CAPTCHA_COMMENT) && gd_version() > 0) {
                $this->assign('enabled_captcha', 1);
                $this->assign('rand', mt_rand());
            }
            $result['rank'] = $rank;
            $result['message'] = C('comment_check') ? L('cmt_submit_wait') : L('cmt_submit_done');
            $result['content'] = ECTouch::$view->fetch("library/comments_list.lbi");
  
