<?php
include('connect.php');
	//session_start();
	
	if(ISSET($_POST['login'])){
		if (isset($_POST['username'])) {
    			$username = $_POST['username'];
		}
		if (isset($_POST['uid'])) {
    			$uid = $_POST['uid'];
		}
		if (isset($_POST['password'])) {
    			$password = $_POST['password'];
		}
		//$conn = new mysqli("localhost", "root", "mysql", "mini_lms") or die(mysqli_error());
		if($_POST['username'] == 'Student')
    	{
			$query = $conn->query("SELECT * FROM `student_login` WHERE `id` = '$uid'") or die(mysqli_error());
			$fetch = $query->fetch_array();
			$valid = $query->num_rows;
		}
		else if($_POST['username'] == 'Teacher')
		{
			$query = $conn->query("SELECT * FROM `teacher_login` WHERE `id` = '$uid'") or die(mysqli_error());
			$fetch = $query->fetch_array();
			$valid = $query->num_rows;
		}

		if($valid > 0){
			if(password_verify($password,$fetch['password']))
				{
				  
				  if($_POST['username'] == 'Student'){
					setcookie("uid",$_POST["uid"],time()+3600);
					setcookie("username",$_POST["username"],time()+3600);
					setcookie("password",$_POST["password"],time()+3600);	
					header("location: student_index.php");
			          }
				  else if($_POST['username'] == 'Teacher'){
					setcookie("uid",$_POST["uid"],time()+3600);
					setcookie("username",$_POST["username"],time()+3600);
					setcookie("password",$_POST["password"],time()+3600);
					header("location: teacher_index.php");
				  }
				}
				else
				{
				 echo "<script>alert('Password mismatch!')</script>";
				 echo "<script>window.location = 'login.php'</script>";
				}
			}
			else{
				 echo "<script>alert('Account Does Not Exist!')</script>";
				 echo "<script>window.location = 'login.php'</script>";
			}

}
		
?>
