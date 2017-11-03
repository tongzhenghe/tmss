{include file="pageheader"}
<div class="panel panel-default">
	<div class="panel-heading">{$lang['edit'].$lang['wechat_num']}</div>
	<table border="0" cellpadding="0" cellspacing="0" class="table table-hover table-bordered table-striped">
		<form method="post" action="{url('wechat/modify')}" class="form-horizontal" role="form">
		<tr>
			<td width="200">{$lang['wechat_name']}</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[name]" class="form-control" value="{$data['name']}"/>
			</div>
			<p class="help-block">{$lang['wechat_help1']}</p>
			</td>
		</tr>
		<tr>
			<td>{$lang['wechat_id']}</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[orgid]" class="form-control" value="{$data['orgid']}">
			</div>
			<p class="help-block">{$lang['wechat_help2']}</p>
			</td>
		</tr>
		<tr>
			<td>{$lang['wechat_number']}</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[weixin]" class="form-control" value="{$data['weixin']}"> 
				</div>
				<p class="help-block">{$lang['wechat_help1']}</p>
				</td>
		</tr>
		<tr>
			<td>{$lang['token']}</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[token]" class="form-control" value="{$data['token']}">
				</div>
				<p class="help-block">{$lang['wechat_help3']}</p>
				</td>
		</tr>
		<tr>
			<td>{$lang['appid']}</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[appid]" class="form-control" value="{$data['appid']}"> 
				</div>
				<p class="help-block">{$lang['wechat_help4']}</p>
				</td>
		</tr>
		<tr>
			<td>{$lang['appsecret']}</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[appsecret]" class="form-control" value="{$data['appsecret']}"> 
				</div>
				<p class="help-block">{$lang['wechat_help41']}</p>
				</td>
		</tr>
		<tr>
			<td>{$lang['wechat_type']}</td>
			<td><div class="col-sm-2">
				<select name="data[type]" class="form-control">
					<option value="0" {if $data['type']==0} selected{/if}>未认证的公众号</option>
					<option value="1" {if $data['type']==1} selected{/if}>{$lang['wechat_type1']}</option>
					<option value="2" {if $data['type']==2} selected{/if}>{$lang['wechat_type2']}</option>
				</select>
				</div>
				<p class="help-block">{$lang['wechat_help5']}</p>
			</td>
		</tr>
		<tr>
			<td>开启授权登录</td>
			<td><div class="col-sm-2 col-lg-2 col-md-2">
				<div  class="btn-group" data-toggle="buttons">
					<label class="btn btn-primary {if $data['oauth_status']==1}active{/if}">
						<input type="radio" name="data[oauth_status]" value="1" {if $data['oauth_status']==1}checked{/if}> {$lang['wechat_open']}
					</label>
					<label class="btn btn-primary {if $data['oauth_status']==0}active{/if}">
						<input type="radio" name="data[oauth_status]" value="0" {if $data['oauth_status']==0}checked{/if}> {$lang['wechat_close']}
					</label>
				</div>
				</div>
				<p class="help-block">开启之后，微商城会自动进行授权登录，否则不进行授权登录，只提供普通微商城功能。默认开启。</p>
			</td>
		</tr>
		<tr>
			<td>微信OAuth名称</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[oauth_name]" class="form-control" value="{$data['oauth_name']}"> 
				</div>
			</td>
		</tr>
		<tr>
			<td>微信OAuth回调地址</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[oauth_redirecturi]" class="form-control" value="{$data['oauth_redirecturi']}"> 
				</div>
			</td>
		</tr>
		<tr>
			<td>微信OAuth推送量</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[oauth_count]" class="form-control" value="{$data['oauth_count']}" readonly> 
				</div>
			</td>
		</tr>
		<tr>
			<td>{$lang['sort_order']}</td>
			<td><div class="col-sm-4">
				<input type="text" name="data[sort]" value="10" class="form-control" value="{$data['sort']}">
				</div></td>
		</tr>
		<tr>
			<td>{$lang['wechat_status']}</td>
			<td><div class="col-sm-2">
				<div  class="btn-group" data-toggle="buttons">
					<label class="btn btn-primary {if $data['status']==1}active{/if}">
						<input type="radio" name="data[status]" value="1" {if $data['status']==1}checked{/if}> {$lang['wechat_open']}
					</label>
					<label class="btn btn-primary {if $data['status']==0}active{/if}">
						<input type="radio" name="data[status]" value="0" {if $data['status']==0}checked{/if}> {$lang['wechat_close']}
					</label>
				</div>
			</div></td>
		</tr>
		<tr>
			<td></td>
			<td><div class="col-sm-4">
				<input type="hidden" name="id" value="{$data['id']}" />
				<input type="submit" name="submit" value="{$lang['button_save']}" class="btn btn-primary" />
				</div></td>
		</tr>
		</form>
	</table>
{include file="pagefooter"}