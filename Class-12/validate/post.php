<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/4/2019
 * Time: 3:12 PM
 */
session_start();
if (isset($_SESSION['user_id'])){
    $_SESSION['update'] = 'update';
    $user_id = $_SESSION['user_id'];
    $_SESSION['user_id'] = $user_id;
    $username = $_POST['username'];
    $_SESSION['username'] = $username;

    $name = $_SESSION['name'];
    $pro_pic = $_SESSION['pro_pic'];
    $status = $_POST['status'];
    $photo = $_FILES['postPic'];

    $photoName = $photo['name'];
    $photoTemp = $photo['tmp_name'];
    $extension = explode('.',$photoName);
    $last_extension = end($extension);
    $allowed_extension = array('jpg', 'jpeg', 'png', 'JPG', 'PNG', 'JPEG');
    if(empty($last_extension)){
        $postFliedErr = 1;
        header('location:../profile.php?postFliedErr='.$postFliedErr);
    }
    elseif (!in_array($last_extension, $allowed_extension)){
        $postTypeErr = 1;
        header('location:../profile.php?postTypeErr='.$postTypeErr);
    }
    else{
        require '../database/database.php';
        $select_post = "SELECT COUNT(*) as userid FROM user_post WHERE user_id=$user_id";
        $user_post = mysqli_query($databaseConnect, $select_post);
        $after_assoc_post = mysqli_fetch_assoc($user_post);

        $postValue = $after_assoc_post['userid'] + 1;
        $file_name = $user_id.'_post_'.$postValue.'.'.$last_extension;
        $file_location = '../user_post/'.$file_name;
        move_uploaded_file($photoTemp, $file_location);
        $file_save_to_db = $file_name;

        $insert_post = "INSERT INTO `user_post`(`user_id`, `photo`, `status`, `name`, `pro_pic`) VALUES ('$user_id','$file_save_to_db','$status','$name','$pro_pic')";
        $update_result = mysqli_query($databaseConnect, $insert_post);
        header('location:../profile.php?user_id='.$username);
    }

}
else{
    header('location:../login.php');
}