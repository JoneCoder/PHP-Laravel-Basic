<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/18/2019
 * Time: 10:39 PM
 -->
<?php
session_start();
if(($_SESSION['login'] === 'Yes!') || ($_SESSION['admin'] === 'Out!')){
    $userName = $_SESSION['username'];
    require "database/database.php";
    $user_profile = "SELECT * FROM `user_log` WHERE username='$userName' ";
    $profile = mysqli_query($databaseConnect, $user_profile);
    $after_assoc = mysqli_fetch_assoc($profile);

    $id = $after_assoc['id'];
    $userName = $after_assoc['username'];
    $email = $after_assoc['email'];
    $passWord = $after_assoc['password'];
    $mobile = $after_assoc['mobile'];
    $image = $after_assoc['profile_pic'];
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
                    <div class="row">
                        <div class="col-12">
                            <h3>Welcome to profile!</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-pic">
                                <img src="uploads/<?php echo $image ?>" alt="profile.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 text-right p-2">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-danger" data-target="#logOut" data-toggle="modal">Log out</button>
                            <button type="button" class="btn btn-success" data-target="#myAdmin" data-toggle="modal">Admin</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-2">
                            <button type="button" class="btn btn-success" data-target="#edit" data-toggle="modal">Edit</button>
                            <button type="button" class="btn btn-danger" data-target="#delete" data-toggle="modal">Delete</button>
                        </div>
                    </div>
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

<!--my-logout-modal-->
    <div class="modal fade" id="logOut">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-primary">
                    <h3>LOGOUT</h3>
                    <input type="button" class="close" data-dismiss="modal" value="X">
                </div>
                <div class="modal-body text-center">
                    <div class="text-info">
                        <h4>Are you sure login out?</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-6 border-right">
                            <a href="database/logout.php">YES!</a>
                        </div>
                        <div class="col-6">
                            <a href="profile.php">NO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--//end-my-logout-modal-->

<!--admin-modal-->
<div class="modal fade" id="myAdmin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-primary">
                <h3>My Admin</h3>
                <input type="button" class="close" data-dismiss="modal" value="X">
            </div>
            <div class="modal-body text-center">
                <!--admin-form-section-->
                <div class="row">
                    <div class="col-md-12 text-primary">
                        <form action="validate/admin_validate.php" method="post">
                            <div class="row">
                                <div class="col-md-11 m-auto form-group text-left">
                                    <label for="username">username:</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11 m-auto text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['AuserErr'])){
                                        echo "Invalid username!";
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
                                <div class="col-md-11 m-auto text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['ApassErr'])){
                                        echo "Invalid password!";
                                    }
                                    ?>
                                </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-11 m-auto text-danger">
                                <span>
                                    <?php
                                    if(!empty($_GET['AtypeErr'])){
                                        echo "E-mail and password invalid!";
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

                        </form>
                    </div>
                </div>
                <!--//end-admin-form-section-->
            </div>
        </div>
    </div>
</div>
<!--//end-admin-modal-->

<!--edit-modal-->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-primary">
                <h3>Update Your Profile</h3>
                <input type="button" class="close" data-dismiss="modal" value="X">
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-12">
                        <form action="update_database/edit.php" method="post">
                            <div class="row">
                                <div class="col-12 form-group text-left">
                                    <label for="username">username:</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $userName ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11 m-auto text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['EuserErr'])){
                                        if ($_GET['EuserErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['EuserErr'] == 2){
                                            echo "username must be 10 charters!";
                                        }
                                        elseif ($_GET['EuserErr'] == 3){
                                            echo "Your username already exited!";
                                        }
                                    }
                                    ?>
                                </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 form-group text-left">
                                    <label for="email">E-mail:</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11 m-auto text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['EemailErr'])){
                                        if ($_GET['EemailErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['EemailErr'] == 2){
                                            echo "Invalid email address!";
                                        }
                                        elseif ($_GET['EemailErr'] == 3){
                                            echo "Your email already exited!";
                                        }
                                    }
                                    ?>
                                </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group text-left">
                                    <label for="password">Password:</label>
                                    <input type=text" name="password" class="form-control" value="<?php echo $passWord ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11 m-auto text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['EpassErr'])){
                                        if ($_GET['EpassErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['EpassErr'] == 2){
                                            echo "Password must be 8 charters, 1 small letter, 1 capital letter and 1 number!";
                                        }
                                    }
                                    ?>
                                </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group text-left">
                                    <label for="mobile">Mobile:</label>
                                    <input type="text" name="mobile" class="form-control" value="<?php echo $mobile ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11 m-auto text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['EphoneErr'])){
                                        if ($_GET['EphoneErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['EphoneErr'] == 2){
                                            echo "Include country code!";
                                        }
                                    }
                                    ?>
                                </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mt-2 mb-2">
                                    <button type="submit" name="id" value="<?php echo $id; ?>" class="btn btn-success form-control">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//end-edit-modal-->

<!--my-delete-modal-->
<div class="modal fade" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-danger">
                <h3>Delete Profile!</h3>
                <input type="button" class="close" data-dismiss="modal" value="X">
            </div>
            <div class="modal-body text-center">
                <div class="text-info">
                    <h4>Are you sure delete your profile?</h4>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-6 border-right">
                        <a href="update_database/delete.php?Puserid=<?php echo $id; ?>">YES!</a>
                    </div>
                    <div class="col-6">
                        <a href="profile.php">NO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//end-delete-modal-->

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>