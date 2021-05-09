<?php
$conn=mysqli_connect('localhost','root','','employee');
if($conn)
echo "connected";
else
echo "not working";

if(isset($_GET["submit"]))
{
   
    $id=$_GET["E_id"];
    $name=$_GET["name"];
	echo $id;
    $email=$_GET["email"];
    $salary=$_GET["salary"];
    $pass=$_GET["pass"];
    $dob=$_GET["dob"];
    $qry="UPDATE `employee_info` SET 
	`EMPLOYEE NAME`='$name',`EMPLOYEE EMAIL`='$email',`EMPLOYEE SALARY`='$salary',
	`EMPLOYEE PASSWORD`='$pass',`EMPLOYEE DOB`='$dob' WHERE `EMPLOYEE ID`='$id'";
     $run=mysqli_query($conn,$qry);
	 header("location:Admin_opp1.php");
}
if(isset($_POST["submit"]))
	 {
				$name=$_POST["name"];
				$email=$_POST["email"];
				
				function check($name)
				{
					if(!preg_match("/^[a-zA-Z ]*$/",$name))
			        {
				         echo "<h6>*error:only letters and white space allowed !</h6>";
			        }
			}
	 
	 check($name);
	 check($email);
      }
      if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$qrey="SELECT * FROM `employee_info` WHERE `EMPLOYEE ID`='$id'";
	$runn=mysqli_query($conn,$qrey);
	$data=mysqli_fetch_assoc($runn);
	
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
    <title>Update</title>
    <style>
        .container-fluid
        {
          padding :50px 50px;
        }
        

    </style>
</head>
<body>
    <div class="container text-center">
        <div class="jumbotron">
            <h2>EMPLOYEE DETAILS TO UPDATE</h2>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
                <div class="form-group">
                  <label >EMPLOYEE ID</label>
                  <input type="hidden" class="form-control" name="E_id" value="<?php echo $data["EMPLOYEE ID"];?>"/>
                </div>
                <div class="form-group">
                  <label f>EMPLOYEE ID</label>
                  <input type="text" class="form-control" name="id" value="<?php echo $data["EMPLOYEE ID"];?>" disabled />
                </div>
                <div class="form-group">
                    <label >EMPLOYEE NAME</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $data["EMPLOYEE NAME"];?>"/>
                  </div>
                  <div class="form-group">
                    <label >EMPLOYEE EMAIL</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $data["EMPLOYEE EMAIL"];?>"/>
                  </div>
                  <div class="form-group">
                    <label >EMPLOYEE PASSWORD</label>
                    <input type="password" class="form-control"  name="pass" value="<?php echo $data["EMPLOYEE PASSWORD"];?>"/>
                  </div>
                  <div class="form-group">
                    <label >EMPLOYEE DOB</label>
                    <input type="text" class="form-control" name="dob"value="<?php echo $data["EMPLOYEE DOB"];?>">
                  </div>
                  <div class="form-group">
                    <label >EMPLOYEE SALARY</label>
                    <input type="text" class="form-control" name="salary" value="<?php echo $data["EMPLOYEE SALARY"];?>"/>
                  </div>
                  <button type="submit" value="SUBMIT" name="submit" class="btn btn-primary text-center">SUBMIT</button>
              </form>
        </div>
    </div>
    
</body>
</html>
