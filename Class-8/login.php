<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/12/2019
 * Time: 11:52 AM
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
        <div class="col-md-7 ml-auto mr-auto mt-5 bg-info form-module">
            <div class="row">
                <div class="col-md-12 text-center text-primary">
                    <h3>Login</h3><hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 m-auto text-left">
                    <form action="database/form.php" method="post">
                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="emailOrPhone">E-mail or Phone</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="emailOrPhone" placeholder="E-mail or Phone number" class="form-control" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4 text-white">
                                <label for="password">Password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="password" placeholder="Password" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['typeErr'])){
                                        echo "Email or password invalid!";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" name="login" class="form-control btn btn-success">LOGIN</button>
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