<?php 
include('connect.php');
 ?>
<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Mini LMS</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "customize.css" />

	    <style>
            h2 {
                text-align: center;
            }
            .form-group input, .form-group label
            {
                display:inline-block;
                align : center;
            }

            .form-group label {
                width:200px;
                font-size:25px; 
            }
        </style>
    </head>
<body>
    <div class = "navbar navbar-default navtop">
		<label class = "navbar-brand">Mini LMS</label>
	</div>

    <div class="container">
        
        <div class="header">
            <h2>Login</h2>
        </div>

        <form action="login_check.php" method="post">

        <div style="margin: auto; border: 1px solid white; width: 500px;">

				<br />
				<div class="form-group">
				  <select name="username" class="form-control" required="required">
				    <option value="">-- Select One --</option>
				    <option value="Student">Student</option>
				    <option value="Teacher">Teacher</option>
				    
				  </select>
				</div>
				<br />


            <div class = "form-group">
					<label for = "userid">UserID</label>
					<input class = "form-control" type = "text" name = "uid"  required = "required"/>
			</div>
			<br />
			<div class = "form-group">
					<label for = "password">Password</label>
					<input class = "form-control" type = "password" name = "password" required = "required" />
			</div>
            <br />
            <div class = "form-group">
					<button class  = "btn btn-success form-control" type = "submit" value = "submit" name = "login" ><span class = "glyphicon glyphicon-log-in"></span> 
                     Login
                    </button>
            </div>
            <div style="background-color:White;" class = "form-group">
                <p><b>Not Registered? <a href="register.php">Register</b></p>
            </div>
        </div>
        </form>
    </div>
   <img src = "images/Learn-bulb.jpg" class = "background">	

</body>
</html>
