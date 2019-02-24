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
$select_query = "SELECT * FROM admin WHERE username='$userName' and password='$passWord'";
$result = mysqli_query($databaseConnect, $select_query);
$after_assoc = mysqli_fetch_assoc($result);
$database_pass = $after_assoc['password'];
$database_user = $after_assoc['username'];

if ($database_user !== $userName){
    $AuserErr = 1;
    header('location:../profile.php?AuserErr='.$AuserErr);
}
elseif ($database_pass !== $passWord){
    $ApassErr = 1;
    header('location:../profile.php?ApassErr='.$ApassErr);
}
elseif(($database_user !== $userName) && ($database_pass !== $passWord)){
    $AtypeErr = 1;
    header('location:../profile.php?typeErr='.$AtypeErr);
}
else{
    $_SESSION['login'] = "Admin!";
    header('location:../admin.php?admin='.$userName);
}
?>