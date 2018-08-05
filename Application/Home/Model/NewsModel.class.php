<?php

namespace Home\Model;

use Think\Model;

/**
 *
 */
class NewsModel extends Model
{
    public function aboutNews()
    {
        $res=self::where('')->select();
        return $res;
    }
    
}





