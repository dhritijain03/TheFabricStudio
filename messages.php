<html> 
<head> <title>  </title>

</head>
<body >
  <div style="text-align: center; margin: 50px auto 0 auto;  margin-bottom: 50px;font-size: 30px;font-family: sans-serif;" id="introduction-section"> 
    <h2>User's Message</h2>
    <hr style="width: 30px;">
   </div>
  

<?php

$link = mysqli_connect("localhost", "root", "", "users"); //database name
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM messages"; 
if($result = mysqli_query($link, $sql)){
    
    if(mysqli_num_rows($result) > 0)
    {
     
        
        while($row = mysqli_fetch_array($result))
        
  {

   ?>
   <style type="text/css">
  
    
     #grid-layout-33{

     }
      #text-part{
		  width: 30%;
		  float: left;
		  font-family: sans-serif;
		  padding: 20px;
		  font-size: 24px;
		  text-align: center;
		  color: #ce5b09;
     }
   </style>
   

  

<div id="info-box">
   <div id="grid-layout-33">
    <div id="text-part">

      Name: <?php echo $row['fname']?> <?php echo $row['lname']?><br>
        
      Email:<?php echo $row['email']?><br />
	  Message: <?php echo $row['message']?>


            
            <br>
   </div>
 </div>
</div>

      
          
           <?php 
       } 
           
            
        
      
        mysqli_free_result($result);
        
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>

  
</body>
</html>