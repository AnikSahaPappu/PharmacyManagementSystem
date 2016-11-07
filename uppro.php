<?php
	session_start();
    if(!isset($_SESSION["usertype"]))
    {
        header("Location: login.php");
    }
?>	

<?php
$fnameErr = $lnameErr = $passErr = $fname = $lname = $password = $cpassword = "";

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	if($_POST["fname"]) {
		$fname = mysql_real_escape_string( trim( $_POST["fname"] ));
	}
	if($_POST["lname"]) {
		$lname = mysql_real_escape_string( trim( $_POST["lname"] ));
	}
	
	if($_POST["password"]) {
		$password = mysql_real_escape_string( trim( $_POST["password"] ));
	}
	if($_POST["cpassword"]) {
		$cpassword = mysql_real_escape_string( trim( $_POST["cpassword"] ));
	}
	
	$isValid = true;
	
	if( $fname != "" && $lname != ""   && $password != "" && $cpassword != "" ) {	
		if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
			$fnameErr = "Only letters and white space allowed<br>";
			$isValid = false;
		}
		
		if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			$lnameErr = "Only letters and white space allowed<br>";
			$isValid = false;
		}
		if($password != $cpassword) {
			$passErr = "The password did not matched<br>";
			$isValid = false;
		}
		$password = $cpassword = "";
	} else {
		echo "<script>alert('Please fill up all fields...')</script>";
		$isValid = false;
	}
	
	if ( $isValid ) {
		include('update_q.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Update </title>
	
	<style rel="stylesheet">
	.form_area
			{
				position: absolute;
				left: 33%;
				top:.8%;				
				height: 300px;
				width: 400px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;

			}
			.form_inner_area
			{
				top:1%;
				height: 200px;
				width: 300px;
				position: absolute;
				left: 50px;						
			}
	body	
	{
		margin:0 auto;
		background: url("res/any.jpg") no-repeat;
		background-size: 100%;
		font-family: 'Open Sans', sans-serif;
	}
	.error {
		color: #FF0000;
		//display: inline-block;
	}
	.dropbtn {
			background-color: #4CAF50;
			color:  white;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
			width: 250%;
		
		}

		/* Dropdown button on hover & focus */
		.dropbtn:hover, .dropbtn:focus {
		background-color: #add8e6;
		}
		
		/* The container <div> - needed to position the dropdown content */
		.dropdown {
			position: absolute;
			right: 62.5%;
			top: 150%;
			display: inline-block;
			
		}
	input[type=submit] {
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
		
			input[type=submit]:hover {
			background-color: #45a049;
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
		
			input[type=password], select {
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

		
	</style>
	
	<!--<script type="text/javascript">
	function redirectRegistration(obj) { 
		window.location.href = "registration.php";
	}
	</script>-->
	<script type="text/javascript">
	function redirectHome(obj) { 
		window.location.href = "home.php";
	}
	</script>
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form_area">
	<div class="form_inner_area">
	<div class="dropdown"> 
     <input type="button" class="dropbtn" value="BACK TO HOME" size="30" onclick="redirectHome(this)" />
	</div>

		<input type="text" name="fname" placeholder="First Name" size="30" value="<?=$fname?>" />
		<span class="error"><?php echo $fnameErr;?></span>
	
		<input type="text" name="lname" placeholder="Last Name" size="30" value="<?=$lname?>" />
		<span class="error"><?php echo $lnameErr;?></span>
				
		
	
		<input type="password" name="password" size="30" placeholder="Your Password" value="<?=$password?>" />
		<span class="error"><?php echo $passErr;?></span>
	
		<input type="password" name="cpassword" size="30" placeholder="Confirm Password"value="<?=$cpassword?>" />
	
		<input type="submit" value="Update" >
	
	</div>
	</div>
</form>
</body>
</html>
