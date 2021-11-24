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
<h4>Set Quizzes</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="teacher_index.php"> <i class="feather icon-home"></i> </a>
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
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
</div>
<div class="card-block">

<form id="main" method="post" action="" enctype="multipart/form-data">
    
    <div class="form-group row">
                <br />
				<div class="form-group">
				  <select name="quizname" class="form-control" required="required">
				    <option value="">-- Select One --</option>
				    <option value="Quiz1">Quiz1</option>
				    <option value="Quiz2">Quiz2</option>  
                    <option value="Quiz3">Quiz3</option>    
				  </select>
				</div>
				<br />
                
        <!--<label class="col-sm-4 col-form-label">Date</label> -->
        <div class="col-sm-6">
            <input type="date" class="form-control" name="date" placeholder="Enter the Date for the Quiz" required="" >
        </div>

    </div>
    <div class="form-group row">
        <label class="col-sm-2"></label>
        <div class="col-sm-10">
            <button type="submit" name="btn_submit" class="btn btn-primary m-b-0">Save</button>
        </div>
    </div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php

if(isset($_POST['btn_submit'])){
	$cid = $_SESSION['course'];
    $date = $_POST['date'];
    $qtype = $_POST['quizname'];
    
        if($date < date("Y-m-d"))
        {
            echo "<script>alert('Set a Valid date!')</script>";
			echo "<script>window.location = 'set_quizzes.php'</script>";
        }
        else
        {
           $sql = "Call Update_quiz ('$cid','$qtype','$date')";
           $result = $conn->query($sql);
        }
    }

   
?>

<!--
<div class="page-body">

<div class="card">
<div class="card-header">
    <div class="col-sm-10">
    </div>

</div>
<div class="card-block">

</div>
</div>
-->

<?php


$conn->close();

?>
