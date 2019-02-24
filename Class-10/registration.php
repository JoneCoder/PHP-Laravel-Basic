<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/18/2019
 * Time: 10:39 PM
 -->
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>Registration form day-10</title>

    <meta charset="UTF-8"/>
    <meta name="author" content="Jone"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto mt-5 bg-light form-module">
            <!--header-section-->
            <div class="row">
                <div class="col-9 text-center text-primary p-2">
                    <h3>Registration Now!</h3>
                </div>
                <div class="col-3 p-2">
                    <a href="login.php" class="btn btn-primary">Login</a>
                </div><hr>
            </div>
            <!--//end-header-section-->

            <!--form-section-->
            <div class="row">
                <div class="col-md-12 text-primary">
                    <form action="validate/form_validate.php" method="post">
                        <div class="row">
                            <div class="col-md-11 m-auto form-group text-left">
                                <label for="username">username:</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 m-auto text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['userErr'])){
                                        if ($_GET['userErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['userErr'] == 2){
                                            echo "username must be 10 charters!";
                                        }
                                        elseif ($_GET['userErr'] == 3){
                                            echo "Your username already exited!";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11 m-auto form-group text-left">
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 m-auto text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['emailErr'])){
                                        if ($_GET['emailErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['emailErr'] == 2){
                                            echo "Invalid email address!";
                                        }
                                        elseif ($_GET['emailErr'] == 3){
                                            echo "Your email already exited!";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11 m-auto form-group text-left">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 m-auto text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['passErr'])){
                                        if ($_GET['passErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['passErr'] == 2){
                                            echo "Password must be 8 charters, 1 small letter, 1 capital letter and 1 number!";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11 m-auto form-group text-left">
                                <label for="mobile">Mobile:</label>
                                <input type="text" name="mobile" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 m-auto text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['phoneErr'])){
                                        if ($_GET['phoneErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['phoneErr'] == 2){
                                            echo "Include country code!";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11 mr-auto ml-auto form-group mt-2 mb-2">
                                <button type="submit" class="btn btn-success form-control">REGISTER</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--//end-form-section-->
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>