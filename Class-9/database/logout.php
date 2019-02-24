<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/17/2019
 * Time: 11:04 PM
 */
session_start();

session_destroy();

header('location:../login.php');
?>