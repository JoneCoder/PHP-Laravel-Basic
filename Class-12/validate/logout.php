<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/3/2019
 * Time: 10:43 AM
 */
session_start();
session_destroy();
header('location:../login.php');