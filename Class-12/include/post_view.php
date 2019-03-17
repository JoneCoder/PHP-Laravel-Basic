<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9 mt-3 mb-3 ml-auto mr-auto border">
                <div class="row">
                    <div class="col-12 p-3">
                        <img src="uploads/<?php echo $item['pro_pic']; ?>" width="25" height="25" class="float-left mr-2" style="border-radius: 50%;"/>
                        <h5><?php echo $item['name']; ?></h5>
                        <p><?php echo $item['status']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 m-auto p-2">
                        <img src="user_post/<?php echo $item['photo']; ?>" width="100%" height="500px"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>