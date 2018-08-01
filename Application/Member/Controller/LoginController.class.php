<?php

namespace Member\Controller;

use Common\ORG\Util\AliSmsSend;
use Member\Model\VipUserModel;
use Think\Controller;

class LoginController extends Controller
{


    //会员登录
    public function login()
    {

        if (IS_AJAX) {

            $mobile = I('post.mobile', '','trim,strip_tags');
            $pwd = I('post.pwd', '','trim,strip_tags');
            $res = M('vipuser')->where(['mobile' => $mobile])->find();
            if (!$res) {//用户查找不到
                $error = array('status' => false);
                $this->ajaxReturn($error);
            } else {//用户名能够找到

                if ($res['password'] != $pwd) { //用户存在密码不相等
                    $error = array('status' => true, 'pwderr' => 'error');
                    $this->ajaxReturn($error);
                } else {//用户存在 密码相等
                    $error = array('status' => true, 'pwderr' => 'true');
                    cookie('username', $res['username'], array('expire' => 3600));
                    cookie('userid', $res['id'], array('expire' => 3600));
                    $this->ajaxReturn($error);
                }

            }

        }

    }

    //前台会员退出
    public function loginout()
    {

        if (cookie(null) == null) {
            $data = array('status' => true);
            $this->ajaxReturn($data);

        };
    }


    //前台注册会员
    public function register()
    {
        $data=[
            'mobile'=> I('post.mobile', '', 'trim,strip_tags'),
            'mobile_verify'=> I('post.mobile_verify', '', 'trim,strip_tags'),
            'password'=> I('post.password', '', 'trim,strip_tags'),
        ];
        $vipUserModel= D('VipUser');
        if ($vipUserModel->create($_POST,1)){
            $result=$vipUserModel->add($data);
            if ($result){
                $this->ajaxReturn(['status'=>true,'msg'=>'注册成功！']);
            }
        }else{
            $this->ajaxReturn(['status'=>false,'msg'=>$vipUserModel->getError()]);
        }
    }


    //阿里云短信验证码
    public function aliSMS()
    {
        if (IS_AJAX) {
            $Send    = new AliSmsSend();
            $mobile=I('post.mobile', '', 'trim,strip_tags');
            $generateCode=generateCode(6);
            $res_check=checkMobile($mobile);
            if (!$res_check) $this->ajaxReturn(['status'=>false,'msg'=>'手机格式不正确！']);
            $result = $Send->sms([
                'param' => ['code' => $generateCode, 'name' => 'Mr.汤苏敏'],
                'mobile' => $mobile,
                'template' => 'SMS_38400133',
            ]);
            if ($result !== true) {
                $this->ajaxReturn($result);return false;
            }else{
                S('sms_'.$mobile,$generateCode,array('type'=>'file','expire'=>C('Ali.expireTime','',60)));
                $this->ajaxReturn(['status'=>true,'msg'=>'短信下发成功!']);
            }
        }

    }


}
