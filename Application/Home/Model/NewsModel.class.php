<?php

namespace Home\Model;

use Think\Model\RelationModel;

/**
 *
 */
class NewsModel extends RelationModel
{
    
    protected $tableName = 'news';
    
    protected $_link = [
      'sysMenu' => [
        'mapping_type' => self::BELONGS_TO,
        'class_name' => 'SysMenu',
        'foreign_key' => 'id',
        'parent_key'=>'cateid',
          "relation_foreign_key" => 'id',
        'mapping_fields' => 'title',
//        'condition' => 'id = "cateid"',
//        'condition' => 'cateid = id2',
//        'mapping_limit'=>4,
//        'mapping_order' => 'create_time desc',
        'as_fields' => 'new_category'
      ],
      
      'comment'=>[
        'mapping_type' => self::HAS_MANY,
        'foreign_key' => 'article_id',
//        'parent_key'=>'id',
        'mapping_fields' => 'article_id',
      ]
    ];
    
    public function aboutNews ()
    {
        $res = self::where('')->select();
        return $res;
    }
    
}





