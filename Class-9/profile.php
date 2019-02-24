<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/13/2019
 * Time: 10:00 AM
-->
<?php
session_start();
if($_SESSION['login'] == 'YES!'){
    $email = $_SESSION['email'];
    require 'database/database.php';
    $select_query = "SELECT id, name, email, password, phoneNumber, dateOfBirth, gender, hobby, subhobbies, message as profile FROM user_data WHERE email='$email'";
    $result = mysqli_query($databaseConnect, $select_query);
    foreach ($result as $value){
        $id = $value['id'];
        $name = $value['name'];
        $password = $value['password'];
        $phoneNumber = $value['phoneNumber'];
        $dateOfBirth = $value['dateOfBirth'];
        $gender = $value['gender'];
        $hobby = $value['hobby'];
        $subhobbies = $value['subhobbies'];
    }
}
else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Save Data</title>

    <meta charset="UTF-8">
    <meta name="author" content="Jone">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-9 ml-auto mr-auto mt-5 bg-primary text-white text-left ">
            <div class="row">
                <div class="col-md-9 mt-3 mb-3">
                    <h1>Registration and Login Successfully!</h1>
                </div>
                <div class="col-md-3 mt-3 mb-3 text-right">
                    <button type="button" name="logout" class="btn btn-danger" data-target="#myModal" data-toggle="modal">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 m-auto">
            <table class="table table-dark">
                <tr>
                    <td>Name</td>
                    <td><?php
                        echo $name;
                        ?>
                    </td>
                    <td>ID</td>
                    <td><?php
                        echo $id;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><?php
                        echo $email;
                        ?>
                    </td>
                    <td>Phone Number</td>
                    <td><?php
                        echo $phoneNumber;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><?php
                        echo $password;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Date of birth</td>
                    <td><?php
                        echo $dateOfBirth;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php
                        echo $gender;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Hobbies</td>
                    <td><?php
                        echo $hobby;
                        ?>
                    </td>
                    <td>Fav</td>
                    <td><?php
                        echo $subhobbies;
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>LOGOUT</h3>
                        <input type="button" class="close" data-dismiss="modal" value="X">
                    </div>
                    <div class="modal-body text-center">
                        <div class="text-info">
                            <h4>Are you sure login out?</h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-6 border-right">
                                <a href="database/logout.php">YES!</a>
                            </div>
                            <div class="col-6">
                                <a href="profile.php">NO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>