<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function index($page='about'){
		//echo $page;

	   
        $this->display();	
	}
	
	public function test($pid=0,$p=1){
		echo $pid;
		echo "<br/>";
		echo $p;
    //  $this->display();	
	}
}