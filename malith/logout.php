<?php
include ('config.php');

session_start();
session_destroy();
header("location:../sonali/loginselector1.php");

$conn->close();

?>