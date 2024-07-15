<?php
include_once("db_connect.php");

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (isset($_POST['login'])) {
	$adminname = mysqli_real_escape_string($conn, $_POST['adminname']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM adminlogin");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['uid'];
		$_SESSION['user_name'] = $row['user'];		
		header("Location: admin-front.php");
	} else {
		$error_message = "Incorrect Email or Password!!!";
	}
}

?>
