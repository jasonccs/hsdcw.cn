<?php

namespace Home\Model;
use Think\Model;
/**
* 
*/
class UserModel extends Model
{
	
	  protected $_scope = array(

	  	'normal'=>[
	  	            'where'=>['uid'=>3], // 把表单中的mail映射到数据表的email字段
                   	
                   ]
         
      );


}






?>