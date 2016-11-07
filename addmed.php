<?php
	session_start();
    if(!isset($_SESSION["usertype"]))
    {
        header("Location: login.php");
    }
?>	
<?php
$unameErr=$mnameErr = $unitErr = $catagoryErr = $idErr =$uname= $mname = $unit = $catagory = $id= "";

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	if($_POST["uname"]) {
		$uname = mysql_real_escape_string( trim( $_POST["uname"] ));
	}
	if($_POST["mname"]) {
		$mname = mysql_real_escape_string( trim( $_POST["mname"] ));
	}
	if($_POST["unit"]) {
		$unit = mysql_real_escape_string( trim( $_POST["unit"] ));
	}
	
	if($_POST["catagory"]) {
		$catagory = mysql_real_escape_string( trim( $_POST["catagory"] ));
	}
	if($_POST["id"]) {
		$id = mysql_real_escape_string( trim( $_POST["id"] ));
	}
	
	$isValid = true;
	
	if( $uname !== "" && $mname != "" && $unit != ""   && $catagory != "" && $id != "" ) {	
		
		if (!preg_match("/^[a-zA-Z0-9]*$/",$uname)) {
			$unameErr = "Only letters and white space allowed<br>";
			$isValid = false;
		}

		if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {
			$mnameErr = "Only letters and white space allowed<br>";
			$isValid = false;
		}
		
		if (!preg_match("/^[a-zA-Z ]*$/",$unit)) {
			$unitErr = "Only letters and white space allowed<br>";
			$isValid = false;
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$catagory)) {
			$catagoryErr = "Only letters and white space allowed<br>";
			$isValid = false;
		}
		
		if (!preg_match("/^[0-9]*$/",$id)) {
			$idErr = "Only numbers allowed<br>";
			$isValid = false;
		}
		}
		
		 else {
		echo "<script>alert('Please fill up all fields...')</script>";
		$isValid = false;
	}
	
	if ( $isValid ) {
		include('medinsert.php');
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Medicine</title>
	
	<style rel="stylesheet">
	.form_area
			{
				position: absolute;
				left: 33%;
				top:.8%;				
				height: 617px;
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
		
		<script type="text/javascript">
		function redirectAddmed(obj) { 
			window.location.href = "addmed.php";
		}
		</script>
	</head>
	<body>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form_area">
		<div class="form_inner_area">
		
			<input type="text" name="uname" placeholder="User Name" size="30" value="<?=$uname?>" />
			<span class="error">* <?php echo $unameErr;?></span>
		
			<input type="text" name="mname" placeholder="Medicine Name" size="30" value="<?=$mname?>" />
			<span class="error">* <?php echo $mnameErr;?></span>
		
		<input type="text" name="unit" placeholder="Unit" size="30" value="<?=$unit?>" />
		<span class="error">* <?php echo $unitErr;?></span>

		<input type="text" name="catagory" size="30" placeholder="Catagory" value="<?=$catagory?>" />
		<span class="error">* <?php echo $catagoryErr;?></span>
	
		<input type="text" name="id" size="30" placeholder="Id" value="<?=$id?>" />
		<span class="error">* <?php echo $idErr;?></span>
	
	
		<input type="submit" value="Submit" >
	</div>
	</div>
</form>
</body>
</html>
