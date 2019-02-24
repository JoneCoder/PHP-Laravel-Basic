<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/16/2019
 * Time: 2:12 PM
 */
$firstName = validate($_POST['firstName']);
$lastName = validate($_POST['lastName']);
$email = validate($_POST['email']);
$password = $_POST['password'];
$confPassword = validate($_POST['confPassword']);
$phoneNumber = validate($_POST['phoneNumber']);
$dateOfBirth = validate($_POST['dateOfBirth']);
$gender = validate($_POST['gender']);
$agree = validate($_POST['agree']);
$hobbies = validate($_POST['hobbies']);
$message = validate($_POST['message']);

function validate($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}


if(empty($firstName)){
    $firstNameErr = 1;
    header('location:../registration.php?firstNameErr='.$firstNameErr);
}
elseif(strlen($firstName) > 25){
    $firstNameErr = 2;
    header('location:../registration.php?firstNameErr='.$firstNameErr);
}
elseif (empty($lastName)){
    $lastNameErr = 1;
    header('location:../registration.php?lastNameErr='.$lastNameErr);
}
elseif(strlen($lastName) > 20){
    $lastNameErr = 2;
    header('location:../registration.php?lastNameErr='.$lastNameErr);
}
elseif (empty($email)){
    $emailErr = 1;
    header('location:../registration.php?emailErr='.$emailErr);
}
elseif (!preg_match('(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)', $email)){
    $emailErr = 2;
    header('location:../registration.php?emailErr='.$emailErr);
}
elseif (empty($password)){
    $passErr = 1;
    header('location:../registration.php?passErr='.$passErr);
}
elseif (!preg_match('(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}))', $password) ){
    $passErr = 2;
    header('location:../registration.php?passErr='.$passErr);
}
elseif (empty($confPassword)){
    $confPasswordErr = 1;
    header('location:../registration.php?confPasswordErr='.$confPasswordErr);
}
elseif ($password != $confPassword){
    $confPasswordErr = 2;
    header('location:../registration.php?confPasswordErr='.$confPasswordErr);
}
elseif (empty($phoneNumber)){
    $phoneNumberErr = 1;
    header('location:../registration.php?phoneNumberErr='.$phoneNumberErr);

}
elseif (!preg_match('((?=.*[0-9])(?=.{11,15})+)',$phoneNumber)){
    $phoneNumberErr = 2;
    header('location:../registration.php?phoneNumberErr='.$phoneNumberErr);

}
elseif (empty($dateOfBirth)){
    $dateOfBirthErr = 1;
    header('location:../registration.php?dateOfBirthErr='.$dateOfBirthErr);

}
elseif (empty($gender)){
    $genderErr = 1;
    header('location:../registration.pnp?genderErr='.$genderErr);
}
elseif (empty($agree)){
    $agreeErr = 1;
    header('location:../registration.php?agreeErr='.$agreeErr);
}
elseif (empty($hobbies)){
    $hobbyErr = 1;
    header('location:../registration.php?hobbyErr='.$hobbyErr);
}
elseif (empty($message)){
    $messageErr = 1;
    header('location:../registration.php?messageErr='.$messageErr);
}
elseif(strlen($message) > 500){
    $messageErr = 2;
    header('location:../registration.php?messageErr='.$messageErr);
}
else{
    //check database
    require "../database/database.php";
    $select_query = "SELECT COUNT(*) as Jone FROM user_data WHERE email='$email'";
    $result = mysqli_query($databaseConnect, $select_query);
    $after_assoc = mysqli_fetch_assoc($result);
    $fullName = $firstName.' '.$lastName;

    if (empty($_POST['fav1']) && empty($_POST['fav2']) && empty($_POST['fav3']) && empty($_POST['fav4'])){
        $favErr = 1;
        header('location:../registration.php?favErr='.$favErr);
    }
    elseif ($after_assoc['Jone'] == 1){
        $emailErr = 3;
        header('location:../registration.php?emailErr='.$emailErr);
    }
    else{
        if (empty($_POST['fav1']) && !empty($_POST['fav2']) && !empty($_POST['fav3']) && !empty($_POST['fav4'])){
            $subHobby = $_POST['fav2'].', '.$_POST['fav3'].', '.$_POST['fav4'];
        }
        elseif (empty($_POST['fav1']) && empty($_POST['fav2']) && !empty($_POST['fav3']) && !empty($_POST['fav4'])){
            $subHobby = $_POST['fav3'].', '.$_POST['fav4'];
        }
        elseif (empty($_POST['fav1']) && empty($_POST['fav2']) && empty($_POST['fav3']) && !empty($_POST['fav4'])){
            $subHobby = $_POST['fav4'];
        }
        elseif (!empty($_POST['fav1']) && !empty($_POST['fav2']) && !empty($_POST['fav3']) && empty($_POST['fav4'])){
            $subHobby = $_POST['fav1'].', '.$_POST['fav2'].', '.$_POST['fav3'];
        }
        elseif (!empty($_POST['fav1']) && !empty($_POST['fav2']) && empty($_POST['fav3']) && empty($_POST['fav4'])){
            $subHobby = $_POST['fav1'].', '.$_POST['fav2'];
        }
        elseif (!empty($_POST['fav1']) && !empty($_POST['fav2']) && !empty($_POST['fav3']) && !empty($_POST['fav4'])){
            $subHobby = $_POST['fav1'].', '.$_POST['fav2'].', '.$_POST['fav3'].', '.$_POST['fav4'];
        }
        elseif (!empty($_POST['fav1']) && empty($_POST['fav2']) && empty($_POST['fav3']) && !empty($_POST['fav4'])){
            $subHobby = $_POST['fav1'].', '.$_POST['fav4'];
        }
        elseif (empty($_POST['fav1']) && !empty($_POST['fav2']) && !empty($_POST['fav3']) && empty($_POST['fav4'])){
            $subHobby = $_POST['fav2'].', '.$_POST['fav3'];
        }
        $insert_query = "INSERT INTO user_data(name, email, password, phoneNumber, dateOfBirth, gender, hobby, subhobbies, message) VALUES ('$fullName', '$email', '$confPassword', '$phoneNumber', '$dateOfBirth', '$gender', '$hobbies', '$subHobby', '$message')";
        $result2 = mysqli_query($databaseConnect, $insert_query);
        header('location:../login.php');
    }
}
?>