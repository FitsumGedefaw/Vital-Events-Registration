<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="2"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat&family=Open+Sans:wght@700&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
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
        <div class="main-intro">

            <h1> Vital Events Registration</h1>
        </div>

        <div class="aboutus">
            <hr>
            <img src="images/why-us.png" alt="why us">;
        </div>


        <div class="home-container">

            <div class="home-part birth-container">

                <div class="div-image">
                    <!-- <img src="child.png" alt="Child Image"> -->
                    <img src="images/child.png" alt="Child Image">
                </div>

                <div class="div-text">

                    <h2>BIRTH</h2>
                    <p>
                        Birth is one of the very necessary demographic parameter to be tracked in a country. keeping
                        record of Birth is necessary for the policy making as most of the government's decision is
                        affected by it. <br>
                        With this website platform, Any body can get registered neverthless it's location and time
                        without wasting the precious time resource.

                    </p>

                </div>

            </div>
            <hr>


            <!-- <div class="home-part marriage-container"></div> -->
            <div class="home-part birth-container">

                <div class="div-image">
                    <img src="images/marr.png" alt="Child Image">
                </div>

                <div class="div-text">

                    <h2>MARRIAGE</h2>
                    <p>
                        Marriages are one of the social major event that account for one nations demography. <br>
                        without much complexity, this platform paves a way to register marriages with much ease of user
                        friendly environment.

                    </p>
                </div>

            </div>
            <!-- <div class="home-part death-container"></div> -->
            <hr>

            <div class="home-part birth-container">

                <div class="div-image">
                    <img src="images/death.png" alt="death image">
                </div>

                <div class="div-text">

                    <h2>DEATH</h2>
                    <p>
                        Death should be registered in one nation for the well-being of the whole population. <br>
                        With this website platform it is possible to register Death of individual and hence keep track
                        of the population of the country.
                    </p>

                </div>

            </div>
        </div>

        <!--  -->
        <hr>

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








</body>

</html>