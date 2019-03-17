<?php
session_start();
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    require '../database/database.php';
    $selectUser = "SELECT photo FROM `admin` WHERE role='3'";
    $userData = mysqli_query($databaseConnect, $selectUser);
    foreach ($userData as $item){
        foreach ($item as $value){
            $targetLink = "../admin_pro/".$value;
            unlink($targetLink);
        }
    }
    $selectUser = "DELETE FROM `admin` WHERE role='3';";
    $deleted = mysqli_query($databaseConnect, $selectUser);
    header('location:../panel.php?myadmin='.$username);
}
else{
    header('location:../login_admin.php');
}