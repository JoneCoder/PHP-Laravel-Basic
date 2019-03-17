<section>
        <div class="row">
            <div class="col-md-12">
                <form action="validate/update_admin_info.php" method="post">
                    <table class="table">
                        <tr class="table-primary">
                            <th>Basic info</th>
                        </tr>
                        <tr class="table-light">
                            <td>Username .<button type="button" id="editBtnUser">Edit</button></td>
                            <td colspan="2"><input type="text" value="<?php echo $afterAssoc['username']; ?>" id="userName" class="edit" name="userName">
                                <span class="text-danger">
                                    <?php
                                    if (!empty($_GET['userNameErr'])){
                                        if ($_GET['userNameErr'] == 1){
                                            echo 'Username must be 10 charters!';
                                        }
                                        elseif ($_GET['userNameErr'] == 2){
                                            echo 'Username already exited';
                                        }
                                    }
                                    ?>
                                </span>
                            </td>
                        </tr>
                        <tr class="table-light">
                            <td>Full Name .<button type="button" id="editBtnName">Edit</button></td>
                            <td colspan="2"><input type="text" value="<?php echo $afterAssoc['fullname']; ?>" id="fullName" class="edit" name="fullName">
                                <span class="text-danger">
                                    <?php
                                    if (!empty($_GET['fullNameErr'])){
                                        echo 'Full name must be 50 charters!';
                                    }
                                    ?>
                                </span>
                            </td>
                        </tr>

                        <!--contact info-->
                        <tr class="table-primary">
                            <th colspan="3">Contact Info</th>
                        </tr>
                        <tr class="table-light">
                            <td>E-mail .<button type="button" id="editBtnEmail">Edit</button></td>
                            <td><input type="text" value="<?php echo $afterAssoc['email']; ?>" id="email" class="edit" name="email">
                                <span class="text-danger">
                                    <?php
                                    if (!empty($_GET['emailErr'])){
                                        if ($_GET['emailErr'] == 1){
                                            echo 'Invalid email address!';
                                        }
                                        elseif ($_GET['emailErr'] == 2){
                                            echo 'Email address already exited!';
                                        }
                                    }
                                    ?>
                                </span>
                            </td>
                            <td><button type="submit" id="saveBtn" class="btn btn-primary saveBtn">Save info</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
</section>