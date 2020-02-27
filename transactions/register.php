<?php
    include_once("../utilities/validation.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if(validate($username) || validate($password)){
        echo "Invalid Inputs";
    }else{
        if(isStrongPassword($password) || isPasswordMatch($password, $repassword)){
            echo "Invalid Password";
        }else{
            echo "Successfully Registered";
        }
    }
   
?>