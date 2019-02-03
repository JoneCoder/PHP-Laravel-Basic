<!--
* Created by PhpStorm.
* User: MR. Shariful
* Date: 2/1/2019
* Time: 11:51 PM
-->
<!DOCTYPE html>
<html>
<head>
    <title>Form validation</title>

    <meta charset="UTF-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="Jone"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$fullName = $firstName." ".$lastName;

$emailAddress = $_POST['emailAddress'];

$password = $_POST['password'];

$conPassword = $_POST['conPassword'];

$phoneNum = $_POST['phoneNum'];

$address = $_POST['address'];

$gender = $_POST['gender'];

$district = $_POST['district'];

$pic = $_POST['pic'];

$agree = $_POST['agree'];

$dateOfBirth = $_POST['dateOfBirth'];

if(empty($firstName)){
    $firstNameError = '';
    $firstNameError = "Please Enter your first name!";
    header('location:index.php?firstNameError='.$firstNameError);
}

if(empty($lastName)){
    $lastNameError = '';
    $lastNameError = "Please enter your last name!";
    header('location:index.php?lastNameError='.$lastNameError);
}

if(empty($emailAddress) || /*preg_match(pattern"(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)", $subject) */ !filter_var($emailAddress,FILTER_VALIDATE_EMAIL) ){
    $emailAddressError = '';
    $emailAddressError = "Please enter a valid email address!";
    header('location:index.php?emailAddressError='. $emailAddressError);
}

if(empty($password) || !preg_match("(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}))", $password) ){
    $passwordError = '';                                                        //Your Password Must Contain At Least 8 Characters!
    $passwordError = "Invalid password! Please follow this instruction!";       //Your Password Must Contain At Least 1 Number!
    header('location:index.php?passwordError='. $passwordError);          //Your Password Must Contain At Least 1 Capital Letter!
}                                                                               //Your Password Must Contain At Least 1 Lowercase Letter!

if(empty($conPassword) || $conPassword != $password){
    $conPasswordError = '';
    $conPasswordError = "Password doesn't match!";
    header('location:index.php?conPasswordError='. $conPasswordError);
}

if(empty($phoneNum)){
    $phoneNumError = '';
    $phoneNumError = "Please enter your valid phone number!";
    header('location:index.php?phoneNumError='. $phoneNumError);
}

if(empty($address)){
    $addressError = '';
    $addressError = "Please enter your address!";
    header('location:index.php?addressError='. $addressError);
}

if(empty($agree)){
    $agreeError = '';
    $agreeError = "Please check trams and condition!";
    header('location:index.php?agreeError='. $agreeError);
}

if(empty($pic)){
    $picError = '';
    $picError = "Please select a image!";
    header('location:index.php?picError='. $picError);
}

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">

                        <tbody>
                            <tr class="table-primary">
                                <td class="text-center">
                                    <img src="<?php
                                    echo $pic;
                                    ?>" alt="profile_pic.jpg" width="200px" height="200px">
                                </td>
                                <td class="text-center text-info">
                                    <?php
                                    date_default_timezone_set("Asia/Dhaka");
                                    echo date("h:i:s A");
                                    ?>
                                </td>
                            </tr>

                            <tr class="table-primary">
                                <td class="br-1">Name:</td>
                                <td>
                                    <?php
                                    echo $fullName;
                                    ?>
                                </td>
                            </tr>

                            <tr class="table-info">
                                <td class="br-1">Email Address:</td>
                                <td>
                                    <?php
                                    echo $emailAddress;
                                    ?>
                                </td>
                            </tr>

                            <tr class="table-primary">
                                <td class="br-1">Phone Number:</td>
                                <td>
                                    <?php
                                    echo $phoneNum;
                                    ?>
                                </td>
                            </tr>

                            <tr class="table-info">
                                <td class="br-1">Address:</td>
                                <td>
                                    <?php
                                    echo $address;
                                    ?>
                                </td>
                            </tr>

                            <tr class="table-primary">
                                <td class="br-1">Gender:</td>
                                <td>
                                    <?php
                                    echo $gender;
                                    ?>
                                </td>
                            </tr>

                            <tr class="table-primary">
                                <td class="br-1">Date of birth:</td>
                                <td>
                                    <?php
                                    echo $dateOfBirth;
                                    ?>
                                </td>
                            </tr>

                            <tr class="table-info">
                                <td class="br-1">District name:</td>
                                <td>
                                    <?php
                                    echo $district;
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
