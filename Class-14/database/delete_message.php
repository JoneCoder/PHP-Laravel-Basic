<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/8/2019
 * Time: 12:42 AM
 */
session_start();
require 'database.php';
$adminId = $_SESSION['adminId'];
$selectAdmin = "SELECT username FROM admin WHERE id='$adminId'";
$adminData = mysqli_query($databaseConnect, $selectAdmin);
$afterAssoc = mysqli_fetch_assoc($adminData);
$username = $afterAssoc['username'];

$selectUser = "SELECT photo FROM `message`";
$userData = mysqli_query($databaseConnect, $selectUser);
foreach ($userData as $item){
    foreach ($item as $value){
        $targetLink = "../uploads/".$value;
        unlink($targetLink);
    }
}

$selectDataTable = "TRUNCATE message";
$deleted = mysqli_query($databaseConnect, $selectDataTable);
header('location:../panel.php?myadmin='.$username);