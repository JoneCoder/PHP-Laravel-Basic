<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/4/2019
 * Time: 10:30 PM
 */
if(empty($_POST['password']) || !preg_match('(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}))', $_POST['password'])){
    $passErr = '';
    $passErr = 'Invalid password!';
    header('location:index.php?passErr='.$passErr);
}

if(empty($_POST['email']) || !preg_match('(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)', $_POST['email'])){
    $emailErr = '';
    $emailErr = 'Invalid E-mail address!';
    header('location:index.php?emailErr='.$emailErr);
}

if(empty($_POST['website']) || !filter_var($_POST['website']. FILTER_VALIDATE_URL)){
    $websiteErr = '';
    $websiteErr = 'Invalid URL!';
    header('location:index.php?websiteErr='.$websiteErr);
}

if(empty($_POST['nickName'])){
    $nickNameErr = '';
    $nickNameErr = 'Invalid URL!';
    header('location:index.php?nickNameErr='.$nickNameErr);
}

if(empty($_POST['firstName'])){
    $firstNameErr = '';
    $firstNameErr = 'Invalid URL!';
    header('location:index.php?firstNameErr='.$firstNameErr);
}

if(empty($_POST['lastName'])){
    $lastNameErr = '';
    $lastNameErr = 'Invalid URL!';
    header('location:index.php?lastNameErr='.$lastNameErr);
}

if(empty($_POST['agree'])){
    $agreeErr = '';
    $agreeErr = 'Invalid URL!';
    header('location:index.php?agreeErr='.$agreeErr);
}
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>PHP Lab Practice for Form Validation</title>

    <meta charset="UTF-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="Jone"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-9 ml-auto mr-auto mt-5">
            <table class="table table-dark">
                <thead>
                <th>SL. No</th>
                <th>Name</th>
                <th>Nick Name</th>
                <th>E-mail Address</th>
                <th>Website Address</th>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <?php
                        echo $_POST['firstName'].' '.$_POST['lastName'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['nickName'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['email'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['website'];
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
