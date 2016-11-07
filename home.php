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
		
		$sql_super = "SELECT *FROM info where username='".$userp."'"; //
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
	<title> Home </title>
<style>
	body	
	{
		margin:0 auto;
		background: url("res/h.jpg") no-repeat;
		background-size: 100%;	
		font-family: 'Open Sans', sans-serif;
	}
	h1 {
    color: white;
    font-family: Georgia;
    font-size: 300%;
	}
	h2 {
    color: gray;
    font-family: Georgia;
    font-size: 150%;
	}
	p.serif {
    font-family: "Times New Roman", Times, serif;
			}
	.form_area
			{
				position: absolute;
				left: 1%;
				top:5%;				
				height: 475px;
				width: 300px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
				border-radius: 4px;
			}
			.form_inner_area
			{
				top:12%;
				height: 200px;
				width: 250px;
				position: absolute;
				left: 25px;	

			}
			button {
			width: 100%;
			background-color: #4169e1;
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:55%;	
			}
		
			button:hover {
			background-color: #add8e6;
			}
		
		.form_area input[type=text]{
			width: 99.3%;
			padding: 12px 20px;
			margin: 3px 3px;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
</style>
</head>
<body>
<center><h1> PHARMACY </h1>
	<h2>We Are More Than Just Presciption</h2><br> <br> <br>
	<p class="serif"> “The greatest disease in the West today</p> <p class="serif">is not TB or leprosy; it is being  unwanted, unloved, and uncared for.</p>
    <p class="serif"> We can cure physical diseases with medicine,</p> <p class="serif"></p><p class="serif">but the only cure for loneliness, despair, and hopelessness is love.</p> 
	<p class="serif">There are many in the world who are dying for</p> <p class="serif">a piece of bread but there are many more dying for a little love. The poverty </p>
	<p class="serif">in the West is a different kind of poverty -- it is not only a poverty </p><p class="serif">of loneliness but also of spirituality. There's a hunger
    for love, as there is a hunger for God.”</p>
     <p class="serif"><i> Mother Teresa </i></p></center>


<div class="form_area">
		<input type="text" name="fname" size="30" value="<?php echo $row_detail["fname"]." ".$row_detail["lname"];?>" disabled  />
		<div class="form_inner_area">
        	<a href="profile.php"><button>Profile</button></a><br>
			<a href="uppro.php"><button>Update Profile</button></a><br>
			<a href="medicine.php"><button>Medicine List</button></a>
			<a href="addmed.php"><button>Add To Medicine List</button></a>
			<a href="delmed.php"><button>Delete From Medicine List</button></a>
			<a href="upmed.php"><button>Update Medicine List</button></a><br><br>
			<a href="logout.php"><button>Logout</button></a><br>
		</div>
	</div>
	
</body>
</html>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>