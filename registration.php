<?php
$fnameErr = $lnameErr = $emailErr = $numberErr = $passErr = $fname = $lname = $address = $email = $phone = $username = $password = $cpassword = "";

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	if($_POST["fname"]) {
		$fname = mysql_real_escape_string( trim( $_POST["fname"] ));
	}
	if($_POST["lname"]) {
		$lname = mysql_real_escape_string( trim( $_POST["lname"] ));
	}
	if($_POST["address"]) {
		$address = mysql_real_escape_string( trim( $_POST["address"] ));
	}
	if($_POST["email"]) {
		$email = mysql_real_escape_string( trim( $_POST["email"] ));
	}
	if($_POST["phone"]) {
		$phone = mysql_real_escape_string( trim( $_POST["phone"] ));
	}
	if($_POST["username"]) {
		$username = mysql_real_escape_string( trim( $_POST["username"] ));
	}
	if($_POST["password"]) {
		$password = mysql_real_escape_string( trim( $_POST["password"] ));
	}
	if($_POST["cpassword"]) {
		$cpassword = mysql_real_escape_string( trim( $_POST["cpassword"] ));
	}
	
	$isValid = true;
	
	if( $fname != "" && $lname != "" && $address != "" && $email != "" 
	&& $phone != "" && $username != "" && $password != "" 
	&& $cpassword != "" ) {	
		if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
			$fnameErr = "Only letters and white space allowed<br>";
			$isValid = false;
		}
		
		if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			$lnameErr = "Only letters and white space allowed<br>";
			$isValid = false;
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid Email<br>";
			$isValid = false;
		}
		
		
		if (!preg_match("/^[0-9]*$/",$phone)) {
			$numberErr = "Only numbers allowed<br>";
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
		
		include('insert.php');
		
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	
	<style rel="stylesheet">
	.form_area
			{
				position: absolute;
				left: 33%;
				top:.8%;				
				height: 550px;
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
		display: inline-block;
	}
	input[type=submit] {
			width: 95%;
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
			background-color: #add8e6;
		}

		
		input[type=text], select {
			width: 95%;
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
			width: 95%;
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
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form_area">
	<div class="form_inner_area">
	
		<input type="text" name="fname" placeholder="First Name" size="30" value="<?=$fname?>" />
		<span class="error">* <?php echo $fnameErr;?></span>
	
		<input type="text" name="lname" placeholder="Last Name" size="30" value="<?=$lname?>" />
		<span class="error">* <?php echo $lnameErr;?></span>
	
		
		<select name="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Others">Others</option>
		</select>
	
		<input type="text" name="address" placeholder="Address" size="30" value="<?=$address?>" />
		<span class="error">*</span>

		<input type="text" name="email" size="30" placeholder="Email" value="<?=$email?>" />
		<span class="error">* <?php echo $emailErr;?></span>
	
		<input type="text" name="phone" size="30" placeholder="Phone Number" value="<?=$phone?>" />
		<span class="error">* <?php echo $numberErr;?></span>
	
		<input type="text" name="username" size="30" placeholder="Username" value="<?=$username?>" />
		<span class="error">*</span>
	
		<input type="password" name="password" size="30" placeholder="Your Password" value="<?=$password?>" />
		<span class="error">* <?php echo $passErr;?></span>
	
		<input type="password" name="cpassword" size="30" placeholder="Confirm Password"value="<?=$cpassword?>" />
		<span class="error">*</span>
	
		<input type="submit" value="Submit" >
	</div>
	</div>
</form>
</body>
</html>
