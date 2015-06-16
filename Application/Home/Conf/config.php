<?php
return array(
	//'配置项'=>'配置值'
	'URL_PARAMS_BIND'       =>  true, // URL变量绑定到操作方法作为参数
    'URL_PATHINFO_DEPR'=>'-', 	// 更改PATHINFO参数分隔符
   
	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则 
	     //ABOUT
        'about/:page$'    => 'about/index', //完全匹配
		'about/test/:pid\d/:p\d$'    => 'about/test',//完全匹配
		'about/:page'    => 'about/index',//非完全匹配 需要调整顺序
		
		
		//ARITCLE
		'article/:id\d/:p\d'    => 'article/article_list', //
		'article/:id'    => 'article/article_des', //
		//'test/:id' => 'article/article_des', 
		
    ),
);