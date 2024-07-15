<?php 
session_start();
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Your Account</title>
</head>

<body>

    <header class="site-header clearfix">

        <section>

            <div class="rightside">

                <h1>Modern Website</h1>
                <h3>
                    <p>Online Shopping Site for Fashion Lifestyle in India. Buy Shoes, Apparels products for women men.
                        Best Online Fashion Store.</p>
                </h3>
                <ul>
                    <?php if (isset($_SESSION['user_id'])) { ?>
                    <li>
                        <p class="navbar-text" style="font-size: 5vh"><strong>Welcome!</strong> You're signed in as
                            <strong><?php echo $_SESSION['user_name']; ?></strong></p>
                    </li><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <li><a href="logout.php" onclick="myFunction()" class="logi">Log Out</a></li>
                    <?php } else { ?><h3 style="text-align: center">Login First</h3>
                    <li><a href="login.php" class="log">Login</a></li>
                    <li><a href="register.php" class="log">Sign Up</a></li>
                    <?php } ?>
                </ul>
            </div>

        </section>

    </header>
    <script>
        function myFunction() {
            alert("Are you sure you want to logout?");
        }
    </script>

</body>

</html>