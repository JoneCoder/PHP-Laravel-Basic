
<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/4/2019
 * Time: 10:29 PM
-->
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
        <div class="col-md-6 ml-auto mr-auto mt-5 bg-primary p-5 form-module">
            <form action="add.php" method="post">
                <div class="col-md-12 form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="col-md-12 text-danger">
                    <span>
                        <?php
                        if(!empty($_GET['passErr'])){
                            echo $_GET['passErr'];
                        }
                        ?>
                    </span>
                </div>

                <div class="col-md-12 form-group">
                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="col-md-12 text-danger">
                    <span>
                        <?php
                        if(!empty($_GET['emailErr'])){
                            echo $_GET['emailErr'];
                        }
                        ?>
                    </span>
                </div>

                <div class="col-md-12 form-group">
                    <input type="url" name="website" class="form-control" placeholder="Website">
                </div>
                <div class="col-md-12 text-danger">
                    <span>
                        <?php
                        if(!empty($_GET['websiteErr'])){
                            echo $_GET['websiteErr'];
                        }
                        ?>
                    </span>
                </div>

                <div class="col-md-12 form-group">
                    <input type="text" name="nickName" class="form-control" placeholder="Nick Name">
                </div>
                <div class="col-md-12 text-danger">
                    <span>
                        <?php
                        if(!empty($_GET['nickNameErr'])){
                            echo $_GET['nickNameErr'];
                        }
                        ?>
                    </span>
                </div>

                <div class="col-md-12 form-group">
                    <input type="text" name="firstName" class="form-control" placeholder="First Name">
                </div>
                <div class="col-md-12 text-danger">
                    <span>
                        <?php
                        if(!empty($_GET['firstNameErr'])){
                            echo $_GET['firstNameErr'];
                        }
                        ?>
                    </span>
                </div>

                <div class="col-md-12 form-group">
                    <input type="text" name="lastName" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-md-12 text-danger">
                    <span>
                        <?php
                        if(!empty($_GET['lastNameErr'])){
                            echo $_GET['lastNameErr'];
                        }
                        ?>
                    </span>
                </div>

                <div class="col-md-12">
                    <input type="checkbox" name="agree" value="1"><span>I Accept <a href="" class="text-info" />privacy policy</a> and terms.</span>
                </div>
                <div class="col-md-12 text-danger">
                    <span>
                        <?php
                        if(!empty($_GET['agreeErr'])){
                            echo $_GET['agreeErr'];
                        }
                        ?>
                    </span>
                </div>

                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-success form-control">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>