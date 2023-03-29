<?php



include 'config.php';



session_start();
unset($_SESSION["clerk"]);

header("Location:loginclerk.php");
?>