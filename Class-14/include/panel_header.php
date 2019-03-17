<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MY Admin - Dashboard</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/my-style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
    <link href="css/table-search-plugin.css" rel="stylesheet">
    <!--Custom Font-->
    <link href="css/font.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>My</span>Admin</a>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <a href="admin_profile.php?myadmin=<?php echo $afterAssoc['username']; ?>"><img src="admin_pro/<?php echo $afterAssoc['photo']; ?>" class="img-responsive" alt=""></a>
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $afterAssoc['username']; ?></div>
            <div class="profile-usertitle-status"><?php echo $afterAssoc['email']; ?></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li class=""><a href="panel.php?myadmin=<?php echo $afterAssoc['username']; ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
        <li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
        <li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
        <?php
        if ($afterAssoc['role'] == 1 || $afterAssoc['role'] == 2){
        ?>
            <li><a href="web-theme.php?myadmin=<?php echo $afterAssoc['username']; ?>"><em class="">&nbsp;</em> Website Themes</a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <?php
                if ($afterAssoc['role'] == 1 || $afterAssoc['role'] == 2){
                    ?>
                    <li><a class="" href="add_user.php?myadmin=<?php echo $afterAssoc['username']; ?>">
                            <span class="fa fa-arrow-right">&nbsp;</span> Add user
                        </a></li>
                <?php } ?>

                <?php
                if ($afterAssoc['role'] == 1 || $afterAssoc['role'] == 2){
                    $_SESSION['username'] = $afterAssoc['username'];
                    ?>
                    <li><a class="" href="validate/delete_user.php">
                            <span class="fa fa-arrow-right">&nbsp;</span> Reset users
                        </a></li>
                <?php } ?>
                <?php
                if ($afterAssoc['role'] == 1){
                    ?>
                    <li><a class="" href="database/delete_message.php">
                            <span class="fa fa-arrow-right">&nbsp;</span> Delete All Messages
                        </a></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
        <li><a href="validate/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-md-12">