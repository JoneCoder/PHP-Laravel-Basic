<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/19/2019
 * Time: 12:06 AM
 */
$userName = valid($_POST['username']);
$email = valid($_POST['email']);
$passWord = valid($_POST['password']);
$mobile = valid($_POST['mobile']);
$image = $_FILES['image'];
$after_explode = explode('.',$image['name']);
$extension = end($after_explode);
$allowed_extension = ['jpg', 'jpeg', 'png', 'gif'];

function valid($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}

if(empty($userName)){
    $userErr = 1;
    header('location:../registration.php?userErr='.$userErr);
}
elseif(strlen($userName) > 10){
    $userErr = 2;
    header('location:../registration.php?userErr='.$userErr);
}
elseif(empty($email)){
    $emailErr = 1;
    header('location:../registration.php?emailErr='.$emailErr);
}
elseif(!preg_match('(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)', $email)){
    $emailErr = 2;
    header('location:../registration.php?emailErr='.$emailErr);
}
elseif(empty($passWord)){
    $passErr = 1;
    header('location:../registration.php?passErr='.$passErr);
}
elseif(!preg_match('(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}))', $passWord)){
    $passErr = 2;
    header('location:../registration.php?passErr='.$passErr);
}
elseif(empty($mobile)){
    $phoneErr = 1;
    header('location:../registration.php?phoneErr='.$phoneErr);
}
elseif(!preg_match('((?=.*[0-9])(?=.{11,15})+)', $mobile)){
    $phoneErr = 2;
    header('location:../registration.php?phoneErr='.$phoneErr);
}
elseif(empty($image)){
    $imageErr = 1;
    header('location:../registration.php?imageErr='.$imageErr);
}
elseif(!in_array($extension, $allowed_extension)){
    $imageErr = 2;
    header('location:../registration.php?imageErr='.$imageErr);
}
elseif($image['size'] > 500000){
    $imageErr = 3;
    header('location:../registration.php?imageErr='.$imageErr);
}
else{
    require '../database/database.php';
    $select_query = "SELECT COUNT(*) as Jone FROM user_log WHERE email='$email'";
    $query_result = mysqli_query($databaseConnect, $select_query);
    $after_assoc = mysqli_fetch_assoc($query_result);

    $select_query2 = "SELECT COUNT(*) as Coder FROM user_log WHERE username='$userName'";
    $query_result1 = mysqli_query($databaseConnect, $select_query2);
    $after_assoc1 = mysqli_fetch_assoc($query_result1);

    if($after_assoc['Jone'] == 1){
        $emailErr = 3;
        header('location:../registration.php?emailErr='.$emailErr);
    }
    elseif($after_assoc1['Coder'] == 1){
        $userErr = 3;
        header('location:../registration.php?userErr='.$userErr);
    }
    else{
        $insert_query = "INSERT INTO user_log(username, email, password, mobile) VALUES('$userName', '$email', '$passWord', '$mobile')";
        $query_result2 = mysqli_query($databaseConnect, $insert_query);
        $last_id = mysqli_insert_id($databaseConnect);

        $file_name = $last_id.'.'.$extension;
        $file_location = '../uploads/'.$file_name;
        move_uploaded_file($image['tmp_name'], $file_location);
        $file_save_to_db = $file_name;

        $update = "UPDATE `user_log` SET profile_pic='$file_save_to_db' WHERE id='$last_id'";
        $update_result = mysqli_query($databaseConnect, $update);
        header('location:../login.php');
    }
}
?>