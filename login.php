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
	if(isset($_POST["username"])&&isset($_POST["password"]))
	{
		$query=" select *from info where username ='".$_POST['username']."' AND password ='".$_POST['password']."' ";

		$result=mysqli_query($connection,  $query);	
		
		if($result->num_rows>0)
		{
				$row = $result->fetch_assoc();
				session_start();
				$_SESSION["usertype"]="user";
				$_SESSION["username"]=$_POST['username'];
				$_SESSION["userp"]=$row["username"];	
				header("Location: home.php");			
		}
		else
		{	
			$query=" select *from info where username ='".$_POST['username']."'";
			$result=mysqli_query($connection,  $query);	
			if($result->num_rows>0) {
				echo "<script>alert('Invalid Password!');</script>";
			}
			else {
				echo "<script>alert('Username Not Found!');</script>";
			}
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>.: Login :.</title>
	
	<style rel="stylesheet">

	body	
	{
		margin:0 auto;
		background: url("res/log.png") no-repeat;
		background-size: 100%;
		font-family: 'Open Sans', sans-serif;
	}

		form {
                width:500px;
                margin:50px auto;
			}
			
		/* Reset top and bottom margins from certain elements */
		
		
		.login
		{
			position:absolute;
			left:29%;
			top:25%;
			background-color:#f1f1f1;
			opacity: 0.9;
		}
		.login-header,
		.login p {
		  margin-top: 0;
		  margin-bottom: 0;
		}

		/* The triangle form is achieved by a CSS hack */
		.login-triangle {
		  width: 0;
		  margin-right: auto;
		  margin-left: auto;
		  border: 12px solid transparent;
		  border-bottom-color: #28d;
		}

		.login-header {
		  background: #28d;
		  padding: 20px;
		  font-size: 1.4em;
		  font-weight: normal;
		  text-align: center;
		  text-transform: uppercase;
		  color: #fff;
		}

		.login-container {
		  background: #ebebeb;
		  padding: 12px;
		}

		/* Every row inside .login-container is defined with p tags */
		.login p {
		  padding: 12px;
		}

		.login input {
		  box-sizing: border-box;
		  display: block;
		  width: 100%;
		  border-width: 1px;
		  border-style: solid;
		  padding: 16px;
		  outline: 0;
		  font-family: inherit;
		  font-size: 0.95em;
		}

		.login input[type="text"],
		.login input[type="password"] {
		  background: #fff;
		  border-color: #bbb;
		  color: #555;
		}

		/* Text fields' focus effect */
		.login input[type="email"]:focus,
		.login input[type="password"]:focus {
		  border-color: #888;
		}

		.login input[type="submit"] {
		  background: #28d;
		  border-color: transparent;
		  color: #fff;
		  cursor: pointer;
		}

		.login input[type="submit"]:hover {
		  background: #18c;
		}

		/* Buttons' focus effect */
		.login input[type="submit"]:focus {
		  border-color: #05a;
		}

	</style>
	
</head>
<body>		
	<div class="login">
	<form class="login_form" method="POST" action="">
		<p><input type="text" name="username" placeholder="Username" required="required"></p>
		<p><input type="password" name="password" placeholder="Password" required="required"></p>
		<p><input type="submit" value="Log in"></p>
	</form>
	</div>
</body>
</html>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>