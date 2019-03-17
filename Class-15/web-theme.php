<?php
session_start();
if (isset($_SESSION['adminId'])){
    $adminId = $_SESSION['adminId'];
    require 'database/database.php';
    $selectAdmin = "SELECT * FROM `admin` WHERE id='$adminId'";
    $adminData = mysqli_query($databaseConnect, $selectAdmin);
    $afterAssoc = mysqli_fetch_assoc($adminData);
    $_SESSION['username'] = $afterAssoc['username'];

    $selectTheme = "SELECT * FROM `themes` WHERE id='1'";
    $themeData = mysqli_query($databaseConnect, $selectTheme);
    $afterAssocTheme = mysqli_fetch_assoc($themeData);
    $theme = $afterAssocTheme['theme'];
}
else{
    header('location:validate/logout.php');
}
require 'include/panel_header.php';
require 'include/theme.php';
require 'include/panel_footer.php';
?>