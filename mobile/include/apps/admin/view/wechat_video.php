{include file="pageheader"}
<link rel="stylesheet" type="text/css" href="__PUBLIC__/webuploader/webuploader.css">
<script type="text/javascript" src="__PUBLIC__/webuploader/webuploader.min.js"></script>
<div class="container-fluid" style="padding:0">
	<div class="row" style="margin:0">
	  <div class="col-md-2 col-sm-2 col-lg-1" style="padding-right:0;">{include file="wechat_left_menu"}</div>
	  <div class="col-md-10 col-sm-10 col-lg-11" style="padding-right:0;">
		<div class="panel panel-default">
			<div class="panel-heading">素材管理</div>
			<div class="panel-body">
			    <a href="{url('video_edit')}" class="btn btn-primary pull-right">视频添加</a>
			    <ul class="nav nav-tabs" role="tablist">
                     <li role="presentation"><a href="{url('article')}">图文消息</a></li>
                     <li role="presentation"><a href="{url('picture')}">图片</a></li>
                     <li role="presentation"><a href="{url('voice')}">语音</a></li>
                     <li role="presentation" class="active"><a href="{url('video')}">视频</a></li>
			     </ul>
			     
			</div>
			<div class="panel-body">
    			<div class="row" style="margin:0;">
    			{loop $list $v}
                    <div class="col-xs-4 col-md-2 thumbnail" style="margin-right:10px;">
                        <img alt="{$v['file_name']}" src="__PUBLIC__/images/video.png" class="img-rounded" style="height:220px" />
                        <p class="text-muted" style="word-wrap:break-word;word-break:normal;">{$v['file_name']}</p>
                        <p class="text-muted">{$v['size']}</p>
                        <div class="bg-info">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                            <li role="presentation"><a href="{url('video_edit', array('id'=>$v['id']))}" title="编辑" class="ectouch-fs18"><span class="glyphicon glyphicon-pencil"></span></a></li>
                            <li role="presentation"><a href="{url('media_del', array('id'=>$v['id']))}" title="删除" class="ectouch-fs18"><span class="glyphicon glyphicon-trash"></span></a></li>
                            </ul>
                        </div>
                    </div>
                {/loop}
                </div>
			</div>
		</div>
		{include file="pageview"}
	  </div>
	</div>
</div>
{include file="pagefooter"}