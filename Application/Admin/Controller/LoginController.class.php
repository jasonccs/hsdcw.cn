<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

   /**
    * 显示登录页
    */

    public function index(){

       $this->display('login');
    }

   /**
    * [login 验证登录的方法]
    * @return [type] [description]
    */
    public function login(){

    	  if(IS_POST){
        	$db=M('user');
	      	$username =I('username',null);
	      	$password =I('password',null);
	      	$code =I('code',null);
	        $username_info=$db->where(array('username'=>$username))->find();
	        if(is_null($username_info)){
	        	$this->error('用户名不存在！');
	        }elseif (!$username_info['username'] || $username_info['password'] != MD5($password) ) {
	        	$this->error('密码错误');
	        }elseif(!$this->check_verify($code,$id='')){
	        	$this->error('验证码不正确');
	        }else{
                session('admin_id',$username_info['id']);
                session('username',$username_info['username']);
	        	$this->success('登录成功',U('/Admin/Index/index'));

	        }

        }



    }
   /**
    *
    * 退出登录
    */
   public function loginout(){

     session_unset();
     session_destroy();
     $this->success('退出成功！',U('Admin/Login/index'));


   }

   /**
    * [verify 生成验证码]
    * @return [string] [生成验证码]
    */
	public function verify(){
		    ob_end_clean();//清除缓存
	        //C('verify'); //读取Common/conf/config.php验证码的配置
	    	$verify=new \Think\Verify(C('verify'));
	        $verify->entry();
	}


    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }





}