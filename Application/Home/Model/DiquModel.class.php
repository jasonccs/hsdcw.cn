<?php

namespace Home\Model;
use Think\Model;
/**
* 
*/
class DiquModel extends Model
{
	
	  protected $_scope = array(

	  	'normal'=>[
	  	            'where'=>['uid'=>3], // 把表单中的mail映射到数据表的email字段
                   	
                   ]
         
      );

     //获取分类列表
      public function getdiqulevel($pid){

         return $this->field('id,pid,name')->where(array('pid'=>$pid))->select();


      }
    
      //查找有cid参数的情况
      public function getdiqupid($id){

      	 $result=$this->field('id,pid,name')->where(array('id'=>$id))->find();
         return $result;


      }



    //查找全部的子类
    public function getdiquid($id){

        
         $sondiqu=$this->field('id,pid,name')->where(array('pid'=>$id))->find();
         $result='';
         if($sondiqu['pid']!=0){
            $diqu=$this->field('id,pid,name')->where(array('pid'=>$id))->select();
            foreach ($diqu as $key => $value) {
             $result .= intval($value['id']).',';
           }
         }else{
            $sondiqu=$this->field('id,pid,name')->where(array('id'=>$id))->find();

            $result=$sondiqu['id'];
         }
         
         return $result;

    }




}
?>