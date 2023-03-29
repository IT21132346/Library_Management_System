<?php
  $servername="localhost";
	$username="root";
	$password="";
	$dbname="lms";


// Create connectionS
$conn = new mysqli($servername, $username, $password,$dbname);

  $librarianname = $_POST['librarianname'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM librarian WHERE librarianname='$librarianname' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  

 
  if (!$row = mysqli_fetch_assoc($result)){
    echo "<script>alert('Your username or password is incorrect!'); window.location='loginAsLibrarian.php';</script>";
	
} else {?>

    <script>alert('You are logged in!')</script>
	<?php
	
	}
	?>


<html>
<head>
	<title>Sagacious Library</title>
	<link rel="shortcut icon" href="images/1111.png" />
		<link rel="stylesheet" href="css/Header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/lfooter.css">
		<link rel="stylesheet" href="css/verticle_nav.css">
		<link rel="stylesheet" href="css/content.css">
	</head>





<body style=" background-image:url(images/img1.jfif); background-repeat: no-repeat;background-size: cover;background-attachment: fixed;backdrop-filter: blur(5px);">






	
	<!--Header-->
	<nav >
         <div class="btna ">
            <a href="logout.php"><button class="btn" name="button1"><b>Logout</b></button></a>
        </div>
        
		<a class="login" href=""><img id="logo" src="images/lg.jpg" alt="logo"></a>

        <ul class="navigation">
           <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
        </ul>
    </nav>
	
	<br>
	

	
	
	
	<!--verticle Navigation Bar-->
	<div class="side" style = "margin-top: -27px;">
		<ul class="side">
			<li><a class="side" href="librarianProfilenew.php" >Profile</a></li>
			<li><a class="side" href="Add_Staff.php">Add clerk</a></li>
			<li><a class="side" href="Add_assistant.php">Add assistant</a></li>
			<li><a class="side" href="manageclerk.php" >Manage clerk</a></li>
			<li><a class="side" href="manageassistant.php" >Manage assistant</a></li>
			<li><a class="side" href="issuebook.php" >Issue Books</a></li>
			
		</ul>
	</div>
	
	


<!--user Profile section-->
<div class="content">
<div style="position:relative;top:60px; font-size:30px;color:#43302E;"><h2><center><b>Librarian profile</b></center></h2></div>
<img src="images/user.png" alt="user.png">
<div class="container">
<form method="POST" action="libupdate.php">

				<label class="ab" for="uid">librarian ID : </label>
				<input class="cd" style="margin-left:78px" type="text" id="uid" name="librarianID" value="<?php echo $row['librarianID'] ?>" readonly> </br>

				<label class="ab" for="uname">librarian name : </label>
				<input class="cd" style="margin-left:53px" type="text" id="uname" name="librarianname" value="<?php echo $row['librarianname'] ?>" > </br>


				<label class="ab" for="mobile">Mobile number : </label>
				<input class="cd" style="margin-left:24px" type="text" id="mob_number" name="mobile" value="<?php echo $row['mobile'] ?>" > </br>

				<label class="ab" for="email">Email : </label>
				<input class="cd" style="margin-left:91px" type="email" id="email" name="email" value="<?php echo $row['email'] ?>" ></br>




                <div class="gh">
				<button class="btned" name="btned" >Edit Profile</button></a>
				</div>
			
</form>
</div>
</div>



<!--footer section-->
<footer class= "s-footer">
<div>
<center><img id="logo" src="images/1111.png" alt="logo"></center>

<div class="row">

<div class = "col">
	<h3>Contact us</h3>
	<ul class = "footerlinks">
	       <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
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
<li>Email :</li>
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

