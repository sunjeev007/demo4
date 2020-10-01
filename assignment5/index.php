<!-- 
    Name: Sangeev Thapa Magar
    Date: 04/19/2020
    Subject: CS 355 (Advanced Web Programming)
    Assignment 5: Debugging & Control Statements
-->


<?php

//creating a log file 
date_default_timezone_set('America/New_York');
$log_file = "temp/error.log";
ini_set("error_log", $log_file);

//filter and initiate the variables
//first variable taken as x
$x = filter_input(INPUT_POST, 'x', FILTER_VALIDATE_INT);
//second variable taken as y
$y = filter_input(INPUT_POST, 'y', FILTER_VALIDATE_INT);
//operator for aritmetic operation
$operator = filter_input(INPUT_POST, 'operator');
//$display_result = null;




// Input Operator detection
if (!isset($x)){
  $display_result = "Please Enter Required Parameter.";
}

else{
    // Addition
    if($operator == 'addition'){
      $result = $x + $y;
      $op = '+';
    }
    //Substraction
    if($operator == 'substraction'){
      $result = $x - $y;
      $op = '-';
    }
    //Multiplication
    if($operator == 'multiplication'){
      $result = $x * $y;
      $op = '*';
    }
    //Division
    if($operator == 'division'){
      $result = $x / $y;
      $op = '/';
    }



    $display_result = $x.' '.$op.' '.$y.' = '.$result.'  where x = '.$x.
        ' and y = '.$y;

    error_log($display_result);
  }

  include 'calculate.php';
?>
