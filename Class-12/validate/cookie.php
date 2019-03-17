<?php

if (!isset($_COOKIE['cookie'])){
    header('location:logout.php');
}
else{
    setcookie('cookie', 'Activity', time()+20);
}
