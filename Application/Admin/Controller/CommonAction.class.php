<?php
	namespace Admin\Controller;
	use Think\Controller;
	class CommonAction extends Controller{
		Public function _initialize(){
   		// 初始化的时候检查用户权限
   			if(!isset($_SESSION['username']) || $_SESSION['username']==''){
				$this->redirect('/admin/login');
			}
		}
		
		public function menu(){
		  
		 // return $page;
		}
		
	}
?>
