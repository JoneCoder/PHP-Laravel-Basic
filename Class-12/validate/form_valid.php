<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/26/2019
 * Time: 10:47 PM
 */
$firstName = valid_data($_POST['first_name']);
$lastName = valid_data($_POST['last_name']);
$email  = valid_data($_POST['email']);
$phone = valid_data($_POST['phone']);
$address = valid_data($_POST['address']);
$city = valid_data($_POST['city']);
$state = valid_data($_POST['state']);
$zip = valid_data($_POST['zip']);
$website = valid_data($_POST['website']);
$hosting = valid_data($_POST['hosting']);
$gender = valid_data($_POST['gender']);
$comment = valid_data($_POST['comment']);

function valid_data($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}

require 'empty_field.php';

if(!preg_match('(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)', $email)){
    $emailErr = 2;
    header('location:../index.php?emailErr='.$emailErr);
}
elseif(!preg_match('((?=.*[0-9])(?=.{11,})+)', $phone)){
    $phoneErr = 2;
    header('location:../index.php?phoneErr='.$phoneErr);
}
elseif(!filter_var($website. FILTER_VALIDATE_URL)){
    $websiteErr = 2;
    header('location:../index.php?websiteErr='.$websiteErr);
}
else{
    require '../database/database.php';
    $user_email = "SELECT COUNT(*) as permission FROM `user_content` WHERE email='$email' ";
    $permission_result = mysqli_query($databaseConnect, $user_email);
    $after_assoc = mysqli_fetch_assoc($permission_result);
    $email_permission = $after_assoc['permission'];

    $user_phone = "SELECT COUNT(*) as permission2 FROM `user_content` WHERE phone=$phone";
    $permission_result = mysqli_query($databaseConnect, $user_phone);
    $after_assoc = mysqli_fetch_assoc($permission_result);
    $phone_permission = $after_assoc['permission2'];

    if($email_permission >= 1){
        $emailErr = 3;
        header('location:../index.php?emailErr='.$emailErr);
    }
    elseif ($phone_permission >= 1){
        $phoneErr = 3;
        header('location:../index.php?phoneErr='.$phoneErr);
    }
    else{
        if ($gender == 'male'){
            $def_pic = 'default_male.jpg';
        }
        elseif ($gender == 'female'){
            $def_pic = 'default_female.jpg';
        }
        session_start();
        $_SESSION['register'] = 'registered';
        $fullName = $firstName.' '.$lastName;
        $insert_data = "INSERT INTO `user_content`(`name`, `email`, `phone`, `address`, `city`, `state`, `zip_code`, `website`, `do_you_have_hosting?`, `comment`, `photo`, `gender`) VALUES ('$fullName', '$email', '$phone', '$address', '$city', '$state', '$zip', '$website', '$hosting', '$comment', '$def_pic', '$gender')";
        $insert_result = mysqli_query($databaseConnect, $insert_data);
        $last_id = mysqli_insert_id($databaseConnect);
        $_SESSION['user_id'] = $last_id;
        $username_exp = explode(' ', $firstName);
        $username = end($username_exp);
        $_SESSION['username'] = $username;
        setcookie('cookie', 'register');
        header('location:../profile.php?user_id='.$username);
    }
}
?>