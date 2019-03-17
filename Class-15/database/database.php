<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/7/2019
 * Time: 12:35 PM
 */
$hostname = 'localhost';
$username = 'root';
$passWord = '';
$databaseName = 'user_message';
$databaseConnect = mysqli_connect($hostname, $username, $passWord, $databaseName);

/*if ($databaseConnect){
    echo 'Database connected!';
}
else{
    echo 'Database not connected!';
}*/