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

	
		if($result->num_rows>0)
		{
		//---------
			/*session_start();
				$_SESSION["usertype"]="user";
				$_SESSION["uname"]=$_POST['uname'];
				$_SESSION["usern"]=$row["usern"];
		//---------*/
			if(isset($_POST["uname"])&&isset($_POST["mname"])&&isset($_POST["unit"])&&isset($_POST["catagory"])&&isset($_POST["id"]))
				{
						$uname=$_POST["uname"];
						$mname=$_POST["mname"];

						$unit=$_POST["unit"];
						
						$catagory=$_POST["catagory"];
						$id=$_POST["id"];
						
						$query="INSERT INTO minfo (uname,mname,unit,catagory,id) 
						VALUES ('$uname', '$mname','$unit','$catagory','$id')";

						$result=mysqli_query($connection,$query);
		
				if(!$result) die("Database query failed");
				else {
						session_start();
						$_SESSION["fresher"]="congrates";
						header("Location: medicine.php");
					}
				}
			
		}
			/*else {
				echo "<script>alert('username not exist...')</script>";
			 }*/
		
	}
	 else {
				echo "<script>alert('Please Enter Your Own User Name To insert New Medicine ')</script>";
			 }
		



	
			
?>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>