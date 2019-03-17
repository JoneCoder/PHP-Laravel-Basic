<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/3/2019
 * Time: 10:58 PM
 */
session_start();
require 'database/database.php';
require 'include/search.php';
if (!empty($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];

    $select_user = "SELECT * FROM user_content WHERE id='$user_id'";
    $user_data = mysqli_query($databaseConnect, $select_user);
    $after_assoc = mysqli_fetch_assoc($user_data);

    $_SESSION['name'] = $after_assoc['name'];
}
else{
    header('location:login.php');
}
$_SESSION['pass'] = $after_assoc['password'];
$_SESSION['user_id'] = $user_id;
require 'include/header.php';
require 'include/navbar.php';

require 'include/setting_content.php';

require 'include/footer.php';