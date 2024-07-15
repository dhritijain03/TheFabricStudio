<?php
error_reporting(0);
?>
<?php
$msg = '';
$db = mysqli_connect("localhost", "root", "", "users");
if (isset($_POST['upload'])) {
	$pname = $_POST['pname'];
	$pcategory = $_POST['pcategory'];
	$time = $_POST['time'];
	$price = $_POST['price'];
	
	$pimg = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "Product/".$pimg;
	move_uploaded_file($tempname, $folder);

	$db = mysqli_connect("localhost", "root", "", "users");
	$sql = "INSERT INTO products (pname, pimg, pcategory, ptime, pprice) VALUES ('$pname', '$folder', '$pcategory', '$time', '$price')";
	if (!$error) {
		if(mysqli_query($db, $sql) ){
			$success_message = "Successfully Added! <a href='product_new.php'>View Product</a>";
		} else {
			$error_message = "Error while adding...Please try again later!";
		}
	}
}
$result = mysqli_query($db, "SELECT * FROM products");

?>

<!DOCTYPE html>
<html>
<head>
<title>Add A New Product</title>
<link rel="stylesheet" href="addproduct.css">
</head>
<body>
<div class="content">
	<img src="Images/new/Sew102.png" alt="Image" width="100%" height="350px">
	<h2>Add A New Product</h2>
	<hr>
	<form method="POST" action="" enctype="multipart/form-data">
				
				<label class="text1">Product Name:</label><br />
				<input type="text" name="pname" class="textbox"><br />
				
				<label class="text1">Product Image:</label><br />
				<input type="file" class="textbox" name="uploadfile" value=""/><br />
				
				<label class="text1">Product Category:</label><br />
				<select name="pcategory" class="textbox">
					<option value="men">Men&apos;s Clothing</option>
					<option value="women">Women&apos;s Clothing</option>
					<option value="kid">Kid's Clothing</option>
				</select><br />
				
				<label class="text1">Stitching Time (Days):</label><br />
				<input type="text" name="time"  class="textbox"><br />
				
				<label class="text1">Stitching Starts At (&#8377;):</label><br />
				<input type="text" name="price"  class="textbox"><br />

				<div>
					<button type="submit" name="upload" class="btn1" style="font-size: 15px;">ADD</button>
				</div>
				
				<span class="text-success" style="margin-left: 2px;"><?php if (isset($success_message)) { echo $success_message; } ?></span>
				<span class="text-danger" style="margin-left: 2px;"><?php if (isset($error_message)) { echo $error_message; } ?></span>
	</form>	
</div>
</body>
</html>
