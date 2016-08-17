<?php
namespace Home\Controller;
use Think\Controller;

	// QQ登录的方法
class QloginController extends Controller {
   
			//QQ登录的方法
			 public function qqlogin(){
               	 require('./Public/Static/qq_api/qqConnectAPI.php');
			 	 $qqlink=new \Oauth();
			 	 $qqlink->qq_login();
                 	//echo '登录成功';
			 }


			public function login(){

				 require './Public/Static/qq_api/qqConnectAPI.php'; 
				 $qq_link=new \Oauth(); 
				
			     $access_token=$qq_link->qq_callback();
			     $openid=$qq_link->get_openid();
				 $qc=new \QC($access_token,$openid);
				 $qquserinfo=$qc->get_user_info();
				 cookie('access_token',$access_token,array('expire'=>3600));
				 cookie('openid',$openid,array('expire'=>+3600));
				 cookie('username',$qquserinfo['nickname'],array('expire'=>3600));
				 cookie('userid',$openid,array('expire'=>3600));
				 cookie('userphoto',$qquserinfo['figureurl_qq_1'],array('expire'=>3600));
                 
				 $userinfo=array(
				 	    'username'     =>$qquserinfo['nickname'],//QQ昵称
				 	    'user_photo'   =>$qquserinfo['figureurl_qq_2'],//用户头像
				 		'access_token' =>$access_token,
				 		'openid'	   =>$openid,	
				 		'logintime'    =>time(),
				 		'creattime'    =>time(),

				 	);
				 $user= M('vipuser')->where(array('openid'=>$openid))->find();
				 if(!$user){
				 	M('vipuser')->add($userinfo);
				 }
				 // rtrim(cookie('lbs_cur_redircturl'),'.html');//从右边去除某个元素
				 if($_COOKIE['lbsnet_cur_redircturl']!=$_SERVER['SERVER_NAME']){
                    $this->redirect(rtrim($_COOKIE['lbsnet_cur_redircturl'],C('URL_HTML_SUFFIX')));
				 }else{
				    redirect('http://'.$_SERVER['SERVER_NAME']);
				 }
				 // dump($access_token); 
				 // dump($openid);
				 // dump( $qquserinfo);
			    	   
			} 







}
?>    
