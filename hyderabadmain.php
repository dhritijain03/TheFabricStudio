<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hyderabad | The Fabric Studio</title>
<link rel="stylesheet" type="text/css" href="hyderabadcss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="Images/Logo/Logo 1 - Brown.png">
</head>

<body>
	<div>
		<ul>
			<b>
				<li style="float:left; padding: 20px 18px 20px 0px;"><a href="#main">The Fabric Studio</a></li>
				<li style="padding: 20px 0px 20px 18px;"><a href="jaipurmain.php">Jaipur</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="mumbaimain.php">Mumbai</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="delhimain.php">Delhi</a></li>
				<li style="padding: 20px 18px 20px 18px;"><a href="main.html">Home</a></li>
			</b>
		</ul>
	</div>
	
	<div class="parallax" style="height: 650px;">
		<p class="parallaxh1">
			<b>Hyderabad</b>
		</p>
	</div>
	
	<div class="locationsmain">
		<p class="locationp1">Tailors</p>
	</div>
	
	<div class="review">
		<?php
		global $error;
		
			if (isset($_POST['upload'])) {
				$name = $_POST['name'];
				$number = $_POST['number'];
				$booking = $_POST['bookingtime'];

				$db = mysqli_connect("localhost","root","","users"); 
				
					// Get all the submitted data from the form
					$sql = "INSERT INTO bookings (name, number, booking) VALUES ('$name', '$number', '$booking')";

					if (!$error) {
						if(mysqli_query($db, $sql) ){
							echo "<script language='javascript'>";
            				echo "alert('Booking Sucessful')";
            				echo "</script>";
						} else {
							echo "<script language='javascript'>";
            				echo "alert('Error while booking...Please try again later!')";
            				echo "</script>";
						}
					}
				}
		
			$db1 = mysqli_connect("localhost","root","","users");  // database connection

			if(!$db1)
			{
				die("Connection failed: " . mysqli_connect_error());
			}

			$records = mysqli_query($db1,"select * from tailorhyderabad "); // fetch data from database

			while($data = mysqli_fetch_array($records))
			{
		?>
		
		<div class="row3">
			<div class="column4" style="background-color:#eee;">
				<h1 style="margin-top: 7px;"><?php echo $data['tname']; ?></h1>
				<p><?php echo $data['taddress']; ?> <br /> <?php echo $data['tcity']; ?> - <?php echo $data['tpincode']; ?><br /><br />
					Phone No: <?php echo $data['tphone']; ?>
				</p>
			</div>
			
			<div class="column4" style="background-color:#eee;">
				<h2 style="margin-top: 7px;">Overview</h2>
				<p>
					Specilization: <?php echo $data['tspec']; ?><br />
					Experience: <?php echo $data['texp']; ?><br />
					Workers: <?php echo $data['twork']; ?><br /><br />
					<a href="product_new.php" class="products">Products Offered</a>
				</p>
			</div>
			
			<div class="column4" style="background-color:#eee;">
				<form action="#" method="POST">
					<h2 style="margin-top: 7px;">Book An Appointment</h2>

					<input type="text" name="name" placeholder="Name" style="width: 34.5%;padding: 8px 16px;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;font-size: 13px;">

					<input type="text" name="number" placeholder="Phone Number"  style="width: 34.5%;padding: 8px 16px;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;font-size: 13px;"><br />

					
					<!--<label>Choose date &amp; time for your appointment:</label><br /><br />-->
					
					<input type="datetime-local" name="bookingtime" value="2021-04-24T00:00" min="2021-04-23T00:00" max="2500-06-14T00:00" style="width: 70.2%;padding: 8px 16px;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;font-size: 12px;margin-top: 6px;">
					<br />

					<button type="submit" name="upload" style="background-color: #556B2F;color:white;font-size: 15px;padding: 4px 20px;border: 0px solid #ff5722;border-radius: 4px; margin-top: 6px;">Submit</button>
					<br />
					<span class="text-success" style="font-size: 14px;font-weight: 100;"><?php if (isset($success_message)) { echo $success_message; } ?></span>
					<span class="text-danger" style="font-size: 14px;font-weight: 100;"><?php if (isset($error_message)) { echo $error_message; } ?></span>

				</form>
			</div>
		</div>
		<?php
			}
		?>
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
	function myFunction1() {
		alert("Are you sure you want to logout?");
	}
	function myFunction() {
		confirm("Your Appointment has been booked.");
	}
</script>
<?php mysqli_close($db1);  // close connection ?>
</body>
</html>