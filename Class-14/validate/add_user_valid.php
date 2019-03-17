<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/19/2019
 * Time: 12:06 AM
 */
$userName = valid($_POST['username']);
$fullName = valid($_POST['fullName']);
$email = valid($_POST['email']);
$pass = valid($_POST['password']);
$role = valid($_POST['role']);
$photo = $_FILES['photo'];

function valid($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}

//photo process//
$photoName = $photo['name'];
$photoSize = $photo['size'];
$photoTmp = $photo['tmp_name'];
$allowExtension = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
$photoName = end(explode('.',$photoName));


if(empty($userName)){
    $userErr = 1;
    header('location:../add_user.php?userErr='.$userErr);
}
elseif(strlen($userName) > 10){
    $userErr = 2;
    header('location:../add_user.php?userErr='.$userErr);
}
elseif(empty($fullName)){
    $fullNameErr = 1;
    header('location:../add_user.php?fullNameErr='.$fullNameErr);
}
elseif(strlen($fullName) > 50){
    $fullNameErr = 2;
    header('location:../add_user.php?fullNameErr='.$fullNameErr);
}
elseif(empty($email)){
    $emailErr = 1;
    header('location:../add_user.php?emailErr='.$emailErr);
}
elseif(!preg_match('(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)', $email)){
    $emailErr = 2;
    header('location:../add_user.php?emailErr='.$emailErr);
}
elseif(empty($pass)){
    $passErr = 1;
    header('location:../add_user.php?passErr='.$passErr);
}
elseif(!preg_match('(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}))', $pass)){
    $passErr = 2;
    header('location:../add_user.php?passErr='.$passErr);
}
elseif(empty($role)){
    $roleErr = 1;
    header('location:../add_user.php?roleErr='.$roleErr);
}
elseif(empty($photo)){
    $photoErr = 1;
    header('location:../add_user.php?photoErr='.$photoErr);
}
elseif (!in_array($photoName, $allowExtension)){
    $photoErr = 2;
    header('location:../add_user.php?photoErr='.$photoErr);
}
elseif ($photoSize > (10000 * 10)){
    $photoErr = 3;
    header('location:../add_user.php?photoErr='.$photoErr);
}
else{
    require '../database/database.php';
    $select_query = "SELECT * FROM admin WHERE email='$email' and username='$userName'";
    $query_result = mysqli_query($databaseConnect, $select_query);
    $after_assoc = mysqli_fetch_assoc($query_result);

    $adminEmail = $after_assoc['email'];
    $userAdmin = $after_assoc['username'];

    if($email === $adminEmail){
        $emailErr = 3;
        header('location:../add_user.php?emailErr='.$emailErr);
    }
    elseif($userName === $userAdmin){
        $userErr = 3;
        header('location:../add_user.php?userErr='.$userErr);
    }
    else{
        $insertAdmin = "INSERT INTO `admin`(username, fullname, email, password, role) VALUES ('$userName', '$fullName', '$email', '$pass', '$role')";
        $inserted = mysqli_query($databaseConnect, $insertAdmin);

        $lastId = mysqli_insert_id($databaseConnect);
        $photoName = $lastId.'.'.$photoName;
        $photoDestination = "../admin_pro/".$photoName;
        move_uploaded_file($photoTmp, $photoDestination);

        $updatePhoto = "UPDATE `admin` SET `photo`='$photoName' WHERE id='$lastId'";
        $updated = mysqli_query($databaseConnect, $updatePhoto);
        header('location:logout.php');
    }
}
?>