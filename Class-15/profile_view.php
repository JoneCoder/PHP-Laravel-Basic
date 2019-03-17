<?php
session_start();
if (isset($_SESSION['adminId'])){
    $adminId = $_SESSION['adminId'];
    $user_id = $_GET['user_id'];
    require 'database/database.php';
    $selectAdmin = "SELECT * FROM `admin` WHERE id='$adminId'";
    $adminData = mysqli_query($databaseConnect, $selectAdmin);
    $afterAssoc = mysqli_fetch_assoc($adminData);

    $selectUser = "SELECT * FROM `message` WHERE id=$user_id";
    $userData = mysqli_query($databaseConnect, $selectUser);
    $afterAssocUser = mysqli_fetch_assoc($userData);

}
else{
    header('location:../login_admin.php');
}
require 'include/panel_header.php';
require 'include/profile_view.php';
require 'include/panel_footer.php';
?>