<?php
session_start();
if (isset($_SESSION['adminId'])){
    $adminId = $_SESSION['adminId'];
    $_SESSION['adminId'] = $adminId;
    require 'database/database.php';
    $selectAdmin = "SELECT * FROM `admin` WHERE id='$adminId'";
    $adminData = mysqli_query($databaseConnect, $selectAdmin);
    $afterAssoc = mysqli_fetch_assoc($adminData);


}
else{
    header('location:../login_admin.php');
}
require 'include/panel_header.php';
require 'include/admin_header.php';
require 'include/pro_content.php';
require 'include/setting_content.php';
require 'include/panel_footer.php';
?>

<script>
    var editBtnUser = document.getElementById('editBtnUser');
    editBtnUser.onclick = function(){
        var userName = document.getElementById('userName');
        userName.style.borderBottom = '1px solid orange';
        var saveBtn = document.getElementById('saveBtn');
        saveBtn.style.display = 'block';
    };

    var editBtnName = document.getElementById('editBtnName');
    editBtnName.onclick = function(){
        var fullName = document.getElementById('fullName');
        fullName.style.borderBottom = '1px solid orange';
        var saveBtn = document.getElementById('saveBtn');
        saveBtn.style.display = 'block';
    };

    var editBtnEmail = document.getElementById('editBtnEmail');
    editBtnEmail.onclick = function(){
        var email = document.getElementById('email');
        email.style.borderBottom = '1px solid orange';
        var saveBtn = document.getElementById('saveBtn');
        saveBtn.style.display = 'block';
    };
</script>