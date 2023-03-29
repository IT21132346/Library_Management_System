<?php

include 'config.php';

session_start();

unset($_SESSION["librarianname"]);
header("Location:loginAsLibrarian.php");
?>