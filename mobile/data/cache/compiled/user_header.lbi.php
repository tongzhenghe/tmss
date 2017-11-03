<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $this->_var['page_title']; ?> 触屏版</title>
<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $this->_var['ectouch_css_path']; ?>">
<link rel="stylesheet" href="__TPL__/css/user.css">
<link rel="stylesheet" href="__TPL__/css/photoswipe.css">
<script>
var ROOT_URL = "__ROOT__";
var GOODS_IMAGE = '';
</script>
</head>

<body>
<div class="con" style="background:#e8e8e8">
	<div style="height:3.7em;"></div>
	<header class="Header clearfix fixed">
    	<a href="javascript:history.go(-1)" class="Return"><span></span></a>
        <span class="Title"><?php echo $this->_var['title']; ?></span>
        <a href="<?php echo url('index/index');?>" class="Home"><span></span></a>
    </header>
    
