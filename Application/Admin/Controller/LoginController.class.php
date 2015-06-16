<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){

        $this->display();
	}
	public function login(){
			$username=$_POST['username'];
			$password=$_POST['password'];
			/*
			 * 验证码判断
			$code=$_POST['code'];
			if(md5($code)!=$_SESSION['code']){
				$this->error('验证码不正确');
			}
			*/
			$user=M('User');
			$where['user_name']=$username;
			$where['password']=$password;
			$arr=$user->field('uid')->where($where)->find();
             
            $mes =  array();
			if($arr){
				$_SESSION['username']=$username;
				$_SESSION['id']=$arr['uid'];
			//	$this->success('用户登录成功',U('main/index'));
                 $mes['status'] = ture;
                 $mes['mes'] = '登录成功';
                 $mes['url'] = U('main/index');
                 $this->ajaxReturn($mes,'JSON');
			}else{
				 //$this->error('该用户不存在');
				 $mes['status'] = false;
                 $mes['mes'] = '账号或者密码错误';
                 $mes['url'] = '';
                 $this->ajaxReturn($mes,'JSON');
			}
			
	}
	//退出
	public function logout(){
		$_SESSION=array();
			if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-1,'/');
			}
		session_destroy();
		$this->redirect('/admin/login');
	}
}