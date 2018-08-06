<?php

namespace Home\Widget;

use Think\Controller;
use Think\HdData;

class NavigateWidget extends Controller
{
    public function navMenu()
    {
        $all_menu = D('SysMenu')->allMenu();
//        $all_menu2 = [
//            [
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "湖北新闻",
//                    "url" => "News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "湖北新闻",
//                    "url" => "News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "湖北新闻",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "东楚论坛",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "湖北新闻",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "东楚论坛",
//                    "url" =>"News/hbxw"
//                ]
//            ],
//            [
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "视频",
//                    "url" => "News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "读图",
//                    "url" => "News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "专题",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "微博",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "时评",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "人才",
//                    "url" =>"News/hbxw"
//                ]
//            ],
//            [
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "视频",
//                    "url" => "News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "读图",
//                    "url" => "News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "专题",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "微博",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "时评",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "人才",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "时评",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "人才",
//                    "url" =>"News/hbxw"
//                ]
//            ],
//            [
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "湖北新闻",
//                    "url" => "News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "湖北新闻",
//                    "url" => "News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "湖北新闻",
//                    "url" =>"News/hbxw"
//                ],
//                [
//                    "id" => 4,
//                    "pid" => 1,
//                    "title" => "东楚论坛",
//                    "url" =>"News/hbxw"
//                ],
//            ],
//        ];
        $menu=self::generateTree($all_menu,'id','pid');
        $temp = [];
        foreach ( $menu as $key => $value ) {
            if ( is_array($value) ) {
                $temp[$key] = $value['son'];
            }
        }
        $this->assign('all_menu', $temp);
        $this->display('Widget:nav');
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
