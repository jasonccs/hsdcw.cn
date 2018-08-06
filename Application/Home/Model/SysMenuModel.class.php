<?php

namespace Home\Model;

use Think\Model\RelationModel;

/**
 *
 */
class SysMenuModel extends RelationModel
{

    protected $tableName = 'sys_menu';

    public function allMenu()
    {
//        $map['pid'] = ['neq', 0];
        $map['hide'] = ['neq', 1];
        $res = self::field('id,pid,title,url')->where($map)->order('sort desc ,id asc')->select();
        return $res;
    }

}





