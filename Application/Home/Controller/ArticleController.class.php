<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index($id=0){
     $this->display();	
	}
	
	public function article_des($id=0){
		echo $id;
		$this->display();	
	}
}