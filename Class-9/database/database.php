<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/16/2019
 * Time: 2:10 PM
 */
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'registration';

$databaseConnect = mysqli_connect($hostname, $username, $password, $databaseName);

/*if($databaseConnect){
    echo "Database connected!";
}
else{
    echo "Database not connected!";
}*/
?>