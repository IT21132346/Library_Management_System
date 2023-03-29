<?php
include_once 'config.php';
?>
	



<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" type="text/css" href="css/forgotpassword.css">
 </head>
<body style=" background-image:url(images/g.jfif); background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">

	
 <div>
 <form method = "POST">
 <img src="images/forgotpass.png">
 <h1>Forgot password?</h1>
 Enter Your Email<input type="email" placeholder="Enter Email" name="email" style = "color:white;" required>
 <center><button type="submit" name = "submit">Reset password</button><center>
 </form>
 </div>
 <?php
if(isset($_POST["submit"]))
{
		
		$email = $_POST["email"];

		$sql = "INSERT INTO forgotpassword(email) VALUES ('$email')";
		
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Email Added successfully')</script>";
			header("location:loginAsLibrarian.php");
		}
		else
		{
			echo "<script>alert('Error : Email are not added')</script>";
		}
		
	mysqli_close($conn);
  
}
?>
 </body>
 </html>