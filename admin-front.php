<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
<html>
<head>
<title>Admin's Space</title>
<style type="text/css">
	body{
		font-family: sans-serif;
		margin-left: 45px;
		margin-right: 45px;
	}
	.main{
		width: 100%;
		height: 80%;
		background: #84392D;
		text-align: center;

	}
	.button1 {
		background-color: #84392D; 
		border: 2px solid black;
		width: 30%;
		height: 9%;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 20px;
		margin: 4px 2px;
		transition-duration: 0.4s;
		cursor: pointer;
		border-radius: 5px;
	}
	.btn1{
		margin-top:165px;
	}
	.button1:hover {
		background-color: black;
		color: #84392D;
	}
	.button1 a{
		color: black;
		text-decoration: none;
	}
	.button1:hover a{
		color: #84392D;
	}
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	li {
		float: right;
	}

	li a {
		display: block;
		color: black;
		text-align: center;
		text-decoration: none;
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		font-size: 17px;
	}
	li a:hover{
		color:#848484;
	}
	
</style>
</head>
<body>

	<div>
		<ul>
			<b>
				<li style="float:left; padding: 20px 18px 20px 0px;"><a href="#">Admin's Space | The Fabric Studio</a></li>
				<li style="padding: 20px 0px 20px 18px;" id="logoutbtn"><a href="logout.php"  onclick="myFunction()">Logout</a></li>
			</b>
		</ul>
	</div>

	<div class="main">
		<button type="button" class="button1 btn1" id="customerinfo"><a href="allinfo.php">Customer Info</a></button><br />
		<button type="button" class="button1" id="tailorinfo"><a href="all-info-tailors.php">Tailor Info</a></button><br />
		<button type="button" class="button1" id="appointments"><a href="appointments.php">Appointments</a></button><br />
		<button type="button" class="button1" id="messages"><a href="messages.php">Messages</a></button>
	</div>
<script>
	function myFunction() {
		alert("Are you sure you want to logout?");
	}
</script>
</body>
</html>
