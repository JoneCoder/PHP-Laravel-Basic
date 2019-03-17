<div class="row">
    <div class="col-md-12 bg-primary">
        <div class="row">
            <div class="col-12 text-white p-2">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Welcome to my profile Dear Admin!</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="" style="margin-left: 20px;">
                            <img src="uploads/<?php echo $afterAssocUser['photo']; ?>" width="200" height="200" alt="profile.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-primary">
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <?php
                    echo $afterAssocUser['username'];
                    ?>
                </td>
                <td>
                    ID
                </td>
                <td>
                    <?php
                    echo $afterAssocUser['id'];
                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    E-mail
                </td>
                <td>
                    <?php
                    echo $afterAssocUser['email'];
                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    Message
                </td>
                <td>
                    <?php
                    echo $afterAssocUser['message'];
                    ?>
                </td>
            </tr>
        </table>
    </div>
</div>