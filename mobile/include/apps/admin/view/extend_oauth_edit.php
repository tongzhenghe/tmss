<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<h4 class="modal-title" id="myModalLabel">编辑微信OAuth</h4>
</div>
<div class="modal-body">
	<form action="{url('oauth_edit')}" method="post" class="form-horizontal" role="form">
      <table id="general-table" class="table table-hover table-bordered table-striped">
        <tr>
          <td width="200">规则名称:</td>
          <td><div class="col-md-6">
              <input type="text" name="name" class="form-control input-sm" value="{$rs['name']}" />
            </div></td>
        </tr>
        <tr>
          <td width="200">回调地址:</td>
          <td><div class="col-md-6">
              <input type="text" name="config[redirect_uri]" class="form-control input-sm" value="{$rs['config']['redirect_uri']}" />
            </div></td>
        </tr>
        <tr>
          <td width="200">开启:</td>
          <td><div class="col-md-6">
              <div  class="btn-group" data-toggle="buttons">
					<label class="btn btn-primary {if $rs['enable']}active{/if}">
						<input type="radio" name="enable" value="1" {if $rs['enable']}checked{/if}> 开启
					</label>
					<label class="btn btn-primary {if empty($rs['enable'])}active{/if}">
						<input type="radio" name="enable" value="0" {if empty($rs['enable'])}checked{/if}> 关闭
					</label>
				</div>
            </div></td>
        </tr>
          <td width="200"></td>
          <td><div class="col-md-4">
                <input type="hidden" name="config[count]" value="{if $rs['config']['count']}{$rs['config']['count']}{else}0{/if}" />
                <input type="hidden" name="config[contents]" value="{$rs['config']['contents']}" />
				<input type="submit" value="{$lang['button_submit']}" class="btn btn-primary" />
              	<input type="reset" value="{$lang['button_reset']}" class="btn btn-default" />
            </div></td>
        </tr>
        </table>
	</form>
</div>
<script type="text/javascript">
$(function(){
	//模态框被隐藏之后清除数据
	$(".bs-edit-modal-lg").on("hidden.bs.modal", function() {
	    $(this).removeData("bs.modal");
	});
})
</script>