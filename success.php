<?php
    if(!isset($_SESSION["fresher"]))
    {
        header("Location: registration.php");
    }
?>	


<!DOCTYPE html>
<html>
<head>
	<title>.: Success :.</title>
<style>
	body	
	{
		margin:0 auto;
		background: url("res/images/signup.jpg") no-repeat;
		background-size: 100%;
		font-family: 'Open Sans', sans-serif;
	}
	.form_area
			{
				position: absolute;
				left: 33%;
				top:5%;				
				height: 450px;
				width: 400px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
				border-radius: 4px;
			}
			.form_inner_area
			{
				top:10%;
				height: 200px;
				width: 300px;
				position: absolute;
				left: 50px;	

			}
			button {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:55%;
			
			
		}
		
			button:hover {
			background-color: #45a049;
		}
		
	h1,h2 {
		color: #000000;
	}
</style>
</head>
<body>
<center>
	
</center>
<?php
echo '<div class="form_area">
		<div class="form_inner_area">
		<h1>Congratulation!</h1>
		<h3>Your registration has been done successfully. Please login...</h3><br><br>
			<a href="login.php"><button>Member Login</button></a><br><br>
			<a href="index.php"><button>Back To Home</button></a>
		</div>
	</div>';
?>
</body>
</html>

<?php
// remove all session variables
session_unset();
?>