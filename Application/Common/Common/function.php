<?php

/**
 * @param $e //对象
 * @return array
 */
function objectToArray ( $e )
{
    $e = (array) $e;
    foreach ( $e as $k => $v ) {
        if ( gettype($v) == 'resource' )
            return;
        if ( gettype($v) == 'object' || gettype($v) == 'array' )
            $e[$k] = (array) objectToArray($v);
    }
    return $e;
}

/**
 * 检测手机号
 * @param String $mobile
 * @return bool
 */
function checkMobile ( String $mobile )
{
    if ( !preg_match("/^1[345678]{1}\d{9}$/", $mobile) ) {
        return false;
    }
    return true;
}

/**
 * 短信验证码
 * @param int $length
 * @return int
 */
function generateCode ( $length = 6 )
{
    $min = pow(10, ( $length - 1 ));
    $max = pow(10, $length) - 1;
    return (string) ( mt_rand($min, $max) );
}


/**
 * 从一堆数组中随机取出几个组成新的字符串或者数字
 * @param array $arr 一维数组
 * @return string|array
 */
function randArray ( array $arr, int $length=4, bool $type=true)
{
    if ($type){
        $new =[];
        if(count($arr) == count($arr, 1)){ //一维数组
            $rand_keys = array_rand($arr, $length);
            foreach ( $rand_keys as $key => $value ) {
                $new[]= $arr[$value];
            }
        }else{//多维数组
            $rand_keys = array_rand($arr, $length);
            $arr_name=[];
            foreach ($arr[$rand_keys[0]] as $value){
                $arr_name=array_keys($arr[$rand_keys[0]],$value,false);
            }
            foreach ( $rand_keys as $key => $value ) {
                $new[]= $arr[$value][$arr_name[0]];
            }

        }
        
    }else{
        $new = '';
        if(count($arr) == count($arr, 1)) { //一维数组
    
            $rand_keys = array_rand($arr, $length);
            foreach ( $rand_keys as $key => $value ) {
                $new .= $arr[$value] . ',';
            }
            $new = rtrim($new, ',');
        }else{
            $rand_keys = array_rand($arr, $length);
            $arr_name=[];
            foreach ($arr[$rand_keys[0]] as $value){
                $arr_name=array_keys($arr[$rand_keys[0]],$value,false);
            }
            foreach ( $rand_keys as $key => $value ) {
                    $new .= $arr[$value][$arr_name[0]] . ',';
            }
            $new = rtrim($new, ',');
        }
        
      
    }
   
    return $new;
}


//递归
function generateTree($arr,$id='id',$pid='pid',$kid=0,$level=0){
    $list =[];
    foreach ($arr as $k=>$v){
        if ($v[$pid] == $kid){
            $v['level']=$level;
            $v['son'] = generateTree($arr,$id,$pid,$v[$id],$level+1);
            if (empty($v['son'])){
                unset($v['son']);
            }
            $list[]=$v;
        }
    }
    return $list;
    
}