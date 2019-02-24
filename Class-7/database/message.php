<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/12/2019
 * Time: 1:44 AM
 */
require "database.php";

$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$insertData = "INSERT INTO my_message(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

$result = mysqli_query($databaseConnect, $insertData);
header("location:../index.php");
?>