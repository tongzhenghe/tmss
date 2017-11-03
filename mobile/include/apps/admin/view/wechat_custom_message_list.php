{include file="pageheader"}
<div class="container-fluid" style="padding:0">
  <div class="row" style="margin:0">
    <div class="col-md-2 col-sm-2 col-lg-1" style="padding-right:0;">{include file="wechat_left_menu"}</div>
    <div class="col-md-10 col-sm-10 col-lg-11" style="padding-right:0;">
    <div class="panel panel-default">
      <div class="panel-heading">{$lang['custom_message_list']}  ---  {$nickname}</div>
      <table class="table table-hover table-bordered table-striped">
        <tr>
		<th class="text-center">{$lang['interactive_user']}</td>
          <th class="text-center">{$lang['message_content']}</td>
          <th class="text-center"  width="20%">{$lang['message_time']}</td>
        </tr>
        {loop $list $key $val}
        <tr>
		{if $val['iswechat']}
		  <td class="text-center">{$lang['official']}</td>
		{else}
		  <td class="text-center">{$nickname}</td>
		{/if}
          <td class="text-center">{$val['msg']}</td>
          <td class="text-center">{date('Y-m-d H:i:s', $val['send_time'])}</td>
        </tr>
        {/loop}
      </table>
    </div>
    </form>
    {include file="pageview"}
  </div>
 </div>
</div>
{include file="pagefooter"}