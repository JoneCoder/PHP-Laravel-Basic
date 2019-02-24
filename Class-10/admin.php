<!--
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/18/2019
 * Time: 10:39 PM
 -->
<?php
session_start();
if($_SESSION['login'] == 'Admin!'){
    $_SESSION['admin'] = 'Out!';

    require 'database/database.php';
    $select_query = "SELECT * FROM user_log";
    $user_data = mysqli_query($databaseConnect, $select_query);
}
else{
    header('location:profile.php');
}
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>My admin</title>

    <meta charset="UTF-8"/>
    <meta name="author" content="Jone"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto bg-success">
            <div class="row">
                <div class="col-9 text-center text-white">
                    <h3>My Admin</h3>
                </div>
                <div class="col-3 text-right p-2">
                    <button type="button" class="btn btn-danger" data-target="#logOut" data-toggle="modal">Log out</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 m-auto">
            <table class="table">
                <thead class="table-dark">
                <th>ID</th>
                <th>username</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Mobile</th>
                <th>Action</th>
                </thead>

                <tbody>
                <?php
                foreach ($user_data as $data) {
                    ?>
                    <tr class="table-primary">
                        <td>
                            <?php
                            echo $data['id'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $data['username'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $data['email'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $data['password'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $data['mobile'];
                            ?>
                        </td>
                        <td>
                            <a href="profile_view.php?id=<?php echo $data['id']; ?>" class="btn btn-success">View</a>
                            <a href="update_database/delete.php?Auserid=<?php echo $data['id']; ?>" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--my-logout-modal-->
<div class="modal fade" id="logOut">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-primary">
                <h3>Log Out Admin</h3>
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
                        <a href="profile.php">YES!</a>
                    </div>
                    <div class="col-6">
                        <a href="admin.php">NO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//end-my-logout-modal-->

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>