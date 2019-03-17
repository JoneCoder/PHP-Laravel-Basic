<section>
    <div class="container">
        <div class="row user-content">
            <div class="col-12 edit text-center">
                <img src="uploads/<?php echo $after_assoc['coverPhoto']; ?>" class="cover" alt="cover_pic.jpg">
                <button type="button" class="border editBtn" data-target="#upload_cover" data-toggle="modal">Edit</button>
            </div>
            <div class="pic text-center">
                <img src="uploads/<?php echo $after_assoc['photo']; ?>" width="200" height="200">
                <h3><?php echo $after_assoc['name']; ?></h3>
            </div>
        </div>
    </div>
</section>

<!--edit-modal-->
<div class="modal fade" id="upload_cover">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-primary">
                <h3>Update Your Profile</h3>
                <input type="button" class="close" data-dismiss="modal" value="X">
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-12">
                        <form action="database/update_cover.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 form-group text-left">
                                    <label for="upload">Choice your cover photo:</label>
                                    <?php
                                    $_SESSION['username'] = $username;
                                    ?>
                                    <input type="file" name="cover_pic" class="form-control" accept="image/*">
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