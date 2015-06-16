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
   
    <script type="text/javascript" src="/lf/Public/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/lf/Public/ueditor/ueditor.config.js"></script>    
    <script type="text/javascript" src="/lf/Public/ueditor/ueditor.all.min.js"></script>

     <script type="text/javascript" src="/lf/Public/laydate/laydate.js"></script>
    
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
        <div class="tab-panel">
            <form method="post" class="form-x" action="system.html">
                 <div class="form-group">
                    <div class="label"><label for="title">上级栏目</label></div>
                    <div class="field">
                        <select class="input input-select">
                            <option>起步</option>
                            <option>CSS</option>
                            <option>元件</option>
                            <option>模块</option>
                            <option>javascript组件</option>
                         </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="title">栏目标题</label></div>
                    <div class="field">
                        <input type="text" class="input input-text" id="title" name="title" size="50" placeholder="文章标题" data-validate="required:请填写文章标题" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="keywords">SEO关键词</label></div>
                    <div class="field">
                        <input type="text" class="input input-text" id="keywords" name="keywords" size="50" placeholder="站点关键词，用于搜索引擎优化" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="desc">SEO描述</label></div>
                    <div class="field">
                        <textarea d="desc" name="desc" class="input textarea-text" rows="5" cols="50" placeholder="网站的描述，用于搜索引擎优化"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="logo">栏目图片</label></div>
                    <div class="field">
                        <a class="button input-file" href="javascript:void(0);">+ 浏览文件<input size="100" type="file" name="logo" data-validate="请选择上传文件,regexp#.+.(jpg|jpeg|png|gif)$:只能上传jpg|gif|png格式文件" /></a>
                        <a>&nbsp&nbsp<img src="/lf/Public/admin/images/status_1.gif"><img src="/lf/Public/admin/images/status_0.gif"></a>
                    </div>

                </div>
               
                <div class="form-group">
                    <div class="label"><label for="keywords">发布时间</label></div>
                    <div class="field">
                        <input type="text" class="input-time input laydate-icon" id="addtime" name="addtime" size="50" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="title">栏目排序</label></div>
                    <div class="field">
                        <input type="text" class="input input-text" id="title" name="title" size="50" placeholder="文章排序默认999" data-validate="plusinteger:请输入整数数字" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="brief">栏目描述</label></div>
                    <div class="field">
                        <textarea id="brief" name="brief" class="input textarea-brief" rows="5" cols="50" placeholder="网站的描述，用于搜索引擎优化"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="container">详细内容</label></div>
                    <div class="field">
                        <textarea class="ueditor" id="container" name="container"></textarea>
                    </div>
                     <div class="clear"></div>
                </div>
             
                <div class="clear"></div>
                <div class="form-button"><button class="button bg-main" type="submit">提交</button></div>
            </form>
            </div>
  <dl>
            <dt><span>图片：</span><input type="text" id="picture" name="cover" /></dt>
            <dd><a href="javascript:void(0);" onclick="upImage();">上传图片</a></dd>
            <dd>
                <img id="preview" src="images/nopic.gif" /></dd>
        </dl>
        <dl>
            <dt><span>文件：</span><input type="text" id="file" /></dt>
            <dd><a href="javascript:void(0);" onclick="upFiles();">上传文件</a></dd>
        </dl>
         <dl>
            <dt><span>视频：</span><input type="text" id="video" /></dt>
            <dd><a href="javascript:void(0);" onclick="test();">上传文件</a></dd>
        </dl>

   <script type="text/plain" id="upload_ue"></script> 
</div>

  <script>
    $(function(){
        var url='<?php echo U('Admin/Ueditor/Index');?>';
        var ue = UE.getEditor('container',{
            allowDivTransToP: false,
            initialFrameHeight:300,
            initialFrameWidth:770,
            serverUrl :url,
            UEDITOR_HOME_URL:'/lf/Public/ueditor/',
        });

        ue.ready(function(){
            ue.execCommand('serverparam', {
                'userid': '1',
                'username': 'admin',
            });
        });

    });

    laydate.skin('molv');//日期控件佩服加载

 
    //重新实例化一个编辑器，防止在上面的editor编辑器中显示上传的图片或者文件
    var url='<?php echo U('Admin/Ueditor/Index');?>';
    var _editor = UE.getEditor('upload_ue',{
           serverUrl :url,
            UEDITOR_HOME_URL:'/lf/Public/ueditor/'
        });
    _editor.ready(function () {
        //设置编辑器不可用
        //_editor.setDisabled();
        //隐藏编辑器，因为不会用到这个编辑器实例，所以要隐藏
        _editor.hide();
        //侦听图片上传
        _editor.addListener('beforeInsertImage', function (t, arg) {
            //将地址赋值给相应的input
            $("#picture").attr("value", arg[0].src);
            //图片预览
            $("#preview").attr("src", arg[0].src);

            for(var i=0;i<arg.length;i++){
                //arg title,arc,art
                alert(arg[i].src);

            }
        })
        //侦听文件上传
        _editor.addListener('afterUpfile', function (t, arg) {
            $("#file").attr("value", _editor.options.filePath + arg[0].url);
        })

    });
    //弹出图片上传的对话框
    function upImage() {
        var myImage = _editor.getDialog("insertimage");
        myImage.open();
       //alert('d');
    }
    //弹出文件上传的对话框
    function upFiles() {
        var myFiles = _editor.getDialog("attachment");
        myFiles.open();
    }
     //弹出文件上传的对话框
   
</script>
</body>
</html>