<?php

    /**
     * @param $e //对象
     * @return array
     */
    function objectToArray($e){
        $e=(array)$e;
        foreach($e as $k=>$v){
            if( gettype($v)=='resource' ) return ;
            if( gettype($v)=='object' || gettype($v)=='array' )
                $e[$k]=(array)objectToArray($v);
        }
        return $e;
    }

    /**
     * 检测手机号
     * @param String $mobile
     * @return bool
     */
    function checkMobile(String $mobile)
    {
        if (!preg_match("/^1[345678]{1}\d{9}$/", $mobile)) {
            return false;
        }
        return true;
    }

    /**
     * 短信验证码
     * @param int $length
     * @return int
     */
    function generateCode($length = 6) {
        $min = pow(10 , ($length - 1));
        $max = pow(10, $length) - 1;
        return intval(mt_rand($min, $max));
    }

