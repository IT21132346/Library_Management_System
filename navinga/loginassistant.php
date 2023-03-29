<!DOCTYPE html>
<html>
 <head>
 <title>Sagacious Library</title>
 <link rel="shortcut icon"  href="images/1111.png" />
		<link rel="stylesheet" href="css/Header.css">
        <link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/content.css">
		<link rel="stylesheet" href="css/loginassistant.css">
	    <script src="js/showpassword.js"></script>
 </head>
 
 <body style="background-image:url('images/imgg.png')">
 
 
 
<?php

require 'config.php';
session_start();
if(isset($_POST['login']))
{
if(!empty($_POST['assistantname'])&& !empty ($_POST ['password'])){
    $assistantname= $_POST ['assistantname'];
    $password=  $_POST ['password'];

    
    
    $sql="SELECT * FROM assistant WHERE assistantname='$assistantname'AND password='$password'";
   

    $result = mysqli_query($connection,$sql);
	$row=mysqli_num_rows($result);
    if(!$row = mysqli_fetch_assoc($result))
    {
        echo "you have entered incorrect password";
        exit();
    }
    else
	{
        $_SESSION ['assistantname']= $assistantname;
        echo "you have succesfully logged in" ;
        header("location:../sonali/assistantProfile.php");
        exit(); 
    }
}
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
	
	
	
	
 
  <div class="loginbox">
  <h2>Login as Library Assistant</h2>
 <form method="POST" action="../sonali/assistantProfile.php">
<label><b>Username</b></label>
 <input type="text" placeholder="Enter Username" name="assistantname" required>
 </BR> </BR>
<label><b>Password</b></label>
 <input type="password" placeholder="Enter Password" name="password" id="pass" required>        
<input type="checkbox" onclick="showpassword()" id="cbox">
 <label id="showpass">Show Password</label>
 <a href="forgotpassword.php">Forgot password?</a>
 </BR></BR>
 <center><button name="login" value="login" type="submit">Login</button><center>
</form>
</div>
</div>





 </BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR>

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