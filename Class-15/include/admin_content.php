<section>
    <div class="row">
        <div class="col-md-12 bg-success">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <div class="float-left">
                        <a href="admin_profile.php?myadmin=<?php echo $afterAssoc['username']; ?>"><img src="admin_pro/<?php echo $afterAssoc['photo']; ?>" width="100" height="100" alt="profile.jpg"/></a>
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

    <div class="row">
        <div class="col-md-12 text-center">
            <h3>All Message</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <form class="form-inline">
                <input type="search" style="width: 80%;" name="search" id="searchData" placeholder="Search here" class="form-control">
                <input type="button" id="searchBtn" value="Search" class="btn btn-primary ml-2">
            </form><hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 m-auto">
            <table class="table table-hover" id="table_id">
                <thead class="">
                <tr>
                    <th>ID</th>
                    <th>username</th>
                    <th>E-mail</th>
                    <th>Message</th>
                    <th>Profile pic</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                if (empty($afterAssocUser)){
                    echo '<tr class="text-center">';
                    echo '<td colspan="6" class="text-info">';
                    echo 'No message!';
                    echo  '</td>';
                    echo '</tr>';
                }
                ?>
                <?php
                foreach ($userData as $data) {
                    ?>
                    <tr class="table-primary">
                        <td>
                            <a href="profile_view.php?user_id=<?php echo $data['id']; ?>" title="Single view">
                                <?php
                                echo $data['id'];
                                ?>
                            </a>
                        </td>
                        <td>
                            <a href="profile_view.php?user_id=<?php echo $data['id']; ?>" title="Single view">
                                <?php
                                echo $data['username'];
                                ?>
                            </a>
                        </td>
                        <td>
                            <a href="profile_view.php?user_id=<?php echo $data['id']; ?>" title="Single view">
                                <?php
                                echo $data['email'];
                                ?>
                            </a>
                        </td>
                        <td>
                            <a href="profile_view.php?user_id=<?php echo $data['id']; ?>" title="Single view">
                                <?php
                                if (strlen($data['message']) > 25 ){
                                    $message = $data['message'];
                                    for ($i = 0; $i <= 25; $i++){
                                        echo $message[$i];
                                    }
                                    echo '. . .';

                                }
                                else{
                                    echo $data['message'];
                                }
                                ?>
                            </a>
                        </td>
                        <td>
                            <a href="profile_view.php?user_id=<?php echo $data['id']; ?>" title="Single view">
                                <img src="uploads/<?php echo $data['photo']; ?>" alt="profile.jpg" width="50" height="50">
                            </a>
                        </td>
                        <td>
                            <a href="profile_view.php?user_id=<?php echo $data['id']; ?>" class="btn btn-success">View</a>
                            <?php
                            if ($afterAssoc['role'] == 1){
                            ?>
                            <a href="validate/delete.php?user_id=<?php echo $data['id']; ?>" class="btn btn-warning">Delete</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>