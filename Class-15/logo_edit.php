<?php
session_start();
if (isset($_SESSION['adminId'])){
    $adminId = $_SESSION['adminId'];
    require 'database/database.php';
    $selectAdmin = "SELECT * FROM `admin` WHERE id='$adminId'";
    $adminData = mysqli_query($databaseConnect, $selectAdmin);
    $afterAssoc = mysqli_fetch_assoc($adminData);
    $_SESSION['username'] = $afterAssoc['username'];

}
else{
    header('location:validate/logout.php');
}
require 'include/panel_header.php';
require 'include/edit_logo.php';
require 'include/panel_footer.php';
?>