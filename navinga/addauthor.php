<!DOCTYPE html>
<html>
 <head>
 <title>Sagacious Library</title>
 <link rel="shortcut icon"  href="images/1111.png" />
		<link rel="stylesheet" href="css/Header.css">
        <link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/verticle_nav.css">
		<link rel="stylesheet" href="css/content.css">
		<link rel="stylesheet" href="css/addauthor.css">
		
  
 </head>
 
 <body style="background-image:url('images/c6.jpg'); background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
	
	<?php
	include_once 'config.php';
	error_reporting(0);
	?>
	
	
<?php
        if(isset($_POST['submit'])){
		  $authorname = $_POST["authorname"];
	
	    $sql= "INSERT INTO author(authorID,authorname)VALUES('','$authorname')";
        if(mysqli_query($connection,$sql)){
          echo "<script>alert('Author added successfully')</script>";
        }
         else{
        echo "<script>alert('Author was not added')</script>";
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
	
	
	
	
	
	<!----------verticle Navigation Bar---------->
	<div class="side" >
		<ul class="side">
			<li><a class="side" href="userprofile.php" >Profile </a></li>
			<li><a class="side" href="#">Add author</a></li>
			<li><a class="side" href="manageauthor.php" >Manage author</a></li>
			<li><a class="side" href="showissuedbooks.php" >Show issued Books</a></li>
			
		</ul>
	</div>
	<!--Add Author-->
	<div class="content">
		<img src="images/user.png" alt="user.png">
		<div class="container">
			<form method="POST" action="addauthor.php">
			<label class="ab" for="name" style="color:black;">author name : </label>				
				<input class="cd" style="margin-left:91px" type="text" value="" id="cemail" name="authorname"> </br>
				
				
				<input classs="submit" type="submit" value="submit" name="submit" style="margin-top:25px;margin-left:30px; margin-bottom:20px;">
				</div>
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