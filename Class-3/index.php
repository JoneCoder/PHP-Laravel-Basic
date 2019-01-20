<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 1/17/2019
 * Time: 10:10 AM
 */
//php conditional function
$x = 19;
$y = 34;
if ($x >= $y){
    echo "x is big";
}
elseif ($x < $y){
    echo "Y is big";
}
else{
    echo "Nothing";
}

echo "<br>";

$age = 24;
$gender = "male";
$height = 6;
if ($age >= 18 && $age <= 24){
    if ($gender = "male"){
        if ($height >= 5.6){
            echo "You can play!";
        }
    }
}
else{
    echo "You can't play!";
}

echo "<br>";

$ageChart = 36;
if ($ageChart >= 10){
    if ($ageChart >= 10 && $ageChart < 18){
        echo "You'r Child!";
    }
    elseif ($ageChart >= 18 && $ageChart <= 35){
        echo "You'r Young!";
    }
    else{
        echo "You'r Experienced!";
    }
}
else{
    echo "You'r kid!";
}

echo "<br>";

$fav_car = "Tesla";
switch ($fav_car){
    case "bmw":
        echo "Your fav car is bmw";
        break;
    case "audi":
        echo "Your fav car is audi";
        break;
    case "Tesla":
        echo "Your fav car is Tesla";
        break;
    default:
        echo "We don't have your fav car";
        break;
}

echo "<br>";

$time = time();
echo $time;

echo "<br>";
$a = 1;

date_default_timezone_set("Asia/Dhaka");
echo date("h:i:s A");

echo "<br>";

$day = date("D");
switch ($day){
    case "Fri":
        echo "Today is Friday";
        break;
    case "Sat":
        echo "Today is Saturday";
        break;
    case "Sun":
        echo "Today is Sunday";
        break;
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo "Today is Wednesday";
        break;
    case "Thu":
        echo "Today is Thursday";
        break;
    default:
        echo "No day available";
        break;
}

echo "<br>";
$month = date("M");
switch ($month){
    case "Jan":
        echo "January Month";
        break;
    case "Feb":
        echo "February Month";
        break;
    case "Mar":
        echo "March Month";
        break;
    case "Apr":
        echo "April Month";
        break;
    case "May":
        echo "May Month";
        break;
    case "Jun":
        echo "June Month";
        break;
    case "Jul":
        echo "July Month";
        break;
    case "Aug":
        echo "August Month";
        break;
    case "Sep":
        echo "September Month";
        break;
    case "Oct":
        echo "October Month";
        break;
    case "Nov":
        echo "November Month";
        break;
    case "Dec":
        echo "December Month";
        break;
    default:
        echo "No month available";
        break;
}

echo "<br>";
date_default_timezone_set("Asia/Dhaka");
echo date("Y-M-d");


echo "<br>";

print "<h3>SSC Result Sheet 2019:</h3>";

//Define subjects marks:
$A = 75;    //Bangla
$B = 80;    //English
$C = 67;    //ICT
$D = 70;    //Physics
$E = 85;    //Chemistry
$F = 59;    //Higher Math
$G = 75;    //Biology


//Calculation marks:
function averageMark($A, $B, $C, $D, $E, $F, $G){
    $GLOBALS['totalMarks'] = $A + $B + $C + $D + $E + $F + $G;
    $averageMarks = $GLOBALS['totalMarks'] / 7;
    return $averageMarks;
};
function GPA($a){
    if ($a < 33){
        return "F";
    }
    elseif ($a >= 33 && $a <= 39){
        return "D";
    }
    elseif ($a >= 40 && $a <= 49){
        return "C";
    }
    elseif ($a >= 50 && $a <= 59){
        return "B";
    }
    elseif ($a >= 60 && $a <= 69){
        return "A-";
    }
    elseif ($a >= 70 && $a <= 79){
        return "A";
    }
    elseif ($a >= 80 && $a <= 100){
        return "A+";
    }
};

$average = averageMark($A, $B, $C, $D, $E, $F, $G);
$averageMarks = $average;
$total = $GLOBALS['totalMarks'];
$great = GPA($averageMarks);

echo "Your Total Marks: ".$total ."<br>". "Your Average Marks: ".$averageMarks."<br>"."Your GPA: ".$great;

//Define Subjects:
function subjects(){
    print "<p><b>Mandatory Subjects:</b></p>";
    echo "Bangla-".$GLOBALS['A']."<br>";
    echo "English-".$GLOBALS['B']."<br>";
    echo "ICT-".$GLOBALS['C']."<br>";
    print "<p><b>Elective Subjects:</b></p>";
    echo "Physics-".$GLOBALS['D']."<br>";
    echo "Chemistry-".$GLOBALS['E']."<br>";
    echo "Higher Math-".$GLOBALS['F']."<br>";
    print "<p><b>4th Subject:</b></p>";
    echo "Biology-".$GLOBALS['G']."<br>";
}
echo subjects();
?>
