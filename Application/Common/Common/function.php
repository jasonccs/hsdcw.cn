<?php
    
    function checkMobile(String $mobile)
    {
        if (!preg_match("/^1[345678]{1}\d{9}$/", $mobile)) {
            return false;
        }
        return true;
    }
