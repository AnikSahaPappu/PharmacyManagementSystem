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
?>

<?php
// step 2 ---------perform database query---------

	if(isset($_POST["username"]))
	{
	//$user_user_name_temp=$_POST["username"];

 	$query=" select *from info where username like '".$_POST['username']."' ";

	$result=mysqli_query($connection,  $query);	

	
		if($result->num_rows>0)
		{
			echo "<script>alert('username taken, try with another one')</script>";
		}
		
		if($result->num_rows<=0)
		{
			$query=" select *from info where email like '".$_POST['email']."' ";		

			$result=mysqli_query($connection,  $query);	

			if($result->num_rows>0)
			{
				echo "<script>alert('email is used , try with another one')</script>";
			}
		}
		if($result->num_rows<=0)
		{
			$query=" select *from info where phone like '".$_POST['phone']."' ";		

			$result=mysqli_query($connection,  $query);	

			if($result->num_rows>0)
			{
				echo "<script>alert('phone is used , try with another one')</script>";
			}
		}
	}


	if(isset($_POST["fname"])&&isset($_POST["lname"])&&isset($_POST["gender"])&&isset($_POST["address"])
	&&isset($_POST["email"])&&isset($_POST["phone"])&&isset($_POST["username"])&&isset($_POST["password"])&&$result->num_rows<=0)
	{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];

		$gender=$_POST["gender"];
		
		$address=$_POST["address"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$username=$_POST["username"];
		$password=$_POST["password"];

		$query="INSERT INTO info (fname,lname,gender,address,email,phone,username,password) 
		VALUES ('$fname', '$lname','$gender','$address','$email','$phone','$username','$password')";

		$result=mysqli_query($connection,$query);
		
		if(!$result) die("Database query faileded");
		else {
			session_start();
			$_SESSION["fresher"]="congrates";
			header("Location: login.php");
		}
	}
?>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>