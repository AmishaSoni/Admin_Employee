<?php 

$sql="CREATE DATABASE  employee";
$conn=mysqli_connect('localhost','root','','employee');
$run=mysqli_query($conn,$sql);
if($conn)
echo "connected";
else
echo "not working";


//------------------As an admin--------------------
if(isset($_GET["admin"]))
{
    header("location:Admin_login1.php");
}





//------------------As an employee--------------------
if(isset($_GET["employee"]))
{
    header("location:Employee_login1.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .bg-1
    {
        background-color:black;
        color:white;
        height:450px;
    }
    .bg-2
    {
      background-color:grey;
      
    }
    .container-fluid
    {
      padding:100px 100px;
    }
    .container-fluid input[type="submit"]
    {
        background-color:black;
        width:200px;
        display:inline-block;
        text-align:center;
        font-size:25px;
        padding:10px;
        color:white:
        border:2px solid black;
    }
    .bg-2 h1{
      padding:20px;
      margin:20px;
    }
    </style>
    
    
    </head>
<body>
<div class="container-fluid text-center bg-1">
<h1 style="font-size:65px;">---------WELCOME---------</h1>
<img src="nicolas-picard--lp8sTmF9HA-unsplash.jpg" alt="image" class="img-circle" width="350" height="350">

</div>
<div class="container-fluid text-center bg-2">
  <h1>SIGN IN AS...</h1>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
    <input type="submit" value="ADMIN" name="admin" class="btn btn-default btn-lg"/>
    <input type="submit" value="EMPLOYEE" name="employee" class="btn btn-default btn-lg"/>
    </form>

</div>
    
</body>
</html>