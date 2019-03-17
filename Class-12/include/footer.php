<?php
$_SESSION['user_id'] = $after_assoc['id'];
?>
<section>
    <div class="container">
        <div class="row bg-dark">
            <div class="col-md-4 footer">
                <p><a href="#">English (US)</a></p>
                <p><a href="#">Portugues (Brasil)</a></p>
                <p><a href="#">বাংলা</a></p>
                <p><a href="#">Espanol</a></p>
            </div>
            <div class="col-md-4 footer">
                <p><a href="#">Your Pages</a></p>
                <p><a href="#">Help</a></p>
                <p><a href="setting_privacy.php?user_id=<?php echo $username; ?>">Settings & Privacy</a></p>
            </div>
            <div class="col-md-4 footer">
                <p><a href="#">Report a Problem</a></p>
                <p><a href="#">Terms & Policies</a></p>
                <p><a href="" class="text-white" data-target="#logOut" data-toggle="modal">Logout (<?php echo $after_assoc['name']; ?>)</a></p>
                <form class="form-inline">
                    <input type="search" name="search" id="footerSearchData" class="form-control">
                    <input type="button" id="footerSearchBtn" value="Search" class="btn btn-primary ml-2">
                </form>
            </div>
        </div>
    </div>
</section>

<!--my-logout-modal-->
<div class="modal fade" id="logOut">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-primary">
                <h3>LOGOUT</h3>
                <input type="button" class="close" data-dismiss="modal" value="X">
            </div>
            <div class="modal-body text-center">
                <div class="text-info">
                    <h4>Are you sure login out?</h4>
                    <span class="text-danger">
                        <?php
                        if (empty($after_assoc['password'])){
                            echo 'Your profile password not set! Future your profile disable.';
                        }
                        ?>
                    </span>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-6 border-right">
                        <a href="validate/logout.php">YES!</a>
                    </div>
                    <div class="col-6">
                        <a href="">NO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//end-my-logout-modal-->
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script>
    $(function(){
        $('#searchBtn').click(function(){
            var searchData = $('#searchData').val();
            var baseUrl = window.location.pathname;
            var searchUrl = baseUrl + '?search=' + searchData;
            window.location.href = searchUrl;
        });
    });
</script>
<script>
    $(function(){
        $('#footerSearchBtn').click(function(){
            var searchData = $('#footerSearchData').val();
            var baseUrl = window.location.pathname;
            var searchUrl = baseUrl + '?search=' + searchData;
            window.location.href = searchUrl;
        });
    });
</script>
</body>
</html>