<?php 
   // Single line
   // Comment
   /**
    * Multi-line
    * Comments
    * Comments
    */

    // Variables
    $mynumber = 1;
    $mystring = "String";
    $myboolean = true;
    $mydouble = 1.2;
    $mychar = '1';
    $myArray = [1,2,3,4];
    $mynull = 0;
    // Operators
    // Arithmetic Operators
    // +, -, *, /, %, **
    // Boolean Operators
    // <, >, ==, <=, >=, !, !=, ===
    // Logical Operators
    // &&, ||
    // Coalesce
    // ?? 
    // Ternary
    // condition? true: false

    // Print
    echo $mystring;
    echo "<br/>";
    print_r($myArray);
    echo "<br/>";
    echo $myArray[0];
    echo "<br/>";
    echo $mynumber == $myboolean;
    echo "<br/>";
    echo $mynull ?? "It's null";

    // Functions
    function fn($parameters, $mynumber, $mystring){
        $mynumber = 100;
        echo "Test ".$parameters;
        echo "Test ".$mynumber.' '.$mystring;
        return true;
    }

    fn("John Doe", $mynumber, $mystring);

    print_r($_SERVER);

    // Superglobals
    // $_SERVER
    // $_GET
    // $_POST
    // $_REQUEST
    // $GLOBALS
?>