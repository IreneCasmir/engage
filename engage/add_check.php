<?php
//session_start();
include('head.php');
include('connect.php');?>

<!DOCTYPE html>
<html lang="english">
  <head>
  <meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "customize.css" />
  <title>Resources</title>
  </head>

  <div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<h4> Resources for the course </h4>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
    <?php if($_COOKIE['username'] == 'Student')
    {?>
    <a href="student_index.php"><i class="feather icon-home"></i> </a>
    
    <?php }
    else if($_COOKIE['username'] == 'Teacher')
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

<body>
<!--<div class="navbar-wrapper">
        <div style="margin:30px;" class="navbar-container container-fluid">
            
            <a href="student_index.php">
            Home
            </a>
            
            </div>
</div> -->

<?php
    
    //$conn = mysqli_connect('localhost','root','mysql','mini_lms') or die("could not connect to database");
    $course = $_COOKIE['course'];

    if(isset($_POST['ADDlink']))
    {     
            if(isset($_POST['res']))
            $text = mysqli_real_escape_string($conn,$_POST['res']);

            if(isset($_POST['link']))
            {
             $link = mysqli_real_escape_string($conn,$_POST['link']);
             mysqli_query($conn,"Insert into `Resources` (course_id,link,text) values ('$course','$link','$text')");
            }
            else
            {
              mysqli_query($conn,"Insert into `Resources` (course_id,text) values ('$course','$text')"); 
            }
            header("location: resources.php");
        
    }

    /*if(isset($_POST['VIEWlinks']))
    {
        $query = "Select link from resources where c_id='$course'";
        $qsql = $conn->query($query); ?>
        <div class="card-block">
        <div class="table-responsive dt-responsive">
        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
        
        <tbody>
      <?php
        while($rs = mysqli_fetch_array($qsql))
        {
          $res = $rs['link'];
        
          //echo "<a href='".$res."'>$res</a>"; 
          //echo nl2br("\n");     
          
          
          echo "<tr>
          <td>&nbsp;<a href='".$res."'>$res</a></td>
          </tr>";
        }  
    }      
     */ ?>
    </tbody>
    </table>
    </div>
    </div>
</body>
</html>