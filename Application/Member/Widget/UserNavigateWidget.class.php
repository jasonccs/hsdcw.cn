<?php

namespace Member\Widget;

use Think\Controller;

class UserNavigateWidget extends Controller
{
   
    private $menu_content_wrap=null;
   
    //会员中心侧边导航
    public function userNavMenu($menu_nav_id)
    {
        $this->menu_content_wrap=$menu_nav_id;

        $this->display('Widget:user_nav');
    }

    
    //不同的侧导航显示不同的右边的content
    public function menuContentWrap(){
    
        $show_template=empty($this->menu_content_wrap)?'userInfo':$this->menu_content_wrap;        switch ($show_template){
            case 'userInfo' :
                $this->display('Widget:menu_content_wrap');
                break;
            case 'realName':
                $this->display('Widget:real_name_content_wrap');
                break;
                
        }
        
    }
 

}
