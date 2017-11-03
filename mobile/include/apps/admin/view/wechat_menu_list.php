{include file="pageheader"}
<div class="container-fluid" style="padding:0">
  <div class="row" style="margin:0">
    <div class="col-md-2 col-sm-2 col-lg-1" style="padding-right:0;">{include file="wechat_left_menu"}</div>
    <div class="col-md-10 col-sm-10 col-lg-11" style="padding-right:0;">
      <div class="panel panel-default">
        <div class="panel-heading" style="overflow:hidden;">{$lang['menu']} <a href="{url('menu_edit')}" class="btn btn-primary fancybox fancybox.iframe pull-right">{$lang['menu_add']}</a></div>
        <div class="panel-body">
        <form action="{url('menu')}" method="post" class="form-horizontal" role="form">
        <table class="table table-hover ectouch-table">
            <tr class="active">
              <th class="text-center">{$lang['menu_name']}</th>
              <th class="text-center">{$lang['menu_keyword']}</th>
              <th class="text-center">{$lang['menu_url']}</th>
              <th class="text-center">{$lang['sort_order']}</th>
              <th class="text-center">{$lang['handler']}</th>
            </tr>
            {loop $list $key $val}
            <tr>
              <td>{$val['name']}</td>
              <td class="text-center">{$val['key']}</td>
              <td class="text-center">{$val['url']}</td>
              <td class="text-center">{$val['sort']}</td>
              <td class="text-center"><a href="{url('menu_edit', array('id'=>$val['id']))}" class="btn btn-primary fancybox fancybox.iframe">{$lang['edit']}</a> <a href="javascript:if(confirm('{$lang['confirm_delete']}')){window.location.href='{url('menu_del', array('id'=>$val['id']))}'};" class="btn btn-default">{$lang['drop']}</a></td>
            </tr>
            {loop $val['sub_button'] $k $v}
            <tr>
              <td>&nbsp;|---- &nbsp;&nbsp;{$v['name']}</td>
              <td class="text-center">{$v['key']}</td>
              <td class="text-center">{$v['url']}</td>
              <td class="text-center">{$v['sort']}</td>
              <td class="text-center"><a href="{url('menu_edit', array('id'=>$v['id']))}" class="btn btn-primary fancybox fancybox.iframe">{$lang['edit']}</a> <a href="javascript:if(confirm('{$lang['confirm_delete']}')){window.location.href='{url('menu_del', array('id'=>$v['id']))}'};" class="btn btn-default">{$lang['drop']}</a></td>
            </tr>
            {/loop}
            {/loop}
            <tr>
              <td colspan="5" class="text-center"><a href="{url('sys_menu')}" class="btn btn-primary">{$lang['menu_create']}</a></td>
            </tr>
        </table>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
{include file="pagefooter"}