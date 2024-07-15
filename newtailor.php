<?php
error_reporting(0);

$msg = '';

$db1 = mysqli_connect("localhost", "root", "", "users");

if (isset($_POST['upload'])) {
	
	$tname = $_POST['tname'];
	$taddress = $_POST['taddress'];
	$tpincode = $_POST['tpincode'];
	$tcity = $_POST['tcity'];
	$tphone = $_POST['tphone'];
	$tspec = $_POST['tspec'];
	$texp = $_POST['texp'];
	$twork = $_POST['twork'];

	$db1 = mysqli_connect("localhost", "root", "", "users");
		
		switch($tcity)
		{
			case 'Delhi':
				$sql1 = "INSERT INTO tailordelhi (tname, taddress, tpincode, tcity, tphone, tspec, texp, twork) VALUES ('$tname', '$taddress', '$tpincode', '$tcity', '$tphone', '$tspec', '$texp', '$twork')";

				if (!$error) {
					if(mysqli_query($db1, $sql1) ){
						$success_message = "Successfully Added! <a href='delhi1.php'>View Tailor</a>";
					} else {
						$error_message = "Error while adding...Please try again later!";
					}
				}
				break;
			
			case 'Mumbai':
				$sql1 = "INSERT INTO tailormumbai (tname, taddress, tpincode, tcity, tphone, tspec, texp, twork) VALUES ('$tname', '$taddress', '$tpincode', '$tcity', '$tphone', '$tspec', '$texp', '$twork')";
			
				if (!$error) {
					if(mysqli_query($db1, $sql1) ){
						$success_message = "Successfully Added! <a href='mumbai1.php'>View Tailor</a>";
					} else {
						$error_message = "Error while adding...Please try again later!";
					}
				}
				break;
				
			case 'Jaipur':
				$sql1 = "INSERT INTO tailorjaipur (tname, taddress, tpincode, tcity, tphone, tspec, texp, twork) VALUES ('$tname', '$taddress', '$tpincode', '$tcity', '$tphone', '$tspec', '$texp', '$twork')";
			
				if (!$error) {
					if(mysqli_query($db1, $sql1) ){
						$success_message = "Successfully Added! <a href='jaipur1.php'>View Tailor</a>";
					} else {
						$error_message = "Error while adding...Please try again later!";
					}
				}
				break;
				
			case 'Hyderabad':
				$sql1 = "INSERT INTO tailorhyderabad (tname, taddress, tpincode, tcity, tphone, tspec, texp, twork) VALUES ('$tname', '$taddress', '$tpincode', '$tcity', '$tphone', '$tspec', '$texp', '$twork')";
			
				if (!$error) {
					if(mysqli_query($db1, $sql1) ){
						$success_message = "Successfully Added! <a href='hyderabad1.php'>View Tailor</a>";
					} else {
						$error_message = "Error while adding...Please try again later!";
					}
				}
				break;
		}
}
$result = mysqli_query($db1, "SELECT * FROM tailordetail");
?>

<!DOCTYPE html>
<html>
<head>
<title>New Tailor</title>
<link rel="stylesheet" href="newtailorcss.css">
</head>
<body>
<div class="content">
	
	<img src="Images/new/Sew101.png" alt="Image" class="image1"/>
	<h2>Partner With Us</h2>
	<hr>
	<form method="POST" action="">
				
				<label class="text1">Shop Name:</label><br />
				<input type="text" name="tname" class="textbox"><br />
				
				<label class="text1">Address:</label><br />
				<textarea rows="3" cols="30" name="taddress" class="textbox"></textarea><br />
		
				<label class="text1">Pin Code:</label><br />
				<input type="text" name="tpincode" class="textbox"><br />
				
				<label class="text1">City:</label><br />
				<select name="tcity" class="textbox">
					<option value="Delhi">Delhi</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Jaipur">Jaipur</option>
					<option value="Hyderabad">Hyderabad</option>
				</select><br />
		
				<label class="text1">Phone Number:</label><br />
				<input type="text" name="tphone" class="textbox"><br />
				
				<label class="text1">Specilization:</label><br />
				<input type="text" name="tspec"  class="textbox"><br />
				
				<label class="text1">Experience:</label><br />
				<input type="text" name="texp"  class="textbox"><br />
		
				<label class="text1">Workers:</label><br />
				<input type="text" name="twork"  class="textbox"><br />
				
				<div id="addstore">
					<button type="submit" name="upload" class="btn1" style="font-size: 15px;">ADD</button>
				</div>
				
				<span class="text-success" style="margin-left: 2px;"><?php if (isset($success_message)) { echo $success_message; } ?></span>
				<span class="text-danger" style="margin-left: 2px;"><?php if (isset($error_message)) { echo $error_message; } ?></span>

	</form>	
</div>
</body>
</html>
