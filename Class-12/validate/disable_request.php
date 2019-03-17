<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/4/2019
 * Time: 12:21 PM
 */
session_start();
if (!empty($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $disableRequest = $_POST['idDisable'];
    $name = $_SESSION['name'];
    $mess = 'I want disable my profile.';
    if ($disableRequest == 101){
        require '../database/database.php';
        $mess_update = "INSERT INTO admin(user_id, username, message) VALUES ('$user_id','$name','$mess')";
        $updated = mysqli_query($databaseConnect, $mess_update);
        $disMessage = 1;
        header('location:../setting_privacy.php?disMessage='.$disMessage);
    }
    else{
        $idDisableErr = 1;
        header('location:../setting_privacy.php?idDisableErr='.$idDisableErr);
    }

}
else{
    header('location:../login.php');
}