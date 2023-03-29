

<!DOCTYPE html>
<html>
  <head>
		 <title>Sagacious Library</title>
		 <link rel="shortcut icon" href="images/1111.png" />
		 <link rel="stylesheet" type="text/css" href="css/login.css">
		 <link rel="stylesheet" type="text/css" href="css/Header.css">
		 <link rel="stylesheet" type="text/css" href="css/footer.css">
		 <script src="js/showpassword.js"></script>
		 
  </head>
<body style = "background-color:grey; height : 300px ;background-image:url(images/glx3.jpg);background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">

 <?php

$servername="localhost";
	$username="root";
	$password="";
	$dbname="lms";


// Create connectionS
$conn = new mysqli($servername, $username, $password,$dbname);

session_start();
if(isset($_POST['login']))
{
if(!empty($_POST['librarianname'])&& !empty ($_POST ['password'])){
    $librarianname= $_POST ['librarianname'];
    $password=  $_POST ['password'];

    
    
    $sql="SELECT * FROM librarian WHERE librarianname='$librarianname'AND password='$password'";
   

    $result = mysqli_query($conn,$sql);
	$row=mysqli_num_rows($result);
    if(!$row = mysqli_fetch_assoc($result))
    {
        echo "you have entered incorrect password";
        exit();
    }
    else
	{
        $_SESSION ['librarianname']= $librarianname;
        echo "you have succesfully logged in" ;
        header("location:librarianProfilenew.php");
        exit(); 
    }
}
}

?>
 

	<nav>
			<div class="btna ">
				<a href="../sonali/loginselector1.html"><button class="btn" name="button1"><b>Login</b></button></a>
			</div>
			
			<a class="login" href=""><img id="logo" src="images/1111.png" alt="logo"></a>

	    <ul class="navigation">
          <li><b><a id="nav1" href="../pasindu/Home1.html">Home</a></b></li>
          <li><b><a id="nav1" href="../sonali/collection.html"> Collection</a></b></li>
          <li><b><a id="nav1" href="../navinga/aboutus.php">About Us</a></b></li>
          <li><b><a id="nav1" href="../malith/search.php">search </a></b></li>
        </ul>
	</nav>
	
		<!--background image-->
	<img  src="images/lgpic10.jpeg" alt="contentbg" style = "width : 50%">
	
	

<div class="loginbox" style = "left:75% ;top: 100%;">

<h2>Login as Librararian</h2>

<form method="POST" action="librarianProfilenew.php">
		<label><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="librarianname" required>
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


<div style = "margin-top : -650px">
<footer class= "s-footer">
	<div>
	<center><img id="logo" src="1111.png" alt="logo"></center>
	
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
	
	<hr/>
	<center>
	<p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">SAGACIOUS</a>.
            </p>
			</center>
	</footer>
	</div>

 </body>
 </html>