<?php 
    include_once('../utilities/validation.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if(validate($password, $repassword)){
        echo "Password is ok";        
    }else{
        echo "Password is not accepted";
    }

?>