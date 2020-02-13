<?php 

    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
        header('location: ../main.php');
    }else{
        header('location: ../error.php');
    }

?>