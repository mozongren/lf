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
	<script src="/lf/Public/admin/js/common.js"></script>
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
        <table id="list-table" class="table table-hover table-condensed">
        <tr class="">	
        	    
		    <th class="text-center" width="385">分类名称</th>
				<th width="">状态</th>
				<th width="">添加时间</th>
				<th width="">修改时间</th>
				<th width="">排序</th>
				<th width="">操作</th>
			  </tr>
			  <?php if(is_array($arr_cate)): foreach($arr_cate as $key=>$cate): ?><tr class="<?php echo ($cate["level"]); ?>" id="<?php echo ($cate["level"]); ?>_<?php echo ($cate["id"]); ?>">
      
				<td align="left" >
				  <img src="/lf/Public/admin/images/menu_minus.gif" id="icon_<?php echo ($cate["level"]); ?>_<?php echo ($cate["id"]); ?>" width="9" height="9" border="0" style="margin-left:<?php echo ($cate["level"]); ?>em;vertical-align:middle;" onclick="rowClicked(this)" />
				  <span><a href=""><?php echo ($cate["title"]); ?></a></span>
				</td>
				<td ><img src="/lf/Public/admin/images/status_<?php echo ($cate["status"]); ?>.gif" /></td>
				<td ><?php echo ($cate["add_time"]); ?></td>
				<td ><?php echo (date("Y-m-d",$cate["update_time"])); ?></td>
				<td ><?php echo ($cate["sort"]); ?></td>
				<td >
				  <a class="button border-green button-little" href="<?php echo U('content/addClassify');?>">添加下级</a>
					<a class="button border-blue button-little" href="#">修改</a>
					<a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
				</td>
			  </tr><?php endforeach; endif; ?>
			
           </table>
       
    </div>
    </form>
    <br />
</div>
<script type="text/javascript">
<!--
var imgPlus = new Image();
imgPlus.src = "/lf/Public/admin/images/menu_plus.gif";

/**
 * 折叠分类列表
 */
function rowClicked(obj){
  // 当前图像
  img = obj;
  // 取得上二级tr>td>img对象
  obj = obj.parentNode.parentNode;
  // 整个分类列表表格
  var tbl = document.getElementById("list-table");
  // 当前分类级别
  var lvl = parseInt(obj.className);
  // 是否找到元素
  var fnd = false;
  var sub_display = img.src.indexOf('menu_minus.gif') > 0 ? 'none' : (Browser.isIE) ? 'block' : 'table-row' ;
  // 遍历所有的分类
  for (i = 0; i < tbl.rows.length; i++) {
      var row = tbl.rows[i];
      if (row == obj) {
          // 找到当前行
          fnd = true;
          //document.getElementById('result').innerHTML += 'Find row at ' + i +"<br/>";
      } else {
          if (fnd == true) {
              var cur = parseInt(row.className);
              var icon = 'icon_' + row.id;
              if (cur > lvl) {
                  row.style.display = sub_display;
                  if (sub_display != 'none') {
                      var iconimg = document.getElementById(icon);
                      iconimg.src = iconimg.src.replace('plus.gif', 'minus.gif');
                  }
              } else {
                  fnd = false;
                  break;
              }
          }
      }
  }

  for (i = 0; i < obj.cells[0].childNodes.length; i++) {
      var imgObj = obj.cells[0].childNodes[i];
      if (imgObj.tagName == "IMG" && imgObj.src != '/lf/Public/admin/images/menu_arrow.gif') {
          imgObj.src = (imgObj.src == imgPlus.src) ? '/lf/Public/admin/images/menu_minus.gif' : imgPlus.src;
      }
  }
}
//-->
</script> 
</body>
</html>