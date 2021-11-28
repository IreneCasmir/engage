<!DOCTYPE html>
<html>
<?php require('connect.php');
include('head.php');
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>Quiz</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "customize.css" />
  
    	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>


  <div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="student_index.php"> <i class="feather icon-home"></i> </a>
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


  <body role="document">
<head>
<title>Quiz</title>
</head>
<body onload="hidder();">
<form action="" method="post">
<div id="hide"  style="align:center;">
    <div class="col sm-8">
                <br />
                <label style="margin-right:5px;">Enter Quiz name here </label>
                <input style="width:auto;margin-left:800px;" type="text" class="form-control" name="quiz_name" placeholder="Enter the name of the Quiz" required="" >
    </div>
                <br>
    <div class="col sm-8">
                <label style="margin-right:5px;">Enter Course ID here </label>
                <input style="width:auto;margin-left:800px;" type="text" class="form-control" name="cid" placeholder="Enter the course ID" required="" >
    </div>
    <br>
</form>
<button class="button" name="start" id="mybut" onclick="myFunction()">START QUIZ</button>
</div>
<div id="myDIV" style="padding: 10px 30px;">

<form action="result.php" method="post" id="form">  				
<table>
  <?php 
  $cid =  $_POST['cid'];
  $qname = $_POST['quiz_name'];
       /*if(isset($_POST['start']))
       {
        $uid = $_COOKIE["userid"];
        $sql = "select flag from scores where s_id='$uid' and course_id='$cid' and q_name='$qname'";
				$result=mysqli_query($conn,$sql);
        if($result['flag'] == 1)
        {
          echo "<script>alert('Quiz already attempted!')</script>";
				  echo "<script>window.location = 'student_index.php'</script>";
		
        }*/
       
         
        $dur = "select duration from exams where course_id='$cid' and quiz_name='$qname'"; 
        $res1=mysqli_query($conn,$dur);
        $res_row = mysqli_fetch_array($res1,MYSQLI_ASSOC);
        $row1 =  $res_row['duration'];
       
        $fetchqry = "select * from Questions where course_id='$cid' and qname='$qname'";
				$result=mysqli_query($conn,$fetchqry);
				$num=mysqli_num_rows($result);
			
			   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  ?>
  <tr><td><h3><br><?php echo @$snr +=1;?>&nbsp;-&nbsp;<?php echo @$row['qn'];?></h3></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;a )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['opt1'];?>">&nbsp;<?php echo $row['opt1']; ?><br>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;b )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['opt2'];?>">&nbsp;<?php echo $row['opt2'];?></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;c )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['opt3'];?>">&nbsp;<?php echo $row['opt3']; ?></td></tr>
			    <?php  }
																	?> 
		<tr><td style="align:center;"><button class="button3" name="click" >Submit Quiz</button></td></tr>
	</table>
  <form>
</div>
<?php
if(isset($_POST["click"]))
{
        $uid = $_COOKIE["userid"];
        $sql = "insert into scores (s_id,course_id,q_name,flag) values ('$uid','$cid','$qname',1)";
				$result=mysqli_query($conn,$sql);
}
?>
<script>
function myFunction() {
	var x = document.getElementById("myDIV");
    var b = document.getElementById("mybut");
    var c = document.getElementById("hide");

    var x = document.getElementById("myDIV");
    if (x.style.display === "none") { 
    b.style.visibility = 'hidden';
    c.style.visibility = 'hidden';
    x.style.display = "block";
    
	//startTimer();
        }
        }
window.onload = function() {
  document.getElementById('myDIV').style.display = 'none';
};

window.onscroll = function() {myFun()};
var sticky = navbar.offsetTop -50;

function myFun() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>