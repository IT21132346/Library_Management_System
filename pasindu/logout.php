<?php
include ('inc/config.php');

session_start();
session_destroy();
header("location:loginselector1.php");/*change header location according to your page*/

$conn->close();

?>