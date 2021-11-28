<?php
//session_start();
include('head.php');
include('connect.php');
?>
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
                <label style="margin-right:5px;">Enter Quiz name here </label>
                <input style="width:auto;" type="text" class="form-control" name="quiz_name" placeholder="Enter the name of the Quiz" required="" >

				<br />
                
        <!--<label class="col-sm-4 col-form-label">Date</label> -->
        <div class="col-sm-6">
            <input type="date" class="form-control" name="date" placeholder="Enter the Date for the Quiz" required="" >
        </div>
        <div class="col-sm-8">
            <label style="margin-right:5px;margin-top:10px;">Quiz duration in seconds </label>
            <input style="width:100px;margin-top:10px;" type="text" class="form-control" name="durn" placeholder="Enter the duration for the Quiz" required="" >
        </div>
       

    </div>
    <div class="form-group row">
        <label class="col-sm-2"></label>
        <div class="col-sm-10">
            <button type="submit" name="set_date" class="btn btn-primary m-b-0">Set Quiz Date</button>
        </div></div> 

    </div>

</form>
<div class="form-group row">
        <form action="make_quiz.php" method="post">
        <div class="col-sm-10">
            <button type="submit" name="make_quiz" class="btn btn-primary m-b-0">Make a Quiz</button>
        </div></form></div>

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

if(isset($_POST['set_date'])){
	$cid = $_COOKIE['course'];
    $date = $_POST['date'];
    $qtype = $_POST['quiz_name'];
    $query = $conn->query("select * from exams where quiz_date=$date");
    $fetch = $query->fetch_array();
	$valid = $query->num_rows;
    //$q_time = $_POST['set_time'];
        if($date <= date("Y-m-d"))
        {
            echo "<script>alert('Set a Valid date!')</script>";
			echo "<script>window.location = 'set_quizzes.php'</script>";
        }
        else if( $valid > 0)
        {
            echo "<script>alert('Please reschedule the quiz!Another Quiz is already scheduled for this day!')</script>";
			echo "<script>window.location = 'set_quizzes.php'</script>";
        }
        else
        {
           $durn = $_POST['durn'] ;
           $sql = "Insert into exams (course_id,quiz_name,quiz_date,quiz_time,duration) values ('$cid','$qtype','$date','10:00:00','$durn')";
           $result = $conn->query($sql);

            //$query = "CALL `table_creation` ('$cid','$qtype')";
            //$result=mysqli_query($conn,$query);
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
</body>
</html>