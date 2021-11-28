<?php
include('connect.php');
//session_start();

$userID = "";
$errors = array();

//connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['register']))
{
//Registration
$username = mysqli_real_escape_string($db,$_POST['username1']);
$userID = mysqli_real_escape_string($db,$_POST['userID']);
$name = mysqli_real_escape_string($db,$_POST['name']);
$pwd1 = mysqli_real_escape_string($db,$_POST['password1']);
$pwd2 = mysqli_real_escape_string($db,$_POST['password2']);

//validate
if(empty($username)) 
{
    array_push($errors,"Username missing!");
    echo "<script>alert('Username missing!!')</script>";
    echo "<script>window.location = 'register.php'</script>";
}

if(empty($userID)) 
{
    array_push($errors,"user id missing!");
    echo "<script>alert('User ID missing!!')</script>";
    echo "<script>window.location = 'register.php'</script>";
}

if(empty($name)) 
{
    array_push($errors,"Name missing!");
    echo "<script>alert('Name missing!!')</script>";
    echo "<script>window.location = 'register.php'</script>";
}

if(empty($pwd1)) 
{
    array_push($errors,"password missing!");
    echo "<script>alert('Password missing!!')</script>";
    echo "<script>window.location = 'register.php'</script>";
}

if(empty($pwd2)) 
{
    array_push($errors,"password confirmation missing!");
    echo "<script>alert('Password confirmation missing!!')</script>";
    echo "<script>window.location = 'register.php'</script>";
}

if($pwd1 != $pwd2)
{
    array_push($errors,"Passwords mismatch!");
    echo "<script>alert('Passwords mismatch!')</script>";
    echo "<script>window.location = 'register.php'</script>";
}

//check for uniqueness of new userID
if($_POST['username1'] == 'Student')
{
        $userID_check = "SELECT * FROM `student_login` WHERE id = '$userID' LIMIT 1";

        $result = mysqli_query($db,$userID_check);
        $user = mysqli_fetch_assoc($result);

        if($user)
        {
            if($user['id'] == $userID) 
            {
            array_push($errors,"User ID already registered");
            echo "<script>alert('User ID already registered!!')</script>";
            echo "<script>window.location = 'register.php'</script>";
            }
        }
}
else if($_POST['username1'] == 'Teacher')
{
        $userID_check = "SELECT * FROM `teacher_login` WHERE id = '$userID' LIMIT 1";

        $result = mysqli_query($db,$userID_check);
        $user = mysqli_fetch_assoc($result);

        if($user)
        {
            if($user['id'] == $userID) 
            {
            array_push($errors,"User ID already registered");
            echo "<script>alert('User ID already registered!!')</script>";
            echo "<script>window.location = 'register.php'</script>";
            }
        }
}
if(count($errors) == 0)
{
    //$password = md5($pwd1);
    
    $hash = password_hash($_POST['password1'], PASSWORD_DEFAULT); 
    /*$query = "INSERT INTO login (user_id,password) VALUES ('$userID','$hash')";
    mysqli_query($db,$query);*/

    if($_POST['username1'] == 'Student')
    {
        $query1 = "SELECT * from `student` where s_id='$userID' and s_name='$name'";
        $res = mysqli_query($db,$query1);
        if(mysqli_num_rows($res) > 0)
        {
            $query2 = "INSERT INTO `student_login` (id,password) VALUES ('$userID','$hash')";
            mysqli_query($db,$query2);
            //$_SESSION['userID'] = $userID;
            header('location:index.php');
        }
        else
        {
            echo "<script>alert('Student ID not within Organization!')</script>";
            echo "<script>window.location = 'register.php'</script>";
        }
    }
    else if($_POST['username1'] == 'Teacher')
    {
        $query1 = "SELECT * from teacher where t_id='$userID'";
        $res = mysqli_query($db,$query1);
        if(mysqli_num_rows($res))
        {
            $query2 = "INSERT INTO `teacher_login` (id,password) VALUES ('$userID','$hash')";
            mysqli_query($db,$query2);
            //$_SESSION['userID'] = $userID;
            header('location:index.php');
        }
        else
        {
            echo "<script>alert('Teacher ID not within Organization!')</script>";
            echo "<script>window.location = 'register.php'</script>";
        }
    }
   
   
}
else
{
    echo "<script>alert('Registration Failed!')</script>";
    echo "<script>window.location = 'register.php'</script>";
}
}

?>