<?php
include('head.php');
include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Quiz</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

<body>
        <form action="" method="post">
        <div class="form-group">
        <label for="qname"> Quiz Name</label>
        <input style="width:auto;" type="text" class="form-control" id="qname" name="qname" placeholder="Name of quiz" Required>
        </div>
            <div class="form-group">
                <label for="course"> Course</label>
                <input style="width:auto;" type="text" class="form-control" id="course" name="course" placeholder="Enter the course here" Required>
            </div>
            
            <button id="mybut" onclick="myFunction()" type="submit" class="btn btn-primary btn-large" value="submit" name="add">Start Quiz</button>
          
        </form>

        <?php if(isset($_POST['add'])){
            
        }?>
    
</body>
</html>