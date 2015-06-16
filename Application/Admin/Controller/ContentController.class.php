<?php
namespace Admin\Controller;
use Think\Controller;
class ContentController extends CommonAction {
	
	public function index(){
       $page = I('get.p',1);
       $key = I('get.key','1','htmlspecialchars');
       $cate = I('get.cate',0,'htmlspecialchars');

	   $this->assign('this_menu','content');//当前选中菜单
	   $this->assign('this_menu_c','article_list');//当前选中菜单

	   $Article = D("Article");
	  
       $condition['delete'] = '0';//没有删除的文章;
       $condition['title'] =  array('like','%'.$key.'%');//没有删除的文章;
      
	   $list  = $Article->relation(true)->where($condition)->page($page.',2')->Select();
       
       $pram = array('key' => $key,'cate'=>$cate);

       $count = $Article->relation(true)->where($condition)->count();
       $page       = new \Think\Page($count,2,$pram);// 实例化分页类 传入总记录数和每页显示的记录数
	   $page->setConfig('header','条');
	   $page->setConfig('prev','上一页');
	   $page->setConfig('next','下一页');
	   $page->setConfig('first','首页');
	   $page->setConfig('last','末页');
		
	   $page->totalRows = $count;
	   $show = $page->show();// 分页显示输出

	   $this->assign('page_list',$show);// 赋值分页输出

       $this->assign('articles',$list);//当前选中菜单

       
	   $this->display();	
	}
	
	public function system(){
	   $this->display();	
	}
	
    public function add_content(){

       $this->assign('this_menu','content');//当前选中菜单
	   $this->assign('this_menu_c','article_add');//当前选中菜单

	   $this->display('article_add');	
    }


    public function addClassify(){

       $this->assign('this_menu','content');//当前选中菜单
       $this->assign('this_menu_c','article_classify');//当前选中菜单

	   $this->display('article_classify_add');	
    }
    public function article_classify(){

	   $this->assign('this_menu','content');//当前选中菜单
       $this->assign('this_menu_c','article_classify');//当前选中菜单

	   $ArticleCategory = M("ArticleCategory");
	   $condition['delete'] = '0';//没有删除的分离
	   $condition['status'] = '1';//正常使用的
	   $list = $ArticleCategory->where($condition)->order('pid asc,sort asc')->select();
	   
	   $arr_cate = categroy_list($list,0);
	   //var_dump($arr_cate);
	   $this->assign('arr_cate',$arr_cate);
	   
       $this->display();
	}
	
}