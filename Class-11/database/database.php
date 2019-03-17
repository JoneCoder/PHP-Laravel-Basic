<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/19/2019
 * Time: 12:04 AM
 */
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'registration';

$databaseConnect = mysqli_connect($hostname, $username, $password, $databaseName);

//Database connection checking.
/*if ($databaseConnect){
    echo "Yes! Database connected";
}
else{
    echo "No! Database not connected!";
}*/
?>