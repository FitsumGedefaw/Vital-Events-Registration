<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="2"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat&family=Open+Sans:wght@700&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="./style/style.css">
    <title>Home</title>
</head>

<body>


    <div>
        <header>
            <div id="company-name">
                <a href="index.php">
                    <h1 id="vital-events">Vital Events Registration</h1>
                </a>
            </div>

            <nav>
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a> <!-- kale -->
                <a href="#to-footer">Contact Us</a>

                <!-- log in or logout -->
                <?php if (isset($_SESSION['ssn'])) {?>
                <a id="nav-login"  href="choice.php"> <?php echo $_SESSION['name'] ?> </a>
                <!-- <a href="./tools/logout.php"> Logout</a> -->
                <?php } else {?>
                <a id="nav-login" href="_login.php"> LogIn</a>
                <?php }?>
            </nav>



        </header>


    </div>

    <!-- common nav bar end -->
    <!-- put it -->
    <?php if (isset($_SESSION['ssn'])) {?>
    <div class="get-info">
        <p> Your application is submitted successfuly </p>
        <div> We will email you with in 48 hours .</div>
    </div>

    <?php } else {  ?>

    <div class="please-login">

        <p> Please log in first </p>
        <a id="please-link" href="_login.php"> Go to log in page</a>
    </div>

    <?php } ?>



    <!-- footer for all pages -->
    <div id="to-footer" class="footer">
        <h3>Vital Events Registration Agency</h3>
        <div class="footer-links">
            <a href="#">Site Map</a>
            <a href="#">Copyright</a>
            <a href="#">Privacy</a>
            <a href="#">Disclaimer</a>
            <a href="#">Accessibility</a>
        </div>
        <div class="soc-media-icons">
            <a href="https://www.facebook.com/Addis-Ababa-University-496255483792611/?ref=br_tf">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
            <a href="https://www.facebook.com/Addis-Ababa-University-496255483792611/?ref=br_tf">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="https://www.facebook.com/Addis-Ababa-University-496255483792611/?ref=br_tf">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
        </div>
        <p>Copyright &copy; 2022 Events Registration Agency</p>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>