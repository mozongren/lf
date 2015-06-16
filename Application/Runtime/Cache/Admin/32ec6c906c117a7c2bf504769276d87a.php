<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>拼图后台管理-管理员登录</title>
    <link rel="stylesheet" href="/lf/Public/admin/css/pintuer.css">
    <link rel="stylesheet" href="/lf/Public/admin/css/admin.css">
    <script src="/lf/Public/admin/js/jquery.js"></script>
    <script src="/lf/Public/admin/js/pintuer.js"></script>
    <script src="/lf/Public/admin/js/respond.js"></script>
    <script src="/lf/Public/layer/layer.js"></script>
    <script src="/lf/Public/admin/js/admin.js"></script>
    <link type="image/x-icon" href="http://www.pintuer.com/favicon.ico" rel="shortcut icon" />
    <link href="http://www.pintuer.com/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="container">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
            <br /><br />
            <div class="media media-y">
                <a href="http://www.pintuer.com" target="_blank"><img src="/lf/Public/admin/images/logo.png" class="radius" alt="后台管理系统" /></a>
            </div>
            <br /><br />
            <form id="loginFrom" action="<?php echo U('admin/login/login');?>" method="post" onsubmit="return check()">
            <div class="panel">
                <div class="panel-head"><strong>登录拼图后台管理系统</strong></div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input" name="username" placeholder="登录账号" data-validate="required:请填写账号,length#>=5:账号长度不符合要求" />
                            <span class="icon icon-user"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input" name="password" placeholder="登录密码" data-validate="required:请填写密码,length#>=5:密码长度不符合要求" />
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input" name="passcode" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                            <img src="/lf/Public/admin/images/passcode.jpg" width="80" height="32" class="passcode" />
                        </div>
                    </div>
                </div>
                <div class="panel-foot text-center"><button class="button button-block bg-main text-big">立即登录后台</button></div>
            </div>
            </form>
            <div class="text-right text-small text-gray padding-top">基于<a class="text-gray" target="_blank" href="http://www.pintuer.com">拼图前端框架</a>构建</div>
        </div>
    </div>
</div>
 <script type="text/javascript">
  function check(){
   // layer.alert('内容')
    var url = "<?php echo U('admin/login/login');?>";
    doLogin(url,'loginFrom');
    return false;
  }
 </script>
</body>
</html>