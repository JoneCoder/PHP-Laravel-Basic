<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/7/2019
 * Time: 7:36 PM
 */
session_start();
unset($_SESSION['adminId']);
header('location:../login_admin.php');