<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h2><strong> Machine Learning</strong></h2>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="student_index.php"><i class="feather icon-home"></i> </a>
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



<?php
session_start();
$_SESSION['course'] = "CS5678";
include('head.php');
require_once('login_check.php');
include('connect.php');?>

<!DOCTYPE html>
<html lang="english">
        <head>
        <title>Machine Learning</title>
        <meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "customize.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <style>
        .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;  
}

.container-fluid{
            width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        }
        .form-group 
                    {
                        display:inline-block;
                        align : left;
                    }

                    .form-group  {
                        width:200px;
                        font-size:25px; 
                    }
    </style>
        </head>
        <?php
        if($_SESSION['username'] == 'Student')
    {?>
        
        <body>
        <div class="container-fluid">
            <form action="resources.php" method="post">

            <div class="container-fluid">    
            <div class="row">
            <div style="margin:10px;" class="col1">

            <div class = "card">
            <img src="images/resources.jpeg" alt="Resource" style="width:100%">
            <div style="background-color:White;" class = "form-group">
            <a href="resources.php"> Resources </a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </form>
       <!-- </div> -->


        <!--<div class="container-fluid">-->
            <form action="peers.php" method="post">

            <div class="container-fluid">    
            <div class="row">
        <div style="margin:10px;" class="col2">

            <div class = "card">
            <img src="images/peers.jpeg" alt="Peers" style="width:100%">
            <div style="background-color:White;" class = "form-group">
            <a href="peers.php"> See my Peers </a>
            </div>
            </div>
        
        </div>
            </div>
            </div>
            </form>
        </div>
        </body>
    <?php }

    else if($_SESSION['username'] == 'Teacher')
    {?>
<body>
        <div class="container-fluid">
            <form action="resources.php" method="post">

            <div class="container-fluid">    
            <div class="row">
            <div style="margin:10px;" class="col1">

            <div class = "card">
            <img src="images/resources.jpeg" alt="Resource" style="width:100%">
            <div style="background-color:White;" class = "form-group">
            <a href="resources.php"> Resources </a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </form>
        <!--</div> -->
<!--  -->
       <!-- <div id="quiz" class="container-fluid">-->
            <form action="resources.php" method="post">

            <div class="container-fluid">    
            <div class="row">
            <div style="margin:10px;" class="col2">

            <div class = "card">
            <img src="images/quiz.jpg" alt="Quiz" style="width:100%">
            <div style="background-color:White;" class = "form-group">
            <a href="resources.php"> Set Quizzes </a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </form>
        <!--</div>-->
<!--  -->

       <!-- <div id="students" class="container-fluid">-->
            <form action="peers.php" method="post">

            <div class="container-fluid">    
            <div class="row">
        <div style="margin:10px;" class="col3">

            <div class = "card">
            <img src="images/peers.jpeg" alt="Peers" style="width:100%">
            <div style="background-color:White;" class = "form-group">
            <a href="peers.php"> Students Enrolled </a>
            </div>
            </div>
        
        </div>
            </div>
            </div>
            </form>
        </div>

        </body>
    <?php } ?>

</html>