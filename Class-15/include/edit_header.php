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

    <!-- Favicons
    ================================================== -->
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">

    <!--css themes link-->
    <?php
    if (isset($theme)){
        if ($theme == 2){
            ?>
            <link rel="stylesheet" type="text/css" href="css/night-mode.css">
        <?php } }?>

</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="panel.php?myadmin=<?php echo $afterAssoc['username']; ?>"><span>My</span>Admin</a>
        </div>
    </div><!-- /.container-fluid -->
</nav>