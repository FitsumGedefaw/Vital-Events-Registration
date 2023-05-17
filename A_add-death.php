<?php
require_once "./tools/function.php";
session_start();

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=vital_registration_database', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $d_ssn = $_POST['ssn']; /* 1 */
    $p_ssn = $_SESSION['ssn']; /* 2 */
    $name = $_POST['name']; /* 4 name */
    $f_name = $_POST['f_name']; /* 5 father name */
    $g_name = $_POST['g_name']; /* 6 grand name */
  
    $sex = $_POST['sex']; /*7  sex  */
    $birth_date = $_POST['birth_date']; /* 7  birht date */
    $birth_place = $_POST['birth_place']; /* 8 birht place */
    $death_date = $_POST['death_date'];

    $image = $_FILES['image'] ?? null; /* 3  image */
    $imagePath = '';

    if (!is_dir('dirname(__DIR__, 2)/images')) {
        mkdir('dirname(__DIR__, 2);/images');
    }

    if ($image && $image['tmp_name']) {
        $imagePath = './images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }

        $statement = $pdo->prepare("INSERT INTO death_table (d_ssn ,p_ssn, image, name, f_name, g_name, sex ,birth_date, birth_place,death_date)
                VALUES (:d_ssn, :p_ssn, :image, :name, :f_name, :g_name, :sex, :birth_date, :birth_place, :death_date)");

        $statement->bindValue(':d_ssn', $d_ssn);
        $statement->bindValue(':p_ssn', $p_ssn); /* should be queried */
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':f_name', $f_name);
        $statement->bindValue(':g_name', $g_name);
        $statement->bindValue(':sex', $sex);
        $statement->bindValue(':birth_date', $birth_date);
        $statement->bindValue(':birth_place', $birth_place);
        $statement->bindValue(':death_date', $death_date);
        $statement->execute();
        header('Location: _death.php'); 

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Death registration page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat&family=Open+Sans:wght@700&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="./style/style.css">
    <script defer src="script/script_add_death.js"></script>
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

    <!--  form for death -->
    <?php if (isset($_SESSION['ssn'])) {?>

    <div class="container">
        <div id="error-div"></div>
        <form method="post" id="myForm" enctype="multipart/form-data">

            <fieldset class="fieldset">
                <legend class="legend">Put Death personal info here</legend>

                <div class="part">
                    <label for="image">Image </label> <br>
                    <input class="input" style="border:none" type="file" name="image" id="image">
                </div>

                <!-- content one is here -->
                <div class="content-one">
                    <div class="part">
                        <label for="name">Name </label><br>
                        <input class="input" type="text" name="name" id="name">
                    </div>

                    <div class="part">
                        <label for="f_name">Father Name </label> <br>
                        <input class="input" type="text" name="f_name" id="f_name">
                    </div>

                    <div class="part">
                        <label for="g_name">Grand father Name </label> <br>
                        <input class="input" type="text" name="g_name" id="g_name">
                    </div>

                </div>

                <!-- content two is here -->
                <div class="content-two">

                    <div class="part">
                        <label for="ssn">SSN </label><br>
                        <input class="input" type="text" name="ssn" id="ssn">
                    </div>

                    <div class="part">
                        <label for="birth_date">Birth Date </label> <br>
                        <input class="input" type="date" name="birth_date" id="birth_date">
                    </div>

                    <div class="part">
                        <label for="birth_place">Birth Place</label> <br>
                        <input class="input" type="text" name="birth_place" id="birth_place">
                    </div>

                </div>


                <!-- content three is here -->
                <div class="content-three">
                    <div class="part">
                        <label for="death_date">Death Date</label> <br>
                        <input class="input" type="date" name="death_date" id="death_date">
                    </div>
                </div>


                <div class="part part-gender">
                    <label for="sex">Sex</label>
                    <div class="one">

                        <div>
                            <input type="radio" name="sex" value="M" id="male"> Male <br>
                        </div>

                        <div>
                            <input type="radio" name="sex" value="F" id="female"> Female <br>
                        </div>
                    </div>

                </div>

                <input class="input" type="submit" id="submit">
            </fieldset>
        </form>

    </div>
    <?php } else {?>


    <div class="please-login">
        <p> Please log in first </p>
        <a id="please-link" href="_login.php"> Go to log in page</a>
    </div>
    <?php }?>


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