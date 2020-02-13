<?php 
    function validate($str, $repassword = ""){
        return isValidPassword($str) && isEmpty($str) && checkSize($str) && passwordMatch($str, $repassword);
    }

    function isEmpty($str){
        return trim(strlen($str) > 0);
    }

    function checkSize($str){
        $min = 6;
        $max = 12;
        return strlen($str) >= $min && strlen($str) <= $max;
    }

    function passwordMatch($str, $repassword){
        return $str == $repassword;
    }
    
    function isValidPassword($str){
        return preg_match_all('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $str);
    }

?>