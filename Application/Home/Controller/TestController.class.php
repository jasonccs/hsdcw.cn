<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){

       
            $User = M('news'); // 实例化User对象
            $count      = $User->count();// 查询满足要求的总记录数
            $Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show       = $Page->show();// 分页显示输出
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $User->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('all',$list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
        
            $this->demo();
            $code=$this->check_verify(I('code'),$id='');
            if($code){
                echo "正确";
                // $this->success('验证成功！');
            }else{
                echo "错误";
                // $this->error('验证输入错误！');
            }

            $this->display();
      
    }



    public function verify(){
  

    	$verify=new \Think\Verify(C('verify'));
        $verify->entry();
        // $code=I('code');
        // return $verify->check($code, $id);
        // setcookie('code',)

    }


    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }


   public function show2(){

   	   echo '测试方法！';
   }

    public function getData(){


    	$id = array('id' =>I('id'),'name'=>'ajak',  );
    	$this->ajaxReturn($id);
    	//dump($id);
    }


   public function demo(){

        $user=D('user');
      //  $where['uid'] = '3';
      //  $data=$user->field('uid,uname')->where($where)->find();
      //  $data=$user->where($where)->getField('uid,uname');
         $data=$user->scope('normal')->find(); 
        // dump($data);
         $this->assign('data',$data);
   }



}

?>