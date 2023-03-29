
	
<?php
require_once('config.php');
session_start();


$sql = "SELECT * FROM clerk WHERE clerkname ='$_SESSION[clerk]'";
$result = mysqli_query($connection,$sql);
$rows = mysqli_num_rows($result);



if($rows>0)
{
$array = mysqli_fetch_assoc($result);
}



$connection -> close();
?>



	
	<!DOCTYPE html>
<html>
 <head>
 <title>Sagacious Library</title>
<link rel="shortcut icon"  href="images/1111.png" />
		<link rel="stylesheet" href="css/Header.css">
        <link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/verticle_nav.css">
		<link rel="stylesheet" href="css/content.css">
		<link rel="stylesheet" href="css/userprofile.css">

	</head>

	<body style="background-image:url('images/contentbg.jpg'); background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">


	<!-------------------Header------------------->	
	<nav>
        <div class="btna ">
            <a href="logout.php"><button class="btn" name="button1"><b>Logout</b></button></a>
        </div>
        
        
		<a class="login" href=""><img id="logo" src="images/1111.png" alt="logo"></a>

        <ul class="navigation">
          <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
        </ul>
    </nav>
	
	
	
	
	
	<!------------verticle Navigation Bar---------->
	<div class="side">
		<ul class="side">
			<li><a class="side" href="userprofile.php" >Profile </a></li>
			<li><a class="side" href="addauthor.php">Add author</a></li>
			<li><a class="side" href="#" >Manage author</a></li>
			<li><a class="side" href="showissuedbooks.php" >Show issued Books</a></li>
			
		</ul>
	</div>
	
	
	<!--user Profile section-->
	<div class="content">
	<div style="position:relative;top:60px; font-size:20px;"><h2><center><b>Library clerk profile</b></center></h2></div>
		<img src="images/user.png" alt="user.png">
		<div class="container">
			<form method="POST" action="manageclerk.php">
		
				<label class="ab" for="uid">User ID : </label>				
				<input class="cd" style="margin-left:78px" type="text" id="uid" name="clerkID" value="<?php echo $array['clerkID']; ?>" readonly > </br>
				
				<label class="ab" for="uname">User name : </label> 				
				<input class="cd" style="margin-left:53px" type="text" id="uname" name="clerkname" value="<?php echo $array['clerkname']; ?>" > </br>
				
				
				<label class="ab" for="mobile">Mobile number : </label>				
				<input class="cd" style="margin-left:24px" type="text" id="mob_number" name="mobile" value="<?php echo $array['mobile']; ?>" > </br>
				
				<label class="ab" for="email">Email : </label>				
				<input class="cd" style="margin-left:91px" type="email" id="email" name="email" value="<?php echo $array['email']; ?>" ></br>
				
				<label class="ab" for="password">Password : </label>				
				<input class="cd" style="margin-left:91px" type="password" id="password" name="password" value="<?php echo $array['password']; ?>" ></br>
				
				
				
				
				<div class="gh">
				<button class="btned" name="btned" >Edit Profile</button></a>
				</div>
			</form>
		</div>
	</div>
	<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
	
	
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