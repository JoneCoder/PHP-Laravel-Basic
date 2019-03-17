<!DOCTYPE html>
<html lang="en" >
<head>
    <title>Create Account</title>
    <meta charset="UTF-8">
    <meta name="author" content="Jone"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <form class="well form-horizontal" action="validate/form_valid.php" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend>Create a account</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['firstNameErr'])){
                                if ($_GET['firstNameErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                            }
                            ?>

                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['lastNameErr'])){
                                if ($_GET['lastNameErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                            }
                            ?>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['emailErr'])){
                                if ($_GET['emailErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                                elseif ($_GET['emailErr'] == 2){
                                    echo 'Please supply a valid email.';
                                }
                                elseif ($_GET['emailErr'] == 3){
                                    echo 'Your email address already exited!';
                                }
                            }
                            ?>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Phone #</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['phoneErr'])){
                                if ($_GET['phoneErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                                elseif ($_GET['phoneErr'] == 2){
                                    echo 'Please supply a valid phone number.';
                                }
                                elseif ($_GET['phoneErr'] == 3){
                                    echo 'Your phone number already exited!';
                                }
                            }
                            ?>
                            <i class="glyphicon glyphicon-earphone"></i>
                        </span>
                        <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Address</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['addressErr'])){
                                if ($_GET['addressErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                            }
                            ?>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input name="address" placeholder="Address" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">City</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['cityErr'])){
                                if ($_GET['cityErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                            }
                            ?>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input name="city" placeholder="city" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Select Basic -->

            <div class="form-group">
                <label class="col-md-4 control-label">State</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['stateErr'])){
                                if ($_GET['stateErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                            }
                            ?>
                            <i class="glyphicon glyphicon-list"></i>
                        </span>
                        <select name="state" class="form-control selectpicker" >
                            <option value=" " >Please select your state</option>
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option >Arizona</option>
                            <option >Arkansas</option>
                            <option >Bangladesh</option>
                            <option >California</option>
                            <option >Colorado</option>
                            <option >Connecticut</option>
                            <option >Delaware</option>
                            <option >District of Columbia</option>
                            <option> Florida</option>
                            <option >Georgia</option>
                            <option >Hawaii</option>
                            <option >daho</option>
                            <option >Illinois</option>
                            <option >Indiana</option>
                            <option >Iowa</option>
                            <option> Kansas</option>
                            <option >Kentucky</option>
                            <option >Louisiana</option>
                            <option>Maine</option>
                            <option >Maryland</option>
                            <option> Mass</option>
                            <option >Michigan</option>
                            <option >Minnesota</option>
                            <option>Mississippi</option>
                            <option>Missouri</option>
                            <option>Montana</option>
                            <option>Nebraska</option>
                            <option>Nevada</option>
                            <option>New Hampshire</option>
                            <option>New Jersey</option>
                            <option>New Mexico</option>
                            <option>New York</option>
                            <option>North Carolina</option>
                            <option>North Dakota</option>
                            <option>Ohio</option>
                            <option>Oklahoma</option>
                            <option>Oregon</option>
                            <option>Pennsylvania</option>
                            <option>Rhode Island</option>
                            <option>South Carolina</option>
                            <option>South Dakota</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option> Uttah</option>
                            <option>Vermont</option>
                            <option>Virginia</option>
                            <option >Washington</option>
                            <option >West Virginia</option>
                            <option>Wisconsin</option>
                            <option >Wyoming</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Zip Code</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['zipErr'])){
                                if ($_GET['zipErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                            }
                            ?>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Website or domain name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['websiteErr'])){
                                if ($_GET['websiteErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                                elseif ($_GET['websiteErr'] == 2){
                                    echo 'Please supply a valid url.';
                                }
                            }
                            ?>
                            <i class="glyphicon glyphicon-globe"></i>
                        </span>
                        <input name="website" placeholder="Website or domain name" class="form-control" type="url">
                    </div>
                </div>
            </div>

            <!-- radio checks -->
            <div class="form-group">
                <label class="col-md-4 control-label">Do you have hosting?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="yes" /> Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="no" /> No
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <span>
                        <?php
                        if (!empty($_GET['hostingErr'])){
                            if ($_GET['hostingErr'] == 1){
                                echo 'Please fill out this filed.';
                            }
                        }
                        ?>
                    </span>
                </div>
            </div>

            <!-- radio checks -->
            <div class="form-group">
                <label class="col-md-4 control-label">Gender info</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" value="male" checked/> Male
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" value="female" /> Female
                        </label>
                    </div>
                </div>
            </div>

            <!-- Text area -->

            <div class="form-group">
                <label class="col-md-4 control-label">Project Description</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <?php
                            if (!empty($_GET['commentErr'])){
                                if ($_GET['commentErr'] == 1){
                                    echo 'Please fill out this filed.';
                                }
                            }
                            ?>
                            <i class="glyphicon glyphicon-pencil"></i>
                        </span>
                        <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
                    </div>
                </div>
            </div>

            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
                </div>
                <div class="col-md-4">
                    <span>Already created account <a href="login.php">login here</a></span>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<!-- /.container -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script  src="js/index.js"></script>
</body>
</html>
