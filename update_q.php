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
	
	$userp=$_SESSION['userp'];
	
	$sql_super = "SELECT *FROM info where username='".$userp."'";
	$result_super = $connection->query($sql_super);
	$row_detail = $result_super->fetch_assoc();
?>

<?php
// step 2 ---------perform database query---------
	$isValid = true;
	if($isValid == true)
	{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$password=$_POST["password"];

		$query="update info set fname='$fname',lname='$lname', password='$password'
		where username='$userp'";
		
		$result=mysqli_query($connection,$query);
		
		if(!$result) die("Database query faileded");
		else {
			//header("Location: profile.php");
			//echo "<script>alert('Update Successfully!')</script>";
			echo "<script>
				alert('Update Successfully!');
				window.location.href='profile.php';
			</script>";
		}
	}
?>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>