{include file="pageheader"}
<link rel="stylesheet" href="__PUBLIC__/colorbox/colorbox.css" />
<script src="__PUBLIC__/colorbox/jquery.colorbox-min.js"></script>
<div class="container-fluid" style="padding:0">
	<div class="row" style="margin:0">
	  <div class="col-md-2 col-sm-2 col-lg-1" style="padding-right:0;">{include file="wechat_left_menu"}</div>
	  <div class="col-md-10 col-sm-10 col-lg-11" style="padding-right:0;">
		<div class="panel panel-default">
			<div class="panel-heading">自动回复</div>
			<div class="panel-body">
			     <ul class="nav nav-tabs" role="tablist" id="myTab">
			         <li class="active"><a href="{url('reply_subscribe')}">关注自动回复</a></li>
			         <li><a href="{url('reply_msg')}">消息自动回复</a></li>
			         <li><a href="{url('reply_keywords')}">关键词自动回复</a></li>
			     </ul>
			</div>
			
			<div class="panel-body">
              <form action="{url('reply_subscribe')}" method="post">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                      <ul class="nav nav-pills" role="tablist">
                        <li role="presentation"><a href="javascript:;" class="glyphicon glyphicon-pencil ectouch-fs18" title="文字"></a></li>
                        <li role="presentation"><a href="{url('auto_reply', array('type'=>'image'))}" class="glyphicon glyphicon-picture ectouch-fs18 fancybox fancybox.iframe" title="图片" "></a></li>
                        <li role="presentation"><a href="{url('auto_reply', array('type'=>'voice'))}" class="glyphicon glyphicon-volume-up ectouch-fs18 fancybox fancybox.iframe"  title="语音" "></a></li>
                        <li role="presentation"><a href="{url('auto_reply', array('type'=>'video'))}" class="glyphicon glyphicon-film ectouch-fs18 fancybox fancybox.iframe"  title="视频" "></a></li>
                      </ul>
                      </div>
                      <div class="panel-body" style="padding:0;">
                        <div {if $subscribe['media_id']}class="hidden"{/if}><textarea name="content" placeholder="文本内容" rows="6" class="form-control">{if $subscribe['content']}{$subscribe['content']}{/if}</textarea></div>
                        <div class="{if empty($subscribe) || $subscribe['content']}hidden{/if} col-xs-6 col-md-3 thumbnail content" style="border:none;">
                            {if $subscribe['media']}
                                {if $subscribe['media']['type'] == 'voice'}
                                    <input type='hidden' name='media_id' value="{$subscribe['media_id']}"><img src='__PUBLIC__/images/voice.png' class='img-rounded' /><span class='help-block'>{$subscribe['media']['file_name']}</span>
                                {elseif $subscribe['media']['type'] == 'video'}
                                    <input type='hidden' name='media_id' value="{$subscribe['media_id']}"><img src='__PUBLIC__/images/video.png' class='img-rounded' /><span class='help-block'>{$subscribe['media']['file_name']}</span>
                                {else}
                                    <input type='hidden' name='media_id' value="{$subscribe['media_id']}"><img src="{$subscribe['media']['file']}" class='img-rounded' />
                                {/if}
                            {/if}
                        </div>
                      </div>  
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="content_type" value="text" />
                    <input type="submit" class="btn btn-primary" name="submit" value="保存" />
                    <input type="reset" class="btn btn-default" name="reset" value="清除内容" />
                  </div>
                </form>
            </div>
		</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
    $(".nav-pills li").click(function(){
        var index = $(this).index();
        var tab = $(this).parent().parent(".panel-heading").siblings(".panel-body");
        if(index == 0){
    	    tab.find("div").addClass("hidden");
            tab.find("div").eq(index).removeClass("hidden");
            $("input[name=content_type]").val("text");
        }
    });
})
</script>
{include file="pagefooter"}