<?php

namespace Home\Model;
use Think\Model;
/**
* 
*/
class PriceModel extends Model
{
	
	  protected $_scope = array(

	  	'normal'=>[
	  	            'where'=>['uid'=>3], // 把表单中的mail映射到数据表的email字段
                   	
                   ]
         
      );


      public function getPrice($price){

         return $this->field('id,price')->select();


      }


}






?>