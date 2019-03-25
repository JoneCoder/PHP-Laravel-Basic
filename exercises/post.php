<?php
/*
* print_r($_POST);
* print_r($_FILES);
*/

$status = $_POST['noSubject'];
$file1 = $_FILES['pic1'];   //get the first image.
$file2 = $_FILES['pic2'];   //get the second image.

$fileName1 = $file1['name'];    //Define a variable and into first image original name.
$fileSize1 = $file1['size'];    //Define a variable and into first image original size.
$fileTmp1 = $file1['tmp_name'];  //Define a variable and into first image original tmp location.

$fileName2 = $file2['name'];    //Define a variable and into second image original name.
$fileSize2 = $file2['size'];    //Define a variable and into second image original size.
$fileTmp2 = $file2['tmp_name'];  //Define a variable and into second image original tmp location.


//========process images========//
if (empty($status)){
    header('location:index.php?statusErr=1');                       //check empty field
}
elseif (empty($fileName1)){
    header('location:index.php?pic1Err=1');                         //check empty field
}
elseif (empty($fileName2)){
    header('location:index.php?pic2Err=1');                         //check empty field
}
else{
    $extension1 = explode('.', $fileName1);                      //explode first image name between dot (.) than get last one
    $extension1 = end($extension1);

    $extension2 = explode('.', $fileName2);                      //explode Second image name between dot (.) than get last one
    $extension2 = end($extension2);
    $allowExtension = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];     //Define a array in allow extension.

    if (!in_array($extension1, $allowExtension)){
        header('location:index.php?pic1Err=2');                     //check file extension.
    }
    elseif ($fileSize1 > (10000 * 100)){
        header('location:index.php?pic1Err=3');                     //check file size and allowed lase than 1MB.
    }
    elseif (!in_array($extension2, $allowExtension)){
        header('location:index.php?pic1Err=2');                     //check file extension.
    }
    elseif ($fileSize2 > (10000 * 100)){
        header('location:index.php?pic1Err=3');                     //check file size and allowed lase than 1MB.
    }
    else{
        require 'database.php';
        $insertData = "INSERT INTO `exercise_1`(`status`) VALUES ('$status')";
        $inserted = mysqli_query($databaseConnect, $insertData);        //Insert data for get last id.

        $insertLastId = mysqli_insert_id($databaseConnect);             //get last id.
        $fileName1 = $insertLastId.'first.'.$extension1;                //make first image name
        $fileName2 = $insertLastId.'second.'.$extension2;                //make first image name

        $uploadLocation1 = 'uploads/'.$fileName1;
        move_uploaded_file($fileTmp1,$uploadLocation1);

        $uploadLocation2 = 'uploads/'.$fileName2;
        move_uploaded_file($fileTmp2, $uploadLocation2);

        $update = "UPDATE `exercise_1` SET `pic1`='$fileName1',`pic2`='$fileName2' WHERE id='$insertLastId'";
        $updated = mysqli_query($databaseConnect, $update);        //Update data
        session_start();
        $_SESSION['success'] = 1;
        header('location:index.php');
    }
}
