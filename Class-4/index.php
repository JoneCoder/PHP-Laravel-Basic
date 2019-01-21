<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 1/21/2019
 * Time: 10:20 PM
 */
//Fore kinds of loop function in php
/*
 * 1) for
 * 2) while
 * 3) foreach
 * 4) do while
 */

//syntax
/*
 * 1) for (init; condition; increment){
 *      some code here.....
 * }
 *
 * 2) while(condition){
 *      some code here.....
 * }
 *
 * 3) foreach($variable as $items){
 *      some code here.....
 * }
 *
 * 4) do{
 *      some code here.....
 * }
 * while(condition);
 */

//php for loop
for($i = 0; $i <= 10; $i++){
    echo $i."<br>";
}

//php while loop
echo "<br>";

$a = 1;     //increment
$b = 20;    //decrement
while($a <= 10){
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
    $a++;
    $b--;
}


//php foreach loop
echo "<br>";

$array = [0,1,2,3,4,5,6,7,8,9];
foreach ($array as $items){
    echo $items;
}


//php do while loop
echo "<br>";

$x = 1;
do{
    echo $x."<br>";
    $x++;
}
while($x <= 10);


//php array
$colors = ['Red', 'Green', 'Blue', 1, 2.5];
var_dump($colors);

echo "<br>";

print_r($colors);


//use of php loop
echo "<br>";

//multiplication table
$multiple = 12;
for($z= 1; $z <= 10; $z++){
    echo $multiple. " X ". $z. " = ". $multiple * $z. "<br>";
}

//2-10 multiplication table
echo "<p><b>2 - 10 Multiplication Table:</b></p>";

$Multiple = 2;
$factor = 1;
for($n = 2; $n <= 10; $n++){
    echo "<p>"."Multiplication of: ".$Multiple."</p>";
    for($z= 1; $z <= 10; $z++){
        echo $Multiple. " X ". $z. " = ". $Multiple * $z. "<br>";
    }
    $Multiple++;
}


//even or odd number
echo "<br>";
echo "<p><b>"."Even Numbers(1-100): "."</b></p>";

//even number print function
for($r = 1; $r <= 100; $r++){
    if($r % 2 == 0){
        if($r == 100){
            echo $r.".";
        }
        else{
            echo $r.", ";
        }
    }
}


echo "<br>";
echo "<p><b>"."Odd Numbers(1-100): "."</b></p>";
//odd number print function
for($r = 1; $r <= 100; $r++){
    if($r % 2 != 0){
        if($r == 99){
            echo $r.".";
        }
        else{
            echo $r.", ";
        }
    }
}
?>