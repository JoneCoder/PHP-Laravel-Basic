<?php
session_start();
if (isset($_SESSION['adminId'])){
    $adminId = $_SESSION['adminId'];
    $_SESSION['adminId'] = $adminId;
    //$_SESSION['username'] = $_GET['myadmin'];
    require 'database/database.php';
    $selectAdmin = "SELECT * FROM `admin` WHERE id='$adminId'";
    $adminData = mysqli_query($databaseConnect, $selectAdmin);
    $afterAssoc = mysqli_fetch_assoc($adminData);

    if(isset($_GET['search'])){
        $searchData = $_GET['search'];
        $selectUser = "SELECT * FROM `message` WHERE id like '%$searchData%' OR username like '%$searchData%' OR email like '%$searchData%'";
        $userData = mysqli_query($databaseConnect, $selectUser);
        $afterAssocUser = mysqli_fetch_assoc($userData);
    }
    else{
        $selectUser = "SELECT * FROM `message`";
        $userData = mysqli_query($databaseConnect, $selectUser);
        $afterAssocUser = mysqli_fetch_assoc($userData);
    }

}
else{
    header('location:login_admin.php');
}
require 'include/panel_header.php';
require 'include/user_add.php';
require 'include/panel_footer.php';
?>