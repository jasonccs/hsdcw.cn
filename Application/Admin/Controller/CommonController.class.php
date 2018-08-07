<?php
namespace Admin\Controller;
use  Think\Controller;

/**
*
*/

class CommonController extends Controller
{




	//自动运行的方法
	public function _initialize()
	{

		if(!isset($_SESSION['username'])||!isset($_SESSION['admin_id'])){

		    $this->error('你还有登录，请先登录！',U('/Admin/Login/index'),'2');
		}
	}

	//删除文件的方法
	public function delImg(){
			$imgpath=I('delimgpath',null);
			if(IS_AJAX){
				if(unlink('./'.$imgpath)){
					 $data=array('status'=>true);
				     $this->ajaxReturn($data);
				}
			}else{
					 $data=array('status'=>flase);
					 $this->ajaxReturn($data);
			}
	}

}


