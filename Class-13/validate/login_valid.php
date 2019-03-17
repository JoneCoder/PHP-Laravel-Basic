<?php
$email = $_POST['email'];
$pass = $_POST['pass'];

require '../database/database.php';
$selectAdmin = "SELECT * FROM `admin` WHERE email='$email' and password='$pass'";
$adminData = mysqli_query($databaseConnect, $selectAdmin);
$afterAssoc = mysqli_fetch_assoc($adminData);

$adminId = $afterAssoc['id'];
$username = $afterAssoc['username'];
$adminEmail = $afterAssoc['email'];
$adminPass = $afterAssoc['password'];

if (empty($email)){
    $emailErr = 1;
    header('location:../login_admin.php?emailErr='.$emailErr);
}
elseif (empty($pass)){
    $passErr = 1;
    header('location:../login_admin.php?passErr='.$passErr);
}
elseif (($email !== $adminEmail) && ($pass !== $adminPass)){
    $typeErr = 1;
    header('location:../login_admin.php?typeErr='.$typeErr);
}
elseif ($email !== $adminEmail){
    $emailErr = 2;
    header('location:../login_admin.php?emailErr='.$emailErr);
}
elseif ($pass !== $adminPass){
    $passErr = 2;
    header('location:../login_admin.php?passErr='.$passErr);
}
else{
    session_start();
    $_SESSION['adminId'] = $adminId;
    header('location:../panel.php?myadmin='.$username);
}