<?php

    namespace Home\Controller;


    class CommentController extends CommonController
    {


        //评论文章
        public function comment ()
        {

            if ( IS_AJAX ) {
                $comment = [ 'article_id' => I('id', '', 'intval'),
                    'user_id' => session('user_info.user_id'),
                    'username' => I('username', ''),
                    'content' => I('content', '', 'strip_tags,trim')
                ];
                $commont_db = M('comment');
                $map['created_at'] = [ 'between', [ date("Y-m-d"), date("Y-m-d", strtotime("+1 day")) ] ];
                $count = $commont_db->where($map)->where([ 'user_id' => $comment['user_id'] ])->where([ 'status' => 1 ])->count();
                if ( $count >= 3 ) {
                    $comment['status'] = false;
                    $comment['msg'] = '每天最多评论三次！';
                    $this->ajaxReturn($comment);
                }
                $result = $commont_db->add($comment);
                $user_info = M('vipuser')->field('head_portrait')->find($comment['user_id']);
                if ( $result ) {
                    $comment['status'] = true;
                    $comment['head_portrait'] = empty($user_info['head_portrait']) ? '' : $user_info['head_portrait'];
                    $this->ajaxReturn($comment);
                }

            }
        }

        //评论点赞
        public function thumbs ()
        {
            if ( IS_AJAX ) {
                $id = I('id', '', 'intval');
                $comentModel = D('Comment');
                if ( $comentModel->create($_POST, 1) ) {
                    $result = $comentModel->thumbs($id);
                    if ( $result ) {
                        $this->ajaxReturn([ 'status' => true, 'msg' => '点赞成功！' ]);
                    }
                } else {
                    $this->ajaxReturn([ 'status' => false, 'msg' => $comentModel->getError() ]);
                }
            }
        }

    }

