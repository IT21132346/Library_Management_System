

<!DOCTYPE html>
<html>
	<head>
	<title>Sagacious Library</title>
		<link rel="stylesheet" href="styles/Header.css">
		<link rel="stylesheet" href="styles/footerreg.css">
		<link rel="stylesheet" href="styles/register.css">
	    <script src="js/myscript.js"></script>
		
		
	</head>

	<body style="background-color:#fff5ee;">
		
	
	<!------------------------------------------Header---------------------------------------------------------------------->
	
	<nav>
        <div class="btna ">
           
            <a href="../pasindu/userlogin.php"><button class="btn" name="button1"><b>Login</b></button></a>
        </div>
        
		<a class="login" href=""><img id="logo" src="images/lg.jpg" alt="logo"></a>

        <ul class="navigation">
          <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html">Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
		  <li><b><a id="nav1" href="search.php">Search </a></b></li>
        </ul>
    </nav>
	
	<!------------------------background image------------------------------------------------------------------------------->
	
	
	<img class="registerbg" src="images/registerbg.jpg" alt="registerbg">
	

	
	
	
	<!---------------------------------------------------------------user register------------------------------------------->
	
	
	<div class="content">
	<label class="mc" >User Registration</label><br>
	
	
        <div class="container">
        <form action="adduser.php" method="POST">
		
		
				
				<label class="ab" for="fullname">Full Name : </label> 				
				<input class="cd" style="margin-left:80px" type="text" id="fullname" name="fullname" required></br>		
				
				<label class="ab" for="email">Email : </label>				
				<input class="cd" style="margin-left:119px" type="email" id="email" name="email"required> </br>	
				
				<label class="ab" for="create_pw">Create Password : </label>				
				<input class="cd" style="margin-left:20px" type="password" id="create_pw" name="password"required > </br>
				
				<label class="ab" for="renter_pw">Re-Enter Password : </label>				
				<input class="cd" style="margin-left:5px" type="password" id="renter_pw" name="renter_pw"required > </br>
				
				
				<label class="ab" for="tnumber">Telephone Number : </label>				
				<input class="cd" style="margin-left:7px" type="text" id="tnumber" name="mobile"required> </br>
				
				<br>
                <p><input style="margin-left:208px" type="checkbox" name="privacy"required><b> I agree terms and conditions and privacy policy</a>.</p>
				
				
			
				<br>
                 <p><center> Already have an account? <a href="../pasindu/userlogin.php">log in</a>.</p><br>
				
				
				<div class="ab">
				<input style="margin-left:158px" <input type="submit" value="Submit" id="submit" name="submit"><br>
				</div>
			</form>
		</div>
	    </div>
	
	
	<!----------------------------------------------footer section---------------------------------------------------------->
	
	
	<footer class= "s-footer">
	<div>
	<center><img id="logo" src="images/lg.jpg" alt="logo"></center>
	
	<div class="row">
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	      <li><b><a id="nav1" href="">Home</a></b></li>
          <li><b><a id="nav1" href=""> Collection</a></b></li>
          <li><b><a id="nav1" href="">About Us</a></b></li>
          <li><b><a id="nav1" href="">search </a></b></li>
	</ul>
	</div>
	
	<div class = "col">
<h3>Useful links</h3>
<ul class = "footerlinks">
		<li><a href ="http://www.natlib.lk/">National Library of Sri Lanka</a></li>
		<li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">The Librari Campaign</a></li>
		<li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">Room to Read</a></li>
		<li><a href ="https://librarycampaign.com/publicity-tools/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaDYJUVoJnCd4b4e8HvjcM3l2-olA5iRQV5Iz8IvAJtZitaMPBkFoVhoCpiQQAvD_BwE">Pasific Atrocities Education</a></li>
		<li><a href ="https://asiafoundation.org/?gclid=CjwKCAjwzOqKBhAWEiwArQGwaHJ_6jE3ZXrnLQXgjWy1OyuJKMNo5dWUd0DhZWDYbKUPOUNFkB1mnBoC2fgQAvD_BwE">The Asia Foundation</a></li>
</ul>
</div>
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	<li>Email :sagaciouslibrary@gmail.com</li>
	<li>Phone : +94012345656</li>
	<li></li>
	</ul>
	</div>
	
	<div class = "col">
	<h3>Connect us</h3>
	<div class = "row">
	<ul>
	<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Add font awesome icons -->
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