<!DOCTYPE html>
<html>
 <head>
 <title>Sagacious Library</title>
 <link rel="shortcut icon"  href="images/1111.png" />
		<link rel="stylesheet" href="css/Header.css">
        <link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/about.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	     
    </head>
	
	
<!-------------------Header------------------->	
<nav>
        <div class="btna ">
<a href="../malith/register1.php"><button class="btn" name="button1"><b>Register</b></button></a>
<a href="../sonali/loginselector1.html"><button class="btn" name="button1"><b>Login</b></button></a>
</div>
        
		<a class="login" href=""><img id="logo" src="images/1111.png" alt="logo"></a>

        <ul class="navigation">
          <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
        </ul>
    </nav>

    <body style="background-color:black;">
	<video width="45%" height="430px" align="left" controls autoplay>
	<source src="v2.mp4" type="video/mp4"></video>
	<div id="bottom"><div class="round-bottom"><b><div id="about1">About Us</div></b>
 
    
	<div class="loginbox1" style="position:absolute;height:310px;">
    <blockqoute><span><p>Welcome to the SAGACIOUS library! At Reading,our library provide vital support for students, researchers and staff, complementing academic activities. 
	We arrange access to the world of information – whether online, multimedia or in print – and the training and support to exploit it to the full. Come and make the most of us!,
	and remember you are always welcome to contact our librarians for assistance</p></span></blockqoute></span>
    </div></div>
 
    <div class="loginbox2">
 <h1><b><center>Why choose us ? </center></b></h1></br>
<p>Our library is a life-long learning center for our community and a place where people turn to for the discovery of ideas.We empower our community to imagine possibilities engage
 in creative exploration and uncover deeper understanding of themselves and the world around them.</p>
 </div>
 
 <div class="loginbox3">
 <h1><b><center>Our mission and team </center></b></h1></br>
 <p>The mission of the 'sagacious' public library is to welcome and support all the people in their enjoyment of reading , 
	to make readily available the most wanted library materials 
	to all those who use the library,to serve as an access point for any needed information and to provide the services freely or at an affortable cost.</p>
 </div>

 </div>
 
 	<?php
	include_once 'config.php';
	
	?>
	
	
<?php
        if(isset($_POST['submit'])){
	      $id = $_POST["id"];
		  $rate = $_POST["rate"];
	
	    $sql= "INSERT INTO rating(id,rate)VALUES('','$rate')";
        if(mysqli_query($connection,$sql)){
          echo "<script>alert('Rated successfully')</script>";
        }
         else{
         echo "<script>alert('Rating was not added')</script>";
        }
		
		mysqli_close($connection);
		}
			
		?>
	
 
 
 
 <form  method="POST" action="aboutus.php">
 <div id="box">
 <h1 style="position:relative; left:750px; font-size:40px; top:150px;"><b>What do you think about Us ?</b></h1>
 <div class="emoji">
    <label for="btn1">😡</label>
    <input type="radio"  name="rate" value="worst" id="btn1">
	
	<label for="btn2">😑</label>
	<input type="radio"  name="rate" value="bad" id="btn2">
	
	<label for="btn3">😐</label>
	<input type="radio"  name="rate" value="average" id="btn3">
	
	<label for="btn4">😀</label>
	<input type="radio"  name="rate" value="happy" id="btn4">
	
	<label for="btn5">😍</label>
	<input type="radio"  name="rate" value="satisfied" id="btn5">
	
	<input class="sbtn" type="submit" value="submit" name="submit">
	</div>
	</form>

	
	
 </BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR></BR>
	
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