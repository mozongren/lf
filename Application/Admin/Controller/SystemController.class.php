<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends CommonAction {
	
	public function index(){
	  $this->assign('this_menu','system');//当前选中菜单

	  $this->assign('test',$this->menu());
	 //  var_dump($this->menu());
	  $this->display();	
	}
	
	public function system(){
	   $this->display();	
	}
	
    public function article_classify(){
	  
	   $ArticleCategory = M("ArticleCategory");
	   $condition['delete'] = '0';//没有删除的分离
	   $condition['status'] = '1';//正常使用的
	   $list = $ArticleCategory->where($condition)->order('pid asc,sort asc')->select();
	   
	   $arr_cate = categroy_list($list,0);
	   //var_dump($arr_cate);
	   $this->assign('arr_cate',$arr_cate);
	   $this->assign('test',menu());
	   var_dump(menu());
       //$this->display();
	}
	
}