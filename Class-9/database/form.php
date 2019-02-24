<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/12/2019
 * Time: 10:51 AM
 */
session_start();
$email = $_POST['email'];
$Password = $_POST['password'];

require 'database.php';
$select_query = "SELECT COUNT(*) as Jone FROM user_data WHERE email='$email' and password='$Password'";
$result = mysqli_query($databaseConnect, $select_query);
$after_assoc = mysqli_fetch_assoc($result);

if($after_assoc['Jone'] == 1){
    $_SESSION['login'] = 'YES!';
    $_SESSION['email'] = $email;
    header('location:../profile.php');
}
else{
    $select_query1 = "SELECT COUNT(*) as Coder FROM user_data WHERE email='$email'";
    $result1 = mysqli_query($databaseConnect, $select_query1);
    $after_assoc1 = mysqli_fetch_assoc($result1);

    $select_query2 = "SELECT COUNT(*) as Coder2 FROM user_data WHERE password='$Password'";
    $result2 = mysqli_query($databaseConnect, $select_query2);
    $after_assoc2 = mysqli_fetch_assoc($result2);

    if(($after_assoc1['Coder'] != 1) && ($after_assoc2['Coder2'] != 1)){
        $typeErr = 1;
        header('location:../login.php?typeErr='. $typeErr);
    }
    elseif($after_assoc1['Coder'] != 1){
        $emailErr = 1;
        header('location:../login.php?emailErr='. $emailErr);
    }
    elseif($after_assoc2['Coder2'] != 1){
        $passErr = 1;
        header('location:../login.php?passErr='. $passErr);
    }
}
?>