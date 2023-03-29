
<?php
  $servername="localhost";
	$username="root";
	$password="";
	$dbname="lms";


// Create connectionS
$connection = new mysqli($servername, $username, $password,$dbname);

  $assistantname = $_POST['assistantname'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM assistant WHERE assistantname='$assistantname' AND password='$password'";
  $result = mysqli_query($connection, $sql);
  


if (!$row = mysqli_fetch_assoc($result)){
echo "<script>alert('Your username or password is incorrect!'); window.location='loginassistant.php';</script>";
} else {?> <script>alert('You are logged in!')</script>
<?php
}
?>
<html>
	<head>
	<title>Sagacious Library</title>
	<link rel="shortcut icon" href="image/lg.jpg" />
		<link rel="stylesheet" href="css/Header.css">
		<link rel="stylesheet" href="css/verticle_nav_eb.css">
		<link rel="stylesheet" href="css/contentLA.css">
		<link rel="stylesheet" href="css/footerprof.css">
		
		
	</head>

	<body style = "background-color:grey; height : 300px ;background-image:url(image/la.jpg);background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
	


	
	
	<!--Header-->
	<nav >
	<div class="btna ">

<a href="loginselector.html"><button class="btn" name="button1"><b>Logout</b></button></a>
</div>
        
        
		<a class="login" href=""><img id="logo" src="image/lg.jpg" alt="logo"></a>

        <ul class="navigation" style = "margin-top: 20px;">
          < <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.html">search </a></b></li>
        </ul>
    </nav>
	
	<br>
	

	
	
	
	<!--verticle Navigation Bar-->
	<div class="side" style = "margin-top: -25px;">
		<ul class="side">
			<li><a class="side" href="assistantProfile.php" >Profile</a></li>
			<li><a class="side" href="Addbooks.php">Add books</a></li>
			<li><a class="side" href="managebooks.php" >Manage books</a></li>
			<li><a class="side" href="returnbooks.php" >return books</a></li>
			<li><a class="side" href="showreturnedbooks.php" > show return books</a></li>
			<li><a class="side" href="acceptre.php" > accept book requests</a></li>
			
			
		</ul>
	</div>
	
	
	
	
	<div class="content">
	<div style = "position:relative;top:60px;color:goldenrod;font-size:48px;"><center><b>Library Assistant </b></center></div>	
		<img src="user.png" alt="user.png">
		<div class="container" style = "background-color: rgba(0,0,0,0.3);">
			<form method="POST" action="updateassistant.php">

							
			    <label class="ab" for="uid">assistant ID&emsp;&nbsp; &nbsp;: </label>				
				<input class="cd" style="margin-left:56px" type="text"  id="uid" name="assistantID"  value="<?php echo $row['assistantID'] ?>"readonly> </br>
				
				
				<label class="ab" for="uname">assistant name : </label> 				
				<input class="cd" style="margin-left:53px" type="text" value="<?php echo $row['assistantname'] ?>" id="uname" name="assistantname" ></br>		
				
				<label class="ab" for="email">Email &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: </label>				
				<input class="cd" style="margin-left:56px" type="email" value="<?php echo $row['email'] ?>"  id="email" name="email"> </br>	
				
				
				<label class="ab" for="mobile">Mobile number &nbsp;: </label>				
				<input class="cd" style="margin-left:50px" type="text" value="<?php echo $row['mobile'] ?>"  id="mobile" name="mobile"> </br>
				
				
				
				<div class="gh">
				<input type = "submit" name = "update" class="btn" value = "update">

				</div>
			</form>
		</div>
	</div>

</div>
</div>
<!--footer section-->
	<footer class= "s-footer">
	<div>
	<center><img id="logo" src="lg.jpg" alt="logo"></center>
	
	<div class="row">
	
	<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	       <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="collection.html"> Collection</a></b></li>
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
	
	<div class = "col" style="color:grey;">
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
	<p class="copyright-text ; color:grey;">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">SAGACIOUS</a>.
            </p>
			</center>
	</footer>
	</body>
 </html>