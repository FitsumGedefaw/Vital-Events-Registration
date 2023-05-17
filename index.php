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

        <div id="intro">
            <div class="moto">
                <p class="p-w">Welcome to</p>
                <h1>Vital Events Registration</h1>
                <p class="p-d">Document your life events anytime, anywhere!</p>
            </div>
        </div>

    </div>

    <!-- common nav bar end -->

    <!--  for index page -->

    <div class="service-containor">

        <div class="choice">

            <div class="choice-part choice-one">
                <a href="get_cert.php"> Get Certificate</a>
            </div>

            <div class="choice-part choice-two">
                <a href="_marriage.php">Register Marriage </a>
            </div>

            <div class="choice-part choice-three">
                <a href="_birth.php">
                    <?php echo "&nbsp"; ?> Register Birth
                </a>
            </div>

            <div class="choice-part choice-four">
                <a href="_death.php">
                    <?php echo " &nbsp"; ?> Register Death
                </a>
            </div>

        </div>

    </div>

    <div class="openhr-containor">
        <div class="openhr">
            <p class="li-open">We are:</p>
            <ul class="ul-open">
                <li class="li-open"><strong>Open online</strong></li>
                <li class="li-open"><strong>Open by email</strong></li>
                <li class="li-open">Call centre: <strong>open</strong> 8am to 2pm</li>
            </ul>
            <p>Find out more about <a href="#">contacting us</a>.</p>
        </div>
        <h1>When will I receive my certificate?</h1>
        <br>
        <p class="p">When you apply for a certificate or registration, we email you details of documents you need to
            provide. We
            can't start processing until we've received them.</p>
        <br>
        <p class="p">Once you've provided the documents, check our certificate turnaround times.</p>
    </div>
    <!-- pages -->



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