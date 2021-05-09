<?php
$conn=mysqli_connect('localhost','root','','employee');
if(isset($_GET["id"]))
{
$r=$_GET["id"];
$qry="DELETE FROM `employee_info` WHERE `EMPLOYEE ID`='$r'";
    $run=mysqli_query($conn,$qry);
	//echo "data deleted";
	header("location:Admin_opp1.php");
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
    
    <title>Delete page</title>
    <body>
    </body>
</html>