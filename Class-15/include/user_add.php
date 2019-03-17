<div class="row">
    <div class="col-md-12 bg-light">
        <!--header-section-->
        <div class="row">
            <div class="col-12 text-center text-primary p-2">
                <h3>Add user</h3>
            </div><hr>
        </div>
        <!--//end-header-section-->

        <!--form-section-->
        <div class="row">
            <div class="col-md-12 text-primary">
                <form action="validate/add_user_valid.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-11 form-group text-left">
                            <label for="username">username:</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11 text-danger text-center">
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
                        <div class="col-md-11 form-group text-left">
                            <label for="username">Full Name:</label>
                            <input type="text" name="fullName" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11 text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['fullNameErr'])){
                                        if ($_GET['fullNameErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['fullNameErr'] == 2){
                                            echo "Full name must be 50 charters!";
                                        }
                                    }
                                    ?>
                                </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 form-group text-left">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11 text-danger text-center">
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
                        <div class="col-md-11 form-group text-left">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11 text-danger text-center">
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
                        <div class="col-md-11 form-group">
                            <label>Select user Role:</label>
                            <select class="form-control" name="role">
                                <option>--Select user role--</option>
                                <option value="1">Admin</option>
                                <option value="2">Mordanator</option>
                                <option value="3">Viewer</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11 text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['roleErr'])){
                                        if ($_GET['roleErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                    }
                                    ?>
                                </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 form-group text-left">
                            <label for="mobile">Select photo:</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11 text-danger text-center">
                                <span>
                                    <?php
                                    if(!empty($_GET['photoErr'])){
                                        if ($_GET['photoErr'] == 1){
                                            echo "Please fill out of this filed.";
                                        }
                                        elseif ($_GET['photoErr'] == 2){
                                            echo "Invalid file format!";
                                        }
                                        elseif ($_GET['photoErr'] == 3){
                                            echo "File size too large!";
                                        }
                                    }
                                    ?>
                                </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 ml-auto form-group mt-2 mb-2">
                            <button type="submit" class="btn btn-success form-control">Add user</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--//end-form-section-->
    </div>
</div>