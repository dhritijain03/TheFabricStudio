<?php 
session_start();
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tailor Dashboard | The Fabric Studio</title>
<link rel="stylesheet" type="text/css" href="tailordashcss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="Images/Logo/Logo 1 - Brown.png">
</head>

<body>
	<div>
		<ul>
			<b>
				<li style="float:left; padding: 20px 18px 20px 0px;"><a href="#main" >The Fabric Studio</a></li>
				<li style="padding: 20px 0px 20px 18px;"><a href="logout.php"  onclick="myFunction()" id="logoutbtn">Logout</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="contactus1.php">Contact Us</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="about1.php">About</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="main1.php">Home</a></li>
			</b>
		</ul>
	</div>
	
	<div class="parallax" style="height: 800px;">
		<p class="parallaxh1"><b>
			<?php if (isset($_SESSION['user_id'])) { ?>
				Hi <?php echo $_SESSION['user_name']; ?>,
			<?php } else { ?>
				Hi, User
			<?php } ?><br />
			Welcome to The Fabric Studio</b>
		</p>
	</div>
	
	<div class="row1">
  		<div class="column1">
			<center>
    			<p class="p1">Show Your Online Presence</p>
    			<p class="p2">Our mission at The Fabric Studio is to provide high-quality services for our valued tailors. Our team goes above and beyond to cater to each project’s specific needs.</p>
				<button class="button1"><a href="newtailor.php">Add A eStore</a></button>
			</center>
  		</div>
  		<div class="column2">

  		</div>
	</div>
	
	<div class="row2">
		<div class="column3">

  		</div>
		
  		<div class="column4">
			<center>
    			<p class="p1">Add A Product</p>
    			<p class="p2">Add a product, and we will help you to reach out to more customers Our team goes above and beyond to help tailors represent themselves.</p>
				<button class="button2"><a href="addproduct.php">Add A Product</a></button>
			</center>
  		</div>
	</div>
	<br /><br />
	<hr class="hr1">
	
	<div class="footer">
		<br />
		<center>
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-instagram"></a>
			<p class="footerp">&copy;2021 by The Fabric Studio</p>
		</center>
	</div>
<script>
	function myFunction() {
		alert("Are you sure you want to logout?");
	}
</script>
</body>
</html>