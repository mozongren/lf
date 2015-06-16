<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <title>冷枫的个人博客-青春梦一场</title>
    <meta name="keywords" content="莫宗仁,冷枫,mozongren,lengfeng,枫,博客,个人博客" />
    <meta name="description" content="冷枫（莫宗仁）的个人博客，一个自己学习成长的记录，一个实现自己与人学习交流的平台，把我会我能与大家一同分享" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/lf/Public/home/css/pintuer.css">
    <link rel="stylesheet" href="/lf/Public/home/css/style.css">
    <script src="/lf/Public/home/js/jquery-1.11.1.js"></script>
    <script src="/lf/Public/home/js/pintuer.js"></script>
    <script src="/lf/Public/home/js/respond.js"></script>
   
  </head>
  <body>
  
    <!--header-->
    	<div class="layout doc-header">
		<div class="layout doc-toper">
				<div class="container">
					<div class="line">
						<div class="x8">青春梦一场</div>
						<div class="x4 text-right">
						<span class="hidden-l"><a target="_blank" href="http://xiangying.pintuer.com/">响应式测试</a> |
						</span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=306821531&site=Pintuer&menu=yes">联系我</a></div>
					</div>
				</div>
		</div>

		<div class="container doc-naver">
				<div class="line">
					<div class="xs3 xm3 xb3 doc-logo">
						<button class="button icon-navicon margin-top float-right" data-target="#doc-header-pintuer"></button>
						<a href="/"><img src="/lf/Public/home/images/logo.png" width="180" height="40" alt="拼图" class="fadein-left ring-hover" /></a>
					</div>
					<div class="xl12 xs9 xm9 xb9 doc-nav">
						<ul class="nav nav-inline nav-navicon padding-small-top" id="doc-header-pintuer">
							<li><a href="<?php echo U('/');?>">首页</a></li>
							<li ><a href="<?php echo U('/about');?>">关于我</a></li>
							<li ><a href="<?php echo U('/article');?>">蜀道艰辛</a></li>
							<li ><a href="<?php echo U('/article');?>">青春有梦</a></li>
							<li ><a href="<?php echo U('/article');?>">心情碎语</a></li>
							<li ><a href="<?php echo U('/message');?>">留言板</a></li>
						</ul>
					</div>
				</div>
		</div>
			
		<div class="bg-main doc-intro">
			<div class="container">
			   <h1 class="fadein-top">青春有梦</h1>
			   <p class="fadein-right">如果青春只是一场梦，那么我也希望能在梦中留下有我足迹...</p>
			   <p class="fadein-left">所以，争我想要的，拼我没有的...  </p>
			   <p class="red">ps:网站改版，正在加紧重做中... 谢谢你的关注</p>
			</div>
		</div>
    </div>
	<!--end header -->
	
	 <!--案例推荐-->
	 <div class="container-layout bg padding-top">
	 <div class="container">
	      <h1>近期作品</h1>		
		  
		  <?php if(is_array($article_recommend)): foreach($article_recommend as $key=>$article): ?><div class="xl6 xs3 xm3 xb3 padding case">
		    <a href="<?php echo U('/article',array('id'=>$article['id']));?>">
		     <img class="img-responsive"  src="/lf/Uploads/images/self/<?php echo ($article["img"]); ?>" title="<?php echo ($article["title"]); ?>" alt="title">
			 <p class="text-center hidden"><?php echo ($article["title"]); echo ($article["id"]); ?><p>
			</a>
		 </div><?php endforeach; endif; ?>
       </div>
	 </div>
	 <!--文章推荐-->
	 <div class="container">
	  <div class="line margin">
	  <!--left-->
	     <div class="xb8 xm8 xs8 xl12">
		      <div class="line">
                  <h1>文章推荐</h1>
			  </div>
		     <div class="line">
				 <ul class="list-media list-underline right_border">
				 <?php if(is_array($article_list)): foreach($article_list as $key=>$article): ?><li class="margin">
						<div class="media media-x">
						 <h2><a href="#"><?php echo ($article["title"]); ?><a></h2>
						  <a class="xb4 xm4 xs4 xl12" href="#">
							<img src="/lf/Uploads/images/<?php echo ($article["img"]); ?>" class="img-responsive" alt="...">
						  </a>
						<div class="media-body xb8 xs8 xm8 xl12">
						 <p class="height-small text-big padding"><?php echo ($article["brief"]); ?>
						 </p>
						 <div class="text-right padding">
						     <dt class="text-right"><a href="<?php echo U('/article',array('id'=>$article['id']));?>">[去看看]</a></dt>
					     </div>
						</div>
						</div>
					  </li><?php endforeach; endif; ?>	  
					</ul>
		  </div>
	 <!-- content -->
		 </div>
		   <!--right-->
		 <div class="xb4 xm4 xs4 xl12 hidden-l">
		     <div class="panel margin-large">
			  <div class="panel-head">栏目导航</div>
			  <div class="panel-body">
	              <ul class="article-classy line-big">
	              	 <li class="xb5  xm5 xs5 margin-left fadein-top wobble-hover"><a href="#">关于我</a></li>
	              	 <li class="xb5  xm5 xs5 margin-left fadein-top wobble-hover"><a>学习成长</a></li>
	              	 <li class="xb5  xm5 xs5 margin-left fadein-bottom wobble-hover"><a>青春有梦</a></li>
	              	 <li class="xb5  xm5 xs5 margin-left fadein-bottom wobble-hover"><a>留言板</a></li>
	              </ul>
			 </div>
			</div>
	
		   <div class="panel margin-large">
			  <div class="panel-head">最新文章</div>
			  <div class="panel-body">
			     <ol class="article_list">
				  <li>这是我的文章</li>
				  <li>这是我的文章</li>
				  <li>这是我的文章</li>
				  <li>这是我的文章</li>
				  <li>这是我的文章</li>
				</ol>
			  </div>
			</div>
			 <div class="panel margin-large">
			  <div class="panel-head">点击排行</div>
			  <div class="panel-body">
			     <ol>
				  <li>这是我的文章</li>
				  <li>这是我的文章</li>
				  <li>这是我的文章</li>
				  <li>这是我的文章</li>
				  <li>这是我的文章</li>
				</ol>
			  </div>
			</div>
			
			 <div class="panel margin-large">
			  <div class="panel-head">分享出去</div>
			  <div class="panel-body">
			    
		      </div>
		    
			
			
	        </div>
	</div>
	  </div>
	  </div>
	  <!-- footer start-->
	 <div class="container-layout">

	  <div class="border-top padding-top">
			<div class="text-center">
			  <ul class="nav nav-inline">
				<li class="active"><a href="#">网站首页</a></li>
				<li><a href="#">关于我</a></li>
				<li><a href="#">蜀道艰辛</a></li>
				<li><a href="#">青春有梦</a></li>
				<li><a href="#">心情碎语</a></li>
				<li><a href="#">留言板</a></li>
			  </ul>
			</div>
			<div class="text-center height-big">
				版权所有 © Pintuer.com All Rights Reserved，桂ICP备：380959609</div>
		  </div>
		
		</div>
		<script>var _hmt = _hmt || [];(function() {var hm = document.createElement("script"); hm.src = "//hm.baidu.com/hm.js?b9bb19777698670921466d94da577098";	var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm, s);})();</script>
		<script type="text/javascript" src="http://tajs.qq.com/stats?sId=44118757" charset="UTF-8"></script>
	  <!-- footer end -->
 <script> 
$(document).ready(function(){
   $(".case a").mouseover(function(){

   	   $(this).children("p").removeClass('hidden');
   	   $(this).children("p").removeClass('fadeout-top');
       $(this).children("p").addClass('fadein-bottom');
    
   });

   $(".case a").mouseout(function(){

       $(this).children("p").removeClass('fadein-bottom');
       // $(this).children("p").addClass('hidden');
       $(this).children("p").addClass('fadeout-top');
    
   });

   
});
</script> 

  </body>
</html>