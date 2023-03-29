<?php

require_once('inc/config.php');

session_start();


if(isset($_POST['login']))//when click login button
{
	//check is it empty
	if(!empty($_POST['username'])&& !empty ($_POST ['password']))
	{
		$username= $_POST ['username'];
		$password= $_POST ['password'];

    $sql="SELECT * FROM user WHERE username='$username'AND password='$password'";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_num_rows($result);
	
        if(!$row = mysqli_fetch_assoc($result))
		{
			echo "you have entered incorrect password";
			exit();
		}
		else
		{
			$_SESSION ['username']= $username;
			echo "you have succesfully logged in" ;
			header("location:userprofile1.php");
			exit();
		}
	}
}


?>


<html>
	<head>
	<title>Sagacious Library</title>
		<link rel="shortcut icon"  href="images/1111.png" />
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="styles/Header.css">
		<link rel="stylesheet" href="styles/footeruserlogin.css">
		<link rel="stylesheet" href="styles/verticle_nav.css">
		<link rel="stylesheet" href="styles/content.css">
		<link rel="stylesheet" href="styles/userlogin.css">
		<script src="js/showpassword.js"></script>
	</head>

	<body style="background-color:#fff5ee;">
		
	
	<!--Header-->
	<nav>
        <div class="btna ">
            <a href="../malith/register1.php"><button class="btn" name="button1"><b>Register</b></button></a>
            <a href="Userlogin.php"><button class="btn" name="button1"><b>Login</b></button></a>
        </div>
        
		<a class="login" href=""><img id="logo" src="images/lg.jpg" alt="logo"></a>

        <ul class="navigation">
          <li><b><a id="nav1" href="Home1.html">Home</a></b></li>
			<li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
			<li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
			<li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
        </ul>
    </nav>
	
	
	
	<img class="contentbg1" src="images/contentbg3.jpg" alt="contentbg3">
	

	
	<div class="container1">
		<form method="POST" action="userprofile1.php">
			<label class="ab" for="uname">User Name: </label> 				
			<input class="cd" style="margin-left:53px" placeholder="Enter User Name" type="text" name="username" required></br>		
				
			<label class="ab" for="password">Password : </label>				
			<input class="cd" style="margin-left:57px" placeholder="password" type="password" id="pw" name="password" required> </br></br>
			
			<div class="sp">
				<input type="checkbox" onclick="showpassword()" id="cbox">
				<label id="showpass">Show Password</label></br>
				<a href="forgotpassword.html">Forgot password?</a>
			</div>
				</br>
			<button class="btnsb" name="login">Login</button>
		</form>
	</div>
	
	
	<!--footer section-->
	<footer class= "s-footer">
	
	<center><img id="logo" src="images/lg.jpg" alt="logo"></center>
	
	<div class="row">
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	      <li><b><a id="nav1" href="Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
	</ul>
	</div>
	
	<div class = "col">
	<h3>Useful links</h3>
	<ul class = "footerlinks">
	<li><a href ="http://www.natlib.lk/">National Library of Sri Lanka</a></li>
    <li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">The Library Campaign</a></li>
    <li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">Room to Read</a></li>
    <li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">Pasific Atrocities Education</a></li>
    <li><a href ="https://asiafoundation.org/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaHJ_6jE3ZXrnLQXgjWy1OyuJKMNo5dWUd0DhZWDYbKUPOUNFkB1mnBoC2fgQAvD_BwE">The Asia Foundation</a></li>
	</ul>
	</div>
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	<li>Email :</li>
	<li>Phone : +94012345656</li>
	<li></li>
	</ul>
	</div>
	
	<div class = "col">
	<h3>Connect us</h3>
	<div class = "row">
	<ul>
             <!--w3school-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <a href="https://www.facebook.com/profile.php?id=100073239021466" class="fa fa-facebook"></a>
            <a href="https://twitter.com/SagaciousLibra1" class="fa fa-twitter"></a>
			<a href="https://www.instagram.com/sagacious_library/" class="fa fa-instagram"></a>
    </ul>
	</div>
	</div>
	</div>	
	
	<hr/>
	<center>
	<p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">SAGACIOUS</a>.
            </p>
			</center>
	</footer>
	</body>
</html>