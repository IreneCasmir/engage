
<?php
session_start();
include('head.php');
require_once('login_check.php');
include('connect.php');?>


<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h2> Welcome 
            <strong><?php echo $_SESSION['uid']; ?>
            </strong>
        </h2>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="teacher_index.php"><i class="feather icon-home"></i> </a>
</li>
</ul>

<div class="navbar-wrapper">
<div class="navbar-container container-fluid">

<ul class="nav-right">

<li>
<a href="logout.php">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>




<!DOCTYPE html>
<html lang="english">
        <head>
        <title>Student Home</title>
        <meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "customize.css" />
        </head>
        <body>

       <!-- <div style="background-color:white;">
        <h2> Welcome 
            <strong><?php echo $_SESSION['uid']; ?>
            </strong>
        </h2>
        </div>-->

        <?php 
        $u = $_SESSION['uid'];
        //$v="Select `s_name` from `student` where s_id='$u'";
        //$conn = new mysqli("localhost", "root", "mysql", "mini_lms") or die(mysqli_error());

        $query = mysqli_query($conn,"Select `course_name` from `course` where `course_id` in (select `course_id` from `courses_taught` where t_id='$u')");
        while ($row = mysqli_fetch_assoc($query)) {
            if($row[course_name] == 'Machine Learning')
            {?>
            <div class = "home">
            <ul>
                <li>
                    <a href="ml.php"><div class="box">Machine Learning</div></a>
                </li>
            </ul>
            </div>
            <?php } 

            if($row[course_name] == 'Logic')
            {?>
            <div class = "home">
            <ul>
                <li>
                    <a href="logic.php"><div class="box">Logic</div></a>
                </li>
            </ul>
            </div>
            <?php } 

            if($row[course_name] == 'Probability')
            {?>
            <div class = "home">
            <ul>
                <li>
                    <a href="prob.php"><div class="box">Probability</div></a>
                </li>
            </ul>
            </div>
            <?php } 

            if($row[course_name] == 'Operating Systems')
            {?>
            <div class = "home">
            <ul>
                <li>
                    <a href="os.php"><div class="box">Operating Systems</div></a>
                </li>
            </ul>
            </div>
            <?php } 

            if($row[course_name] == 'Cryptography')
            {?>
            <div class = "home">
            <ul>
                <li>
                    <a href="crypto.php"><div class="box">Cryptography</div></a>
                </li>
            </ul>
            </div>
            <?php } 

            if($row[course_name] == 'Computer Architecture')
            {?>
            <div class = "home">
            <ul>
                <li>
                    <a href="co.php"><div class="box">Computer Architecture</div></a>
                </li>
            </ul>
            </div>
            <?php } ?>

        <?php }?>
    </body>
</html>
