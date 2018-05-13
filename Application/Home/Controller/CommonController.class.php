<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class CommonController extends Controller{
	
	protected $db;

	function _initialize()
	{
		 
        if(method_exists($this,'__auto')){
			$this->__auto();
		}


	}








}
?>