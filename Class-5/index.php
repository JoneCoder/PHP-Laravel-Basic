<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 1/29/2019
 * Time: 10:04 AM
 */
$x =  array(10, 20, 30);
print_r($x);

echo "<br>";
echo $x[1];

echo "<br>";
var_dump($x);

echo "<br>";
$var = count($x);
echo $var;

echo "<br>";
$start = 0;
$end = (count($x)-1);
for ($start; $start <= $end; $start++){
    echo $x[$start]." ";
}

echo "<br>";
foreach ($x as $value){
    echo $value." ";
}

echo "<br>";
$array = [10,20,['a','b','c',[10.5, 3.1416]],30];
var_dump($array);

echo "<br>";
echo $array[0]; //print 10

echo "<br>";
echo $array[1]; //print 20

echo "<br>";
echo $array[2][0];   //print second array a

echo "<br>";
echo $array[2][3][1];   //print third array 3.1416


echo "<br>";
$y = ["a"=>10, "b"=>20, "c"=>30];   //print 10 for associate index
echo $y['a'];

echo "<br>";
$array = array(
    "fruits"=>array("Mango", "Banana", "Apple"),
    "fish"=>array("Hilsha", "Shrimp", "Dolphin"),
    "fastfood"=>array("Burger", "Pizza", "Pasta"),
    "drinks"=>array("Jone"=>"Coffee", "Pepsi", "Cola"),
);
echo $array['drinks']['Jone'];

echo "<br>";
$a = ["Mango", "Banana", "Apple"];
foreach($a as $key => $value){
    echo "The key is:".$key."<br>";
    echo "The value is:".$value."<br>";
}

echo "<br>";
foreach ($array as $key => $step1){
    foreach ($step1 as $key => $value){
        echo "The key is:".$key."<br>";
        echo "The value is:".$value."<br>";
    }
}

echo "<br>";
$n = [10, 20, 30, 40, 10, 20];
$result = 0;
foreach ($n as $value){
    if ($value == 10){
        $result++;
    }
}
echo $result;

$numbers = [2, 1, 4, 5,3];
sort($numbers);
print_r($numbers);


$numbers = [2, 1, 4, 5,3];
rsort($numbers);
print_r($numbers);


$numbers = [2, 1, 4, 5,3];
asort($numbers);
print_r($numbers);

$numbers = [2, 1, 4, 5,3];
ksort($numbers);
print_r($numbers);

$numbers = [2, 1, 4, 5,3];
arsort($numbers);
print_r($numbers);

$numbers = [2, 1, 4, 5,3];
krsort($numbers);
print_r($numbers);

echo "<p>-------Class Assignment-------</p>";

$colors = array("Red", "Green", "Blue", "Red", "Yellow", "Sky blue", "Blue", "Red", "Brown", "Red", "White", "Blue", "Black");

$count = 0;
foreach ($colors as $key => $color){
    if($color == "Red"){
        $count++;
        echo "The key is:".$key."<br>";
        echo "The value is:".$color."<br>";
    }
}
echo "Total Value count: ". $count;
?>
