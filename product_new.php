<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Products Offered</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="productsofferedcss.css">
		<link rel="icon" href="Images/Logo/Logo 1 - Brown.png">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class = "products">
            <div class = "container">
                <h1 class = "lg-title" style="margin-top: -30px;">Products Offered</h1>
				<center><hr style="width: 12%; height: 5px;" color="#40c9a2"></center>

                <div class = "product-items">
					
					<?php
						$db = mysqli_connect("localhost","root","","users");  // database connection

						if(!$db)
						{
							die("Connection failed: " . mysqli_connect_error());
						}

						$records = mysqli_query($db,"select * from products"); // fetch data from database

						while($data = mysqli_fetch_array($records))
						{
					?>
					
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src="<?php echo $data['pimg']; ?>">
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title"><?php echo $data['pcategory']; ?>'s Clothing</h2>
                            </div>
                            <a href = "#" class = "product-name"><?php echo $data['pname']; ?></a>
                            <p class = "productinfo1">Average Stitching Time (Days):</p>
                            <p class = "productinfo2"><?php echo $data['ptime']; ?></p>
							<p class = "productinfo1">Stitching Starts at:</p>
                            <p class = "productinfo2">&#8377;<?php echo $data['pprice']; ?></p>
                        </div>
                    </div>
                    <!-- end of single product -->
					
					<?php
						}
					?>
                </div>
            </div>
        </div>
	<?php mysqli_close($db);  // close connection ?>
    </body>
</html>
