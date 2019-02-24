<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/12/2019
 * Time: 10:50 AM
 */
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'registration';

$databaseConnection = mysqli_connect($hostname, $username, $password, $databaseName);

/*if($databaseConnection){
    echo "Database connected!";         //Database connection test
}
else{
    echo "Database not connected!";
}*/
?>