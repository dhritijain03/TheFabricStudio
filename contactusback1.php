<?php
$con=mysqli_connect("localhost", "root", "", "users");
If($con ===false){
die("Error: could not connect.".musqli_connect_error());
}
$fname = $_POST['Fname'];
$lname= $_POST['Lname'];
$cemail = $_POST['email'];
$cmessage= $_POST['message'];

$sql = "INSERT INTO messages VALUES ('$fname','$lname','$cemail', '$cmessage')";
if(mysqli_query($con ,$sql)){
header("location: contactus.html");
}
else{
echo"Error : Data Not Insert".mysqli_error($con);
}
mysqli_close($con);
?>