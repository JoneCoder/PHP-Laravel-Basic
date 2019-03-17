<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/20/2019
 * Time: 1:23 PM
 */
session_start();
require '../database/database.php';
$user_id_p = $_GET['Puserid'];
$user_id_A = $_GET['Auserid'];
$admin = $_SESSION['adminBack'];
if (!empty($user_id_p)){
    $select_photo = "SELECT profile_pic FROM `user_log` WHERE id='$user_id_p'";
    $photo_data = mysqli_query($databaseConnect, $select_photo);
    $after_assoc = mysqli_fetch_assoc($photo_data);
    $user_pic = $after_assoc['profile_pic'];
    $target_link = '../uploads/'.$user_pic;
    unlink($target_link);

    $delete_query = "DELETE FROM `user_log` WHERE id='$user_id_p'";
    $deleted = mysqli_query($databaseConnect, $delete_query);
    header("location:../registration.php");
}
elseif(!empty($user_id_A)){
    $select_photo = "SELECT profile_pic FROM `user_log` WHERE id='$user_id_A'";
    $photo_data = mysqli_query($databaseConnect, $select_photo);
    $after_assoc = mysqli_fetch_assoc($photo_data);
    $user_pic = $after_assoc['profile_pic'];
    $target_link = '../uploads/'.$user_pic;
    unlink($target_link);

    $delete_query = "DELETE FROM `user_log` WHERE id='$user_id_A'";
    $deleted = mysqli_query($databaseConnect, $delete_query);
    header("location:../admin.php?admin=".$admin);
}
?>