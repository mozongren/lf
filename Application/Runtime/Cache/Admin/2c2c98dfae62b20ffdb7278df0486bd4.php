<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>拼图后台管理-后台管理</title>
    <link rel="stylesheet" href="/lf/Public/admin/css/pintuer.css">
    <link rel="stylesheet" href="/lf/Public/admin/css/admin.css">
    <script src="/lf/Public/admin/js/jquery.js"></script>
    <script src="/lf/Public/admin/js/pintuer.js"></script>
    <script src="/lf/Public/admin/js/respond.js"></script>
    <script src="/lf/Public/admin/js/admin.js"></script>
    <link type="image/x-icon" href="http://www.pintuer.com/favicon.ico" rel="shortcut icon" />
    <link href="http://www.pintuer.com/favicon.ico" rel="bookmark icon" />
</head>

<body>

<div class="lefter">
    <div class="logo"><a href="http://www.pintuer.com" target="_blank"><img src="/lf/Public/admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter " id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="http://www.pintuer.com" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" href="<?php echo U('admin/login/logout');?>">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li class="<?php echo ($this_menu == 'index'?active:''); ?>"><a href="index.html" class="icon-home">开始</a>
                    <ul>
						<li><a href="<?php echo U('system/index');?>">系统设置</a></li>
						<li><a href="<?php echo U('content');?>">内容管理</a></li>
						<li><a href="#">订单管理</a></li>
						<li class="active"><a href="#">会员管理</a></li>
						<li><a href="#">文件管理</a></li>
						<li><a href="#">栏目管理</a></li>
				    </ul>
                </li>
                <li class="<?php echo ($this_menu == 'system'?active:''); ?>">
				    <a href="<?php echo U('system/index');?>" class="icon-cog"> 系统</a>
            		<ul>
					    <li><a href="#">全局设置</a></li>
						<li class="active"><a href="#">系统设置</a></li>
						<li><a href="#">会员设置</a></li>
						<li><a href="#">积分设置</a></li>
					</ul>
                </li>
                <li class="<?php echo ($this_menu == 'content'?active:''); ?>">
				    <a href="<?php echo U('content/index');?>" class="icon-file-text"> 内容</a>
					<ul>
                    
						<li class="<?php echo ($this_menu_c == 'article_add'?'active':''); ?>"><a href="<?php echo U('content/add_content');?>">添加内容</a></li>
						<li class="<?php echo ($this_menu_c == 'article_list'?'active':''); ?>"><a href="<?php echo U('content/index');?>">文章内容</a></li>
						<li class="<?php echo ($this_menu_c == 'article_classify'?'active':''); ?>"><a href="<?php echo U('content/article_classify');?>">文章分类</a></li>
                        <li class="line"></li>
                        <li class="<?php echo ($this_menu_c == 'product_add'?'active':''); ?>"><a href="<?php echo U('content/add_content');?>">添加产品</a></li>
                        <li class="<?php echo ($this_menu_c == 'product_list'?'active':''); ?>"><a href="<?php echo U('content/index');?>">产品内容</a></li>
                        <li class="<?php echo ($this_menu_c == 'product_classify'?'active':''); ?>"><a href="<?php echo U('content/article_classify');?>">分类分类</a></li>

                        <li class="line"></li>
						<li><a href="#">链接管理</a></li>
					</ul>
                </li>
                <li><a href="#" class="icon-shopping-cart"> 订单</a></li>
                <li><a href="#" class="icon-user"> 会员</a></li>
                <li><a href="#" class="icon-file"> 文件</a></li>
                <li><a href="#" class="icon-th-list"> 栏目</a></li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，admin，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                <li>后台首页</li>
            </ul>
        </div>
    </div>
</div>



<div class="admin">
    <div class="tab">
      <div class="tab-head">
        <strong>系统设置</strong>
        <ul class="tab-nav">
          <li class="active"><a href="#tab-set">系统设置</a></li>
          <li><a href="#tab-email">邮件设置</a></li>
          <li><a href="#tab-upload">上传设置</a></li>
          <li><a href="#tab-visit">访问限制</a></li>
        </ul>
      </div>
      <div class="tab-body">
        <br />
        <div class="tab-panel active" id="tab-set">
        	<form method="post" class="form-x" action="system.html">
				<div class="form-group">
                	<div class="label"><label>网站维护状态</label></div>
                	<div class="field">
                        <div class="button-group button-group-small radio">
                            <label class="button active"><input name="pintuer" value="yes" checked="checked" type="radio"><span class="icon icon-check"></span> 开启</label>
                            <label class="button"><input name="pintuer" value="no" type="radio"><span class="icon icon-times"></span> 关闭</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="readme">维护说明</label></div>
                    <div class="field">
                    	<textarea class="input" rows="5" cols="50" placeholder="请填写维护说明" data-validate="required:请填写维护说明"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="sitename">网站名称</label></div>
                    <div class="field">
                    	<input type="text" class="input" id="sitename" name="sitename" size="50" placeholder="网站名称" data-validate="required:请填写你网站的名称" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="siteurl">网址</label></div>
                    <div class="field">
                    	<input type="text" class="input" id="siteurl" name="siteurl" size="50" placeholder="请填写网址" data-validate="required:请填写网址" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="logo">标志</label></div>
                    <div class="field">
                    	<a class="button input-file" href="javascript:void(0);">+ 浏览文件<input size="100" type="file" name="logo" data-validate="required:请选择上传文件,regexp#.+.(jpg|jpeg|png|gif)$:只能上传jpg|gif|png格式文件" /></a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="title">优化标题</label></div>
                    <div class="field">
                    	<input type="text" class="input" id="title" name="title" size="50" placeholder="title标题内容，用于搜索引擎优化" data-validate="required:请填写优化标题，建议在80字以内。" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="keywords">关键词</label></div>
                    <div class="field">
                    	<input type="text" class="input" id="keywords" name="keywords" size="50" placeholder="站点关键词，用于搜索引擎优化" data-validate="required:请填写站点关键词，建议在100字以内。" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="desc">描述</label></div>
                    <div class="field">
                    	<input type="text" class="input" id="desc" name="desc" size="50" placeholder="网站的描述，用于搜索引擎优化" data-validate="required:请填写网站的描述，建议在200字以内。" />
                    </div>
                </div>
                <div class="form-button"><button class="button bg-main" type="submit">提交</button></div>
            </form>
        </div>
        <div class="tab-panel" id="tab-email">邮件设置</div>
        <div class="tab-panel" id="tab-upload">上传设置</div>
        <div class="tab-panel" id="tab-visit">访问限制</div>
      </div>
    </div>
   
</div>
</body>
</html>