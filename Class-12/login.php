<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/18/2019
 * Time: 10:39 PM
 -->
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>Login</title>

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
                    <h3>Login</h3>
                </div>
                <div class="col-3 p-2">
                    <a href="index.php" class="btn btn-primary">Sign up</a>
                </div><hr>
            </div>
            <!--//end-header-section-->

            <!--form-section-->
            <div class="row">
                <div class="col-md-12 text-primary">
                    <form action="validate/login_valid.php" method="post">
                        <div class="row">
                            <div class="col-md-11 m-auto form-group text-left">
                                <label for="email">E-mail:</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 m-auto text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['userEmailErr'])){
                                        echo "Invalid email!";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11 m-auto form-group text-left">
                                <label for="password">Password:</label>
                                <input type="password" name="pass" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 m-auto text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['userPasswordErr'])){
                                        echo "Invalid password!";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11 mr-auto ml-auto form-group mt-2 mb-2">
                                <button type="submit" class="btn btn-success form-control">Login</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 m-auto text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['typeErr'])){
                                        echo "E-mail and password invalid!";
                                    }
                                    ?>
                                </span>
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
</body>
</html>