<?php

namespace Home\Widget;

use Think\Controller;
use Think\HdData;

class NavigateWidget extends Controller
{
    public function navMenu()
    {
        $all_menu = D('SysMenu')->allMenu();

//        $cate = new HdData();
//        $menu = $cate::tree($all_menu, 'title', 'id', 'pid');
//        $menu=$cate::tree($all_menu);
//        $all_menu = [
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
        $menu=self::generateTree($all_menu);
                dump($menu);
        $this->assign('all_menu', $menu);
        $this->display('Widget:nav');
    }

    public function generateTree($items,$pid ="pid"){
            $map  = [];
            $tree = [];
            foreach ($items as &$it){ $map[$it['id']] = &$it; }  //数据的ID名生成新的引用索引树
            foreach ($items as &$it){
                $parent = &$map[$it[$pid]];
                if($parent) {
                    $parent['son'][] = &$it;
                }else{
                    $tree[] = &$it;
                }
            }
            return $tree;
    }



}
