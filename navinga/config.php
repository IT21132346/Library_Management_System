<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="lms";
 
/* Attempt to connect to MySQL database */
$connection = new mysqli($servername,$username,$password,$dbname);
 
// Check connection
if($connection ->connect_error){
    die("ERROR: Could not connect. " . $connection->conect_error);
}

?>