<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 1/31/2019
 * Time: 9:40 PM
 -->
<!DOCTYPE html>
<html>
<head>
    <title>PHP Problem for Lab Practice 1 - 2019</title>

    <style>
        *,
        *::before,
        *::after{box-sizing:border-box;}
        .container{
            width: 90%;
            height: auto;
            margin: auto;
        }
        .row:after{
            display: block;
            content: '';
            clear: both;
        }
        .col-1{
            width: 8.33%;
            float: left;
        }
        .col-11{
            width: 91%;
            float: left;
        }
        .cn{
            text-align: center;
        }
        .cr{
            background-color: green;
            color: white;
            font-size: 20px;
        }
        .br{
            border-right: 2px solid #333333;
        }
        .crb1{
            background-color: skyblue;
            color: white;
            font-size: 20px;
        }
        .crb2{
            background-color: powderblue;
            color: white;
            font-size: 20px;
        }
        .pl{
            padding-left: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="cn">
            <?php
            echo "<h1><u>PHP Problem Solution for Lab Practice 1 - 2019</u></h1>";
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn cr br">
            <?php
            echo "<p>SL. No</p>";
            ?>
        </div>

        <div class="col-11 cn cr">
            <?php
            echo "<p>Answer</p>";
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb1 br">
            <?php
            echo "<p>1</p>";
            ?>
        </div>

        <div class="col-11 crb1 pl">
            <?php
            $number = 56;
            echo "<p>Your value is: $number</p>";
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb2 br">
            <?php
            echo "<p>2</p>";
            ?>
        </div>

        <div class="col-11 crb2 pl">
            <?php
            $country = "Bangladesh!";
            $country = strrev($country);
            echo "<p>Value that you provided looks like in reverse like this: $country</p>";
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb1 br">
            <?php
            echo "<p>3</p>";
            ?>
        </div>

        <div class="col-11 crb1 pl">
            <?php
            $string = "Hello Bangladesh!";
            $name = "CIT";
            $string = str_replace("Bangladesh",$name,$string);
            echo "<p>$string</p>";
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb2 br">
            <?php
            echo "<p>4</p>";
            ?>
        </div>

        <div class="col-11 crb2 pl">
            <?php
            define("pi", 3.1416);
            echo "<p>Constant value of PI is: ". pi. "</p>";
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb1 br" style="height: 100px;">
            <?php
            echo "<p>5</p>";
            ?>
        </div>

        <div class="col-11 crb1 pl" style="height: 100px;">
            <?php
            $num1 = 54;
            $num2 = 38;
            calculator($num1, $num2);
            function calculator($n1, $n2){
                $add = $n1 + $n2;
                $sub = $n1 - $n2;
                $mul = $n1 * $n2;
                $div = $n1 / $n2;
                echo "Addition of two values:($add)<br>";
                echo "Subtraction of two values:$$sub<br>";
                echo "Multiplication of two values:#$mul#<br>";
                echo "Division of two values:$div<br>";
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb2 br">
            <?php
            echo "<p>6</p>";
            ?>
        </div>

        <div class="col-11 crb2 pl">
            <?php
            $num1 = 43;
            $num2 = 5;
            $mod = $num1 % $num2;
            echo "<p>Remainder is $mod</p>"
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb1 br">
            <?php
            echo "<p>7</p>";
            ?>
        </div>

        <div class="col-11 crb1 pl">
            <?php
            $gender = "male";
            if ($gender = 'male'){
                echo "<p>You are a $gender</p>";
            }
            else{
                echo "<p>You are a $gender</p>";
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb2 br">
            <?php
            echo "<p>8</p>";
            ?>
        </div>

        <div class="col-11 crb2 pl">
            <?php
            $integer = 38;
            if ($integer % 2 == 0){
                echo "<p>$integer is even</p>";
            }
            else{
                echo "<p>$integer is odd</p>";
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb1 br">
            <?php
            echo "<p>9</p>";
            ?>
        </div>

        <div class="col-11 crb1 pl">
            <p>
                <?php
                $x = 1;
                while($x <= 10){
                    echo $x.'#';
                    $x++;
                }
                ?>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb2 br">
            <?php
            echo "<p>10</p>";
            ?>
        </div>

        <div class="col-11 crb2 pl">
            <?php
            $alphabet = "b";
            switch ($alphabet){
                case 'a':
                    echo "<p>Your input is a vowel</p>";
                    break;
                case 'e':
                    echo "<p>Your input is a vowel</p>";
                    break;
                case 'i':
                    echo "<p>Your input is a vowel</p>";
                    break;
                case 'o':
                    echo "<p>Your input is a vowel</p>";
                    break;
                case 'u':
                    echo "<p>Your input is a vowel</p>";
                    break;
                default:
                    echo "<p>Your input is a consonant</p>";
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb1 br">
            <?php
            echo "<p>11</p>";
            ?>
        </div>

        <div class="col-11 crb1 pl">
            <p>
                <?php
                for ($n = 1; $n <= 10; $n++){
                    if ($n % 2 == 0){
                        echo $n."@";
                    }
                }
                ?>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-1 cn crb2 br" style="height: 115px;">
            <?php
            echo "<p>12</p>";
            ?>
        </div>

        <div class="col-11 crb2 pl" style="height: 115px;">
            <?php
            for($x = 1; $x <= 10; $x++){
                if($x & 2 != 0){
                    echo $x."<br>";
                }
            }
            ?>
        </div>
    </div>


</div>
</body>
</html>
