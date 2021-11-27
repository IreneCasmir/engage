<?php
//session_start();
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
<h4>Resources</h4>

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


<!DOCTYPE html>
<html lang="english">
        <head>
        <title>Resources</title>

        <meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "customize.css" />
        </head>
    <body>
    <form action="add_check.php" method="post">
    <div style="margin: auto; border: 1px solid white; width: 40%;">
    
        <div class = "form-group">
            <label for = "adding_res_link">Add resource link here(Optional) </label>
			<input class = "form-control" type = "text" name = "link" />

            <label style="margin:30px 0px 0px 0px;" for = "adding_res">Add resource here </label>
			<input class = "form-control" type = "text" name = "res" />
		
		</div>
		<br />
        <div class = "form-group">
			<button class  = "btn btn-success form-control" type = "submit" value = "submit" name = "ADDlink" ><span class = "glyphicon glyphicon-log-in"></span> 
                 Add Resource
            </button>
        </div>
        </div>
        </form>
        <label style="margin:40px;font-size:40px;"> Resources</label>
        <!--<div style="margin: auto; border: 1px solid white; width: 40%;">
        <form action="add_check.php" method="post">
        <div class = "form-group">
			<button class  = "btn btn-success form-control" type = "submit" value = "submit" name = "VIEWlinks" ><span class = "glyphicon glyphicon-log-in"></span> 
                View Resources 
            </button>
        </div>
        </form>
        </div>-->

      <?php  
        $course = $_COOKIE['course'];
        $query1 = "Select link,text from Resources where course_id='$course'";
        $qsql1 = $conn->query($query1);
       
        ?>
        <div class="card-block">
        <div class="table-responsive dt-responsive">
        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
        <th>Description</th>
        <th>Link</th>
        <tbody>
      <?php
        while($rs = mysqli_fetch_array($qsql1))
        {
          $res1 = $rs['text'];  
          $res2 = $rs['link'];
          echo "<tr><td>&nbsp;$res1</td>";
          echo "
          <td>&nbsp;<a href='".$res2."'>$res2</a></td>
          </tr>"; ?>
              
          
          
         
    <?php }  
        
      ?>
    </tbody>
    </table>
    </div>
    </div>


    </body>
</html>