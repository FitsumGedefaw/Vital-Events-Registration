<?php

session_start();

// connect the datase
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=vital_registration_database', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$authorized_user = "holds some value";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$email = $_POST['email'];
$password = $_POST['pass'];

$statement = $pdo->prepare('SELECT * FROM person_table
                            WHERE email = :email AND pass = :pass');
$statement->bindValue(":email",$email);
$statement->bindValue(":pass",$password);
$statement->execute();
$authorized_user = $statement->fetch(PDO::FETCH_ASSOC);

if($authorized_user){
        $_SESSION['ssn'] = $authorized_user['ssn'];
        $_SESSION['name'] = $authorized_user['name'];
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $password;
        header("Location:index.php");
}

 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn / SignIn page</title>
    <script defer src="script/script_login.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat&family=Open+Sans:wght@700&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="./style/style.css">
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


    <!--    php validation should be put here  -->

    <div class="login-container">
        <?php if (!$authorized_user) {?>

        <div class="error-message">
            Please enter the correct username and password!
        </div>

        <?php } else {?>
        <!-- display nothing -->
        <?php }?>

        <div id="error-div"></div>
        <form id="myForm" method="post">

            <fieldset class="fieldset">
                <legend class="legend">Enter your email and password to log in</legend>

                <div class="login-part">
                    <div class="part">
                        <label for="email">Email</label> <br>
                        <input class="input" type="email" name="email" id="email">
                    </div>

                    <div class="part">
                        <label for="pass">Password</label> <br>
                        <input class="input" type="password" name="pass" id="pass">
                    </div>

                    <input class="input" type="submit" id="submit">

                    <a id="create-account" href="_create_account.php">Create Account</a>
            </fieldset>
        </form>
    </div>


    <!--  for footer -->
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