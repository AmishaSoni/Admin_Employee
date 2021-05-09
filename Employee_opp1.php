<?php 
session_start();

if(isset($_COOKIE["loggedin"]))
{
$sql="CREATE DATABASE  employee";
$conn=mysqli_connect('localhost','root','','employee');
$run=mysqli_query($conn,$sql);
if($conn)
echo "connected";
else
echo "not working";



$idd=$_COOKIE["loggedin"];


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
    
    <title>Employee_opp page</title>
    <style>
        .container-fluid
        {
            padding:50px 50px;
        
        }
		@media (max-width:1200px)
		{
			.jumbotron{
				width:100%;
			}
		}
		@media (max-width:900px)
		{
			.jumbotron{
				width:80%;
			}
		}
		@media (max-width:600px)
		{
			.jumbotron{
				width:60%;
			}
		}
		@media (max-width:400px)
		{
			.jumbotron{
				width:50%;
			}
		}
		@media (max-width:300px)
		{
			.jumbotron{
				width:30%;
			}
		}
		
    </style>
</head>
<body>
    <div class="container-fluid text-center">
        <div class="jumbotron">
            <h2>EMPLOYEE DETAILS</h2>
            <?php
                  $qry="SELECT * FROM `employee_info` WHERE `EMPLOYEE ID`='$idd'";
                  $run=mysqli_query($conn,$qry);
                  $data=mysqli_fetch_assoc($run);
            ?>
        <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">EMPLOYEE ID</h4>
              <p class="list-group-item-text"><?php echo $data["EMPLOYEE ID"]; ?></p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">EMPLOYEE NAME</h4>
              <p class="list-group-item-text"><?php echo $data["EMPLOYEE NAME"]; ?></p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">EMPLOYEE EMAIL</h4>
              <p class="list-group-item-text"><?php echo $data["EMPLOYEE EMAIL"]; ?></p>
            </a>
            <a href="#" class="list-group-item ">
                <h4 class="list-group-item-heading">EMPLOYEE PASSWORD </h4>
                <p class="list-group-item-text"><?php echo $data["EMPLOYEE PASSWORD"]; ?></p>
              </a>
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">EMPLOYEE DATE OF BIRTH</h4>
                <p class="list-group-item-text"><?php echo $data["EMPLOYEE PASSWORD"]; ?></p>
              </a>
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">EMPLOYEE SALARY</h4>
                <p class="list-group-item-text"><?php echo $data["EMPLOYEE SALARY"]; ?></p>
              </a>
            </div>
          </div>
    </div>
    
</body>
</html>
<?php 
}
else{
    $_SESSION["login_first"]="Plz Login First!!";
    header("location:Employee_login1.php");

}
?>