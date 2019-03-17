<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/27/2019
 * Time: 12:53 AM
 */
session_start();
require 'database/database.php';
if(isset($_GET['search'])){
    $searchData = $_GET['search'];
    $select_post = "SELECT * FROM user_post WHERE name like '%$searchData%' OR status like '%$searchData%'";
    $user_post = mysqli_query($databaseConnect, $select_post);
    $after_assoc_post = mysqli_fetch_assoc($user_post);
}
else{
    $select_post = "SELECT * FROM user_post";
    $user_post = mysqli_query($databaseConnect, $select_post);
    $after_assoc_post = mysqli_fetch_assoc($user_post);
}
if ((isset($_SESSION['register'])) || (isset($_SESSION['login'])) || (isset($_SESSION['update']))){
    //require 'validate/cookie.php';
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $_SESSION['user_id'] = $user_id;

    $select_user = "SELECT * FROM `user_content` WHERE id=$user_id";
    $user_info = mysqli_query($databaseConnect, $select_user);
    $after_assoc = mysqli_fetch_assoc($user_info);

    $_SESSION['name'] = $after_assoc['name'];
    $_SESSION['pro_pic'] = $after_assoc['photo'];
}
else{
    header('location:index.php');
}

require 'include/header.php';
require 'include/navbar.php';

require 'include/profile_post.php';
require 'include/search_not_found.php';
if (!empty($after_assoc_post['post'])){
    foreach ($user_post as $item){
        require 'include/post_view.php';
    }
}

require 'include/pro_modal.php';
require 'include/footer.php';
?>