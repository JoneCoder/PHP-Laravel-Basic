<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/9/2019
 * Time: 10:37 PM
 */
session_start();
$myadmin = $_SESSION['username'];
require '../database/database.php';
$user_id = $_GET['user_id'];
if (!empty($user_id)){
    $select_photo = "SELECT photo FROM `message` WHERE id='$user_id'";
    $photo_data = mysqli_query($databaseConnect, $select_photo);
    $after_assoc = mysqli_fetch_assoc($photo_data);
    $user_pic = $after_assoc['profile_pic'];
    $target_link = '../uploads/'.$user_pic;
    unlink($target_link);

    $delete_query = "DELETE FROM `message` WHERE id='$user_id'";
    $deleted = mysqli_query($databaseConnect, $delete_query);
    header("location:../panel.php?myadmin=".$myadmin);
}