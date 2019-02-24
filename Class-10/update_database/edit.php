<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/19/2019
 * Time: 12:06 AM
 */
session_start();
$user_id = $_POST['id'];
$userName = valid($_POST['username']);
$email = valid($_POST['email']);
$passWord = valid($_POST['password']);
$mobile = valid($_POST['mobile']);

function valid($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}

if(empty($userName)){
    $EuserErr = 1;
    header('location:../profile.php?EuserErr='.$EuserErr);
}
elseif(strlen($userName) > 10){
    $EuserErr = 2;
    header('location:../profile.php?EuserErr='.$EuserErr);
}
elseif(empty($email)){
    $EemailErr = 1;
    header('location:../profile.php?EemailErr='.$EemailErr);
}
elseif(!preg_match('(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)', $email)){
    $EemailErr = 2;
    header('location:../profile.php?EemailErr='.$EemailErr);
}
elseif(empty($passWord)){
    $EpassErr = 1;
    header('location:../profile.php?EpassErr='.$EpassErr);
}
elseif(!preg_match('(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}))', $passWord)){
    $EpassErr = 2;
    header('location:../profile.php?EpassErr='.$EpassErr);
}
elseif(empty($mobile)){
    $EphoneErr = 1;
    header('location:../profile.php?EphoneErr='.$EphoneErr);
}
elseif(!preg_match('((?=.*[0-9])(?=.{11,15})+)', $mobile)){
    $EphoneErr = 2;
    header('location:../profile.php?EphoneErr='.$EphoneErr);
}
else{
    require "../database/database.php";
    $_SESSION['username'] = $userName;
    $update_query = "UPDATE `user_log` SET username='$userName', email='$email', password='$passWord', mobile='$mobile' WHERE id='$user_id'";
    $updated = mysqli_query($databaseConnect, $update_query);
    header('location:../profile.php');
}
?>