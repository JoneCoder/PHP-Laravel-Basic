<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/19/2019
 * Time: 12:09 AM
 */
session_start();

if($_SESSION['admin'] === 'Out!'){
    session_destroy();
    header('location:../profile.php');
}
else{
    session_destroy();
    header('location:../login.php');
}
?>