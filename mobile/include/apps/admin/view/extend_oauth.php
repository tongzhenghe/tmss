{include file="pageheader"}
<div class="container-fluid" style="padding:0">
	<div class="row" style="margin:0">
	  <div class="col-md-2 col-sm-2 col-lg-1" style="padding-right:0;">{include file="wechat_left_menu"}</div>
	  <div class="col-md-10 col-sm-10 col-lg-11" style="padding-right:0;">
		<div class="panel panel-default">
			<div class="panel-heading">微信OAuth</div>
			<table class="table table-hover table-striped table-bordered">
			    <tr>
			        <th class="text-center">规则名称</th>
			        <th class="text-center">回调地址</th>
			        <th class="text-center">推送量</th>
			        <th class="text-center">状态</th>
			        <th class="text-center">操作</th>
			    </tr>
			    {if $list}
                <tr>
                    <td class="text-center">{$list['name']}</td>
                    <td class="text-center">{$list['config']['redirect_uri']}</td>
                    <td class="text-center">{if $list['config']['count']}{$list['config']['count']}{else}0{/if}</td>
                    <td class="text-center">{if $list['enable']}开启{else}关闭{/if}</td>
                    <td class="text-center"><a href="{url('oauth_edit')}" class="btn btn-primary" data-toggle="modal" data-target=".bs-edit-modal-lg">编辑</a><a href="javascript:if(confirm('{$lang['confirm_delete']}')){window.location.href='url('oauth_del')'}" class="btn btn-default">删除</a></td>
                </tr>
                {/if}
			</table>
		</div>
	  </div>
	</div>
</div>
<div class="modal fade bs-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"></div>
  </div>
</div>
{include file="pagefooter"}