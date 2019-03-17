<?php
$userName = $_POST['username'];
$pass = $_POST['pass'];

require '../database/database.php';
$selectAdmin = "SELECT * FROM `admin` WHERE username='$userName'";
$adminData = mysqli_query($databaseConnect, $selectAdmin);
$afterAssoc = mysqli_fetch_assoc($adminData);

$adminId = $afterAssoc['id'];
$usernameAdmin = $afterAssoc['username'];

$selectAdmin = "SELECT * FROM `admin` WHERE id='$adminId' and password='$pass'";
$adminData = mysqli_query($databaseConnect, $selectAdmin);
$afterAssoc = mysqli_fetch_assoc($adminData);

$adminPass = $afterAssoc['password'];

if (empty($userName)){
    $usernameErr = 1;
    header('location:../login_admin.php?usernameErr='.$usernameErr);
}
elseif (empty($pass)){
    $passErr = 1;
    header('location:../login_admin.php?passErr='.$passErr);
}
elseif ($userName !== $usernameAdmin && $pass !== $adminPass){
    $typeErr = 1;
    header('location:../login_admin.php?typeErr='.$typeErr);
}
elseif ($userName !== $usernameAdmin){
    $usernameErr = 2;
    header('location:../login_admin.php?usernameErr='.$usernameErr);
}
elseif ($pass !== $adminPass){
    $passErr = 2;
    header('location:../login_admin.php?passErr='.$passErr);
}
else{
    session_start();
    $_SESSION['adminId'] = $adminId;
    header('location:../panel.php?myadmin='.$usernameAdmin);
}