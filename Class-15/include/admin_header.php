<div class="row">
    <div class="col-md-12 bg-success">
        <div class="row">
            <div class="col-12 text-center text-white">
                <div class="float-left">
                    <img src="admin_pro/<?php echo $afterAssoc['photo']; ?>" width="100" height="100" alt="profile.jpg"/>
                </div>
                <h3 class="pt-2"><?php echo $afterAssoc['username']; ?>
                    <sup><span class="text-success">
                        <?php
                        if ($afterAssoc['role'] == 1){
                            echo '(Admin)';
                        }
                        elseif ($afterAssoc['role'] == 2){
                            echo '(Modanator)';
                        }
                        elseif ($afterAssoc['role'] == 3){
                            echo '(Visitor)';
                        }
                        ?>
                    </span>
                    </sup>
                </h3>
            </div>
        </div>
    </div>
</div>