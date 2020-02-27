<?php
    // validate
    // @param String
    function validate($str = null){
        if($str){
            return isEmpty($str) || isStartWithNumeric($str) || isStartWithSpecialChar($str) || isCorrectLength($str) || isContainsHtmlTags($str);
        }
    }

    // username or password should not be empty or null
    function isEmpty($str = null){
        if($str){
            $cleanStr = trim($str);
            if (strlen($cleanStr) <= 0) {
                echo "Field is empty <br/>";
                return true;
            }else{
                return false;
            }
        }
    }
    
    // username OR password should not start with a number
    function isStartWithNumeric($str = null){
        if($str){
            $firstChar = substr($str, 0, 1);
            // is_numeric: reference https://www.php.net/manual/en/function.is-numeric.php       
            return (is_numeric($firstChar)) ? true : false;
        }
    }

    // username OR password should not start special character
    function isStartWithSpecialChar($str = null){
        if($str){
            $firstChar = substr($str, 0, 1);
            // pre_match: https://gist.github.com/cferdinandi/6688744
            return (preg_match('/[^a-zA-Z\d]/', $firstChar)) ? true : false;
        }
    }

    // username OR password should be atleast 6 and not more than 12 characters
    function isCorrectLength($str = null){
        if($str){
            return (strlen($str) >= 6 && strlen($str) <= 12) ? false : true;
        }
    }

    // username or password should not contain any html tags
    function isContainsHtmlTags($str = null){
        if($str){
            return (strpos($str, '<')) ? true : false;
        }
    }

    // password should be a mixture of atleast 1 uppercase, 1 number, 1 special character
    function isStrongPassword($str = null){
        if($str){
            // regex: reference https://www.jotform.com/blog/php-regular-expressions/
            return (preg_match_all('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\W]{8,}$/', $str)) ? false : true;
        }
    }

    // password and confirm password should match
    function isPasswordMatch($password = null, $repassword = null){
        if($password && $repassword){
            return ($password === $repassword) ? false : true;
        }
    }

?>