<?php 
session_start();
include_once("db_connect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us | The Fabric Studio</title>
<link rel="stylesheet" type="text/css" href="aboutcss.css">
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
				<li style="padding: 20px 18px 20px 18px;"><a href="contactus1.php">Contact Us</a></li>
  				<li style="padding: 20px 18px 20px 18px;"><a href="policy1.php">Policy</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="main1.php">Home</a></li>
				<?php } else { ?>
				<li style="float:left; padding: 20px 18px 20px 0px;"><a href="#main">The Fabric Studio</a></li>
				<li style="padding: 20px 0px 20px 18px;"><a href="front.html">Login</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="contactus.html">Contact Us</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="policy.html">Policy</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="main.html">Home</a></li>
			</b>
			<?php } ?>
		</ul>
	</div>
	
	<div class="parallax" style="height: 800px;">
		<p class="parallaxp1">
			About Us
		</p>
		<p class="parallaxp2">
			The Fabric Studio
		</p>
	</div>

	<div class="aboutinfo">
		<p class="a-a1"><b>Our Goal is to provide good services &amp; Save the valuable time of our customer</b></p>
		
		<p class="a-a2">
			The Fabric Store Is India's door to door tailoring services provider. These services are firstly provided by us, no other companies are providing these similar services. We are trying to achieve new goal by adding the tailors from all over india with us. We are working for making good services relationship between the customers and tailor.
		</p>
		
		<hr color="#2E5AA3" width="70%">
		
		<p class="a-a3">Our Goal is to provide the best stiching service
			<p class="a-a4">Changing how you wear</p>
		</p>
		
		<div class="slideshow-container">

			<div class="mySlides fade">
			    <img src="Images/best.jpg" alt="best quality" style="width:80%; border-radius: 20px;">
			    <div class="text">Delivering Best Stitching Quality</div>
			</div>

			<div class="mySlides fade">
			    <img src="Images/curt.jpg" alt="customer" style="width:80%; border-radius: 20px;">
			    <div class="text">Boosting Accessibility for customers</div>
			</div>

			<div class="mySlides fade">
			    <img src="Images/user.jpg" alt="user" style="width:80%; border-radius: 20px;">
			    <div class="text">Affordabel and User friendly</div>
			</div>

		</div>

		<div style="text-align:center">
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
		</div>

		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			  setTimeout(showSlides, 2000);
			}
		</script>
		
		<p class="a-a5">Who are we?<br /><hr color="#2E5AA3" width="10%" align="left" style="margin-top: -30px; margin-left: 4px;" size="5"></p>
		
		<p class="a-a6">The Fabric Studio is world's first online stitching service provider. The company is establised in Feburary 2020. Main aim of the company is to provide best stitching service and save valuable time of people. On this portal users can search their favorite clothing design and book an appointment with thier favorite taiors online. We have 50+ registered professional tailors on our portal.</p>
		
		<p class="a-a5">Why The Fabric Studio<br /><hr color="#2E5AA3" width="10%" align="left" style="margin-top: -30px; margin-left: 4px;" size="5"></p>
		
		<p class="a-a6">
			The Silaiwala is world's first online stitching service provider where users can book appointment with thier favourite tailors.
		</p>

		<p class="a-a7">Save Time</p>

		<p class="a-a6">We do care about you that's why we are here for you. We provide fast service. By using our service you can save your valuable time.</p>

		<p class="a-a7">Vast Variety</p>

		<p class="a-a6">There are a lot of variety on our platform. You can search your your desired design on our platform and book appointment with any tailor.</p>

		<p class="a-a7">Professional Tailors</p>

		<p class="a-a6">We have 50+ porfessional and experienced taiolors on our platform so that you get your desired stitching service at low cost</p>

	</div>
	
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