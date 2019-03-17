<!--edit-modal-->
<div class="modal fade" id="upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-primary">
                <h3>Update Your Profile</h3>
                <input type="button" class="close" data-dismiss="modal" value="X">
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-12">
                        <form action="database/updates.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 form-group text-left">
                                    <label for="upload">Update profile pic:</label>
                                    <?php
                                    $_SESSION['username'] = $username;
                                    ?>
                                    <input type="file" name="profile_pic" class="form-control" accept="image/*">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 form-group mt-2 mb-2">
                                    <button type="submit" name="id" value="<?php echo $user_id; ?>" class="btn btn-success form-control">UPDATE</button>
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