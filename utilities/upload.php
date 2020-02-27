<?php

    $size = $_FILES['fileToUpload']['size'];
    $type = $_FILES['fileToUpload']['type'];

    //echo (checkType($type)) ? "Valid" : "Invalid" ;
    // echo (checkSize($size)) ? "Valid" : "Invalid" ;
    if(checkType($type) && checkSize($size)){
        if(upload($_FILES['fileToUpload'])){
            echo "Sucessfully Uploaded! <br>";
            echo "<img src='../uploads/".$_FILES['fileToUpload']['name']."'>";
        }else{
            echo "Failed to Upload";
        }
    }

    function checkType($type = null){
        $allowed = array(
            'jpeg',
            'jpg',
            'png',
            'gif'   
        );

        if($type){
            $strArray = explode('/',$type);
            return in_array(end($strArray), $allowed);
        }
    }

    function checkSize($size = null){
        $max = 500000; // 5mb
        if($size){
            return $size <= $max;
        }
    }

    function upload($file = null){
        $destination = '../uploads/'.basename($file["name"]);
        return move_uploaded_file($file['tmp_name'], $destination);
    }
?>