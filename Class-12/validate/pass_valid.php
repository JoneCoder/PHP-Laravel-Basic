<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/4/2019
 * Time: 12:10 AM
 */
session_start();
if (isset($_SESSION['pass'])){
    $pass = $_SESSION['pass'];
    if ($_POST['currPass']  !== $pass){
        $passErr = 1;
        header('location:../setting_privacy.php?passErr='.$passErr);
    }
    elseif ($pass === $_POST['newPass']){
        $matchErr = 1;
        header('location:../setting_privacy.php?matchErr='.$matchErr);
    }
    elseif (!preg_match('(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}))', $_POST['newPass'])){
        $matchErr = 2;
        header('location:../setting_privacy.php?matchErr='.$matchErr);
    }
    else{
        $user_id = $_SESSION['user_id'];
        $newPass = $_POST['newPass'];
        $success = 1;

        require '../database/database.php';
        $update = "UPDATE `user_content` SET password='$newPass' WHERE id='$user_id'";
        $update_result = mysqli_query($databaseConnect, $update);
        header('location:../setting_privacy.php?message='.$success);
    }
}
else{
    header('location:../login.php');
}

