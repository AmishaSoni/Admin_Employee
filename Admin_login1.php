<?php 
session_start();
if(isset($_SESSION["login_second"]))
{
    echo $_SESSION["login_second"];
}

$sql="CREATE DATABASE  employee";
$conn=mysqli_connect('localhost','root','','employee');
$run=mysqli_query($conn,$sql);
if($conn)
echo "connected";
else
echo "not working";
if(isset($_GET["submit1"]))
{
    $pass=$_GET["pass1"];
    $id=$_GET["id1"];
    $qry="SELECT * FROM `employee_info` WHERE `EMPLOYEE PASSWORD`='$pass' AND `EMPLOYEE ID`='$id'";
    $run=mysqli_query($conn,$qry);
    if(mysqli_num_rows($run)<1)
    {
		?>
		<script>
		alert("INVALID INPUT");
		</script>
       
	   <?php
    }
    else{
        setcookie("get_in",$id,time()+86400);
         header("location:Admin_opp1.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Admin_login page</title>
    <style>
        .container-fluid
        {
            padding:50px 50px;
        
        }
    </style>
</head>
<body>
    <div class="container-fluid text-center">
        <div class="jumbotron">
            <div class="page-header">
                <h2>ADMIN LOGIN</h2>      
              </div>
    <form>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">ADMIN ID</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id1" >
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="pass1" placeholder="Password">
          </div>
        </div>
        <button type="submit" value="SUBMIT" name="submit1" class="btn btn-primary text-center">SUBMIT</button>
      </form>
    </div>
</div>
    
</body>
</html>