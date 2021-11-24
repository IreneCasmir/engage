
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




<!DOCTYPE html>
<html lang="english">
        <head>
        <title>Student Home</title>
        <meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "customize.css" />
        
    
  <style>
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: Grey;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
}
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color:Black;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: White;
  color: Blue;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: Grey;
}
</style>  
    
    
    
    </head>
        <body >

       <?php  
        $u = $_SESSION['uid'];
        //$v="Select `s_name` from `student` where s_id='$u'";
        //$conn = new mysqli("localhost", "root", "mysql", "mini_lms") or die(mysqli_error());

        $query = mysqli_query($conn,"Select `course_name` from `course` where `course_id` in (select `course_id` from `courses_taken` where s_id='$u')");
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


        
  <button class="openbtn" onclick="openNav()">☰ View Upcoming Activities</button> 
        <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <?php 
  
    $sql1 = mysqli_query($conn,"Select * from quiz where course_id in(Select course_id from courses_taken where s_id='$u')");
    while ($row = mysqli_fetch_assoc($sql1)) 
     { 
        if(!(is_null($row['Quiz1'])))
        { 
            echo nl2br("<h4>".$row['course_id']."-Quiz1 on ".$row['Quiz1']."\n\n</h4>");
        }

        if(!(is_null($row['Quiz2'])))
        { 
            echo nl2br("<h4>".$row['course_id']."-Quiz2 on ".$row['Quiz2']."\n\n</h4>");
        }

        if(!(is_null($row['Quiz3'])))
        { 
            echo nl2br("<h4>".$row['course_id']."-Quiz3 on ".$row['Quiz3']."\n\n</h4>");
        }
     } ?>
</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   

    </body>
</html>
