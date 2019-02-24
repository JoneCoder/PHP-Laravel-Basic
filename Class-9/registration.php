<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/15/2019
 * Time: 10:31 PM
-->
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>Registration form</title>

    <meta charset="UTF-8"/>
    <meta name="author" content="Jone"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-5 bg-info">
            <div class="row">
                <div class="col-md-9 text-center text-white">
                    <h3>Registration Now!</h3>
                </div>
                <div class="col-md-3 mt-2">
                    <a href="login.php">
                        <button type="button" class="btn btn-primary">Login</button>
                    </a>
                </div>
            </div>
            <hr>
            <form action="validate/form_valid.php" method="post">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="firstName" placeholder="First Name" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center text-danger">
                        <span>
                            <?php
                            if(!empty($_GET['firstNameErr'])){
                                if($_GET['firstNameErr'] == 1){
                                    echo "Please fill out of this field.";
                                }
                                elseif ($_GET['firstNameErr'] == 2){
                                    echo "First name must to be 25 Charter!";
                                }
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center text-danger">
                        <span>
                            <?php
                            if(!empty($_GET['lastNameErr'])){
                                if($_GET['lastNameErr'] == 1){
                                    echo "Please fill out of this field.";
                                }
                                elseif ($_GET['lastNameErr'] == 2){
                                    echo "Last name must to be 20 Charter!";
                                }
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="email" name="email" placeholder="E-mail Address" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center text-danger">
                        <span>
                            <?php
                            if(!empty($_GET['emailErr'])){
                                if($_GET['emailErr'] == 1){
                                    echo "Please fill out of this field.";
                                }
                                elseif ($_GET['emailErr'] == 2){
                                    echo "Invalid email address!";
                                }
                                elseif ($_GET['emailErr'] == 3){
                                    echo "Your email address already used!";
                                }
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center text-danger">
                        <span>
                            <?php
                            if(!empty($_GET['passErr'])){
                                if($_GET['passErr'] == 1){
                                    echo "Please fill out of this field.";
                                }
                                elseif ($_GET['passErr'] == 2){
                                    echo "Your input password must to be 8 charter, 1 number, 1 capital letter and 1 small letter!";
                                }
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="confPassword" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center text-danger">
                        <span>
                            <?php
                            if(!empty($_GET['confPasswordErr'])){
                                if($_GET['confPasswordErr'] == 1){
                                    echo "Please fill out of this field.";
                                }
                                elseif ($_GET['confPasswordErr'] == 2){
                                    echo "Password and Confirm Password does not match!";
                                }
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="phoneNumber" placeholder="Phone Number" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center text-danger">
                        <span>
                            <?php
                            if(!empty($_GET['phoneNumberErr'])){
                                if($_GET['phoneNumberErr'] == 1){
                                    echo "Please fill out of this field.";
                                }
                                elseif ($_GET['phoneNumberErr'] == 2){
                                    echo "Include your country code!";
                                }
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="date" name="dateOfBirth" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center text-danger">
                        <span>
                            <?php
                            if(!empty($_GET['dateOfBirthErr'])){
                                if($_GET['dateOfBirthErr'] == 1){
                                    echo "Please input your date of birth.";
                                }
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 m-auto border text-center text-white">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="gender">Gender info:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="radio" name="gender" checked value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p><input type="checkbox" name="agree" value="1"> I agree <a href="">Privacy Policy</a> and terms.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['agreeErr'])){
                                        if($_GET['agreeErr'] == 1){
                                            echo "Please check terms and condition.";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <select name="hobbies" id="hobbies" class="form-control">
                                    <option value="">Select Hobbies</option>
                                    <option value="play">Play</option>
                                    <option value="music">Music</option>
                                    <option value="game">Game</option>
                                    <option value="dance">Dance</option>
                                    <option value="sing">Sing</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['hobbyErr'])){
                                        if($_GET['hobbyErr'] == 1){
                                            echo "Please fill out of this field.";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 m-auto text-left">
                                <!--hobbies-->
                                <div class="" id="play">
                                    <p><input type="checkbox" name="fav1" value="football"> Football</p>
                                    <p><input type="checkbox" name="fav2" value="cricket"> Cricket</p>
                                    <p><input type="checkbox" name="fav3" value="volleyball"> Volleyball</p>
                                    <p><input type="checkbox" name="fav4" value="Kabady"> Kabady</p>
                                </div>
                                <!--//end hobbies-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['favErr'])){
                                        if($_GET['favErr'] == 1){
                                            echo "Please fill out of this field.";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 ml-auto mr-auto mt-3 form-group">
                        <textarea name="message" rows="10" placeholder="Message" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center text-danger">
                        <span>
                            <?php
                            if(!empty($_GET['messageErr'])){
                                if($_GET['messageErr'] == 1){
                                    echo "Please fill out of this field!";
                                }
                                elseif ($_GET['messageErr'] == 2){
                                    echo "Your message must to be 500 Charter.";
                                }
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <button type="submit" class="form-control btn btn-success">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>