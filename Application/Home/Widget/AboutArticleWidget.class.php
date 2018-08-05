<?php

namespace Home\Widget;

use Think\Controller;

class AboutArticleWidget extends Controller
{
    public function about ()
    {
        $article_id = I('id', '', 'intval');
        $about = D('News')->aboutNews($article_id);
        $this->assign('url', __ACTION__ . '/');
//        dump($about);
        $this->assign('about', $about);
        $this->display('Widget:about');
    }
}
