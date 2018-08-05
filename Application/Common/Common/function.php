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
            foreach ( $rand_keys as $key => $value ) {
                foreach ( $value as $key1 =>$value2){
                    $new[]= $value2;
                }
            }

        }
        
    }else{
        if(count($arr) == count($arr, 1)) { //一维数组
    
            $new = '';
            $rand_keys = array_rand($arr, $length);
            foreach ( $rand_keys as $key => $value ) {
                $new .= $arr[$value] . ',';
            }
            $new = rtrim($new, ',');
        }else{
            $new = '';
            $rand_keys = array_rand($arr, $length);
            var_dump($rand_keys);
            var_dump($rand_keys[0]);
//            var_dump($rand_keys[0]);
            var_dump($arr[$rand_keys]);
//            var_dump(array_keys($arr,$arr[$rand_keys[0]],1));
            foreach ( $rand_keys as $key => $value ) {
//                echo $value,',';

//               var_dump($arr[$value]);
//               var_dump($arr[$value],1,false);
                    $new .= $arr[$value]['id'] . ',';
            }
            $new = rtrim($new, ',');
        }
        
      
    }
   
    return $new;
}
