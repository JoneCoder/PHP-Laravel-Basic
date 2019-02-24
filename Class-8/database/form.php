<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/12/2019
 * Time: 10:51 AM
 */
$emailOrPhone = $_POST['emailOrPhone'];
$Password = $_POST['password'];

require "database.php";

/*if($databaseConnection){
    echo "Database connected!";
}
else{
    echo "Database not connected!";
}*/

$select_query = "SELECT COUNT(*) as Jone FROM user_info WHERE emailOrPhone='$emailOrPhone' and password='$Password'";

$result = mysqli_query($databaseConnection, $select_query);


$after_assoc = mysqli_fetch_assoc($result);


if($after_assoc['Jone'] == 1){
    header('location:../welcome.php');
}
else{
    $typeErr = 1;
    header('location:../login.php?typeErr='. $typeErr);
}
?>