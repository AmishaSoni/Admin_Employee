<?php
$conn=mysqli_connect('localhost','root','','employee');
if($conn)
echo "connected";
else
echo "not working";

$qry="SELECT * FROM `employee_info`";
$run=mysqli_query($conn,$qry);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_opp page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <div class="container-fluid ">
        <div class="jumbotron ">
		<div class="table-responsive">
        <table class="table table-striped ">
            <div class="page-header text-center">
                <h2>ADMIN PANEL</h2>
            </div>
            
            <thead>
                <tr>
                  <th>EMPLOYEE ID</th>
                  <th>EMPLOYEE NAME</th>
                  <th>EMPLOYEE EMAIL</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
               
                
                <tr>
                <?php
                while($data=mysqli_fetch_assoc($run))
                {
                    ?>
    
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
                  <td><?php echo $data["EMPLOYEE ID"];?></td>
                  <td><a href="Employee_opp1.php?id=<?php echo $data["EMPLOYEE ID"];?>"><?php echo $data["EMPLOYEE NAME"];?></a></td>
                  <td><?php echo $data["EMPLOYEE EMAIL"]?></td>
                  <td><button type="button" class="btn btn-info"><a href="Update1.php?id=<?php echo $data["EMPLOYEE ID"];?>">UPDATE</a></button>
                  <button type="button" class="btn btn-success"><a href="Delete1.php?id=<?php echo $data["EMPLOYEE ID"];?>">DELETE</a></button></td>
                   </form>
                </tr>
          
<?php
}
if(isset($_GET["delete"]))
{
    header("location:Delete1.php");
}
if(isset($_GET["update"]))
{
    header("location:Update1.php");
}


?>
</table>
</div>
</div>
</div>
</body>
</html>