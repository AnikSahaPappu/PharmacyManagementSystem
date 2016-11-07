<?php
		// step 1 --------- database connection established--------
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$dbname="pdb";

		$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

		if(mysqli_connect_errno())
		{
			die("Database Connection Failed ");
		}
		
	session_start();
	$userp=$_SESSION['userp'];
	
	$sql_super = "SELECT *FROM info where username='".$userp."'";
	$result_super = $connection->query($sql_super);
	$row_detail = $result_super->fetch_assoc();
?>

<?php
    if(!isset($_SESSION["usertype"]))
    {
        header("Location: login.php");
    }
?>	

<!DOCTYPE html>
<html>
<head>
	<title> Profile </title>
	
	<style rel="stylesheet">
	
	body	
	{
		margin:0 auto;
		background: url("res/any.jpg") no-repeat;
		background-size: 100%;
		font-family: 'Open Sans', sans-serif;
	}
	.form_area
			{
				position: absolute;
				left: 33%;
				top:.8%;				
				height: 617px;
				width: 400px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
			}
			.form_inner_area
			{
				top:0%;
				height: 200px;
				width: 300px;
				position: absolute;
				left: 50px;						
			}
		input[type=text], select {
			width: 100%;
			padding: 12px 20px;
			margin: 3px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
				.form_area2
			{
				top:.5%;
				height: 200px;
				width: 150px;
				position: absolute;
				right: .5%;	
				opacity:.9;
			}

		
	</style>
	
</head>
<body>

	<div class="form_area">
	<div class="form_inner_area">
		<center><h2>User Information</h2></center>
		<input type="text" name="fname" placeholder="First Name" size="30"  value="<?php echo "First Name: ".$row_detail["fname"];?>" disabled  />
	
		<input type="text" name="lname" placeholder="Last Name" size="30" value="<?php echo "Last Name: ".$row_detail["lname"];?>" disabled />
	
		<input type="text" name="gender" placeholder="Gender" size="30" value="<?php echo "Gender: ".$row_detail["gender"];?>" disabled />
		
		<input type="text" name="address" placeholder="Address" size="30" value="<?php echo "Address: ".$row_detail["address"];?>" disabled />

		<input type="text" name="email" size="30" placeholder="Email" value="<?php echo "Email: ".$row_detail["email"];?>" disabled />
	
		<input type="text" name="phone" size="30" placeholder="Phone Number" value="<?php echo "Phone: ".$row_detail["phone"];?>" disabled />
	
		<input type="text" name="username" size="30" placeholder="Username" value="<?php echo "Username: ".$row_detail["username"];?>" disabled />
		
		<input type="text" name="password" size="30" placeholder="New Password" value="<?php echo "Password: ".$row_detail["password"];?>" disabled />
		<br> <br> <br> <br>
		
	</div>
	</div>
</body>
</html>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>