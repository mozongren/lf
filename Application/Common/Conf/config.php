<?php
return array(
	//'配置项'=>'配置值'
    'MODULE_ALLOW_LIST' => array('Home','Admin'), //默认模块
	'DEFAULT_MODULE' =>'Home', //默认模块
	'URL_CASE_INSENSITIVE' =>true, //不区分大小写
	'URL_HTML_SUFFIX'=>'.html', //伪静态
	'URL_MODEL' => 2,  //生成URL时候自动去掉index.php
   
	// 显示页面Trace信息
	'SHOW_PAGE_TRACE' =>true, 	
	
	'DB_TYPE'=>'mysql',   //设置数据库类型
	'DB_HOST'=>'127.0.0.1',//设置主机
	'DB_NAME'=>'mycms',//设置数据库名
	'DB_USER'=>'root',    //设置用户名
	'DB_PWD'=>'',        //设置密码
	'DB_PORT'=>'3306',   //设置端口号
	'DB_PREFIX'=>'cms_',  //设置表前缀
	//auth权限
	'AUTH_CONFIG' => array(    
  	       'AUTH_ON' => true, //认证开关
		   'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
		   'AUTH_GROUP' => 'cms_auth_group', //用户组数据表名
		   'AUTH_GROUP_ACCESS' => 'cms_auth_group_access', //用户组明细表 
		   'AUTH_RULE' => 'cms_auth_rule', //权限规则表 
		   'AUTH_USER' => 'cms_user'//用户信息表 
		   ),
		   
		   
    'TMPL_PARSE_STRING'  =>array(
        '__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
	)
);