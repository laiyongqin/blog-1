<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
<link rel="stylesheet" href="/Public/Admin/css/admin.css">
<script src="js/jquery.js"></script>
<script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/index.php/Admin/Cat/edit.html?cat_id=2" style="width: 50%;margin:0 auto">        
      <div class="form-group">
        <div class="label">
          <label>分类标题:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" style="width: 60%" name="catname" value="<?php echo ($data['catname']); ?>" />
          <div class="tips"></div>
        </div>
      </div>  
      <div class="form-group">
        <div class="label">
          <label>别名:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" style="width: 60%" name="hover" value="<?php echo ($data['hover']); ?>" />
          <div class="tips"></div>
        </div>
      </div>        
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field" style="padding-left: 100px">
          <button  class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>