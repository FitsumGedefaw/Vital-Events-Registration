<?php
session_start();

// destroy all sessions created before
unset($_SESSION['ssn']);
unset($_SESSION['email']);
unset($_SESSION['pass']);
unset($_SESSION['name']);

header("Location:../index.php")
?>