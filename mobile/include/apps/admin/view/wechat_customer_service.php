{include file="pageheader"}
<div class="container-fluid" style="padding:0">
	<div class="row" style="margin:0">
	  <div class="col-md-2 col-sm-2 col-lg-1" style="padding-right:0;">{include file="wechat_left_menu"}</div>
	  <div class="col-md-10 col-sm-10 col-lg-11" style="padding-right:0;">
		<div class="panel panel-default">
			<div class="panel-heading">多客服设置</div>
      <div class="panel-body bg-info">
            <span class="help-block">   微信端输入kefu进入多客服系统，当会话超过2小时客服没有关闭时，微信端输入任何信息都会自动退出客服系统；或者当客服关闭会话后，微信端输入ko#kefu退出客服系统。
            </span>
        </div>
			
			<div class="panel-body">
        <form action="{url('customer_service')}" method="post" class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-sm-1 col-md-1 col-lg-1 control-label">状态</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <label class="radio-inline">
                <input type="radio" name="data[enable]" value="1" {if $customer_service['enable'] == 1}checked{/if} />开启
              </label>
              <label class="radio-inline">
                <input type="radio" name="data[enable]" value="0" {if $customer_service['enable'] == 0}checked{/if} />关闭
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 col-md-1 col-lg-1 control-label">转到客服</label>
            <div class="col-sm-4 col-md-4 col-lg-4"><input type="text" class="form-control" placeholder="请输入客服" name="config[customer]" value="{$customer_service['config']['customer']}"></div>
          </div>
          <!-- <div class="form-group">
            <label class="col-sm-1 col-md-1 col-lg-1 control-label">会话自动关闭时间</label>
            <div class="col-sm-2 col-md-2 col-lg-2"><input type="text" class="form-control" placeholder="会话有效时间" name="config[valid_time]" value="{$customer_service['config']['valid_time']}"></div>
            <span class="help-block">单位：分钟。如果会话有效时间内没有交流，会话会自动失效。如果要联系客服请重新进入。</span>
          </div> -->
          <div class="form-group">
            <div class="col-sm-offset-1">
              <input type="hidden" name="command" value="kefu" />
              <input type="submit" value="确认" class="btn btn-primary" />
              <input type="reset" value="重置" class="btn btn-default" />
            </div>
          </div>
        </form>
      </div>
		</div>
		</div>
	</div>
</div>
{include file="pagefooter"}