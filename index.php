<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
	<style>
	body	
	{
		margin:0 auto;
		background: url("res/any.jpg") no-repeat;
		background-size: 100%;	
		font-family: 'Open Sans', sans-serif;
	}
	h1 {
    color: dark;
    font-family: Georgia;
    font-size: 300%;
	text-align: center; 
	}
		.dropbtn {
			background-color: #4169e1;
			color: royal blue;
			padding: 12px;
			font-size: 20px;
			border: none;
			cursor: pointer;
		}

		/* Dropdown button on hover & focus */
		.dropbtn:hover, .dropbtn:focus {
		background-color: #add8e6;
		}
		
		/* The container <div> - needed to position the dropdown content */
		.dropdown {
			position: absolute;
			right: 40%;
			top: 25%;
			display: inline-block;
		}
		p.serif {
    font-family: "Times New Roman", Times, serif;
			}

</style>
</head>
<body>
<center>
<h1> PHARMACY MANAGEMENT </h1>
<p class="serif"> Register Yourself For Keeping Your Medicine Record Up-to-Date</p>
</center>
<script type="text/javascript">
	function redirectLogin(obj) { 
		window.location.href = "login.php";
	}
	
	function redirectRegistration(obj) { 
		window.location.href = "registration.php";
	}
	</script>
	<div class="dropdown"> <center>
     <input type="button" class="dropbtn" value="Log In" onclick="redirectLogin(this)" />
	 <input type="button" class="dropbtn"value="Registration" onclick="redirectRegistration(this)" />
	 </center>
	 </div> <br>

	 
</html>
