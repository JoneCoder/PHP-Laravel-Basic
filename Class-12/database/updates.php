<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/2/2019
 * Time: 12:35 AM
 */
session_start();
$_SESSION['update'] = 'profile_pic';
$user_id = $_POST['id'];
$photo = $_FILES['profile_pic'];
$_SESSION['user_id'] = $user_id;
$username = $_SESSION['username'];
$_SESSION['username'] = $username;
$photoName = $photo['name'];
$photoSize = $photo['size'];
$photoTemp = $photo['tmp_name'];
$extension = explode('.',$photoName);
$last_extension = end($extension);
$allowed_extension = array('jpg', 'jpeg', 'png');
if(empty($last_extension)){
    $fliedErr = 1;
    header('location:../profile.php?fliedErr='.$fliedErr);
}
elseif (!in_array($last_extension, $allowed_extension)){
    $typeErr = 1;
    header('location:../profile.php?typeErr='.$typeErr);
}
elseif ($photoSize > 100000){
    $sizeErr = 1;
    header('location:../profile.php?sizeErr='.$sizeErr);
}
else{
    require 'database.php';
    $file_name = $user_id.'.'.$last_extension;
    $file_location = '../uploads/'.$file_name;
    move_uploaded_file($photoTemp, $file_location);
    $file_save_to_db = $file_name;

    $update = "UPDATE `user_content` SET photo='$file_save_to_db' WHERE id='$user_id'";
    $update_result = mysqli_query($databaseConnect, $update);

    $update_post = "UPDATE `user_post` SET pro_pic='$file_save_to_db' WHERE user_id='$user_id'";
    $post_pro = mysqli_query($databaseConnect, $update_post);
    header('location:../profile.php?user_id='.$username);
}