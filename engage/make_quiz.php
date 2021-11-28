<?php
include('head.php');
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Make a Quiz</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body  style="background-image: linear-gradient(to right, grey, white);"
role="document">
    


<style>
</style>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Make Quiz</h4>

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


        
            <!--if(isset($_POST['qname']))
            {
                $cid = $_COOKIE['course'];
                $qname = $_POST['qname'];
                $query = "CALL `table_creation` ('$cid','$qname')";
                $result=mysqli_query($conn,$query);
            }-->
        
        <form action="" method="post">
        <div class="form-group">
        <label for="qname"> Quiz Name</label>
        <input type="text" class="form-control" id="qname" name="qname" placeholder="Name of quiz" Required>
        </div>
            <div class="form-group">
                <label for="question"> Question</label>
                <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here" Required>
            </div>
            <div class="form-group">
                <label for="correct_answer">Correct answer</label>
                <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Enter the correct answer here" Required>
            </div>
            <div class="form-group">
                <label for="option1">option 1</label>
                <input type="text" class="form-control" id="option1" name="option1" placeholder="option1" Required>
            </div>
            <div class="form-group">
                <label for="option2">option 2</label>
                <input type="text" class="form-control" id="option2" name="option2" placeholder="option2" Required>
            </div>
            <div class="form-group">
                <label for="option3">option 3</label>
                <input type="text" class="form-control" id="option3" name="option3" placeholder="option3" Required>
            </div>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="add">+ Add Question</button>
          
            <!--<button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">Save Quiz</button>-->

        </form>
    </div>
     </div>
	 <?php 
     if(isset($_POST['add'])){
$cname = $_COOKIE['course'];
$qname = $_POST['qname'];
/*$fetchqry = "select * from $tname";
$result=mysqli_query($conn,$fetchqry);
$num=mysqli_num_rows($result);
$id = $num + 1;*/
$que = $_POST['question'];
$ans = $_POST['correct_answer'];
$opt1 = $_POST['option1'];
$opt2 = $_POST['option2'];
$opt3 = $_POST['option3'];

//$qry = "insert into $tname (qid,qn,opt1,opt2,opt3,ans) values ('$id','$que','$opt1','$opt2','$opt3','$ans')";
$qry = "insert into Questions (course_id,qname,qn,ans,opt1,opt2,opt3) values ('$cname','$qname','$que','$ans','$opt1','$opt2','$opt3')";
$done = mysqli_query($conn,$qry);
if($done==TRUE){
	echo "Question and Answers Sumbmitted Succesfully";
}
	 }

     if(isset($_POST['save']))
     {
        echo "<script>alert('Quiz has been saved!')</script>";
        echo "<script>window.location = 'set_quizzes.php'</script>";
     }
?>
