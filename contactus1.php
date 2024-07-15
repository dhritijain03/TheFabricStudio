<?php 
session_start();
include_once("db_connect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="contactuscss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="Images/Logo/Logo 1 - Brown.png">
</head>
	

<body>
	<div>
		<ul>
			<?php if (isset($_SESSION['user_id'])) { ?>
			<b>
				<li style="float:left; padding: 20px 18px 20px 0px;"><a href="front.html">Hi, <?php echo $_SESSION['user_name']; ?></a></li>
				<li style="padding: 20px 0px 20px 18px;"><a href="logout.php"  onclick="myFunction()" >Logout</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="about1.php">About</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="policy1.php">Policy</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="main1.php">Home</a></li>
				<?php } else { ?>
				<li style="float:left; padding: 20px 18px 20px 0px;"><a href="#main">The Fabric Studio</a></li>
				<li style="padding: 20px 0px 20px 18px;"><a href="front.html">Login</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="about.html">About</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="policy.html">Policy</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="main.html">Home</a></li>
			</b>
			<?php } ?>
		</ul>
	 </div>
	
	<div class="parallax" style="height: 650px;">
		<p class="parallaxh1">
			<b>Contact us<br />We are always ready to help you!</b>
		</p>
	</div>

	<div class="contact-form">
		<center>
			<form method="post" action="contactusback2.php">
				<input id="Fname" name="Fname" type="text" class="form-control" placeholder="First name" required>
				<br>
				<input id="Lname" name="Lname" type="text" class="form-control" placeholder="Last name" required>
				<br>
				<input id="email" name="email" type="email" class="form-control" placeholder="Email" required>
				<br> 
				<textarea id="message" name="message" class="form-control" placeholder="Message" rows="4" cols="50" required></textarea><br>
				<button onclick="myFunction101()" class="submitbtn" name="sendmsg">Send message</button>
					<script>
						function myFunction101() {
						  confirm("We have recived you query, we will get back to you soon.");
						}
					</script>
			</form>
		</center>
	</div>
	
	<hr class="hr1">
	<div class="footer">
		<br />
		<center>
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-instagram"></a>
			<p class="footerp">&copy;2021 by The Fabric Store</p>
		</center>
	</div>
	
<script>
	function myFunction() {
		alert("Are you sure you want to logout?");
	}
</script>
</body>
</html>
