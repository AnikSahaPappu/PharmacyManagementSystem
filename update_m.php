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
$userp=$_SESSION['userp'];
if($_POST["uname"]==$_SESSION["userp"])
	{
	//$user_user_name_temp=$_POST["uname"];

 	$query=" select *from info where username like '".$_POST['uname']."' ";

	$result=mysqli_query($connection,  $query);

	$isValid = true;
	if($isValid == true)
	{
		$mname=$_POST["mname"];
		$unit=$_POST["unit"];
		
		$catagory=$_POST["catagory"];
	
		$id=$_POST["id"];

		$query="update minfo set mname='$mname',unit='$unit', catagory='$catagory',id ='$id'
		where mname='$mname'";
		
		$result=mysqli_query($connection,$query);
		
		if(!$result) die("Database query failed");
		else {
			//header("Location: profile.php");
			//echo "<script>alert('Update Successfully!')</script>";
			echo "<script>
				alert('Update Successfully!');
				window.location.href='medicine.php';
			</script>";
		}
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