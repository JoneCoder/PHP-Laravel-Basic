<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/3/2019
 * Time: 1:53 AM
 */
session_start();
require 'database/database.php';
require 'include/search.php';
if($_SESSION['my_profile'] === 'ProFile'){
    $user_id = $_SESSION['user_id'];

    $select_user = "SELECT * FROM user_content WHERE id='$user_id'";
    $user_data = mysqli_query($databaseConnect, $select_user);
    $after_assoc = mysqli_fetch_assoc($user_data);
}
elseif ($_SESSION['update'] === 'cover_pic'){
    $user_id = $_SESSION['user_id'];

    $select_user = "SELECT * FROM user_content WHERE id='$user_id'";
    $user_data = mysqli_query($databaseConnect, $select_user);
    $after_assoc = mysqli_fetch_assoc($user_data);
}
else{
    header('location:login.php');
}
require 'include/header.php';
require 'include/navbar.php';

require 'include/banner.php';
require 'include/pro_content.php';

require 'include/footer.php';
?>

