<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/4/2019
 * Time: 12:10 AM
 */
session_start();
require '../database/database.php';
if (isset($_SESSION['adminId'])){
    $adminId = $_SESSION['adminId'];
    $selectAdmin = "SELECT * FROM `admin` WHERE id='$adminId'";
    $adminData = mysqli_query($databaseConnect, $selectAdmin);
    $afterAssoc = mysqli_fetch_assoc($adminData);
    $pass = $afterAssoc['password'];
    if ($_POST['currPass']  !== $pass){
        $passErr = 1;
        header('location:../admin_profile.php?passErr='.$passErr);
    }
    elseif ($pass === $_POST['newPass']){
        $matchErr = 1;
        header('location:../admin_profile.php?matchErr='.$matchErr);
    }
    elseif (!preg_match('(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}))', $_POST['newPass'])){
        $matchErr = 2;
        header('location:../admin_profile.php?matchErr='.$matchErr);
    }
    else{
        $user_id = $_SESSION['user_id'];
        $newPass = $_POST['newPass'];
        $success = 1;

        $update = "UPDATE `admin` SET password='$newPass' WHERE id='$adminId'";
        $update_result = mysqli_query($databaseConnect, $update);
        header('location:../admin_profile.php?message='.$success);
    }
}
else{
    header('location:logout.php');
}

