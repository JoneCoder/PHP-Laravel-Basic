<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 1/13/2019
 * Time: 6:48 PM
 */
echo "I love my country Bangladesh<br>";       //This is echo function for display in browser
print "Hello World!<br>";       //This is print function for display in browser

//Supper Global variable declaration
$firstName = "Md.";
$middleName = "Shariful";
$lastName = "Islam";
$space = " ";
$lineBreak = "<br/>";
$num1 = 20;
$num2 = 4;
$sum = $num1 + $num2;


//function
function my_function(){
    if ($GLOBALS['sum'] == 24){
        $fullName = $GLOBALS['firstName'] . $GLOBALS['space'] . $GLOBALS['middleName'] . $GLOBALS['space'] . $GLOBALS['lastName'];
        echo $fullName. $GLOBALS['lineBreak'] . $GLOBALS['sum'];
    }
}
my_function();      //call my_function
?>