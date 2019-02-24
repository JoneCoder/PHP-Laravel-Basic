<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/12/2019
 * Time: 10:29 AM
-->
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
        <div class="col-md-7 ml-auto mr-auto mt-5 bg-primary form-module">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <h3>Registration form</h3><hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 m-auto text-left">
                    <form action="validate/form_validate.php" method="post">
                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="firstName">First Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="firstName" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['firstNameErr'])){
                                        echo "Please fill out this field.";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="lastName">Last Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['lastNameErr'])){
                                        echo "Please fill out this field.";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="emailOrPhone">E-mail or Phone</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="emailOrPhone" placeholder="E-mail or Phone number" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['emailOrPhoneErr'])){
                                        if($_GET['emailOrPhoneErr'] == 1){
                                            echo "Email or Phone number invalid!";
                                        }
                                        elseif ($_GET['emailOrPhoneErr'] == 2){
                                            echo "Email or Phone number already exited!";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="password">Password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['passErr'])){
                                        echo "Invalid password!";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="confPassword">Confirm password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="confPassword" placeholder="Type password again" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['confPasswordErr'])){
                                        echo "Password does not match!";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="dateOfBirth">Date of birth</label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" name="dateOfBirth" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['dateOfBirthErr'])){
                                        echo "Please fill out this field.";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="gender">Gender info</label>
                            </div>
                            <div class="col-md-8 text-white">
                                <input type="radio" name="gender" checked value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-md-8">
                                <textarea name="address" placeholder="Address" cols="37" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['addressErr'])){
                                        echo "Please fill out this field.";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="agree"></label>
                            </div>
                            <div class="col-md-8 text-white">
                                <input type="checkbox" name="agree" value="1">I agree <a href="" class="text-danger">Privacy Policy</a> and terms.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['agreeErr'])){
                                        echo "Please check all terms and condition.";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" name="submit" class="form-control btn btn-success">REGISTER</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>