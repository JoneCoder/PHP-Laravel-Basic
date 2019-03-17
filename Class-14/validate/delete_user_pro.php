<?php
session_start();
require '../database/database.php';
if (isset($_SESSION['adminId'])){
    $adminId = $_SESSION['adminId'];
    $idDisable = $_POST['idDisable'];
    if (empty($idDisable)){
        $idDisableErr = 1;
        header('location:../admin_profile.php?idDisableErr='.$idDisableErr);
    }
    else{
        $deleteAdmin = "DELETE FROM `admin` WHERE id='$adminId'";
        $deleted = mysqli_query($databaseConnect, $deleteAdmin);
        header('location:logout.php');
    }
}
else{
    header('location:logout.php');
}