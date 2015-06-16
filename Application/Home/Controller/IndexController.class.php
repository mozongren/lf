<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		
       $ArticleCategory = M("ArticleCategory");
	   $condition['delete'] = '0';//没有删除的分离
	   $condition['status'] = '1';//正常使用的
	   $list = $ArticleCategory->cache(true)->where($condition)->order('pid asc,sort asc')->select();
	   
	   $arr_cate = categroy_list($list,1);
	   $this->assign('arr_cate',$arr_cate);
	   
	   $Article = M("Article");
	   $a_c['delete'] = '0';//没有删除的文章
	   $a_c['pid'] = '5';//没有删除的文章
	   $article_recommend = $Article->where($a_c)->order('recommend desc,add_time desc')->limit(4)->select();
	   
	   $this->assign('article_recommend',$article_recommend);  
	   
	   $a_l['delete'] = '0';//没有删除的文章
	   $a_l['recommend'] = array('gt',0);
	   $a_l['pid'] = array('not in',array('5'));
	   $article_list = $Article->where($a_l)->order('recommend desc,add_time desc')->limit(4)->select();
	   $this->assign('article_list',$article_list);  

      // $this->display();	
	  C('URL_ROUTE_RULES',array( //定义路由规则 
	     //ABOUT
        'about/:page$'    => 'about/index', //完全匹配
		'about/test/:pid\d/:p\d$'    => 'about/test',//完全匹配
		'about/:page'    => 'about/index',//非完全匹配 需要调整顺序
		
		
		//ARITCLE
		'article/:id\d/:p\d'    => 'article/article_list', //
		'article/:id'    => 'article/article_des', //
		'test/:id' => 'article/article_des', 
		
    ));
	  dump(C('URL_ROUTE_RULES'));
	  
	}
}