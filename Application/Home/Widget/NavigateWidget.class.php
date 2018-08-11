<?php

namespace Home\Widget;

use Home\Model\SysMenuModel;
use Think\Controller;

class NavigateWidget extends Controller
{
    public function navMenu()
    {
//        $all_menu = D('SysMenu');
        $all_menu = new SysMenuModel();
        $all_menu=$all_menu->allMenu();
        $menu=generateTree($all_menu,'id','pid');
        $temp = [];
        foreach ( $menu as $key => $value ) {
            if ( is_array($value) ) {
                $temp[$key] = $value['son'];
            }
        }
        return $temp;
//        $this->assign('all_menu', $temp);
//        $this->display('Widget:nav');
    }

 

}
