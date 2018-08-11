<?php

    namespace Home\Controller;

    use Think\Controller;
    use Common\Controller\CommonController;
    use Think\HdPage;
    class NewsController extends CommonController
    {



        public function _initialize()
        {
////            $current_url = MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME . '/';
            parent::_initialize(false);
            $current_url = __ACTION__. '/';
            $this->assign('current_url', $current_url); //获取当前的路由
        }

        //黄石新闻
        public function index()
        {
            $db = M('news');
            $where['cateid'] = 2;
            $where['display'] = 0;
            $where['type'] = ['in', [2, 3]];
            $page = new HdPage($db->where($where)->count(), 6);
            $hsxw = $db->limit($page->limit())->where($where)->order(['time' => 'desc'])->select();
            foreach ($hsxw as $key => $value) {
                $hsxw[$key]['commentnum'] = $this->commenttotal($value['id']); //对应文章的评论数量
            }
            $this->assign('hsxw', $hsxw);
            $this->assign('page', $page->show(2));

            $newtop = $db->alias('a')->where("a.cateid=2 and a.display=0 and a.type=1")->order(['a.time' => 'desc'])->find();
            $this->assign('newtop', $newtop); //新闻顶级带图片的分类

            $this->hot(2);//右侧热度排行
            $this->display();
        }


        //黄石民生

        public function hsms()
        {

            $db = M('news');
            $where['cateid'] = 3;
            $where['display'] = 0;
            $where['type'] = ['in', [2, 3]];
            $page = new \Think\HdPage($db->where($where)->count(), 6);
            $hsxw = $db->limit($page->limit())->where($where)->order(['time' => 'desc'])->select();
            foreach ($hsxw as $key => $value) {
                $hsxw[$key]['commentnum'] = $this->commenttotal($value['id']); //对应文章的评论数量
            }
            $this->assign('hsxw', $hsxw);
            $this->assign('page', $page->show(2));
            // dump($hsxw);
            $newtop = $db->where("cateid=3 and display=0 and type=1")->order(['time' => 'desc'])->find();
            $this->assign('newtop', $newtop);//新闻顶级带图片的分类
            $this->hot(3);//右侧热度排行
            $this->display();
        }


        //湖北新闻

        public function hbxw()
        {

            $db = M('news');
            $where['cateid'] = 4;
            $where['display'] = 0;
            $where['type'] = ['in', [2, 3]];
            $page = new \Think\HdPage($db->where($where)->count(), 6);
            $hsxw = $db->limit($page->limit())->where($where)->order(['time' => 'desc'])->select();
            foreach ($hsxw as $key => $value) {
                $hsxw[$key]['commentnum'] = $this->commenttotal($value['id']); //对应文章的评论数量
            }
            $this->assign('hsxw', $hsxw);
            $this->assign('page', $page->show(2));
            // dump($hsxw);
            $newtop = $db->where("cateid=4 and display=0 and type=1")->order(['time' => 'desc'])->find();
            $this->assign('newtop', $newtop);
            $this->hot(4);//右侧热度排行
            $this->display();
        }


        //国内国际

        public function gngj()
        {

            $db = M('news');
            $where['cateid'] = 5;
            $where['display'] = 0;
            $where['type'] = ['in', [2, 3]];
            $page = new \Think\HdPage($db->where($where)->count(), 6);
            $hsxw = $db->limit($page->limit())->where($where)->order(['time' => 'desc'])->select();
            foreach ($hsxw as $key => $value) {
                $hsxw[$key]['commentnum'] = $this->commenttotal($value['id']); //对应文章的评论数量
            }
            $this->assign('hsxw', $hsxw);
            $this->assign('page', $page->show(2));
            // dump($hsxw);
            $newtop = $db->where("cateid=5 and display=0 and type=1")->order(['time' => 'desc'])->find();
            $this->assign('newtop', $newtop);
            $this->hot(5);//右侧热度排行
            $this->display();
        }


        //右侧的  热度排行
        public function hot($cateid)
        {

            $hot = M('news')->where(['display' => 0, 'cateid' => $cateid])->order('eye desc')->select();
            $this->assign('hot', $hot);
        }

        //文章评论总数
        public function commenttotal($id)
        {

            $comcount = M('comment')->where(['article_id' => $id])->count('id');
            return $comcount;

        }

        //文章详细内容
        public function detail()
        {

//            echo __ACTION__ ;
            $id = I('id', '', 'intval');
            $result = M('news')->find($id);
            M('news')->data(['eye' => $result['eye'] + 1])->where('id=' . $id)->save();//浏览次数
            $page = new \Think\HdPage(M('comment')->where("article_id=$id")->count(), 3);
            $comments = M('comment')->alias('c')
                ->field('c.id,c.created_at,c.content,c.article_id,c.user_id,c.click,v.username,v.head_portrait')
                ->join('__VIPUSER__ AS v ON c.user_id = v.id', 'left')
                ->where('article_id='.$id.' and c.`status`=1')
                ->order('created_at desc')
                ->limit($page->limit())->select();
            $count = M('comment')->where('article_id='.$id.' and status=1')->count('id');

//          dump($comments);die;
            $this->assign('count', $count);//评论数量
            $this->assign('comments', $comments);//评论内容
            $this->assign('pagenum', $page->totalPage);//只分配总页数
            $this->assign('result', $result);//文章详细内容
            $this->display('news_detail');

        }




        //ajax 加载评论分页
        public function ajaxMore()
        {

            if (IS_GET) {
                $page = I('page', '1', 'intval'); //传来第几页的信息
                $arcticle_id = I('article_id');//哪一篇文章的id 的评论
                $comments_db = M('comment')->alias('c')
                    ->field('c.id,c.created_at,c.content,c.article_id,c.user_id,c.click,v.username,v.head_portrait')
                    ->join('__VIPUSER__ AS v ON c.user_id = v.id', 'left')
                    ->where('article_id='.$arcticle_id.' and c.status=1')
                    ->order('created_at desc');

//                $count=$comments_db->count();
                $comments=$comments_db->limit(($page - 1) * 3, 3)->select();

//                $data=[
////                    'status'=>ceil($count/3)==$page?true:false,
////                    'msg'=>'查询结果!',
////                    'data'=>$comments,
////                ];
                $this->ajaxReturn($comments);//评论内容
            }


        }


    }

    ?>