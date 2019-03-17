<section>
    <div class="container">
        <div class="row">
            <div class="col-3 p-3 text-right">
                <img src="uploads/<?php echo $after_assoc['photo']; ?>" alt="profile.jpg" class="pro-post"/>
            </div>
            <div class="col-9">
                    <form action="validate/post.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-9 p-3">
                            <div class="border">
                                <textarea type="text" cols="56" class="post-content" name="status" placeholder="What's on your mind?"/></textarea>
                                <input type="file" class="" name="postPic" accept="image/*">
                            </div>
                        </div>
                        <div class="col-2 p-3 text-left">
                            <button type="submit" name="username" value="<?php echo $username; ?>" class="btn btn-success">Post</button>
                        </div>
                        </div>
                    </form>
            </div>
        </div><hr>
    </div>
</section>