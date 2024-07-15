<?php 
session_start();
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home | The Fabric Studio</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="Images/Logo/Logo 1 - Brown.png">
</head>

<body>
	<div>
		<ul>
			<?php if (isset($_SESSION['user_id'])) { ?>
			<b>
				<li style="float:left; padding: 20px 18px 20px 0px;"><a href="#">Hi, <?php echo $_SESSION['user_name']; ?></a></li>
				<li style="padding: 20px 0px 20px 18px;"><a href="logout.php"  onclick="myFunction()" >Logout</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="contactus1.php">Contact Us</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="about1.php">About</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="#locations">Locations</a></li>
				<?php } else { ?>
				<li style="float:left; padding: 20px 18px 20px 0px;"><a href="#main" >The Fabric Studio</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="front.html">Login</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="contactus.html">Contact Us</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="about.html">About</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="#locations">Locations</a></li>
			</b>
			<?php } ?>
		</ul>
	</div>

	<div class="parallax" style="height: 800px;">
		<p class="parallaxh1">
			<img src="Images/Logo/Logo 1 - Brown.png" alt="logo" height="250px" width="250px"><br />
			<b>Welcome to The Fabric Studio</b>
		</p>
	</div>
	
	<br /><br /><br /><br />
	
	<div class="row">
  		<div class="column1">
			<center>
    			<p class="p1">About The Fabric Studio</p>
    			<p class="p2">Our mission at The Fabric Studio is simple: to provide high-quality services for our valued clients. Our team goes above and beyond to cater to each project’s specific needs. Through open communication and exceptional service, we hope you’ll find what you’re looking for with our Sewing Company. For more information or general inquiries, get in touch today.</p>
			</center>
  		</div>
  		<div class="column2">

  		</div>
	</div>
	
	<div class="locationsmain" id="locations">
		<p class="locationp1">Our Locations</p>
	</div>
	
	<div class="row1">
  		<div class="column3">
    		<div class="card">
				<a href="delhi1.php">
					<img src="Images/Delhi.jpg" alt="Delhi" width="100%" height="250px">
					<h3 class="cardh3">Delhi</h3>
				</a>
    		</div>
  		</div>

  		<div class="column3">
    		<div class="card">
				<a href="mumbai1.php">
					<img src="Images/Mumbai.jpg" alt="Mumbai" width="100%" height="250px">
					<h3 class="cardh3">Mumbai</h3>
				</a>
    		</div>
  		</div>
  
  		<div class="column3">
    		<div class="card">
				<a href="jaipur1.php">
					<img src="Images/Jaipur.jpg" alt="Jaipur" width="100%" height="250px">
					<h3 class="cardh3">Jaipur</h3>
				</a>
    		</div>
  		</div>
  
  		<div class="column3">
   			 <div class="card">
				<a href="hyderabad1.php">
					<img src="Images/Heydrabad.jpg" alt="Heydrabad" width="100%" height="250px">
					<h3 class="cardh3">Hyderabad</h3>
				</a>
   			 </div>
  		</div>
	</div>
	
	<div class="locationsmain">
		<p class="locationp1">What People Say</p>
	</div>
	
	<div class="review">
		<div class="row3">
			<div class="column4" style="background-color:#eee;">
				<p>I was looking for the best tailor nearby me for my Lehenga, and you guys made it possible for me. They provide me with hassle-free, personalized, at-home services. They sent a tailor to me at my home and the tailor was very experienced and suggested designs to me for my Lehenga.</p>
				<h3>Deepika</h3>
			</div>
			<div class="column4" style="background-color:#eee;">
				<p>It was my first experience, and now I'm surely going to be a regular customer. My formal shirts-pants have been stitch very well &amp; were delivered a day before the actual delivery date. I will highly recommend this team for some fab designs and stitching! Keep it up, The Fabric Studio.</p>
				<h3>Kabir</h3>
			</div>
			<div class="column4" style="background-color:#eee;">
				<p>The Fabric Store online stitching service website is very handy; I got the ladies stitching services at my house. I got all the clothes in a perfect fitting and timely. I want the design in my blouse which I saw online and got the same. Yes, they genuinely professional.!</p>
				<h3>Anju</h3>
			</div>
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
