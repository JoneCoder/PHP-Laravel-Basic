<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/4/2019
 * Time: 9:11 AM
 */

session_start();
$_SESSION['login'] = 'Login';
$email = $_POST['email'];
$passWord = $_POST['pass'];
require '../database/database.php';

$select_user = "SELECT * FROM `user_content` WHERE email='$email' and password='$passWord'";
$user_info = mysqli_query($databaseConnect, $select_user);
$after_assoc = mysqli_fetch_assoc($user_info);

$user_id = $after_assoc['id'];
$fullName = $after_assoc['name'];
$fullName_explode = explode(' ',$fullName);
$allow_user = ['md.', 'Md.', 'mr.', 'Mr.', 'mrs.', 'Mrs.', 'dr.', 'Dr.'];
if (in_array($fullName_explode[0], $allow_user)){
    $username = $fullName_explode[1];
}
elseif (!in_array($fullName_explode[0], $allow_user)){
    $username = $fullName_explode[0];
}

$select_user = "SELECT * FROM `user_content` WHERE email='$email'";
$user_info = mysqli_query($databaseConnect, $select_user);
$after_assoc = mysqli_fetch_assoc($user_info);
$user_email = $after_assoc['email'];

$select_user = "SELECT * FROM `user_content` WHERE password='$passWord'";
$user_info = mysqli_query($databaseConnect, $select_user);
$after_assoc = mysqli_fetch_assoc($user_info);
$user_password = $after_assoc['password'];

if (($email !== $user_email) && ($passWord !== $user_password)){
$typeErr = 1;
header('location:../login.php?typeErr='.$typeErr);
}
elseif($email !== $user_email){
    $userEmailErr = 1;
    header('location:../login.php?userEmailErr='.$userEmailErr);
}
elseif($passWord !== $user_password){
    $userPasswordErr = 1;
    header('location:../login.php?userPasswordErr='.$userPasswordErr);
}
else{
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $username;
    setcookie('cookie', 'login');
    header('location:../profile.php?user_id='.$username);
}