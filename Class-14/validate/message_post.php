<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/7/2019
 * Time: 11:41 AM
 */
$userName = validData($_POST['userName']);
$email = validData($_POST['email']);
$message = validData($_POST['message']);

function validData($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
require 'empty_field.php';
if (strlen($userName) > 50 ){
    $userNameErr = 2;
    header('location:../index.php#contact?userNameErr='.$userNameErr);
}
elseif (!filter_var($email.FILTER_VALIDATE_EMAIL)){
    $emailErr = 2;
    header('location:../index.php#contact?emailErr='.$emailErr);
}
elseif (str_word_count($message) > 100){
    $messageWordErr =  2;
    header('location:../index.php#contact?messageWordErr='.$messageWordErr);
}
else{
    $photoName = $_FILES['photo']['name'];
    $photoSize = $_FILES['photo']['size'];
    $photoTmpLoc = $_FILES['photo']['tmp_name'];
    $photoExtension = end(explode('.',$photoName));
    $allowExtension = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
    if (!in_array($photoExtension, $allowExtension)){
        $fileErr = 1;
        header('location:../index.php#contact?fileErr='.$fileErr);
    }
    elseif ($photoSize > (1000 * 500)){
        $fileErr = 2;
        header('location:../index.php#contact?fileErr='.$fileErr);
    }
    else{
        session_start();
        require '../database/database.php';
        $insertMessage = "INSERT INTO message(username, email, message) VALUES('$userName', '$email', '$message')";
        $inserted = mysqli_query($databaseConnect, $insertMessage);

        $insertLastId = mysqli_insert_id($databaseConnect);
        $fileName = $insertLastId.'.'.$photoExtension;
        $photoDestination = "../uploads/".$fileName;
        move_uploaded_file($photoTmpLoc, $photoDestination);
        $uploadPhoto = "UPDATE `message` SET `photo`='$fileName' WHERE id='$insertLastId'";
        $uploaded = mysqli_query($databaseConnect, $uploadPhoto);
        $_SESSION['success'] = 'message sent';
        header('location:../index.php#contact');
    }
}