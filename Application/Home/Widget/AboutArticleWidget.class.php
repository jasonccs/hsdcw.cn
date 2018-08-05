<?php
    
    namespace Home\Widget;
    
    use Think\Controller;
    
    class AboutArticleWidget extends Controller
    {
        public function about()
        {
            $about=D('News')->field('id,title,cateid,keywords,tag,source,desc_image,description,time')->relation(true)->order('eye desc')->limit(4)->select();
//            dump($about);
            $this->assign('url',__ACTION__.'/');
            $this->assign('about',$about);
            $this->display('Widget:about');
        }
    }
