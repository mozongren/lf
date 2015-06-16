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
	<form method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>内容列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
            <input type="button" class="button button-small border-green" value="添加文章" />
            <input type="button" class="button button-small border-yellow" value="批量删除" />
            <input type="button" class="button button-small border-blue" value="回收站" />
            <form>
            <input class="input input-auto" />
            <select class="input input-auto">
                <option>&nbsp起步</option>
                <option>CSS</option>
                <option>元件</option>
                <option>模块</option>
                <option>javascript组件</option>
            </select>
            <button class="button" type="submit">查找</button>
            </form>
        </div>
        <table class="table table-hover">
            <tr><th width="45">选择</th><th width="120">分类</th><th width="*">名称</th><th width="100">时间</th><th width="100">操作</th></tr>
            <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><tr>
                  <td><input type="checkbox" name="id" value="1" /></td>
                  <td><?php echo ($article["title"]); ?></td>
                  <td><?php echo ($article["category"]["title"]); ?></td>
                  <td>2014-10-1</td>
                  <td>
                     <a class="button border-blue button-little" href="#">修改</a>
                     <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                 </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

        </table>
        <div class="panel-foot text-center">
            <?php echo ($page_list); ?>
        </div>
    </div>
    </form>
    <br />
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="http://www.pintuer.com">拼图前端框架</a>构建</p>
</div>
</body>
</html>