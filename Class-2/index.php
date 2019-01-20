<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 1/16/2019
 * Time: 9:26 AM
 */
//php arithmetic operators:
$number1 =  29;
$number2 = 27;

print "<p><b>Arithmetic operators result:</b></p>";
$addition = $number1 + $number2;
echo "Addition is: ".$addition."<br>";

$subtraction = $number1 - $number2;
echo "Subtraction is: ". $subtraction."<br>";

$multiplation = $number1 *  $number2;
echo "Multiplation is: ". $multiplation."<br>";

$division = $number1 / $number2;
echo "Division is: ". $division."<br>";

$modulus = $number1 % $number2;
echo "Modulus is: ". $modulus."<br>";

echo "<br>";

//php post increment
print "<p><b>Increment result:</b></p>";
echo "Post Increment- ".$number1++."<br>";
echo "Post Increment- ".$number1++."<br>";

echo "Now number1 value is- ". $number1."<br>";

//php pre increment
echo "Pre Increment- ".++$number1."<br>";
echo "Pre Increment- ".++$number1."<br>";

echo "<br>";

//php post decrement
print "<p><b>Decrement result:</b></p>";
echo "Post Decrement- ".$number2--."<br>";
echo "Post Decrement- ".$number2--."<br>";

echo "Now number2 value is- ". $number2."<br>";

//php pre decrement
echo "Pre Decrement- ".--$number2."<br>";
echo "Pre Decrement- ".--$number2."<br>";

echo "<br>";

echo "Now number1 value is- ". $number1."<br>";
echo "Now number2 value is- ". $number2."<br>";

//php comparison operators
print "<p><b>Comparison operator result:</b></p>";
var_dump($number1 == $number2);
echo "<br>";
var_dump($number1 > $number2);
echo "<br>";
var_dump($number1 < $number2);
echo "<br>";
var_dump($number1 <= $number2);
echo "<br>";
var_dump($number1 >= $number2);
echo "<br>";
var_dump($number1 != $number2);
echo "<br>";

echo "<br>";

//php assignment operators
print "<p><b>Assignment operators result:</b></p>";
echo $number1 += $number2;
echo "<br>";
echo $number1 -= $number2;
echo "<br>";
echo $number1 *= $number2;
echo "<br>";
echo $number1 /= $number2;
echo "<br>";
echo $number1 %= $number2;
echo "<br>";

echo "<br>";

echo "Now number1 value is- ". $number1."<br>";
echo "Now number2 value is- ". $number2."<br>";

//php logical operators
print "<p><b>Logical operators result:</b></p>";
if ($number1 > $number2 && $number1 < $number2){
    echo "Number1 is less than Number2.";
}
else{
    echo "AND (&&) operator is not run at this conditional logic.";
}

echo "<br>";

if ($number1 > $number2 || $number1 < $number2){
    echo "Number1 is less than Number2.";
}
else{
    echo "OR (||) operator is not run at this conditional logic.";
}
echo "<br>";

echo "<br>";

//php function
print "<p><b>Function result:</p>";
function adding_function(){
    $add = $GLOBALS['number1'] + $GLOBALS['number2'];
    echo "Number1 and Number2 adding value is: ".$add;
}
adding_function();


//php built in function
print "<h3>Built in function:</h3>";
//php string revers
print "<p><b>String revers result:</p>";
$str = "Sharif";
echo strrev($str);

//php word count
print "<p><b>Word count result:</p>";
$count = "Hello World!";
echo "Total words: ".str_word_count($count);

//php replace
print "<p><b>Replace result:</p>";
$change = "I love Bangladesh!";
echo str_replace($count, $change, "Hello World!");

//php explode
print "<p><b>Explode result:</p>";
$var = "Hello World!";
print_r(explode(" ",$var));

//php define
print "<p><b>Define variable result:</p>";
define("pi",3.1416);
echo "pi = ".pi;
?>