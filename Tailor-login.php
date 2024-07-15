<?php 
ob_start();
include_once("db_connect.php");
session_start();
if(isset($_SESSION['user_id'])!="") {
	header("Location:main.html");
}
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM tailor WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['uid'];
		$_SESSION['user_name'] = $row['user'];		
		header("Location: tailor-dashboard.php");
	} else {
		$error_message = "Incorrect Email or Password!!!";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tailor Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="tailors-logincss.css" type="text/css">
</head>
<body>

  <div class="login-popup">
     <div class="box">
       <div class="img-area">
        <div class="img">
        </div>
        <h1>Your Logo</h1>
       </div>
       <div class="form">
        
        
        <form role="form" autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
          <h1>Log In</h1><h3>(Tailors/Designers)</h3>
          <div class="form-group">
            <input type="text" placeholder="Email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <label><input type="checkbox">
              Remember Me
            </label>
          </div>
          <input type="submit" name="login" value="LogIn" style="border-radius: 10px; margin-top: 15px;" class="btn btn-primary" />
			
        </form>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
			
		   <div class="form-group" style="margin-top: 7px;">
              <label class="signup">
                Not a user? <a href="Tailor-signup.php">Sign Up</a>
              </label>
          </div>
		   
       </div>
     </div>
  </div>
</body>
</html>