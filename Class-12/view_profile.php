<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/3/2019
 * Time: 1:53 AM
 */
session_start();
if($_SESSION['my_profile'] === 'ProFile'){
    $user_id = $_SESSION['user_id'];

    require 'database/database.php';
    $select_user = "SELECT * FROM user_content WHERE id='$user_id'";
    $user_data = mysqli_query($databaseConnect, $select_user);
    $after_assoc = mysqli_fetch_assoc($user_data);

    if(isset($_GET['search'])){
        $searchData = $_GET['search'];
        $select_post = "SELECT * FROM user_post WHERE status like '%$searchData%'";
        $user_post = mysqli_query($databaseConnect, $select_post);
        $after_assoc_post = mysqli_fetch_assoc($user_post);
    }
    else{
        $select_post = "SELECT * FROM user_post WHERE user_id=$user_id";
        $user_post = mysqli_query($databaseConnect, $select_post);
        $after_assoc_post = mysqli_fetch_assoc($user_post);
    }
}
elseif ($_SESSION['update'] === 'cover_pic'){
    $user_id = $_SESSION['user_id'];

    require 'database/database.php';
    $select_user = "SELECT * FROM user_content WHERE id='$user_id'";
    $user_data = mysqli_query($databaseConnect, $select_user);
    $after_assoc = mysqli_fetch_assoc($user_data);

    if(isset($_GET['search'])){
        $searchData = $_GET['search'];
        $select_post = "SELECT * FROM user_post WHERE status like '%$searchData%'";
        $user_post = mysqli_query($databaseConnect, $select_post);
        $after_assoc_post = mysqli_fetch_assoc($user_post);
    }
    else{
        $select_post = "SELECT * FROM user_post WHERE user_id=$user_id";
        $user_post = mysqli_query($databaseConnect, $select_post);
        $after_assoc_post = mysqli_fetch_assoc($user_post);
    }
}
else{
    header('location:login.php');
}
require 'include/header.php';
require 'include/navbar.php';

require 'include/banner.php';
require 'include/profile_post.php';
require 'include/search_not_found.php';
if ($after_assoc_post['user_id'] == $user_id){
    foreach ($user_post as $item){
        require 'include/post_view.php';
    }
}
require 'include/footer.php';
?>

