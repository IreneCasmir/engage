<?php
session_start();
include('head.php');
include('connect.php');
?>

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Resources</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
    <?php if($_SESSION['username'] == 'Student')
    {?>
    <a href="student_index.php"><i class="feather icon-home"></i> </a>
    
    <?php }
    else if($_SESSION['username'] == 'Teacher')
    {?>
    <a href="teacher_index.php"><i class="feather icon-home"></i> </a>
    <?php } ?>
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
        <title>Resources</title>

        <meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "customize.css" />
        </head>
    <body>
    <form action="add_check.php" method="post">
    <div style="margin: auto; border: 1px solid white; width: 40%;">
    
        <div class = "form-group">
            <label for = "adding_res">Add link here </label>
			<input class = "form-control" type = "text" name = "link"  required = "required"/>
		</div>
		<br />
        <div class = "form-group">
			<button class  = "btn btn-success form-control" type = "submit" value = "submit" name = "ADDlink" ><span class = "glyphicon glyphicon-log-in"></span> 
                 Add Resource
            </button>
        </div>
        </div>
        </form>

        <div style="margin: auto; border: 1px solid white; width: 40%;">
        <form action="add_check.php" method="post">
        <div class = "form-group">
			<button class  = "btn btn-success form-control" type = "submit" value = "submit" name = "VIEWlinks" ><span class = "glyphicon glyphicon-log-in"></span> 
                View Resources 
            </button>
        </div>
        </form>
        </div>


    </body>
</html>