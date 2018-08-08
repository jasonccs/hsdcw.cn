<?php

    namespace Home\Controller;


    class CommentController extends CommonController
    {


        //评论文章
        public function comment ()
        {
            parent::_initialize(true);
            if ( IS_POST ) {
                $comment = [ 'article_id' => I('id', '', 'intval'),
                    'user_id' => session('user_info.user_id'),
                    'username' => I('username', ''),
                    'content' => I('content', '', 'strip_tags,trim')
                ];
                $comment_db = M('comment');
                $map['created_at'] = [ 'between', [ date("Y-m-d"), date("Y-m-d", strtotime("+1 day")) ] ];
                $count = $comment_db->where($map)->where([ 'user_id' => $comment['user_id'] ])->where([ 'status' => 1 ])->count();
                if ( $count >= 3 ) {
                    $comment['status'] = false;
                    $comment['msg'] = '每天最多评论三次！';
                    $this->ajaxReturn($comment);
                }
                $result = $comment_db->add($comment);
                $user_info = M('vipuser')->field('head_portrait')->find($comment['user_id']);
                if ( $result ) {
                    $comment['status'] = true;
                    $comment['head_portrait'] = empty($user_info['head_portrait']) ? '' : $user_info['head_portrait'];
                    $this->ajaxReturn($comment);
                }

            }else{
                $this->ajaxReturn([ 'status' => false, 'msg' => '非法请求！' ]);
            }
        }

        //评论点赞
        public function thumbs ()
        {
            parent::_initialize(true);
            if ( IS_POST ) {
                $id = I('id', '', 'intval');
                $commentModel = D('Comment');
                if ( $commentModel->create($_POST, 1) ) {
                    $result = $commentModel->thumbs($id);
                    if ( $result ) {
                        $this->ajaxReturn([ 'status' => true, 'msg' => '点赞成功！' ]);
                    }
                } else {
                    $this->ajaxReturn([ 'status' => false, 'msg' => $commentModel->getError() ]);
                }
            }else{
                $this->ajaxReturn([ 'status' => false, 'msg' => '非法请求！' ]);
            }
        }

    }

