<?php
namespace Member\Controller;
use Think\Controller;
class LoginController extends Controller {
   


            //会员登录
        public function login(){

  			    if(IS_AJAX){

				    	$user=I('username',null);
		                $pwd =I('pwd',null);
				    	$res = M('vipuser')->where(array('username'=>$user))->find();
					    	if(!$res){//用户查找不到
					    		$error=array('status'=>false);
					    		$this->ajaxReturn($error);
					    	}else{//用户名能够找到
					    		
					    		if($res['password'] != $pwd){ //用户存在密码不相等
					    			$error=array('status'=>true,'pwderr'=>'error');
					    			$this->ajaxReturn($error);
					    		}else{//用户存在 密码相等
					    		 	$error=array('status'=>true,'pwderr'=>'true'); 
					    		 	cookie('username',$user,array('expire'=>3600));
					    		 	cookie('userid',$res['id'],array('expire'=>3600));
						    	 	$this->ajaxReturn($error);
					    		 }
					    			
					    	}
		             
				    }

			}
      
       //前台会员退出
	   public function loginout(){
     
          if(cookie(null)==null){
                 $data=array('status'=>true);
                 $this->ajaxReturn($data);

          };
	   }		


}
?>