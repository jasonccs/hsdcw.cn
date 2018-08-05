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
    
    //后去相关的id
    public function getCateId($article_id){
        
        $res=self::field('cateid')->find($article_id);
        if (!empty($res)){
            return $res['cateid'];
        }else{
            return 1;
        }
    }
    
    public function aboutNews ($article_id)
    {
        $cate_id=$this->getCateId($article_id);
        $where['id']=['neq',$article_id];
        $article_ids=self::field('id')->where($where)->where('cateid='.$cate_id)->select();
        if(count($article_ids)>=4){
            $except_article_id=randArray($article_ids,4,false);
        }else{
            $except_article_id=randArray($article_ids,count($article_ids),false);
        }
        $map['id']=['in',$except_article_id];
        $about=self::field('id,title,cateid,keywords,tag,source,desc_image,description,time')->relation(true)->where($map)->limit(4)->select();
        return $about;
    }
    
}





