<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/20/2019
 * Time: 1:23 PM
 */
require '../database/database.php';
$user_id_p = $_GET['Puserid'];
$user_id_A = $_GET['Auserid'];
if (!empty($user_id_p)){
    $delete_query = "DELETE FROM `user_log` WHERE id='$user_id_p'";
    $deleted = mysqli_query($databaseConnect, $delete_query);
    header("location:../registration.php");
}
elseif(!empty($user_id_A)){
    $delete_query = "DELETE FROM `user_log` WHERE id='$user_id_A'";
    $deleted = mysqli_query($databaseConnect, $delete_query);
    header("location:../admin.php");
}
?>