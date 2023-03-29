<!DOCTYPE html>
<html>
 <head>
 <title>Sagacious Library</title>
 <link rel="shortcut icon"  href="images/1111.png" />
		<link rel="stylesheet" href="css/Header.css">
        <link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/content.css">
		<link rel="stylesheet" href="css/forgotpassword.css">
		
		
        <script src="js/showpassword.js"></script>
 </head>
 <body style=" background-image:url(images/library.jpg); background-repeat: no-repeat;background-size: cover;background-attachment: fixed;"">

 <?php
	include_once 'config.php';
	error_reporting(0);
	?>
	
	
<?php
        if(isset($_POST['submit'])){
	      $email = $_POST["email"];
	
	    $sql= "INSERT INTO forgotpassword(email)VALUES('$email')";
        if(mysqli_query($connection,$sql)){
          echo "<script>alert('Inserted successfully')</script>";
        }
         else{
        echo "<script>alter('error,records not added')</script>";
        }
		
		mysqli_close($connection);
		}
			
		?>
 
 
 <!-------------------Header------------------->	
 <nav>
        <a class="login" href=""><img id="logo" src="images/1111.png" alt="logo"></a>

        <ul class="navigation">
          <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
        </ul>
    </nav>

<div class="loginboxx">
<form method="POST" action="forgotpassword.php">
<img class="pic" src="images/forgot.png">
<h1 class="heading" style="color:white;">Forgot password?</h1>
<label class="ab" for="email" style="color:white;">Email : </label>				
<input class="cd" type="email" id="email" name="email" style="width:270px;" ></br>
<input type="submit" class="bttn" value="submit" name="submit">

</div>
</form>




</BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR>

<!------------------footer section--------------------->
	<footer class= "s-footer">
	<div>
	<center><img id="logo" src="images/1111.png" alt="logo"></center>
	
	<div class="row">
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	      <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="aboutus.php">About Us</a></b></li>
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
	<li>Email : sagaciouslibrary@gmail.com</li>
	<li>Phone : +94012345656</li>
	<li></li>
	</ul>
	</div>
	
	<div class = "col">
	<h3>Connect us</h3>
	<div class = "row">
	<ul>
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