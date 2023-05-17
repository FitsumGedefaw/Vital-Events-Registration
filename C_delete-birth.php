<?php

// connect the datase
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=vital_registration_database', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$b_ssn=$_POST['delete'] ?? null;
if(!$b_ssn){
    header("Location: _birth.php");
    exit;
}

// delete from the database
$statement = $pdo->prepare('DELETE FROM birth_table WHERE b_ssn = :b_ssn');
$statement->bindValue(':b_ssn', $b_ssn);
$statement->execute();
header('Location: _birth.php');

?>