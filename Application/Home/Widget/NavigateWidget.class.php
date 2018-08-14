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

    public function generateTree($arr,$id='id',$pid='pid',$kid=0,$level=0){
            $list =[];
            foreach ($arr as $k=>$v){
                if ($v[$pid] == $kid){
                    $v['level']=$level;
                    $v['son'] = self::generateTree($arr,$id,$pid,$v[$id],$level+1);
                    if (empty($v['son'])){
                        unset($v['son']);
                    }
                    $list[]=$v;
                }
            }
            return $list;

    }



}
