<?php
    
    namespace Home\Widget;
    
    use Think\Controller;
    
    class AboutArticleWidget extends Controller
    {
        public function about()
        {
            echo CONTROLLER_NAME;
            $this->display('Widget:about');
        }
    }
