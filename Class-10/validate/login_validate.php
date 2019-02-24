<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/19/2019
 * Time: 12:06 AM
 */
session_start();
$userName = $_POST['username'];
$passWord = $_POST['password'];

require "../database/database.php";
$select_query = "SELECT * FROM user_log WHERE username='$userName' and password='$passWord'";
$result = mysqli_query($databaseConnect, $select_query);
$after_assoc = mysqli_fetch_assoc($result);
$database_pass = $after_assoc['password'];
$database_user = $after_assoc['username'];

if ($database_user !== $userName){
    $userErr = 1;
    header('location:../login.php?userErr='.$userErr);
}
elseif ($database_pass !== $passWord){
    $passErr = 1;
    header('location:../login.php?passErr='.$passErr);
}
elseif(($database_user !== $userName) && ($database_pass !== $passWord)){
    $typeErr = 1;
    header('location:../login.php?typeErr='.$typeErr);
}
else{
    $_SESSION['login'] = "Yes!";
    $_SESSION['username'] = $userName;
    header('location:../profile.php');
}
?>