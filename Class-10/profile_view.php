<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/18/2019
 * Time: 10:39 PM
 -->
<?php
session_start();
if($_SESSION['admin'] === 'Out!'){
    $id = $_GET['id'];
    require "database/database.php";
    $user_profile = "SELECT * FROM `user_log` WHERE id='$id' ";
    $profile = mysqli_query($databaseConnect, $user_profile);
    $after_assoc = mysqli_fetch_assoc($profile);

    $id = $after_assoc['id'];
    $userName = $after_assoc['username'];
    $email = $after_assoc['email'];
    $passWord = $after_assoc['password'];
    $mobile = $after_assoc['mobile'];
}
else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>Profile</title>

    <meta charset="UTF-8"/>
    <meta name="author" content="Jone"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-9 m-auto bg-primary">
            <div class="row">
                <div class="col-9 text-left text-white p-2">
                    <h3>Welcome To My Profile Dear Admin!</h3>
                </div>
                <div class="col-3 text-right p-2">
                    <a href="admin.php" class="btn btn-success" >Admin</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 m-auto">
            <table class="table table-primary">
                <tr>
                    <td>
                        username
                    </td>
                    <td>
                        <?php
                        echo $userName;
                        ?>
                    </td>
                    <td>
                        ID
                    </td>
                    <td>
                        <?php
                        echo $id;
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        E-mail
                    </td>
                    <td>
                        <?php
                        echo $email;
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <?php
                        $pass = md5($passWord);
                        echo $pass;
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Mobile
                    </td>
                    <td>
                        <?php
                        echo $mobile;
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>