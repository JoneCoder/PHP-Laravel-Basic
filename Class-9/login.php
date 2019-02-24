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
                    <h3>Login</h3>
                </div>
                <div class="col-md-3 mt-2">
                    <a href="registration.php">
                        <button type="button" class="btn btn-primary">Sign up</button>
                    </a>
                </div>
            </div>
            <hr>
            <div class="col-md-12 text-danger text-center">
                        <span>
                            <?php
                            if(!empty($_GET['typeErr'])){
                                echo "Email address and password invalid!";
                            }
                            ?>
                        </span>
            </div>
            <form action="database/form.php" method="post">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="email" name="email" placeholder="E-mail Address" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-danger text-center">
                        <span>
                            <?php
                            if(!empty($_GET['emailErr'])){
                                echo "Invalid email address!";
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
                    <div class="col-md-12 text-danger text-center">
                        <span>
                            <?php
                            if(!empty($_GET['passErr'])){
                                echo "Invalid password!";
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <button type="submit" class="form-control btn btn-success">LOGIN</button>
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