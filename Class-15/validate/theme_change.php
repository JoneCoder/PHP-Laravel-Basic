<?php
session_start();
if (isset($_SESSION['username'])){
    require '../database/database.php';
    $theme = $_GET['theme'];
    $userName = $_SESSION['username'];
    $changeTheme = "UPDATE `themes` SET `theme`='$theme' WHERE id='1'";
    $themeChange = mysqli_query($databaseConnect, $changeTheme);
    header('location:../web-theme.php?myadmin='.$userName);
}
else{
    header('location:logout.php');
}