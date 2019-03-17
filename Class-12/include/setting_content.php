<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 user-content">
                    <table class="table">
                        <!--password-->
                        <form action="validate/pass_valid.php" method="post">
                        <tr class="table-primary">
                            <th>Password setting</th>
                        </tr>
                        <tr class="table-light">
                            <td>Current password:</td>
                            <td><input type="password" name="currPass">
                            <span class="text-danger">
                                <?php
                                if (!empty($_GET['passErr'])){
                                    echo 'Current password does not match!';
                                }
                                ?>
                            </span>
                            </td>
                        </tr>
                        <tr class="table-light">
                            <td>New password:</td>
                            <td><input type="password" name="newPass">
                                <span class="text-danger">
                                <?php
                                if (!empty($_GET['matchErr'])){
                                    if ($_GET['matchErr'] == 1){
                                        echo 'This is not new password!';
                                    }
                                    elseif ($_GET['matchErr'] == 2){
                                        echo 'Your password must be 8 charter, 1 number, 1 capital letter and 1 small letter.';
                                    }
                                }
                                ?>
                            </span>
                            </td>
                        </tr>
                        <tr class="table-light">
                            <td>
                                <span class="text-success">
                                    <?php
                                    if (!empty($_GET['message'])){
                                        echo 'Your profile password successfully changed';
                                    }
                                    ?>
                                </span>
                            </td>
                            <td><button type="submit">Change password</button></td>
                        </tr>
                        </form>

                        <!--Profile-setting-->
                        <form action="validate/disable_request.php" method="post">
                        <tr class="table-primary">
                            <th>Profile setting</th>
                        </tr>
                        <tr class="table-light">
                            <td><input type="checkbox" name="idDisable" value="101"> I want disable this profile.</td>
                            <td><button type="submit">Disable</button>
                                <span class="text-danger">
                                <?php
                                if (!empty($_GET['idDisableErr'])){
                                    echo 'Do you want disable your profile? Please check out.';
                                }
                                elseif (!empty($_GET['disMessage'])){
                                    echo 'Profile disable request processing... After 7days delete your profile by admin.';
                                }
                                ?>
                            </span>
                            </td>
                        </tr>
                        </form>
                    </table>
            </div>
        </div>
    </div>
</section>