<?php
  session_start();
  include('head.php');
  include('connect.php');?>
<!DOCTYPE html>
<html lang="english">
<body style="background-image: linear-gradient(to right, grey, white);">

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Students Enrolled</h4>

</div>
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

<div class="page-body">

<div class="card">
<div class="card-header">
    <div class="col-sm-10">
    </div>

</div>
<div class="card-block">
<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
  <tr>
    <th>Student ID</th>
    <th>Name</th>
</tr>
</thead>
<tbody> 
    <?php
    $course = $_COOKIE['course'];
    $query = "select * from student where s_id in(select s_id from courses_taken where course_id='$course')";
    $qsql = $conn->query($query);
  while($rs = mysqli_fetch_array($qsql))
  {
  
    echo "<tr>
    <td>&nbsp;$rs[s_id]</td>
    <td>&nbsp;$rs[s_name]</td>
    </tr>";
  }        
?>
</tbody>


</table>
</div>
</div>
</div>







</div>

</div>
</div>

<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>