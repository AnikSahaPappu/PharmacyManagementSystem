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
	?>
	
	<?php
    if(!isset($_SESSION["usertype"]))
    {
        header("Location: login.php");
    }
	?>
	<?php
	$sql_super = "SELECT *FROM minfo where uname='".$userp."'";
	$result_super = $connection->query($sql_super);
	$row_detail = $result_super->fetch_assoc();
		
	if ($result_super->num_rows >0) {
	echo "<center><table><tr><th>Username</th><th>Medicine Name</th><th>Unit</th><th>Catagory</th><th>Id</th></tr></center>";
    // output data of each row
    while($row_detail = $result_super->fetch_assoc()) {
        echo "<tr><td>".$row_detail["uname"]."</td><td>".$row_detail["mname"]."</td><td>".$row_detail["unit"]."</td><td>"
		.$row_detail["catagory"]."</td><td>".$row_detail["id"]."</td><tr>";
    }
    echo "</table>";
} 

	else {
			echo "<script>
			alert('No Medicine!');
			window.location.href='home.php';
			</script>";
		}
		?> 
<!Doctype html>
<html>
<head>
	<title>Medicine List</title>
<style>
	body	
	{
		margin:0 auto;
		background: url("res/cv.jpg") no-repeat;
		background-size: 100%;	
		font-family: 'Open Sans', sans-serif;
	}
	button {
			width: 50%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:55%;	
			font-size: 16px;
			}
		
			button:hover {
			background-color: #add8e6;
			}

	table
	{
	 width:100%;
	 font-family:inherit;
	 font-weight:light;
	 color: #FFFAFA ;
	}
	th {
		color:#00FF00;
	}
	table,td,th
	{
	 border-collapse:collapse;
	 border:solid #d0d0d0 1px;
	 padding:15px;
	 text-align: center;
	}
</style>
</head>
	<body>		
		<a href="addmed.php"><button>Add Medicine</button></a><br>
		<a href="home.php"><button>Home</button></a><br>
		
	</body>
</html>
<?php
mysqli_close($connection);
?>