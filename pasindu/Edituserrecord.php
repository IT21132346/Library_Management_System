<?php

include_once ('inc/config.php');

?>

<?php


if($_GET['save'])
{
	$userID= $_GET['userID'];
	 $username = $_GET['username'];
	 $mobile = $_GET['mobile'];
	 $email = $_GET['email'];
	 $password = $_GET['password'];
	 
	 
	 
	 $query = "UPDATE user SET username = '$username' ,mobile='$mobile',email='$email',password ='$password' WHERE userID = '$userID'";
	 
	 $data = mysqli_query($conn,$query);
	 
	 if($data){
		 
		 echo "<script>alert('Record update sucsessfully')</script>";
		 header("location:Userlogin.php");
	 }
	 else
	 {
		 echo "<script>alert('Error in updating record')</script>";
	 }
	 }
	 

mysqli_close($conn);

?>