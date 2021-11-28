<?php include('register_check.php') ?>
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
                font-size:20px; 
            }
        </style>
    </head>
<body>
    <div class="container">
        
        <div class="header">
            <h2>Register</h2>
        </div>

        <form action="register.php" method="post">
            <?php include('errors.php') ?>
        <div style="margin: auto; border: 1px solid white; width: 500px;">
            <div class="form-group">
				  <select name="username1" class="form-control" required="required">
				    <option value="">-- Select One --</option>
				    <option value="Student">Student</option>
				    <option value="Teacher">Teacher</option>
				    
				  </select>
			</div>
			<br />

            <div class = "form-group">
					<label for = "userid">UserID</label>
					<input class = "form-control" type = "text" name = "userID"  required = "required"/>
			</div>
            <div class = "form-group">
					<label for = "name">Name</label>
					<input class = "form-control" type = "text" name = "name"  required = "required"/>
			</div>
			<br />
			<div class = "form-group">
					<label for = "password">Password</label>
					<input class = "form-control" type = "password" name = "password1" required = "required" />
			</div>
            <br />
            <div class = "form-group">
					<label for = "password">Confirm Password</label>
					<input class = "form-control" type = "password" name = "password2"  />
			</div>
            <br />
            <div class = "form-group" >
					<button class  = "btn btn-success form-control" type = "submit" value = "submit" name = "register" ><span class = "glyphicon glyphicon-log-in"></span> 
                     Register
                    </button>
			</div>
            <div style="background-color:White;" class = "form-group">
                <p>Already Registered? <a href="index.php"><b>Log in</b></p>
            </div>
        </div>
        </form>
    </div>
    <img src = "images/Learn-bulb.jpg" class = "background">	

</body>
</html>
