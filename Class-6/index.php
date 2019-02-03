
<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/1/2019
 * Time: 10:28 PM
-->
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>Registration form</title>
    <meta charset="UTF-8"/>
    <meta name="author" content="Jone"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="css/bootstrap.css"/>  <!--css-links-->
    <link rel="stylesheet" href="css/style.css"/>  <!--css-links-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="row">
                <div class="col-md-9 text-left pt-5 text-info">
                    <h3>Registration Form :</h3>
                </div>

                <div class="col-md-3 text-left pt-5 text-info">
                    <h3>
                        <?php
                        date_default_timezone_set("Asia/Dhaka");
                        echo date("h:i:s A");
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-md-8 m-auto form-module">
            <form action="add.php" method="post">


                <div class="form-group row">
                    <label class="col-md-3 col-form-label">First Name :</label>
                    <div class="col-md-9">
                        <input type="text" name="firstName" id="first_name" class="form-control">
                        <span id="first_name_error"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-danger">
                        <p>
                            <?php
                            if(!empty($_GET['firstNameError'])){
                                echo $_GET['firstNameError'];
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Last Name :</label>
                    <div class="col-md-9">
                        <input type="text" name="lastName" id="last_name" class="form-control">
                        <span id="last_name_error"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-danger">
                        <p>
                            <?php
                            if(!empty($_GET['lastNameError'])){
                                echo $_GET['lastNameError'];
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Email Address :</label>
                    <div class="col-md-9">
                        <input type="email" id="email_address" name="emailAddress" class="form-control">
                        <span id="email_error"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-danger">
                        <p>
                            <?php
                            if(!empty($_GET['emailAddressError'])){
                                echo $_GET['emailAddressError'];
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Password :</label>
                    <div class="col-md-9">
                        <input type="password" id="pass_word" name="password" class="form-control">
                        <span class="text-danger" id="password_error"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-danger">
                        <p>
                            <?php
                            if(!empty($_GET['passwordError'])){
                                echo $_GET['passwordError'];
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Confirm Password :</label>
                    <div class="col-md-9">
                        <input type="password" id="con_password" name="conPassword" class="form-control">
                        <span id="con_password_error"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-danger">
                        <p>
                            <?php
                            if(!empty($_GET['conPasswordError'])){
                                echo $_GET['conPasswordError'];
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Phone Number :</label>
                    <div class="col-md-9">
                        <input type="number" id="phone_num" name="phoneNum" class="form-control">
                        <span id="phone_num_error"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-danger">
                        <p>
                            <?php
                            if(!empty($_GET['phoneNumError'])){
                                echo $_GET['phoneNumError'];
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Address :</label>
                    <div class="col-md-9">
                        <textarea name="address" id="Address" class="form-control"></textarea>
                        <span id="address_error"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-danger">
                        <p>
                            <?php
                            if(!empty($_GET['addressError'])){
                                echo $_GET['addressError'];
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3">Gender info :</label>
                    <div class="col-md-9">
                        <input type="radio" name="gender" checked value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3">Date of birth :</label>
                    <div class="col-md-9">
                        <input type="date" name="dateOfBirth" class="form-control">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3">District Name :</label>
                    <div class="col-md-9">
                        <select name="district">
                            <option>--Select district name--</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Mymonshing">Mymonshing</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Chittagon">Chittagon</option>
                            <option value="Rongpur">Rongpur</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3">Select image :</label>
                    <div class="col-md-9">
                        <input type="file" name="pic" class="form-control-file" accept="image/*">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-danger">
                        <p>
                            <?php
                            if(!empty($_GET['picError'])){
                                echo $_GET['picError'];
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="checkbox" name="agree" value="1">I Agree...
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-danger">
                        <p>
                            <?php
                            if(!empty($_GET['agreeError'])){
                                echo $_GET['agreeError'];
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Register">
                </div>
            </form>
        </div>
    </div>
</div>
<!--js-links-->
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!--js-links-->
</body>
</html>