<?php

namespace Admin\Controller;
use Think\Controller;

/**
* 
*/
class TestController extends Controller
{
	
	public function index(){

		  $db=M('user')->limit(1,5)->select();
		  dump($db);
}

}

?>