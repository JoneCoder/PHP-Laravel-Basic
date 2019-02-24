<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/12/2019
 * Time: 10:48 AM
 */
require "../database/database.php";

/*if($databaseConnection){
    echo "Database connected!";         //Database connection test
}
else{
    echo "Database not connected!";
}*/

$select_query = "SELECT COUNT(*) as Jone FROM user_info WHERE emailOrPhone='$emailOrPhone'";

$result = mysqli_query($databaseConnection, $select_query);
$after_assoc = mysqli_fetch_assoc($result);

//Form data validation
$firstName = validate_all($_POST['firstName']);
$lastName = validate_all($_POST['lastName']);
$emailOrPhone = $_POST['emailOrPhone'];
$password = $_POST['password'];
$confPassword = $_POST['confPassword'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];
$address = validate_all($_POST['address']);
$agree = $_POST['agree'];

function validate_all($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(empty($firstName)){
    $firstNameErr = 1;
    header('location:../register.php?firstNameErr='.$firstNameErr);
}
elseif(empty($lastName)){
    $lastNameErr = 1;
    header('location:../register.php?lastNameErr='.$lastNameErr);
}
elseif (!preg_match('(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)', $emailOrPhone) && !preg_match('((?=.*[0-9])+)', $emailOrPhone)){
    $emailOrPhoneErr = 1;
    header('location:../register.php?emailOrPhoneErr='.$emailOrPhoneErr);
}
elseif($after_assoc['Jone'] == 1){
    $emailOrPhoneErr = 2;
    header('location:../register.php?emailOrPhoneErr='.$emailOrPhoneErr);
}
elseif(empty($_POST['password']) || !preg_match('(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}))', $_POST['password'])){
    $passErr = 1;
    header('location:../register.php?passErr='.$passErr);
}
elseif ($password != $confPassword){
    $confPasswordErr = 1;
    header('location:../register.php?confPasswordErr='.$confPasswordErr);
}
elseif (empty($dateOfBirth)){
    $dateOfBirthErr = 1;
    header('location:../register.php?dateOfBirthErr='.$dateOfBirthErr);

}
elseif (empty($address)){
    $addressErr = 1;
    header('location:../register.php?addressErr='.$addressErr);

}
elseif (empty($agree)){
    $agreeErr = 1;
    header('location:../register.php?agreeErr='.$agreeErr);

}
//insert data into database
else{
    if(preg_match('(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)', $emailOrPhone)){
        $emailOrPhone1 = $emailOrPhone;
    }
    elseif (preg_match('((?=.*[0-9])+)', $emailOrPhone)){
        $emailOrPhone1 = $emailOrPhone;
    }
    $fullName = $firstName.' '. $lastName;

    /*echo $fullName.'<br>';
    echo $emailOrPhone1.'<br>';
    echo $password.'<br>';
    echo $dateOfBirth.'<br>';
    echo $gender.'<br>';
    echo $address.'<br>';*/

    $insert_query = "INSERT INTO user_info( name, emailOrPhone, password, dateOfBirth, gender, address) VALUES ('$fullName', '$emailOrPhone1', '$confPassword', '$dateOfBirth', '$gender', '$address')";

    $result = mysqli_query($databaseConnection, $insert_query);

    header('location:../login.php');
}
?>