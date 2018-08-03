<?php
    
    namespace Home\Controller;
    
    
    class CommentController extends CommonController
    {
    
            public function thumbs(){
                
                $id=I('id','','intval');
                $comentModel=D('Comment');
                if ($comentModel->create($_POST,1)){
                    $result=$comentModel->thumbs($id);
                    if ($result){
                        $this->ajaxReturn(['status'=>true,'msg'=>'点赞成功！']);
                    }
                }else{
                    $this->ajaxReturn(['status'=>false,'msg'=>$comentModel->getError()]);
                }
            }
    
    }
    
    