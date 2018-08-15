<?php
return [
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING' => array(
        
        '__PUBLIC__' => __ROOT__ . '/Application/Member/View/Public', // 更改默认的/Public 替换规则
        '__CSS__' => '/Public/css', // 增加新的JS类库路径替换规则
        '__JS__' => '/Public/js', // 增加新的JS类库路径替换规则
        '__IMAGES__' => '/Public/images', // 增加新的JS类库路径替换规则
        '__STATIC__' => '/Public', // 增加新的JS类库路径替换规则
    ),


];