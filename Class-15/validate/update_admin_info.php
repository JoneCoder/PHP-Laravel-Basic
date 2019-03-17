<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/11/2019
 * Time: 11:08 PM
 */
session_start();
$userName = validate($_POST['userName']);
$fullName = validate($_POST['fullName']);
$email = validate($_POST['email']);

function validate($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
if (isset($_SESSION['adminId'])){
    $adminId = $_SESSION['adminId'];
    if (strlen($userName) > 10){
        $userNameErr = 1;
        header('location:../admin_profile.php?userNameErr='.$userNameErr);
    }
    elseif (strlen($fullName) > 50){
        $fullNameErr = 1;
        header('location:../admin_profile.php?fullNameErr='.$fullNameErr);
    }
    elseif (!preg_match('(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)', $email)){
        $emailErr = 1;
        header('location:../admin_profile.php?emailErr='.$emailErr);
    }
    else{
        require '../database/database.php';
        $selectAdmin = "SELECT * FROM `admin`";
        $adminData = mysqli_query($databaseConnect, $selectAdmin);
        foreach ($adminData as $value){
                if ($value['id'] !== $adminId){
                    if ($userName === $value['username']){
                        $userNameErr = 2;
                        header('location:../admin_profile.php?userNameErr='.$userNameErr);
                    }
                    elseif ($email === $value['email']){
                        $emailErr = 2;
                        header('location:../admin_profile.php?emailErr='.$emailErr);
                    }
                    else{
                        $updateAdmin = "UPDATE `admin` SET `username`='$userName',`fullname`='$fullName',`email`='$email' WHERE id='$adminId'";
                        $updated = mysqli_query($databaseConnect, $updateAdmin);

                        $selectAdmin = "SELECT * FROM `admin` WHERE id='$adminId'";
                        $adminData = mysqli_query($databaseConnect, $selectAdmin);
                        $afterAssoc = mysqli_fetch_assoc($adminData);

                        $userName = $afterAssoc['username'];
                        header('location:../admin_profile.php?myadmin='.$userName);
                    }
                }
        }
    }
}
else{
    header('location:logout.php');
}