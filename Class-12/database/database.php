<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/27/2019
 * Time: 12:27 AM
 */
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'user_account';

$databaseConnect = mysqli_connect($hostname, $username, $password, $databaseName);

/*if ($databaseConnect){
    echo 'Database connected!';
}
else{
    echo 'Database not connect!';
}*/