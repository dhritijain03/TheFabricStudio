<?php 
ob_start();
include_once("db_connect.php");
session_start();
$error = false;
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$uname_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if (!$error) {
		if(mysqli_query($conn, "INSERT INTO customer(user, email, pass) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			$success_message = "Successfully Registered! <a href='Customer-login.php'>Click here to Login</a>";
		} else {
			$error_message = "Error in registering...Please try again later!";
		}
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Sign Up</title>
	<meta name="viewport" content="width= device-width, initial-scale=1">
	<link rel="stylesheet" href="customer-signupcss.css" type="text/css">
</head>

<body>
	<div class="signUp-popup">
		<div class="box">
			
			<div class="img-area">
				<div class="img" style="height: 95%">
				</div>
			</div>
			
			<div class="form">
				
				<form role="form" autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
					name="signupform">
					<h2>Sign Up</h2>
					<h3>(Customer)</h3>
					<div class="form-group">
							<input type="text" name="name" placeholder="Name" required
								value="<?php if($error) echo $name; ?>" class="form-control"
								autocomplete="off" />
							<span
								class="text-danger"><?php if (isset($uname_error)) echo $uname_error; ?></span>
						</div>

						<div class="form-group">
							<input type="text" autocomplete="off" name="email" placeholder="Enter Email"
								required value="<?php if($error) echo $email; ?>"
								class="form-control" />
							<span
								class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
						</div>

						<div class="form-group">
							<input type="password" autocomplete="off" name="password"
								placeholder="Enter Password" required class="form-control" />
							<span
								class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
						</div>

						<input type="submit" name="signup" value="Sign Up" style="border-radius: 10px;"class="btn btn-primary" />
				</form>
					<span class="text-success" style="margin-left: 2px;"><?php if (isset($success_message)) { echo $success_message; } ?></span>
					<span class="text-danger" style="margin-left: 2px;"><?php if (isset($error_message)) { echo $error_message; } ?></span>
				
				<div class="back">
		         	<button type="Submit" class="btn1" name="signup">
		         		<p>Already a user?</p>
		         		<a href="Customer-login.php">Login</a>
		         	</button>
		     	</div>
	
		</div>
				
		</div>
	</div>
</body>
</html>
 