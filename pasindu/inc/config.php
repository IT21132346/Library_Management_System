<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="lms";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//Check connection
if($conn->connect_error){
	die("Connection faild:".$conn->connect_error);
}
//echo "Connected successfully";

?>