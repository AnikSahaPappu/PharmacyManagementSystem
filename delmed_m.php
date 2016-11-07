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
		//session_start();
		$userp=$_SESSION['userp'];
		
?>

<?php
// step 2 ---------perform database query---------
$userp=$_SESSION['userp'];
if($_POST["uname"]==$_SESSION["userp"])
	{
	//$user_user_name_temp=$_POST["uname"];

 	$query=" select *from info where username like '".$_POST['uname']."' ";

	$result=mysqli_query($connection,  $query);
	
		$query="DELETE FROM minfo WHERE mname='$mname'";
		
		$result=mysqli_query($connection,$query);
		
		if(!$result) die("Database query failed");
		else {
			//header("Location: profile.php");
			//echo "<script>alert('Update Successfully!')</script>";
			echo "<script>
				alert(' Deleted successfully!');
				window.location.href='medicine.php';
			</script>";
			//session_destroy();
		}
		}
		
		 else {
				echo "<script>alert('Please Enter Your Own User Name To insert New Medicine ')</script>";
			 }
?>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>